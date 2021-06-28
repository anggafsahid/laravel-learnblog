@extends('layouts.layout_main')
@section('content')
    <div class="container bg-white">
        <h4 class="display-4">Title {{ $post_title }}</h4>
        <div class="image">
            <img src="{{ $post_image }}" class="img-fluid" style="height: 350; width: auto;">
        </div>
        <div class="container page" style="max-width: 800px">
            <div class="creator pt-2">
                <p class="lead">
                    {{ $post_contributor }}
                </p>
            </div>
            <div class="post-text" style="font-size: 20px">
                <p class="text-justify">{{ $post_content_text }}</p> 
            </div>
        </div>
        <br><br><br><br>
    </div>
<div>
@endsection()

