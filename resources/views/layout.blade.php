<!DOCTYPE html>
<html lang="en">
	<head>		
		@yield('head')
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		
		<!-- Custom fonts for this template -->
		<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
		<!-- Plugin CSS -->
		<link href="css/magnific-popup.css" rel="stylesheet">
	
		<!-- Custom styles for this template -->
		<link href="css/creative.css" rel="stylesheet">
	
		<!-- Temporary navbar container fix -->
		<style>
			.navbar-toggler {
				z-index: 1;
			}
			
			@media (max-width: 576px) {
				nav > .container {
					width: 100%;
				}
			}
		</style>
	</head>
	<body id="page-top">
		@include('layouts.nav')
			@yield('content')
	</body>
	@yield('scripts')	
	
	<!-- Bootstrap core JavaScript -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- Plugin JavaScript -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="js/scrollreveal.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.js"></script>
	
</html>