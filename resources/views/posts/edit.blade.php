@extends('layouts.app')
@section('content')
<form action="{{ route('posts.update',['post'=> $post->id]) }}" method="post">
    @csrf
    @method('PUT')
    <div><input type="text" name ="title" value="{{ old('title',$post->title) }}"></div>
    @error('title') {{ $message }}@enderror
    <div><input type="textarea" name ="content" value="{{ old('content',$post->content )}}" ></div>
    @error('content') {{ $message }} @enderror
    <div><input type="submit" value="Edit"></div>
</form>
@php
//dd($errors);      
@endphp

@if($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error )
            <li>  {{ $error }}</li>
        @endforeach
    </ul>

</div>
@endif
@endsection