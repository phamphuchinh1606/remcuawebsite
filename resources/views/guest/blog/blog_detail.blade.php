@extends('guest.layouts.master')

@section('head.title',$blog->blog_title)

@section('head.css')
    <link href='{{ asset('/css/guest/plugins/pages.css?v=1543') }}' rel='stylesheet' type='text/css'  media='all'  />
@endsection

@section('body.content')
    <section id="insBlogPage">
        {{--Breadcrumb--}}
        {{--@include('guest.common.__breadcrumb_show',['blogDetail' => 'blogDetail'])--}}
        {{ Breadcrumbs::render('guest.blog_detail',$blog) }}

        <div class="container">
            <div class="wrapperArticlePage">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="insCtMain">
                            <div class="main_article bg_w">
                                <div class="head">
                                    <h1>
                                        {{$blog->blog_title}}
                                    </h1>
                                    <div class="info_edu">
                                        <ul>
                                            <li><i class="fa fa-book" aria-hidden="true"></i> Rèm cửa</li>
                                            <li><i class="fa fa-tags" aria-hidden="true"></i> <a href="Tin tức">Tin tức</a></li>
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$blog->str_post_date}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="body-content">
                                    {!! $blog->blog_content !!}
                                </div>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 hidden-xs ba_sidebar">
                        <aside id="insBlogSidebar">
                            <div class="right_sidebar">
                                <div class="all_right_widgets">
                                    <div class="sing_right_widget">
                                        <h2>Bài viết mới nhất</h2>
                                        @include('guest.blog.__blog_new')
                                    </div>


                                    <div class="sing_right_widget">
                                        <h2>Tags</h2>
                                        <div class="sing_right_widg_content">
                                            <ul class="category_right blogTags">




                                                <li>
                                                    <a href="https://st-fashion.myharavan.com/blogs/news/tagged/thoi-trang">Thời trang</a>
                                                </li>





                                                <li>
                                                    <a href="https://st-fashion.myharavan.com/blogs/news/tagged/tin-hot">Tin hot</a>
                                                </li>





                                                <li>
                                                    <a href="https://st-fashion.myharavan.com/blogs/news/tagged/xem-nhieu">Xem nhiều</a>
                                                </li>





                                                <li>
                                                    <a href="https://st-fashion.myharavan.com/blogs/news/tagged/moi">Mới</a>
                                                </li>



                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </aside>
                        <style>
                            #insBlogSidebar .all_right_widgets {
                                margin-top: 30px;
                            }
                            #insBlogSidebar .all_right_widgets .sing_right_widget {
                                background: #fff;
                                padding: 0px 10px;
                            }
                            .sing_right_widget ul {
                                margin: 0;
                                padding: 0;
                                list-style: none;
                            }
                            #insBlogSidebar .sing_right_widget > h2 {
                                padding: 10px 5px;
                                border-bottom: 1px solid transparent;
                                border-top-left-radius: 3px;
                                border-top-right-radius: 3px;
                                font-size: 15px;
                                text-transform: uppercase;
                            }
                            .lat_news_right .newItem {
                                margin-bottom: 15px;
                                border-bottom: 1px dashed #eaeaea;
                            }
                            .lat_news_right .newItem:last-child {
                                margin-bottom: 15px;
                                border-bottom: 0;
                            }
                            .lat_news_right .newItem .lat_news_right_con {
                                padding: 10px 0;
                            }
                            .lat_news_right .newItem h3 {
                                font-size: 15px;
                                display: block;
                                margin: 0;
                                line-height: 1.3;
                                margin-bottom: 5px;
                            }
                            .lat_news_right .newItem time {
                                font-size: 13px;
                                font-style: italic;
                                color: #999;
                            }
                            ul.category_right.blogTags li {
                                display: inline-block;
                                margin: 0px 5px 10px 0px;
                            }
                            ul.category_right.blogTags li a {
                                display: inline-block;
                                background: #e2e2e2;
                                color: #333;
                                padding: 4px 9px;
                                position: relative;
                                margin: 5px;
                                font-size: 12px;
                                border-left: 3px solid #eb0088;
                            }
                            ul.category_right.blogTags li a:before {
                                left: 0;
                                top: 8px;
                                border: solid transparent;
                                content: " ";
                                height: 0;
                                width: 0;
                                position: absolute;
                                pointer-events: none;
                                border-color: rgba(136, 183, 213, 0);
                                border-left-color: #eb0088;
                                border-width: 4px;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
