<?php

namespace App\Services;

use App\Models\Manager;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ManagerService
{
    public function register(array $data)
    {
        // Validate the data (could be done in the controller or a separate validator class)
        $this->validate($data);

        // Create a new manager record
        $manager = Manager::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Optionally log in the manager
        Auth::guard('manager')->login($manager);

        return $manager;
    }

    protected function validate(array $data)
    {
        // Perform validation logic
        $validator = validate::make($data, [
            'email' => 'required|email|unique:managers,email',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            throw new \Illuminate\Validation\ValidationException($validator);
        }
    }
}
