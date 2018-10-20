<?php use App\Common\AppCommon; ?>
@extends('admin.layouts.master')

@section('head.title','Danh sách đơn đặt hàng')

@section('head.css')
    <link href="{{asset('css/admin/plugins/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@section('body.js')
    <script type="text/javascript" src="{{asset('js/admin/plugins/jquery.dataTables.js')}}" class="view-script"></script>
    <script type="text/javascript" src="{{asset('js/admin/plugins/dataTables.bootstrap4.js')}}" class="view-script"></script>
@endsection

@section('body.content')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <a data-toggle="collapse" data-parent="#searchForm" href="#searchForm" aria-expanded="true" aria-controls="searchForm" class="collapsed">
                                <i class="fa fa-edit"></i> Danh sách đơn đặt hàng
                            </a>
                        </div>
                        <div class="card-body">
                            @if(\Session::has('message'))
                                <div class="alert alert-success"> {{ \Session::get('message') }}</div>
                            @endif
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="collapse col-md-12" id="searchForm" role="tabpanel" style="">
                                        <div class="card">
                                            <div class="card-header">
                                                <i class="fa fa-search"></i> Thông tin tìm kiếm đơn hàng
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label">Mã đơn hàng</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                        <i class="fa fa-asterisk"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input class="form-control" id="password2" type="password" name="password2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label">Tên khách hàng</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                    <i class="fa fa-male"></i>
                                                                    </span>
                                                                    </span>
                                                                    <input class="form-control" id="ssn" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label">Số điện thoại</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                    <i class="fa fa-phone"></i>
                                                                    </span>
                                                                    </span>
                                                                    <input class="form-control" id="phone" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-5">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label">Email</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                        <i class="fa fa-envelope-o"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input class="form-control" id="input2-group1" type="email" name="input2-group1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label">Ngày đặt hàng</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                    <i class="fa fa-calendar"></i>
                                                                    </span>
                                                                    </span>
                                                                    <input class="form-control" name="daterange" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label">Trạng thái</label>
                                                            <div class="col-md-9">
                                                                <select class="form-control" id="vendor">
                                                                    <option value="">Chọn trạng thái</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center">
                                                <button class="btn btn-sm btn-primary p-2">
                                                    <i class="fa fa-search"></i> Tìm kiếm
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-bordered datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                                            <thead>
                                            <tr role="row">
                                                <th>
                                                    STT
                                                </th>
                                                <th>
                                                    Họ và tên
                                                </th>
                                                <th>
                                                    Số điện thoại
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Ngày đặt hàng
                                                </th>
                                                <th>
                                                    Tổng tiền
                                                </th>
                                                <th>
                                                    Tình trạng
                                                </th>
                                                <th>
                                                    Actions
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $index => $order)
                                                <tr>
                                                    <td>
                                                        {{$index + 1}}
                                                    </td>
                                                    <td>
                                                        {{$order->full_name}}
                                                    </td>
                                                    <td>
                                                        {{$order->phone_number}}
                                                    </td>
                                                    <td>
                                                        {{$order->email}}
                                                    </td>
                                                    <td class="text-center">
                                                        {{AppCommon::dateFormat($order->order_date)}}
                                                    </td>
                                                    <td class="text-right">
                                                        {{AppCommon::formatMoney($order->total_amount)}}₫
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="badge {{$order->status_class}}">{{$order->status_name}}</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-success" href="{{route('admin.order.detail',['id' => $order->id])}}">
                                                            <i class="fa fa-search-plus"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="pull-right">
                                            {{ $orders->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
