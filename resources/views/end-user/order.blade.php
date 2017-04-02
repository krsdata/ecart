
@extends('layouts.master')
    @section('title', 'HOME')
        
        @section('header')
        <h1>Home</h1>
        @stop

        @section('content') 

            @include('partials.menu')
            <!-- Left side column. contains the logo and sidebar -->
            <div class="body-content">
    <div class="container">
        <div class="checkout-box ">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel-group checkout-steps" id="accordion">
                        <!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

    <!-- panel-heading -->
        <div class="panel-heading">
        <h4 class="unicase-checkout-title">
            <a data-toggle="collapse" class="" data-parent="#accordion" href="index.htm#collapseOne">
              <span>1</span>Checkout Method
            </a>
         </h4>
    </div>
    <!-- panel-heading -->

    <div id="collapseOne" class="panel-collapse collapse in">

        <!-- panel-body  -->
        <div class="panel-body">
            <div class="row">       

                <!-- guest-login -->            
                <div class="col-md-6 col-sm-6 guest-login">
                    <h4 class="checkout-subtitle">Guest or Register Login</h4>
                    <p class="text title-tag-line">Register with us for future convenience:</p>

                    <!-- radio-form  -->
                    <form class="register-form" role="form">
                        <div class="radio radio-checkout-unicase">  
                            <input id="guest" name="text" value="guest" checked="" type="radio">  
                            <label class="radio-button guest-check" for="guest">Checkout as Guest</label>  
                              <br>
                            <input id="register" name="text" value="register" type="radio">  
                            <label class="radio-button" for="register">Register</label>  
                        </div>  
                    </form>
                    <!-- radio-form  -->

                    <h4 class="checkout-subtitle outer-top-vs">Register and save time</h4>
                    <p class="text title-tag-line ">Register with us for future convenience:</p>
                    
                    <ul class="text instruction inner-bottom-30">
                        <li class="save-time-reg">- Fast and easy check out</li>
                        <li>- Easy access to your order history and status</li>
                    </ul>

                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button checkout-continue ">Continue</button>
                </div>
                <!-- guest-login -->

                <!-- already-registered-login -->
                <div class="col-md-6 col-sm-6 already-registered-login">
                    <h4 class="checkout-subtitle">Already registered?</h4>
                    <p class="text title-tag-line">Please log in below:</p>
                    <form class="register-form" role="form">
                        <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                        <input class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" type="email">
                      </div>
                      <div class="form-group">
                        <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                        <input class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="" type="password">
                        <a href="index.htm#" class="forgot-password">Forgot your Password?</a>
                      </div>
                      <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                    </form>
                </div>  
                <!-- already-registered-login -->       

            </div>          
        </div>
        <!-- panel-body  -->

    </div><!-- row -->
</div>
<!-- checkout-step-01  -->
                        <!-- checkout-step-02  -->
                        <div class="panel panel-default checkout-step-02">
                            <div class="panel-heading">
                              <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="index.htm#collapseTwo">
                                  <span>2</span>Billing Information
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </div>
                            </div>
                        </div>
                        <!-- checkout-step-02  -->

                        <!-- checkout-step-03  -->
                        <div class="panel panel-default checkout-step-03">
                            <div class="panel-heading">
                              <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="index.htm#collapseThree">
                                    <span>3</span>Shipping Information
                                </a>
                              </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </div>
                            </div>
                        </div>
                        <!-- checkout-step-03  -->

                        <!-- checkout-step-04  -->
                        <div class="panel panel-default checkout-step-04">
                            <div class="panel-heading">
                              <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="index.htm#collapseFour">
                                    <span>4</span>Shipping Method
                                </a>
                              </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                        <!-- checkout-step-04  -->

                        <!-- checkout-step-05  -->
                        <div class="panel panel-default checkout-step-05">
                            <div class="panel-heading">
                              <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="index.htm#collapseFive">
                                    <span>5</span>Payment Information
                                </a>
                              </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                              <div class="panel-body">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </div>
                            </div>
                        </div>
                        <!-- checkout-step-05  -->

                        <!-- checkout-step-06  -->
                        <div class="panel panel-default checkout-step-06">
                            <div class="panel-heading">
                              <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="index.htm#collapseSix">
                                    <span>6</span>Order Review
                                </a>
                              </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                        <!-- checkout-step-06  -->
                        
                    </div><!-- /.checkout-steps -->
                </div>
                <div class="col-md-4">
                    <!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
            </div>
            <div class="">
                <ul class="nav nav-checkout-progress list-unstyled">
                    <li><a href="index.htm#">Billing Address</a></li>
                    <li><a href="index.htm#">Shipping Address</a></li>
                    <li><a href="index.htm#">Shipping Method</a></li>
                    <li><a href="index.htm#">Payment Method</a></li>
                </ul>       
            </div>
        </div>
    </div>
</div> 
<!-- checkout-progress-sidebar -->              </div>
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div style="visibility: hidden; animation-name: none;" id="brands-carousel" class="logo-slider wow fadeInUp">

        <div class="logo-slider-inner"> 
            <div style="opacity: 1; display: block;" id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                <div class="owl-wrapper-outer"><div style="width: 3800px; left: 0px; display: block;" class="owl-wrapper"><div style="width: 190px;" class="owl-item"><div class="item m-t-15">
                    <a href="index.htm#" class="image">
                        <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div></div><div style="width: 190px;" class="owl-item"><div class="item m-t-10">
                    <a href="index.htm#" class="image">
                        <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div></div><div style="width: 190px;" class="owl-item"><div class="item">
                    <a href="index.htm#" class="image">
                        <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div></div><div style="width: 190px;" class="owl-item"><div class="item">
                    <a href="index.htm#" class="image">
                        <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div></div><div style="width: 190px;" class="owl-item"><div class="item">
                    <a href="index.htm#" class="image">
                        <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div></div><div style="width: 190px;" class="owl-item"><div class="item">
                    <a href="index.htm#" class="image">
                        <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div></div><div style="width: 190px;" class="owl-item"><div class="item">
                    <a href="index.htm#" class="image">
                        <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div></div><div style="width: 190px;" class="owl-item"><div class="item">
                    <a href="index.htm#" class="image">
                        <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div></div><div style="width: 190px;" class="owl-item"><div class="item">
                    <a href="index.htm#" class="image">
                        <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div></div><div style="width: 190px;" class="owl-item"><div class="item">
                    <a href="index.htm#" class="image">
                        <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div></div></div></div><!--/.item-->

                <!--/.item-->

                <!--/.item-->

                <!--/.item-->

                <!--/.item-->

                <!--/.item-->

                <!--/.item-->

                <!--/.item-->

                <!--/.item-->

                <!--/.item-->
            <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"></div><div class="owl-next"></div></div></div></div><!-- /.owl-carousel #logo-slider -->
        </div><!-- /.logo-slider-inner -->
    
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->    </div><!-- /.container -->
</div>

            
        @stop