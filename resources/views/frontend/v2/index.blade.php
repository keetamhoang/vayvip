@extends('frontend.v2.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!-- Main component for a primary marketing message or call to action -->
            <div class="slide-wrap shadow">
                <div class="main-slider">
                    <a href="#" class="item" data-hash="one"> <img src="http://placehold.it/1500x500" alt=""> </a>
                    <div class="item" data-hash="two"> <img src="http://placehold.it/1500x500" alt=""> </div>
                    <div class="item" data-hash="three"> <img src="http://placehold.it/1500x500" alt=""> </div>
                </div>
                <!-- /.carosuel -->
                <div class="carousel-tabs clearfix">
                    <a class="col-sm-4 tab url" href="#one">
                        <div class="media">
                            <div class="media-left media-middle"> <img src="http://placehold.it/120x50" alt=""> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Upto 30% Rewards</h4>
                                <p>Up to 70% off on Clothing ...</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-4 tab url" href="#two">
                        <div class="media">
                            <div class="media-left media-middle"> <img src="http://placehold.it/120x50" alt=""> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Upto 70% Rewards</h4>
                                <p>Up to 70% off on Clothing ...</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-sm-4 tab url" href="#three">
                        <div class="media">
                            <div class="media-left media-middle"> <img src="http://placehold.it/120x50" alt=""> </div>
                            <div class="media-body">
                                <h4 class="media-heading">Upto 50% Rewards</h4>
                                <p>Up to 70% off on Clothing ...</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--/slide wrap -->
        </div>
        <!-- /col 12 -->
    </div>
    <div class="row">
        <div class="col-lg-8">
            <ul class="nav nav-tabs responsive-tabs" id="myTab">
                <li class="active"><a data-toggle="tab" href="#popular"><i class="ti-bar-chart"></i>Popular </a> </li>
                <li class=""><a data-toggle="tab" href="#ending"><i class="ti-timer"></i> Ending soon</a> </li>
                <li class=""><a data-toggle="tab" href="#online"><i class="ti-link"></i>Online</a> </li>
                <li class=""><a data-toggle="tab" href="#atStore"><i class="ti-receipt"></i>In-store</a> </li>
            </ul>
            <div class="tab-content clearfix" id="myTabContent">
                <div id="popular" class="tab-pane counties-pane active animated fadeIn">
                    <div class="coupon-wrapper row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">72%</div>
                                    <div class="small">off</div>
                                    <div class="type">Deal</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="sale label label-pink">Sale</li>
                                <li class="label label-info">In store</li>
                                <li><span class="used-count">27 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Extra 10% Off Select Luggage + Up To $150 Back In Points For Members + Free Shipping</a></h4>
                            <p data-toggle="collapse" data-target="#1">Shop these Shopname deals of the day to save as much...</p>
                            <p id="1" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                    <div class="coupon-wrapper row featured">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">25%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="sale label label-pink">Sale</li>
                                <li class="popular label label-success">100% success</li>
                                <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                <li><span class="used-count">78 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Up To 70% Off | Shopname Promo Codes &amp; Coupons</a></h4>
                            <p data-toggle="collapse" data-target="#more">Shop these Shopname deals of the day to save as much...</p>
                            <p id="more" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                    <div class="coupon-wrapper row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">15%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="promo label label-pink">Promo code</li>
                                <li class="sale label label-warning">Ending</li>
                                <li><span class="used-count">51 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">20% Off With In-Store Pick-Up</a></h4>
                            <p data-toggle="collapse" data-target="#more1">Buy online and pick-up in-store to save 15% or 20%...</p>
                            <p id="more1" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                    <div class="coupon-wrapper row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">72%</div>
                                    <div class="small">off</div>
                                    <div class="type">Deal</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="sale label label-pink">Sale</li>
                                <li class="label label-info">In store</li>
                                <li><span class="used-count">27 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Extra 10% Off Select Luggage + Up To $150 Back In Points For Members + Free Shipping</a></h4>
                            <p data-toggle="collapse" data-target="#more-1">Shop these Shopname deals of the day to save as much...</p>
                            <p id="more-1" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                </div>
                <div id="ending" class="tab-pane counties-pane animated fadeIn">
                    <div class="coupon-wrapper row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">45%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="sale label label-pink">Sale</li>
                                <li class="popular label label-success">100% success</li>
                                <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                <li><span class="used-count">245 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Clearance up to 50% off</a></h4>
                            <p data-toggle="collapse" data-target="#more2">Shop these Shopname deals of the day to save as much...</p>
                            <p id="more2" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                    <div class="coupon-wrapper row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">50%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="promo label label-pink">Promo code</li>
                                <li class="sale label label-warning">Ending</li>
                                <li><span class="used-count">51 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Jack Black Men's Pit Boss Antiperspirant & Deodorant</a></h4>
                            <p data-toggle="collapse" data-target="#2">Buy online and pick-up in-store to save 15% or 20%...</p>
                            <p id="2" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                    <div class="coupon-wrapper row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">72%</div>
                                    <div class="small">off</div>
                                    <div class="type">Deal</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="sale label label-pink">Sale</li>
                                <li><span class="used-count">27 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Extra 10% Off Select Luggage + Up To $150 Back In Points For Members + Free Shipping</a></h4>
                            <p data-toggle="collapse" data-target="#more3">Shop these Shopname deals of the day to save as much...</p>
                            <p id="more3" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                    <div class="coupon-wrapper row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">50%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="promo label label-pink">Promo code</li>
                                <li class="sale label label-warning">Ending</li>
                                <li><span class="used-count">51 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Jack Black Men's Pit Boss Antiperspirant & Deodorant</a></h4>
                            <p data-toggle="collapse" data-target="#more-2">Buy online and pick-up in-store to save 15% or 20%...</p>
                            <p id="more-2" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                </div>
                <div id="online" class="tab-pane counties-pane animated fadeIn">
                    <div class="coupon-wrapper row featured">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">25%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="sale label label-pink">Sale</li>
                                <li class="popular label label-success">100% success</li>
                                <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                <li><span class="used-count">78 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Up To 70% Off | Shopname Promo Codes &amp; Coupons</a></h4>
                            <p data-toggle="collapse" data-target="3">Shop these Shopname deals of the day to save as much...</p>
                            <p id="3" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                    <div class="coupon-wrapper row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">15%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="promo label label-pink">Promo code</li>
                                <li class="sale label label-warning">Ending</li>
                                <li><span class="used-count">51 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">20% Off With In-Store Pick-Up</a></h4>
                            <p data-toggle="collapse" data-target="4">Buy online and pick-up in-store to save 15% or 20%...</p>
                            <p id="4" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                    <div class="coupon-wrapper row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">72%</div>
                                    <div class="small">off</div>
                                    <div class="type">Deal</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="sale label label-pink">Sale</li>
                                <li><span class="used-count">27 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Extra 10% Off Select Luggage + Up To $150 Back In Points For Members + Free Shipping</a></h4>
                            <p data-toggle="collapse" data-target="5">Shop these Shopname deals of the day to save as much...</p>
                            <p id="5" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                    <div class="coupon-wrapper row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">50%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="promo label label-pink">Promo code</li>
                                <li class="sale label label-warning">Ending</li>
                                <li><span class="used-count">51 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Jack Black Men's Pit Boss Antiperspirant & Deodorant</a></h4>
                            <p data-toggle="collapse" data-target="#more-3">Buy online and pick-up in-store to save 15% or 20%...</p>
                            <p id="more-3" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                </div>
                <div id="atStore" class="tab-pane counties-pane animated fadeIn">
                    <div class="coupon-wrapper row featured">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">25%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="sale label label-pink">Sale</li>
                                <li class="popular label label-success">100% success</li>
                                <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                <li><span class="used-count">78 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Up To 70% Off | Shopname Promo Codes &amp; Coupons</a></h4>
                            <p data-toggle="collapse" data-target="6">Shop these Shopname deals of the day to save as much...</p>
                            <p id="6" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                    <div class="coupon-wrapper row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">15%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="promo label label-pink">Promo code</li>
                                <li class="sale label label-warning">Ending</li>
                                <li><span class="used-count">51 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">20% Off With In-Store Pick-Up</a></h4>
                            <p data-toggle="collapse" data-target="#7">Buy online and pick-up in-store to save 15% or 20%...</p>
                            <p id="7" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                    <div class="coupon-wrapper row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">72%</div>
                                    <div class="small">off</div>
                                    <div class="type">Deal</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="sale label label-pink">Sale</li>
                                <li><span class="used-count">27 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Extra 10% Off Select Luggage + Up To $150 Back In Points For Members + Free Shipping</a></h4>
                            <p data-toggle="collapse" data-target="#8">Shop these Shopname deals of the day to save as much...</p>
                            <p id="8" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                    <div class="coupon-wrapper row">
                        <div class="coupon-data col-sm-2 text-center">
                            <div class="savings text-center">
                                <div>
                                    <div class="large">50%</div>
                                    <div class="small">off</div>
                                    <div class="type">Coupon</div>
                                </div>
                            </div>
                            <!-- end:Savings -->
                        </div>
                        <!-- end:Coupon data -->
                        <div class="coupon-contain col-sm-7">
                            <ul class="list-inline list-unstyled">
                                <li class="promo label label-pink">Promo code</li>
                                <li class="sale label label-warning">Ending</li>
                                <li><span class="used-count">51 used</span> </li>
                            </ul>
                            <h4 class="coupon-title"><a href="#">Jack Black Men's Pit Boss Antiperspirant & Deodorant</a></h4>
                            <p data-toggle="collapse" data-target="#more-4">Buy online and pick-up in-store to save 15% or 20%...</p>
                            <p id="more-4" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
                            <ul class="coupon-details list-inline">
                                <li class="list-inline-item">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="left" title="" data-original-title="It worked"><i class="ti-thumb-up"></i> </button>
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="It didn't work"><i class="ti-thumb-down"></i> </button>
                                    </div>
                                    <!-- end:Btn group -->
                                </li>
                                <li class="list-inline-item">30% of 54 recommend</li>
                                <li class="list-inline-item"><a href="#">Share</a> </li>
                            </ul>
                            <!-- end:Coupon details -->
                        </div>
                        <!-- end:Coupon cont -->
                        <div class="button-contain col-sm-3 text-center">
                            <p class="btn-code" data-toggle="modal" data-target=".couponModal"> <span class="partial-code">BTSBAGS</span> <span class="btn-hover">Get Code</span> </p>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-star"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-email"></i> </button>
                                <button type="button" class="btn btn-default btn-xs"><i class="ti-mobile"></i> </button>
                            </div>
                        </div>
                    </div>
                    <!-- end: coupon wrap -->
                </div>
            </div>
            <!-- end: Tab content -->
            <div class="clearfix"></div>
            <div class="widget">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Top các đơn vị khuyến mãi
                    </h3>
                    <div class="widget-widgets"> <a href="#">Xem tất cả <span class="ti-angle-right"></span></a> </div>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="#"> <img class="img-responsive" src="http://placehold.it/240x240" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Wallshop</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="#"> <img class="img-responsive" src="http://placehold.it/240x240" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Shopers</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="#"> <img class="img-responsive" src="http://placehold.it/240x240" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Shoplogo</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="#"> <img class="img-responsive" src="http://placehold.it/240x240" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Affiliate</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="#"> <img class="img-responsive" src="http://placehold.it/240x240" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Coupons</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                            <div class="thumb-inside">
                                <a class="thumbnail" href="#"> <img class="img-responsive" src="http://placehold.it/240x240" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                            </div>
                            <div class="store_name text-center">
                                <h5>Discounts</h5>
                            </div>
                        </div>
                        <!-- /thumb -->
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs" id="multitabs">
                <li class="active"><a data-toggle="tab" href="#tab1">Popular stores</a> </li>
                <li class=""><a data-toggle="tab" href="#tab2">Popular Categories</a> </li>
            </ul>
            <div class="tab-content clearfix" id="multitabsContent">
                <div id="tab1" class="tab-pane counties-pane active">
                    <div class="col-sm-3">
                        <div class="row coupons-cat">
                            <div> <a href="#">London</a>
                                <br> <a href="#">Shopname</a>
                                <br> <a href="#">Ebay</a>
                                <br> <a href="#">Fashion store</a>
                                <br> <a href="#">Flexstore</a>
                                <br> <a href="#">Fashion store</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row coupons-cat">
                            <div> <a href="#">Liverpool</a>
                                <br> <a href="#">Hostgator</a>
                                <br> <a href="#">Shopname</a>
                                <br> <a href="#">Envato</a>
                                <br> <a href="#">Noname</a>
                                <br> <a href="#">SomeStore</a>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row coupons-cat">
                            <div> <a href="#">London</a>
                                <br> <a href="#">Shopname</a>
                                <br> <a href="#">Ebay</a>
                                <br> <a href="#">Fashion store</a>
                                <br> <a href="#">Flexstore</a>
                                <br> <a href="#">Fashion store</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row coupons-cat">
                            <div> <a href="#">Liverpool</a>
                                <br> <a href="#">Hostgator</a>
                                <br> <a href="#">Shopname</a>
                                <br> <a href="#">Envato</a>
                                <br> <a href="#">Noname</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab2" class="tab-pane">
                    <div class="col-sm-3">
                        <div class="row coupons-cat">
                            <div> <a href="#">Avon</a>
                                <br> <a href="#">Travel</a>
                                <br> <a href="#">Gifts</a>
                                <br> <a href="#">Tickets</a>
                                <br> <a href="#">Phone</a>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row coupons-cat">
                            <div> <a href="#">Durham</a>
                                <br> <a href="#">Recharge</a>
                                <br> <a href="#">Toys</a>
                                <br> <a href="#">Fashion</a>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row coupons-cat">
                            <div> <a href="#">Avon</a>
                                <br> <a href="#">Travel</a>
                                <br> <a href="#">Gifts</a>
                                <br> <a href="#">Tickets</a>
                                <br> <a href="#">Phone</a>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row coupons-cat">
                            <div> <a href="#">Durham</a>
                                <br> <a href="#">Recharge</a>
                                <br> <a href="#">Toys</a>
                                <br> <a href="#">Fashion</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Tab content -->
        </div>
        <div class="col-lg-4">
            <div class="widget categories b-b-0">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Popular categories
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <!-- Sidebar navigation -->
                    <ul class="nav sidebar-nav">
                        <li class="dropdown">
                            <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown"> <i class="ti-shine">
                                </i> Travel <span class="sidebar-badge">
                             12
                             </span> <b class="caret">
                                </b> </a>
                            <ul class="dropdown-menu">
                                <li> <a href="#" tabindex="-1">
                                        Europe
                                        <span class="sidebar-badge">
                                   12
                                   </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> <i class="ti-gift">
                                </i> Gifts <span class="sidebar-badge">
                             3
                             </span> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ti-bag">
                                </i> Vacations <span class="sidebar-badge">
                             3
                             </span> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ti-ticket">
                                </i> Tickets <span class="sidebar-badge badge-circle">
                             12
                             </span> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ti-pulse">
                                </i> Health <span class="sidebar-badge badge-circle">
                             45
                             </span> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ti-direction-alt">
                                </i> Things To Do <span class="sidebar-badge badge-circle">
                             117
                             </span> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="ti-harddrives">
                                </i> Electronics <span class="sidebar-badge badge-circle">
                             117
                             </span> </a>
                        </li>
                    </ul>
                    <!-- Sidebar divider -->
                </div>
            </div>
            <div class="widget">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Search your Favourite Stores
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <form class="form-horizontal select-search">
                        <label class="control-label ">What you searching for?</label>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default"> <i class="ti-tag"></i>
                                <input type="checkbox" checked>Coupons</label>
                            <label class="btn btn-default"> <i class="ti-cut"></i>
                                <input type="checkbox">Discounts</label>
                            <label class="btn btn-default active"> <i class="ti-alarm-clock"></i>
                                <input type="checkbox">Deals</label>
                        </div>
                        <fieldset>
                            <div class="form-group">
                                <label class="control-label ">Keyword</label>
                                <input class="form-control" id="text" name="text" type="text" />
                            </div>
                            <div class="row">
                                <!-- Select Basic -->
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label class="control-label " for="category">Select category</label>
                                    <select class="select form-control" id="category" name="category">
                                        <option value="Electronics">Electronics</option>
                                        <option value="Fashion">Fashion</option>
                                        <option value="Kids">Kids</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6 col-xs-12">
                                    <label class="control-label " for="store">Select a store</label>
                                    <select class="select form-control" id="store" name="store">
                                        <option value="Shopname">Shopname</option>
                                        <option value="Ebay">Ebay</option>
                                        <option value="Ebay">Shopname</option>
                                        <option value="Ebay">Hostgator</option>
                                        <option value="Ebay">Ebay</option>
                                        <option value="Bangdoo">Bangdoo</option>
                                    </select>
                                </div>
                            </div>
                            <!-- //row -->
                            <!-- Button -->
                            <div class="form-group ">
                                <button id="search_btn" name="search_btn" class="btn btn-danger">Search coupons</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- /widget -->
            <div class="widget">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Popular tags
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <ul class="tags">
                        <li> <a href="#" class="tag">
                                Coupons
                            </a>
                        </li>
                        <li> <a href="#" class="tag">
                                Discounts
                            </a>
                        </li>
                        <li> <a href="#" class="tag">
                                Deals
                            </a>
                        </li>
                        <li> <a href="#" class="tag">
                                Shopname
                            </a>
                        </li>
                        <li> <a href="#" class="tag">
                                Ebay
                            </a>
                        </li>
                        <li> <a href="#" class="tag">
                                Fashion
                            </a>
                        </li>
                        <li> <a href="#" class="tag">
                                Shoes
                            </a>
                        </li>
                        <li> <a href="#" class="tag">
                                Kids
                            </a>
                        </li>
                        <li> <a href="#" class="tag">
                                Travel
                            </a>
                        </li>
                        <li> <a href="#" class="tag">
                                Hosting
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /widget -->
            <div class="widget trending-coupons">
                <!-- /widget heading -->
                <div class="widget-heading">
                    <h3 class="widget-title text-dark">
                        Trending Coupons
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body">
                    <div class="media">
                        <div class="media-left media-middle"> <img src="http://placehold.it/64x64" alt=""> </div>
                        <div class="media-body">
                            <h4 class="media-heading">Upto 70% Rewards</h4>
                            <p>Up to 70% off on Clothing ...</p>
                        </div>
                    </div>
                    <!--/coupon media -->
                    <div class="media">
                        <div class="media-left media-middle"> <img src="http://placehold.it/64x64" alt=""> </div>
                        <div class="media-body">
                            <h4 class="media-heading">Upto 70% Rewards</h4>
                            <p>Up to 70% off on Clothing ...</p>
                        </div>
                    </div>
                    <!--/coupon media -->
                    <div class="media">
                        <div class="media-left media-middle"> <img src="http://placehold.it/64x64" alt=""> </div>
                        <div class="media-body">
                            <h4 class="media-heading">Up to 50% off Mens Summer Essentials at Clothing</h4>
                            <p>Up to 70% off on Clothing ...</p>
                        </div>
                    </div>
                </div>
                <!-- // widget body -->
            </div>
            <!-- /widget -->
        </div>
        <!-- end col -->
    </div>
    <!-- End row -->
@endsection