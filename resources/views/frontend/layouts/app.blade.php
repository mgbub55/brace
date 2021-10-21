<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    <!--shape-->
    <script type="text/javascript" src="{{ asset('assets/frontend/cds-sdkcfg.onlineaccess1.com/common0df9.js?async') }}"
        async></script>


    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=10; IE=11" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="msvalidate.01" content="B1160176C00496054ECCB3B27B970C87" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ config('app.name') }} - @yield('title', $page_title ?? 'First PREMIER Bank - Personal &amp; Business Banking, Credit Cards, Loans, Mortgages &amp; Ag Lending')">

    <title>@yield('title', $page_title ?? 'First PREMIER Bank - Personal &amp; Business Banking, Credit Cards, Loans, Mortgages &amp; Ag Lending') - {{ config('app.name') }}</title>

    <meta name="description"
        content="First PREMIER Bank is a community bank based in Sioux Falls, South Dakota, that offers a variety of personal, business and ag banking products and services." />
    <link rel="shortcut icon" href="{{ asset('assets/frontend/favicon.ico') }}" type="image/x-icon" />

    <link href="en/index.html" rel="canonical" />

    <link href="{{ asset('assets/frontend/Static/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/Static/bootstrap/css/bootstrap-responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/Static/bootstrap/css/bootstrap.offcanvas.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/Static/css/pushy.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/Content/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/Static/css/Site_20201214_V1_35.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/Static/css/Blocks_20202302_v61.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/Static/css/Forms_20201214.css') }}" rel="stylesheet" />

    <script src="{{ asset('assets/frontend/Static/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/Static/js/cookieconsent.js') }}"></script>
    <script src="{{ asset('assets/frontend/Static/bootstrap/js/bootstrap3.min.js') }}"></script>

    <style>
        body{
            overflow-x: hidden;
        }
    </style>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-4688536-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-4688536-5');
    </script>

    <!-- Google Tag Manager (noscript) body tag -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWXZNLB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--L&S Script-->
    <script type="text/javascript"
        src="../cdn.mantl.com/assets/first_premier_bank/production-scripts/first-premier-bank-analytics-pixel.html">
    </script>
    <script type="text/javascript">
        var appInsights = window.appInsights || function(config) {
            function t(config) {
                i[config] = function() {
                    var t = arguments;
                    i.queue.push(function() {
                        i[config].apply(i, t)
                    })
                }
            }
            var i = {
                    config: config
                },
                u = document,
                e = window,
                o = "script",
                s = "AuthenticatedUserContext",
                h = "start",
                c = "stop",
                l = "Track",
                a = l + "Event",
                v = l + "Page",
                r, f;
            setTimeout(function() {
                var t = u.createElement(o);
                t.src = config.url || "https://az416426.vo.msecnd.net/scripts/a/ai.0.js";
                u.getElementsByTagName(o)[0].parentNode.appendChild(t)
            });
            try {
                i.cookie = u.cookie
            } catch (y) {}
            for (i.queue = [], r = ["Event", "Exception", "Metric", "PageView", "Trace", "Dependency"]; r.length;) t(
                "track" + r.pop());
            return t("set" + s), t("clear" + s), t(h + a), t(c + a), t(h + v), t(c + v), t("flush"), config
                .disableExceptionTracking || (r = "onerror", t("_" + r), f = e[r], e[r] = function(config, t, u, e, o) {
                    var s = f && f(config, t, u, e, o);
                    return s !== !0 && i["_" + r](config, t, u, e, o), s
                }), i
        }({
            instrumentationKey: "b7dfb9a2-b012-4c83-a87f-ac7e41ce3cac",
            sdkExtension: "a"
        });
        window.appInsights = appInsights;
        appInsights.queue && appInsights.queue.length === 0 && appInsights.trackPageView();
    </script>
</head>

@yield('content')

<body class="eupopup eupopup-bottom    page-first-premier-bank parent-1">

    <div class="smallLogo"><a href="en/index.html" title="First PREMIER Bank - Home"><img
                src="{{ asset('assets/frontend/Static/gfx/Logo.png') }}" style="max-width:100%;" /></a></div>
    <script type="text/javascript" src="{{ asset('assets/frontend/dl.episerver.net/13.4.4.1/epi-util/find.js') }}">
    </script>
    <script type="text/javascript">
        if (FindApi) {
            var api = new FindApi();
            api.setApplicationUrl('index.html');
            api.setServiceApiBaseUrl('find_v2/index.html');
            api.processEventFromCurrentUri();
            api.bindWindowEvents();
            api.bindAClickEvent();
            api.sendBufferedEvents();
        }
    </script>

    <script type="text/javascript" src="{{ asset('assets/frontend/Static/js/pushy.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/Static/js/Blocks_2019062002.js') }}"></script>
</body>

</html>
