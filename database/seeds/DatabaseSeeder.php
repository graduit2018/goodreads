<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $quan = factory(\App\User::class)->create([
            'name' => 'Quan',
            'email' => 'quan@example.com',
            'password' => bcrypt('secret'),
        ]);
        $nhan = factory(\App\User::class)->create([
            'name' => 'Nhan',
            'email' => 'nhan@example.com',
            'password' => bcrypt('secret'),
        ]);
        $users = factory(App\User::class, 10)->create();
        $books = factory(App\Book::class, 50)->create();

        $quan->books()->attach(
            $books->random(rand(5, 10))->pluck('id')->toArray()
        );
        $nhan->books()->attach(
            $books->random(rand(5, 10))->pluck('id')->toArray()
        );
        $users->each(function ($user) use ($books) {
            $user->books()->attach(
                $books->random(rand(5, 10))->pluck('id')->toArray()
            );
        });
    }
}
