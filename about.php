<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Online evant music booking System || About Us</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!---//End-css-style-switecher----->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>

</head>
<body>
<!---->
<?php include_once('includes/header.php');?>
<div class="about content">
	 <div class="container"> 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">About</li>	  
		 </ol>
		 <?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
		 <h2><?php  echo htmlentities($row->PageTitle);?></h2>
		 <div class="about-main">
			 <div class="col-md-6 abt-pic">
				 <img src="img/qp.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="col-md-6 abt-pic-info">
				 
				 <p style="color:#fff"><?php  echo $row->PageDescription;?>.</p>
				
			 </div>
			 <?php $cnt=$cnt+1;}} ?>
			 <div class="clearfix"></div>
		 </div>
	
		 <div class="latest">
			 <h3>LATEST PHOTOS</h3>		
			 <div class="pic start">
				 <a class="fancybox" href="img/co.jpg" data-fancybox-group="gallery" title="Focus on creating an immersive experiences"><img src="img/co.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Focus on creating an immersive experiences</a></h4>
				 <p>We live in a world where experiences are valued more than ever before. It’s not shock that experiential marketing is booming think about escape rooms, pop-ups and more popping up everywhere.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="img/zz.jpg" data-fancybox-group="gallery" title="Live Guitor solos"><img src="img/zz.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Live Guitor solos</a></h4>
				 <p>The quality of your event entertainment can make or break your event.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="img/ts.jpg" data-fancybox-group="gallery" title="Live "><img src="img/ts.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Live </a></h4>
				 <p>I remember when I first started my studio, it was so exciting, and I have memories of themes planned years in advance.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="img/we.jpg" data-fancybox-group="gallery" title="A solo performance"><img src="img/we.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">A solo performance</a></h4>
				 <p>sometimes referred to as a one-man show or one-woman show, features a single person telling a story for an audience, typically for the purpose of entertainment.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="img/qp.jpg" data-fancybox-group="gallery" title="Main event entertainment is the grand show."><img src="img/qp.jpg" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="event.html">Main event entertainment is the grand show.</a></h4>
				 <p>You may engage and appeal to your audience in hundreds of little ways throughout your event but main event entertainment is designed to awe and impress like nothing else you do.</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		<?php include_once('includes/footer.php');?>
	 </div>
</div>
<!---->

<!---->
</body>
</html>