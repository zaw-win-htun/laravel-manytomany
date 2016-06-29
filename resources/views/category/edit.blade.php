@extends('layout')

@section('content')
	
	<h1 class="text-center">Edit Category</h1>
	<hr>
	{!! Form::model($category, ['method' =>'PATCH', 'action' => ['CategoryController@update', $category->id]]) !!}
		
		@include('category.input',['submitButtonText' => 'Category Update'])

	{!! Form::close() !!}
@endsection