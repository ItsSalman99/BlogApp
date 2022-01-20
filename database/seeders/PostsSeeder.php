<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'How to learn web development?',
            'summary' => 'Web development is the work involved in developing a website for the Internet or an intranet.',
            'description' => "Web developers create and maintain websites. They are also responsible for the site's technical aspects, such as its performance and capacity, which are measures of a website's speed and how much traffic the site can handle. ... They are responsible for the look and functionality of the website or interface.",
            'img' => 'eximg.jpg',
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'What is Laravel?',
            'summary' => 'Laravel is a web application framework with expressive, elegant syntax. ',
            'description' => "Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.",
            'img' => 'eximg.jpg',
            'user_id' => 1
        ]);
    }
}
