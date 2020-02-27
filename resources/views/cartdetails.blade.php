@extends('master')



@section('leftarea')

	<style>
		table{width:100%;}
		table,tr,th,td{border:1px solid black; text-align:center;}
	</style>


	<h1>Cart Details</h1>
		
	<table>
		
		@if(count($myitems) > 0)
			<tr>
				<th>S.No.</th>
				<th>Product Name</th>
				<th>Image</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total Price</th>
				<th>Remove</th>
			</tr>
			
			@php
			$sn = 1;
			@endphp
			@foreach($myitems as $item)
				<tr>
					<td>{{$sn}}</td>
					<td>{{$item->name}}</td>
					<td><img src="{{asset('public/books/'.$item->image)}}" height="100" width="60"></td>
					<td>Rs {{$item->price}} /-</td>					
					<td> <a href="{{url('/deccart/'.$item->id.'/'.$item->quantity)}}">-</a> {{$item->quantity}} <a href="{{url('/inccart/'.$item->id.'/'.$item->quantity)}}">+</a></td>
					<td>Rs {{$item->price * $item->quantity}} /-</td>
					<td><a href="{{url('/delcart/'.$item->id)}}" onclick="return confirm('Are You Sure To Delete ?')">Del</a></td>
				</tr>
				@php
				$sn++;
				@endphp
			@endforeach
			
			<tr>
				<th colspan="5">Grand Total</th>
				<th>Rs {{$grandtotal}} /-</th>
			</tr>
			
		@else
			<tr>
				<th>No Items In Your Cart</th>
			</tr>
		@endif
	
	</table>

@endsection