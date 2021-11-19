<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="pingback" href="/xmlrpc.php" />
    <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/burst/img/favicon.ico">
    <link rel="apple-touch-icon" href="/wp-content/themes/burst/img/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>Gallery &#8211; Burst</title>
    <link rel="stylesheet" href="/wp-content/cache/minify/62b2f.css" media="all" />
    <link rel='dns-prefetch' href='//export.qodethemes.com' />
    <link rel='dns-prefetch' href='//maps.googleapis.com' />
    <link rel='dns-prefetch' href='//static.zdassets.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Burst &raquo; Feed" href="/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Burst &raquo; Comments Feed" href="/comments/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Burst &raquo; Gallery Comments Feed" href="/gallery/feed/" />

    <script type="text/javascript" data-cfasync="false">
        var mi_version = '7.10.3';
        var mi_track_user = true;
        var mi_no_track_reason = '';

        var disableStr = 'ga-disable-UA-123820161-1';

        /* Function to detect opted out users */
        function __gaTrackerIsOptedOut() {
            return document.cookie.indexOf(disableStr + '=true') > -1;
        }

        /* Disable tracking if the opt-out cookie exists. */
        if (__gaTrackerIsOptedOut()) {
            window[disableStr] = true;
        }

        /* Opt-out function */
        function __gaTrackerOptout() {
            document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
            window[disableStr] = true;
        }

        if (mi_track_user) {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', '__gaTracker');

            __gaTracker('create', 'UA-123820161-1', 'auto');
            __gaTracker('set', 'forceSSL', true);
            __gaTracker('require', 'displayfeatures');
            __gaTracker('send', 'pageview');
        } else {
            console.log("");
            (function() {
                /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
                var noopfn = function() {
                    return null;
                };
                var noopnullfn = function() {
                    return null;
                };
                var Tracker = function() {
                    return null;
                };
                var p = Tracker.prototype;
                p.get = noopfn;
                p.set = noopfn;
                p.send = noopfn;
                var __gaTracker = function() {
                    var len = arguments.length;
                    if (len === 0) {
                        return;
                    }
                    var f = arguments[len - 1];
                    if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
                        console.log('Not running function __gaTracker(' + arguments[0] + " ....) because you are not being tracked. " + mi_no_track_reason);
                        return;
                    }
                    try {
                        f.hitCallback();
                    } catch (ex) {

                    }
                };
                __gaTracker.create = function() {
                    return new Tracker();
                };
                __gaTracker.getByName = noopnullfn;
                __gaTracker.getAll = function() {
                    return [];
                };
                __gaTracker.remove = noopfn;
                window['__gaTracker'] = __gaTracker;
            })();
        }
    </script>

    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/burst.qodeinteractive.com\/burst\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.2"
            }
        };
        ! function(a, b, c) {
            function d(a, b) {
                var c = String.fromCharCode;
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
                var d = k.toDataURL();
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
                var e = k.toDataURL();
                return d === e
            }

            function e(a) {
                var b;
                if (!l || !l.fillText) return !1;
                switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                    case "flag":
                        return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
                    case "emoji":
                        return b = d([55357, 56424, 55356, 57342, 8205, 55358, 56605, 8205, 55357, 56424, 55356, 57340], [55357, 56424, 55356, 57342, 8203, 55358, 56605, 8203, 55357, 56424, 55356, 57340]), !b
                }
                return !1
            }

            function f(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }
            var g, h, i, j, k = b.createElement("canvas"),
                l = k.getContext && k.getContext("2d");
            for (j = Array("flag", "emoji"), c.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
                c.DOMReady = !0
            }, c.supports.everything || (h = function() {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function() {
                "complete" === b.readyState && c.readyCallback()
            })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" href="/wp-content/cache/minify/a1af9.css" media="all" />
    <link rel='stylesheet' id='ls-google-fonts-css' href='https://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
    <link rel="stylesheet" href="/wp-content/cache/minify/ba57e.css" media="all" />
    <link rel='stylesheet' id='rabbit_css-css' href='https://export.qodethemes.com/_toolbar/assets/css/rbt-modules.css?ver=5.2.2' type='text/css' media='all' />
    <link rel="stylesheet" href="/wp-content/cache/minify/4ad3e.css" media="all" />
    <link rel='stylesheet' id='mkd_burst_google_fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPacifico%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=latin%2Clatin-ext&#038;ver=1.0.0' type='text/css' media='all' />
    <!--[if lt IE 9]>
<link rel='stylesheet' id='vc_lte_ie9-css'  href='/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css' type='text/css' media='screen' />
<![endif]-->
    <link rel="stylesheet" href="/wp-content/cache/minify/67ae6.css" media="all" />
    <script type='text/javascript'>
        /* <![CDATA[ */
        var monsterinsights_frontend = {
            "js_events_tracking": "true",
            "download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx",
            "inbound_paths": "[]",
            "home_url": "https:\/\/burst.qodeinteractive.com\/burst",
            "hash_tracking": "false"
        };
        /* ]]> */
    </script>
    <script src="/wp-content/cache/minify/98076.js"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/burst\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/burst\/gallery\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View Cart",
            "cart_url": "https:\/\/burst.qodeinteractive.com\/burst\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script src="/wp-content/cache/minify/d0697.js"></script>
    <link rel='https://api.w.org/' href='/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.2.2" />
    <meta name="generator" content="WooCommerce 2.4.7" />
    <link rel="canonical" href="/gallery/" />
    <link rel='shortlink' href='/?p=3226' />
    <link rel="alternate" type="application/json+oembed" href="/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fburst.qodeinteractive.com%2Fburst%2Fgallery%2F" />
    <link rel="alternate" type="text/xml+oembed" href="/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fburst.qodeinteractive.com%2Fburst%2Fgallery%2F&#038;format=xml" />
    <!--[if IE 9]><link rel="stylesheet" type="text/css" href="/wp-content/themes/burst/css/ie9_stylesheet.css" media="screen"><![endif]-->
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />

    <link rel="stylesheet" href="/wp-content/cache/minify/custom.css" media="all"/>

    <noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
</head>

<body class="page-template page-template-full_width page-template-full_width-php page page-id-3226 mkd-core-1.0 ajax_fade page_not_loaded  burst-ver-1.0  vertical_menu_with_scroll smooth_scroll woocommerce_installed blog_installed wpb-js-composer js-comp-ver-6.0.5 vc_responsive">
    <div class="ajax_loader">
        <div class="ajax_loader_1">
            <div class="cube"></div>
        </div>
    </div>
    <div class="wrapper">
        <div class="wrapper_inner">
        <!--header-->
            
            <a id='back_to_top' class="right" href='#'>
                <span class="mkd_icon_stack">
                    <span class="ion-ios-arrow-up"></span>
                </span>
            </a>
       
                <div class="content_inner  ">
                    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        page_scroll_amount_for_sticky = undefined
                    </script>
                   
                  
                    
                </div>
            </div>
        <!--footer-->
    </div>
    <div class="wrapper">
        <div class="wrapper_inner">
        @include('partials.header')
        <a id='back_to_top' class="right" href='#'>
            <span class="mkd_icon_stack">
                <span class="ion-ios-arrow-up"></span>
            </span>
        </a>
        <div class=" sombre content  has_slider">
            <div class="meta">
                <div class="seo_title">Daoud Pub | Le numéro un du design et de la publicité au Burkina Faso</div>
                <span id="mkd_page_id">6057</span>
                <div class="body_classes">Accueil,Nos Services,Nous contacter, A propos de nous</div>
            </div>
                    @yield('banner')
            <div class="sombre full_width">
                    <div class="full_width_inner" >

                        <div class="content2">
                            @yield('content')
                        </div>
                    </div>
                </div>
        </div>
            
            @include('partials.footer')
      </div>
</div>
    </div>
    <div class="rbt-toolbar" data-theme="Burst" data-featured="" data-button-position="25%" data-button-horizontal="right" data-button-alt="no"></div>
    <script src="/wp-content/cache/minify/f9f01.js"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "https:\/\/burst.qodeinteractive.com\/burst\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            },
            "cached": "1"
        };
        /* ]]> */
    </script>
    <script src="/wp-content/cache/minify/f57d0.js"></script>
    <script type='text/javascript' src='https://export.qodethemes.com/_toolbar/assets/js/rbt-modules.js?ver=5.2.2'></script>
    <script src="/wp-content/cache/minify/16888.js"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/burst\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/burst\/gallery\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script src="/wp-content/cache/minify/3fb09.js"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/burst\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/burst\/gallery\/?wc-ajax=%%endpoint%%",
            "fragment_name": "wc_fragments"
        };
        /* ]]> */
    </script>
    <script src="/wp-content/cache/minify/0fbee.js"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var mkdLike = {
            "ajaxurl": "https:\/\/burst.qodeinteractive.com\/burst\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script src="/wp-content/cache/minify/867b4.js"></script>
    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDvbZKjXtEz5HnUbpxkVdEghYCq6M4C57w&#038;ver=5.2.2'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var no_ajax_obj = {
            "no_ajax_pages": ["https:\/\/burst.qodeinteractive.com\/burst\/no-ajax-transition-2\/", "https:\/\/burst.qodeinteractive.com\/burst\/", "https:\/\/burst.qodeinteractive.com\/burst\/shop\/", "https:\/\/burst.qodeinteractive.com\/burst\/cart\/", "https:\/\/burst.qodeinteractive.com\/burst\/checkout\/", "https:\/\/burst.qodeinteractive.com\/burst\/my-account\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/aviator-sunglases\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/straw-hat\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/chain-hairband\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/lightweight-scarf\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/yoga-sneakers\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/bow-ballerinas\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/braided-sandals\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/leather-hobo-bag\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/shopper-bag\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/triangle-bikini-top\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/cotton-trousers\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/decorative-blouse\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/essential-blazer\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/zip-trench\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/pleated-gown\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/skinny-jeans\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/wool-blend-coat\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/contrast-t-shirt\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/textured-top\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/flared-skirt\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/boho-flowy-dress\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/pocket-leather-jacket\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/wrap-jumpsuit\/", "https:\/\/burst.qodeinteractive.com\/burst\/product\/long-beaded-dress\/", "", "https:\/\/burst.qodeinteractive.com\/burst\/wp-login.php?action=logout&_wpnonce=6c71dfe83a"]
        };
        /* ]]> */
    </script>
    <script src="/wp-content/cache/minify/a070d.js"></script>
    <script type="text/javascript" src="https://static.zdassets.com/ekr/snippet.js?key=af3078fd-a5ae-40da-bee0-e589b98c8603&#038;ver=5.2.2" id="ze-snippet"></script>
    <script type="text/javascript">
        zE(function() {
            $zopim(function() {
                var isChatEnabled = sessionStorage.getItem("qodeChatEnabled"),
                    appearingTime = 15000;

                if (isChatEnabled !== "no") {
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
    <script src="/wp-content/cache/minify/233aa.js"></script>
</body>

</html>