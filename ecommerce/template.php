<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php display_title(); ?></title>
    
    <!--Import Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400|Roboto:400,500,700|Oswald:600|Open+Sans:400,700|Shadows+Into+Light|Anton:400,700" rel="stylesheet">

    <!--Import Fontawesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Import Slick Slider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Import Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--Import Custom CSS-->
    <link rel="stylesheet" href="assets/css/main.css">

<body>
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>  
	<?php require "partials/nav.php";?>
    <main>
    	<?php display_content(); ?>	
    </main>
    <?php require "partials/footer.php";?>
    
    <!--Import jQuery-->
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Import Slick Slider JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>

    <!-- Import Bootstrap JS -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

    <!--Import Custom Javascript-->
    <script type="text/javascript" src="assets/js/custom.js"></script>
</head>
</body>
</html>	

