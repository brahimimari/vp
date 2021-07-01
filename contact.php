<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VIRTUAL PROJECT || Contact</title>
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
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
	 <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" data--black__overlay="6" style="background: rgba(0, 0, 0, 0) url(images/bg/5.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">CONTACT</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">-</span>
                                  <span class="breadcrumb-item active">Contact</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Address -->
        <section class="htc__contact__area bg__white ptb--20">
            <div class="container">
                 <div class="row">
                    <div class="col-md-12">
                        <div class="htc__contact__form__wrap">
                            <h2 class="title__line--5">Vous pouvez nous contacter via ce formulaire :</h2>
                            <div class="contact-form-wrap">
                                <form id="contact-form" action="#" method="post">
                                    <div class="single-contact-inner">
                                        <div class="single-contact-form">
                                            <div class="contact-box name">
                                                <span>NOM COMPLET*</span>
                                                <input type="text" name="name">
                                            </div>
                                            <div class="contact-box email">
                                                <span>Email*</span>
                                                <input type="email" name="email">
                                            </div>
                                            <div class="contact-box subject">
                                                <span>Sujet*</span>
                                                <input type="text" name="subject">
                                            </div>
                                        <div class="contact-box message">
                                                <span>Message*</span>
                                                <textarea name="message"></textarea>
                                            </div>
                                            <div class="contact-btn">
                                                <button type="submit" class="htc__btn btn--theme">ENVOYER</button>
                                            </div>
											
											</div>
                                        <div class="single-contact-form">
                                             <div class="ct__address">
                                <div class="ct__address__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="ct__details">
                                    <p><a href="#">(001) 24568 365 987)</a></p>
                                    <p><a href="#">(001) 65897 569 784)</a></p>
                                </div>
                            </div>
                            <!-- End Single Address -->
                            <!-- Start Single Address -->
                            <div class="ct__address">
                                <div class="ct__address__icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="ct__details">
                                    <p><a href="#">infor@simplyconstruction.com</a></p>
                                    <p><a href="#">www.simplyconstruction.com</a></p>
                                </div>
                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Address -->
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

    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.7286, 90.3854), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                 styles: 
[
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    }
]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.7286, 90.3854),
                map: map,
                title: 'Construction!',
                icon: 'images/icons/map.png',
                animation:google.maps.Animation.BOUNCE

            });
        }
    </script>
	<script>
	$(function() { var logo = $(".lrg-logo"); $(window).scroll(function() {
	var scroll = $(window).scrollTop();

	if (scroll >= 250) {
	  if(!logo.hasClass("sml-logo")) {
		logo.hide();
		logo.removeClass('lrg-logo').addClass("sml-logo").fadeIn( "slow");
	  }
	} else {
	  if(!logo.hasClass("lrg-logo")) {
		logo.hide();
		logo.removeClass("sml-logo").addClass('lrg-logo').fadeIn( "slow");
	  }
	}

	});
	});
	</script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>



</html>