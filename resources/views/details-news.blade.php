@extends('master')

@section('leftarea')

<div class="wthree-top">
					<div class="w3agile-top">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="#"><img src="{{asset('public/newsfiles/'.$getAll_news->image)}}" class="img-responsive" alt="" /></a>
						</div>
						<div class="w3agile-middle">
						<ul>
							<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$getAll_news->date}}</a></li>
							<li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>201 LIKES</a></li>
							<li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>15 COMMENTS</a></li>
							
						</ul>
					</div>
					</div>
					
					<div class="w3agile-bottom">
						<div class="col-md-3 w3agile-left">
							<h5>Sit amet consectetur</h5>
						</div>
						<div class="col-md-9 w3agile-right">
							<h3><a href="#">{{$getAll_news->news_title}}</a></h3>
							<p align="justify">{{$getAll_news->desciption}}</p>
							
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
			
				<!-- wthree-top-1 -->
		
		
		
		

@endsection