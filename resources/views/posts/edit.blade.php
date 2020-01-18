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
    <h3 class="add-post">Editing the post</h3>

    <section id="adding">
        <form action="/posts/{{$post->id}}" method="POST" class="form">
            @csrf
            @method('PATCH')
            <div class="input-group mb-3 adding">
                <input name="title" class="form-control" placeholder="Title" value="{{$post->title}}" required>
            </div>

            <div class="input-group-prepend adding-text">
                <textarea name="text" cols="30" rows="15" class="form-control" placeholder="Enter text...">{{$post->text}}</textarea>
            </div>

                <button class="btn btn-light update">Update</button>
            </form>

    </div>



</section>

@endsection

