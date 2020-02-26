@extends('master')



@section('leftarea')


	<h1>{{$catname}} News</h1>
	<br>
 @foreach($newsdata as $data)


		<div class="wthree-top">
					<div class="w3agile-top">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="{{url('details-news/'.$data->id)}}"><img src="{{asset('public/newsfiles/'.$data->image)}}" class="img-responsive" alt="" /></a>
						</div>
						<div class="w3agile-middle">
						<ul>
							<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$data->date}}</a></li>
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
							<h3><a href="{{url('details-news/'.$data->id)}}">{{$data->news_title}}</a></h3>
							<p align="justify">{{substr($data->desciption,0,255)}}....</p>
							<a class="agileits w3layouts" href="{{url('details-news/'.$data->id)}}">Read More <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
			
				<!-- wthree-top-1 -->
				@endforeach
		
		
		

@endsection