@extends('layout')

@section('content')
	
	<div class="text-center">
		
		<h1>Show Post</h1>
		<hr>
		<h4>{{$post->title}} </h4>
		<h5>{{$post->content}} </h5>


	</div>


@endsection