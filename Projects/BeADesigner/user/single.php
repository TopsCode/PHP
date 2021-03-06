<?php
include ('include/single_controller.php');

?>
<!DOCTYPE html>
<html>

<head>
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->

<!--web-fonts-->
<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->

</head>
<body>

	<?php include 'header.php'; ?>
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Single page</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--single-page-->
	<div class="single">
		<div class="container">
			<div class="single-info">		
				<div class="col-md-6 single-top wow fadeInLeft animated" data-wow-delay=".5s">	
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="thumb-image"> <img src="image/<?php echo $fet->image;?>"class="img-responsive" alt=""> </div>
								
		
							</li>
							 
						</ul>
					</div>
				</div>
				<div class="col-md-7 single-top-left simpleCart_shelfItem wow fadeInRight animated" data-wow-delay=".5s">
					<h3><?php echo $fet->product_name;?></h3>
					<div class="single-rating">
						
						<p>5.00 out of <?php echo $fet->quantity;?></p>
						<a href="feedback.php?pid=<?php echo $fet->product_id;?>">Add Your Review</a>
					</div>
					<h6 class="item_price"><?php echo $fet->price;?></h6>			
					<p><?php echo $fet->discription;?></p>
					<ul class="size">
						<h4>Size</h4>
						<li><?php echo $fet->size;?></li>
						
					</ul>
					<ul class="color">
						<h4>Color</h4>
						<li><?php echo $fet->colour;?></a></li>
						
					</ul>
					<div class="clearfix"> </div>
					<div class="quantity">
						<p class="qty"> Qty :  </p><input min="1" type="number" value="1" class="item_quantity">
					</div>
					<div class="btn_form">
						<a class="item_add" href="cart.php?product=<?php echo $fet->product_id;?>">ADD TO CART</a>	
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>
			
	
	<!--//single-page-->
	<!--footer-->
	<?php include 'footer.php'; ?>
</body>
</html>