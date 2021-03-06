@extends('guest.layouts.master')

@section('head.title')
    {{$appInfo->app_name}}
@endsection

@section('head.css')
    <link href='{{ asset('/css/guest/plugins/pages.css?v=1543') }}' rel='stylesheet' type='text/css'  media='all'  />
@endsection

@section('body.content')
    <section id="insContactPage">
        {{--Breadcrumb--}}
        {{--@include('guest.common.__breadcrumb_show',['contact' => 'contact'])--}}
        {{ Breadcrumbs::render('guest.contact') }}

        <div class="container">
            <div class="wrapperContactPage">
                <div class="headingPage">
                    <h1 class="title">Liên hệ</h1>
                </div>

                <div class="ggMap">
                    <iframe src="{{$appInfo->app_address_google_map}}" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="contactList">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12 pull-left infoForm">
                            <div class="wrapForm">
                                <h3 class="name-head">
                                    <span>Bạn cần hỗ trợ? Hãy gửi thông tin cho chúng tôi</span>
                                </h3>
                                @if(\Session::has('message'))
                                    <div class="alert alert-success"> {{ \Session::get('message') }}</div>
                                @endif
                                <form accept-charset="UTF-8" action="{{route('contact.send_contact')}}" class="contact-form" method="post">
                                    <input name="form_type" type="hidden" value="contact">
                                    <input name="utf8" type="hidden" value="✓">
                                    @csrf

                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <span class="ico"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                                                <input required="" type="text" id="contactFormName" class="form-control input-lg" name="guest_name" placeholder="Tên của bạn" autocapitalize="words" value="">
                                            </div>
                                            <div class="form-group">
                                                <span class="ico"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                <input required="" type="text" id="contactFormPhone" class="form-control input-lg" name="guest_phone" placeholder="Số điện thoại" autocapitalize="words" value="">
                                            </div>
                                            <div class="form-group">
                                                <span class="ico"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                <input required="" type="email" name="guest_email" placeholder="Email của bạn" id="contactFormEmail" class="form-control input-lg" autocorrect="off" autocapitalize="off" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="contactFormMessage" class="sr-only">Nội dung</label>
                                                <textarea required="" rows="7" name="guest_content" class="form-control" placeholder="Viết bình luận" id="contactFormMessage"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <button type="submit" class="btn btn-outline insButton">Gửi thông tin</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 pull-right infoText">
                            <div class="wrap">
                                <h3 class="name-head">	Chúng tôi ở đây</h3>
                                <p>{{$appInfo->app_name}}</p>
                                <ul class="info-address notStyle">
                                    <li>
                                        <i class="glyphicon glyphicon-map-marker"></i>
                                        <span>{{$appInfo->app_address}}</span>
                                    </li>
                                    <li>
                                        <i class="glyphicon glyphicon-envelope"></i>
                                        <span>{{$appInfo->app_email}}</span>
                                    </li>

                                    <li>
                                        <i class="glyphicon glyphicon-phone-alt"></i>
                                        <span>{{$appInfo->app_phone}}</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
