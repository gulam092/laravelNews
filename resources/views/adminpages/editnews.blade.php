@extends('adminpages.master')

@section('titlearea')
	Add Category
@endsection

@section('rightcontainer')
	<h1 class="text-info">Update Category</h1>
	
	
		{!! Form::open(array('url'=>'/admin/postupdatenews','enctype'=>'multipart/form-data')) !!}
		   
					<div class="form-group">
					{{Form::hidden('hid',"$news_data->id",["class"=>"form-control"])}}
				</div>
					<div class="form-group">
					{{Form::hidden('himg',"$news_data->image",["class"=>"form-control"])}}
                   </div>
	              <!--  <div class="form-group">
	         <select class="form-control" name="findcatId">
	        {{--  <option value="{{$findcatId->cid}}" hidden>{{$findcatId->cname}}</option>
	            @foreach($getCategory as $data)
	               <option value="{{$data->cid}}">{{$data->cname}}</option>
	               @endforeach --}}
	               </select>
	                  </div> -->
	          <div class="form-group">
                @php
               foreach($getCategory as $data)
                 $arr[$data->id]  = $data->cname;
                @endphp
             {{Form::select('category',$arr,'$findcatId->cid',['class'=>'form-control'])}}
 			</div>
          <div class="form-group">
					{{Form::label("Title Name","",["class"=>"text-primary"])}}
					{{Form::text('news_title',"$news_data->news_title",["class"=>"form-control"])}}
					<label class="text-danger">{{$errors->first('cname')}}</label>
					<div class="form-group">
					{{Form::label("Desciption","",["class"=>"text-primary"])}}
					{{Form::textarea('desciption',"$news_data->desciption",["cl ass"=>"form-control col=100 row =100" ])}}
					<label class="text-danger">{{$errors->first('desciption')}}</label>
					</div>
				
			   <div class="form-group">
					{{form::label("image","",["class"=>"text-primary"])}}
					{{form::file('image',["class"=>"form-control"])}}
					<label class="text-danger">{{$errors->first('image')}}</label>
				</div>		
				
				<div class="form-group">
					{{form::submit('update',["class"=>"btn btn-success"])}}
				</div>
				
				
					
			{!! Form::close() !!}
	
@endsection