@extends('layouts.admin')
@section('content')
        <div class="page-content">
        
            
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Thêm mã giảm giá</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
    
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
    
                                <h4 class="card-title">Nhập thông tin mã giảm giá</h4>
                                <?php
                                $message = Session::get('message');
                                if($message){
                                    echo '<span class="text-alert text-danger font-italic font-weight-bold">'.$message.'</span>';
                                    Session::put('message', null);
                                }
                                ?>
                                <form role="form" action="{{URL::to('/insert-coupon-code')}}" method="post">
                                    @csrf
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Tên mã giảm giá</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="coupon_name" placeholder="Tên mã giảm giá" {{-- value="Artisanal kale" --}} id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-md-2 col-form-label">Mã giảm giá</label>
                                    <div class="col-md-10">
                                        <textarea style="resize: none" rows="5" class="form-control" name="coupon_code" type="search" placeholder="Mã giảm giá" id="example-search-input"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-md-2 col-form-label">Số lượng mã</label>
                                    <div class="col-md-10">
                                        <textarea style="resize: none" rows="5" class="form-control" name="coupon_time" type="search" {{-- placeholder="Mô tả danh mục --}} id="example-search-input"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Tính năng mã</label>
                                    <div class="col-md-10">
                                        <select name="coupon_condition" class="form-control input-sm m-bot15">
                                            <option value="0">----Chọn-----</option>
                                            <option value="1">Giảm theo phần trăm</option>
                                            <option value="2">Giảm theo tiền</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-md-2 col-form-label">Nhập số % hoặc tiền giảm</label>
                                    <div class="col-md-10">
                                        <input type="text" name="coupon_number" class="form-control" id="example-text-input" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-10 col-form-label"></label>
                                    <button class="btn btn-info" type="submit" name="add_coupon">Thêm mã</button>
                                </div>
                                </form>
                                
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            
        </div> <!-- end col -->
@endsection