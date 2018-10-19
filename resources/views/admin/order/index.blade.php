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
                            <i class="fa fa-edit"></i> Danh sách đơn đặt hàng
                        </div>
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
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
                                                        <a class="btn btn-success" href="{{route('admin.contact.show',['id' => $order->id])}}">
                                                            <i class="fa fa-search-plus"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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
