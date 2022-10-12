<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;




class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=> 'wahyu fajar robyansyah',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('123456'),
            'kontak' => '082247477770',
            'alamat' => 'malang',
            'role' => 'admin',
            'id_jabatan' => '01'

        ]);

        
    }
}
