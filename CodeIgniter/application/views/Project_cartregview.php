<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout-SHOEMiLL</title>
    <!-- Bootstrap core CSS -->
    <link href="http://localhost/CodeIgniter/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="http://localhost/CodeIgniterassets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="http://localhost/CodeIgniterassets/ItemSlider/css/main-style_2.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="http://localhost/CodeIgniter/assets/css/style_2.css" rel="stylesheet" />

    <link href="http://localhost/CodeIgniter/assets/ItemSlider/css/main-style1.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="http://localhost/CodeIgniter/assets/css/style1.css" rel="stylesheet" />
</head>
<body>
<body background="http://localhost/CodeIgniter/assets/img/back.png">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/CodeIgniter/index.php/Project_homeregctrl/abc/<?php echo $username?>"><strong>SHOE</strong>MiLL</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Track Order</a></li>
                    <li><a href="#">Welcome <?php echo $username?></a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><strong>Call: </strong>0484-xxxx</a></li>
                            <li><a href="#"><strong>Mail: </strong>callus@shoemill.com</a></li>
                            <li><a href="http://localhost/CodeIgniter/index.php/login"><strong>Logout</a></li>
                            <li class="divider"></li>
                            <li><strong>Address: </strong>
                                <div>
                                     682021,Govt. Model Engineering College<br>
                                    Thrikkakara, Kerala
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <body>
<div id="wrap">
    <div id="accordian">
        
        <div class="step" id="step2">
            <div class="number">
                <span>1</span>
            </div>
            <div class="title">
                <h1>Billing Information</h1>
            </div>
            <div class="modify">
                <i class="fa fa-plus-circle"></i>
            </div>
        </div>
        <div class="content" id="address">
        <img src="http://localhost/CodeIgniter/assets/img/lotto.png" style="width:550px; height: 350px;" align="right">
        <p align=RIGHT ><b><font size="6">Lotto Rapid Running Shoes(Navy)</b></font size="6">
            <form class="go-right">
                <div>
                <input type="name" name="first_name" value="" id="first_name" placeholder="Enter First Name" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your First Name"/><label for="first_name">First Name</label>
        </div>
                <div>
                <label for="last_name">Last Name</label>
                <input type="name" name="last_name" value="" id="last_name" placeholder="Last Name" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your Last Name"/><label for="last_name">Last Name</label>
                </div>
                <div>
                <input type="phone" name="telephone" value="" id="telephone" placeholder="Contact No." data-trigger="change" data-validation-minlength="1" data-type="number" data-required="true" data-error-message="Enter Your Telephone Number"/><label for="telephone">Telephone</label>
                </div>
                <div>
                <input type="text" name="company" value="" id="company" placeholder="Address Line 1" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="false"/><label for="Company">Company</label>
                </div>
                <div>
                <input type="text" name="address" value="" id="address" placeholder="Address Line 2" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing Address"/><label for="Address">Address</label>
                </div>
                <div>
                <input type="text" name="city" value="" id="city" placeholder="Address Line 3" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing City"/><label for="city">City</label>
                </div>
                <div>
                <div class="state_options">
                    
                    
                  <label class="state" for="state">State</label>
                </div>
                </div>
                <div>
                <input type="text" name="zip" value="" id="zip" placeholder="PIN Code" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing Zip Code"/><label for="zip">Zip Code</label>
                </div>
                <div>
                <input type="checkbox"/>
                <label class="same" for="same_as_shipping">Same For Shipping Address</label><span></span>
                </div>
            </form>
            
        </div>
        <div class="step" id="step3">
            <div class="number">
                <span>3</span>
            </div>
            <div class="title">
                <h1>Shipping Information</h1>
            </div>
            <div class="modify">
                <i class="fa fa-plus-circle"></i>
            </div>
        </div>
        <div class="content" id="shipping">
            <form>
                <div>
                    <input type="radio" id="shipping_1" value="1"/><label for="shipping_1"> Standard Shipping <span class="price">₹ 40.00</span></label>
        </div>
                <div>       
                    <input type="radio" id="shipping_2" value="2"/><label for="shipping_2"> Express Shipping <span class="price">₹ 80.00</span></label>
                </div>
                <div>       
                    <input type="radio" id="shipping_3" value="3"/><label for="shipping_3"> Overnight Shipping <span class="price">₹ 120.00</span></label>
                </div>
            </form>
            
        </div>
        <div class="step" id="step4">
            <div class="number">
                <span>4</span>
            </div>
            <div class="title">
                <h1>Payment Information</h1>
            </div>
            <div class="modify">
                <i class="fa fa-plus-circle"></i>
            </div>
        </div>
        <div class="content" id="payment">
            <div class="left credit_card">
            <form class="go-right">
                <div>
                <input type="text" name="card_number" value="" id="card_number" placeholder="xxxx-xxxx-xxxx-xxxx" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Number"/><label for="card_number">Card Number</label>
                </div>
                <div>
                  <div class="expiry">  
                      <div class="month_select">
                        <select name="exp_month" value="" id="exp_month" placeholder="" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date">
                            <option value = "1">01 (Jan)</option>
                            <option value = "2">02 (Feb)</option>
                            <option value = "3">03 (Mar)</option>
                            <option value = "4">04 (Apr)</option>
                            <option value = "5">05 (May)</option>
                            <option value = "6">06 (Jun)</option>
                            <option value = "7">07 (Jul)</option>
                            <option value = "8">08 (Aug)</option>
                            <option value = "9">09 (Sep)</option>
                            <option value = "10">10 (Oct)</option>
                            <option value = "11">11 (Nov)</option>
                            <option value = "12">12 (Dec)</option>
                        </select>
                      </div>
                      <span class="divider">-</span>
                      <div class="year_select">
                        <select name="exp_year" value="" id="exp_year" placeholder="" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date">
                            <option value = "1">14 </option>
                            <option value = "2">15 </option>
                            <option value = "3">16 </option>
                            <option value = "4">17 </option>
                            <option value = "5">18 </option>
                            <option value = "6">19 </option>
                            <option value = "7">20 </option>
                            <option value = "8">22 </option>
                            <option value = "9">23 </option>
                            <option value = "10">24 </option>
                            <option value = "11">25 </option>
                            <option value = "12">26 </option>
                        </select>
                      </div>
                    </div>
                 <label class="exp_date" for="Exp_Date">Exp Date</label>
                  </div>
                <div class="sec_num">
              <div>
                        <input type="text" name="ccv" value="" id="ccv" placeholder="CVV" data-trigger="change" data-validation-minlength="3" data-type="name" data-required="true" data-error-message="Enter Your Card Security Code"/>
                <label for="ccv">Security Code</label>
                      </div>
                      </div>
                  </form>
            </div>
            <div class="right">
                <div class="accepted">
                    <span><img src="http://localhost/CodeIgniter/assets/img/Z5HVIOt.png"></span>
                    <span><img src="http://localhost/CodeIgniter/assets/img/Le0Vvgx.png"></span>
                    <span><img src="http://localhost/CodeIgniter/assets/img/D2eQTim.png"></span>
                    <span><img src="http://localhost/CodeIgniter/assets/img/Pu4e7AT.png"></span>
                    <span><img src="http://localhost/CodeIgniter/assets/img/ewMjaHv.png"></span>
                   
                </div>
                
            </div>
            <div class="right" id="reviewed">
            <div id="complete">
             <span class="sub">By selecting this button you agree to the purchase and subsequent payment for this order.</span> 
                <a class="big_button" id="complete" href="http://localhost/CodeIgniter/index.php/Project_tqctrl/abc/<?php echo $username?>">Complete Order</a>
               
            </div>
