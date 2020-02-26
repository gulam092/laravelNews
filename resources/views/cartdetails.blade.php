@extends('master')
@section('leftarea')


<h1>Books</h1>
	
	<br><br>
	
	@foreach($myitems as $data)
		
		<div style="margin:10px; display:inline-block; font-weight:bold; text-align:center;">
			<div><img src="" height="150" width="100"></div>
			<div>{{$data->name}}</div>
			<div>Rs {{$data->price}}</div>
			
			<input type="hidden" class="bookquan" value="1">
			<div></div>
		</div>
		
	@endforeach

@endsection