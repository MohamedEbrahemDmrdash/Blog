@extends('user/app')

@section('photo-content',asset('user/img/home-bg.jpg'))

@section('title-content','Home Page')

@section('title-info','About Blog')

@section('body-content')
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($post as $posts)
        <div class="post-preview">
          <a href="{{ route('post',$posts->slug) }}">
            <h2 class="post-title">
              {{$posts->title}}
            </h2>
            <h3 class="post-subtitle">
              {{$posts->subtitle}}
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            {{$posts->created_at->diffForHumans()}}</p>
        </div>
        @endforeach

        <hr>
        
        <!-- Pager -->
        <div class="clearfix">
          {{ $post->links()}}
        </div>
      </div>
    </div>
  </div>

  <hr>
@endsection
