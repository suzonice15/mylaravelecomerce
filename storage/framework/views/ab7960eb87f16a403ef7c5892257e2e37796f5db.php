
<!--<footer class="navbar-fixed-bottom " style="width: 100%;background: none;" id="SidebarCardMenu">-->
<footer class="navbar-fixed-bottom area-mobile-off" style="width: 100%;background: none;" >
    <a href="<?php echo e(url('/')); ?>/cart">
        <!--Apps button start-->
        <div  style="height: auto;width: 80px;background: #fff ;position: absolute;z-index: 9999;bottom: 450px;right: 0;border-radius: 5px 0 0 5px;border: 1px solid #1D70BA;" class="cart_anchor">


            <?php  $items = \Cart::getContent();

            $total = 0;
            $quantity = 0;
            foreach ($items as $row) {

                $total = \Cart::getTotal();

                $quantity = Cart::getContent()->count();

            }

            ?>
                 <span id="CartDetailsTotal"  style="padding: 8px 0;width:100%;display: inline-block;color:#000;font-size:14px;font-weight:bold;text-align:center">
                         <span class="value"><?php echo '৳ ' . number_format($total, 2); ?></span>   Tk.
                    </span>

            <span  style="width:100%;display:inline-block; background:green ; color: #fff;font-weight:bold;padding:2px;text-align:center;border-radius: 0 0 0 5px;">
                        <i class="fa fa-shopping-cart" title="My Cart" style="font-size: 30px;"> </i>
                        <span id="totalCartItems2">
                            <span class="count"><?=$quantity?></span> Items
                        </span>
                    </span>


        </div>
    </a>

    <!--Apps button end-->
</footer>





<footer class="navbar-default" style="background: #094809">
    <div class="container" style="padding-top: 25px;  padding-bottom: 25px;">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" >
                <h4 style="font-weight:bold;color:white">Payment System</h4>
                <img style="cursor: pointer"  src="<?php echo e(url('/')); ?>/public/pay.jpg" alt="ajibto" title="ajibto">

                <div class="social-container">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-zero" >


            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                <h4 style="font-weight: bold;color:white">Solehinbd Shop</h4>
                <ul >
                    <li class="fotter-menu-padding"><a href="<?php echo e(url('/')); ?>/about-us" title="Login" class="font-color1">About Us</a></li>
                    <li class="fotter-menu-padding"><a href="<?php echo e(url('/')); ?>/delivery-payment" title="Login" class="font-color1">Contact Us</a></li>
                    <li class="fotter-menu-padding"><a href="<?php echo e(url('/')); ?>/replace-refund" title="Login" class="font-color1">Replace & Refund</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                <h4 style="font-weight: bold;color:white">  Customer Care</h4>
                <ul >
                    <li class="fotter-menu-padding"><a href="<?php echo e(url('/')); ?>/about-us" title="Login" class="font-color1">Terms and Conditions</a></li>
                     <li class="fotter-menu-padding"><a href="<?php echo e(url('/')); ?>/replace-refund" title="Login" class="font-color1">Return and Refund Policy</a></li>
                    <li class="fotter-menu-padding"><a href="<?php echo e(url('/')); ?>/replace-refund" title="Login" class="font-color1">Track Your Order</a></li>

                </ul>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padding-zero" >
                <h4 style="font-weight: bold;color:white">Office Address  </h4>

                <address style="color:white;font-weight: normal; font-size: 14px;margin-bottom: 10px;">

                    236/2 West Shewrapara <br>
                    mirpur 2, Dhaka-1216 <br><br>
                    <strong>Help Line: 015711-33188</strong>
                </address>


                <br>
                <br>
            </div>

        </div>





    </div>
    </div>
</footer>

<footer class="navbar-default" style="background: green;color: white;">
    <div class="container" style="padding-top: 10px;">



        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-seo-box">


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" >

                <p class="text-center" style="margin: 20px 0;font-weight: bold;color:white">@copyright    2020  Devoloped by <a style="color:white" href="https://web.facebook.com/shahinulislam.sujon.5" target="_blank">Developed by Shahinul Islam Sujon </a></p>
            </div>

        </div>
    </div>
</footer>






<!--<script src="front_asset/js/vendor/jquery-1.11.3.min.js"></script>-->
<script async  type="text/javascript" src="<?php echo e(asset('assets/font_end/')); ?>/js/jquery.min.js"></script>
<script async  type="text/javascript" src="<?php echo e(asset('assets/font_end/')); ?>/js/bootstrap.min.js"></script>
<script async  type="text/javascript" src="<?php echo e(asset('assets/font_end/')); ?>/js/stellarnav.js"></script>
<script async  type="text/javascript" src="<?php echo e(asset('assets/font_end/')); ?>/js/owl.carousel.min.js"></script>
<script async type="text/javascript" src="https://sohojbuy.com/assets/font_end/dist/xzoom.min.js"></script>
<script async  type="text/javascript" src="<?php echo e(asset('assets/font_end/')); ?>/js/custom.js"></script>



</body>

</html>
<style>
    .alert-box-arrow{
        width: 0;
        height: 0;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-bottom: 15px solid #F6F6F6;
        margin-top: -15px;
        position: absolute;
    }
</style>


<script type="text/javascript">
    $(document).ready(function($) {
        $('.stellarnav').stellarNav({
            theme: 'dark',
            breakpoint: 960,
            position: 'left',
            phoneBtn: '<?=get_option('phone')?>',
            locationBtn: '<?=get_option('map')?>'
        });
    });

</script>


<script>
    $(document).on('click','.add_to_cart',function () {
        let product_id=  $(this).data("product_id"); // will return the number 123Informatica
      let picture=  $(this).data("picture"); // will return the number 123
        $('.add_to_cart').text('একটু অপেক্ষা করুন ......');

        var quntity = document.getElementById("quantity").innerHTML;


        if(typeof quntity ==='undefined'){
            quntity=1;
        } else {
            quntity=quntity;
        }

        $.ajax({
            type:"GET",
            url:"<?php echo e(url('add-to-cart')); ?>?product_id="+product_id+"&quntity="+quntity+"&picture"+picture,

            success:function(data)
            {

                $('.add_to_cart').text('কার্ডে প্রোডাক্ট অ্যাড করা হইসে ');

                $('body .count').text(data.result.count);
                $('body .value').text(data.result.total);
            }
        })

    })
</script>
<script>
    $(document).on('click','.buy-now-cart',function () {
        let product_id=  $(this).data("product_id"); // will return the number 123
       let picture=  $(this).data("picture"); // will return the number 123

        var quntity = document.getElementById("quantity").innerHTML;

        $('.buy-now-cart').text('একটু অপেক্ষা করুন .....');

        if(typeof quntity ==='undefined'){
            quntity=1;
        } else {
            quntity=quntity;
        }
        $.ajax({
            type:"GET",
            url:"<?php echo e(url('add-to-cart')); ?>?product_id="+product_id+"&quntity="+quntity+"&picture"+picture,
            success:function(data)
            {
                window.location.assign("<?php echo e(url('/')); ?>/checkout")
                $('body .count').text(data.result.count);
                $('body .value').text(data.result.total);
            }
        })

    })

</script>


<?php /**PATH C:\Xampp\htdocs\mylaravelecomerce\resources\views/website/includes/footer.blade.php ENDPATH**/ ?>