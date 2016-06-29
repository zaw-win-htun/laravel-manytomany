@extends('layout')

@section('content')
	
	<h1 class="text-center">Edit Post</h1>
	<hr>
	{!! Form::model($post, ['method' =>'PATCH', 'action' => ['PostController@update', $post->id]]) !!}
		
		@include('post.input',['submitButtonText' => 'Post Update'])

	{!! Form::close() !!}
@endsection