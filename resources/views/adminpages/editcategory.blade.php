@extends('adminpages.master')

@section('titlearea')
	Add Category
@endsection

@section('rightcontainer')
	<h1 class="text-info">Update Category</h1>
	
	
		{!! Form::open(array('url'=>'/admin/postupdatecategory','enctype'=>'multipart/form-data')) !!}
		   
					<div class="form-group">
					{{Form::hidden('hid',"$edit_cat->id",["class"=>"form-control"])}}
					<div class="form-group">
					{{Form::hidden('himg',"$edit_cat->image",["class"=>"form-control"])}}
					<div class="form-group">
					{{Form::label("Category Name","",["class"=>"text-primary"])}}
					{{Form::text('cname',"$edit_cat->cname",["class"=>"form-control"])}}
					<label class="text-danger">{{$errors->first('cname')}}</label>
					
					
				</div>
				
			   <div class="form-group">
					{{form::label("image","",["class"=>"text-primary"])}}
					{{form::file('image',["class"=>"form-control",])}}
					<label class="text-danger">{{$errors->first('image')}}</label>
				</div>		
				
				
				<div class="form-group">
					{{form::submit('update',["class"=>"btn btn-success"])}}
				</div>
				
				
					
			{!! Form::close() !!}
	
@endsection