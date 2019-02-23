<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Job Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <!-- <link href="img/favicon.png" rel="icon"> -->

    <link rel="apple-touch-icon" href="{{ URL::asset('img/apple-touch-icon.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="{{ URL::asset('lib/bootstrap/css/bootstrap.min.css') }}">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="{{ URL::asset('lib/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('lib/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('lib/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('lib/ionicons/css/ionicons.min.css') }}">

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

</head>

<body id="body">

<!--==========================
  Top Bar
============================-->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
            <i class="fa fa-phone"></i> +1 5589 55488 55
        </div>
        <div class="social-links float-right">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
</section>

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="#body" class="scrollto">Job<span>Portal</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#body">Home</a></li>
                <li><a href="#register">Register</a></li>
                <li><a href="#services">Services</a></li>
                <li class="menu-has-children"><a href="">Check your Details</a>
                    <ul>
                        <li><a href="#" data-toggle="modal" data-target="#myModal">Registerd User</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModalAppliedUser">Applicant User</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->

<section id="intro">

    <div class="intro-content">
        <h2>Welcome to <span>JOB PORTAL</span><br>apply for jobs!</h2>
        <div>
            <a href="#register" class="btn-get-started scrollto">Apply for Job</a>
        </div>

    </div>

    <div id="intro-carousel" class="owl-carousel">
        <div class="item"><img src="{{URL::asset('img/1.jpg')}}"></div>
        <div class="item"><img src="{{URL::asset('img/2.jpg')}}"></div>
        <div class="item"><img src="{{URL::asset('img/3.jpeg')}}"></div>
    </div>

</section><!-- #intro -->

<main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="register" class="wow fadeInUp">
        <div class="container-home" id="register_con_home">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="{{URL::asset('img/apply.png')}}" alt="">
                </div>

                <div class="col-lg-6 content">
                    <h4>Register Here</h4>
                    <h5>You can normally apply for job with your qulification and above some required
                        details or If you are registered to our website we will specailly care about your details
                        to find a suitable job for you.</h5><h6>wold you like to <b>Register</b> our website.</h6>
                    <hr>
                    <div ng-app="">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- <button type="submit" class="btn btn-primary" ng-model="myVar" value="apply" name="apply">Apply</button> -->
                                </b><h5 style="color:lightgreen"><input type="radio" ng-model="myVar"  id="type" value="apply">Just Apply</h5></b>
                            </div>
                            <div class="col-md-6">
                                <b><h5 style="color:blue"><input type="radio" ng-model="myVar"  id="type" value="register">Register</h5></b>
                            </div>
                        </div>
                        <div ng-switch="myVar">
                            <div ng-switch-when="apply">
                                <form action="" method="post" role="form" class="contactForm" name="myForm">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" class="form-control" name="email" ng-model="myInput" placeholder="Your Email" required>
                                            <span style="color:red" ng-show="myForm.email.$invalid">
                                            <span ng-show="myForm.email.$error.email">Invalid email address.</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="visa_states" class="form-control" name="visa_states" placeholder="Visa States">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" placeholder=" Your Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="transport" placeholder="Trasnport">
                                    </div>
                                    <h5><b>working days</b></h5>
                                    <div class="row">
                                        <div class="col-md-4"><b>Day</b></div>
                                        <div class="col-md-4"><b>From</b></div>
                                        <div class="col-md-4"><b>To</b></div>
                                        <hr>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="monday">Monday</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="mon_t_from" class="form-control" placeholder="From">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="mon_t_to" class="form-control" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="monday">Tuesday</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="tue_t_from" class="form-control" placeholder="From">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="tue_t_to" class="form-control" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="monday">Wednesday</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="wed_t_from" class="form-control" placeholder="From">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="wed_t_to" class="form-control" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="monday">Thursday</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="thu_t_from" class="form-control" placeholder="From">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="thu_t_to" class="form-control" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="monday">Friday</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="fri_t_from" class="form-control" placeholder="From">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="fri_t_to" class="form-control" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="monday">Saturday</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="sat_t_from" class="form-control" placeholder="From">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="sat_t_to" class="form-control" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Apply</button>
                                        <button type="reset" class="btn btn-primary">Clear</button>
                                    </div>
                                </form>
                            </div>
                            <div ng-switch-when="register">
                                <form action="" method="post" role="form" class="contactForm" name="myForm">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" class="form-control" name="email" ng-model="myInput" placeholder="Your Email" required>
                                            <span style="color:red" ng-show="myForm.email.$invalid">
                                            <span ng-show="myForm.email.$error.email">Invalid email address.</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="visa_states" class="form-control" name="visa_states" placeholder="Visa States">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" placeholder=" Your Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="transport" placeholder="Trasnport">
                                    </div>
                                    <h5><b>working days</b></h5>
                                    <div class="row">
                                        <div class="col-md-4"><b>Day</b></div>
                                        <div class="col-md-4"><b>From</b></div>
                                        <div class="col-md-4"><b>To</b></div>
                                        <hr>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="monday">Monday</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="mon_t_from" class="form-control" placeholder="From">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="mon_t_to" class="form-control" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="monday">Tuesday</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="tue_t_from" class="form-control" placeholder="From">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="tue_t_to" class="form-control" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="monday">Wednesday</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="wed_t_from" class="form-control" placeholder="From">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="wed_t_to" class="form-control" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="monday">Thursday</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="thu_t_from" class="form-control" placeholder="From">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="thu_t_to" class="form-control" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="monday">Friday</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="fri_t_from" class="form-control" placeholder="From">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="fri_t_to" class="form-control" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="monday">Saturday</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="sat_t_from" class="form-control" placeholder="From">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="time" name="sat_t_to" class="form-control" placeholder="To">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" name="username" class="form-control" id="name" placeholder="Username">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="password" class="form-control" name="password" id="email" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Apply</button>
                                        <button type="reset" class="btn btn-primary">Clear</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr>


                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-8">
                            <p>If you just apply for the jobs,you can change your details which you entered in here:</p>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModalAppliedUser" style="width: 120px; padding: 3px; background-color: seagreen">Update details</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-8">
                            <p>If you are a <b>registered</b> user,you can change your details which you entered in here:</p>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" style="width: 120px; background-color: cornflowerblue; padding: 3px;">Change Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModalAppliedUser" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" style="color: #4dc0b5;"><b>--Please fill the details--</b></h4>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mobile_number" placeholder="Mobile Number">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Request</button>
                                    <button type="reset" class="btn btn-primary">Clear</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" style="color: #4dc0b5;"><b>--Login Here--</b></h4>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <button type="reset" class="btn btn-primary">Clear</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="services">
        <div class="container" >
            <div class="section-header">
                <h2>Services</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fa fa-bar-chart"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-picture-o"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-map"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="clients" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Clients</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
            </div>

            <div class="owl-carousel clients-carousel">
                <img src="{{URL::asset('img/clients/client-1.png')}}" alt="">
                <img src="{{URL::asset('img/clients/client-2.png')}}" alt="">
                <img src="{{URL::asset('img/clients/client-3.png')}}" alt="">
                <img src="{{URL::asset('img/clients/client-4.png')}}" alt="">
                <img src="{{URL::asset('img/clients/client-5.png')}}" alt="">
                <img src="{{URL::asset('img/clients/client-6.png')}}" alt="">
                <img src="{{URL::asset('img/clients/client-7.png')}}" alt="">
                <img src="{{URL::asset('img/clients/client-8.png')}}" alt="">
            </div>

        </div>
    </section>

    <section id="testimonials" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Testimonials</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
            </div>
            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <p>
                        <img src="{{URL::asset('img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <img src="{{URL::asset('img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                    </p>
                    <img src="{{URL::asset('img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <img src="{{URL::asset('img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <img src="{{URL::asset('img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                    </p>
                    <img src="{{URL::asset('img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <img src="{{URL::asset('img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <img src="{{URL::asset('img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                    </p>
                    <img src="{{URL::asset('img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <img src="{{URL::asset('img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <img src="{{URL::asset('img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                    </p>
                    <img src="{{URL::asset('img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <img src="{{URL::asset('img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <img src="{{URL::asset('img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                    </p>
                    <img src="{{URL::asset('img/testimonial-5.jpg')}}" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                </div>

            </div>

        </div>
    </section>
    <section id="contact" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Contact Us</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>Street, Home Town, Country</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+94 XXXXXXX</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="#">email@example.com</a></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="container mb-4">
        </div>

        <div class="container">
            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validation"></div>
                    </div> -->
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Please add your Comment here"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Add Comment</button></div>
                </form>
            </div>

        </div>
    </section>

</main>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <br>
                <img src="img/moonBase_logo.png" style="width:170px;" class="img-responsive">
            </div>
            <div class="col-md-4">
                <div class="copyright">
                    &copy; Copyright <strong>www.moonBase.com</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="#">moonBaseTeam</a>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{ URL::asset('lib/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ URL::asset('lib/superfish/hoverIntent.js') }}"></script>
<script src="{{ URL::asset('lib/superfish/superfish.min.js') }}"></script>
<script src="{{ URL::asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ URL::asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('lib/magnific-popup/magnific-popup.min.js') }}"></script>
<script src="{{ URL::asset('lib/sticky/sticky.js') }}"></script>



<!-- Contact Form JavaScript File -->
<script src="{{ URL::asset('js/main.js') }}contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="{{ URL::asset('js/main.js') }}"></script>

</body>
</html>
