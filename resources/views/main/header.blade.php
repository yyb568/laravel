<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="领券优惠,商家内部券,领券秒杀,领券商品分享,内部优惠券"/>
    <meta name="description" content="每日为大家精选全网领券优惠信息，全天实时直播更新，专业团队筛选，拒绝低价劣质，帮助淘宝客提升收益及转化！"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE,chrome=1"/>
    <meta name="renderer" content="webkit"/>
    <link href="https://p1static.dataoke.com/web/css/quan_common.css?t=201910221508" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://p1static.dataoke.com/web/css/quan_index.css?t=201910221508"/>
    <link rel="stylesheet" type="text/css" href="https://p1static.dataoke.com/web/css/collect.css?t=201910221508"/>
    <link rel="stylesheet" type="text/css" href="https://p1static.dataoke.com/web/css/add-feature.css?t=201910221508"/>
    <link rel="stylesheet" type="text/css"
          href="https://p1static.dataoke.com/web/css/quanHome/index.css?t=201910221508"/>
    <link rel="stylesheet" type="text/css"
          href="https://p1static.dataoke.com/web/js/quanHome/swiper.min.css?t=201910221508"/>
    <title>欢迎啊</title>
    <style>
        .head-search-ads {
            width: 280px;
            height: 70px;
            margin-top: 15px;
            overflow: hidden;
        }

        .head-search-ads a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .head-search-ads img {
            max-width: 280px;
            max-height: 70px;
        }
    </style>
</head>
<body>
<script type="text/javascript" src="https://p1static.dataoke.com/web/js/jquery-1.12.4.min.js"></script>

<script>
    var getCookie = function (name) {
        var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
        if (arr = document.cookie.match(reg))
            return unescape(arr[2]);
        else
            return null;
    };
    // 官网统计
    (function () {
        var script = document.createElement("script");
        var time = new Date(), FullYear = time.getFullYear(), Month = time.getMonth() + 1, getDate = time.getDate(),
            getHours = time.getHours();
        script.src = "//satc.dataoke.com/dest/js/dtksatc.js?v=20191024224000";
        script.setAttribute("name", "DTKSATC");
        script.setAttribute("tid", "dtk-web"); // 站点id
        script.setAttribute("uid", getCookie("euid")); // 登录用户id
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(script, s);
    })();

    //防止mta加载失败导致页面报错
    var MtaH5 = {
        clickShare: function () {
        },
        clickStat: function () {
        },
        hack: function () {
        },
        pgv: function () {
        }
    };
    var _mtac = {"performanceMonitor": 1, "senseQuery": 1};
    (function () {
        var mta = document.createElement("script");
        mta.src = "//pingjs.qq.com/h5/stats.js?v2.0.4";
        mta.setAttribute("name", "MTAH5");

        window.onload = function () {
            if ($('#count_pd').hasClass('count')) {
                mta.setAttribute("sid", "500625661");
                mta.setAttribute("cid", "500625662");
            } else {
                mta.setAttribute("sid", "500633376");
                mta.setAttribute("cid", "500634492");
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(mta, s);
        };
    })();
</script>
<script>
    function is_exit(url, words) {
        if (confirm(words))
            window.location = url;
    }

    // 获取cookie
    function getCookie(c_name) {
        if (document.cookie.length > 0) {
            c_start = document.cookie.indexOf(c_name + "=")
            if (c_start != -1) {
                c_start = c_start + c_name.length + 1;
                c_end = document.cookie.indexOf(";", c_start);
                if (c_end == -1) c_end = document.cookie.length;
                return unescape(document.cookie.substring(c_start, c_end));
            }
        }
        return ""
    }


    userid = getCookie('userid');

</script>
<script src="https://p1static.dataoke.com/web/js/top.js?t=201910221508"></script>