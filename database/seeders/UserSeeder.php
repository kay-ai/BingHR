<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Bing',
            'email' => 'admin@binghr.com',
            'username' => 'admin.binghr',
            'phone' => '08070000000',
            'employee_id' => 'BIN78921',
            'role' => 'super_admin',
            'email_verified_at' => now(),
            'password' => Hash::make('pass1234'),
            'avatar' => 'https://ui-avatars.com/api/?background=random&name=Admin+Bing&size=128',
            'remember_token' => 'DjMl12evDuDdGFxd1J6iUuOmUynYFRkH5Gz7rsMEVyiHVgBnScQQmQ68lY7n',
        ]);
        User::factory()
            ->count(15)
            ->create();
    }
}
