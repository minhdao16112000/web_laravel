<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Slider;
session_start();

class HomeController extends Controller
{
    public function index(Request $request){
        //slider
        $slider = Slider::orderBy('slider_id','ASC')->where('slider_status','1')->take(3)->get();
        //--slider
        //seo
        $meta_desc = "Chuyên bán đồ thủ công mỹ nghê";
        $meta_keywords = "Thủ công mỹ nghê";
        $meta_title = "Thủ công mỹ nghê";
        $url_canonical = $request->url();
        //--seo

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();

        $material_product = DB::table('tbl_material')->where('material_status','1')->orderby('material_id','desc')->get();

        $all_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(6)->get();
        
        return view('frontend.home')->with('category',$cate_product)->with('material',$material_product)->with('all_product',$all_product )
        ->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)
        ->with('url_canonical',$url_canonical)
        ->with('slider',$slider);
    }

    public function search(Request $request){
        $keywords = $request->keywords_submit;
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        $material_product = DB::table('tbl_material')->where('material_status','0')->orderby('material_id','desc')->get();

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->limit(4)->get();
        
        //seo
        $meta_desc = "Tìm kiếm sản phẩm";
        $meta_keywords = "Tìm kiếm sản phẩm";
        $meta_title = "Tìm kiếm sản phẩm";
        $url_canonical = $request->url();
        //--seo

        return view('frontend.product.search')->with('category',$cate_product)->with('material',$material_product)->with('search_product',$search_product)
        ->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
}
