@extends('layoutcos')
@section('title', 'Products')
@section('content')
 <div class="container products">
 <div class="row">
 @foreach($products as $product)
 <div class="col-xs-18 col-sm-6 col-md-3">
 <div class="thumbnail">
 <img src="{{ $product->imagine }}" width="100" height="100">
 <div class="caption">
 <h4>{{ $product->nume }}</h4>
 <p>{{ str_limit(strtolower($product->descriere), 200) }}</p>
 <p><strong>Pret: </strong> {{ $product->pret }} Lei</p>
 <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Pune in cos</a> </p>
 </div>
 </div>
 </div>
 @endforeach
 </div><!-- End row -->
 </div>
@endsection