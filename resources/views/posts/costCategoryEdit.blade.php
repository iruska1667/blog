@extends('layouts.layuot')

@section('content')

    <!-- ----------------------------------MAIN SECTION------------------------------- !-->
    <div class="container errors text-center">
        @foreach($errors->all() as $error)
            <ul class="error-text">
                {{$error}}
            </ul>
        @endforeach
    </div>

    <div class="container notes-add">
        <h3 class="add-post">Editing the category</h3>

        <section id="adding">
            <form action="/category/{{$costCategory->id}}" method="POST" class="form">
                @csrf
                @method('PATCH')
                <div class="input-group mb-3 adding">
                    <input name="type" class="form-control" placeholder="Category" value="{{$costCategory->cat_type}}" required>
                </div>
                <button class="btn btn-light update">Update</button>
            </form>
        </section>
    </div>

@endsection

