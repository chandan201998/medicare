<link rel="stylesheet" type="text/css" href="css/qna.css">
<?php

$query="SELECT * from posts";
$run_query=mysqli_query($conn,$query);
$totalposts=mysqli_num_rows($run_query);
$total_pages=ceil($totalposts / $per_page);

echo "
<center>
<div class='pagination'>
<a href='index.php?page=1'>First Page </a>
";



for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='index.php?page=$i'>$i  </a>";
}

echo "<a href='index.php?page=$total_pages'>Last Page</a></center></div>";


















?>