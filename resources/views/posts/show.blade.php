@extends('layouts.layuot')

@section('content')

<!-- ----------------------------------MAIN SECTION------------------------------- -->

    <section id="main-section">
    <div class="container text-center">
        <div class="notes">

            <p class="date">Update at: {{$post->updated_at}}</p>
                <h3 class="note-title">{{$post->title}}</h3>

            <p class="note-text">{{$post->text}}</p>

            @if (Auth::id() == 1)
            <form action="/posts/{{$post->id}}/edit" method="GET" class="form">
                <button class="btn btn-primary">Edit</button>
            </form>
            <form action="/posts/{{$post->id}}" method="POST" class="form">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
                @endif

        </div>

        <div class="coments">
            @foreach($post->coments as $coment)
            <div class="coment-user-info">
                    <p class="coment-text">
                        <?php
                        echo $users[($coment->user_id - 1)]->name;
                        ?>
                    </p>
            </div>
                <div class="coment">
                    <p class="coment-text">{{$coment->text}}</p>

                    @if (Auth::id() == $coment->user_id || Auth::id() == 1)
                    <form action="/coments/{{$coment->id}}/edit" method="GET" class="form">
                        @csrf
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>

                    <form action="/coments/{{$coment->id}}" method="POST" class="form">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                        @endif
                </div>
            @endforeach

            @if(!empty(Auth::user()->id))
            <form action=" /posts/{{$post->id}}/coments " class="write-coment" method="POST">
                @csrf
                <div class="input-group-prepend adding-text">
                    <textarea name="text" cols="30" rows="5" class="form-control" placeholder="Enter your comment"></textarea>
                </div>

                <button class="btn btn-light post" type="submit">Comment</button>
            </form>
                @endif
            @if(empty(Auth::user()->id))
                    <div class="input-group-prepend adding-text">
                        Log In to leave a comment
                    </div>
                @endif
    </div>


    </section>

@endsection
