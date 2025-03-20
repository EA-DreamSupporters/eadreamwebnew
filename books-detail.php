<?php 
include('config.php');
?>
<?php
//Code for Adding Product in to Cart
$pid=intval($_GET['id']);
if(isset($_POST['addtocart'])){
if(strlen($_SESSION['id']) == 0)
{   
echo "<script>alert('Pleae login to buy this book');</script>";
} else{
$userid=$_SESSION['id']; 
$pqty=$_POST['inputQuantity'];  
$query=mysqli_query($con,"select id,productQty from cart where userId='$userid' and productId='$pid'");
$count=mysqli_num_rows($query);
if($count==0){
mysqli_query($con,"insert into cart(userId,productId,productQty) values('$userid','$pid','$pqty')");
//echo "<script>alert('Product added in cart');</script>";
  echo "<script type='text/javascript'> document.location ='cart.php'; </script>";
} else { 
$row=mysqli_fetch_array($query);
$currentpqty=$row['productQty'];
$productqty=$pqty+$currentpqty;
mysqli_query($con,"update cart set productQty='$productqty' where userId='$userid' and productId='$pid'");
//echo "<script>alert('Product added in cart');</script>";
  echo "<script type='text/javascript'> document.location ='cart.php'; </script>";
}
}}
if(isset($_POST['addtocart1'])){
if(strlen($_SESSION['id']) == 0)
{   
echo "<script>alert('Pleae login to buy this book');</script>";
echo "<script type='text/javascript'> document.location ='login.php'; </script>";
} else{
$userid=$_SESSION['id']; 
$pqty=$_POST['inputQuantity'];  
$query=mysqli_query($con,"select id,productQty from cart where userId='$userid' and productId='$pid'");
$count=mysqli_num_rows($query);
if($count==0){
mysqli_query($con,"insert into cart(userId,productId,productQty) values('$userid','$pid','$pqty')");
//echo "<script>alert('Added in cart');</script>";
  echo "<script type='text/javascript'> document.location ='book_details.php?id=$pid'; </script>";
} else { 
$row=mysqli_fetch_array($query);
$currentpqty=$row['productQty'];
$productqty=$pqty+$currentpqty;
mysqli_query($con,"update cart set productQty='$productqty' where userId='$userid' and productId='$pid'");
//echo "<script>alert('Added in cart');</script>";
  echo "<script type='text/javascript'> document.location ='book_details.php?id=$pid'; </script>";
}
}}

$id=$_GET["id"];
$result1 = mysqli_query($con,"SELECT a.*,b.*,c.* FROM books AS a, category AS b, subcategory AS c WHERE a.book_id='$id' AND a.cat_id=b.category_id AND a.subcat_id=c.subcategory_id");
$row1 = mysqli_fetch_array($result1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Online book center, Government exam materials rental, book rental, TNPSC, SSC, UPSC, BANKING, career guidance, Youtube videos, magazine subscription, institute courses, test packs for government exam preparations" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="" />
	<meta name="description" content="EA Dream Supporters is an ED tech business that began to care about the career aspirations of Indian youngsters. Numerous youths struggled to locate the appropriate resources and opportunities for their dream. So EA creates Dream Supporting Services, a unique one-stop portal for competitive test preparation. We support youth by acting as a prodding force for their desired course."/>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Books Details - EA Dream Supporters</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="icons/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
.dz-social-icon.style-3 li:nth-child(4) {
  background-color: #0A66C2;
}
</style>
</head>

<body>
<div class="page-wraper">
<div id="loading-area" class="preloader-wrapper-2">
		<div class="preloader-inner">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div> 
	</div>
	<!-- Header -->
	<?php include'header.php'; ?>
	<!-- Header End -->
	<div class="page-content bg-grey">
		<section class="content-inner-1">
			<div class="container">
				<div class="row book-grid-row style-4 m-b60">
					<div class="col">
						<div class="dz-box">
							<div class="dz-media">
								<img src="images/books/book16.png" alt="book">
							</div>
							<div class="dz-content">
								<div class="dz-header">
									<h3 class="title"><?php  echo $row1['book'];?></h3>
									<div class="shop-item-rating">
										<div class="d-lg-flex d-sm-inline-flex d-flex align-items-center">
											<ul class="dz-rating">
												<li><i class="flaticon-star text-yellow"></i></li>	
												<li><i class="flaticon-star text-yellow"></i></li>	
												<li><i class="flaticon-star text-yellow"></i></li>	
												<li><i class="flaticon-star text-yellow"></i></li>		
												<li><i class="flaticon-star text-muted"></i></li>		
											</ul>
											<h6 class="m-b0">4.0</h6>
										</div>
										<div class="social-area">
											<ul class="dz-social-icon style-3">
												<li><a href="https://www.facebook.com/dexignzone" class="fb-btn" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
												<li><a href="https://twitter.com/dexignzones"  class="tw-btn" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
												<li><a href="https://www.whatsapp.com/"  class="wa-btn" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
												<li><a href="https://www.google.com/intl/en-GB/gmail/about/" class="li-btn" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="dz-body">
								
									<div class="book-detail">
										<ul class="book-info">
											<li>
												<div class="writer-info">
													<img src="images/<?php echo $row1['image']; ?>">		
													<div>
														<span>Writen by</span><?php  echo $row1['author'];?>
													</div>
												</div>
											</li>
											<li><span>Publisher</span>Printarea Studios</li>
											<li><span>Year</span>2019</li>
										</ul>
									</div>
									<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
									<p class="text-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem</p>
									<div class="book-footer">
										<div class="price">
											<h5><?php  echo $row1['price'];?></h5>
											<p class="p-lr10">$70.00</p>
										</div>
										<div class="product-num">
											<div class="quantity btn-quantity style-1 me-3">
												<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
											</div>
											<a href="shop-cart.php" class="btn btn-primary btnhover2"><i class="flaticon-shopping-cart-1"></i> <span>Add to cart</span></a>
											<div class="bookmark-btn style-1 d-none d-sm-block">
												<input class="form-check-input" type="checkbox" id="flexCheckDefault1">
												<label class="form-check-label" for="flexCheckDefault1">
													<i class="flaticon-heart"></i>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			
			</div>
		</section>
		
		<!-- Client Start-->
		<div class="bg-white py-5">
			<div class="container">
			<!--Client Swiper -->
				<div class="swiper client-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img src="images/client/client1.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client2.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client3.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client4.svg" alt="client"></div>
						<div class="swiper-slide"><img src="images/client/client5.svg" alt="client"></div>	
					</div>
				</div>
			</div>
		</div>
		<!-- Client End-->
		
		<!-- Feature Box -->
<?php include'count.php' ; ?>
		<!-- Newsletter End -->
	</div>
	<!-- Footer -->
		<?php include'footer-white.php'; ?>
	
	<!-- Footer End -->
	
	<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
</div>

<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="js/social-share.js"></script><!-- social media post share -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script><!-- BOOTSTRAP TOUCHSPIN JS -->
<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->
<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
</body>
</html>