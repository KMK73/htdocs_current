<!-- 	This is an example of a simple form. The curly braces
		talk to Laravel, the !! tells Laravel to print it directly
		as HTML instead of as a string.

 -->
{!! Form::open(array('url' => 'emotion/store', 'method' => 'POST')) !!}
			{!! Form::label('name', 'Emotion:') !!}
			{!! Form::text('name') !!}
			{!! Form::submit() !!}
{!! Form::close() !!}