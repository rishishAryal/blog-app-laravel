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

        User::truncate();
        Category::truncate();
        Post::truncate();

          $user = User::factory()->create();

          $personal = Category::create([
             'name'=>'Personal',
              'slug'=>'personal'

          ]);

  $family =  Category::create([
            'name'=>'Family',
            'slug'=>'family'

        ]);
  $work= Category::create([
      'name'=>'Work',
      'slug'=>'work'

        ]);

  Post::create([
      'user_id'=>$user->id,
      'category_id'=>$personal->id,
      'title'=>'My personal post',
      'slug'=>'my-first-post',
      'excerpt'=>'Lorem ipsum dolar sit.',
      'body'=>'hello how are you and what are you doing'
  ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$family->id,
            'title'=>'My family post',
            'slug'=>'my-second-post',
            'excerpt'=>'Lorem ipsum dolar sit.',
            'body'=>'hello how are you and what are you doing'
        ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$work->id,
            'title'=>'My work post',
            'slug'=>'my-third-post',
            'excerpt'=>'Lorem ipsum dolar sit.',
            'body'=>'hello how are you and what are you doing'
        ]);
//         \App\Models\Post::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
