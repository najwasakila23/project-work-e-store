<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'id' => '1',
            'email' => 'user@gmail.com',
            'photo' => 'photo.jpg',
            'name' => 'user',
            'address' => 'banjarsari veteran lll',
            'noTelp' => 83876663605,
            'status' => 0,
            'role' => 'user',
            'idKecamatan' => 1,
            'idToko' => 1,
            'email_verified_at' => null,
            'password' => bcrypt('1234'),
        ]);

        

    }
}
