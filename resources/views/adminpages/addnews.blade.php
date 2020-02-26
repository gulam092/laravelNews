@extends('adminpages.master')

@section('titlearea')
	Add Category
@endsection

@section('rightcontainer')
	<h1 class="text-primary">Add NEWS</h1>
	  @if($errors->any())
         @foreach($errors->all() as $err)
           <ul class="text-danger">
           	<li>{{$err}}</li>
           </ul>
         @endforeach()

	  @endif
	 {!! Form::open(array('url'=>'/admin/postaddnews','enctype'=>'multipart/form-data')) !!}

		 <!--    <select class="form-control" name="role_id">
              @foreach($updated_news as $role)

            <option value="{{$role->id}}" {{ $selectdId == $role->id ? 'selected="selected"' : ''}}>{{$role->cname}}</option>  @endforeach</select> -->
               @php
               foreach($updated_news as $data)
                 $arr[$data->id]  = $data->cname;
                @endphp
             <div class="form-group">  
		{{Form::select('category',$arr,'',['class'=>'form-control'])}}
         </div>
		
           <div class="form-group">
					{{Form::label("News Title","",["class"=>"text-primary"])}}
					{{Form::text('news_title','',["class"=>"form-control"])}}
					
				</div>
					<div class="form-group">
					{{Form::label("Desciption","",["class"=>"text-primary"])}}
					{{Form::textarea('desciption','',["class"=>"form-control"])}}
					
				</div>
			   <div class="form-group">
					{{form::label("image","",["class"=>"text-primary"])}}
					{{form::file('image',["class"=>"form-control",])}}
					
					 </div>		
				<div class="form-group">
					{{form::submit('submit',["class"=>"btn btn-success"])}}
				</div>
				
				
					
			{!! Form::close() !!}
	
@endsection