@extends('layouts.admin')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="card">

            <div class="card-header page-title-box d-flex align-items-center justify-content-between bg-soft-light">
                <h3 class="card-title mb-4"><strong class="text-danger">Danh sách loại sản phẩm</strong></h3>
                <div class="card-tools">
                    <a class="btn btn-sm btn-success" href="{{route('dashboard.getinsert')}}"><i class="fas fa-plus"></i> Thêm</a>
                    <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i> Thùng rác</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Tên loại sản phẩm</th>
                        <th scope="col">Cấp cha</th>
                        <th scope="col">Chức năng</th>
                        <th scope="col" style="width=20px" class="text-center">Id</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td class="text-center">@mdo</td>
                        </tr>
                      </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- container-fluid -->
</div>
@endsection
