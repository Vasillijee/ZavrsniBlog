<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }

    public function index(){
        $posts = Post::latest()->get();
        return view('userSide.blog' , compact('posts'));
    }

    public function create(){
        return view('createblog');
    }

    public function store(Request $request){
        $request->validate([

            'title'=> ['required','string','max=255'],
            'short_description'=>'required',
            'picture'=>'reqiure | file',
            'slug'=> '',
            'content'=>'required',]);

        $title = $request->input('title');
        $postId= Post::latest()->take(1)->first()->id+1;
        $slug = Str::slug($title,'-') . '-' . $postId;
        $user_id= Auth::use()->id;
        $content= $request->input('content');

        // File Upload
       $picture= 'storage/' . $request->file('picture')->store('postPicture' , 'public');

       $post = new Post();
       $post->title = $title;
       $post->slug = $slug;
       $post->short_description = $short_description;
       $post->user_id = $user_id;
       $post->content = $content;
       $post->title = $title;
       $post->picture = $picture;

       $post->save();

       return redirect()->back()->with('status','Post Created Succesfully!');}

    public function show(Post $post){
        return view('userSide.blogshow', compact('post'));}

    public function edit(Post $post){
       
        if(auth()->user()->id !== $post->user->id){
            abort(403);
        }
        return view('userSide.blogedit', compact('post'));}

    
    public function update(Request $request, Post $post){
            $request->validate([
    
                'title'=> ['required','string','max=255'],
                'short_description'=>'required',
                'picture'=>'reqiure | file',
                'slug'=> '',
                'content'=>'required',]);
    
            $title = $request->input('title');
            $postId= $post->id;
            $slug = Str::slug($title,'-') . '-' . $postId;
            $content= $request->input('content');
    
            // File Upload
           $picture= 'storage/' . $request->file('picture')->store('postPicture' , 'public');
    
           $post->title = $title;
           $post->slug = $slug;
           $post->short_description = $short_description;
           $post->content = $content;
           $post->title = $title;
           $post->picture = $picture;
    
           $post->save();
    
           return redirect()->back()->with('status','Post Edted Succesfully!');}
    

        public function delete(Post $post){
            $post->delete();
            return redirect()->back()->with('status','Post Deleted Succesfully');
        }

}
