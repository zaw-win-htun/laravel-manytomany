@extends('layout')

@section('content')
	<h1 class="text-center">All Posts</h1>
	<hr>
	@foreach($posts as $post)

	<a href="{{ action('PostController@show',$post->id) }}">
		<h4>{{$post->title}}</h4>
	</a>
	
		<p>{{$post->content}}</p>

		@foreach($post->categories as $category )
			<a href="{{ action('CategoryController@show',$category->id) }}"><small>{{ $category->name }}</small>
</a>
		@endforeach


	
	{!! Form::open(['method' => 'DELETE', 'action' => ['PostController@destroy', $post->id]]) !!}

	
		<a href="{{ action('PostController@edit',$post->id) }}" class="btn btn-info btn-sm">Edit</a>	
	
		<button class="btn btn-danger btn-sm">Delete</button>
	
	{!! Form::close() !!}

	<hr>	
	@endforeach
@stop