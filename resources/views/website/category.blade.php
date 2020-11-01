@extends('website.master')
@section('mainContent')


    <div class="container" style="padding-top: 10px;" >
        <div class="row">
            <span class="live_product"></span>

        </div>
    </div>
    <div class="breadcrumb remove_class">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class='active'>@if(isset($products[0]->category_title)) {{  $products[0]->category_title  }} @endif </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="best_seller_product remove_class" style="background-color: #fff;padding-bottom: 10px" id="main_content_area">
        <div class="container" style="padding-right:0px">


            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mobile-border-of" style="background:#fff;padding: 5px;">

                    <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" style=" padding: 0px;margin-bottom: 20px;  border-right:0;border-bottom:0" id="Product_Ajax">


                        <span id="post-data">

                               @include('website.category_ajax')
                        </span>


                    </div>

                </div>

            </div>


        </div>
    </section>



    <input type="hidden"  id="category_name" name="category_name" value="{{$category_name}}">

    <script type="text/javascript">

        var page = 1;
        //jQuery('.ajax-load').show();
        jQuery(window).scroll(function() {


            page++;

            loadMoreData(page);



        });


        function loadMoreData(page){
            var category_name=$('#category_name').val();
            var url=base_url+"/ajax_category?page="+page+"&category_name="+category_name;
        
            jQuery.ajax(

                {

                    url:url,

                    type: "get",


                })

                .done(function(data)

                {
                    // console.log(data.html)
                    if(data.html == " "){


                        return false;

                    }



                    jQuery("#post-data").append(data.html);

                })

                .fail(function(jqXHR, ajaxOptions, thrownError)

                {

                    // alert('server not responding...');

                });

        }

    </script>


@endsection
