@extends('layout')

@section('content')
	<h1 class="text-center">All Categories</h1>
	<hr>
	@foreach($categories as $category)

	<a href="{{ action('CategoryController@show',$category->id) }}">
		<h4>{{$category->name}}</h4>
	</a>
	
		<p>{{$category->descripton}}</p>


	
	{!! Form::open(['method' => 'DELETE', 'action' => ['CategoryController@destroy', $category->id]]) !!}

	
		<a href="{{ action('CategoryController@edit',$category->id) }}" class="btn btn-info btn-sm">Edit</a>	
	
		<button class="btn btn-danger btn-sm">Delete</button>
	
	{!! Form::close() !!}

	<hr>	
	@endforeach
@stop