@extends('layouts.layuot')

@section('content')

    <div class="container errors text-center">
        @foreach($errors->all() as $error)
            <ul class="error-text">
               {{$error}}
            </ul>
            @endforeach
    </div>

<div class="container notes-add">
    <h3 class="add-post">Adding new post</h3>

    <section id="adding">
        <form action="/posts" method="POST">
            @csrf

        <div class="input-group mb-3 adding">
            <input type="text" name="title" class="form-control" placeholder="Title" required value="{{old('title')}}">
        </div>

        <div class="input-group-prepend adding-text">
            <textarea name="text" id="" cols="30" rows="15" class="form-control" placeholder="Enter text..." required>{{old('text')}}</textarea>
        </div>

            <button class="btn btn-light post" type="submit">Post</button>
        </form>

</div>



</section>

@endsection
