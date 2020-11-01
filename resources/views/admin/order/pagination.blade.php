@if(isset($orders))
    <?php $i=$orders->perPage() * ($orders->currentPage()-1);?>
    @foreach ($orders as $order)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $order->order_id }}</td>
            <td>{{ $order->customer_name }}</td>
            <td><span class="label label-info">{{ $order->customer_phone }}<span class="label label-success"></span></td>
            <td><span class="label label-success">@if($order->order_area=='inside')
                Inside Dhaka @else Outside Dhaka @endif
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
<a  target="_blank" href="{{URL::to('/product'.'/')}}">


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





            <td>{{$order->created_by}}</td>
            <td> @money($order->order_total)
                </td>

            <td>
                <?php if($order->order_status=='pending_payment'){
                    ?>

                <span   style="background-color:yellow">{{ $order->order_status }}</span>
                <?php  } elseif ($order->order_status=='new') { ?>
                    <span   class="label label-info">{{ $order->order_status }}</span>

                <?php  } elseif ($order->order_status=='processing') { ?>
                    <span   class="label label-info">{{ $order->order_status }}</span>

                <?php  } elseif ($order->order_status=='on_courier') { ?>

                    <span   class="label label-danger">{{ $order->order_status }}</span>
                <?php  } elseif ($order->order_status=='delivered') { ?>
                    <span   class="label label-success">{{ $order->order_status }}</span>

                <?php  } elseif ($order->order_status=='refund') { ?>

                    <span   class="label label-danger">{{ $order->order_status }}</span>
                <?php  } elseif ($order->order_status=='cancled') { ?>
                    <span   class="label label-danger">{{ $order->order_status }}</span>
                <?php } else {  ?>

                    <span   class="label label-success">{{ $order->order_status }}</span>
                <?php } ?>


            </td>
            <td>{{date('d-F-Y H:i:s a',strtotime($order->created_time))}}</td>

            <td>
                <a title="edit" href="{{ url('admin/order') }}/{{ $order->order_id }}">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>

                {{--<a title="delete" href="{{ url('admin/product/delete') }}/{{ $order->product_id }}" onclick="return confirm('Are you want to delete this Product')">--}}
                    {{--<span class="glyphicon glyphicon-trash btn btn-danger"></span>--}}
                {{--</a>--}}
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="13" align="center">
            {!! $orders->links() !!}
        </td>
    </tr>
@endif


