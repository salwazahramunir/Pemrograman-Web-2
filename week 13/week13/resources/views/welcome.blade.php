@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3">
            <div class="card my-3" style="width: 18rem">
                <img src="{{ asset('front/assets/img/popcorn.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->nama }}</h5>
                    <p class="card-text">{{ $product->nama_kategori }}</p>
                    <a href="{{ url('/') }}" class="btn btn-primary">Beli</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
