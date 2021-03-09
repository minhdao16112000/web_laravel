@extends('layouts.admin')
@section('content')

    <div class="page-content">
        
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Thêm phí vận chuyển</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Nhập thông tin phí vận chuyển</h4>
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert text-danger font-italic font-weight-bold">'.$message.'</span>';
                                Session::put('message', null);
                            }
                            ?>
                            <form>
                                @csrf
                            
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Chọn thành phố</label>
                                    <div class="col-md-10">
                                        <select  name="city" id="city" class="form-control input-sm m-bot15 choose city">
                                            <option value="">--Chọn tỉnh thành phố--</option>
                                            @foreach($city as $key => $ci)
                                                <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Chọn quận huyện</label>
                                    <div class="col-md-10">
                                        <select name="province" id="province" class="form-control input-sm m-bot15 province choose">
                                            <option value="">--Chọn quận huyện--</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Chọn xã phường</label>
                                    <div class="col-md-10">
                                        <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                                            <option value="">--Chọn xã phường--</option>   
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Phí vận chuyển</label>
                                    <div class="col-md-10">
                                        <input class="form-control fee_ship" type="text" name="fee_ship" placeholder="Giá ship" {{-- value="Artisanal kale" --}} id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-10 col-form-label"></label>
                                    <button class="btn btn-info add_delivery" type="button" name="add_delivery">Thêm phí vận chuyển</button>
                                </div>
                            </form>
                           
                        </div>
                        <div id="load_delivery"></div>
                    </div>
                </div> <!-- end col --> 
            </div>
            <!-- end row -->
        
    </div> <!-- end col -->

@endsection