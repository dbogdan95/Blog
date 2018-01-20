<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta Tag -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- SEO -->
		<meta name="description" content="150 words">
		<meta name="author" content="uipasta">
		<meta name="url" content="http://www.yourdomainname.com">
		<meta name="copyright" content="company name">
		<meta name="robots" content="index,follow">

		<title>MVC Blog - Bogdan Deaconu</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="/assets/images/favicon/favicon.ico">
		<link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="/assets/images/favicon/apple-touch-icon.png">

		<!-- All CSS Plugins -->
		<link rel="stylesheet" type="text/css" href="/assets/css/plugin.css">

		<!-- Main CSS Stylesheet -->
		<link rel="stylesheet" type="text/css" href="/assets/css/style.css">

		<!-- Google Web Fonts  -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

		<!-- Back to Top Start -->
		<a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
		<!-- Back to Top End -->

		<!-- All Javascript Plugins  -->
		<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugin.js"></script>

		<!-- Main Javascript File  -->
		<script type="text/javascript" src="/assets/js/scripts.js"></script>


		<!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		<!-- head -->
		<?php include "views/partials/head.php";?>
			
		<?php include 'views/'.$content_view;?>
		
		<!-- footer -->
		<?php include "views/partials/footer.php"; ?>
	</body>
</html>
