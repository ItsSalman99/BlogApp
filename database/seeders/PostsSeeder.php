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
        Post::create([
            'title' => 'What is React Native?',
            'summary' => "React Native lets you create truly native apps and doesn't compromise your users' experiences.",
            'description' => "React Native is an open-source UI software framework created by Meta Platforms, Inc. It is used to develop applications for Android, Android TV, iOS, macOS, tvOS, Web, Windows and UWP by enabling developers to use the React framework along with native platform capabilities.",
            'img' => 'eximg.jpg',
            'user_id' => 2
        ]);
        Post::create([
            'title' => 'What is Asp.Net?',
            'summary' => "Build web apps and services that run on Windows, Linux, and macOS using C#, HTML, CSS, and JavaScript.",
            'description' => "ASP.NET is an open-source, server-side web-application framework designed for web development to produce dynamic web pages. It was developed by Microsoft to allow programmers to build dynamic web sites, applications and services.",
            'img' => 'eximg.jpg',
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'What is MVC?',
            'summary' => "MVC is a design pattern used to decouple user-interface (view), data (model), and application logic (controller).",
            'description' => "The Model-View-Controller (MVC) is an architectural pattern that separates an application into three main logical components: the model, the view, and the controller. Each of these components are built to handle specific development aspects of an application. MVC is one of the most frequently used industry-standard web development framework to create scalable and extensible projects.",
            'img' => 'eximg.jpg',
            'user_id' => 1
        ]);
        
    }
}
