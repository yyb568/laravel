

<!--[if lt IE 9]>
<script language="javascript" type="text/javascript"
        src="https://p1static.dataoke.com/web/js/letskillie/letskillie6.zh_CN.js"></script>
<![endif]-->

<script type="text/javascript" src="https://p1static.dataoke.com/web/js/unPen.js?t=201910221508"></script>

<style>
    .unp-pendant .unp-center a.adv .ico {
        display: block;
        width: 52px;
        height: 52px;
        background: url("") center no-repeat;
        background-size: contain;
        margin: 0 auto;
    }

    .unp-pendant .unp-center a.adv {
        display: none;
    }
</style>


<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?6316c7f07a2eba547a215dbd211a498c";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();


    var ad_url = '';

    var ad_name = '';

</script>
<div style="left: 0px; top: 0px; position: absolute; width: 29px; height: 27px; border: medium none; margin: 0px; padding: 0px; z-index: 2147483647; display: none;"
     class="sbi_search" id="sbi_camera_button"></div>
<script src="https://p1static.dataoke.com/web/js/lazyload.js?t=201910221508"></script>

<script type="text/javascript" charset="utf-8">
    $(function () {
        $("img.lazy").lazyload();
    });

</script>


<script src="https://p1static.dataoke.com/web/js/fingerprint2.min.js?t=201910221508"></script>
<script src="https://p1static.dataoke.com/web/js/dtk_head.js?t=201910221508"></script>
<script>

    //删除ASPcookie
    var exdate = new Date();
    exdate.setTime(exdate.getTime() + 1);
    var allCookie = document.cookie.split(";");
    for (var key in allCookie) {
        if (allCookie[key].split('ASP').length > 1) {
            document.cookie = allCookie[key] + "=" + escape(0) + (";path=/;expires=" + exdate.toGMTString());
        }
    }
</script>
<!--小工具入口-->
<script>
    $(function () {
        var tips = $('.dtk-head .head-top .head-top-main .head-top-right a .tips');
        tips.fadeIn();
        setTimeout(function () {
            tips.fadeOut();
        }, 10000)
        tips.find('button').unbind('click').click(function (e) {
            e.preventDefault();
            tips.fadeOut();
        })
    })
</script>
<script type="text/javascript" src="https://p1static.dataoke.com/web/js/goods_page_search.js?t=201910221508"></script>
<script type="text/javascript" src="https://p1static.dataoke.com/web/js/layer/layer.js?t=201910221508"></script>
<script type="text/javascript" src="https://p1static.dataoke.com/web/js/u_func.js?t=201910221508"></script>
<script type="text/javascript" src="https://p1static.dataoke.com/web/js/istui.js?t=201910221508"></script>
<script type="text/javascript" src="https://p1static.dataoke.com/web/js/echarts.min.js?t=201910221508"></script>
<script type="text/javascript" src="https://p1static.dataoke.com/web/js/quanHome/quanHome.js?t=201910221508"></script>
<script type="text/javascript"
        src="https://p1static.dataoke.com/web/js/quanHome/swiper.jquery.min.js?t=201910221508"></script>
<script type="text/javascript" src="https://p1static.dataoke.com/web/js/clipboard.min.js?t=201910221508"></script>
<script type="text/javascript" src="https://p1static.dataoke.com/web/js/big-search.js?t=201910221508"></script>
</body>
</html>