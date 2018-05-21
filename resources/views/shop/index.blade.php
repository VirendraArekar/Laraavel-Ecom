
@extends('layouts.master')

@section('title')
  Laravel Shopping cart
@endsection
@section('content')
  @foreach($products->chunk(3) as $product)
		<div class="row">
			@foreach($product as $item)
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="{{ $item->imagepath }}" alt="..." class="img-responsive">
			      <div class="caption">
			        <h3>{{ $item->title }}</h3>
			        <p class="description">{{ $item->description }}</p>
			        <p>
			        	<div class="clearfix">
			        		<div class="pull-left price">${{ $item->price }}</div>
			        		<a href="#" class="btn btn-success pull-right" role="button">Button</a></p>
			        	</div>
			        </p>
			      </div>
			    </div>
			  </div>
			  @endforeach
		</div>
   @endforeach
@endsection