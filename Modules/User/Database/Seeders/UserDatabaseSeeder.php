<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->insert([
            'row_id' => Str::uuid(),
            'username' => 'admin',
            'password' => Hash::make('password'),
            'firstname' => 'Admin',
            'lastname' => 'Istrator',
            'email' => 'admin@istrator.de',
        ]);

        DB::table('users')->insert([
            'row_id' => Str::uuid(),
            'username' => 'admin2',
            'password' => Hash::make('password'),
            'firstname' => 'Admin2',
            'lastname' => 'Istrator2',
            'email' => 'admin@istrator.de',
        ]);
    }
}
