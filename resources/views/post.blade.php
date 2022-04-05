@extends('layouts.app')

@section('content')
 <div class="container">
     <form class="mt-lg-5" method="POST" action="{{route('save')}}">
         @csrf
         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Title</label>
             <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
         <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label">Description</label>
             <input type="text" name="description" class="form-control" id="exampleInputPassword1">
         </div>

         <button type="submit" class="btn btn-primary">Submit</button>
     </form>
 </div>
@endsection
