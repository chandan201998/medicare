
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
if(!isset($_SESSION['email'])){header("location: ../index.php");}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Mediconnect is an HealthCare social networking website .</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- /js -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- //js-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form action="results.php" method="get">
											   <input type="text" name="user_query" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" name="searchquery" value="">
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
													   <div id="dd" class="wrapper-dropdown-3" tabindex="1">
																			<span>Home</span>
																			<ul class="dropdown">
																				<li><a href="profile.php" class="deutsch">Profile</a></li>
																				<li><a href="editor.php" class="english">Ask Q</a></li>
																				<li><a href="index.php" class="espana">Home   </a></li>
																				<li><a class="russian">Logout</a></li>

																			</ul>
																		</div>
																		<script type="text/javascript">
			
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				if(obj.val==="Logout"){alert(obj.val);
																																						
																 			}
																			 // if(obj.val==="Logout"){
																				// <?php
																 			// 	session_start();
																	 		// 		session_destroy();
																				// 	header("location :../index.php");
																 			// 	?>
																					
																				// }
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});
																	// $(".russian").click(function(){
																	// 		<?php
																	// 				session_start();
																	// 				session_destroy();
																	// 				header("location :../index.php");
																	// 				?>
																					
																	// });

																</script>
										    </li>
									       <li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

												
													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3> 
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="images/1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Describe your medical issue. </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="images/in.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>You can ask a doctor for free,</p>
															<p><span>2 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>	
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="images/in1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Get personalized advice from  </p>
															<p><span>2 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div> 
														</li>
													</ul>
										</li>
										
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/in.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Appointment Booked</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/in5.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Request send</p>
											<p><span>3 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/in8.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Appointment Scheduled</p>
											<p><span>4 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Posts</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Appointments</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Comments</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Profile</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
															<?php
																include('connection.php');

												  		$user=$_SESSION['email'];
												  		$get_user="SELECT * from authenticate_user where email='$user'";
												  		$query=mysqli_query($conn,$get_user);
												 		
																$row_posts=mysqli_fetch_array($query);
																$id=$row_posts['id'];
																
																if(isset($_GET['id'])){
																	$id=$_GET['id'];
																}

																$get_user="SELECT * from authenticate_user WHERE id='$id'";
																$query=mysqli_query($conn,$get_user);
												 		
																$row_posts=mysqli_fetch_array($query);
																	// include 'connection.php';
																	$name=$row_posts['name'];
																	$u_image=$row_posts['u_image'];
																	$email=$row_posts['email'];
																	$lastlogin=$row_posts['lastlogin'];
																	$registerdate=$row_posts['registerdate'];
																	$fname=$row_posts['fname'];
																	$lname=$row_posts['lname'];
																	$mobile=$row_posts['mobile'];if($mobile===''){$mobile="-";}
																	$occupation=$row_posts['occupation'];if($occupation===''){$occupation="-";}
																	$gender=$row_posts['gender'];if($gender===''){$gender="-";}
																	$bloodgroup=$row_posts['bloodgroup'];if($bloodgroup===''){$bloodgroup="-";}
																	$bio=$row_posts['bio'];if($bio===''){$bio="-";}
																	$dob=$row_posts['dob'];if($dob===''){$dob="-";}
																	$nationality=$row_posts['nationality'];if($nationality===''){$nationality="-";}
																	$address=$row_posts['address'];if($address===''){$address="-";}
																	$pa=$row_posts['pa'];
																	$nd=$row_posts['nd'];
																	$iss=$row_posts['iss'];
																	$rs=$row_posts['rs'];
																	$user_type=$row_posts['user_type'];
																	?>

						<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="index.php">Home</a></li>
											<li class="active">Profile</li>
										</ol>
									   </div>
								    <!--//sub-heard-part-->
										<!--/profile-->
										<h3 class="sub-tittle pro">Profile</h3>
									       <div class="profile-widget">
														<img src="images/<?php echo $u_image ?>" alt=" " width="12%" height="12%"/>
														<h2><?php echo $name ?></h2>
													</div>
														<!--/profile-inner-->
														 <div class="profile-section-inner">
														       <div class="col-md-6 profile-info">
																	<h3 class="inner-tittle">Personal Information </h3>
																	<div class="main-grid3">
																     <div class="p-20">
																		<div class="about-info-p">
																			<strong>Full Name</strong>
																			
																			<p class="text-muted"><?php echo $name ?></p>
																		</div>
																		<div class="about-info-p">
																			<strong>Mobile</strong>
																			<br>
																			<p class="text-muted"><?php echo $mobile ?></p>
																		</div>
																		<div class="about-info-p">
																			<strong>Email</strong>
																			<br>
																			<p class="text-muted"><a href="mailto:<?php echo $email?>"><?php echo $email ?></a></p>
																		</div>
																		<div class="about-info-p">
																			<strong>Date Of Birth</strong>
																			<br>
																			<p class="text-muted"><?php echo $dob ?></p>
																		</div>
																		<div class="about-info-p m-b-0">
																			<strong>Bloodgroup</strong>
																			<br>
																			<p class="text-muted"><?php echo $bloodgroup ?></p>
																		</div>
																		<div class="about-info-p">
																			<strong>Gender</strong>
																			<br>
																			<p class="text-muted"><?php echo $gender ?></p>
																		</div>
																		<div class="about-info-p">
																			<strong>Nationality</strong>
																			<br>
																			<p class="text-muted"><?php echo $nationality ?></p>
																		</div>
																	</div>
																 </div>
																 <h3 class="inner-tittle">Biography </h3>
																<div class="main-grid3 p-skill">
																	<p><?php echo $bio ?></p>
																</div>
																<h3 class="inner-tittle two">Health Status</h3>
																	<div class="main-grid3">
																      	<div class="bar">
																			<p>Physical Activity</p>
																		</div>
																			<div class="skills">
																				 <div class="skill1" style="width:<?php echo $pa ?>%"> </div>							
																			</div>
																				<div class="bar">
																					<p>Nutrition / Diet</p>
																				</div>
																			<div class="skills">
																				 <div class="skill2" style="width:<?php echo $nd ?>%"> </div>							
																			</div>
																				<div class="bar">
																					<p>Immunity System</p>
																				</div>
																			<div class="skills">
																				 <div class="skill3" style="width:<?php echo $iss ?>%" > </div>							
																			</div>
																			<div class="bar">
																					<p>Rest / Sleep</p>
																				</div>
																			<div class="skills">
																				 <div class="skill4" style="width:<?php echo $rs ?>%" > </div>							
																			</div>
																    </div>
															  </div>
															   <div class="col-md-6 profile-info two">
															   <h3 class="inner-tittle">Activity </h3>
																<div class="main-grid3 p-skill">
														
																		<ul class="timeline">
																			<li>
																			  <div class="timeline-badge info"><i class="fa fa-smile-o"></i></div>
																			  <div class="timeline-panel">
																				<div class="timeline-heading">
																				   <h4 class="timeline-title"><a >Register Date</a></h4>
																				</div>
																				<div class="timeline-body">
																				  <p><?php echo $registerdate ?><i ></i></p>
																				</div>
																			  </div>
																			</li>
																			
																			<li>
																			  <div class="timeline-badge primary"><i class="fa fa-star-o"></i></div>
																			  <div class="timeline-panel">
																				<div class="timeline-heading">
																				   <h4 class="timeline-title"><a >Number of Posts</a></h4>
																				</div>
																				<div class="timeline-body">
																				  <p> <?php
																						include 'connection.php';
																						$abcd="SELECT * from posts where id='$id'";
																						$run=mysqli_query($conn,$abcd);
																						$ttl=mysqli_num_rows($run);
																						echo $ttl;

																?>
																<i ></i></p>
																				</div>
																			  </div>
																			</li>
																			
																			
																			
																			<!-- <li>
																			  <div class="timeline-badge danger"><i class="fa fa-times-circle-o"></i></div>
																			  <div class="timeline-panel">
																				<div class="timeline-heading">
																				   <h4 class="timeline-title"><a >Last Login</a></h4>
																				</div>
																				<div class="timeline-body">
																				  <p><?php echo $lastlogin ?> <i ></i></p>
																				</div>
																			  </div>
																			</li> -->
																			
																			<li>
																			  <div class="timeline-badge success"><i class="fa fa-check-circle-o"></i></div>
																			  <div class="timeline-panel">
																				<div class="timeline-heading">
																				  <h4 class="timeline-title"><a >Specialization</a></h4>
																				</div>
																				<div class="timeline-body">
																				  <p>Dentist<i ></i></p>
																				</div>
																			  </div>
																			</li>
																		</ul>
																		<div class="clearfix"></div>		
																	</div>
																</div>
																<!--/map-->
															<div class="col-md-6 profile-info two">
															   <h3 class="inner-tittle two">Address </h3>
																<div class="main-grid3 map">
	
																			  <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Purwokerto,+Central+Java,+Indonesia&amp;aq=0&amp;oq=purwo&amp;sll=37.0625,-95.677068&amp;sspn=50.291089,104.238281&amp;ie=UTF8&amp;hq=&amp;hnear=Purwokerto,+Banyumas,+Central+Java,+Indonesia&amp;ll=-7.431391,109.24783&amp;spn=0.031022,0.050898&amp;t=m&amp;z=14&amp;output=embed"></iframe>
																							<div class="gmap-info">
																									<h4> <i class="fa fa-map-marker"></i> <b><a href="#" class="text-dark"><?php echo $name ?></a></b></h4>
																									<p><?php echo $address ?></p>
																								</div>
																	
																	</div>
																	
																	
																	<!--//map-->
																</div>
																<div class="clearfix"></div>
															</div>
															
											 	<!--//profile-inner-->
												<!--//profile-->
									</div>
									<!--//outer-wp-->
													
										
									 <!--footer section start-->
										<footer>
										   <p>&copy; 2018 MediConnect . All Rights Reserved | Design by <a >MediConnect.</a></p>
										</footer>
									<!--//footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>MConnect</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  
									  	<?php 
									  	include('connection.php');
									  $user=$_SESSION['email'];
									  $xyz="SELECT * from authenticate_user where email='$user'";
									  $runim=mysqli_query($conn,$xyz);
									   $runimg=mysqli_fetch_array($runim);
									   $id=$runimg['id'];
									  if($runimg)
									  $imga=$runimg['u_image'];

									  echo "<img src='images/$imga' width='50%' height='50%' style='border-radius:50%'>";
									  ?>
									  	
									 
									  <a href="index.php"><span class=" name-caret"><?php 
