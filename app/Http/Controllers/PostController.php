<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){
        return view('admin.posts.index');
    }
    public function show(Post $post){
        return view('blog-post', ['post'=>$post]);
    }
    public function create(){
        return view('admin.posts.create');
    }
    public function store(Request $request){
        $request->validate([
            'title'=> 'required|min:8|max:225',
            'body' => 'required'
        ]);

        $user = $request->user();
        if($request->post_image){
            $post = new Post;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->post_image = $request->input('post_image');
            $post->user_id = $user->id;
            $post->save();
        }
        return back();
    }
}
