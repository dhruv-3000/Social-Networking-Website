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
	<title>edit post</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>
 <div class="row">
 	<div class="col-sm-3">
 		
 	</div>
 	<div class="col-sm-6">
 		<?php
    if(isset($_GET['post_id'])){
		$get_id= $_GET['post_id'];
	
	$get_post = "SELECT * from posts where post_id='$get_id'";
	//var_dump($get_post);
	$run_post = mysqli_query($con, $get_post);
	$row = mysqli_fetch_array($run_post);

	$post_con =$row['post_content'];
        
        }
		?>
		<form action="" method="post" id="f">
			<center><h3>Edit Your Post:</h3></center><br>
			<textarea class="form-control" cols="83" rows="4" name="content"><?php echo $post_con;?></textarea>
			<input type="submit" name="update" value="update post" class="btn btn-info">
			
		</form>
		<?php 
		if (isset($_POST['update'])) {
			$content = $_POST['content'];
			$update_post = "UPDATE posts set post_content='$content' where post_id='$get_id'";
			$run_update = mysqli_query($con, $update_post);

			if($run_update){
				//echo "<script>alert('A post has been updated')</script>";
				echo "<script>window.open('home.php' , '_self')</script>";
						}
		}
		

		?>
 	</div>
 	<div class="row">
	<div class="col-sm-12">
		<center><h2><strong>News Feed</strong></h2><br></center>
		<?php echo get_posts(); ?>
	</div>
</div>
 	
 </div>
</body>
</html>