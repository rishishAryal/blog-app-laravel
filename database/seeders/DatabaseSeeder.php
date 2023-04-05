<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use \App\Models\User;
class DatabaseSeeder extends Seeder
{


    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     $user = User::factory()->create([
           'name' => 'Rishish Aryal'
        ]);
Post::factory(15)->create([
    'user_id'=>$user->id
]);

    }
}
