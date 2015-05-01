<h1>The Wall</h1>

<a href="{{ URL::to('wall/create') }}">New Wall Post</a>
<ul>
@foreach($walls as $wall)
	<li><a href="{{URL::to('wall/'.$wall->id)}}">{{$wall->title}}</a></li>
@endforeach
</ul>

