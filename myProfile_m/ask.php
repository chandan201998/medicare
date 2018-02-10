								<?php
						include('connection.php');
session_start();
$user=$_SESSION['email'];
												  		$get_user="SELECT * from authenticate_user where email='$user'";
												  		$query=mysqli_query($conn,$get_user);
												 		$row=mysqli_fetch_array($query);
												 		$id=$row['id'];
if(!isset($_SESSION['email'])){header("location: ../index.php");}
																if(isset($_POST['submit'])){


																	$title=addslashes($_POST['title']);
																	$content=addslashes($_POST['content']);
																	if($content=='')
																	{
																		echo "<h2>Please enter topic description!</h2>";
																		exit();
																	}
																	else{
																	// $date=date("Y-m-d");
																	$insert="INSERT into posts (id,post_title,post_content,post_date) values ('$id','$title','$content',NOW())";
																	$run1=mysqli_query($conn,$insert);
																	if($run1){$update="UPDATE authenticate_user SET posts='yes' where id='$id'";
																		$run_update=mysqli_query($conn,$update);
	  echo "<script>alert(' Question Posted Successfully ! '); </script>";

echo "<script>window.open('index.php?id=<?php echo $id;?>','_self')</script>";
	

																	}
																	}
																}

															?>