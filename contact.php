<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.jpg">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>       
        <!-- End Preloader -->
		<?php include 'header.php'; ?> 
		<!-- Breadcrumbs -->  
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Contact Us</h2>
							<ul class="bread-list">
								<li><a href="index.php">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row"> 
						<div class="col-lg-6">
							<div class="contact-us-left">
								<!--Start Google-map -->
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12626.369577186564!2d73.8883571!3d18.5739713!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c17944154115%3A0x232f7e48d5ade5b2!2sSANJIVANI%20ORGANICS%20LAKDI%20GHANA%20OILS!5e1!3m2!1sen!2sin!4v1732962206960!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								<!--/End Google-map -->
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h2>Contact With Us</h2>
								<p>If you have any questions please fell free to contact with us.</p>
								<!-- Form -->
								 
								<form class="form" id="orderForm">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <input name="name" type="text" placeholder="Full Name" required>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <input name="email" type="email" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <input name="phone" type="text" placeholder="Phone Number" required>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <select name="oil_type" class="form-control" required>
                            <option value="">Select Oil Type</option>
                            <option value="Mustard Oil">Mustard Oil</option>
                            <option value="Coconut Oil">Coconut Oil</option>
                            <option value="Groundnut Oil">Groundnut Oil</option>
                            <option value="Sesame Oil">Sesame Oil</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <select name="quantity" class="form-control" required>
                            <option value="">Select Quantity</option>
                            <option value="500ml">500ml</option>
                            <option value="1L">1L</option>
                            <option value="5L">5L</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <input name="delivery_date" type="text" placeholder="Preferred Delivery Date" id="datepicker" required>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-group">
                        <textarea name="address" placeholder="Address for Delivery" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-4 col-12">
                    <div class="form-group">
                        <div class="button">
                            <button type="submit" class="btn">Place Order</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8 col-12">
                    <p>( We will confirm your order via a Text Message or Call )</p>
                </div>
            </div>
            <div id="formMessage" class="mt-3"></div>
        </form>
		<div id="loader" style="display: none;">
            <div class="spinner"></div>
        </div>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-info py-4">
    <div class="row g-4">
        <!-- single-info -->
        <div class="col-lg-4 col-12">
            <div class="single-info text-center p-3 border rounded shadow">
                <i class="icofont icofont-ui-call fs-2"></i>
                <div class="content mt-2">
                    <h3>+91 7588009091</h3>
                    <p>Sanjivaniorganics01@gmail.com</p>
                </div>
            </div>
        </div>
        <!--/End single-info -->
        
        <!-- single-info -->
        <div class="col-lg-5 col-12">
            <div class="single-info text-center p-3 border rounded shadow">
                <i class="icofont-google-map fs-2 "></i>
                <div class="content mt-2">
                    <h3>Shop No. 3, Chandan Classic Lane No. 1, Airport Rd</h3>
                    <p>Near Hotel Kolhapur Tadka, Tingre Nagar, Pune, Maharashtra 411015</p>
                </div>
            </div>
        </div>
        <!--/End single-info -->
        
        <!-- single-info -->
        <div class="col-lg-3 col-12">
            <div class="single-info text-center p-3 border rounded shadow">
                <i class="icofont icofont-wall-clock fs-2 "></i>
                <div class="content mt-2">
                    <h3 >Mon - Sun: 10:30am - 8:30pm</h3>
                    <p >Thursday Closed</p>
                </div>
            </div>
        </div>
        <!--/End single-info -->
    </div>
</div>

			</div>
		</section>
		<!--/ End Contact Us -->
		
		<?php include 'footer.php'; ?>


		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#orderForm').on('submit', function (e) {
            e.preventDefault(); // Prevent default form submission

            // Show the loader
            $('#loader').show();
            $('#formMessage').html(''); // Clear previous messages

            setTimeout(() => {
                // Simulate delay for 2 seconds
                $.ajax({
                    url: 'submit_order.php', // PHP file to handle the submission
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function (response) {
                        $('#loader').hide(); // Hide the loader
                        $('#formMessage').html('<div class="alert alert-success">Order placed successfully!</div>');
                        $('#orderForm')[0].reset(); // Reset the form
                    },
                    error: function () {
                        $('#loader').hide(); // Hide the loader
                        $('#formMessage').html('<div class="alert alert-danger">Something went wrong. Please try again!</div>');
                    }
                });
            }, 2000); // Delay for 2 seconds
        });
    });
</script>
		<!-- jquery Min JS -->
        <script src="js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="js/easing.js"></script>
		<!-- Color JS -->
		<script src="js/colors.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="js/steller.js"></script>
		<!-- Wow JS -->
		<script src="js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Google Map API Key JS -->
		<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
		<!-- Gmaps JS -->
		<script src="js/gmaps.min.js"></script>
		<!-- Map Active JS -->
		<script src="js/map-active.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>
    </body>
</html>