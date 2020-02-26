@extends('mymaster')
@section('contactarea')
<div class="agile-banner">
	</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{url('/')}}">Home</a></li>
				<li class="active">Contact</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

	<!-- contact -->
	<div class="container">
		<!-- mail -->
	<div class="banner-bottom">
			<div class="agileits_heading_section">
				<h3 class="wthree_head">Contact</h3>
				@if(Session::has('status'))
			<label class="alert-danger">{{Session('status')}}</label>
			 @endif
				<p class="agileinfo_para">Nam tempus lobortis sem non ornare in aliquet egestas, nisi mi vestibulum.</p>
			</div>
			<div class="agile-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.070907689272!2d144.96551661539212!3d-37.81180807975275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642c99e207041%3A0xc358d059bfe29278!2sRussell+St%2C+Melbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1486986489826"  frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

	
			<div class="w3ls_portfolio_grids w3_agile_mail_grids">	
				 {!! Form::open(array('url'=>'/FrontPanel/addcontact')) !!}
                    
					<div class="col-md-6 w3_agile_mail_grid">
			<label class="text-danger">{{$errors->first('name')}}</label></br>
			<label class="text-danger">{{$errors->first('useremail')}}</label></br>
			<label class="text-danger">{{$errors->first('userphone')}}</label></br>
				<label class="text-danger">{{$errors->first('Message')}}</label>
						<span class="input input--ichiro">
							{{Form::text('username','',["class"=>"input__field input__field--ichiro","id"=>"input-25","placeholder"=>" "])}}

					<label class="input__label input__label--ichiro" for="input-25">
								<span class="input__label-content input__label-content--ichiro">Your Name</span>
							</label>
						</span>
						<span class="input input--ichiro">
							{{Form::text('useremail','',["class"=>"input__field input__field--ichiro","id"=>"input-26","placeholder"=>" "])}}
							<!-- <input class="input__field input__field--ichiro" type="email" id="input-26" placeholder=" " required="" /> -->
							<label class="input__label input__label--ichiro" for="input-26">
								<span class="input__label-content input__label-content--ichiro">Your Email</span>
							</label>
						</span>
						<span class="input input--ichiro">
							{{Form::text('userphone','',["class"=>"input__field input__field--ichiro","id"=>"input-27","placeholder"=>" "])}}
							<!-- <input class="input__field input__field--ichiro" type="text" id="input-27" placeholder=" " required="" /> -->
							<label class="input__label input__label--ichiro" for="input-27">
								<span class="input__label-content input__label-content--ichiro">Your Phone Number</span>
							</label>
						</span>
						{{form::submit('submit',[])}}
						<!-- <input type="submit" value="Submit"> -->
					</div>
					<div class="col-md-6 w3_agile_mail_grid">
						{{Form::textarea('Message','',["placeholder"=>"Your message here..."])}}
						<!-- <textarea name="Message" placeholder="Your message here..." required=""></textarea> -->
					</div>
					<div class="clearfix"> </div>
				{!! Form::close() !!}
			</div>
		
	</div>
<!-- //mail -->

	</div>
	@endsection
	
	