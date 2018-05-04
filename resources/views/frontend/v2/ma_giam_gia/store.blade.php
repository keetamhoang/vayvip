@extends('frontend.v2.layout')

@section('title')
    <title>
        @include('frontend.v2.ma_giam_gia.title')
    </title>
@endsection

@section('meta')
    @include('frontend.v2.ma_giam_gia.meta')
@endsection

@section('h1_seo')
    @include('frontend.v2.ma_giam_gia.h1_seo')
@endsection

@section('top')

@endsection

@section('content')
    <section class="results">
        <div class="dp-header custom-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 dph-info">
                        <img src="{{ $image }}" class="profile-img" alt="">
                        <div>
                            <h4>{{ $name }}</h4>
                            <p>{{ $desc }}
                            </p>
                            <a href="#">Electronics</a> <a href="#">Fashion</a>
                        </div>
                    </div>
                    <div class="col-md-4 dph-reviews">
                        <p><span>9,2 &nbsp;<em>/10</em></span> 21 reviews</p>
                        <p class="dph-rec"><i class="ti-cut"></i><span>78</span> Offers</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="widget categories b-b-0">
                    <!-- /widget heading -->
                    <div class="widget-heading">
                        <h3 class="widget-title text-dark">
                            Related Categories
                        </h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-body">
                        <!-- Sidebar navigation -->
                        <ul class="nav sidebar-nav">
                            <li>
                                <a href="#"> <i class="ti-desktop">
                                    </i> Electronics <span class="sidebar-badge badge-circle">
                             117
                             </span> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="ti-briefcase">
                                    </i> Fashion <span class="sidebar-badge badge-circle">
                             117
                             </span> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="ti-desktop">
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
                                    Store
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
                                    Vacations
                                </a>
                            </li>
                            <li> <a href="#" class="tag">
                                    Hosting
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
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
                    </div>
                    <!-- // widget body -->
                </div>
            </div>
            <!--/col -->
            <div class="col-sm-9">
                <div class="widget-body">
                    <div class="widget">
                        <ul class="nav nav-tabs solo-nav responsive-tabs" id="myTab">
                            <li class="active"><a data-toggle="tab" href="#popular"><i class="ti-bar-chart"></i>Popular <span class="badge badge-info">78</span> </a> </li>
                            <li class=""><a data-toggle="tab" href="#coupons"><i class="ti-cut"></i> Coupons <span class="badge badge-danger">15</span></a> </li>
                            <li class=""><a data-toggle="tab" href="#deals"><i class="ti-link"></i>Deals <span class="badge badge-danger">15</span></a> </li>
                            <li class=""><a data-toggle="tab" href="#inStore"><i class="ti-receipt"></i>In-store <span class="badge badge-purple">15</span></a> </li>
                        </ul>
                    </div>
                </div>
                <!--/widget -->
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane single-coupon active" id="popular">
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
                                <div class="ribbon-wrapper hidden-xs">
                                    <div class="ribbon">Featured</div>
                                </div>
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">30%</div>
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
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Save up to 30% on newly marked down accessories</a></h4>
                                    <p data-toggle="collapse" data-target="#more">Shop these Store deals of the day to save as much...</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">75%</div>
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
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Save 75% on final clearance shoes and accessories.</a></h4>
                                    <p data-toggle="collapse" data-target="#more1">Shop these Store deals of the day to save as much...</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">25%</div>
                                            <div class="small">off</div>
                                            <div class="type">Code</div>
                                        </div>
                                    </div>
                                    <!-- end:Savings -->
                                </div>
                                <!-- end:Coupon data -->
                                <div class="coupon-contain col-sm-7">
                                    <ul class="list-inline list-unstyled">
                                        <li class="sale label label-pink">Sale</li>
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Blockbuster Fashion Sale – Upto 80% Off On Wide Range Of Fashion Products</a></h4>
                                    <p data-toggle="collapse" data-target="#more2">Shop these Store deals of the day to save as much...</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
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
                                        <li class="sale label label-pink">Sale</li>
                                        <li class="popular label label-success">100% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Half Price Sale – Flat 50% Off On Men & Women Clothing & Footwear</a></h4>
                                    <p data-toggle="collapse" data-target="#more3">Shop these Store deals of the day to save as much...</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
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
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Up To 70% Off | Store Promo Codes &amp; Coupons</a></h4>
                                    <p data-toggle="collapse" data-target="#more4">Shop these Store deals of the day to save as much...</p>
                                    <p id="more4" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                    </div>
                    <!-- / tabpanel -->
                    <div role="tabpanel" class="tab-pane single-coupon" id="coupons">
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
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
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Save 40% to 50% Off Select Styles. Valid 7/31</a></h4>
                                    <p data-toggle="collapse" data-target="#more5">Shop these Store deals of the day to save as much...</p>
                                    <p id="more5" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
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
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Up To 70% Off | Store Promo Codes &amp; Coupons</a></h4>
                                    <p data-toggle="collapse" data-target="#more6">Shop these Store deals of the day to save as much...</p>
                                    <p id="more6" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
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
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Up To 70% Off | Store Promo Codes &amp; Coupons</a></h4>
                                    <p data-toggle="collapse" data-target="#more7">Shop these Store deals of the day to save as much...</p>
                                    <p id="more7" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                    </div>
                    <!-- / tabpanel -->
                    <div role="tabpanel" class="tab-pane single-coupon" id="deals">
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
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
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Up To 70% Off | Store Promo Codes &amp; Coupons</a></h4>
                                    <p data-toggle="collapse" data-target="#more8">Shop these Store deals of the day to save as much...</p>
                                    <p id="more8" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
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
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Up To 70% Off | Store Promo Codes &amp; Coupons</a></h4>
                                    <p data-toggle="collapse" data-target="#more9">Shop these Store deals of the day to save as much...</p>
                                    <p id="more9" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
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
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Up To 70% Off | Store Promo Codes &amp; Coupons</a></h4>
                                    <p data-toggle="collapse" data-target="#more1">Shop these Store deals of the day to save as much...</p>
                                    <p id="more10" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
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
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Up To 70% Off | Store Promo Codes &amp; Coupons</a></h4>
                                    <p data-toggle="collapse" data-target="#more11">Shop these Store deals of the day to save as much...</p>
                                    <p id="more11" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
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
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Up To 70% Off | Store Promo Codes &amp; Coupons</a></h4>
                                    <p data-toggle="collapse" data-target="#more12">Shop these Store deals of the day to save as much...</p>
                                    <p id="more12" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
                                <div class="ribbon-wrapper hidden-xs">
                                    <div class="ribbon">Featured</div>
                                </div>
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
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Up To 70% Off | Store Promo Codes &amp; Coupons</a></h4>
                                    <p data-toggle="collapse" data-target="#more14">Shop these Store deals of the day to save as much...</p>
                                    <p id="more14" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                    </div>
                    <!-- / tabpanel -->
                    <div role="tabpanel" class="tab-pane single-coupon" id="inStore">
                        <div class="alert alert-info">This coupons can be used only in-store.Plase print and save coupons. <a href="#" class="alert-link">Visit store for more info</a>.</div>
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
                                <div class="ribbon-wrapper hidden-xs">
                                    <div class="ribbon">Featured</div>
                                </div>
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">75%</div>
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
                                        <li class="popular label label-success">98% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">Receive $100 OFF Your $400+ Purchase, or $200 OFF Your $800+ Purchase</a></h4>
                                    <p data-toggle="collapse" data-target="#more15">Shop these Store deals of the day to save as much...</p>
                                    <p id="more15" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                        <div class="coupon-wrapper coupon-single">
                            <div class="row">
                                <div class="ribbon-wrapper hidden-xs">
                                    <div class="ribbon">Featured</div>
                                </div>
                                <div class="coupon-data col-sm-2 text-center">
                                    <div class="savings text-center">
                                        <div>
                                            <div class="large">50%</div>
                                            <div class="small">off</div>
                                            <div class="type">Code</div>
                                        </div>
                                    </div>
                                    <!-- end:Savings -->
                                </div>
                                <!-- end:Coupon data -->
                                <div class="coupon-contain col-sm-7">
                                    <ul class="list-inline list-unstyled">
                                        <li class="sale label label-pink">Code</li>
                                        <li class="popular label label-success">90% success</li>
                                        <li><span class="verified  text-success"><i class="ti-face-smile"></i>Verified</span> </li>
                                        <li><span class="used-count">78 used</span> </li>
                                    </ul>
                                    <h4 class="coupon-title"><a href="#">
                                            Free Shipping On All Orders</a>
                                    </h4>
                                    <p data-toggle="collapse" data-target="#more16">Shop these Store deals of the day to save as much...</p>
                                    <p id="more16" class="collapse">Don't miss out on all the coupon savings.Get you coupon now and save big</p>
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
                            <!-- //row -->
                        </div>
                        <!--/COUPON-->
                    </div>
                    <!-- / tabpanel -->
                </div>
                <!-- end: Tab content -->
                <!-- Poplura stores -->
                <div class="widget">
                    <!-- /widget heading -->
                    <div class="widget-heading">
                        <h3 class="widget-title text-dark">
                            Top Stores
                        </h3>
                        <div class="widget-widgets"> <a href="#">View More Stores <span class="ti-angle-right"></span></a> </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-body">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                                <div class="thumb-inside">
                                    <a class="thumbnail" href="#"> <img class="img-responsive" src="http://placehold.it/240x240" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                                </div>
                                <div class="store_name text-center">
                                    <h5>Wallgrins</h5>
                                </div>
                            </div>
                            <!-- /thumb -->
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                                <div class="thumb-inside">
                                    <a class="thumbnail" href="#"> <img class="img-responsive" src="http://placehold.it/240x240" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                                </div>
                                <div class="store_name text-center">
                                    <h5>Onlinestore</h5>
                                </div>
                            </div>
                            <!-- /thumb -->
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                                <div class="thumb-inside">
                                    <a class="thumbnail" href="#"> <img class="img-responsive" src="http://placehold.it/240x240" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                                </div>
                                <div class="store_name text-center">
                                    <h5>Chegg</h5>
                                </div>
                            </div>
                            <!-- /thumb -->
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                                <div class="thumb-inside">
                                    <a class="thumbnail" href="#"> <img class="img-responsive" src="http://placehold.it/240x240" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                                </div>
                                <div class="store_name text-center">
                                    <h5>Shopname</h5>
                                </div>
                            </div>
                            <!-- /thumb -->
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                                <div class="thumb-inside">
                                    <a class="thumbnail" href="#"> <img class="img-responsive" src="http://placehold.it/240x240" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                                </div>
                                <div class="store_name text-center">
                                    <h5>Storename</h5>
                                </div>
                            </div>
                            <!-- /thumb -->
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 thumb">
                                <div class="thumb-inside">
                                    <a class="thumbnail" href="#"> <img class="img-responsive" src="http://placehold.it/240x240" alt=""> </a> <span class="favorite"><a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="Save store"><i class="ti-heart"></i></a></span>
                                </div>
                                <div class="store_name text-center">
                                    <h5>VendorStore</h5>
                                </div>
                            </div>
                            <!-- /thumb -->
                        </div>
                    </div>
                </div>
                <!-- end:Popular stores widget -->
                <ul class="pagination pagination-lg m-t-0">
                    <li>
                        <a href="#"> <i class="ti-arrow-left"></i> </a>
                    </li>
                    <li> <a href="#">1</a> </li>
                    <li class="active"> <a href="#">2</a> </li>
                    <li> <a href="#">3</a> </li>
                    <li> <a href="#">4</a> </li>
                    <li>
                        <a href="#"> <i class="ti-arrow-right"></i> </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection