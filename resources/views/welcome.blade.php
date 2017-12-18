<!--
	Author: james and abu
	Author URL: http://topmarks.com

-->
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>TopMarks: #1 academic helper!</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="topmarks,homeworks, Essay, academic writing, term paper, essay help, term paper help, homework help" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="css/swipebox.css">
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <!-- //css files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //online-fonts -->
</head>
<body>
<!-- banner -->
<div class="main_section_agile" id="home">
    <div class="agileits_w3layouts_banner_nav">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a class="navbar-brand" href="/"><i class="fa fa-leanpub" aria-hidden="true"></i> topmarks, inc</a></h1>

            </div>
            <div class="w3layouts_header_right">
                <form action="#" method="post">
                    <input name="Search here" type="search" placeholder="Search" required="">
                    <input type="submit" value="">
                </form>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-2" id="link-effect-2">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/" class="effect-3">Home</a></li>
                        <li><a href="#about" class="effect-3 scroll">About Us</a></li>
                        <li><a href="#services" class="effect-3 scroll">Services</a></li>
                        <li><a href="#mail" class="effect-3 scroll">Contact Us</a></li>
                    </ul>
                </nav>

            </div>
        </nav>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- banner -->
<div class="about-bottom">
    <div class="col-md-6 w3l_about_bottom_left">
        <div class="video-grid-single-page-agileits">
            <!--<div data-video="E91gAjunqOM" id="video"> -->

            <img src="images/banner2.jpg" alt="" class="img-responsive" /> </div>
    </div>
    <div class="w3l_about_bottom_left_video">

    </div>
</div>
<div class="col-md-6 w3l_about_bottom_right one">
    <div class="abt-w3l">
        <div class="header-w3l">
            <h2>Assignment details Form</h2>
            <h4>please fill out</h4>
            <form action="/create" method="post" class="mod2" files=true >

                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                <div class="col-md-6 col-xs-6 w3l-left-mk">
                    <ul>
                        <li class="text">Name(nick name) *:  </li>
                        <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input name="name" type="text" required=""></li>
                        <li class="text">Email  *:  </li>
                        <li class="agileits-main"><i class="fa fa-envelope" aria-hidden="true"></i><input name="email" type="text" required=""></li>

                        <li class="text">Type of paper *:  </li>
                        <li class="agileits-main"><i class="#" aria-hidden="true"></i><input name="type" value="Essay, Term paper..." type="text" required=""></li>





                        <li class="text">Academic level *:  </li>
                        <li class="agileits-main"><i class="#" aria-hidden="#"></i>
                            <select name="level" type="text" required="">
                                <option value="High School">High School</option>
                                <option value="Freshman">Freshman</option>
                                <option value="Sophomore">Sophomore</option>
                                <option value="Junior">Junior</option>
                                <option value="Senior">Senior</option>
                                <option value="Masters">Masters</option>
                                <option value="Doctorate">Doctorate</option>
                            </select></li>

                        <!-- <br class="text">upload assignment file</br>(highly encouraged)  :  </li>
                       <li class="agileits-main"><input type="file" name="file" id="exampleInputFile"></li> !-->
                    </ul>
                </div>
                <div class="col-md-6 col-xs-6 w3l-right-mk">
                    <ul>

                        <li class="text"> Assignment Deadline* :  </li>

                        <li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input class="date" id="datepicker" name="deadline" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" /></li>

                        <li class="text">Citation *:  </li>
                        <li class="agileits-main"><i class="#" aria-hidden="#"></i>
                            <select name="citation" type="text" required="">
                                <option value="MLA">MLA</option>
                                <option value="APA">APA</option>
                                <option value="CHICAGO">Chicago</option>
                                <option value="Harvard">Harvard</option>
                                <option value="Turabian with Foot Notes">Turabian with Foot Notes</option>

                            </select></li>

                        <li class="text">Pages required *:  </li>
                        <li class="agileits-main"><i class="fa fa-book" aria-hidden="true"></i><input name="words" type="text" required=""></li>
                        <li class="text"> Additional Details*</li>
                        <li class="agileits-main">  <textarea placeholder name="message" name="instructions" required=""></textarea></li>
                    </ul>
                </div>
                <div class="clearfix">

                </div>


                <div class="agile-submit">
                    <h4> *Please note that you will recieve your complete assignment through your email*</h4>
                    <input type="submit" value="place order">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- //banner -->
<!-- Modal1 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Sign In</h3>
                    <div class="login-form">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="E-mail" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <div class="tp">
                                <input type="submit" value="Sign In">
                            </div>
                        </form>
                    </div>
                    <div class="login-social-grids">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                    <p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->
<!-- Modal2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Sign Up</h3>
                    <div class="login-form">
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Username" required="">
                            <input type="email" name="email" placeholder="Email" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <input type="password" name="password" placeholder="Confirm Password" required="">
                            <input type="submit" value="Sign Up">
                        </form>
                    </div>
                    <p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"> </div>
<!-- //Modal2 -->
<!-- about -->
<div class="about-top" id="about">
    <div class="container">
        <h3 class="w3l-title">About Us</h3>
        <div class="w3layouts_header">
            <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
        </div>


            <div class="modal-body">

                <p>We have been offering comprehensive and affordable academic writing services across the world since 2000. From day one, our students have noticed improvements in their grades and overall performance. Each exam has a unique testing style, and it’s our duty to find out what that is and adapt our academic writing expertise accordingly. Contact us today to find out how we can help you achieve your academic goals.

                    We also offer personalized teaching services at affordable prices, thus, you can use our specialized tutors to improve your areas of difficulty, including new subjects. We further help students to advance to higher levels of understanding. Contact us to see how we can be of help to you
            </div>
            <a href="#mail" class="trend-w3l scroll"><span>Get In Touch</span></a>

        <div class="clearfix"> </div>
    </div>
