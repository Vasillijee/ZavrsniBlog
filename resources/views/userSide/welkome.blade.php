@extends('layouts.layout')
@section('header')
     <!-- Page Header-->
     <header class="masthead" style="background-image: url('{{asset('assets/img/home-bg.jpg')}}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
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
                @endforeach
                <!-- Post preview-->
                <div class="post-preview">
                    <a class="postcard__img_link" href="{{route('blog.show', $post->slug)}}">
                        <img class="postcard__img" src="{{$post->postImage()}}" alt="Image Title" />
                    </a>
                        <h2 class="post-title">{{$post->title}}</h2>
                        <h3 class="post-subtitle">{{$post->short_description}}</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">{{$post->user->name}}</a>
                        {{$post->published_at->diffForHumans}}
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-outline-primary text-uppercase" href="{{route('blog')}}">Older Posts →</a></div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
     <!-- Footer-->
     <footer class="light blue">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a target="_blank" href=https://twitter.com/KonatarVasilije>
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

@section('scripts')
     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Core theme JS-->
     <script src="{{asset('js/scripts.js')}}"></script>
@endsection

