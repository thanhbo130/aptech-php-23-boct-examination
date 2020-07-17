@extends('layout.master')
@section('title','CRUD-index')
@section('content')
<div class="mt-3 mb-3">
@component('layout.components.title')
Create page
@endcomponent
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
        <form action="{{route('articles.store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea rows="5" cols="50" id="description" name="description"></textarea>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea rows="50" cols="50" id="content" name="content"></textarea>
        </div>
        
        <div>
            <button type="submit">submit</button>
        </div>
    </form>

    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
        </div>
    </div>
</div>
@endsection