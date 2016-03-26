<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [   'first_name' => 'BRIS',
            'last_name' => 'Admin',
            'middle_name' => '',
            'email' => 'admin@brisgis.com',
            'password' => bcrypt('brisgis'),
            'capability' => 'Admin',
        ],
        [   'first_name' => 'BRIS',
            'last_name' => 'User',
            'middle_name' => '',
            'email' => 'user@brisgis.com',
            'password' => bcrypt('brisgis'),
            'capability' => 'User',
        ]
        ]);
    }
}
