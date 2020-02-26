@extends('adminpages/master')

@section('titlearea','Category')

@section("rightcontainer")
<h2 class="text-center">Category</h2>
	@if(Session::has('status'))
			<label class="alert-info">{{Session('status')}}</label>
			 @endif


<table class="table" >
	
	<thead>
		<tr>
			<th colspan="5" class="text-center"><a href="{{url('/admin/addbooks')}}" class="btn btn-success">Add Books</a></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Sr number</td>
			<td>Title</td>
			<td>Price</td>
			<td>Images</td>
			<td class="text-center">Created At</td>
			<td>Action</td>
		</tr>
		 </tbody>
		@php
		$sr=1;
		@endphp
		@foreach($allBooks as $data)
		<tr>
				<td>{{$sr}}</td>
				<td>{{substr($data->title,0,35)}}</td>
				<td>{{$data->price}}</td>
				<td><img src ="{{asset('public/books/'.$data->image)}}" height="30" width="80"></td>
				<td>{{$data->created_at}}</td>

				<td><a href ="{{url('/admin/editbook/'.$data->id)}}" class="btn btn-info">Edit</a>
                  <a href ="{{url('/admin/delbook/'.$data->id.'/'.$data->image)}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete ?')"> Delete</a>

				</td>
		 </tr>
		  @php
			$sr++;
			@endphp

		@endforeach()
	
</table>

<h4 align="center" style="color:red;">{{$allBooks->links()}}</h4>
@endsection