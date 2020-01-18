@extends('layouts.layuot')

@section('content')
    <!-- ----------------------------------MAIN SECTION------------------------------- !-->
    <div class="text-center container">
        @foreach($category as $cat)
            <h3><a href="/category/{{$cat->id}}">{{$cat->cat_type}}</a></h3>
            @endforeach
    </div>

@endsection