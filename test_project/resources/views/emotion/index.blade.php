<h1>Emotions</h1>

<ul>
@foreach($emotions as $emotion)
	<li><a href="{{URL::to('emotion/'.$emotion->id.'/edit')}}">{{$emotion->name}}</a></li>
@endforeach
</ul>

<a href="{{ URL::to('emotion/create') }}">Create Emotion</a>