</div>
        </div>
        </div>
        </body>


     <div class="col-md-12 footer-box">
        <div class="row">
            <div class="col-md-4">
                <strong>Send a Quick Query </strong>
                <hr>
                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <strong>Our Location</strong>
                <hr>
                <p>
                     682021,Govt. Model Engineering College<br />
                                    Thrikkakara, Kerala<br />
                    Call: 0484-xxxxxx<br>
                    Email: callus@shoemill.com<br>
                </p>

                2016  www.shoemill.com | All Right Reserved 
               
            </div>
            <div class="col-md-4 social-box">
                <strong>We are Social </strong>
                <hr>
                <a href="#"><i class="fa fa-facebook-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-3x c"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-pinterest-square fa-3x "></i></a>
                
            </div>
        </div>
        <hr>
    </div>
    <!-- /.col -->
    <div class="col-md-12 end-box ">
        &copy; 2016 | &nbsp; All Rights Reserved | &nbsp; www.shoemill.com | &nbsp; 24x7 support | &nbsp; Email us: callus@shoemill.com
    </div>
    <!-- /.col -->
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="http://localhost/CodeIgniter/assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="http://localhost/CodeIgniter/assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="http://localhost/CodeIgniter/assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="http://localhost/CodeIgniter/assets/ItemSlider/js/jquery.catslider.js"></script>
    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
        </script>
</body>
</html>

