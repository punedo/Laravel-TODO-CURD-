@extends('layouts.app')


@section('content')

    @if(session('success'))
         <div class="alert alert-success mt-lg-5">
             {{session('success')}}
         </div>
        @endif
<div class="container mt-lg-5">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Operation</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>
                    <a class="btn btn-primary btn-small" href="{{route('edit',$post->id)}}">Edit</a>
                    <a class="btn btn-danger btn-small" href="{{route('delete',$post->id)}}">Delete</a>

                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
<div>
@endsection
