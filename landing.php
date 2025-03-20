<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Bootstrap Design</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .dynamic-content {
            background-color: #ddd;
            padding: 40px;
            text-align: center;
        }
        .dynamic-card {
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
        }
        .faq h3 {
            cursor: pointer;
            background-color: #f8f9fa;
            padding: 10px;
            border: 1px solid #ddd;
        }
        .faq p {
            display: none;
            padding: 10px;
            background-color: #e9ecef;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
        }
        footer .newsletter input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        footer button {
            background-color: #ff6f00;
            border: none;
            padding: 10px;
            color: white;
            cursor: pointer;
        }
        #media {
            height: auto;
            overflow: hidden;
        }
        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            height: auto;
            padding: 0;
            overflow: hidden;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <?php include('header1.php'); ?>

    <!-- New Launches Section -->
    <section class="new-launches py-5">
        <div class="container text-center">
            <h2>New Launches</h2>
            <div class="dynamic-content mb-4" id="media">
                <?php
                // Fetching data from the landing table
                $query = "SELECT * FROM landing";
                $result = mysqli_query($con, $query);

                $row = mysqli_fetch_array($result);
                    if ($row['Position'] == 'bb' && $row['Type'] == 'image') {
                        echo '<img src="admin/uploads/' . $row['Banner'] . '" class="img-fluid" alt="Image">';
                    } elseif($row['Position'] == 'bb' && $row['Type'] == 'video') {
                        echo '<div class="embed-responsive embed-responsive-16by9">
                                <video muted autoplay class="embed-responsive-item">
                                    <source src="admin/uploads/' . $row['Banner'] . '" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                              </div>';
                    }
                ?>
            </div>
            <button class="btn btn-primary mb-5">Learn More</button>
            <div class="row">
                <div class="col-md-4">
                    <div class="dynamic-card">
                        <?php  
                        $query1 = "SELECT * FROM landing";
                $result1 = mysqli_query($con, $query1);

                $row1 = mysqli_fetch_array($result1);
                        if ($row1['Position'] == '1b' && $row1['Type'] == 'image') {
                            echo '<img src="admin/uploads/' . $row1['Banner'] . '" class="img-fluid mb-2" alt="Image">';
                        } elseif($row1['Position'] == '1b' && $row1['Type'] == 'video') {
                            echo '<div class="embed-responsive embed-responsive-16by9">
                                    <video controls class="embed-responsive-item">
                                        <source src="admin/uploads/' . $row1['Banner'] . '" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                  </div>';
                        } ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dynamic-card">
                        <?php  
                        $query2 = "SELECT * FROM landing";
                $result2 = mysqli_query($con, $query2);

                $row2 = mysqli_fetch_array($result2);
                        if ($row2['Position'] == '2b' && $row2['Type'] == 'image') {
                            echo '<img src="admin/uploads/' . $row['Banner'] . '" class="img-fluid mb-2" alt="Image">';
                        } elseif($row2['Position'] == '2b' && $row2['Type'] == 'video') {
                            echo '<div class="embed-responsive embed-responsive-16by9">
                                    <video controls class="embed-responsive-item">
                                        <source src="admin/uploads/' . $row2['Banner'] . '" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                  </div>';
                        } ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dynamic-card">
                        <?php  
                        $query3 = "SELECT * FROM landing";
                $result3 = mysqli_query($con, $query3);

                $row3 = mysqli_fetch_array($result3);
                        if ($row3['Position'] == '3b' && $row3['Type'] == 'image') {
                            echo '<img src="admin/uploads/' . $row3['Banner'] . '" class="img-fluid mb-2" alt="Image">';
                        } elseif($row3['Position'] == '3b' && $row3['Type'] == 'video') {
                            echo '<div class="embed-responsive embed-responsive-16by9">
                                    <video controls class="embed-responsive-item">
                                        <source src="admin/uploads/' . $row3['Banner'] . '" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                  </div>';
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More Details Section -->
    <section class="more-details py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="dynamic-content">
                        <?php 
                        $query4 = "SELECT * FROM landing";
                $result4 = mysqli_query($con, $query4);

                $row4 = mysqli_fetch_array($result4);
                        if ($row4['Position'] == 'mb' && $row4['Type'] == 'image') {
                            echo '<img src="admin/uploads/' . $row4['Banner'] . '" class="img-fluid mb-2" alt="Image">';
                        } elseif($row4['Position'] == 'mb' && $row4['Type'] == 'video') {
                            echo '<div class="embed-responsive embed-responsive-16by9">
                                    <video controls class="embed-responsive-item">
                                        <source src="admin/uploads/' . $row4['Banner'] . '" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                  </div>';
                        } ?>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul>
                            <li>Lorem ipsum</li>
                            <li>Lorem ipsum</li>
                            <li>Lorem ipsum</li>
                            <li>Lorem ipsum</li>
                        </ul>
                        <button class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faqs py-5">
        <div class="container">
            <h2 class="text-center mb-5">FAQ's</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            FAQ 1
                        </button>
                    </h3>
                    <div id="faq1" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            This is the answer to FAQ 1.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            FAQ 2
                        </button>
                    </h3>
                    <div id="faq2" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            This is the answer to FAQ 2.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            FAQ 3
                        </button>
                    </h3>
                    <div id="faq3" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            This is the answer to FAQ 3.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Section -->
    <section class="registration py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Registration</h2>
            <form class="row justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control mb-3" placeholder="Name">
                    <input type="email" class="form-control mb-3" placeholder="Email">
                    <input type="text" class="form-control mb-3" placeholder="Phone">
                    <textarea class="form-control mb-3" rows="4" placeholder="Message"></textarea>
                    <button class="btn btn-primary w-100">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <?php include('footer1.php'); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->
</body>
</html>
