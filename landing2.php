<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EA Dream Supporters</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;

        }
      
    .notification-text {
        font-size: 14px; /* Reduced font size */
        margin: 0;
    }
        .notification-bar {
            width: 100%;
            background-color: #ff6600;
            color: white;
            padding: 10px;
            text-align: center;
            font-weight: 500;
            position: relative;
            overflow: hidden;
        }
        .hero-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            margin-top: 40px;
        }
        .hero-title {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .hero {
    position: relative;
    width: 1460px;
    height: 600px;
    background: linear-gradient(to right, #6a11cb, #2575fc);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    border-radius: 10px;
    padding: 40px;
}

.hero-timer {
    position: absolute;
    top: 15px;
    left: 15px;
    background: rgba(255, 255, 255, 0.2);
    padding: 8px 15px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
}

.btn-custom {
    position: absolute;
    bottom: 15px;
    right: 15px;
    background: #ff6600;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
    transition: background 0.3s ease-in-out, transform 0.2s, box-shadow 0.2s;
    display: inline-block;
    overflow: hidden;
}

/* Hover Effect */
.btn-custom:hover {
    background: #e65c00;
    transform: scale(1.05);
    box-shadow: 0px 4px 10px rgba(255, 102, 0, 0.3);
}

/* Button Click Interaction */
.btn-custom:active {
    transform: scale(0.95);
    transition: transform 0.1s ease-in-out;
}


        .hero-content {
            position: relative;
            z-index: 2;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

        }
        
        .square-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
            width: 100%;
        }
        .square {
            width: 480px;
            height: 480px;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-size: 20px;
            font-weight: 500;
            border-radius: 10px;
        }
        .faq-section {
            background: white;
            padding: 60px 0;
        }

.registration-wrapper {
    background: #222;
    padding: 60px 0;
}

.registration-section {
    background: white;
    padding: 40px;
    border-radius: 10px;
    max-width: 900px;
    height: 520px;
    margin: auto;
}

</style>
</head>
<body>
    
    <?php include('header1.php'); ?>

    <!-- Notification Bar -->
    <div class="notification-bar">
        <!-- Dynamic Notifications from Admin Page -->
        <!-- This section should fade in and show one notification at a time -->
        <p class="notification-text">🔥 Special Offer: Get 50% off on all courses! Limited Time Only.</p>
    </div>

    <div class="hero-container">
    <div class="hero">
        <div class="hero-overlay"></div>

        <!-- Fetching Hero Section Media from Admin -->
        <div class="hero-media">
            <?php
            $query = "SELECT * FROM landing WHERE Position='hero'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);

            if ($row) {
                if ($row['Type'] == 'image') {
                    echo '<img src="admin/uploads/' . $row['Banner'] . '" class="img-fluid w-100" alt="Hero Image">';
                } elseif ($row['Type'] == 'video') {
                    echo '<div class="embed-responsive embed-responsive-16by9">
                            <video muted autoplay class="embed-responsive-item w-100">
                                <source src="admin/uploads/' . $row['Banner'] . '" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                          </div>';
                }
            } else {
                echo '<div class="placeholder">No media uploaded yet.</div>';
            }
            ?>
        </div>

        <!-- Get Started Button (Bottom-Right Corner) -->
        <a href="#register" class="btn btn-custom">Get Started</a>
    </div>
</div>



    <div class="square-container">
        <div class="square">Image / Video</div>
        <div class="square">Image / Video</div>
        <div class="square">Image / Video</div>
    </div>

    <section class="faq-section">
        <div class="container">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            What services do we offer?
                        </button>
                    </h3>
                    <div id="faq1" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            We provide structured preparation for competitive exams with expert guidance.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="registration-wrapper">
    <div class="registration-section">
        <div class="container">
            <h2 class="text-center">Register Now</h2>
            <form class="row justify-content-center">
                <div class="col-md-6 white-box">
                    <input type="text" class="form-control mb-3" placeholder="Name">
                    <input type="email" class="form-control mb-3" placeholder="Email">
                    <input type="tel" class="form-control mb-3" placeholder="Phone Number" id="phoneNumber" pattern="[0-9]{10}" maxlength="10">
                    <textarea class="form-control mb-3" placeholder="Message" maxlength="100" rows="4"></textarea>

                    <button class="btn btn-primary w-100">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>


    <?php include('footer1.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
