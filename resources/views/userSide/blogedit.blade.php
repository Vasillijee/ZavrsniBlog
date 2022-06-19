@extends('layouts.adminlayout')

@section('content')

<main class="container" style="background-color: aliceblue">
<section id="contact">
    @forelse ( as $item)
        
    @empty
        
    @endforelse
    <h1 style="padding-top:  50px">Edit Blog</h1>
    @if (session('status'))
    <p style="background-color: aquamarine ; width:100;>
    {{session('status')}}
    </p>
        
    @endif
    <div class="contact-form">
        <form action="{{route('blog.update', $post)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
        @csrf
        <label for="title"><span>Title</span></label>
        <input type="text" id="title" name="title" value="{{$post->title}}">

        @error('title')
            <p style="color: red; margin-bottom;25px">{{$message}}</p>
        @enderror
        
        <label for="short_description"><span>Short description</span></label>
        <input type="text" id="short_description" name="short_desciription" value="{{$post->short_description}}}">

        @error('short_description')
        <p style="color: red; margin-bottom;25px">{{$message}}</p>
    @enderror

        <label for="picture"><span>Picture</span></label>
        <input type="file" id="picture" name="picture">

        @error('picture')
        <p style="color: red; margin-bottom;25px">{{$message}}</p>
    @enderror

        <label for="content"><span>Content</span></label>
       <textarea name="content" id="tinymce" >{{old('content')}}</textarea>
        
       @error('content')
       <p style="color: red; margin-bottom;25px">{{$message}}</p>
   @enderror
   
        
        
        
        
        </form>
    </div>
</section>
</main>
@endsection