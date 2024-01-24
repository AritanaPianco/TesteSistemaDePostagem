<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class EventController extends Controller
{
    
    public function index(){
       
        $posts = Post::all();
        return view('posts', [
            'posts' => $posts
        ]);
        
    }
 
    public function addpost(){
        return view('addPost'); 
     
    }
 
    public function destroy($id){
              
       Post::findOrFail($id)->delete();
 
       return redirect("/")->with('msg', 'Post excluido com sucesso!');
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
