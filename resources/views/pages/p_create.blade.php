@extends('layouts.layout_main')
@section('content')
    <div class="container">
        <h3>Create New Post</h3>
        <div class="card shadow">
            <div class="card-body d-flex flex-column" style="height:46rem">
                <form method="post" action="{{ url("/create/insert") }}">
                    @csrf
                    <h4>Title:</h4>
                    <input class="form-control" name="post_title" type="text"><br>
                    <h4>Body</h4>
                    <textarea name="post_text" id="text_editor" style="height:500px;">Hello, World!</textarea><br>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary justify-item-end" style="width: 100px">Post</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
<div>
<script>
    tinymce.init({
        selector: '#text_editor'
    });
</script>
@endsection()


