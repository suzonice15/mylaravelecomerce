<?php $__env->startSection('mainContent'); ?>




    <div class="container" style="padding-top: 10px;">
        <div class="row">
            <span class="live_product"></span>

        </div>
    </div>

    <section class="slider_area remove_class" id="slider_area" style="background-color: #fff;padding-bottom: 10px;">
        <div class="container mobile-padding-top-0" style="padding-top: 10px;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 " style="padding: 0px">
                    <div id="wrapper">


                        <div class="slider-wrapper theme-default">


                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">

                                    <?php

                                    if ($sliders) {
                                        $html = '';
                                        $indicators = '';
                                        $i = 0;
                                        foreach ($sliders as $slider) {
                                            $homeslider_banner = url('public/uploads/sliders') . '/' . $slider->homeslider_picture;

                                            $html .= '<div class="item ' . ($i == 0 ? 'active' : null) . '">
												<img src="' . $homeslider_banner . '" alt="Dhaka Image Slider">
											</div>';

                                            $indicators .= '<li data-target="#carousel-example-generic" data-slide-to="' . $i . '" class="' . ($i == 0 ? 'active' : null) . '">&nbsp;</li>';

                                            $i++;

                                        }
                                        $html .= '<ol class="carousel-indicators">' . $indicators . '</ol>';

                                    }
                                    echo $html;
                                    ?>


                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>
    <!--content area start-->

    <section class="best_seller_product remove_class" style="background-color: #fff;padding-bottom: 10px"
             id="main_content_area">


        <div class="container">

            <div class="row area-mobile-on">
                <h4 class="cat-title" style="margin-bottom: 5px !important;">প্রোডাক্ট ক্যাটেগরীজ</h4>
                <?php

                $categories = DB::table('category')->where('parent_id', 0)->get();
                foreach ($categories as $category){
                //$image=url('public/uploads/category').'/'.$category->medium_banner;
                ?>
                <div class="col-lg-12 col-md-12 col-sm-4  col-xs-4 mobile-border-of"
                     style="background: #fff;padding: 5px;">


                    <a href="<?php echo e(url('/')); ?>/category/<?php echo e($category->category_name); ?>"
                       style="margin: 2px;background: #F2F2F2; font-size: 12px;border-color:#ddd;color:#000">


                        <?php echo e($category->category_title); ?>

                    </a>
                </div>

                <?php

                }
                ?>

            </div>

            <div class="row remove_class" style="margin-top:20px">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mobile-border-of"
                     style="background: #CFDBE9;padding: 5px;">
                    <a href="#" style="font-size: 20px; font-weight: bold; color: #F16E52;">SUPER DEAL</a>
                    <a style="color: #F16E52;font-weight: bold;font-size: 20px;" href="<?php echo e(url('/')); ?>/hot-deal-product"
                       class="pull-right">
                        সকল সুপার ডিল <i class="fa fa-angle-right"></i>
                    </a>

                    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12"
                         style="background: #CFDBE9;padding: 0px;margin-bottom: 20px;padding-top: 15px  ">
                        <div class="slider">
                            <ul class="product-category owl-carousel nav">
                                <?php if($top_products): ?>
                                    <?php $__currentLoopData = $top_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php

$discount=0;
                                        if ($product->discount_price) {
                                            $sell_price = $product->discount_price;
                                            $discount = round(($product->product_price - $sell_price) / 100);

                                        } else {
                                            $sell_price = $product->product_price;
                                        }
                                        ?>
                                        <li class="product">
                                            <a href="<?php echo e(url('/')); ?>/product/<?php echo e($product->product_name); ?>">
                                    <span class="percentage-span-new"
                                          style="background-image: url(<?php echo e(url('/')); ?>/public/uploads/flash-deal-percentage.png)">
                                        <font class="percentage-amount-new"><?php echo e($discount); ?></font><font
                                            class="percentage-sign-new">%</font><font
                                            class="percentage-discount-amount-new">ছাড়</font></span>
                                                <span class="price-text">৳&nbsp; <?php echo e($sell_price); ?></span>
                                                <img
                                                    src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/thumb/<?php echo e($product->feasured_image); ?>"
                                                    alt="ajibto.com" title="ajibto.com"/>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12"
                         style="background: #CFDBE9;padding: 0px;margin-bottom: 20px; ">
                        <div class="slider">
                            <ul class="product-category owl-carousel nav">

                                <?php if($bottom_products): ?>
                                    <?php $__currentLoopData = $bottom_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        $discount=0;
                                        if ($product->discount_price) {
                                            $sell_price = $product->discount_price;
                                            $discount = round(($product->product_price - $sell_price) / 100);
                                        } else {
                                            $sell_price = $product->product_price;
                                        }
                                        ?>
                                        <li class="product">
                                            <a href="<?php echo e(url('/')); ?>/product/<?php echo e($product->product_name); ?>">
                                                <span class="percentage-span-new"
                                                      style="background-image: url(<?php echo e(url('/')); ?>/public/uploads/flash-deal-percentage.png)"><font
                                                        class="percentage-amount-new"><?php echo e($discount); ?></font><font
                                                        class="percentage-sign-new">%</font><font
                                                        class="percentage-discount-amount-new">ছাড়</font></span>
                                                <span class="price-text">৳&nbsp;<?php echo e($sell_price); ?></span>
                                                <img
                                                    src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/thumb/<?php echo e($product->feasured_image); ?>"
                                                    alt="<?php echo e($product->product_title); ?>" title="<?php echo e($product->product_title); ?>"/>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row remove_class">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mobile-border-of"
                     style="background:#fff;;padding: 0;">
                    <h4 class="cat-title" style="margin-bottom: 7px !important;padding-top: 10px;"> জনপ্রিয়
                        প্রোডাক্ট </h4>

                    <span id="hom_ajax_product">

                <?php echo $__env->make('website.home_page_ajax_category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </span>
                </div>


            </div>

        </div>

        <script>


        </script>


    </section>

    <!--content area end-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Xampp\htdocs\mylaravelecomerce\resources\views/website/home.blade.php ENDPATH**/ ?>