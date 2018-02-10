<link rel="stylesheet" type="text/css" href="css/qna.css">
<?php

$get_id=$_GET['post_id'];
$get_comment="SELECT * from comments where post_id='$get_id' ORDER BY 1 DESC";
$run_comment=mysqli_query($conn,$get_comment);

while ($row=mysqli_fetch_array($run_comment)) {

	$com=$row['comment'];
	$com_name=$row['comment_author'];
	$date=$row['date'];

	echo "
	<div id='comment_a' style='border:1px solid grey;background:#219CF0;padding:5px;'>
	<h3 style='color:#003A8D;'>$com_name</h3><i>Said</i> on $date
	<p>$com</p>
	</div>
	";

}



?>