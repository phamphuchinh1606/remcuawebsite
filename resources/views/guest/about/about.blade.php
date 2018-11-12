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
                                {!! $appInfo->about_content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
