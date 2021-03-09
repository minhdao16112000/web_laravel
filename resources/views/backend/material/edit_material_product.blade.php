@extends('layouts.admin')
@section('content')

    <div class="page-content">
        
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Cập nhật chất liệu sản phẩm</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert text-danger font-italic font-weight-bold">'.$message.'</span>';
                                Session::put('message', null);
                            }
                            ?>
                            {{-- @foreach ($edit_material_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="from" action="{{URL::to('/update-material-product/'.$edit_value->material_id)}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Tên chất liệu</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="material_product_name" value="{{$edit_value->material_name}}">
                                    </div>
                                </div>
                                <div class="form-group row">    
                                    <label for="example-search-input" class="col-md-2 col-form-label">Mô tả chất liệu</label>
                                    <div class="col-md-10">
                                        <textarea style="resize: none" rows="5" class="form-control" name="material_product_desc" type="search" id="example-search-input">{{$edit_value->material_desc}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-md-2 col-form-label">Từ khóa chất liệu</label>
                                    <div class="col-md-10">
                                        <textarea style="resize: none" rows="5" class="form-control" name="material_product_keywords" type="search" placeholder="Mô tả chất liệu" id="example-search-input">{{$edit_value->meta_keywords}}</textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-10 col-form-label"></label>
                                    <button class="btn btn-info" type="submit" name="update_material_product_name">Cập nhật chất liệu</button>
                                </div>
                                </form>
                            </div>
                            @endforeach --}}
                           
                            <div class="position-center">
                                <form role="from" action="{{URL::to('/update-material-product/'.$edit_material_product->material_id)}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Tên chất liệu</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="material_product_name" value="{{$edit_material_product->material_name}}">
                                    </div>
                                </div>
                                <div class="form-group row">    
                                    <label for="example-search-input" class="col-md-2 col-form-label">Mô tả chất liệu</label>
                                    <div class="col-md-10">
                                        <textarea style="resize: none" rows="5" class="form-control" name="material_product_desc" type="search" id="example-search-input">{{$edit_material_product->material_desc}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-md-2 col-form-label">Từ khóa chất liệu</label>
                                    <div class="col-md-10">
                                        <textarea style="resize: none" rows="5" class="form-control" name="material_product_keywords" type="search" placeholder="Mô tả chất liệu" id="example-search-input">{{$edit_material_product->meta_keywords}}</textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-10 col-form-label"></label>
                                    <button class="btn btn-info" type="submit" name="update_material_product_name">Cập nhật chất liệu</button>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        
    </div> <!-- end col -->

@endsection