@extends('layouts.layout_main')
@section('content')
    <div class="container">
        @foreach ($get_posts as $post)
        <div class="row">
            <div class="col">
                <x-cards.cmp_crd_main_card :getPost="$post"/>
            </div>
        </div>
        <br><br><br> 
        @endforeach
    </div>
@endsection()

