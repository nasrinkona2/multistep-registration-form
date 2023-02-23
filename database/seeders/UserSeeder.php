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
     */
    public function run(): void
    {
        $user = User::where('email', 'nasrinkona2@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "Nasrin Kona";
            $user->first_name = "Nasrin";
            $user->last_name = "Kona";
            $user->contact_no = "01770402960";
            $user->alt_contact_no = "01770402960";
            $user->email = "nasrinkona2@gmail.com";
            $user->password = Hash::make('12345678');
            $user->save();
        }
    }
}
