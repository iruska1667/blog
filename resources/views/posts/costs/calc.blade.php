@extends('layouts.layuot')

@section('content')
    <!-- ----------------------------------MAIN SECTION------------------------------- !-->
    <section id="calculate">

        <div class="container errors text-center">
            @foreach($errors->all() as $error)
                <ul class="error-text">
                    {{$error}}
                </ul>
            @endforeach
        </div>

        <div class="container">
            <form action="/category/store" method="POST">
                @csrf
                <h3 class="calc-text">Add category</h3>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Enter your category</span>
                    </div>
                    <input type="text" name="category" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary calc-butt">Add</button>
            </form>
        </div>

        <div class="container text-center">
            <h3>Last entry:</h3>
            <div class="row">
                <div class="col-lg-4">
                    <h5>Cost:</h5>
                    {{$lastCost->cost}}zł
                </div>
                <div class="col-lg-4">
                    <h5>Date:</h5>
                    {{$lastCost->date}}
                </div>
                <div class="col-lg-4">
                    <h5>Category:</h5>
                    {{$categories[($lastCost->id_cat)-1]->cat_type}}
                </div>
            </div>
        </div>

        <div class="container text-center">
            <h3>Last updated:</h3>
            <div class="row">
                <div class="col-lg-4">
                    <h5>Cost:</h5>
                    {{$lastUpdatedCost->cost}}zł
                </div>
                <div class="col-lg-4">
                    <h5>Date:</h5>
                        {{$lastUpdatedCost->date}}
                </div>
                <div class="col-lg-4">
                    <h5>Category:</h5>
                    {{$categories[($lastUpdatedCost->id_cat)-1]->cat_type}}
                </div>
            </div>
        </div>

        <div class="container">
            <form action="/cost" method="POST">
                @csrf
                <h3 class="calc-text">Enter your costs</h3>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Enter the value and the date:</span>
                    </div>
                    <input type="text" name="cost" placeholder="Cost" class="form-control" required>
                    <input type="date" name="date" class="form-control" required>
                    <select class="custom-select" name="id_cat">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->cat_type}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary calc-butt">Enter</button>
            </form>
        </div>

        <div class="container">
            <form action="/cost/show" method="GET">
                @csrf
                <h3 class="calc-text">Show costs</h3>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Enter the date:</span>
                    </div>
                    <input type="date" name="date" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary calc-butt">Enter</button>
            </form>
        </div>

        <div class="container">
            <form action="/cost/showpertime" method="GET">
                @csrf
                <h3 class="calc-text">Show costs from time to time</h3>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Enter the date:</span>
                    </div>
                    <input type="date" name="date" class="form-control" required>
                    <input type="date" name="date1" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary calc-butt">Enter</button>
            </form>
        </div>

    </section>
    @endsection