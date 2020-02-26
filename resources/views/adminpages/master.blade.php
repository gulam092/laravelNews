@if(!Session::has('adminemail'))
<script>location.href ="{{url('admin')}}"</script>
@endif
<!DOCTYPE html>
<html>
<head>
	<title>@yield('titlearea',"Dashboard")</title>

	<link href="{{asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	
	<script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>

</head>
<body>
	<main>
		<header>
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="{{url('/')}}">WebSiteName</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="{{url('/admin/dashboard')}}">Home</a></li>
			      
			    </ul>
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome:{{Session('adminemail')}}</a></li>
			      <li><a href="{{url('/admin/logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			    </ul>
			  </div>
			</nav>			
		</header>

		<div>
			<div class="col-sm-4">
				<ul class="list-group">
				  <li class="list-group-item"><a href="{{url('/admin/category')}}">Category</a></li>
				  <li class="list-group-item"><a href="{{url('/admin/news')}}">News</a></li>
				  <li class="list-group-item"><a href="{{url('/admin/books')}}">Books</a></li>
				   <li class="list-group-item"><a href="{{url('/admin/contact')}}">Contact Details</a></li>
				</ul>				
			</div>
			<div class="col-sm-8">
				
				@yield('rightcontainer')
			</div>
			
		</div>
	</main>
</body>
</html>