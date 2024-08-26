<?php

namespace App\Filament\Auth;

use App\Enums\UserRole;
use Filament\Pages\Auth\Register;
use Illuminate\Database\Eloquent\Model;

class CustomRegister extends Register
{
    protected function handleRegistration(array $data): Model
    {
        $user = $this->getUserModel()::create($data);
        $user->assignRole(UserRole::USER);

        return $user;
    }
}
