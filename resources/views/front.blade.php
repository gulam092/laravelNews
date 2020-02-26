@extends('master')

@section('sliderarea')
	<!-- main-slider -->
		<ul id="demo1">

			<li>
				<img src="{{asset('public/front/images/1.jpg')}}" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3>Fashion</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's dummy. </p>
				</div>
			</li>
			<li>
				<img src="{{asset('public/front/images/2.jpg')}}" alt="" />
				  <div class="slide-desc">
					<h3>Life Style </h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
				</div>
			</li>
			<li>
				<img src="{{asset('public/front/images/3.jpg')}}" alt="" />
				<div class="slide-desc">
					<h3>Photography</h3>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature. </p>
				</div>
			</li>
			
		</ul>
@endsection




@section('leftarea')


	<h1>Latest News</h1>
	<br>
	@foreach($getnews as $data)
     <div class="wthree-top">
					<div class="w3agile-top">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="{{url('details-news/'.$data->id)}}"><img src="{{asset('public/newsfiles/'.$data->image)}}" class="img-fluid" height="400" width="150" alt="" /></a>
						</div>
						<div class="w3agile-middle">
						<ul>
							<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$data->date}}</a></li>
							<li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>201 LIKES</a></li>
							<li><a href="{{url('/comment/'.$data->id)}}"><i class="fa fa-comment" aria-hidden="true"></i>15 COMMENTS</a></li>
							
							
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
			@endforeach
			
				<!-- wthree-top-1 -->
				<h2 align="center">{{$getnews->links()}}</h2>
		
		
		
		

@endsection