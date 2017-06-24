<!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
	<?php include('head.php'); ?>
</head>

<body id="home">


<!-- Preloader -->
<div id="preloader">
	<div id="status"></div>
</div>

<!-- Section 1 --PRESENTATION -->
<?php include('section1.php'); ?>
<!-- NavBar-->
<?php include('navbar.php'); ?>

<!-- Section 2 -- INFOGRAPHIE -->
<?php include('section2.php'); ?>

<!-- Section 3 -- WEB -->
<?php include('section3.php'); ?>

<!-- Section 4 --TELECOM -->
<?php include('section4.php'); ?>

<!-- Section 5 -- EXPERIENCES -->
<?php include('section5.php'); ?>

<!-- Section 6 -- DIPLOME-->
<?php include('section6.php'); ?>

<!-- Section 7 -->
<?php include('section7.php'); ?>

<!-- Section 8  -->
<?php include('section8.php'); ?>

<!-- Section 9-->
<?php include('section9.php'); ?>


<!-- Section 10 -- Contact -->
<?php include('section10.php'); ?>



<!-- FOOTER -->
<?php include('footer.php'); ?>


<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/script.js"></script>
<!-- StikyMenu -->
<script src="js/stickUp.min.js"></script>
<script type="text/javascript">
	jQuery(function($) {
		$(document).ready( function() {
			$('.navbar-default').stickUp();

		});
	});

</script>
<!-- Smoothscroll -->
<script type="text/javascript" src="js/jquery.corner.js"></script>
<script src="js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<script src="js/classie.js"></script>
<script src="js/uiMorphingButton_inflow.js"></script>
<!-- Magnific Popup core JS file -->
<script src="js/jquery.magnific-popup.js"></script>
</body>

</html>
