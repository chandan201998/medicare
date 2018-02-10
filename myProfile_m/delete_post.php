<?php
include 'connection.php';
if (isset($_GET['post_id'])) {
	$post_id=$_GET['post_id'];
	$deletepost="DELETE from posts where post_id ='$post_id'";
	$rundelete=mysqli_query($conn, $deletepost);
	if($rundelete){
		echo "<script>alert('A post has been deleted!')</script>";
		echo "<script>window.open('myposts.php','_self')</script>";
}
}
?>