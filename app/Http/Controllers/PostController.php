<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use App\Category;

class PostController extends Controller
{
    public function showListPost() {
        $posts = Post::all();
        return view('list', ['posts' => $posts]);
    }

    public function showAddFormPost() {
        $categories = Category::all();
        $users = User::all();
        return view('post.addForm', ['categories' => $categories, 'users' => $users]);
    }

    public function added(Request $request) {
        $post = new Post();
        $post->title = $request->input('title');
        echo $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category');
        $post->user_id = $request->input('user');
        $post->save();
        return redirect(route("post.list"));
    }

    public function showFormUpdate(Request $request, $id) {
        $post = Post::find($id);
        $categories = Category::all();
        $users = User::all();
        return view('post.edit', ['post' => $post, 'categories' => $categories, 'users' => $users]);
    }

    public function updated(Request $request, $id) {
        $post = Post::find($id);
        $post->title = $request->input('title');
        echo $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category');
        $post->user_id = $request->input('user');
        $post->save();
        return redirect(route("post.list"));
    }

    public function showDelete(Request $request, $id) {
        $post = Post::find($id);
        return view('post.delete', ['post' => $post]);
    }

    public function deleted(Request $request, $id) {
        $post = Post::find($id);
        $post->delete();
        return redirect(route("post.list"));
    }

    public function search(Request $request) {
        $key =$request->input('search');
        $result = Post::where('title', 'like', "%$key%")->orwhere('content', 'like', "%$key%")->get();
        echo $result;
        if($result === "") {
            return view('nofind', ['result' => $result]);
        } else {
            return view('post.find', ['result' => $result]);

        }
    }
}
