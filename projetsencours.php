<!doctype html>
<html class="no-js" lang="en">

<?php 	
	include('pages/database.php');
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}
	?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VP || </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel  main css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css?v=12">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
		<?php include('pages/header.php'); ?>
		<header>
			<div class="overlay"></div>
			<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
			<source src="https://my.tikee.io/v2/videos/8abd3838-cc72-4369-89a6-fd9caf862fdf/low_bitrate" type="video/mp4">
			</video>
			 <div class="ht__bradcaump__wrap">
			 <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
 								 <h2 class="bradcaump-title">NOS <span class="text--theme">PROJETS</span></h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Accueil</a>
                                  <span class="brd-separetor">-</span>
                                  <span class="breadcrumb-item active">PROJETS</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
		</header>
        <!-- End Bradcaump area -->
         <!-- Start Service Area -->
        <section class="htc__service__area service__page bg__gray ptb--30">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title text-center">
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="service__section__wrap clearfix">
                        <!-- Start Single Service -->
                        
						<?php 
					$sql = "select * from projet";
					$result = $link->query($sql);
					if ($result->num_rows > 0) {	
						while(	$data33 = $result->fetch_assoc()){
						if($data33['type_acces']!='PRIVE'){
							$link = 'detail-projet.php?id='.$data33['id'];
						} else {
							$link = 'http://www.cloud.virtualproject.fr/';
						}
					?>
					<div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="service foo">
                                <div class="service__thumb">
                                    <a href="<?php echo $link; ?>">
                                        <img src="images/service/1.jpg" alt="service images">
                                    </a>
                                    <div class="service__hover">
                                        <div class="service__action">
                                            <a href="<?php echo $link; ?>">D??TAILS</a>
                                        </div>
                                    </div>
                                </div>
						<div class="service__details">
							<?php if($data33['type_acces']=='PRIVE'){ echo '<i class="fa fa-lock" aria-hidden="true" style="float:left"></i>'; }?>	<h2> <a href="<?php echo $link; ?>"><?php echo $data33['nomduprojet']; ?></a></h2>
						</div>
                            </div>
                        </div>
					<?php }}  ?>
                        <!-- End Single Service -->
                        </div>
                </div>
            </div>
        </section>
        <!-- End Service Area -->
       
	  <?php include('pages/footer.php'); ?>
	</div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>



</html>