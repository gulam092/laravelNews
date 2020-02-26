@extends('adminpages.master')

@section('titlearea')
	Add Category
@endsection

@section('rightcontainer')
	<h1>Add Category</h1>
	
	
		{!! Form::open(array('url'=>'/admin/postaddcategory','enctype'=>'multipart/form-data')) !!}
					
				<div class="form-group">
					{{Form::label("Category Name","",["class"=>"text-primary"])}}
					{{Form::text('cname','',["class"=>"form-control"])}}
					<label class="text-danger">{{$errors->first('cname')}}</label>
					
					
				</div>
				
			   <div class="form-group">
					{{form::label("image","",["class"=>"text-primary"])}}
					{{form::file('image',["class"=>"form-control",])}}
					<label class="text-danger">{{$errors->first('image')}}</label>
				</div>		
				
				
				<div class="form-group">
					{{form::submit('submit',["placeholder","enter email","class"=>"btn btn-success"])}}
				</div>
				
				
					
			{!! Form::close() !!}
	
@endsection