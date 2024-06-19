<?php
session_start();
error_reporting(0);

include('includes/config.php');
?>
<!DOCTYPE html>
 <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Shah Jewellers || About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<?php include_once('includes/header.php');?>

	<div id="breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="dashboard.php">Home</a></li>
				<li>About Us</li>
			</ul>
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

	<div id="body">
		<div class="container">
			<div class="product">
	<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
					<div class="image">
						<img src="images/SJ Logo.jpg" alt="">
					</div>
					<div class="details">
						<h1><?php  echo $row['PageTitle'];?></h1>
						
						<div class="entry">
							<?php  echo $row['  India is known for its jewellery.It is in our culture to adorn ourselves with the best jewellery during any festival or celebration.Jewellery showroom in yavatmal provides some of the top quality jewellery in various design. From silver to gold, they sell jewelllery made from various precious metals and stones. They help you find the ideal jewellery for every event within your price range.<br> If you are getting yourself some beautiful jewellery, we highly recommend you to visit shah jewellers (Nilesh bhai shah) in yavatmal HO, yavatmal. They are one of the best provider of the latest jewellery design, who are also knowm for their services such as same day delivery, shop in store, making charges.'];?>  India is known for its jewellery.It is in our culture to adorn ourselves with the best jewellery during any festival or celebration.Jewellery showroom in yavatmal provides some of the top quality jewellery in various design. From silver to gold, they sell jewelllery made from various precious metals and stones. They help you find the ideal jewellery for every event within your price range.<br> If you are getting yourself some beautiful jewellery, we highly recommend you to visit shah jewellers (Nilesh bhai shah) in yavatmal HO, yavatmal. They are one of the best provider of the latest jewellery design, who are also knowm for their services such as same day delivery, shop in store, making charges.</p>
							
						</div>
						
					</div>
				</div><?php } ?>
			<!-- / content -->
		</div>
		<!-- / container -->
	</div>
	<!-- / body -->

<?php include_once('includes/footer.php');?>


	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
