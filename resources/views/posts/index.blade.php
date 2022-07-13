@extends('layouts.app')
@section('content')
<ul>
@foreach($posts as $post)
<li >
    <div>{{  $post->id  }}</div>

    <div>{{  $post->title  }}<div>

        <div>{{  $post->content}}</div>

        <div>
    <form action="{{ route('posts.destroy',['post'=> $post->id]) }}" method= "POST">
       
        @csrf
        @method('delete')
        <input type="submit" value="Delete">
    </form>
    </div>
    <div>
        <a href="{{ route('posts.edit',['post' => $post->id]) }}">Edit</a>
    </div>
</li>


@endforeach
</ul>
@endsection


