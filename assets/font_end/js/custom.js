

    //// product live search

    jQuery('body #searh_item').on('input change',function () {
        var product = jQuery('#searh_item').val();
        var url=base_url+"/live/product/search?product=" + product;

        if (product.length > 0) {
            jQuery.ajax({
                url: url,
                success: function (data) {

                    jQuery('.remove_class').hide();
                    jQuery('.live_product').html(data);

                }
            });
        } else {
            jQuery('.remove_class').show();
            jQuery('.live_product').html('');

        }
    });

    jQuery('#search_item_mobile').on('input change',function () {
        var product= jQuery('#search_item_mobile').val();
        var url=base_url+"/live/product/search?product=" + product;

        if(product.length>0) {
            jQuery.ajax({
                url:url,
                success: function (data) {

                    jQuery('.remove_class').hide();
                    jQuery('.live_product').html(data);

                }
            });
        } else {
            jQuery('.remove_class').show();
            jQuery('.live_product').html('');

        }
    });


////home page ajax

    $(document).ready(function () {
        jQuery(document).ready(function(){
            jQuery(document).on('click', ' .pagination a', function(event){
                event.preventDefault();
                var page = jQuery(this).attr('href').split('page=')[1];
                fetch_data(page);
            });

            function fetch_data(page)
            {
                var url=base_url+"/homePage/pagination?page="+page;

                jQuery.ajax({
                    url:url,
                    success:function(data)
                    {

                        jQuery('#hom_ajax_product').html(data);

                        jQuery('#hom_ajax_product').css({top:'50%',left:'50%',margin:'-'+(jQuery('#hom_ajax_product').height() / 2)+'px 0 0 -'+(jQuery('#hom_ajax_product').width() / 2)+'px'});
                    }
                });
            }



        });
        });


    ////////       hot deal carosel


    if ($('.product-category').hasClass('owl-carousel')) {

        $('.owl-carousel').owlCarousel({
            items: 6,
            margin: 15,
            nav: true,
            dots: false,
            autoplay: true,
            slideBy: 6,
            autoplayHoverPause: true,
            rewind: true,
            responsive: {
                0: {
                    items: 3
                },
                760: {
                    items: 3
                },
                960: {
                    items: 4
                },
                1170: {
                    items: 6
                }
            }
        })
    }
