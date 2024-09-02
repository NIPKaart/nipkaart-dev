<?php

namespace App\Filament\Auth;

use App\Enums\UserRole;
use App\Models\User;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Auth\Register;
use Illuminate\Database\Eloquent\Model;

class CustomRegister extends Register
{
    protected function handleRegistration(array $data): Model
    {
        $user = $this->getUserModel()::create($data);
        $user->assignRole(UserRole::USER);

        // Send notification to admin
        $admins = User::role(UserRole::ADMIN)->get();
        foreach ($admins as $admin) {
            Notification::make()
                ->info()
                ->title('Account created')
                ->body('Someone has created an account on NIPkaart, with email: '.$user->email)
                ->actions([
                    Action::make('markAsRead')
                        ->button()
                        ->markAsRead(),
                ])
                ->sendToDatabase($admin);
        }

        return $user;
    }
}
