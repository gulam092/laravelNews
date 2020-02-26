@extends('adminpages/master')


@section('titlearea',"News")


@section('rightcontainer')
	<h2 class="text-center">NEWS</h2>
	@if(Session::has('status'))
			<label class="alert-info">{{Session('status')}}</label>
			 @endif


<table class="table" >
	
	<thead>
		<tr>
			<th colspan="5" class="text-center"><a href="{{url('/admin/addNews')}}" class="btn btn-success">Add News</a></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Sr number</td>
			<!-- <td>Category</td> -->
			<td>Title</td>
			<td>Categoryid</td>
			<td>Desciption</td>
			<td>Images</td>
			<td>Action</td>
		</tr>
		 </tbody>
		 @php
		$sn=1;
		@endphp


		@foreach($news_data as $news)
       <tr>    @php 
       	      $newsdis =  $news->desciption;
       	      $newsTitle =  $news->news_title;
       	      @endphp
				<td>{{$sn}}</td>
               <td>{{Str::limit($newsTitle, 15)}}</td>
                <td>{{$news->category}}</td>
				<td>{{Str::limit($newsdis, 20)}}</td>
				<td><img src ="{{asset('public/newsfiles/'.$news->image)}}" height="30" width="80"></td>
				<td><a href="{{url('/admin/editnews/'.$news->id.'/'.$news->category)}}" class="btn btn-info">Edit</a>
				<a href ="{{url('admin/delnews/'.$news->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete ?')">Delete</a></td>

				
		 </tr>
		  @php
			$sn++;
			@endphp
			@endforeach
		</table>
		<h4 align="center" style="color:red; margin-right: 200px;">{{$news_data->links()}}</h4>
@endsection