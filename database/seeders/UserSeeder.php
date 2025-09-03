<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleAdmin = Role::find(1);
        $roleMember = Role::find(2);

        $admin = User::create([
            'name' => 'Dede Rusliandi',
            'username' => 'admin',
            'email' => 'administrator@eduthings.com',
            'password' => bcrypt('77422424')


        
        ]);

        $admin->assignRole($roleAdmin);

        $admin = User::create([
            'name' => 'Dede Rusliandi',
            'username' => 'dederusliandi',
            'email' => 'dede.rusliandi1@gmail.com',
            'password' => bcrypt('77422424'),
            'github' => 'github.com/dederusliandi98',
            'instagram' => '@dederusliandi_',
            'about' => 'Fullstack Developer & Trainer'
        ]);

        $admin->assignRole($roleAdmin);

        $admin = User::create([
            'name' => 'rifki',
            'username' => 'rifki_admin',
            'email' => 'admin123@eduthings.com',
            'password' => bcrypt('rifki123')
        ]);

        $admin->assignRole($roleAdmin);

        User::create([
            'name' => 'Aditya Herlambang',
            'username' => 'aditya',
            'email' => 'aditya@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Agung Abdillah',
            'username' => 'agung',
            'email' => 'agung@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Setiawan Rohman A',
            'username' => 'setiawan',
            'email' => 'setiawan@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Della Fadila Rahmawati',
            'username' => 'della',
            'email' => 'della@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Endah Astria',
            'username' => 'astri',
            'email' => 'astri@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Rifki Herdiansyah',
            'username' => 'rifki',
            'email' => 'rifki@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Febrian Hermansyah',
            'username' => 'febrian',
            'email' => 'febrian@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Muhammad Faisal',
            'username' => 'faisal',
            'email' => 'faisal@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Adnan Dermawan',
            'username' => 'adnan',
            'email' => 'adnan@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Mulyadi',
            'username' => 'mulyadi',
            'email' => 'mulyadi@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Haidar Harim',
            'username' => 'haidar',
            'email' => 'haidar@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Defal Muhammad Raihan',
            'username' => 'defana',
            'email' => 'defana@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Raihan Muhammad Firdauz',
            'username' => 'raihan',
            'email' => 'raihan@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Taniya Yuliawati',
            'username' => 'taniya',
            'email' => 'taniya@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Kintan Anggraeni',
            'username' => 'kintan',
            'email' => 'kintan@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Rena Permatasari',
            'username' => 'rena',
            'email' => 'rena@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Iqbal Mujib',
            'username' => 'iqbal',
            'email' => 'iqbal@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Syahna Amalia',
            'username' => 'syahna',
            'email' => 'syahna@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Radhika Firmansyah',
            'username' => 'radhika',
            'email' => 'radhika@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Muhamad Angga',
            'username' => 'angga',
            'email' => 'angga@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Dindin Nurdin',
            'username' => 'dindin',
            'email' => 'dindin@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Argi Abdillah',
            'username' => 'argi',
            'email' => 'argi@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Billy Syahputra',
            'username' => 'billy',
            'email' => 'billy@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Muhammad Anwar',
            'username' => 'anwar',
            'email' => 'anwar@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Ahmad Hidayat',
            'username' => 'ahmad',
            'email' => 'ahmad@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Muhammad Alfikri',
            'username' => 'alfikri',
            'email' => 'alfikri@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Hermawan Kurniawan',
            'username' => 'hermawan',
            'email' => 'hermawan@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Pudja Ismail',
            'username' => 'pudja',
            'email' => 'pudja@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Hendi Ismaidi',
            'username' => 'hendi',
            'email' => 'hendi@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Indriyanti',
            'username' => 'indriyanti',
            'email' => 'indriyanti@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Santi Dwiyanti',
            'username' => 'santi',
            'email' => 'santi@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Jaka Permana',
            'username' => 'jaka',
            'email' => 'jaka@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Shiddiq Faturahman',
            'username' => 'shiddiq',
            'email' => 'shiddiq@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);

        User::create([
            'name' => 'Muhamad Saepudin',
            'username' => 'saepudin',
            'email' => 'saepudin@mail.com',
            'password' => bcrypt('12345678')
        ])->assignRole($roleMember);
    }
}
