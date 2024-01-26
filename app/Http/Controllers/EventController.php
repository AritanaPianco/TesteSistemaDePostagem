<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class EventController extends Controller
{
    
    public function index(){
       
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts', [
            'posts' => $posts
        ]);
        
    }
 
    public function show(){
        return view('addPost'); 
     
    }
 
    public function destroy($id){
              
       Post::findOrFail($id)->delete();
 
       return redirect("/");
    }
 
 
    public function store(Request $request)
    {
        
        $post = new Post;
 
        $post->title = $request->title;
        $post->author = $request->author;
        $post->description = $request->description;
      
 
        $post->save();
        
        return redirect("/");
 
    }


}
