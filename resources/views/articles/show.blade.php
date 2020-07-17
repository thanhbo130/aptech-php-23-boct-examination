@extends('layout.master')
@section('title','CRUD-index')
@section('content')
<div class="mt-3 mb-3">
@component('layout.components.title')
show page
@endcomponent
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
        <table class ="table table-hover table-bordered">
            <thead class=" thead-dark text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Description</th>
                    <th scope="col">Content</th>
                    <th scope="col">Handel</th>
                </tr>
            </thead>
            <tbody >
               
                <tr>
                    <th class ="text-center"scope="row">{{$article->id}}</th>
                    <td>{{$article->title}}</td>
                    <td>{{$article->slug}}</td>
                    <td>{{$article->description}}</td>
                    <td>{{$article->content}}</td>
                    <td class=" d-flex justify-content-around align-items-center">
                        <form action="{{route('articles.edit',$article->id)}}" method="get">
                            <button class="btn btn btn-sm"title="Edit"><span class=" text-warning"><i class="fas fa-user-edit"></i></span></button>
                        </form>
                        <form action="{{route('articles.destroy',$article->id)}}" method ="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="delete">
                            <button class="btn btn btn-sm" title="Delete"><span class="text-danger"><i class="fas fa-trash"></span></i></button>
                        
                        </form>
                    </td>
                </tr>
             
                
            </tbody>
        </table>

    </div>
</div>

@endsection 