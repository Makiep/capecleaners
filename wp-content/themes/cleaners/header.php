<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage gurukul-education
 * @since 1.0
 * @version 1.4
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Shine a Cleaning Service Website Template</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hidden-sm hidden-xs">
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="call-info">
                        <p class="call-text"><i class="fa fa-envelope-open-o"></i><strong>info@shinecleaningservice.com</strong></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="call-info">
                        <p class="call-text"><i class="fa fa-phone"></i><strong>Call Now: +1800-123-4567</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-12 col-xs-12">
                    <div class="logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
                </div>
                <div class="col-lg-9 col-md-10 col-sm-12 col-xs-12">
                    <div class="navigation">
						<?php if ( has_nav_menu( 'top' ) ) : ?>
							<div id="navigation">
								<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
							</div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-section close -->
	