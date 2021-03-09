@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Thông tin khách hàng</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row w3-res-tb">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                            <div class="table-responsive mb-0">
                                <?php
                                $message = Session::get('message');
                                if($message){
                                    echo '<span class="text-alert text-danger font-italic font-weight-bold">'.$message.'</span>';
                                    Session::put('message', null);
                                }
                                ?>
                                <table id="tech-companies-1" class="table table-striped b-t b-light">
                                    <thead>
                                    <tr>
                                        
                                        <th>Tên khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th style="width:30px;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <tr>
                                                
                                                <td>{{ $order_by_id->customer_name }}</td>
                                                <td>{{ $order_by_id->customer_phone }}</td>
                                                <td>{{ $order_by_id->customer_email }}</td>
                                            </tr> 

                                    </tbody>
                                </table>
                            </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
    <br><br>
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Thông tin vận chuyển</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row w3-res-tb">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                            <div class="table-responsive mb-0">
                                <?php
                                $message = Session::get('message');
                                if($message){
                                    echo '<span class="text-alert text-danger font-italic font-weight-bold">'.$message.'</span>';
                                    Session::put('message', null);
                                }
                                ?>
                                <table id="tech-companies-1" class="table table-striped b-t b-light">
                                    <thead>
                                    <tr>
                                        
                                        <th>Tên người vận chuyển</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th style="width:30px;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <tr>
                                                
                                                <td>{{ $order_by_id->shipping_name }}</td>
                                                <td>{{ $order_by_id->shipping_address }}</td>
                                                <td>{{ $order_by_id->shipping_phone }}</td>
                                            </tr> 

                                    </tbody>
                                </table>
                            </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
    <br><br>
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">LIỆT KÊ CHI TIẾT ĐƠN HÀNG</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row w3-res-tb">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row w3-res-tb">
                            <div class="col-sm-3 m-b-xs">
                                <select class="input-sm form-control w-sm inline v-middle">
                                <option value="0">Bulk action</option>
                                <option value="1">Delete selected</option>
                                <option value="2">Bulk edit</option>
                                <option value="3">Export</option>
                                </select>
                                            
                            </div>
                            <button type="button" class="btn btn-secondary waves-effect waves-light">Apply</button>
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                <input type="text" class="input-sm form-control" placeholder="Search">
                                
                                <button class="btn btn-info waves-effect waves-light" type="button">Go!</button>
                                </div>
                            </div>
                        </div>
                            <div class="table-responsive mb-0">
                                <?php
                                $message = Session::get('message');
                                if($message){
                                    echo '<span class="text-alert text-danger font-italic font-weight-bold">'.$message.'</span>';
                                    Session::put('message', null);
                                }
                                ?>
                                <table id="tech-companies-1" class="table table-striped b-t b-light">
                                    <thead>
                                    <tr>
                                        <th style="width: 60px;">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Tổng tiền</th>
                                        <th style="width:30px;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <tr>
                                                <td style="width: 60px;">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2"></label>
                                                    </div>
                                                </td>
                                                
                                                <td>{{ $order_by_id->product_name }}</td>
                                                <td>{{ $order_by_id->product_sales_quantity }}</td>
                                                <td>{{ $order_by_id->product_price }}</td>
                                                <td>{{ $order_by_id->product_price * $order_by_id->product_sales_quantity }}</td>
                                            </tr> 

                                    </tbody>
                                </table>
                            </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
    <br><br>
    
    <div class="row">
        <div class="col-lg-12">
            <ul class="pagination pagination-rounded justify-content-center mt-4">
                <li class="page-item disabled">
                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                </li>
                <li class="page-item active">
                    <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">4</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">5</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
 
@endsection