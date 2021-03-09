@extends('layouts.admin')
@section('content')

    <div class="page-content">
        
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Cập nhật sản phẩm</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Cập nhật thông tin sản phẩm</h4>
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert text-danger font-italic font-weight-bold">'.$message.'</span>';
                                Session::put('message', null);
                            }
                            ?>
                            @foreach ($edit_product as $key => $pro)
                                
                            
                            <form role="from" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Tên sản phẩm</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="product_name" value="{{ $pro->product_name }}" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Giá sản phẩm</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="product_price" value="{{ $pro->product_price }}" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Hình ảnh sản phẩm</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="file" name="product_image" {{-- value="Artisanal kale" --}} id="example-text-input">
                                    <img src="{{ URL::to('uploads/product/'.$pro->product_image) }}" height="100" width="100">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-md-2 col-form-label">Mô tả sản phẩm</label>
                                <div class="col-md-10">
                                    <textarea style="resize: none" rows="5" class="form-control" name="product_desc" type="search" id="example-text-input">{{ $pro->product_desc }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-md-2 col-form-label">Nội dung sản phẩm</label>
                                <div class="col-md-10">
                                    <textarea style="resize: none" rows="5" class="form-control" name="product_content" type="search" id="example-text-input">{{ $pro->product_content }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-md-2 col-form-label">Từ khóa sản phẩm</label>
                                <div class="col-md-10">
                                    <textarea style="resize: none" rows="5" class="form-control" name="product_keywords" type="search" id="example-text-input">{{ $pro->meta_keywords }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Danh mục sản phẩm</label>
                                <div class="col-md-10">
                                    <select name="product_cate" class="form-control input-sm m-bot15">
                                    @foreach($cate_product as $key => $cate)
                                        @if ($cate->category_id==$pro->category_id)
                                        <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @else
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endif
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Chất liệu sản phẩm</label>
                                <div class="col-md-10">
                                    <select name="product_material" class="form-control input-sm m-bot15">
                                    @foreach($material_product as $key => $material)
                                        @if ($material->material_id==$pro->material_id)
                                        <option selected value="{{$material->material_id}}">{{$material->material_name}}</option>
                                        @else
                                        <option value="{{$material->material_id}}">{{$material->material_name}}</option>
                                        @endif
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Hiển thị</label>
                                <div class="col-md-10">
                                    <select name="product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-10 col-form-label"></label>
                                <button class="btn btn-info" type="submit" name="add_product_name">Cập nhật sản phẩm</button>
                            </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        
    </div> <!-- end col -->

@endsection