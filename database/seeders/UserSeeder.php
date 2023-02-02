<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user=[
            'id' => 2,
            'name' => 'Admin',
            'email' => 'admin@sonca.com.vn',
            'password' =>Hash::make('sonca@2022'),
        ];

        $check=User::create($user);
        Log::debug($check);
    }
}
