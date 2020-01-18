@extends ('layouts.layuot')

@section('content')
    @foreach($costPerDay as $costs)
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-4 costs">
                <a href="/cost/{{$costs->id}}/edit"><h5>Cost:</h5>
                {{$costs->cost}} zł</a>
            </div>
            <div class="col-lg-4 costs">
                <a href="/cost/{{$costs->id}}/edit"><h5>Date:</h5>
                {{$costs->date}}</a>
            </div>
            <div class="col-lg-4 costs">
                <a href="/cost/{{$costs->id}}/edit"><h5>Category:</h5>
                {{$categories[($costs->id_cat)-1]->cat_type}}</a>
            </div>
        </div>
    </div>
    @endforeach
    <div class="text-center">
        <h3>Total:</h3>
{{--        {{$summPerDay[0]->cost}} zł.--}}
        {{$summPerDay}}
    </div>
@endsection