echo $_SESSION['email'] ; ?></span></a>
									 <p> Computer Engineer</p>
									<ul>
				
										<li><a class="tooltips" href="profile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
															<li><a class="tooltips" href="index.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>	
									<li><a class="tooltips" href="logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										<!-- <li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Ask Doctors</span></a></li>
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Articles</span></a></li>
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>My Records</span></a></li>
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Insurance</span></a></li>
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>My Questions</span></a></li> -->
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Details</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="#"> Categories</a></li>
											<li id="menu-academico-avaliacoes" ><a href="#">Calendar</a></li>
										  </ul>
										</li>
		<li><a href="editor.php"><i class="lnr lnr-pencil"></i> <span>Ask Question</span></a></li>
 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Account</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="profile.php">View Profile</a></li>
											<li id="menu-academico-avaliacoes" ><a href="validation.php">Edit Profile</a></li>
										  </ul>
										</li>
					<li><a href="appointment/ap.html"><i class="lnr lnr-pencil"></i> <span>Appointment</span></a></li>
							<li><a href="myposts.php?u_id=<?php echo $id ?>"><i class="fa fa-smile-o"></i> <span>My Posts</span></a></li>
									<li><a ><i class="lnr lnr-chart-bars"></i> <span>Network</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
										<li><a href="map.php"><i class="lnr lnr-map"></i>World Maps</a></li>
										<li><a href="graph.php"><i class="lnr lnr-apartment"></i> Graph</a></li>
									</ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>