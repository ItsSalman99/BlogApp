<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(8);
        
        return view('posts.index')->with(['posts'=> $posts]);
    }

    public function search(Request $request)
    {
        $user = User::where('name','like','%'.$request->search.'%')->first();


        if ($user == null) {
            $posts = Post::where('title','like','%'.$request->search.'%')->get();
        }
        else{
            $posts = Post::where('title','like','%'.$request->search.'%')
            ->orWhere('user_id','like','%'.$user->id.'%')->get();
        }

        return view('posts.index')->with(['posts'=> $posts]);

    }

    public function create()
    {
        $this->authorize('create-post');

        return view('posts.create');
    }

    public function UserPosts()
    {
        $posts = Post::where('user_id', Auth::user()->id)->get();
        
        return view('dashboard')->with(['posts' => $posts]);
    }

}
