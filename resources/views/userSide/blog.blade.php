@extends('layouts.layout')
@section('header')
      <!-- Page Header-->
      <header class="masthead" style="background-image: url('{{asset('assets/img/post-bg.jpg')}}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>Man must explore, and this is exploration at its greatest</h1>
                        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                        <span class="meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on August 24, 2022
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('main')
     <!-- Main Content-->
     <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @foreach ($posts as $post)
                  <!-- Post preview-->
                <div class="post-preview">
                  @auth
                  @if(auth()->user()->id === $post->user->id)
                  <div class="post-buttons"></div>
                  <a href="{{route('blog.edit', $post)}}">Edit</a>
                  <form action="{{route('blog.delete',$post)}}" method="">
                    @csrf
                      <input type="submit" value="Delete">
                  </form>
                  @endauth
                    <img src="{{asset($post->picture)}}" alt="">
                    <a href="{{route('blog.show')}}">
                        <h2 class="post-title">{{$post->title}}</h2>
                        <h3 class="post-subtitle">{{$post->short_description}}</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">{{$post->user}}</a>
                        {{$post->published_at->diffForHumans}}
                    </p>
                </div>
         </div>
    </div>
</div>
@endforeach
@endsection
<div class="d-flex justify-content-center">
    {!!  $posts->links('pagination::bootstrap-4') !!}
</div>
@section('footer')
<footer class="light blue">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a target="_blank" href=https://twitter.com/KonatarVasilije">
                                    <span class="fa-stack">
                                        <i class="fas fa-square fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a target="_blank" href="https://github.com/Vasillijee">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-square fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a target="_blank" href="https://www.instagram.com/_v.konatar/">
                                    <span class="fa-stack">
                                        <i class="fas fa-square fa-stack-2x"></i>
                                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                                    </span>
                        </a>
                    </li>
                </ul>
                <h6 class="text-center text-black-50"><small>Copyright &copy; Your Website 2022</small></h6>
            </div>
        </div>
    </div>
</footer>
@endsection

