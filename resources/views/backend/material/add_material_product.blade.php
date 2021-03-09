@extends('layouts.admin')
@section('content')

    <div class="page-content">
        
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Thêm chất liệu sản phẩm</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Nhập thông tin chất liệu</h4>
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert text-danger font-italic font-weight-bold">'.$message.'</span>';
                                Session::put('message', null);
                            }
                            ?>
                            <form role="from" action="{{URL::to('/save-material-product')}}" method="post">
                                {{csrf_field()}}
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Tên chất liệu</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="material_product_name" placeholder="Tên chất liệu" {{-- value="Artisanal kale" --}} id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-md-2 col-form-label">Mô tả chất liệu</label>
                                <div class="col-md-10">
                                    <textarea style="resize: none" rows="5" class="form-control" name="material_product_desc" type="search" placeholder="Mô tả chất liệu" id="example-search-input"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-md-2 col-form-label">Từ khóa chất liệu</label>
                                <div class="col-md-10">
                                    <textarea style="resize: none" rows="5" class="form-control" name="material_product_keywords" type="search" placeholder="Mô tả chất liệu" id="example-search-input"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Hiển thị</label>
                                <div class="col-md-10">
                                    <select name="material_product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <label class="col-md-10 col-form-label"></label>
                                <button class="btn btn-info" type="submit" name="add_material_product_name">Thêm chất liệu</button>
                            </div>
                            </form>
                            
                        </div>
                    </div>
                </div> <!-- end col --> 
            </div>
            <!-- end row -->
        
    </div> <!-- end col -->

@endsection