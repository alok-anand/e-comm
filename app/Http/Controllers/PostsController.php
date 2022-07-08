<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePost;
use App\Models\Post;

//use App\Models\Post;

Class PostsController extends Controller
{

  public function index(){
      
    return view('posts.index');
  }
  public function show($id){
    
    $post = Post::find($id);
    
    return view('posts.show',['post'=> $post]);

  }

  public function create(){
      
    return view('posts.create');
  }

  public function edit($id){
      
    //return view('posts.index');
  }
  public function store(StorePost $request){ 
  // if Request is Passed 
  //   $validated = $request->validate([
  //     'title' => 'required|min:5',
  //     'content' => 'required',
  // ]);
  // Store Post is Request Class Created using make command
  // For  Storing Request Params
  
    $validated = $request->validated();
   
      $post = new Post();    
      $post->title =  $validated['title'];
      $post->content =  $validated['content'];
      $post->save();

      //for mass asignment
      //saving the content in database
      //Post::create();//no need to save, you need to define in your model fillable array
      //Post::make();// you need to save, only instance is created 
      //$model->fill ()method
      
      session()->flash('status','The Post was saved');
      
     return redirect()->route('posts.show',['post'=> $post->id]);
  
  }

  public function distroy($id)
  {

  }
  public function update(){
 
    // return view('posts.index');
  }

}