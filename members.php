<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	
	<title>Find People</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>
<div class="row" style="box-shadow: 1px 1px 1px #888888;
					border-radius: 5px;">
	 <div class="col-sm-12">
	 	<center><h2>Find New People</h2></center>
	 	<div class="row">
	 		<div class="col-sm-4">	
	 		</div>
	 		<div class="col-sm-4">
	 			<form class="search_form" action="">
	 				<div class="form-group">
							<input type="text" class="form-control" placeholder="Search Friend" name="search_user" >
						</div>
						<button type="submit" class="btn btn-info" name="search_user_btn">Search</button>
	 				
	 			</form>
	 		</div>

	 		<div class="col-sm-4">
	 			
	 		</div>
	 		
	 	</div><br><br>
	 	
	 </div>
	
	
</div>
 <?php search_user();




  ?>

</body>
</html>