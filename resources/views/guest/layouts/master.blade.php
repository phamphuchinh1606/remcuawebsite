<!doctype html>
<html lang="en">
<head>
    <head>
        <link rel="shortcut icon" href="{{asset($appInfo->app_src_icon)}}" type="image/png"/>
        <meta charset="utf-8"/>
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
        <![endif]-->
        <meta name="_token" content="{{ csrf_token() }}">
        <title>
            @yield('head.title','Phu Chinh')
        </title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport'/>
        <meta name="description" content="@yield('head.description',$appInfo->app_content)">
        <meta name="keywords" content="{{$appInfo->app_content}}">
        <link rel="canonical" href="{{URL::to('/')}}"/>
        <link rel="pingback" href="{{URL::to('/')}}">
        <meta property="og:locale" content="vi_VN">
        <meta property="og:type" content="website">
        <meta property="og:title" content="@yield('head.og.title',$appInfo->app_name)">
        <meta property="og:description" content="@yield('head.og.description',$appInfo->app_content)">
        <meta property="og:url" content="@yield('head.og.url',URL::to('/'))">
        <meta property="og:site_name" content="{{$appInfo->app_name}}">
        <meta property="article:publisher" content="{{$appInfo->app_link_facebook_fanpage}}">
        <meta property="og:image" content="@yield('head.og.image',asset('images/guest/icon_facebook.png'))">
        <meta property="og:image:width" content="403">
        <meta property="og:image:height" content="540">

        <script type='text/javascript'>
            //<![CDATA[
            if ((typeof Haravan) === 'undefined') {
                Haravan = {};
            }
            Haravan.culture = 'vi-VN';
            Haravan.shop = 'remmangcuaphuonganh.com';
            Haravan.theme = {"name": "Rem mang cua", "id": 1000313408, "role": "main"};
            Haravan.domain = 'remmangcuaphuonganh.com';
            //]]>
        </script>
        <script type='text/javascript'>
            window.HaravanAnalytics = window.HaravanAnalytics || {};
            window.HaravanAnalytics.meta = window.HaravanAnalytics.meta || {};
            window.HaravanAnalytics.meta.currency = 'VND';
            var meta = {"page": {"pageType": "home"}};
            for (var attr in meta) {
                window.HaravanAnalytics.meta[attr] = meta[attr];
            }
        </script>
        <script async src='{{ asset('/js/guest/plugins/haravan-analytics.min.js?v=3') }}' type='text/javascript'></script>

        <script src='{{ asset('/js/guest/plugins/jquery.min.js?v=1543') }}' type='text/javascript'></script>
        <!--------------CSS----------->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link href='{{ asset('/css/guest/plugins/plugins.css?v=1543') }}' rel='stylesheet' type='text/css' media='all'/>
        <link href='{{ asset('/css/guest/plugins/styles.css?v=1543') }}' rel='stylesheet' type='text/css' media='all'/>
        <link href='{{ asset('/css/guest/style.css?v=1543') }}' rel='stylesheet' type='text/css' media='all'/>
        <script src='{{ asset('/js/guest/plugins/countdown.js?v=1543') }}' type='text/javascript'></script>
        <link href='{{ asset('/css/guest/plugins/call.css') }}' rel='stylesheet' type='text/css' media='all'/>

        <script>
            <?php $amount = '100,000'; ?>
                $1 = "";
            window.shop = {
                template: "@yield('template','index')",
                moneyFormat: "{{$amount}}₫"
            }
        </script>
        @yield('head.init_js')
        <script src="{{ asset('/js/guest/plugins/platform.js')}}" async defer>
            {
                lang: 'vi'
            }
        </script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
        </script>

        {{--Css Customer--}}
        @yield('head.css')
        <style>
            body{
                /*background-color: #00aced;*/
                background-image: url('{{asset('images/guest/bg_2.png')}}');
                background-repeat-x: repeat-y;
                background-repeat-y: repeat-y;
            }
        </style>
    </head>
</head>
<body class="stTheme @yield('class_body')">
    <div class="page_layout">
        <section class="stBody">
            {{--Loadding Page--}}
            {{--<div id="insLoadpage" class="preloader">--}}
                {{--<div class="wrapLoading">--}}
                    {{--<div class="loader">Loading...</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            <header id="insHeaderPage" class="headerTemp">
                {{--Top Menu--}}
                @include('guest.layouts.partials.__top_menu')
                {{--Header Page--}}
                @include('guest.layouts.partials.__header_page')
                {{--Header Menu--}}
                @include('.guest.layouts.partials.__header_menu')
            </header>
            <div class="stMain">
                @yield('body.content')
            </div>
            {{--Footer--}}
            @include('guest.layouts.partials.__footer')
        </section>
    </div>

    {{--Model--}}
    @include('guest.layouts.partials.__modal_quick_view')

    {{--Script Javascript--}}
    <script src="{{ asset('/js/guest/plugins/plugins.js?v=1543') }}" type='text/javascript'></script>

    <script src="{{ asset('/js/guest/plugins/builder.js?v=1543') }}" type='text/javascript'></script>

    <script src="{{ asset('/js/guest/plugins/tmp_jsquoc.js?v=1543') }}" type='text/javascript'></script>

    <script src="{{ asset('/js/guest/plugins/snow.js?v=1543') }}" type='text/javascript'></script>



    @yield('body.js')

    @include('guest.layouts.partials.__call_phone_plugin');

</body>

@include('guest.layouts.partials.__chat_box_facebook_plugin')

</html>
