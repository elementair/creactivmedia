<!DOCTYPE html>
<html>
<head>
	<title>Hindsite - DEMO</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" i>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		h3{
			text-align: center;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
	  	<div class="container-fluid">
	    	<div class="navbar-header">
	      	<a class="navbar-brand" href="#">
	        	<img alt="Hindsite" src="">
	      	</a>
	    	</div>
	  	</div>
	</nav>
	<div class="container">
		<div class="col-xs-12">
		<?php
			$accion = $_GET['status'];

			switch ($accion) {
				case 'success':
		?>
			<h3>Record succesfully added!</h3>
		<?php
				break;		
				case 'error':
		?>
			<h3>Error - <?=$_GET['mensaje']?></h3>
		<?php
				break;
			}
		?>
		</div>
	</div>
</body>
</html>