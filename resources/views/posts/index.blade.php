@extends('layouts.layuot')

@section('content')
<!-- ----------------------------------ABOUT SECTION------------------------------- -->

<section id="about">
    <div class="container text-center">
        <div class="row">

            <div class="col-lg-4">
                <i class="far fa-file-code features-icons fa-2x"></i>
                <h3>What am I doing?</h3>
                <p class="about-info">Hey. I'm Bohdan and I am a web developer from Gdynia, Poland.</p>
            </div>
            <div class="col-lg-4">
                <i class="fas fa-football-ball fa-2x"></i>
                <h3>My Hobbies.</h3>
                <p class="about-info">I love to spend time with computer. It's my passion, but also I like to play computer games.</p>
            </div>
            <div class="col-lg-4">
                <i class="fas fa-list-ul fa-2x"></i>
                <h3>My plans.</h3>
                <p class="about-info">Now I want to get the work that I dreamed on. Be the best husband, and the father in the future.</p>
            </div>

        </div>
    </div>
</section>

<!-- ----------------------------------MAIN SECTION------------------------------- -->
@foreach($post as $post)
<section id="main-section">
    <div class="container text-center">
        <div class="notes">

            <p class="date">Added: {{$post->created_at}}</p>
            <a href="/posts/{{$post->id}}"><h3 class="note-title">{{$post->title}}</h3></a>
            <p class="note-text">{{$post->text}}</p>

        </div>
    </div>
</section>
@endforeach

<!-- ----------------------------------CONTACT SECTION------------------------------- !-->

<section id="contact">
    <div class="container">
        <!-- <i class="fas fa-comments fa-3x contacts"></i> -->
        <h3 class="contacts">Contact Me</h3>
        <div class="row text-center">

            <div class="col-lg-4">
                <a href="https://www.facebook.com/profile.php?id=100010496795437"><i class="fab fa-facebook-f fa-2x"></i></a>
            </div>

            <div class="col-lg-4">
                <a href="https://github.com/Deodathus"><i class="fab fa-github fa-2x"></i></a>
            </div>

            <div class="col-lg-4">
                <a href="https://vk.com/boood1k"><i class="fab fa-vk fa-2x"></i></a>
            </div>

        </div>
    </div>

</section>

@endsection

