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
        <h3 class="add-post">Editing costs</h3>

        <section id="adding">
            <form action="/cost/{{$cost->id}}" method="POST" class="form">
                @csrf
                @method('PATCH')
                <div class="input-group mb-3 adding">
                    <input name="cost" class="form-control" placeholder="Cost" value="{{$cost->cost}}" required>
                    <input name="date" type="date" class="form-control" placeholder="Cost" value="{{$cost->date}}" required>
                </div>
                <button class="btn btn-primary">Update</button>
            </form>
            <form action="/cost/{{$cost->id}}" method="POST" class="form">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </section>
    </div>

@endsection

