<?php
	include("class/class.http.php");
	include("class/class.constants.php");
	$http = new Http();
	$url  = HOST_APP."controller/creactiv.php?a=form";
	$html = $http->Request($url);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hindsite - DEMO</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" i>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
		<form action="controller/creactiv.php" method="GET">
			<?=$html?>
			<input class="btn btn-primary" type="submit" value="Send" style="display:block;margin:0 auto;">
		</form>
		</div>
	</div>
</body>
</html>