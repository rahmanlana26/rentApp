<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Register as BaseRegister;
use Illuminate\Database\Eloquent\Model;

class Register extends BaseRegister
{
    protected function handleRegistration(array $data): Model
    {
        $user = parent::handleRegistration($data);
        
        // Pastikan role Customer ada di database, jika tidak maka buat baru.
        \Spatie\Permission\Models\Role::firstOrCreate(['name' => 'Customer', 'guard_name' => 'web']);
        
        $user->assignRole('Customer');
        
        return $user;
    }
}
