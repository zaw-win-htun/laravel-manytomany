@extends('layout')

@section('content')
	
	<div class="text-center">
		
		<h1>Show Category</h1>
		<hr>
		<h4>{{ $category->name }} </h4>
		<h5>{{ $category->descripton }} </h5>
		<hr>


		@foreach($category->posts as $post)
			<h1>{{ $post->name }}</h1>

			<p>{{ $post->content }}</p>
		@endforeach


	</div>


@endsection