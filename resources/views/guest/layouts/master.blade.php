<!doctype html>
<html lang="en">
<head>
    <head>
        <link rel="shortcut icon" href="./css/favicon.png?v=1543" type="image/png"/>
        <meta charset="utf-8"/>
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
        <![endif]-->
        <meta name="_token" content="{{ csrf_token() }}">
        <title>
            @yield('head.title','Ví Da Khắc Tên')
        </title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport'/>
        <link rel="canonical" href="https://st-fashion.myharavan.com/"/>

        <script type='text/javascript'>
            //<![CDATA[
            if ((typeof Haravan) === 'undefined') {
                Haravan = {};
            }
            Haravan.culture = 'vi-VN';
            Haravan.shop = 'st-fashion.myharavan.com';
            Haravan.theme = {"name": "ST - Fashion", "id": 1000313408, "role": "main"};
            Haravan.domain = 'st-fashion.myharavan.com';
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

        <link rel="stylesheet" type="text/css" href="{{ asset('guest') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link href='{{ asset('/css/guest/plugins/plugins.css?v=1543') }}' rel='stylesheet' type='text/css' media='all'/>
        <link href='{{ asset('/css/guest/plugins/styles.css?v=1543') }}' rel='stylesheet' type='text/css' media='all'/>
        <link href='{{ asset('/css/guest/style.css?v=1543') }}' rel='stylesheet' type='text/css' media='all'/>
        <script src='{{ asset('/js/guest/plugins/countdown.js?v=1543') }}' type='text/javascript'></script>


        <meta property="og:type" content="website"/>
        <meta property="og:title" content="ST Fashion"/>
        <meta property="og:image"
              content="http:https://theme.hstatic.net/1000244873/1000313408/14/share_fb_home.png?v=1543"/>
        <meta property="og:image"
              content="https:https://theme.hstatic.net/1000244873/1000313408/14/share_fb_home.png?v=1543"/>


        <meta property="og:url" content="https://st-fashion.myharavan.com/"/>
        <meta property="og:site_name" content="ST Fashion"/>


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

    <div style="position:fixed;z-index:9999;bottom:0px;left:0;width:100%;height:42px;background:url('https://theme.hstatic.net/1000244873/1000313408/14/background-snow.png?v=1543') repeat-x bottom left;">

    </div>
    <canvas class="snow-canvas" speed="1" interaction="false" size="2" count="80" opacity="0.00001"
            start-color="rgba(253,252,251,1)" end-color="rgba(251,252,253,0.3)" wind-power="0" image="false" width="1366"
            height="667">

    </canvas>
    <canvas class="snow-canvas" speed="3" interaction="true" size="6" count="30" start-color="rgba(253,252,251,1)"
            end-color="rgba(251,252,253,0.3)" opacity="0.00001" wind-power="2" image="false" width="1366"
            height="667">

    </canvas>
    <canvas class="snow-canvas" speed="3" interaction="true" size="12" count="20" wind-power="-5"
            image="https://theme.hstatic.net/1000244873/1000313408/14/snow-style.png?v=1543" width="1366"
            height="667">

    </canvas>
    <script>
        $(".snow-canvas").snow();
    </script>

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    @yield('body.js')

    <script>
        window.fbAsyncInit = function(){
            FB.init({
                appId : '2127242367596594',
                autoLogAppEvents : true,
                xfbml : true,
                version : 'v2.11'
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/vi_VN/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="fb-customerchat" page_id="2170410936537565"></div>
</body>
<!-- Subiz -->
<script>
    (function(s, u, b, i, z){
        u[i]=u[i]||function(){
            u[i].t=+new Date();
            (u[i].q=u[i].q||[]).push(arguments);
        };
        z=s.createElement('script');
        var zz=s.getElementsByTagName('script')[0];
        z.async=1; z.src=b; z.id='subiz-script';
        zz.parentNode.insertBefore(z,zz);
    })(document, window, 'https://widgetv4.subiz.com/static/js/app.js', 'subiz');
    subiz('setAccount', 'acqcuzewcfzahisbagsh');
</script>
<!-- End Subiz -->
</html>
