@extends('layouts.app')
@section('content')
<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <div><input type="text" name ="title" value="{{ old('title') }}"></div>
    @error('title') {{ $message }}@enderror
    <div><input type="textarea" name ="content" value="{{ old('content') }}" ></div>
    @error('content') {{ $message }} @enderror
    <div><input type="submit" value="Create"></div>
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
