@extends('guest.layouts.master')

@section('head.title',"Giới thiệu")

@section('head.css')
    <link href='{{ asset('/css/guest/plugins/pages.css?v=1543') }}' rel='stylesheet' type='text/css'  media='all'  />
    <style>
        .container-about{
            margin-top: 10px;
        }
        .wrapperPage {
            padding: 10px;
            background: #fff;
            border-radius: 3px;
        }
        .headingPage {
            margin-bottom: 15px;
        }
        .headingPage .title {
            font-size: 22px;
            text-transform: uppercase;
        }
        .content-page * {
            line-height: 1.3;
        }
    </style>
@endsection

@section('body.content')
    <section id="insPages">
        {{--Breadcrumb--}}
        {{ Breadcrumbs::render('guest.about') }}

        <div class="container container-about">
            <div class="wrapperPage">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 information-entry">
                        <div class="information-blocks main_article bg_w">
                            <div class="headingPage">
                                <h1 class="title">Giới thiệu</h1>
                            </div>
                            <div class="content-page">
                                <p>Trang giới thiệu giúp khách hàng hiểu rõ hơn về cửa hàng của bạn. Hãy cung cấp thông tin cụ thể về việc kinh doanh, về cửa hàng, thông tin liên hệ. Điều này sẽ giúp khách hàng cảm thấy tin tưởng khi mua hàng trên website của bạn.</p><p>Một vài gợi ý cho nội dung trang Giới thiệu:</p><div><ul><li><span>Bạn là ai</span><br></li><li><span>Giá trị kinh doanh của bạn là gì</span><br></li><li><span>Địa chỉ cửa hàng</span><br></li><li><span>Bạn đã kinh doanh trong ngành hàng này bao lâu rồi</span><br></li><li><span>Bạn kinh doanh ngành hàng online được bao lâu</span><br></li><li><span>Đội ngũ của bạn gồm những ai</span><br></li><li><span>Thông tin liên hệ</span><br></li><li><span>Liên kết đến các trang mạng xã hội (Twitter, Facebook)</span><br></li></ul></div><p>Bạn có thể chỉnh sửa hoặc xoá bài viết này tại <a href="https://st-fashion.myharavan.com/admin/page#/detail/1000462824"><strong>đây</strong></a> hoặc thêm những bài viết mới trong phần quản lý <a href="https://st-fashion.myharavan.com/admin/page#/new"><strong>Trang nội dung</strong></a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
