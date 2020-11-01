<?php if(isset($orders)): ?>
    <?php $i=$orders->perPage() * ($orders->currentPage()-1);?>
    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($order->order_id); ?></td>
            <td><?php echo e($order->customer_name); ?></td>
            <td><span class="label label-info"><?php echo e($order->customer_phone); ?><span class="label label-success"></span></td>
            <td><span class="label label-success"><?php if($order->order_area=='inside'): ?>
                Inside Dhaka <?php else: ?> Outside Dhaka <?php endif; ?>
                </span></td>
            <td><?php

                $order_items = unserialize($order->products);

                if(is_array($order_items['items'])) {
                    foreach ($order_items['items'] as $product_id => $item) {
                        $featured_image = isset($item['featured_image']) ? $item['featured_image'] : null;

                       // $product = single_product_information($product_id);
                     //   $sku = $product->sku;
                        //$name = $product->product_name;

                        ?>
<a  target="_blank" href="<?php echo e(URL::to('/product'.'/')); ?>">


    <span class="label label-info" style="height: 20px; width:150px;display: block;overflow: hidden" ><?=($item['name'])?></span>


    <br/>
    <img  src="<?=$featured_image?>" />
    ✖
    <?=($item['qty'])?>
</a>
                <br>





                <?php
                        }
                    }


     ?>



            </td>





            <td><?php echo e($order->created_by); ?></td>
            <td> <?php echo '৳ ' . number_format($order->order_total, 2); ?>
                </td>

            <td>
                <?php if($order->order_status=='pending_payment'){
                    ?>

                <span   style="background-color:yellow"><?php echo e($order->order_status); ?></span>
                <?php  } elseif ($order->order_status=='new') { ?>
                    <span   class="label label-info"><?php echo e($order->order_status); ?></span>

                <?php  } elseif ($order->order_status=='processing') { ?>
                    <span   class="label label-info"><?php echo e($order->order_status); ?></span>

                <?php  } elseif ($order->order_status=='on_courier') { ?>

                    <span   class="label label-danger"><?php echo e($order->order_status); ?></span>
                <?php  } elseif ($order->order_status=='delivered') { ?>
                    <span   class="label label-success"><?php echo e($order->order_status); ?></span>

                <?php  } elseif ($order->order_status=='refund') { ?>

                    <span   class="label label-danger"><?php echo e($order->order_status); ?></span>
                <?php  } elseif ($order->order_status=='cancled') { ?>
                    <span   class="label label-danger"><?php echo e($order->order_status); ?></span>
                <?php } else {  ?>

                    <span   class="label label-success"><?php echo e($order->order_status); ?></span>
                <?php } ?>


            </td>
            <td><?php echo e(date('d-F-Y H:i:s a',strtotime($order->created_time))); ?></td>

            <td>
                <a title="edit" href="<?php echo e(url('admin/order')); ?>/<?php echo e($order->order_id); ?>">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>

                
                    
                
            </td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="13" align="center">
            <?php echo $orders->links(); ?>

        </td>
    </tr>
<?php endif; ?>


<?php /**PATH C:\Xampp\htdocs\mylaravelecomerce\resources\views/admin/order/pagination.blade.php ENDPATH**/ ?>