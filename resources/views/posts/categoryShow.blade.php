@extends('layouts.layuot')

@section('content')
    <!-- ----------------------------------MAIN SECTION------------------------------- !-->
    <div class="text-center container">
        <h3>{{$costCategory->cat_type}}</h3>
        <form action="/category/{{$costCategory->id}}/edit" method="GET" class="form">
            @csrf
            <button class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection