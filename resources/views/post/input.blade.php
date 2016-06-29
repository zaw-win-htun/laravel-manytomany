	<div class="form-group">
		{!! Form::label('title') !!}
		{!! Form::text('title',null,['class' => 'form-control']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('content') !!}
		{!! Form::textarea('content',null,['class' => 'form-control']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('category') !!}
		{!! Form::select('category_id[]', $categories, null, ['class' => 'form-control', 'multiple']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit($submitButtonText,['class' => 'form-control btn btn-success']) !!}
	</div>
