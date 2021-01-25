

@extends('user/app')

@section('head')
<link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
@endsection

@section('photo-content',Storage::disk('local')->url($slug->image))

@section('title-content',$slug->title)

@section('title-info',$slug->subtitle)

@section('body-content')

<!-- Post Content -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="b99vE8Qm"></script>


  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small>Created At {{$slug->created_at->diffForHumans()}}</small>
          <div style="margin-left: 350px;display: inline;">
            @foreach ($slug->categories as $category)
              <small style="margin-right: 20px">
                <a href="{{ route('tag',$slug->slug) }}">{{$category->name}}</a>
              </small>
            @endforeach
          </div>
          {!!htmlspecialchars_decode($slug->body)!!}
            <h3>Tag Clouds</h3>
            @foreach ($slug->tags as $tag)
              <a href="{{ route('category',$slug->slug) }}"><small style="margin-right: 20px;border-radius: 5px;padding: 5px;border: 1px solid gray">
                {{$tag->name}}
              </small> </a>
            @endforeach
        </div>
      </div>

      <div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="10"></div>
    </div>
  </article>

  <hr>

@endsection

@section('footer')
<script src="{{ asset('user/js/prism.js') }}"></script>
@endsection