<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Sujet;
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
        Category::factory(10)->create();

        User::factory(10)->create()->each(function ($user) {
            Sujet::factory(2)->create([
                'user_id' => $user->id,
                'category_id' => rand(1, 10)
            ]);
        });
    }
}
