<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Material;
use App\Models\Slider;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class MaterialProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function add_material_product(){
        $this->AuthLogin();
        return view('backend.material.add_material_product');
    }

    public function all_material_product(){
        $this->AuthLogin();
        // $all_material_product = DB::table('tbl_material')->get();
        // $all_material_product = Material::all();
        $all_material_product = Material::orderBy('material_id','DESC')->get();
        $manager_material_product = view('backend.material.all_material_product')->with('all_material_product',$all_material_product);
        return view('layouts.admin')->with('backend.material.all_material_product', $manager_material_product);

    }

    public function edit_material_product($material_product_id){
        $this->AuthLogin();
        // $edit_material_product = DB::table('tbl_material')->where('material_id',$material_product_id)->get();
        $edit_material_product = Material::find($material_product_id);
        $manager_material_product = view('backend.material.edit_material_product')->with('edit_material_product',$edit_material_product);
        return view('layouts.admin')->with('backend.material.edit_material_product', $manager_material_product);
    }

    public function delete_material_product($material_product_id){
        $this->AuthLogin();
        DB::table('tbl_material')->where('material_id',$material_product_id)->delete();
        Session::put('message', 'Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-material-product');
    }

    public function save_material_product(Request $request){
        $this->AuthLogin();
        $data = $request->all();
        $material = new Material();
        $material->material_name = $data['material_product_name'];
        $material->meta_keywords = $data['material_product_keywords'];
        $material->material_desc = $data['material_product_desc'];
        $material->material_status = $data['material_product_status'];
        $material->save();

        // $data = array();
        // $data['material_name'] = $request->material_product_name;
        // $data['meta_keywords'] = $request->material_product_keywords;
        // $data['material_desc'] = $request->material_product_desc;
        // $data['material_status'] = $request->material_product_status;

        // DB::table('tbl_material')->insert($data);
        Session::put('message', 'Thêm chất liệu sản phẩm thành công');
        return Redirect::to('add-material-product');
    }

    public function unactive_material_product($material_product_id){
        $this->AuthLogin();
        DB::table('tbl_material')->where('material_id',$material_product_id)->update(['material_status'=>0]);
        Session::put('message', 'Không kích hoạt chất liệu thành công');
        return Redirect::to('all-material-product');
    }

    public function active_material_product($material_product_id){
        $this->AuthLogin();
        DB::table('tbl_material')->where('material_id',$material_product_id)->update(['material_status'=>1]);
        Session::put('message', 'Kích hoạt chất liệu thành công');
        return Redirect::to('all-material-product');
    }

    public function update_material_product(Request $request,$material_product_id){
        $this->AuthLogin();
        /* $data = array();
        $data['material_name'] = $request->material_product_name;
        $data['meta_keywords'] = $request->material_product_keywords;
        $data['material_desc'] = $request->material_product_desc;
        DB::table('tbl_material')->where('material_id',$material_product_id)->update($data); */
        $data = $request->all();
        $material = Material::find($material_product_id);
        $material->material_name = $data['material_product_name'];
        $material->meta_keywords = $data['material_product_keywords'];
        $material->material_desc = $data['material_product_desc'];
        $material->save();
        Session::put('message', 'Cập nhật chất liệu sản phẩm thành công');
        return Redirect::to('all-material-product');
    }

    //End function Admin Page
    public function show_material_home(Request $request ,$material_id){
        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();

        $material_product = DB::table('tbl_material')->where('material_status','1')->orderby('material_id','desc')->get();

        $material_by_id = DB::table('tbl_product')->join('tbl_material','tbl_product.material_id','=','tbl_material.material_id')
        ->where('tbl_material.material_id',$material_id)->get();

        foreach($material_by_id as $key => $val){
            
            //seo
            $meta_desc = $val->material_desc;
            $meta_keywords = $val->meta_keywords;
            $meta_title = $val->material_name;
            $url_canonical = $request->url();
            //--seo

        }

        $material_name = DB::table('tbl_material')->where('tbl_material.material_id',$material_id)->limit(1)->get();

        return view('frontend.material.show_material')->with('category',$cate_product)->with('material',$material_product
        )->with('material_by_id',$material_by_id)->with('material_name',$material_name)
        ->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)
        ->with('url_canonical',$url_canonical)->with('slider',$slider);
    }
}
