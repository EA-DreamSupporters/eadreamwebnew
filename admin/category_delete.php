<?php
include_once("config.php");
 
		$id=$_GET["id"];
		$del=mysqli_query($con,"DELETE FROM category WHERE category_id = '$id'");
			
		echo "<script> alert('Deleted Successfully')</script>";	

header("Location: category_view.php");
 ?>
 