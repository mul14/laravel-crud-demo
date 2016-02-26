<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);

        App\User::create([
            'name' => 'Demo User',
            'email' => 'demo@demo.com',
            'password' => bcrypt('demo'),
        ]);

        factory(App\Page::class, 30)->create();
    }
}
