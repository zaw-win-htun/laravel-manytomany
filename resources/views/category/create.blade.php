@extends('layout')

@section('content')
	
	<h1 class="text-center">Create Category</h1>
	
		{!! Form::open(['action' => 'CategoryController@store']) !!}
		
			@include('category.input',['submitButtonText' => 'Create Category'])
		
		{!! Form::close() !!}
@stop