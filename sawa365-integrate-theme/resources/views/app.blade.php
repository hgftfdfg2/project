<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link rel="stylesheet" href="{{ asset('theme/assets/css/main.css') }}"> --}}


    <!-- Scripts -->
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/vueperslides"></script>
    <link href="https://unpkg.com/vueperslides/dist/vueperslides.css" rel="stylesheet">

    {{-- <script src="{{ asset('theme/assets/js/main.js') }}"></script> --}}

    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead

    {{-- ================================================================================================================= --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <!-- <title>Landing – WanderAway</title> -->
    <meta name="robots" content="max-image-preview:large">
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-0BQFC8K4Y0&amp;cx=c&amp;_slc=1"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-JGWMZE62NQ&amp;cx=c&amp;_slc=1"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script src="https://connect.facebook.net/signals/config/1821624764800433?v=2.9.158&amp;r=stable&amp;domain=wanderaway.qodeinteractive.com&amp;hme=446fb981c8c3baeb03730fe3cbd404f7f15f64c693f24c7fe75da498bc2c95d8&amp;ex_m=67%2C113%2C100%2C104%2C58%2C3%2C93%2C66%2C15%2C91%2C84%2C49%2C51%2C160%2C163%2C174%2C170%2C171%2C173%2C28%2C94%2C50%2C73%2C172%2C155%2C158%2C167%2C168%2C175%2C122%2C14%2C48%2C180%2C179%2C124%2C17%2C33%2C38%2C1%2C41%2C62%2C63%2C64%2C68%2C88%2C16%2C13%2C90%2C87%2C86%2C101%2C103%2C37%2C102%2C29%2C25%2C156%2C159%2C131%2C27%2C10%2C11%2C12%2C5%2C6%2C24%2C21%2C22%2C54%2C59%2C61%2C71%2C95%2C26%2C72%2C8%2C7%2C76%2C46%2C20%2C97%2C96%2C98%2C9%2C19%2C18%2C81%2C53%2C79%2C32%2C70%2C0%2C89%2C31%2C78%2C83%2C45%2C44%2C82%2C36%2C4%2C85%2C77%2C42%2C39%2C34%2C80%2C2%2C35%2C60%2C40%2C99%2C43%2C75%2C65%2C105%2C57%2C56%2C30%2C92%2C55%2C52%2C47%2C74%2C69%2C23%2C106" async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-M4XZBMN"></script>
    <script data-cfasync="false" data-pagespeed-no-defer="">
        var gtm4wp_datalayer_name = "dataLayer";
        var dataLayer = dataLayer || [];
    </script>
    <link rel="dns-prefetch" href="//stats.wp.com">
    <link rel="dns-prefetch" href="//export.qodethemes.com">
    <link rel="dns-prefetch" href="//static.zdassets.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="alternate" type="application/rss+xml" title="WanderAway » Feed" href="https://wanderaway.qodeinteractive.com/feed/">
    <link rel="alternate" type="application/rss+xml" title="WanderAway » Comments Feed" href="https://wanderaway.qodeinteractive.com/comments/feed/">
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/wanderaway.qodeinteractive.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.4"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <link rel="stylesheet" id="animate-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/css/plugins/animate/animate.min.css?ver=6.5.4" type="text/css" media="all">
    <link rel="stylesheet" id="sbi_styles-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=6.2.7" type="text/css" media="all">
    <link rel="stylesheet" id="elegant-icons-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/inc/icons/elegant-icons/assets/css/elegant-icons.min.css?ver=6.5.4" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/inc/icons/font-awesome/assets/css/all.min.css?ver=6.5.4" type="text/css" media="all">
    <!-- <style id="wp-emoji-styles-inline-css" type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style> -->
    <!-- <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style> -->
    <link rel="stylesheet" id="titan-adminbar-styles-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/anti-spam/assets/css/admin-bar.css?ver=7.3.5" type="text/css" media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8.6" type="text/css" media="all">
    <link rel="stylesheet" id="qi-blocks-grid-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/dist/grid.css?ver=6.5.4" type="text/css" media="all">
    <link rel="stylesheet" id="qi-blocks-main-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/dist/main.css?ver=6.5.4" type="text/css" media="all">
    <!-- <style id="qi-blocks-main-inline-css" type="text/css">
        body .qodef-widget-block-45fbf6b4 .qi-block-single-image {
            text-align: center;
        }

        body .qodef-template-block-0531ecbe .qi-block-section-title {
            text-align: center;
        }

        body .qodef-template-block-0531ecbe .qi-block-section-title .qodef-m-title {
            color: rgba(178, 178, 178, 1);
        }

        body .qodef-template-block-6053320d .qi-block-icon-with-text .qi-block-divider:not(.qodef-separator--border-image) .qodef-m-line {
            border-style: solid;
        }

        body .qodef-template-block-6053320d .qi-block-icon-with-text .qodef-separator--border-image .qodef-m-line {
            background-size: auto;
            background-position: left;
            background-repeat: round;
        }

        body .qodef-template-block-a41ea50b .qi-block-icon-with-text .qodef-m-icon-wrapper {
            margin-right: 20px;
        }

        body .qodef-template-block-a41ea50b .qi-block-icon-with-text .qi-block-divider:not(.qodef-separator--border-image) .qodef-m-line {
            border-style: solid;
        }

        body .qodef-template-block-a41ea50b .qi-block-icon-with-text .qodef-separator--border-image .qodef-m-line {
            background-size: auto;
            background-position: left;
            background-repeat: round;
        }
    </style> -->
    <link rel="stylesheet" id="rabbit_css-css" href="https://export.qodethemes.com/_toolbar/assets/css/rbt-modules.css?ver=6.5.4" type="text/css" media="all">
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" id="qi-addons-for-elementor-grid-style-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css?ver=6.5.4" type="text/css" media="all">
    <link rel="stylesheet" id="qi-addons-for-elementor-helper-parts-style-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css?ver=6.5.4" type="text/css" media="all">
    <link rel="stylesheet" id="qi-addons-for-elementor-style-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css?ver=6.5.4" type="text/css" media="all">
    <link rel="stylesheet" id="perfect-scrollbar-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/assets/plugins/perfect-scrollbar/perfect-scrollbar.css?ver=6.5.4" type="text/css" media="all">
    <link rel="stylesheet" id="swiper-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-blocks/inc/slider/assets/plugins/5.4.5/swiper.min.css?ver=6.5.4" type="text/css" media="all">
    <link rel="stylesheet" id="wanderaway-main-css" href="https://wanderaway.qodeinteractive.com/wp-content/themes/wanderaway/assets/css/main.min.css?ver=6.5.4" type="text/css" media="all">
    <link rel="stylesheet" id="wanderaway-core-style-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/assets/css/wanderaway-core.min.css?ver=6.5.4" type="text/css" media="all">
    <link rel="stylesheet" id="wanderaway-google-fonts-css" href="https://fonts.googleapis.com/css?family=Jost%3A300%2C400%2C500%2C600%2C700%7CItaliana%3A300%2C400%2C500%2C600%2C700&amp;subset=latin-ext&amp;display=swap&amp;ver=1.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="wanderaway-style-css" href="https://wanderaway.qodeinteractive.com/wp-content/themes/wanderaway/style.css?ver=6.5.4" type="text/css" media="all">
    <!-- <style id="wanderaway-style-inline-css" type="text/css">
        .error404 #qodef-page-inner #qodef-page-content {
            height: calc(100vh - 128px);
        }

        @media only screen and (max-width: 1024px) {
            .error404 #qodef-page-inner #qodef-page-content {
                height: calc(100vh - 70px);
            }
        }

        #qodef-page-outer {
            margin-top: -128px;
        }

        @media only screen and (max-width: 1024px) {
            #qodef-page-outer {
                margin-top: -70px;
            }
        }

        @font-face {
            font-family: Tesla;
            src: url(https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/08/TESLA.otf) format("truetype");
        }

        #qodef-page-footer-top-area {
            background-color: rgb(252, 239, 223);
        }

        #qodef-page-footer-bottom-area {
            background-color: rgb(252, 239, 223);
        }

        #qodef-page-inner {
            padding: 0 0;
        }

        @media only screen and (max-width: 1024px) {
            #qodef-page-inner {
                padding: 0 0;
            }
        }

        #qodef-top-area {
            background-color: rgb(254, 244, 228);
        }

        #qodef-top-area-inner {
            height: 45px;
        }

        #qodef-page-header .qodef-header-logo-link {
            height: 76px;
        }

        #qodef-page-mobile-header .qodef-mobile-header-logo-link {
            height: 32px;
        }

        #qodef-page-spinner .qodef-m-inner {
            color: rgb(255, 255, 255);
        }

        .qodef-page-title {
            height: 120px;
            background-color: rgb(255, 255, 255);
        }

        .qodef-page-title .qodef-m-content {
            padding-top: 128px;
        }

        @media only screen and (max-width: 1024px) {
            .qodef-page-title {
                height: 80px;
            }
        }

        @media only screen and (max-width: 1024px) {
            .qodef-page-title .qodef-m-content {
                padding-top: 70px;
            }
        }

        .qodef-header--standard #qodef-page-header {
            height: 128px;
            background-color: rgba(255, 255, 255, 0);
        }

        .qodef-header--standard #qodef-page-header {
            padding-left: 30px;
            padding-right: 30px;
            border-bottom-color: rgba(255, 255, 255, 0);
            border-bottom-width: 1px;
        }

        .qodef-mobile-header--side-area #qodef-mobile-header-navigation .qodef-m-inner {
            background-color: rgba(255, 255, 255, 0);
        }

        .qodef-mobile-header--side-area #qodef-page-mobile-header {
            background-color: rgba(255, 255, 255, 0);
        }

        @media only screen and (max-width: 1024px) {

            h4,
            .qodef-h4,
            h4.elementor-heading-title {
                font-size: 20px;
            }
        }

        @media only screen and (max-width: 768px) {

            h3,
            .qodef-h3,
            h3.elementor-heading-title {
                font-size: 30px;
            }
        }
    </style> -->
    <link rel="stylesheet" id="wanderaway-core-elementor-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/inc/plugins/elementor/assets/css/elementor.min.css?ver=6.5.4" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.25.0" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-frontend-css" href="https://wanderaway.qodeinteractive.com/wp-content/uploads/elementor/css/custom-frontend-lite.min.css?ver=1704889220" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-4-css" href="https://wanderaway.qodeinteractive.com/wp-content/uploads/elementor/css/post-4.css?ver=1704889220" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-3060-css" href="https://wanderaway.qodeinteractive.com/wp-content/uploads/elementor/css/post-3060.css?ver=1705588805" type="text/css" media="all">
    <link rel="stylesheet" id="qode-zendesk-chat-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/qode-zendesk-chat//assets/main.css?ver=6.5.4" type="text/css" media="all">
    <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.5.4" type="text/css" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0" id="regenerator-runtime-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
    <script type="text/javascript" src="https://stats.wp.com/w.js?ver=202426" id="woo-tracks-js"></script>
    <!-- <style>
        @font-face {
            font-family: 'monica-ext-font_YIBBBFG';
            src: url('chrome-extension://ofpnmcalabcbjgholdjcjblkibolbppb/static/fonts/Hind-Light.otf');
            font-weight: 300;
            font-display: swap;
        }

        @font-face {
            font-family: 'monica-ext-font_YIBBBFG';
            src: url('chrome-extension://ofpnmcalabcbjgholdjcjblkibolbppb/static/fonts/Hind-Regular.otf');
            font-weight: 400;
            font-display: swap;
        }

        @font-face {
            font-family: 'monica-ext-font_YIBBBFG';
            src: url('chrome-extension://ofpnmcalabcbjgholdjcjblkibolbppb/static/fonts/Hind-Medium.otf');
            font-weight: 500;
            font-display: swap;
        }

        @font-face {
            font-family: 'monica-ext-font_YIBBBFG';
            src: url('chrome-extension://ofpnmcalabcbjgholdjcjblkibolbppb/static/fonts/Hind-SemiBold.otf');
            font-weight: 600;
            font-display: swap;
        }
    </style> -->
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js">
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.5.1" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/wanderaway.qodeinteractive.com\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.5.1" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.5.1" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.5.1" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <meta property="og:image" content="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/open-graph.jpg">
    <meta property="og:image:secure_url" content="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/open-graph.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="s">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:description" content="Where All the Stories From Your Travels Find Their Home. Welcome to WanderAway, a theme specifically made for sharing all your travel adventures with your reading audience! PURCHASE Travel Blog Websites You get six readymade, flexible travel blog site examples view view view view Main home view view view view Essaouira view view view view...">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="WanderAway">
    <meta property="og:title" content="Landing">
    <meta property="og:url" content="https://wanderaway.qodeinteractive.com/landing/">
    <meta property="og:updated_time" content="2024-01-18T14:39:49+00:00">
    <meta property="article:published_time" content="2023-09-01T10:34:02+00:00">
    <meta property="article:modified_time" content="2024-01-18T14:39:49+00:00">
    <meta property="article:author:first_name" content="James">
    <meta property="article:author:last_name" content="Smith">
    <meta property="article:author:username" content="admin">
    <meta property="twitter:partner" content="ogwp">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:image" content="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/open-graph.jpg">
    <meta property="twitter:image:alt" content="s">
    <meta property="twitter:title" content="Landing">
    <meta property="twitter:description" content="Where All the Stories From Your Travels Find Their Home. Welcome to WanderAway, a theme specifically made for sharing all your travel adventures with your reading audience! PURCHASE Travel Blog...">
    <meta property="twitter:url" content="https://wanderaway.qodeinteractive.com/landing/">
    <meta itemprop="image" content="https://wanderaway.qodeinteractive.com/wp-content/uploads/2024/01/open-graph.jpg">
    <meta itemprop="name" content="Landing">
    <meta itemprop="description" content="Where All the Stories From Your Travels Find Their Home. Welcome to WanderAway, a theme specifically made for sharing all your travel adventures with your reading audience! PURCHASE Travel Blog Websites You get six readymade, flexible travel blog site examples view view view view Main home view view view view Essaouira view view view view...">
    <meta itemprop="datePublished" content="2023-09-01">
    <meta itemprop="dateModified" content="2024-01-18T14:39:49+00:00">
    <meta itemprop="author" content="admin">
    <meta property="profile:first_name" content="James">
    <meta property="profile:last_name" content="Smith">
    <meta property="profile:username" content="admin">
    <link rel="https://api.w.org/" href="https://wanderaway.qodeinteractive.com/wp-json/">
    <link rel="alternate" type="application/json" href="https://wanderaway.qodeinteractive.com/wp-json/wp/v2/pages/3060">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wanderaway.qodeinteractive.com/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.5.4">
    <meta name="generator" content="WooCommerce 8.5.1">
    <link rel="canonical" href="https://wanderaway.qodeinteractive.com/landing/">
    <link rel="shortlink" href="https://wanderaway.qodeinteractive.com/?p=3060">
    <link rel="alternate" type="application/json+oembed" href="https://wanderaway.qodeinteractive.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwanderaway.qodeinteractive.com%2Flanding%2F">
    <link rel="alternate" type="text/xml+oembed" href="https://wanderaway.qodeinteractive.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwanderaway.qodeinteractive.com%2Flanding%2F&amp;format=xml">
    <script data-cfasync="false" data-pagespeed-no-defer="">
        var dataLayer_content = {
            "pagePostType": "page",
            "pagePostType2": "single-page",
            "pagePostAuthor": "admin"
        };
        dataLayer.push(dataLayer_content);
    </script>
    <script data-cfasync="false">
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M4XZBMN');
    </script>
    <meta name="generator" content="Elementor 3.18.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints, block_editor_assets_optimize; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <meta name="generator" content="Powered by Slider Revolution 6.6.20 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
    <link rel="icon" href="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/10/cropped-favicon-32x32.png" sizes="32x32">
    <link rel="icon" href="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/10/cropped-favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/10/cropped-favicon-180x180.png">
    <meta name="msapplication-TileImage" content="https://wanderaway.qodeinteractive.com/wp-content/uploads/2023/10/cropped-favicon-270x270.png">
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <!-- <style class="fslightbox-styles">
        .fslightbox-absoluted {
            position: absolute;
            top: 0;
            left: 0
        }

        .fslightbox-fade-in {
            animation: fslightbox-fade-in .3s cubic-bezier(0, 0, .7, 1)
        }

        .fslightbox-fade-out {
            animation: fslightbox-fade-out .3s ease
        }

        .fslightbox-fade-in-strong {
            animation: fslightbox-fade-in-strong .3s cubic-bezier(0, 0, .7, 1)
        }

        .fslightbox-fade-out-strong {
            animation: fslightbox-fade-out-strong .3s ease
        }

        @keyframes fslightbox-fade-in {
            from {
                opacity: .65
            }

            to {
                opacity: 1
            }
        }

        @keyframes fslightbox-fade-out {
            from {
                opacity: .35
            }

            to {
                opacity: 0
            }
        }

        @keyframes fslightbox-fade-in-strong {
            from {
                opacity: .3
            }

            to {
                opacity: 1
            }
        }

        @keyframes fslightbox-fade-out-strong {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        .fslightbox-cursor-grabbing {
            cursor: grabbing
        }

        .fslightbox-full-dimension {
            width: 100%;
            height: 100%
        }

        .fslightbox-open {
            overflow: hidden;
            height: 100%
        }

        .fslightbox-flex-centered {
            display: flex;
            justify-content: center;
            align-items: center
        }

        .fslightbox-opacity-0 {
            opacity: 0 !important
        }

        .fslightbox-opacity-1 {
            opacity: 1 !important
        }

        .fslightbox-scrollbarfix {
            padding-right: 17px
        }

        .fslightbox-transform-transition {
            transition: transform .3s
        }

        .fslightbox-container {
            font-family: Arial, sans-serif;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(rgba(30, 30, 30, .9), #000 1810%);
            touch-action: pinch-zoom;
            z-index: 1000000000;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent
        }

        .fslightbox-container * {
            box-sizing: border-box
        }

        .fslightbox-svg-path {
            transition: fill .15s ease;
            fill: #ddd
        }

        .fslightbox-nav {
            height: 45px;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0
        }

        .fslightbox-slide-number-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            height: 100%;
            font-size: 15px;
            color: #d7d7d7;
            z-index: 0;
            max-width: 55px;
            text-align: left
        }

        .fslightbox-slide-number-container .fslightbox-flex-centered {
            height: 100%
        }

        .fslightbox-slash {
            display: block;
            margin: 0 5px;
            width: 1px;
            height: 12px;
            transform: rotate(15deg);
            background: #fff
        }

        .fslightbox-toolbar {
            position: absolute;
            z-index: 3;
            right: 0;
            top: 0;
            height: 100%;
            display: flex;
            background: rgba(35, 35, 35, .65)
        }

        .fslightbox-toolbar-button {
            height: 100%;
            width: 45px;
            cursor: pointer
        }

        .fslightbox-toolbar-button:hover .fslightbox-svg-path {
            fill: #fff
        }

        .fslightbox-slide-btn-container {
            display: flex;
            align-items: center;
            padding: 12px 12px 12px 6px;
            position: absolute;
            top: 50%;
            cursor: pointer;
            z-index: 3;
            transform: translateY(-50%)
        }

        @media (min-width:476px) {
            .fslightbox-slide-btn-container {
                padding: 22px 22px 22px 6px
            }
        }

        @media (min-width:768px) {
            .fslightbox-slide-btn-container {
                padding: 30px 30px 30px 6px
            }
        }

        .fslightbox-slide-btn-container:hover .fslightbox-svg-path {
            fill: #f1f1f1
        }

        .fslightbox-slide-btn {
            padding: 9px;
            font-size: 26px;
            background: rgba(35, 35, 35, .65)
        }

        @media (min-width:768px) {
            .fslightbox-slide-btn {
                padding: 10px
            }
        }

        @media (min-width:1600px) {
            .fslightbox-slide-btn {
                padding: 11px
            }
        }

        .fslightbox-slide-btn-container-previous {
            left: 0
        }

        @media (max-width:475.99px) {
            .fslightbox-slide-btn-container-previous {
                padding-left: 3px
            }
        }

        .fslightbox-slide-btn-container-next {
            right: 0;
            padding-left: 12px;
            padding-right: 3px
        }

        @media (min-width:476px) {
            .fslightbox-slide-btn-container-next {
                padding-left: 22px
            }
        }

        @media (min-width:768px) {
            .fslightbox-slide-btn-container-next {
                padding-left: 30px
            }
        }

        @media (min-width:476px) {
            .fslightbox-slide-btn-container-next {
                padding-right: 6px
            }
        }

        .fslightbox-down-event-detector {
            position: absolute;
            z-index: 1
        }

        .fslightbox-slide-swiping-hoverer {
            z-index: 4
        }

        .fslightbox-invalid-file-wrapper {
            font-size: 22px;
            color: #eaebeb;
            margin: auto
        }

        .fslightbox-video {
            object-fit: cover
        }

        .fslightbox-youtube-iframe {
            border: 0
        }

        .fslightboxl {
            display: block;
            margin: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 67px;
            height: 67px
        }

        .fslightboxl div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 54px;
            height: 54px;
            margin: 6px;
            border: 5px solid;
            border-color: #999 transparent transparent transparent;
            border-radius: 50%;
            animation: fslightboxl 1.2s cubic-bezier(.5, 0, .5, 1) infinite
        }

        .fslightboxl div:nth-child(1) {
            animation-delay: -.45s
        }

        .fslightboxl div:nth-child(2) {
            animation-delay: -.3s
        }

        .fslightboxl div:nth-child(3) {
            animation-delay: -.15s
        }

        @keyframes fslightboxl {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .fslightbox-source {
            position: relative;
            z-index: 2;
            opacity: 0
        }
    </style> -->
    <script src="https://wanderaway.qodeinteractive.com/wp-includes/js/wp-emoji-release.min.js?ver=6.5.4" defer=""></script>
    <style type="text/css">
        /* @media only screen and (max-width: 680px) {
            .qodef-image-with-text-108 .qodef-m-title {
                margin-top: 12px !important;
            }

            .qodef-image-with-text-441 .qodef-m-title {
                margin-top: 12px !important;
            }

            .qodef-image-with-text-628 .qodef-m-title {
                margin-top: 12px !important;
            }

            .qodef-image-with-text-913 .qodef-m-title {
                margin-top: 12px !important;
            }

            .qodef-image-with-text-306 .qodef-m-title {
                margin-top: 12px !important;
            }

            .qodef-image-with-text-306 .qodef-m-title {
                margin-top: 12px !important;
            }
        } */
    </style>
    <script src="chrome-extension://hmdmhilocobgohohpdpolmibjklfgkbi/pageScript.js"></script>
    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
    <style id="monica-reading-highlight-style">
        /* .monica-reading-highlight {
            animation: fadeInOut 1.5s ease-in-out;
        }

        @keyframes fadeInOut {

            0%,
            100% {
                background-color: transparent;
            }

            30%,
            70% {
                background-color: rgba(2, 118, 255, 0.20);
            }
        } */
    </style>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/57/5/intl/en_gb/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/57/5/intl/en_gb/util.js"></script>
    {{-- ================================================================================================================= --}}


</head>

<body class="font-sans antialiased">
    @inertia

    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <div class="rbt-toolbar" data-theme="WanderAway" data-featured data-button-position="30%" data-button-horizontal="right" data-button-alt="no"></div>
    <script type="text/javascript">
        var sbiajaxurl = "https://wanderaway.qodeinteractive.com/wp-admin/admin-ajax.php";
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400%7CJost:400&display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css">
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <script>
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
                console.log("To fix this, you can:");
                console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
                console.log("2. Find the double jQuery.js inclusion and remove it");
                return "Double Included jQuery Library";
            }
        }
    </script>
    <link rel="stylesheet" id="wc-blocks-style-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=11.8.0-dev" type="text/css" media="all" />
    <link rel="stylesheet" id="magnific-popup-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/assets/plugins/magnific-popup/magnific-popup.css?ver=6.5.5" type="text/css" media="all" />
    <style id="wp-block-columns-inline-css" type="text/css">
        /* .wp-block-columns {
            align-items: normal !important;
            box-sizing: border-box;
            display: flex;
            flex-wrap: wrap !important
        }

        @media (min-width:782px) {
            .wp-block-columns {
                flex-wrap: nowrap !important
            }
        }

        .wp-block-columns.are-vertically-aligned-top {
            align-items: flex-start
        }

        .wp-block-columns.are-vertically-aligned-center {
            align-items: center
        }

        .wp-block-columns.are-vertically-aligned-bottom {
            align-items: flex-end
        }

        @media (max-width:781px) {
            .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 100% !important
            }
        }

        @media (min-width:782px) {
            .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 0;
                flex-grow: 1
            }

            .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column[style*=flex-basis] {
                flex-grow: 0
            }
        }

        .wp-block-columns.is-not-stacked-on-mobile {
            flex-wrap: nowrap !important
        }

        .wp-block-columns.is-not-stacked-on-mobile>.wp-block-column {
            flex-basis: 0;
            flex-grow: 1
        }

        .wp-block-columns.is-not-stacked-on-mobile>.wp-block-column[style*=flex-basis] {
            flex-grow: 0
        }

        :where(.wp-block-columns) {
            margin-bottom: 1.75em
        }

        :where(.wp-block-columns.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-column {
            flex-grow: 1;
            min-width: 0;
            overflow-wrap: break-word;
            word-break: break-word
        }

        .wp-block-column.is-vertically-aligned-top {
            align-self: flex-start
        }

        .wp-block-column.is-vertically-aligned-center {
            align-self: center
        }

        .wp-block-column.is-vertically-aligned-bottom {
            align-self: flex-end
        }

        .wp-block-column.is-vertically-aligned-stretch {
            align-self: stretch
        }

        .wp-block-column.is-vertically-aligned-bottom,
        .wp-block-column.is-vertically-aligned-center,
        .wp-block-column.is-vertically-aligned-top {
            width: 100%
        } */
    </style>
    <style id="global-styles-inline-css" type="text/css">
        /* body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        } */
    </style>
    <style id="core-block-supports-inline-css" type="text/css">
        /* .wp-container-core-columns-is-layout-1.wp-container-core-columns-is-layout-1 {
            flex-wrap: nowrap;
        } */
    </style>
    <link rel="stylesheet" id="rs-plugin-settings-css" href="https://wanderaway.qodeinteractive.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.6.20" type="text/css" media="all" />
    <style id="rs-plugin-settings-inline-css" type="text/css">
        #rs-demo-id {}
    </style>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.8.6" id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/wanderaway.qodeinteractive.com\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.8.6" id="contact-form-7-js"></script>
    <script type="text/javascript" id="qi-blocks-main-js-extra">
        /* <![CDATA[ */
        var qiBlocks = {
            "vars": {
                "arrowLeftIcon": "<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>",
                "arrowRightIcon": "<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>",
                "closeIcon": "<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/dist/main.js?ver=6.5.5" id="qi-blocks-main-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/js/plugins/fslightbox/fslightbox.min.js?ver=6.5.5" id="fslightbox-js"></script>
    <script type="text/javascript" src="https://export.qodethemes.com/_toolbar/assets/js/rbt-modules.js?ver=6.5.5" id="rabbit_js-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.6.20" defer async id="tp-tools-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.6.20" defer async id="revmin-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=8.5.1" id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0000000000000000818030539140313095458623138256371021270751953125e-5,
                "session": 30,
                "ajaxurl": "https:\/\/wanderaway.qodeinteractive.com\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": "yes"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=8.5.1" id="wc-order-attribution-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/vendor/react.min.js?ver=18.2.0" id="react-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/deprecated.min.js?ver=e1f84915c5e8ae38964c" id="wp-deprecated-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/dom.min.js?ver=4ecffbffba91b10c5c7a" id="wp-dom-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/vendor/react-dom.min.js?ver=18.2.0" id="react-dom-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/escape-html.min.js?ver=6561a406d2d232a6fbd2" id="wp-escape-html-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/element.min.js?ver=cb762d190aebbec25b27" id="wp-element-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/is-shallow-equal.min.js?ver=e0f9f1d78d83f5196979" id="wp-is-shallow-equal-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/keycodes.min.js?ver=034ff647a54b018581d3" id="wp-keycodes-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/priority-queue.min.js?ver=9c21c957c7e50ffdbf48" id="wp-priority-queue-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/compose.min.js?ver=1339d3318cd44440dccb" id="wp-compose-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/private-apis.min.js?ver=5e7fdf55d04b8c2aadef" id="wp-private-apis-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/redux-routine.min.js?ver=b14553dce2bee5c0f064" id="wp-redux-routine-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/data.min.js?ver=e6595ba1a7cd34429f66" id="wp-data-js"></script>
    <script type="text/javascript" id="wp-data-js-after">
        /* <![CDATA[ */
        (function() {
            var userId = 0;
            var storageKey = "WP_DATA_USER_" + userId;
            wp.data
                .use(wp.data.plugins.persistence, {
                    storageKey: storageKey
                });
        })();
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/vendor/lodash.min.js?ver=4.17.21" id="lodash-js"></script>
    <script type="text/javascript" id="lodash-js-after">
        /* <![CDATA[ */
        window.lodash = _.noConflict();
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-registry.js?ver=1c879273bd5c193cad0a" id="wc-blocks-registry-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/url.min.js?ver=421139b01f33e5b327d8" id="wp-url-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/api-fetch.min.js?ver=4c185334c5ec26e149cc" id="wp-api-fetch-js"></script>
    <script type="text/javascript" id="wp-api-fetch-js-after">
        /* <![CDATA[ */
        wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("https://wanderaway.qodeinteractive.com/wp-json/"));
        wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("8833f1e155");
        wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
        wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
        wp.apiFetch.nonceEndpoint = "https://wanderaway.qodeinteractive.com/wp-admin/admin-ajax.php?action=rest-nonce";
        /* ]]> */
    </script>
    <script type="text/javascript" id="wc-settings-js-before">
        /* <![CDATA[ */
        var wcSettings = wcSettings || JSON.parse(decodeURIComponent('%7B%22shippingCostRequiresAddress%22%3Afalse%2C%22adminUrl%22%3A%22https%3A%5C%2F%5C%2Fwanderaway.qodeinteractive.com%5C%2Fwp-admin%5C%2F%22%2C%22countries%22%3A%7B%22AF%22%3A%22Afghanistan%22%2C%22AX%22%3A%22%5Cu00c5land%20Islands%22%2C%22AL%22%3A%22Albania%22%2C%22DZ%22%3A%22Algeria%22%2C%22AS%22%3A%22American%20Samoa%22%2C%22AD%22%3A%22Andorra%22%2C%22AO%22%3A%22Angola%22%2C%22AI%22%3A%22Anguilla%22%2C%22AQ%22%3A%22Antarctica%22%2C%22AG%22%3A%22Antigua%20and%20Barbuda%22%2C%22AR%22%3A%22Argentina%22%2C%22AM%22%3A%22Armenia%22%2C%22AW%22%3A%22Aruba%22%2C%22AU%22%3A%22Australia%22%2C%22AT%22%3A%22Austria%22%2C%22AZ%22%3A%22Azerbaijan%22%2C%22BS%22%3A%22Bahamas%22%2C%22BH%22%3A%22Bahrain%22%2C%22BD%22%3A%22Bangladesh%22%2C%22BB%22%3A%22Barbados%22%2C%22BY%22%3A%22Belarus%22%2C%22PW%22%3A%22Belau%22%2C%22BE%22%3A%22Belgium%22%2C%22BZ%22%3A%22Belize%22%2C%22BJ%22%3A%22Benin%22%2C%22BM%22%3A%22Bermuda%22%2C%22BT%22%3A%22Bhutan%22%2C%22BO%22%3A%22Bolivia%22%2C%22BQ%22%3A%22Bonaire%2C%20Saint%20Eustatius%20and%20Saba%22%2C%22BA%22%3A%22Bosnia%20and%20Herzegovina%22%2C%22BW%22%3A%22Botswana%22%2C%22BV%22%3A%22Bouvet%20Island%22%2C%22BR%22%3A%22Brazil%22%2C%22IO%22%3A%22British%20Indian%20Ocean%20Territory%22%2C%22BN%22%3A%22Brunei%22%2C%22BG%22%3A%22Bulgaria%22%2C%22BF%22%3A%22Burkina%20Faso%22%2C%22BI%22%3A%22Burundi%22%2C%22KH%22%3A%22Cambodia%22%2C%22CM%22%3A%22Cameroon%22%2C%22CA%22%3A%22Canada%22%2C%22CV%22%3A%22Cape%20Verde%22%2C%22KY%22%3A%22Cayman%20Islands%22%2C%22CF%22%3A%22Central%20African%20Republic%22%2C%22TD%22%3A%22Chad%22%2C%22CL%22%3A%22Chile%22%2C%22CN%22%3A%22China%22%2C%22CX%22%3A%22Christmas%20Island%22%2C%22CC%22%3A%22Cocos%20%28Keeling%29%20Islands%22%2C%22CO%22%3A%22Colombia%22%2C%22KM%22%3A%22Comoros%22%2C%22CG%22%3A%22Congo%20%28Brazzaville%29%22%2C%22CD%22%3A%22Congo%20%28Kinshasa%29%22%2C%22CK%22%3A%22Cook%20Islands%22%2C%22CR%22%3A%22Costa%20Rica%22%2C%22HR%22%3A%22Croatia%22%2C%22CU%22%3A%22Cuba%22%2C%22CW%22%3A%22Cura%26ccedil%3Bao%22%2C%22CY%22%3A%22Cyprus%22%2C%22CZ%22%3A%22Czech%20Republic%22%2C%22DK%22%3A%22Denmark%22%2C%22DJ%22%3A%22Djibouti%22%2C%22DM%22%3A%22Dominica%22%2C%22DO%22%3A%22Dominican%20Republic%22%2C%22EC%22%3A%22Ecuador%22%2C%22EG%22%3A%22Egypt%22%2C%22SV%22%3A%22El%20Salvador%22%2C%22GQ%22%3A%22Equatorial%20Guinea%22%2C%22ER%22%3A%22Eritrea%22%2C%22EE%22%3A%22Estonia%22%2C%22SZ%22%3A%22Eswatini%22%2C%22ET%22%3A%22Ethiopia%22%2C%22FK%22%3A%22Falkland%20Islands%22%2C%22FO%22%3A%22Faroe%20Islands%22%2C%22FJ%22%3A%22Fiji%22%2C%22FI%22%3A%22Finland%22%2C%22FR%22%3A%22France%22%2C%22GF%22%3A%22French%20Guiana%22%2C%22PF%22%3A%22French%20Polynesia%22%2C%22TF%22%3A%22French%20Southern%20Territories%22%2C%22GA%22%3A%22Gabon%22%2C%22GM%22%3A%22Gambia%22%2C%22GE%22%3A%22Georgia%22%2C%22DE%22%3A%22Germany%22%2C%22GH%22%3A%22Ghana%22%2C%22GI%22%3A%22Gibraltar%22%2C%22GR%22%3A%22Greece%22%2C%22GL%22%3A%22Greenland%22%2C%22GD%22%3A%22Grenada%22%2C%22GP%22%3A%22Guadeloupe%22%2C%22GU%22%3A%22Guam%22%2C%22GT%22%3A%22Guatemala%22%2C%22GG%22%3A%22Guernsey%22%2C%22GN%22%3A%22Guinea%22%2C%22GW%22%3A%22Guinea-Bissau%22%2C%22GY%22%3A%22Guyana%22%2C%22HT%22%3A%22Haiti%22%2C%22HM%22%3A%22Heard%20Island%20and%20McDonald%20Islands%22%2C%22HN%22%3A%22Honduras%22%2C%22HK%22%3A%22Hong%20Kong%22%2C%22HU%22%3A%22Hungary%22%2C%22IS%22%3A%22Iceland%22%2C%22IN%22%3A%22India%22%2C%22ID%22%3A%22Indonesia%22%2C%22IR%22%3A%22Iran%22%2C%22IQ%22%3A%22Iraq%22%2C%22IE%22%3A%22Ireland%22%2C%22IM%22%3A%22Isle%20of%20Man%22%2C%22IL%22%3A%22Israel%22%2C%22IT%22%3A%22Italy%22%2C%22CI%22%3A%22Ivory%20Coast%22%2C%22JM%22%3A%22Jamaica%22%2C%22JP%22%3A%22Japan%22%2C%22JE%22%3A%22Jersey%22%2C%22JO%22%3A%22Jordan%22%2C%22KZ%22%3A%22Kazakhstan%22%2C%22KE%22%3A%22Kenya%22%2C%22KI%22%3A%22Kiribati%22%2C%22KW%22%3A%22Kuwait%22%2C%22KG%22%3A%22Kyrgyzstan%22%2C%22LA%22%3A%22Laos%22%2C%22LV%22%3A%22Latvia%22%2C%22LB%22%3A%22Lebanon%22%2C%22LS%22%3A%22Lesotho%22%2C%22LR%22%3A%22Liberia%22%2C%22LY%22%3A%22Libya%22%2C%22LI%22%3A%22Liechtenstein%22%2C%22LT%22%3A%22Lithuania%22%2C%22LU%22%3A%22Luxembourg%22%2C%22MO%22%3A%22Macao%22%2C%22MG%22%3A%22Madagascar%22%2C%22MW%22%3A%22Malawi%22%2C%22MY%22%3A%22Malaysia%22%2C%22MV%22%3A%22Maldives%22%2C%22ML%22%3A%22Mali%22%2C%22MT%22%3A%22Malta%22%2C%22MH%22%3A%22Marshall%20Islands%22%2C%22MQ%22%3A%22Martinique%22%2C%22MR%22%3A%22Mauritania%22%2C%22MU%22%3A%22Mauritius%22%2C%22YT%22%3A%22Mayotte%22%2C%22MX%22%3A%22Mexico%22%2C%22FM%22%3A%22Micronesia%22%2C%22MD%22%3A%22Moldova%22%2C%22MC%22%3A%22Monaco%22%2C%22MN%22%3A%22Mongolia%22%2C%22ME%22%3A%22Montenegro%22%2C%22MS%22%3A%22Montserrat%22%2C%22MA%22%3A%22Morocco%22%2C%22MZ%22%3A%22Mozambique%22%2C%22MM%22%3A%22Myanmar%22%2C%22NA%22%3A%22Namibia%22%2C%22NR%22%3A%22Nauru%22%2C%22NP%22%3A%22Nepal%22%2C%22NL%22%3A%22Netherlands%22%2C%22NC%22%3A%22New%20Caledonia%22%2C%22NZ%22%3A%22New%20Zealand%22%2C%22NI%22%3A%22Nicaragua%22%2C%22NE%22%3A%22Niger%22%2C%22NG%22%3A%22Nigeria%22%2C%22NU%22%3A%22Niue%22%2C%22NF%22%3A%22Norfolk%20Island%22%2C%22KP%22%3A%22North%20Korea%22%2C%22MK%22%3A%22North%20Macedonia%22%2C%22MP%22%3A%22Northern%20Mariana%20Islands%22%2C%22NO%22%3A%22Norway%22%2C%22OM%22%3A%22Oman%22%2C%22PK%22%3A%22Pakistan%22%2C%22PS%22%3A%22Palestinian%20Territory%22%2C%22PA%22%3A%22Panama%22%2C%22PG%22%3A%22Papua%20New%20Guinea%22%2C%22PY%22%3A%22Paraguay%22%2C%22PE%22%3A%22Peru%22%2C%22PH%22%3A%22Philippines%22%2C%22PN%22%3A%22Pitcairn%22%2C%22PL%22%3A%22Poland%22%2C%22PT%22%3A%22Portugal%22%2C%22PR%22%3A%22Puerto%20Rico%22%2C%22QA%22%3A%22Qatar%22%2C%22RE%22%3A%22Reunion%22%2C%22RO%22%3A%22Romania%22%2C%22RU%22%3A%22Russia%22%2C%22RW%22%3A%22Rwanda%22%2C%22ST%22%3A%22S%26atilde%3Bo%20Tom%26eacute%3B%20and%20Pr%26iacute%3Bncipe%22%2C%22BL%22%3A%22Saint%20Barth%26eacute%3Blemy%22%2C%22SH%22%3A%22Saint%20Helena%22%2C%22KN%22%3A%22Saint%20Kitts%20and%20Nevis%22%2C%22LC%22%3A%22Saint%20Lucia%22%2C%22SX%22%3A%22Saint%20Martin%20%28Dutch%20part%29%22%2C%22MF%22%3A%22Saint%20Martin%20%28French%20part%29%22%2C%22PM%22%3A%22Saint%20Pierre%20and%20Miquelon%22%2C%22VC%22%3A%22Saint%20Vincent%20and%20the%20Grenadines%22%2C%22WS%22%3A%22Samoa%22%2C%22SM%22%3A%22San%20Marino%22%2C%22SA%22%3A%22Saudi%20Arabia%22%2C%22SN%22%3A%22Senegal%22%2C%22RS%22%3A%22Serbia%22%2C%22SC%22%3A%22Seychelles%22%2C%22SL%22%3A%22Sierra%20Leone%22%2C%22SG%22%3A%22Singapore%22%2C%22SK%22%3A%22Slovakia%22%2C%22SI%22%3A%22Slovenia%22%2C%22SB%22%3A%22Solomon%20Islands%22%2C%22SO%22%3A%22Somalia%22%2C%22ZA%22%3A%22South%20Africa%22%2C%22GS%22%3A%22South%20Georgia%5C%2FSandwich%20Islands%22%2C%22KR%22%3A%22South%20Korea%22%2C%22SS%22%3A%22South%20Sudan%22%2C%22ES%22%3A%22Spain%22%2C%22LK%22%3A%22Sri%20Lanka%22%2C%22SD%22%3A%22Sudan%22%2C%22SR%22%3A%22Suriname%22%2C%22SJ%22%3A%22Svalbard%20and%20Jan%20Mayen%22%2C%22SE%22%3A%22Sweden%22%2C%22CH%22%3A%22Switzerland%22%2C%22SY%22%3A%22Syria%22%2C%22TW%22%3A%22Taiwan%22%2C%22TJ%22%3A%22Tajikistan%22%2C%22TZ%22%3A%22Tanzania%22%2C%22TH%22%3A%22Thailand%22%2C%22TL%22%3A%22Timor-Leste%22%2C%22TG%22%3A%22Togo%22%2C%22TK%22%3A%22Tokelau%22%2C%22TO%22%3A%22Tonga%22%2C%22TT%22%3A%22Trinidad%20and%20Tobago%22%2C%22TN%22%3A%22Tunisia%22%2C%22TR%22%3A%22Turkey%22%2C%22TM%22%3A%22Turkmenistan%22%2C%22TC%22%3A%22Turks%20and%20Caicos%20Islands%22%2C%22TV%22%3A%22Tuvalu%22%2C%22UG%22%3A%22Uganda%22%2C%22UA%22%3A%22Ukraine%22%2C%22AE%22%3A%22United%20Arab%20Emirates%22%2C%22GB%22%3A%22United%20Kingdom%20%28UK%29%22%2C%22US%22%3A%22United%20States%20%28US%29%22%2C%22UM%22%3A%22United%20States%20%28US%29%20Minor%20Outlying%20Islands%22%2C%22UY%22%3A%22Uruguay%22%2C%22UZ%22%3A%22Uzbekistan%22%2C%22VU%22%3A%22Vanuatu%22%2C%22VA%22%3A%22Vatican%22%2C%22VE%22%3A%22Venezuela%22%2C%22VN%22%3A%22Vietnam%22%2C%22VG%22%3A%22Virgin%20Islands%20%28British%29%22%2C%22VI%22%3A%22Virgin%20Islands%20%28US%29%22%2C%22WF%22%3A%22Wallis%20and%20Futuna%22%2C%22EH%22%3A%22Western%20Sahara%22%2C%22YE%22%3A%22Yemen%22%2C%22ZM%22%3A%22Zambia%22%2C%22ZW%22%3A%22Zimbabwe%22%7D%2C%22currency%22%3A%7B%22code%22%3A%22USD%22%2C%22precision%22%3A0%2C%22symbol%22%3A%22%24%22%2C%22symbolPosition%22%3A%22left%22%2C%22decimalSeparator%22%3A%22.%22%2C%22thousandSeparator%22%3A%22%2C%22%2C%22priceFormat%22%3A%22%251%24s%252%24s%22%7D%2C%22currentUserId%22%3A0%2C%22currentUserIsAdmin%22%3Afalse%2C%22dateFormat%22%3A%22d.m.Y%22%2C%22homeUrl%22%3A%22https%3A%5C%2F%5C%2Fwanderaway.qodeinteractive.com%5C%2F%22%2C%22locale%22%3A%7B%22siteLocale%22%3A%22en_US%22%2C%22userLocale%22%3A%22en_US%22%2C%22weekdaysShort%22%3A%5B%22Sun%22%2C%22Mon%22%2C%22Tue%22%2C%22Wed%22%2C%22Thu%22%2C%22Fri%22%2C%22Sat%22%5D%7D%2C%22dashboardUrl%22%3A%22https%3A%5C%2F%5C%2Fwanderaway.qodeinteractive.com%5C%2Fmy-account%5C%2F%22%2C%22orderStatuses%22%3A%7B%22pending%22%3A%22Pending%20payment%22%2C%22processing%22%3A%22Processing%22%2C%22on-hold%22%3A%22On%20hold%22%2C%22completed%22%3A%22Completed%22%2C%22cancelled%22%3A%22Cancelled%22%2C%22refunded%22%3A%22Refunded%22%2C%22failed%22%3A%22Failed%22%2C%22checkout-draft%22%3A%22Draft%22%7D%2C%22placeholderImgSrc%22%3A%22https%3A%5C%2F%5C%2Fwanderaway.qodeinteractive.com%5C%2Fwp-content%5C%2Fuploads%5C%2Fwoocommerce-placeholder-300x300.png%22%2C%22productsSettings%22%3A%7B%22cartRedirectAfterAdd%22%3Afalse%7D%2C%22siteTitle%22%3A%22WanderAway%22%2C%22storePages%22%3A%7B%22myaccount%22%3A%7B%22id%22%3A11%2C%22title%22%3A%22My%20Account%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fwanderaway.qodeinteractive.com%5C%2Fmy-account%5C%2F%22%7D%2C%22shop%22%3A%7B%22id%22%3A8%2C%22title%22%3A%22Shop%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fwanderaway.qodeinteractive.com%5C%2Fshop%5C%2F%22%7D%2C%22cart%22%3A%7B%22id%22%3A9%2C%22title%22%3A%22Cart%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fwanderaway.qodeinteractive.com%5C%2Fcart%5C%2F%22%7D%2C%22checkout%22%3A%7B%22id%22%3A10%2C%22title%22%3A%22Checkout%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fwanderaway.qodeinteractive.com%5C%2Fcheckout%5C%2F%22%7D%2C%22privacy%22%3A%7B%22id%22%3A3%2C%22title%22%3A%22Privacy%20Policy%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fwanderaway.qodeinteractive.com%5C%2Fprivacy-policy%5C%2F%22%7D%2C%22terms%22%3A%7B%22id%22%3A0%2C%22title%22%3A%22%22%2C%22permalink%22%3Afalse%7D%7D%2C%22wcAssetUrl%22%3A%22https%3A%5C%2F%5C%2Fwanderaway.qodeinteractive.com%5C%2Fwp-content%5C%2Fplugins%5C%2Fwoocommerce%5C%2Fassets%5C%2F%22%2C%22wcVersion%22%3A%228.5.1%22%2C%22wpLoginUrl%22%3A%22https%3A%5C%2F%5C%2Fwanderaway.qodeinteractive.com%5C%2Fwp-login.php%22%2C%22wpVersion%22%3A%226.5.5%22%2C%22collectableMethodIds%22%3A%5B%5D%2C%22admin%22%3A%7B%22wccomHelper%22%3A%7B%22isConnected%22%3Afalse%2C%22connectURL%22%3A%22https%3A%5C%2F%5C%2Fwanderaway.qodeinteractive.com%5C%2Fwp-admin%5C%2Fadmin.php%3Fpage%3Dwc-addons%26section%3Dhelper%26wc-helper-connect%3D1%26wc-helper-nonce%3Ddec2167dc3%22%2C%22userEmail%22%3A%22%22%2C%22userAvatar%22%3A%22https%3A%5C%2F%5C%2Fsecure.gravatar.com%5C%2Favatar%5C%2F%3Fs%3D48%26d%3Dmm%26r%3Dg%22%2C%22storeCountry%22%3A%22GB%22%2C%22inAppPurchaseURLParams%22%3A%7B%22wccom-site%22%3A%22https%3A%5C%2F%5C%2Fwanderaway.qodeinteractive.com%22%2C%22wccom-back%22%3A%22%252Flanding%252F%22%2C%22wccom-woo-version%22%3A%228.5.1%22%2C%22wccom-connect-nonce%22%3A%22dec2167dc3%22%7D%7D%2C%22_feature_nonce%22%3A%22763f2243f1%22%2C%22alertCount%22%3A%221%22%2C%22visibleTaskListIds%22%3A%5B%22setup%22%2C%22extended%22%5D%7D%7D'));
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-settings.js?ver=07c2f0675ddd247d2325" id="wc-settings-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/data-controls.min.js?ver=49f5587e8b90f9e7cc7e" id="wp-data-controls-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/html-entities.min.js?ver=2cd3358363e0675638fb" id="wp-html-entities-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/notices.min.js?ver=673a68a7ac2f556ed50b" id="wp-notices-js"></script>
    <script type="text/javascript" id="wc-blocks-middleware-js-before">
        /* <![CDATA[ */
        var wcBlocksMiddlewareConfig = {
            storeApiNonce: '516dcf7853',
            wcStoreApiNonceTimestamp: '1719667187'
        };

        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-middleware.js?ver=ca04183222edaf8a26be" id="wc-blocks-middleware-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-data.js?ver=c96aba0171b12e03b8a6" id="wc-blocks-data-store-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/dom-ready.min.js?ver=f77871ff7694fffea381" id="wp-dom-ready-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/a11y.min.js?ver=d90eebea464f6c09bfd5" id="wp-a11y-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/primitives.min.js?ver=a41bfd5835f583ae838a" id="wp-primitives-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/dist/warning.min.js?ver=ed7c8b0940914f4fe44b" id="wp-warning-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/client/blocks/blocks-components.js?ver=b165bb2bd213326d7f31" id="wc-blocks-components-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/client/blocks/blocks-checkout.js?ver=9f469ef17beaf7c51576" id="wc-blocks-checkout-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution-blocks.min.js?ver=8.5.1" id="wc-order-attribution-blocks-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
    <script type="text/javascript" id="qi-addons-for-elementor-script-js-extra">
        /* <![CDATA[ */
        var qodefQiAddonsGlobal = {
            "vars": {
                "adminBarHeight": 0,
                "iconArrowLeft": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>",
                "iconArrowRight": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>",
                "iconClose": "<svg  xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js?ver=6.5.5" id="qi-addons-for-elementor-script-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/assets/plugins/perfect-scrollbar/perfect-scrollbar.jquery.min.js?ver=6.5.5" id="perfect-scrollbar-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/hoverIntent.min.js?ver=1.10.2" id="hoverIntent-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/assets/plugins/modernizr/modernizr.js?ver=6.5.5" id="modernizr-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/assets/plugins/gsap/gsap.min.js?ver=6.5.5" id="gsap-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/assets/plugins/gsap/ScrollTrigger.min.js?ver=6.5.5" id="scrollTrigger-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/inc/shortcodes/parallax-images/assets/js/plugins/jquery.parallax-scroll.js?ver=1" id="parallax-scroll-js"></script>
    <script type="text/javascript" id="wanderaway-main-js-js-extra">
        /* <![CDATA[ */
        var qodefGlobal = {
            "vars": {
                "adminBarHeight": 0,
                "iconArrowLeft": "<svg class=\"qodef-svg--lightbox-arrow-left\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"14.398\" height=\"27.02\"><path fill=\"currentColor\" stroke=\"currentColor\" d=\"m.707 13.507.181-.181L13.507.707l.181.181L1.069 13.507l12.622 12.625-.181.181L.888 13.691l-.181-.184Z\"\/><\/svg>",
                "iconArrowRight": "<svg class=\"qodef-svg--lightbox-arrow-right\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"14.398\" height=\"27.02\"><path fill=\"currentColor\" stroke=\"currentColor\" d=\"m13.691 13.507-.181-.181L.888.707.707.888l12.622 12.619L.707 26.132l.181.181 12.619-12.622.181-.181Z\"\/><\/svg>",
                "iconClose": "<svg class=\"qodef-svg--lightbox-close\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"39.362\" height=\"41\"><path d=\"M39.073 27.14c-.667 1.946-4.105 2.4-5.277 3.959-1.214 1.618-.708 5.035-2.329 6.173-1.638 1.149-4.687-.493-6.6.1-1.893.584-3.487 3.664-5.51 3.632-1.952-.031-3.447-3.139-5.394-3.805s-5.033.872-6.594-.3c-1.618-1.214-.99-4.625-2.128-6.247C4.092 29.014.676 28.443.086 26.531c-.584-1.893 1.911-4.282 1.943-6.305C2.06 18.274-.38 15.81.286 13.864s4.105-2.4 5.277-3.959c1.214-1.618.708-5.035 2.329-6.173 1.638-1.149 4.687.493 6.6-.1 1.893-.584 3.487-3.664 5.51-3.632 1.952.031 3.447 3.139 5.393 3.805s5.033-.872 6.594.3c1.618 1.214.99 4.625 2.128 6.247 1.149 1.638 4.565 2.209 5.155 4.121.584 1.893-1.911 4.282-1.943 6.305-.03 1.951 2.41 4.415 1.744 6.362Z\"\/><path d=\"M25.033 24.335a.87.87 0 0 1 0 1.367.933.933 0 0 1-.664.313.971.971 0 0 1-.7-.312l-3.988-3.946-3.984 3.945a.971.971 0 0 1-.7.313.933.933 0 0 1-.664-.312.87.87 0 0 1 0-1.367l3.942-3.985-3.946-3.984a.87.87 0 0 1 0-1.367.87.87 0 0 1 1.367 0l3.985 3.945L23.665 15a.87.87 0 0 1 1.367 0 .87.87 0 0 1 0 1.367l-3.945 3.984Z\"\/><\/svg>",
                "dragCursor": "<svg class=\"qodef-svg--drag-cursor\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"126\" height=\"126\" viewBox=\"0 0 126 126\"><circle cx=\"63\" cy=\"63\" r=\"63\" \/><text text-anchor=\"middle\" dominant-baseline=\"central\" x=\"50%\" y=\"50%\">Drag<\/text><\/svg>",
                "topAreaSecondaryHeight": 0,
                "topAreaHeight": 0,
                "restUrl": "https:\/\/wanderaway.qodeinteractive.com\/wp-json\/",
                "restNonce": "8833f1e155",
                "paginationRestRoute": "wanderaway\/v1\/get-posts",
                "iconSearch": "<svg class=\"qodef-svg--search\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"14.811\" height=\"14.811\" viewBox=\"0 0 14.811 14.811\"><g fill=\"none\" stroke=\"#000\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" transform=\"translate(-2.25 -2.25)\"><circle cx=\"5.5\" cy=\"5.5\" r=\"5.5\" data-name=\"Ellipse 7\" transform=\"translate(3 3)\"\/><path d=\"m16 16-3.142-3.142\"\/><\/g><\/svg>",
                "headerHeight": 128,
                "mobileHeaderHeight": 70
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/themes/wanderaway/assets/js/main.min.js?ver=6.5.5" id="wanderaway-main-js-js"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyA-dpTR3DCjNNHyBjgOnJ6gNrTmiGRUq5o&amp;callback=qodefEmptyCallback&amp;ver=6.5.5" id="google-map-api-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/inc/maps/assets/js/custom-marker.js?ver=6.5.5" id="wanderaway-core-map-custom-marker-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/inc/maps/assets/js/markerclusterer.js?ver=6.5.5" id="markerclusterer-js"></script>
    <script type="text/javascript" id="wanderaway-core-google-map-js-extra">
        /* <![CDATA[ */
        var qodefMapsVariables = {
            "global": {
                "mapStyle": [{
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#6195a0"
                    }]
                }, {
                    "featureType": "administrative.province",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                        "lightness": "0"
                    }, {
                        "saturation": "0"
                    }, {
                        "color": "#f5f5f2"
                    }, {
                        "gamma": "1"
                    }]
                }, {
                    "featureType": "landscape.man_made",
                    "elementType": "all",
                    "stylers": [{
                        "lightness": "-3"
                    }, {
                        "gamma": "1.00"
                    }]
                }, {
                    "featureType": "landscape.natural.terrain",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "poi.park",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#bae5ce"
                    }, {
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "lightness": 45
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#fac9a9"
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "labels.text",
                    "stylers": [{
                        "color": "#4e4e4e"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#787878"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "transit.station.airport",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "hue": "#0a00ff"
                    }, {
                        "saturation": "-77"
                    }, {
                        "gamma": "0.57"
                    }, {
                        "lightness": "0"
                    }]
                }, {
                    "featureType": "transit.station.rail",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#43321e"
                    }]
                }, {
                    "featureType": "transit.station.rail",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "hue": "#ff6c00"
                    }, {
                        "lightness": "4"
                    }, {
                        "gamma": "0.75"
                    }, {
                        "saturation": "-68"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#eaf6f8"
                    }, {
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#c7eced"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "lightness": "-49"
                    }, {
                        "saturation": "-53"
                    }, {
                        "gamma": "0.79"
                    }]
                }],
                "mapZoom": 12,
                "mapScrollable": false,
                "mapDraggable": true,
                "streetViewControl": true,
                "zoomControl": true,
                "mapTypeControl": true,
                "fullscreenControl": true,
                "geolocationTitle": "Your location is here"
            },
            "multiple": []
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/inc/maps/assets/js/google-map.js?ver=6.5.5" id="wanderaway-core-google-map-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/assets/js/wanderaway-core.min.js?ver=6.5.5" id="wanderaway-core-script-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-blocks/inc/slider/assets/plugins/5.4.5/swiper.min.js?ver=6.5.5" id="swiper-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/qode-framework/inc/common/assets/plugins/select2/select2.full.min.js?ver=1" id="select2-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="https://static.zdassets.com/ekr/snippet.js?key=af3078fd-a5ae-40da-bee0-e589b98c8603&ver=6.5.5" id="ze-snippet"></script>
    <script type="text/javascript">
        zE(function() {
            $zopim(function() {
                var isChatEnabled = sessionStorage.getItem("qodeChatEnabled"),
                    appearingTime = 15000;

                if (isChatEnabled !== "no" && window.innerWidth > 1024) {
                    setTimeout(function() {
                        $zopim.livechat.window.show();

                        $zopim.livechat.window.onHide(function() {
                            sessionStorage.setItem("qodeChatEnabled", "no");
                        });
                    }, appearingTime);
                }
            });
        });
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/assets/plugins/magnific-popup/jquery.magnific-popup.min.js?ver=6.5.5" id="jquery-magnific-popup-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/themes/wanderaway/inc/justified-gallery/assets/js/plugins/jquery.justifiedGallery.min.js?ver=1" id="jquery-justified-gallery-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-blocks/inc/masonry/assets/plugins/isotope.pkgd.min.js?ver=6.5.5" id="isotope-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-blocks/inc/masonry/assets/plugins/packery-mode.pkgd.min.js?ver=6.5.5" id="packery-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.18.3" id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.18.3" id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1440,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 1921,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": true
                    }
                }
            },
            "version": "3.18.3",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "e_swiper_latest": true,
                "block_editor_assets_optimize": true,
                "landing-pages": true,
                "e_global_styleguide": true
            },
            "urls": {
                "assets": "https:\/\/wanderaway.qodeinteractive.com\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_mobile_extra", "viewport_tablet", "viewport_laptop", "viewport_widescreen"],
                "viewport_laptop": 1440,
                "viewport_widescreen": 1921,
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 3060,
                "title": "Landing%20%E2%80%93%20WanderAway",
                "excerpt": "",
                "featuredImage": "https:\/\/wanderaway.qodeinteractive.com\/wp-content\/uploads\/2024\/01\/open-graph-1024x538.jpg"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.18.3" id="elementor-frontend-js"></script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js?ver=6.5.5" id="qi-addons-for-elementor-elementor-js"></script>
    <script type="text/javascript" id="wanderaway-core-elementor-js-extra">
        /* <![CDATA[ */
        var qodefElementorGlobal = {
            "vars": {
                "elementorSectionHandler": [],
                "elementorColumnHandler": []
            }
        };
        var qodefElementorContainerGlobal = {
            "vars": {
                "elementorContainerHandler": {
                    "b249df6": [{
                        "parallax_type": "parallax",
                        "parallax_image": {
                            "url": "https:\/\/wanderaway.qodeinteractive.com\/wp-content\/uploads\/2023\/11\/Landing-img-01.jpg",
                            "id": 5276,
                            "size": "",
                            "alt": "s",
                            "source": "library"
                        }
                    }],
                    "5589b48": [{
                        "parallax_type": "parallax",
                        "parallax_image": {
                            "url": "https:\/\/wanderaway.qodeinteractive.com\/wp-content\/uploads\/2023\/09\/Landing-img-6.jpg",
                            "id": 3742,
                            "size": "",
                            "alt": "s",
                            "source": "library"
                        }
                    }]
                }
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://wanderaway.qodeinteractive.com/wp-content/plugins/wanderaway-core/inc/plugins/elementor/assets/js/elementor.min.js?ver=6.5.5" id="wanderaway-core-elementor-js"></script>
    <script id="rs-initialisation-scripts">
        var tpj = jQuery;

        var revapi3;

        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider31"] = {
            once: RS_MODULES.modules["revslider31"] !== undefined ? RS_MODULES.modules["revslider31"].once : undefined,
            init: function() {
                window.revapi3 = window.revapi3 === undefined || window.revapi3 === null || window.revapi3.length === 0 ? document.getElementById("rev_slider_3_1") : window.revapi3;
                if (window.revapi3 === null || window.revapi3 === undefined || window.revapi3.length == 0) {
                    window.revapi3initTry = window.revapi3initTry === undefined ? 0 : window.revapi3initTry + 1;
                    if (window.revapi3initTry < 20) requestAnimationFrame(function() {
                        RS_MODULES.modules["revslider31"].init()
                    });
                    return;
                }
                window.revapi3 = jQuery(window.revapi3);
                if (window.revapi3.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_3_1");
                    return;
                }
                revapi3.revolutionInit({
                    revapi: "revapi3",
                    sliderType: "hero",
                    DPR: "dpr",
                    sliderLayout: "fullwidth",
                    visibilityLevels: "1920,1710,1195,700",
                    gridwidth: "1300,1100,600,300",
                    gridheight: "1050,950,780,810",
                    lazyType: "smart",
                    perspective: 600,
                    perspectiveType: "global",
                    editorheight: "1050,950,780,810",
                    responsiveLevels: "1920,1710,1195,700",
                    progressBar: {
                        disableProgressBar: true
                    },
                    navigation: {
                        onHoverStop: false
                    },
                    viewPort: {
                        global: true,
                        globalDist: "-200px",
                        enable: true,
                        visible_area: "1px"
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });

            }
        } // End of RevInitScript

        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        };
    </script>
    <!-- <div id="wanderaway-core-page-inline-style" data-style="@media only screen and (max-width: 680px){.qodef-image-with-text-500 .qodef-m-title { margin-top: 12px!important;}.qodef-image-with-text-86 .qodef-m-title { margin-top: 12px!important;}.qodef-image-with-text-782 .qodef-m-title { margin-top: 12px!important;}.qodef-image-with-text-7 .qodef-m-title { margin-top: 12px!important;}.qodef-image-with-text-118 .qodef-m-title { margin-top: 12px!important;}.qodef-image-with-text-563 .qodef-m-title { margin-top: 12px!important;}}"></div> -->
</body>

</html>