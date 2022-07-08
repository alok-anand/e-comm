@extends('layouts.app')
@section('content')
<ul>
@foreach($posts as $post)
<li >
    <div>{{  $post->id  }}</div>

    <div>{{  $post->title  }}<div>

        <div>{{  $post->content}}</div>

    <form action="{{ route('posts.destroy',['post'=>$post->id]) }}" method= "POST">
       
        @csrf
        @method('delete')
        <input type="submit" value="Delete">
    </form>
</li>

@endforeach
</ul>
@endsection


