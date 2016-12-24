<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        // empty posts table
        \App\Post::truncate();

        // insert 100 records in posts table
        factory(App\Post::class, 100)->create();

        // inform table is seeded
        $this->command->info('Post Table Seeded');
    }
}
