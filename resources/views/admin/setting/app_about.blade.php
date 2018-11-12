<?php use App\Common\Constant; ?>

@extends('admin.layouts.master')

@section('head.title','Thông tin giới thiệu')

@section('head.css')
    <link href="{{asset('css/admin/plugins/quill.snow.css')}}" rel="stylesheet">
@endsection

@section('body.js')
    <script src="{{asset('js/admin/plugins/quill.min.js')}}"></script>
    <script src="{{asset('js/admin/plugins/text-editor.js')}}"></script>
@endsection

@section('body.content')
    <div class="container-fluid">
        <div id="ui-view">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('admin.setting.app_about')}}" method="post" enctype="multipart/form-data"
                          id="form">
                        @csrf
                        <input type="hidden" value="{{$appInfo->id}}" name="app_id"/>
                        <div class="card list-image">
                            <div class="card-header">
                                <i class="fa fa-align-justify"></i>Thông tin giới thiệu trang
                            </div>
                            <div class="card-body">
                                <input type="hidden" value="{{$appInfo->about_content}}" class="editor" name="about_content"/>
                                <div id="editor" class="ql-container ql-snow editor_quill product_content" style="min-height: 700px">
                                    {!! $appInfo->about_content !!}
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
            </div>

        </div>
    </div>

@endsection
