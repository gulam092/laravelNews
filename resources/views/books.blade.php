@extends('master')
@section('leftarea')
<h1>Books</h1>
	
	<br><br>
	
	@foreach($bookdata as $book)
		
		<div style="margin:10px; display:inline-block; font-weight:bold; text-align:center;">
			<div><img src="{{asset('public/books/'.$book->image)}}" height="150" width="100"></div>
			<div>{{$book->title}}</div>
			<div>Rs {{$book->price}}</div>
			
			<input type="hidden" class="bookquan" value="1">
			<div><button class="addcart" type="button" bookid="{{$book->id}}" bookname="{{$book->title}}" bookprice="{{$book->price}}" bookimage="{{$book->image}}">Add Cart</button></div>
		</div>
		
	@endforeach

@endsection