<!-- 	This is an example of a simple form. The curly braces
		talk to Laravel, the !! tells Laravel to print it directly
		as HTML instead of as a string.

 -->
{!! Form::open(array('url' => 'wall/store', 'method' => 'POST')) !!}
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}

			<br/>
			{!! Form::label('emotion', 'Emotion:') !!}
			{!! Form::select('emotion', $emotions) !!}
			
			<br/>
			
			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body') !!}

			<br/>
			{!! Form::submit() !!}
{!! Form::close() !!}