<?php

it('can view the home page', function () {
    $this->get(route('home'))
        ->assertSuccessful();
});

it('can view the about page', function () {
    $this->get(route('about'))
        ->assertSuccessful();
});
