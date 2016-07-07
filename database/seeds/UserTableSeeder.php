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
        factory(Acl\User::class)->create([
            'name'  => 'Duilio',
            'email' => 'admin@styde.net',
            'password' => bcrypt('admin'),
        ]);
        factory(Acl\User::class, 10)->create();
    }
}
