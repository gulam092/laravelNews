@extends('adminpages.master')

@section('titlearea')
	Add Books
@endsection

@section('rightcontainer')
	<h1 class="text-warning">Add Books</h1>
	
	
		{!! Form::open(array('url'=>'/admin/postupdatebook','enctype'=>'multipart/form-data')) !!}
					 <div class="form-group">
					{{Form::hidden('hidden_id',"$editbook->id",["class"=>"form-control"])}}
					</div>
					 <div class="form-group">
					{{Form::hidden('hidden_img',"$editbook->image",["class"=>"form-control"])}}
					</div>
				 <div class="form-group">
					{{Form::label("Book Title","",["class"=>"text-primary"])}}
					{{Form::text('title',"$editbook->title",["class"=>"form-control"])}}
					<label class="text-danger">{{$errors->first('title')}}</label>
					</div>
					<div class="form-group">
					{{Form::label("Book Price","",["class"=>"text-primary"])}}
					{{Form::text('price',"$editbook->price",["class"=>"form-control"])}}
					<label class="text-danger">{{$errors->first('price')}}</label>
					</div>
				
			   <div class="form-group">
					{{form::label("Image","",["class"=>"text-primary"])}}
					{{form::file('image',["class"=>"form-control",])}}
					<label class="text-danger">{{$errors->first('image')}}</label>
				</div>		
				
				
				<div class="form-group">
					{{form::submit('submit',["class"=>"btn btn-success"])}}
				</div>
				
				
					
			{!! Form::close() !!}
	
@endsection