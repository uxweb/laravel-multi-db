@extends('app')

@section('content')
    <section class="container">
        <h1>Add New Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

            <!-- Name Form Input -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control"/>
            </div>

            <div class="form-group">
                <input type="submit" name="save" value="Save" class="btn btn-primary"/>
            </div>
        </form>

    </section>
@endsection