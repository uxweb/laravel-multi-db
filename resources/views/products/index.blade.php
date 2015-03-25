@extends('app')

@section('content')
    <section class="container">
        <h1 class="page-header">Products</h1>

        @if(count($products))
            <ul class="list-group">
                @foreach($products as $product)
                    <a href="" class="list-group-item">{{ $product->name }}</a>
                @endforeach
            </ul>
        @else
            <p class="alert alert-warning">There are no registered products already.</p>
        @endif
    </section>
@endsection