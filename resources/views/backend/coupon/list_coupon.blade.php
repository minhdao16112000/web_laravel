@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">LIỆT KÊ MÃ GIẢM GIÁ</h4>

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
                                        <th>Tên mã giảm giá</th>
                                        <th>Mã giảm giá</th>
                                        <th>Số lượng giảm giá</th>
                                        <th>Điều kiện giảm giá</th>
                                        <th>Số giảm</th>
                                        <th style="width:30px;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($coupon as $key => $cou)
                                            <tr>
                                                <td style="width: 60px;">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2"></label>
                                                    </div>
                                                </td>
                                                
                                                <td>{{ $cou->coupon_name }}</td>
                                                <td>{{ $cou->coupon_code }}</td>
                                                <td>{{ $cou->coupon_time }}</td>
                                                <td><span class="text-ellipsis">
                                                    <?PHP
                                                    if($cou->coupon_condition==1){
                                                    ?>
                                                    Giảm theo %
                                                    <?PHP
                                                    }else{
                                                    ?>
                                                    Giảm theo tiền
                                                    <?php
                                                    }
                                                    ?>
                                                </span></td>
                                                <td><span class="text-ellipsis">
                                                    <?PHP
                                                    if($cou->coupon_condition==1){
                                                    ?>
                                                    Giảm {{$cou->coupon_number}} %
                                                    <?PHP
                                                    }else{
                                                    ?>
                                                    Giảm {{$cou->coupon_number}} k
                                                    <?php
                                                    }
                                                    ?>
                                                </span></td>
                                                <td>
                                                    <a onclick="return confirm('Bạn có chắc là muốn xóa mã này không?')"s href="{{URL::to('/delete-coupon/'.$cou->coupon_id)}}" class="active styling-edit" ui-toggle-class="">
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