@extends('master')
@section('content')
<div id="myCarousel" class="carousel slide custom-product" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach ($products as $product )
      <div class="item {{ $product-> id == 1 ? 'active':'' }} ">
        <img class="slider-img" src="{{ asset('images/'.$product->gallery ) }}" alt=" {{ $product->name }}" style="width:100%;">
        <div class="carousel-caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->discription }}</p>
          </div>
    </div>
        @endforeach
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" >
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  @endsection