<?php use App\Common\Constant; ?>

@extends('admin.layouts.master')

@section('head.title','Thông Tin Hệ Thống')

@section('body.content')
    <div class="container-fluid">
        <div id="ui-view">
            <div class="row">
                <div class="col-sm-12 col-xl-8">
                    <form action="{{route('admin.setting.app.update')}}" method="post"  enctype="multipart/form-data" id="form">
                        @csrf
                        <input type="hidden" value="{{$appInfo->id}}" name="app_id"/>
                        <div class="card list-image">
                            <div class="card-header">
                                <i class="fa fa-align-justify"></i>Thông Tin Hệ Thống
                            </div>
                            <div class="card-body">
                                <div class="carousel slide" data-ride="carousel">

                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="text-input">Tên App</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="app_name" type="text" name="app_name" placeholder="Tên app"
                                                value="{{$appInfo->app_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="text-input">Số Điện Thoại</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="app_phone" type="text" name="app_phone" placeholder="Số điện thoại"
                                                   value="{{$appInfo->app_phone}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="text-input">Số Fax</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="app_fax" type="text" name="app_fax" placeholder="Số fax"
                                                   value="{{$appInfo->app_fax}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="text-input">Email</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="app_email" type="email" name="app_email" placeholder="Địa chỉ email"
                                                   value="{{$appInfo->app_email}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="text-input">Facebook Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="app_facebook" type="text" name="app_facebook" placeholder="Tên Facebook"
                                                   value="{{$appInfo->app_facebook}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 col-form-label" for="text-input">Địa Chỉ</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="app_address" type="text" name="app_address" placeholder="Địa chỉ"
                                                   value="{{$appInfo->app_address}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm btn-primary pull-right" type="submit">
                                    <i class="fa fa-dot-circle-o"></i> Cập Nhật
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-sm-12 col-xl-4">
                    <div class="card list-image">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Icon Hệ Thống
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection