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
			<th colspan="5" class="text-center"><a href="{{url('/admin/addCategory')}}" class="btn btn-success">Add Category</a></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Sr number</td>
			<td>Category Name</td>
			<td>Images</td>
			<td class="text-center">Created At</td>
			<td>Action</td>
		</tr>
		 </tbody>
		@php
		$sr=1;
		@endphp
		@foreach($cat_data as $cdata)
		<tr>
				<td>{{$sr}}</td>
				<td>{{$cdata->cname}}</td>
				<td><img src ="{{asset('public/attach/'.$cdata->image)}}" height="30" width="80"></td>
				<td>{{$cdata->date}}</td>

				<td><a href ="{{url('/admin/editcat/'.$cdata->id)}}" class="btn btn-info">Edit</a>
                  <a href ="{{url('/admin/delcat/'.$cdata->id.'/'.$cdata->image)}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete ?')"> Delete</a>

				</td>
		 </tr>
		  @php
			$sr++;
			@endphp

		 @endforeach
	
</table>
<h4 align="center" style="color:red; margin-right: 200px;">{{$cat_data->links()}}</h4>
@endsection