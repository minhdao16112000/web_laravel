@extends('layouts.admin')
@section('content')

    <div class="page-content">
        
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Thêm Slide</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Nhập thông tin Slide</h4>
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert text-danger font-italic font-weight-bold">'.$message.'</span>';
                                Session::put('message', null);
                            }
                            ?>
                            <form id="demoForm" role="from" action="{{URL::to('/insert-slider')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Tên slide</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="slider_name" placeholder="Tên slide" {{-- value="Artisanal kale" --}} id="example-text-input">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Hình ảnh slide</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="file" name="slider_image" {{-- value="Artisanal kale" --}} id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-md-2 col-form-label">Mô tả slide</label>
                                <div class="col-md-10">
                                    <textarea style="resize: none" rows="5" class="form-control" name="slider_desc" type="search" placeholder="Mô tả slider" {{-- id="ckeditor1" --}}></textarea>
                                </div>
                            </div>
                            
                            {{-- <div class="form-group row">
                                <label for="example-search-input" class="col-md-2 col-form-label">Từ khóa sản phẩm</label>
                                <div class="col-md-10">
                                    <textarea style="resize: none" rows="5" class="form-control" name="sli_keywords" type="search" id="example-text-input"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Danh mục sản phẩm</label>
                                <div class="col-md-10">
                                    <select name="product_cate" class="form-control input-sm m-bot15">
                                    @foreach($cate_product as $key => $cate)
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Chất liệu sản phẩm</label>
                                <div class="col-md-10">
                                    <select name="product_material" class="form-control input-sm m-bot15">
                                    @foreach($material_product as $key => $material)
                                        <option value="{{$material->material_id}}">{{$material->material_name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Hiển thị</label>
                                <div class="col-md-10">
                                    <select name="slider_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn slider</option>
                                        <option value="1">Hiển thị slider</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-10 col-form-label"></label>
                                <button class="btn btn-info" type="submit" name="add_slider">Thêm slider</button>
                            </div>
                            </form>
                            
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        
    </div> <!-- end col -->

@endsection