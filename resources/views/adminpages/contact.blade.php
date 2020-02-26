@extends('adminpages/master')

@section('titlearea','Contact message')

@section("rightcontainer")
<h2 class="text-center">Message</h2>
	@if(Session::has('status'))
			<label class="alert-info">{{Session('status')}}</label>
			 @endif


<table class="table" >
	
	<thead>
		
	</thead>
	<tbody>
		<tr>
			<td>Sr number</td>
			<td>User Name</td>
			<td>User Email</td>
			<td>User Phone</td>
			<td>Message</td>
			<td class="text-center">Created At</td>
			<td>Action</td>
		</tr>
		 </tbody>
		@php
		$sr=1;
		@endphp
		@foreach($contact as $data)
		<tr>
				<td>{{$sr}}</td>
				<td>{{$data->username}}</td>
				<td>{{$data->useremail}}</td>
				<td>{{$data->userphone}}</td>
				<td>{{substr($data->Message,0,40)}}</td>
				<td>{{$data->date}}</td>
 	   <td><a href ="{{url('/admin/deletecontact/'.$data->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete ?')"> Delete</a>

				</td>
		 </tr>
		  @php
			$sr++;
			@endphp

		@endforeach()
	
</table>

<h4 align="center" style="color:red;">{{$contact->links()}}</h4>
@endsection