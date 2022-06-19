@extends('layouts.layout')
@section('header')
       <!-- Page Header-->
       <header class="masthead" style="background-image: url('{{asset('assets/img/about-bg.jpg')}}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>About Me</h1>
                        <span class="subheading">This is what I do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
  
@endsection

@section('main')
      <!-- Main Content-->
      <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!</p>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('footer')
<footer class="light blue">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a target="_blank" href="https://twitter.com/KonatarVasilije">
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