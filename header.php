	<?php
	include('config.php');
	?>


	<header class="site-header mo-left header style-1">
		<!-- Main Header -->
		<div class="header-info-bar">
			<div class="container clearfix">
				<!-- Website Logo -->
				<div class="logo-header logo-dark">
					<a href="index"><img src="images/logo.png" alt="logo" style="max-width: 257px;
height: 56px;" ></a>
				</div>
				
				<!-- EXTRA NAV -->
				<div class="extra-nav" >
					<div class="extra-cell">
						<ul class="navbar-nav header-right">
							<li class="nav-item">
								<a class="nav-link" href="#">
								<i class="fa fa-sign-in" aria-hidden="true" style="padding-right: 5px;"></i>

									Login
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="registration">
									<i class="fa fa-user" aria-hidden="true" style="padding-right: 5px;"></i>

									Register
								</a>
							</li>
							</ul>
							</div>
							</div>
							
							
				<div class="extra-nav" style="display:none;" >
					<div class="extra-cell">
						<ul class="navbar-nav header-right">
							<li class="nav-item">
								<a class="nav-link" href="wishlist.html">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
									<span class="badge">21</span>
								</a>
							</li>
							<li class="nav-item">
								<button type="button" class="nav-link box cart-btn">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
									<span class="badge">5</span>
								</button>
								<ul class="dropdown-menu cart-list">
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="books-detail.html"> 
													<img alt="" class="media-object" src="images/books/small/pic1.jpg"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6 class="dz-title"><a href="books-detail.html" class="media-heading">Real Life</a></h6>
												<span class="dz-price">$28.00</span>
												<span class="item-close">&times;</span>
											</div> 
										</div>
									</li>
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="books-detail.html"> 
													<img alt="" class="media-object" src="images/books/small/pic2.jpg"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6 class="dz-title"><a href="books-detail.html" class="media-heading">Home</a></h6>
												<span class="dz-price">$28.00</span>
												<span class="item-close">&times;</span>
											</div> 
										</div>
									</li>
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="books-detail.html"> 
													<img alt="" class="media-object" src="images/books/small/pic3.jpg"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6 class="dz-title"><a href="books-detail.html" class="media-heading">Such a fun age</a></h6>
												<span class="dz-price">$28.00</span>
												<span class="item-close">&times;</span>
											</div> 
										</div>
									</li>
									<li class="cart-item text-center">
										<h6 class="text-secondary">Totle = $500</h6>
									</li>
									<li class="text-center d-flex">
										<a href="shop-cart.html" class="btn btn-sm btn-primary me-2 btnhover w-100">View Cart</a>
										<a href="shop-checkout.html" class="btn btn-sm btn-outline-primary btnhover w-100">Checkout</a>
									</li>
								</ul>
							</li>
							<li class="nav-item dropdown profile-dropdown  ms-4">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="images/profile1.jpg" alt="/">
									<div class="profile-info">
										<h6 class="title">Brian</h6>
										<span>info@gmail.com</span>
									</div>
								</a>
								<div class="dropdown-menu py-0 dropdown-menu-end">
									<div class="dropdown-header">
										<h6 class="m-0">Brian</h6>
										<span>info@gmail.com</span>
									</div>
									<div class="dropdown-body">
										<a href="my-profile.html" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
											<div>
												<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
												<span class="ms-2">Profile</span>
											</div>
										</a>
										<a href="shop-cart.html" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
											<div>
												<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
												<span class="ms-2">My Order</span>
											</div>
										</a>
										<a href="wishlist.html" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
											<div>
												<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
												<span class="ms-2">Wishlist</span>
											</div>
										</a>
									</div>
									<div class="dropdown-footer">
										<a class="btn btn-primary w-100 btnhover btn-sm" href="shop-login.html">Log Out</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			
						
				
						
				<!-- header search nav -->
				<div class="header-search-nav">
					<div class="header-item-search">
						<div class="input-group search-input">
						
							<select class="default-select">
							<?php
$ret=mysqli_query($con,"select distinct category from  category");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
								
								<option value="<?php  echo $row['category'];?>"><?php  echo $row['category'];?></option>
							<?php 
$cnt=$cnt+1;
}?>
							</select>
							
							<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
							<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
							
						</div>
					</div>
				</div>
				
				
				
			</div>
			
		</div>
	
		<!-- Main Header End -->
		
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header logo-dark">
						<a href="index.php"><img src="images/logo.png" alt="logo" style="max-width: 257px;
height: 56px;margin-top: 17px;"></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- EXTRA NAV -->
					<div class="extra-nav">
						<div class="extra-cell">
						<a href="career" class="btn btn-primary btnhover">Career Counselling </a>
						</div>
					</div>
					
					<!-- Main Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header logo-dark">
							<a href="index"><img src="images/logo.png" alt="" style="max-width: 257px; height: 56px;"></a>
						</div>
						<div class="search-input">
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
								<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
							</div>
						</div>
						<ul class="nav navbar-nav">
							<li><a href="index.php"><span>Home</span></a>								
							</li>
							<li><a href="about-us.php"><span>About us</span></a></li>
							<li class="sub-menu-down"><a href="#"><span>Products</span></a>
								<ul class="sub-menu">
									<li><a href="buy-book">Buy A Book</a></li>
									<li><a href="subscribe">Magazines - Subscription</a></li>
									<li><a href="rent-book">Rent A Book</a></li>
									<li><a href="course_edu">Educator's Course</a></li>
									<li><a href="coursefull">Institute's Course</a></li>
									<li><a href="testefull">Test Pack</a></li>
									
								</ul>
							</li>
							
							<li><a href="self-preparation"><span>Self Study India</span></a>
								
							</li>
							<li><a href="guidance"><span>GovPrep</span></a>
								
							</li>
							<li><a href="contact-us"><span>Contact Us</span></a></li>
						</ul>
						<div class="dz-social-icon">
							<ul>
								<li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/profile.php?id=100084243005569"></a></li>
								<li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/eadreamssindia?t=g7l770eakCwtbzWWAG6FCg&s=09"></a></li>
								<li><a class="fab fa-linkedin-in" target="_blank"href="https://www.linkedin.com/in/eadreamssindia"></a></li>
								<li><a class="fab fa-instagram" target="_blank" href=<a href="https://www.instagram.com/eadreamssindia/"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
	</header>