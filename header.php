<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="toyBuddyApp">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
		<title>
		<?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			global $page, $paged;

			wp_title( '|', true, 'right' );

			// Add the blog name.
			bloginfo( 'name' );
			?>
		</title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<!-- Bootstrap core CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Loved+by+the+King' rel='stylesheet' type='text/css'>


		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->

	    <!-- Custom styles for this template -->
		<?php
			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );
			wp_head();
		?>
	</head>

<!-- NAVBAR================================================== -->
  <body data-spy="scroll" data-target=".navbar">
    <div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
            </div>

            <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav  navbar-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#howitoworks">How it works</a></li>
                        <li><a href="#playnlearn">Play-n-Learn</a></li>
                        <li><a href="#discuss">Blog</a></li>
<!--                        <li><a href="#testimonials">What others say</a></li>-->
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#contactus">Register</a></li>
                    </ul>
            </div>
              <!--<div class="tagline">INDIA'S FIRST e-LIBRARY OF GUIDED LEARNING RESOURCES</div>-->
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide carousel-div" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
<!--        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
-->      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <div class="container">
            <div class="carousel-caption">
              <div class="carousal-text">
				<strong>INDIA'S First e-Library Of Guided Learning Resources</strong>
              </div>
              <br /><br /><br /><br /><br /><br />
              <p></p>
            </div><!-- end carousal-caption -->
          </div><!-- end container -->
        </div><!-- end item -->
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <div class="carousal-text">
				Get age-appropriate learning resources matching the educational and recreational needs of <strong>YOUR CHILD</strong>.
              </div>
              <br /><br />
              <p><a class="btn btn-lg btn-success" href="#contactus" role="button">Register for Free evaluation</a></p>
            </div><!-- end carousal-caption -->
          </div><!-- end container -->
        </div><!-- end item -->
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
             	<div class="carousal-text">
					Get a Child development Expert to continuously evaluate and work on the development of <strong>YOUR CHILD</strong>.
				</div>
              <br /><br />
              <p><a class="btn btn-lg btn-success" href="#" role="button">Get 1 month Free trial package</a></p>
            </div><!-- end carousal-caption -->
          </div><!-- end container -->
        </div><!-- end item -->
        <div class="item">
			<div class="container">
            <div class="carousel-caption">
             	<div class="carousal-text">
             		Discuss online with other parents, educators and child psychiatrists issues related to school and <strong>YOUR CHILD</strong>.
             	</div>
                <br /><br />
              	<p>
              		<a class="btn btn-lg btn-success" href="#contactus" role="button">Ask your question now!</a>
              	</p>
            </div><!-- end carousal-caption -->
          </div><!-- end container -->
        </div><!-- end item -->
        </div><!-- carousal-inner -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div><!-- /.carousel -->
