<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePost;
use App\Models\Post;

//use App\Models\Post;

Class PostsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth.basic');
  }  
  


  public function index(){
      
    $posts = Post::all();
    return view('posts.index',['posts'=> $posts]);
  }
  public function show($id){
   
    $post = Post::findorfail($id);
    return view('posts.show',['post'=> $post]);

  }

  public function create(){
      
    return view('posts.create');
  }

  public function edit($id){
   
    $post = Post::findOrFail($id);  
    return view('posts.edit',['post'=> $post]);
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
      
     return redirect()->route('posts.show',['post' =>  $post->id]);
  
  }

  public function destroy($id)
  {
    $post = Post::findorfail($id);
    
    $post->delete();

    session()->flash('status','Post Deleted Successfully');
    
    return redirect()->route('posts.indexp');
  }
  public function update(StorePost $request, $id ){
    
    $post = Post::findorfail($id);

    $validated = $request->validated();
    
    $post->fill($validated);

    $post->save();
    
    session()->flash('status','The Post was updated');
    
    return redirect()->route('posts.show',['post' => $post->id]);
  }

}