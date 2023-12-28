<?php include("includes/db.php"); ?>
<?php include "includes/home_header.php"; ?>

<body>
    <div id="page-wrapper">
        <div class="row">
            <!-- Header start -->
            <header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
                <div class="top-header bg-secondary">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <!-- <ul class="top-contact list-text-white  d-table">
<li><a href="#"><i class="fas fa-phone-alt text-primary mr-1"></i>(012) 345 678 102</a></li>
<li><a href="#"><i class="fas fa-envelope text-primary mr-1"></i>brokerage@example.com</a></li>
</ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- logo part if available -->
            </header>
            <!-- Header end -->
            <!-- Banner Start -->
            <div class="overlay-black w-100 slider-banner1 position-relative"
                style="background-image: url('images/banner/04.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container h-100">
                    
                    <!-- <section class="registration" style="margin-buttom: 50px;" >
                            <!-- registration form -->
                            <div class="" id="register-form" style="display: none;">
                            <div class="card-body col-lg-12 ">
                                <div class="col flex justify-content-center">
                                                    <h1>Register</h1>
                                                    <form role="form" action="home.php" method="post" id="signup-form"
                                                        autocomplete="off">
                                                        <div class="form-group">
                                                            <label for="firstName" class="sr-only">First Name:</label>
                                                            <input type="text" name="firstName" id="firstName"
                                                                class="form-control" placeholder="First Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="lastName" class="sr-only">Last Name:</label>
                                                            <input type="text" name="lastName" id="lastName"
                                                                class="form-control" placeholder="Last Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone" class="sr-only">Phone Number</label>
                                                            <input type="text" name="phone" id="phone"
                                                                class="form-control" placeholder="Phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username" class="sr-only">Username</label>
                                                            <input type="text" name="username" id="username"
                                                                class="form-control"
                                                                placeholder="Enter Desired Username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email" class="sr-only">Email</label>
                                                            <input type="email" name="email" id="email"
                                                                class="form-control" placeholder="Email Address">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password" class="sr-only">Password</label>
                                                            <input type="password" name="password" id="password"
                                                                class="form-control" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" name="submit" id="btn-register"
                                                                class="btn float-right login_btn" value="Register">
                                                        </div>
                                                        <div class="d-flex justify-content-center links">
                                                        have an account?<a id="login-link" class="text-primary"
                                                            href="#">Login</a>
                                                    </div>
                                                    </form>
                                                   

                                                </div>
                                                </div>
                                                </div>
                    </section> -->

                    <div class="row h-100 align-items-center">
                        <div class="col-lg-12">
                            <div class="text-white">
                                <h1 class="mb-1"><span class="text-primary">Find</span><br>
                                    Your dream property</h1>
                                <div class="container">
                                    <div class="d-flex justify-content-center h-100">
                                        <div class="card">

                                            <?php include "newRegistration.php" ?>

                                            <div class="card-body ">
                                                <!-- login form -->
                                                <div id="login-form">
                                                    <div class="card-header">
                                                        <h3>Sign In</h3>
                                                        <div class="d-flex justify-content-end social_icon">
                                                        </div>
                                                    </div>
                                                    <form action="includes/login.php" method="post">
                                                        <div class="input-group form-group">
                                                            <div class="input-group-prepend"></div>
                                                            <input type="text" name="username" class="form-control"
                                                                placeholder="Username">
                                                        </div>
                                                        <div class="input-group form-group">
                                                            <input type="password" name="password" class="form-control"
                                                                placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" name="login" value="Login"
                                                                class="btn float login_btn">
                                                        </div>
                                                    </form>
                                                    <div class="card-footer mt-1">
                                                        <div class="d-flex justify-content-center links">
                                                            Don't have an account?<a id="" class="text-primary"
                                                                href="registration.php">Sign Up</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- registration form -->
                                                <div id="register-form" style="display: none;">
                                                    <h1>Register</h1>
                                                    <form role="form" action="home.php" method="post" id="signup-form"
                                                        autocomplete="off">
                                                        <div class="form-group">
                                                            <label for="firstName" class="sr-only">First Name:</label>
                                                            <input type="text" name="firstName" id="firstName"
                                                                class="form-control" placeholder="First Name">
                                                        </div>
                                                        <!-- <div class="form-group">
                                                            <label for="lastName" class="sr-only">Last Name:</label>
                                                            <input type="text" name="lastName" id="lastName"
                                                                class="form-control" placeholder="Last Name">
                                                        </div> -->
                                                        <div class="form-group">
                                                            <label for="phone" class="sr-only">Phone Number</label>
                                                            <input type="text" name="phone" id="phone"
                                                                class="form-control" placeholder="Phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username" class="sr-only">Username</label>
                                                            <input type="text" name="username" id="username"
                                                                class="form-control"
                                                                placeholder="Enter Desired Username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email" class="sr-only">Email</label>
                                                            <input type="email" name="email" id="email"
                                                                class="form-control" placeholder="Email Address">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password" class="sr-only">Password</label>
                                                            <input type="password" name="password" id="password"
                                                                class="form-control" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" name="submit" id="btn-register"
                                                                class="btn float-right login_btn" value="Register">
                                                        </div>

                                                    </form>
                                                    <div class="d-flex justify-content-center links">
                                                        have an account?<a id="login-link" class="text-primary"
                                                            href="#">Login</a>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

        <!-- Text Block One -->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2>
                    </div>
                </div>
                <div class="text-box-one">
                    <!-- Content -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                <i class="flaticon-rent text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Selling Service</a>
                                </h5>
                                <p>Multiple financial markets, empowering users to buy and sell stocks, bonds,
                                    commodities, and more with ease and efficiency
                                    such as Home, car,electronic deviece, lower and upper machine and other shoping
                                    material e.t.c
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                <i class="flaticon-for-rent text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Rental Service</a>
                                </h5>
                                <p>The software offers a user-friendly platform that allows clients to browse and select
                                    from
                                    renting different property suc as home , car,house building materials, motorcycle,
                                    any other upper and lower machines and e.t.c.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                <i class="flaticon-list text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Property Listing</a>
                                </h5>
                                <p>Listing property that you wanted to selling or renting to other people.
                                    these renting or selling property include home , car, shopping material,motorcycle,
                                    different machines, office mateial and e.t.c
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                <i class="flaticon-diagram text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Buying Serveice</a>
                                </h5>
                                <p>Using these software you can buys many property that have been posted such as
                                    home , car, shopping material,motorcycle,
                                    different machines, office mateial and e.t.c
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "includes/home_footer.php"; ?>