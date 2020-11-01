<!DOCTYPE html>
<html>
<head>
    <?php
    $get_single_option = get_single_option();

    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Solehinbd Shop</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/adminfile')}}/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/hotdeal.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/etalage.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/mega_menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/stellarnav.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/customshop_style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font_end/')}}/css/etalage.css" type="text/css"
          media="all"/>
    <link rel="stylesheet" type="text/css" href="https://sohojbuy.com/assets/font_end/dist/xzoom.css"/>
    <script src="{{ asset('assets/adminfile')}}/bower_components/jquery/dist/jquery.min.js"></script>


    {{--<script  async  src="{{ asset('assets/font_end/')}}/js/jquery.etalage.min.js"></script>--}}
    <link rel="shortcut icon" href="{{url('/')}}/public/uploads/{{$get_single_option->icon}}"/>
    
    
    <script>
var base_url="{{url('/')}}";

    </script>



    <style>

        .product-hover-effect:hover {
            border: 1px solid #00255f !important;
            transition: all .1s;
        }

        .buy-now:hover {
            color: #00255f;
            transition: all .1s;
        }

        li {
            list-style-type: none;
        }

        img.zoomEffect {
            /*    width: 350px;
                height: 200px;*/
            -webkit-transition: all 1.5s ease-in-out;
            -moz-transition: all 1.5s ease-in-out;
            -o-transition: all 1.5s ease-in-out;
            -ms-transition: all 1.5s ease-in-out;
        }

        .transition {
            -webkit-transform: scale(1.4);
            -moz-transform: scale(1.4);
            -o-transform: scale(1.4);
            transform: scale(1.4);
        }
    </style>

    <style>
        .desktop-menu{
            height: auto !important;
            top: 0 !important;
            box-shadow: none !important;
            background: green !important;
        }
        input[type="search"].cus-s::-webkit-input-placeholder {
            font-size: 20px;
        }

        @media (max-width: 768px) {

            .desktop-menu{display:none}
        }
        @media (min-width: 768px) {
            .product-custom-area {
                width: 14.2777% !important;
            }

        }

        .main-category:hover {
            background-color: #ededed;
        }

        .sub-category-name:hover {
            background-color: #ededed;
        }

        .footer-panel > li > a {
            font-weight: bolder
        }

        .footer-panel > li > a:hover {
            background: none;
            cursor: pointer;
            color: orange !important;
        }

        .footer-panel > li > a:focus {
            background: none;
        }

        input[type="button"], input[type="reset"], input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer;
            outline: none;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .product-name-c {
            color: #777777 !important;
            font-size: 14.2px !important;

        }
        .product-hover-area a img {

            padding: 0 !important;
            width: 100% !important;
        }
    </style>

</head>
<body style="background-color:#fff">
<section class=" area-mobile-off" style="box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);">



    <section style="background-color:white">
        <div class="container">
            <div class="row" style="padding-top: 14px;">

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 padding-zero">
                    <div style="float: left">
                        <a href="{{URL::to('/')}}"><img src="{{url('/')}}/public/uploads/{{$get_single_option->logo}}"
                                                        style="float: right;padding-top: 5px;" alt="Solehinbd  shop"
                                                        title="Solehinbd shop logo"></a>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12" style="">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                         style="border-radius: 20px 20px 0 0;padding-top: 8px;">
                        <form action="#" method="post" class="form" role="search">
                            <div class="form-group">
                                <div class="input-group"
                                     style="border: 2px solid green !important; border-radius: 3px;">
                                    <input type="search" id="searh_item" class="form-control cus-s"
                                           placeholder="সার্চ করুন"
                                           style="border:0  !important;box-shadow: none !important;padding: 2px 15px;background:#fff">

                                    <span style="background:green;
                                              color: #fff;border: 0;border-radius: 0;font-size: 20px;"
                                          class="input-group-addon"> &nbsp;<i class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div style="padding-right:0" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-group">
                    <ul class="navbar-nav">

                        <li data-toggle="modal" data-target="#mySms" class="top-menu-padding"
                            style="padding-top: 20px;padding-left: 0"><a
                                style="background:green;color:white;font-weight: bold;padding-left: 10px;padding-right: 10px;border-radius: 6px;"
                                href="#" title="Track Your Order" class="font-color1">
                                অর্ডার ট্র্যাকিং
                            </a></li>

                        <li class="top-menu-padding" style="padding-top: 20px;">
                            <a style="background:green;color:white;font-weight: bold;padding-left: 10px;padding-right: 10px;border-radius: 6px;"
                               href="tel:{{$get_single_option->phone}}" title="Call" class="font-color1">
                                <i class="fa fa-phone-square"> </i> {{$get_single_option->phone}}
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
</section>
<nav class="navbar navbar-default lightHeader  desktop-menu" role="navigation">
    <div class="container" style="justify-content: center;display: flex;padding-right: 0;">

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" style="padding:0">
            <ul class="nav navbar-nav navbar-left">
                <?php

                $categories = DB::table('category')->select('category_id', 'category_title', 'category_name')->where('parent_id', 0)->where('status', 1)->paginate(10);


                if($categories){



                foreach ($categories as $first){

                ?>


                <li class=" dropdown megaDropMenu color-2">
                    <a href="{{url('/')}}/category/{{$first->category_name}}">
                                    <span style="font-weight: bold;">
                                      {{$first->category_title}}
                                    </span>
                    </a>

                </li>
                <?php } }?>
            </ul>
        </div>

    </div>
