<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'sexo' => ['required', 'string', 'max:28'],
            'cidade' => ['required', 'string', 'max:128'],
            'uf' => ['required', 'string', 'max:3'],
            'cnpj' => ['required', 'string', 'max:28'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'sexo' => $input['sexo'],
            'cidade' => $input['cidade'],
            'uf' => $input['uf'],
            'cnpj' => $input['cnpj'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
