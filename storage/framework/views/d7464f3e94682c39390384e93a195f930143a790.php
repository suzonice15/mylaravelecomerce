<?php if($products): ?>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php
        if ($product->discount_price) {
            $sell_price = $product->discount_price;
        } else {
            $sell_price = $product->product_price;
        }
        ?>
        <div class="col-sm-2 col-xs-6  product-hover-area" style="padding: 5px;">
            <div class="col-sm-12 col-xs-12 padding-zero "
                 style=" padding: 0px;border: 1px solid #dfdfdf; background: #fff;padding-bottom: 6px;">

                <a style="padding: 0px;" class="img-hover col-sm-12 padding-zero"
                   href="<?php echo e(url('product')); ?>/<?php echo e($product->product_name); ?>" id="1050">
                    <img class="img-responsive " style="margin: 0 auto;padding:5px !important "
                         src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/thumb/<?php echo e($product->feasured_image); ?>"
                         alt="<?php echo e($product->product_title); ?>">


                    <span id="productName1050" class="col-sm-12 text-center product-name-c"
                          style="background: #fff;padding: 2px;padding-top: 5px;overflow: hidden;height: 54px; display: block;color:#525252;font-weight: bold;font-size: 13px !important; font-family: 'Work Sans',Arial,sans-serif;"><?php echo e($product->product_title); ?>      </span>

                    <span id="productPrice1050" class="col-sm-12  col-xs-12 text-center"
                          style="background: #fff;padding: 5px;display: block;line-height:18px;color: #D2691E;font-size: 14px;font-weight: bold;height: 28px;">
<!--<div style="border-top: 1px solid #ccc;padding: 3px;">-->
                                    <div class="col-sm-6 text-left pull-left" style="padding:0"><label
                                            style="color:#0089cf;font-size: 14px;">  <?php echo '৳ ' . number_format($sell_price, 2); ?></label> </div>
                        <div class="col-sm-6 pull-right text-right" style="padding:0">
                                 <?php
                            if($product->discount_price){


                            ?> <del style="color:red;font-size:14px"><?php echo '৳ ' . number_format($product->product_price, 2); ?></del>
                          <?php


                            }
                            ?>


                        </div><!--</div>-->

                                </span>


                </a>
            </div>

        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH C:\Xampp\htdocs\mylaravelecomerce\resources\views/website/category_ajax.blade.php ENDPATH**/ ?>