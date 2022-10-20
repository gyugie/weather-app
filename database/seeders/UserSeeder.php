<?php

namespace Database\Seeders;

use App\Models\Merchant;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Admin User */
        User::factory()->create([
            'name'  =>  'Prodia Administrator',
            'email' =>  'admin@prodia.com',
            'role'  =>  'super_admin'
        ]);

        User::factory(3)->create();
    }
}
