@extends('layout')

@section('content')
	
	<h1 class="text-center">Create Post</h1>
	
		{!! Form::open(['action' => 'PostController@store']) !!}
		
			@include('post.input',['submitButtonText' => 'Create Post'])
		
		{!! Form::close() !!}
@stop