</div>
<!-- modal -->
<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

        </div>
    </div>
</div>
<!-- //modal -->
<!-- //about -->
<!--stats-->
<div class="stats" id="stats">
    <div class="container">
        <div class="stats-info">
            <div class="col-md-3 col-xs-3 stats-grid slideanim">
                <i class="fa fa-users" aria-hidden="true"></i>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='12760' data-delay='.10' data-increment="2">12760</div>

                <h4 class="stats-info">HAPPY CLIENTS</h4>
            </div>
            <div class="col-md-3 col-xs-3 stats-grid slideanim">
                <i class="fa fa-trophy" aria-hidden="true"></i>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='31000' data-delay='.10' data-increment="1">31000</div>

                <h4 class="stats-info">COMPLETE ASSIGNMENTS</h4>
            </div>
            <div class="col-md-3 col-xs-3 stats-grid slideanim">
                <i class="fa fa-book" aria-hidden="true"></i>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='800' data-delay='.10' data-increment=".1">500</div>

                <h4 class="stats-info">ASSIGNMENTS IN PROGRESS</h4>
            </div>
            <div class="col-md-3 col-xs-3 stats-grid slideanim">
                <i class="fa fa-user" aria-hidden="true"></i>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='600' data-delay='.10' data-increment="1">600</div>

                <h4 class="stats-info">CERTIFIED TUTORS</h4>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//stats-->
<!-- services -->
<div class="services" id="services" >
    <div class="container">
        <h3 class="w3l-title">Our Services</h3>
        <div class="w3layouts_header">
            <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
        </div>
        <div class="services-w3ls-row">
            <div class="col-xs-4 services-grid agileits-w3layouts">

                <h6>01</h6>
                <h5>Offline Test Help</h5>
                <p>We know how difficult it can be to find a reliable and legitimate tutor that focuses on your academic goal and success. Topmarks motivate and guide students to success. As an experienced Academic Writing</p>

            </div>
            <div class="col-xs-4 services-grid agileits-w3layouts">

                <h6>02</h6>
                <h5>Online Test Help</h5>
                <p>As one of the world&rsquo;s most successful Essay Writing Company since 2000, we have managed to help many students to excel in their online tests. Take advantage of our professional experience, especially our online test experts. Kindly get in touch today and allow us to help you excel in your online test.</p>

            </div>
            <div class="col-xs-4 services-grid agileits-w3layouts">
                <h6>03</h6>

                <h5>Private Lessons</h5>
                <p>We also specialize in private Lessons, for we know how to get our students to excel through personalized attention, patience, a lot of practice, and hard work. We make learning fun through a variety of engaging and outside-the-box activities. Teaching is a skill, but great teaching is more of an art that only a few can master. </p>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //services -->







<!-- contact -->
<div id="mail" class="contact">
    <div class="container">
        <h3 class="w3l-title">Contact Us</h3>


        <div class="w3l-form">
            <div class="contact-grid1">
                <div class="contact-top1">
                    <form action="/mail" method="post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
                            <label>Name*</label>
                            <input type="text" name="name" placeholder="Name" required="">
                            <label>E-mail*</label>
                            <input type="email" name="email" placeholder="E-mail" required="">
                        </div>
                        <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
                            <label>Phone Number</label>
                            <input type="text" name="number" placeholder="optional" >
                            <label>Subject</label>
                            <input type="text" name="subject" placeholder="" >

                        </div>
                        <div class="form-group">
                            <label>Message*</label>
                            <textarea placeholder name="message" required=""></textarea>
                        </div>
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="wthree_footer_grid_right1">

            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
                <h4>Navigation</h4>
                <ul>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="/">Home</a></li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#about" class="scroll">About Us</a></li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#services" class="scroll">Services</a></li>

                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#mail" class="scroll">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 wthree_footer_grid_right1">
                <h4>Contact Us</h4>
                <ul>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@topmarkinc.com">info@topmarksinc.com</a></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+1(518)-722-1035</li>

                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<div class="w3layouts_copy_right">
    <div class="container">
        <p>© 2017 Topmarks, Inc. All rights reserved .</p>
    </div>
</div>
<!-- //footer -->

<!-- js-scripts -->
<!-- js-files -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js-files -->
<!-- Baneer-js -->


<!-- Map-JavaScript
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
         <script type="text/javascript">
             google.maps.event.addDomListener(window, 'load', init);
             function init() {
                 var mapOptions = {
                     zoom: 11,
                     center: new google.maps.LatLng(40.6700, -73.9400),
                     styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
                 };
                 var mapElement = document.getElementById('map');
                 var map = new google.maps.Map(mapElement, mapOptions);
                 var marker = new google.maps.Marker({
                     position: new google.maps.LatLng(40.6700, -73.9400),
                     map: map,
                 });
             }
         </script>
-->

<!-- //Map-JavaScript -->



<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- stats -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- moving-top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //moving-top scrolling -->
<!-- gallery popup -->
<script src="js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>
<!-- //gallery popup -->
<!--/script-->
<script src="js/simplePlayer.js"></script>
<script>
    $("document").ready(function() {
        $("#video").simplePlayer();
    });
</script>
<!-- //Baneer-js -->
<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
<!-- //Calendar -->

<!-- //js-scripts -->


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5a36fceff4461b0b4ef89439/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>
</html>