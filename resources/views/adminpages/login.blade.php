
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	
	<link href="{{asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	
	<script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>
	<main>
			<header class="jumbotron"><h1 class="text-center">Admin Panel</h1></header>
			<section class="container">
			@if(Session::has('status'))
			<label class="alert-danger">{{Session('status')}}</label>
			 @endif
			
			{!! Form::open(array('url'=>'/admin/postlogin')) !!}
					
				<div class="form-group">
					{{Form::label("Email","",["class"=>"text-primary"])}}
					{{Form::text('em','',["placeholder","Enter Email","class"=>"form-control"])}}
				</div>
				 <div class="form-group">
					{{Form::label("Password","",["class"=>"text-primary"])}}
					{{Form::password('pass',["placeholder","Enter Password","class"=>"form-control"])}}
				</div>
				
				<div class="form-group">
					{{Form::submit('Login',["placeholder","Enter Email","class"=>"btn btn-success"])}}
				</div>
				
				
					
			{!! Form::close() !!}
			
			
			</section>
		</main>
</body>
</html>