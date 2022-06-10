<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

        ]);

        DB::table('settings')->insert([
            'setting_key' => 'auth.default_method',
            'setting_value' => 'default',
        ]);

        DB::table('settings')->insert([
            'setting_key' => 'cis.installation_datetime',
            'setting_value' => Carbon::now()->format("d-m-Y H-i"),
        ]);
    }
}