</nav>
<div class="modal fade" id="mySms" role="dialog">
    <div class="modal-dialog">
        <form action="#" method="post">
            <!-- Modal content-->
            <div class="modal-content" style="border: 3px solid #00255f ;">
                <div class="modal-header" >
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><strong>Track Order Record</strong></h4>
                </div>
                <div class="modal-body">


                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 form-group">
                        <input style="width:100% !important;padding: 20px;" required type="number" class="form-control"
                               name="mobile_number" placeholder="Please Type Your Mobile Number">
                    </div>

                </div>
                <div class="modal-footer" style="border:0;padding: 50px 30px 30px 30px;">
                    <input style="color:#fff;font-weight:bold;padding: 5px;width:100% !important;background:green"
                           type="submit" class="btn  pull-right" value="Search">
                </div>
            </div>
        </form>

    </div>
</div>


<?php
use Jenssegers\Agent\Agent;

$agent = new Agent();
$mobile = $agent->isMobile();
$tablet = $agent->isTablet();

if($mobile == 1 or $tablet == 1) {
?>
<div class="stellarnav mobile-menu-responsive">
    <ul>


        <?php

        $categories = DB::table('category')->select('category_id', 'category_title', 'category_name')->where('parent_id', 0)->where('status', 1)->paginate(10);


        if($categories){



        foreach ($categories as $first){
        $firstCategory_id = $first->category_id;
        $secondCategories = DB::table('category')->select('category_id', 'category_title', 'category_name')->where('parent_id', $firstCategory_id)->orderBy('category_id', 'ASC')->get();

        if(count($secondCategories) > 0){



        ?>
        <li><a href="{{url('/category')}}/{{$first->category_name}}">{{$first->category_title}}</a>
            <ul>
                <?php foreach ($secondCategories as $second){

                $secondCategory_id = $second->category_id;
                $thirdCategories = DB::table('category')->select('category_title', 'category_name')->where('parent_id', $secondCategory_id)->orderBy('category_id', 'ASC')->get();
                if(count($thirdCategories) > 0){
                ?>

                <li><a href="#">{{$second->category_title}}</a>
                    <ul>
                        <?php foreach ($thirdCategories as $third) {?>
                        <li><a href="{{url('/category')}}/{{$third->category_name}}">{{$third->category_title}}</a></li>
                        <?php } ?>

                    </ul>
                </li>
                <?php } else { ?>
                <li><a href="{{url('/category')}}/{{$second->category_name}}">{{$second->category_title}}</a></li>


                <?php } }?>


            </ul>
        </li>

        <?php } else { ?>

        <li><a href="{{url('/category')}}/{{$first->category_name}}">{{$first->category_title}}</a></li>

        <?php
        }

        }
        }
        ?>


    </ul>
</div><!-- .stellarnav -->

<?php  }?>
<!--=========================header bottom section==================-->


<nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation"
     style="height: auto;top:0;background: white;box-shadow: none;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">


            <a href="{{URL::to('/')}}" style="float: left; padding-top: 10px;">


                <img src="{{url('/')}}/public/uploads/{{$get_single_option->logo}}" class="img-responsive" alt="ajibto"
                     title="ajibto" style="width: 164px;margin-left: 104px;">
            </a>

            <a href="#" data-toggle="modal" data-target="#mySms" style="float: right;padding-right: 20px;">
                <i class="fa fa-user" style="color: #000; font-size: 30px; font-weight: bold; padding-top: 11px;"></i>
            </a>

            <a href="#" style="float: right;padding-right: 20px;">
                <span class="badge"
                      style="position: absolute;background: transparent;color: #000;top: 10px;right: 55px;"
                      id="MtotalCartItems">        </span>

                <i style="color:#000;padding-top: 8px;font-size: 30px;" class="fa fa-shopping-bag"
                   aria-hidden="true"></i>
                <!--<img class="img-responsive" src="http://www.ajibto.com/image/manufacturer_logo/cart-icon.png" alt="ajibto" style=" padding-top: 8px;width: 34px;">-->

            </a>


            <div class="col-xs-12" style="padding-right: 0;padding-left: 28px !important;padding-right: 15px;">
                <form action="#" method="post" class="form" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="search" id="search_item_mobile" class="form-control cus-s"
                                   placeholder="সার্চ করুন"
                                   style="border-radius: 4px 0 0 4px !important;margin-left: 8px;padding-left: 10px;background:#fff">

                            <span style="color: #fff; background:#3078a6; border: 1px;" class="input-group-addon"> &nbsp;<i
                                    class="fa fa-search"></i></span>
                        </div>
                    </div>
                </form>
            </div>


        </div>


    </div>
</nav>


