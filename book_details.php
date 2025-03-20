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
	<title>Buy A Book - EA Dream Supporters</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/nouislider/nouislider.min.css">
	
	
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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
<?php
include("header1.php");
?>
<?php
//Code for Adding Product in to Cart
$pid=intval($_GET['id']);
if(isset($_POST['addtocart'])){
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
	echo "<script>alert('Book Added!');</script>";
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
<style>
h3.title {
    text-transform: capitalize;
}
h5.subtitle {
	text-transform: capitalize;
}
td {
	text-transform: capitalize;
}
.addcart{
	margin-right:20px;
}
#term {
  position: relative;
  top: 8px;
  right: -11px;
}
</style>
	<div class="page-content bg-grey">
		<section class="content-inner-1">
			<div class="container">
			<form name="productdetails" method="post">
				<div class="row book-grid-row style-4 m-b60">
					<div class="col">
						<div class="dz-box">
							<div class="dz-media">
								<img src="images/<?php echo $row1['image']; ?>" alt="book">
							</div>
							<div class="dz-content">
								<div class="dz-header">
									<h3 class="title"><?php echo $row1['book']; ?></h3>
									<div class="shop-item-rating">
										<div class="d-lg-flex d-sm-inline-flex d-flex align-items-center">
											<div class="social-area">
											<ul class="dz-social-icon style-3 share-btn">
												<li><a href="" class="fb-btn" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
												<li><a href=""  class="tw-btn" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
												<li><a href=""  class="wa-btn" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
												<li><a href="" class="li-btn" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
											</ul>
										</div>
										</div>
										
									</div>
								</div>
								
								<div class="dz-body">
									<div class="book-detail">
										<ul class="book-info">
											<li>
												<div class="writer-info">
												
													<div>
														<span>Writen by</span><?php echo $row1['author']; ?>
													</div>
												</div>
											</li>
											<li><span>Category</span><?php echo $row1['category']; ?></li>
											<li><span>Subcategory</span><?php echo $row1['subcategory']; ?></li>
										</ul>
									</div>
									<p class="text-1"><?php echo $row1['description']; ?></p>
									<div class="book-footer">
									
										<div class="price">
											<h5>₹ <?php echo $row1['price']; ?></h5> 
											
											<del style = "margin-left:10px;">₹ <?php echo $row1['mrp']; ?></del>
										</div>
										
									</div>
									<div class="book-footer">
										
										<div class="product-num">
											<input class="form-control text-center me-3" id="inputQuantity" name="inputQuantity" min="1" max="3" type="number" value="1"  />
                            
											
										</div>
										
										
									</div>
									<div class="product-num">
							<p id="term">*Delivery Charges Applicable*</p>
										</div>
									<div class="book-footer">
										
										<div class="product-num">
											<button class="btn btn-secondary btnhover2 addcart" type="submit" name="addtocart1">
                                <i class="bi-cart-fill me-1"></i>
                                Add to Cart
                            </button>
							
							
							<?php 
                                                
												if(strlen($_SESSION['id']) == 0)
												  {   
													  ?>

											  <div><a class="btn btn-secondary btnhover2" href="" data-bs-toggle="modal"
													  data-bs-target="#myModal">
													  <i aria-hidden="true"
														  style="padding-right: 5px;"></i>

														  Buy Now
												  </a></div>

											  <?php
												 

												  } else{

													  ?>

<button class="btn btn-secondary btnhover2 " type="submit" name="addtocart">
                                <i class="bi-cart-fill me-1"></i>
                                Buy Now
                            </button>

											  <?php
													  
													  
													  } 
												  
										  ?>
										</div>
									
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				</form>
				</div>
		</section>
		
		
		
<!-- Feature Box -->
<?php include'count.php' ; ?>->
		
	</div>
	
	<!-- Footer -->
	<?php include'footer-white.php'; ?>
	<!-- Footer End -->
	
	<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
</div>

<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="vendor/countdown/counter.js"></script><!-- COUNTER JS -->
<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="vendor/wnumb/wNumb.js"></script><!-- WNUMB -->
<script src="vendor/nouislider/nouislider.min.js"></script><!-- NOUSLIDER MIN JS-->
<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->
<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->

<script>
								const fbBtn = document.querySelector(".fb-btn");
const waBtn = document.querySelector(".wa-btn");
const twBtn = document.querySelector(".tw-btn");
const liBtn = document.querySelector(".li-btn");

const pageUrl = location.href
const message = "hi every one ,please check  out"


function init(){
	
	let postUrl=encodeURI(document.location.href);
	let postTitle=encodeURI("hi every one ,please check this out: ");

	fbBtn.setAttribute("href",`https://www.facebook.com/sharer.php?u=${postUrl}`);
	waBtn.setAttribute("href",`https://api.whatsapp.com/send?text=${message} , ${pageUrl}`);
	twBtn.setAttribute("href",`https://twitter.com/share?url=${postUrl}&text=${postTitle}&via=[via]&hashtags=[hashtags]`);
	liBtn.setAttribute("href",`https://www.linkedin.com/shareArticle?url=${postUrl}&title=${postTitle}`);
}
init();
								</script>
</body>
</html>