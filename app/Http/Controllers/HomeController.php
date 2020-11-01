<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  Cart;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {



    }

    public function index()
    {


        

        $data['categories']=DB::table('category')->select('category_title','category_name')->where('parent_id',0)->paginate(12);
     //   $data['products']=DB::table('product')->get();
        $data['home_products'] = DB::table('product')
            ->select('product_title','product_name','discount_price','product_price','folder','feasured_image')
            ->orderBy('modified_time','desc')->paginate(28);
        $data['top_products'] = DB::table('product')
            ->select('product_title','product_name','discount_price','product_price','folder','feasured_image')
            ->where('product_type','first')->orderBy('modified_time','desc')->paginate(12);
        $data['bottom_products'] = DB::table('product')->select('product_title','product_name','discount_price','product_price','folder','feasured_image')
            ->where('product_type','last')->orderBy('modified_time','desc')->paginate(12);


        $data['sliders']=DB::table('homeslider')->select('homeslider_title','target_url','homeslider_picture','homeslider_text')->where('status',1)->get();
       return view('website.home',$data);
    }
    function homepagination(Request $request)
    {
        if($request->ajax())
        {
            $data['home_products'] = DB::table('product')->select('product_title','product_name','discount_price','product_price','folder','feasured_image')
                ->orderBy('modified_time','desc')->paginate(28);
            return view('website.home_page_ajax_category',$data)->render();
        }
    }

    function liveProductSearch(Request $request)
    {

        if ($request->ajax()) {

            $query = $request->get('product');
            $query = str_replace(" ", "%", $query);
            $products = DB::table('product')
                ->select('product_title','product_name','discount_price','product_price','folder','feasured_image')
                ->where('sku', 'LIKE', '%' . $query . '%')
                ->orWhere('product_title', 'LIKE', '%' . $query . '%')
                ->orderBy('product.product_id', 'desc')->paginate(40);
            return view('website.liveProductSearch', compact('products'))->render();
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category($category_name)
    {

      //  $data['categories']=DB::table('category')->select('category_id','category_title','category_name')->where('parent_id',0)->get();
       // SELECT DISTINCT* FROM `product` join category on category.category_id=product_category_relation.category_id WHERE category.category_name='electronics-items' SELECT DISTINCT* FROM `product` join product_category_relation on product_category_relation.product_id=product.product_id join category on category.category_id=product_category_relation.category_id WHERE category.category_name='electronics-items'
       $data['products'] =DB::table('product')->join('product_category_relation','product_category_relation.product_id','=','product.product_id')->join('category','category.category_id','=','product_category_relation.category_id')->where('product.status','=',1)->where('category_name',$category_name)->orderBy('modified_time','DESC')->paginate(18);

        if(empty($data['products'])){
            return redirect('/');
        }
$data['category_name']=$category_name;
        return view('website.category',$data);
     }
    public  function  ajax_category(Request $request){
        if($request->ajax())
        {

            $category_name = $request->get('category_name');
           // $query = str_replace(" ", "%", $query);
            $products =DB::table('product')->join('product_category_relation','product_category_relation.product_id','=','product.product_id')->join('category','category.category_id','=','product_category_relation.category_id')->where('category_name',$category_name)->where('product.status','=',1)->orderBy('modified_time','DESC')->paginate(18);

          //  return view('website.category_ajax', compact('products'));
            $view = view('website.category_ajax',compact('products'))->render();

            return response()->json(['html'=>$view]);
        }

    }
    public   function hot_home_product(){
        $data['products']=DB::table('product')->orderBy('modified_time','desc')->get();
        $view = view('website.hot_home_ajax_product',$data)->render();
        return response()->json(['html'=>$view]);
    }
    public function home_page_category_ajax(){
       // $data['products']=DB::table('product')->get();
        $view = view('website.home_page_ajax_category')->render();
        return response()->json(['html'=>$view]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function product($product_name)
    {
       // $data['categories']=DB::table('category')->select('category_id','category_title','category_name')->where('parent_id',0)->get();
        $data['product']=DB::table('product')->select('*')->join('product_relation','product_relation.product_id','product.product_id')->where('product_name',$product_name)->first();
        if(empty($data['product'])){
            return redirect('/');
        }
        $category_row =DB::table('product')->select('category_title','category_name')->join('product_category_relation','product_category_relation.product_id','=','product.product_id')->join('category','category.category_id','=','product_category_relation.category_id')->where('product_name',$product_name)->orderBy('category.category_id','DESC')->first();


$data['category_name']=$category_row->category_name;
$data['category_title']=$category_row->category_title;
        return view('website.product',$data);
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search_engine(Request $request)
    {
        $search_query = $request->search_query;



        $search_query = str_replace(" ", "%", $search_query);
        $data['products'] = DB::table('product')->select('product_title','folder','feasured_image','product_price','sku','discount_price', 'product_name')->where('sku','LIKE','%'.$search_query.'%')
            ->orWhere('product_title','LIKE','%'.$search_query.'%')->paginate(10);
        $data['search_query']=$search_query;

        $view = view('website.search_engine',$data)->render();
        return response()->json(['html'=>$view]);



    }

    public  function search(Request $request){
        $search_query = $request->search;

        $search_query = str_replace(" ", "%", $search_query);
        $products= DB::table('product')->select('product_id','product_title','folder','feasured_image','product_price','sku','discount_price', 'product_name')->where('sku','LIKE','%'.$search_query.'%')
            ->orWhere('product_title','LIKE','%'.$search_query.'%')->get();
        if(count($products)==1){
            $product_url=url('/product').'/'.$products[0]->product_name;
          //  redirect($product_url;
            return redirect("$product_url");

        }
            return view('website.search', compact('products'));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function track_order(Request $request)
    {
        if($request->mobile){
            $data['mobile']=$request->mobile;
           $data['order']= DB::table('order_data')->where('customer_phone',$request->mobile)->orderBy('order_id','desc')->first();

$data['mobile']=$request->mobile;

            return view('website.track_order_page',$data);
        } else {
            return view('website.track_order_page');
        }
    }
    public function page($url){
        $data['page']=DB::table('page')->select('*')->where('page_link',$url)->first();
        return view('website.page',$data);

    }
}
