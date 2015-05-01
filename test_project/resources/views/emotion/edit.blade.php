{!! Form::open(array('url' => 'emotion/' . $emotion->id . '/update', 'method' => 'POST')) !!}
			{!! Form::label('name', 'Emotion:') !!}
			{!! Form::text('name', $emotion->name) !!}
			{!! Form::submit() !!}
{!! Form::close() !!}