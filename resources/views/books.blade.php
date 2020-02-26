@extends('master')
@section('leftarea')
<script>
$(document).ready(function () {
	getcart()
	 	$('.addcart').click(function(){
		var bid =$(this).attr('bookid');
		var bname =$(this).attr('bookname');
	 	var bprice =$(this).attr('bookprice');
	 	var bimg =$(this).attr('bookimage');
	 	var bquan =$('.bookquan').val();
	 	$.ajax({
	 		url:'http://localhost/lara1pm/addcart',
	 		method:'get',
	 		data:{bid:bid,bname:bname,bprice:bprice,bimg:bimg,bquan:bquan},
	 		success:function(res){
	 			getcart()
	 			//alert(res);
	 			//alert(bid+bname+bprice+bimg+bquan);
	 		},
	 		error:function(){
	 			alert("Not ");
	 		}

	 	})
	 })

	 	function getcart(){
	 		$.ajax({
	 			url:'http://localhost/lara1pm/getcartdetails',
	 			method :'get',
				success:function(res){
					
					$('#cartinfoarea').html(res);
				},
				error:function()
			  {
				 alert('Not Working');
				}

	 		})
	 	}
})

</script>

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