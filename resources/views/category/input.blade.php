	<div class="form-group">
		{!! Form::label('name') !!}
		{!! Form::text('name',null,['class' => 'form-control']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('description') !!}
		{!! Form::textarea('descripton',null,['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit($submitButtonText,['class' => 'form-control btn btn-success']) !!}
	</div>
