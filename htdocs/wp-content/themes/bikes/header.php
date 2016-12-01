<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Mike's Bikes</title>
		<style type="text/css" >
	
		</style>
		<link rel="icon" href="09-512.png"></link>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/magnify/magnific-popup.css"></link>
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/magnify/jquery.magnific-popup.min.js"></script>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<?php wp_head(); ?>

	</head>
	<body>
		<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#top">Mike's Bikes</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#top" data-toggle="collapse" data-target="#navbarCollapse" >Home</a></li>
						<li><a href="#about" data-toggle="collapse" data-target="#navbarCollapse">About</a></li>
						<li><a href="#roadBikes" data-toggle="collapse" data-target="#navbarCollapse">Road Bikes</a></li>
						<li><a href="#mountainBikes" data-toggle="collapse" data-target="#navbarCollapse">Mountain Bikes</a></li>
						<li><a href="#contact" data-toggle="collapse" data-target="#navbarCollapse">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>