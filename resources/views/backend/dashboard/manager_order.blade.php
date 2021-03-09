@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">LIỆT KÊ ĐƠN HÀNG</h4>

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
                                        <th>Tên người đặt</th>
                                        <th>Tổng giá tiền</th>
                                        <th>Tình trạng</th>
                                        <th>Hiển thị</th>
                                        <th style="width:30px;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_order as $key => $order)
                                            <tr>
                                                <td style="width: 60px;">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2"></label>
                                                    </div>
                                                </td>
                                                
                                                <td>{{$order->customer_name}}</td>
                                                <td>{{$order->order_total}}</td>
                                                <td>{{$order->order_status}}</td>
                                                <td>
                                                    <a href="{{URL::to('/view-order/'.$order->order_id)}}" class="active styling-edit" ui-toggle-class="">
                                                        <i class="fa fa-pen-square text-success text-active"></i>
                                                    </a>
                                                    <a onclick="return confirm('Bạn có chắc là muốn xóa đơn hàng này không?')"s href="{{URL::to('/delete-order/'.$order->order_id)}}" class="active styling-edit" ui-toggle-class="">
                                                        <i class="fa fa-trash-alt text-danger text"></i>
                                                    </a>
                                                </td>
                                            </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
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

        
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Design & Develop by Minh Van
                        </div>
                    </div>
                </div>
            </div>
        </footer>
 
@endsection