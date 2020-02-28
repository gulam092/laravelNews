@extends('master')

@section('leftarea')

<div class="wthree-top">
					<div class="w3agile-top">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="#"><img src="{{asset('public/newsfiles/'.$getAll_news->image)}}" class="img-responsive" alt="" /></a>
						</div>
						<div class="w3agile-middle">
							{!! Form::open(array('url'=>'/commentsubmitted','enctype'=>'multipart/form-data')) !!}
						<ul>
                             
							<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$getAll_news->date}}</a></li>
							<li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>201 LIKES</a></li>
                             <li><i class="fa fa-comment" aria-hidden="true"></i>
								<strong>{{$commentAll->count()}}COMMENTS</strong></li>
								 @foreach($commentAll as $commentData)
								 <table>
    							
    							<tr>
					        	<td><a href="">{{$commentData->author}}</a>:</td>
					        	<td>{{$commentData->comment}}</td>
								</tr>
					    		
					  			</table>
                               @endforeach()
                          {{Form::text('comment','',["class"=>"form-control","placeholder"=>"commnet here"])}}
							<!-- {{form::submit('submit',["class"=>"btn btn-success"])}} -->
							
							{!! Form::close() !!}
						</ul>
					</div>
					</div>
					
					<div class="w3agile-bottom">
						<div class="col-md-3 w3agile-left">
							<h5>Sit amet consectetur</h5>
						</div>
						<div class="col-md-9 w3agile-right">
							<h3><a href="#">{{$getAll_news->news_title}}</a></h3>
							<p align="justify">{{substr($getAll_news->desciption,0,200)}}</p>
							
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
			
				<!-- wthree-top-1 -->
		
		
	

@endsection