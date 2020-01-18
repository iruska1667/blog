@extends('layouts.layuot')

@section('content')

<!-- ----------------------------------MAIN SECTION------------------------------- !-->
<section id="main-section">

<div class="container notes-add">
    <h3 class="add-post">Editing</h3>

    <section id="adding">
        <form action="/coments/{{$coment->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="input-group-prepend adding-text">
                <textarea name="text" cols="10" rows="15" class="form-control" placeholder="Enter text...">{{$coment->text}}</textarea>
            </div>
            <button class="btn btn-light update" type="submit">Update</button>
        </form>

</div>



</section>


@endsection