@include('main.header')
<div id="count_pd" class="count"></div>
<div class="dtk-head clearfix">
    <div class="head-top">
        <div class="head-top-main">
            <div class="head-top-left clearfix">

                <a class='dtk-info fl' href="/">大淘客首页</a>
                <div id='header_login' class='fl'>
                </div>
                <script>
                    $.ajax({
                        type: "get",
                        url: "/header",
                        dataType: "text",
                        cache: false,
                        success: function (ret) {
                            $('#header_login').html(ret);
                        }
                    })
                </script>

            </div>
            <div class="head-top-right">
                <a href="/tools" target="_blank" class="tools_header_tab">
                    <img src="https://p1static.dataoke.com/web/css/tools/images/edit.gif?v=201910221508"
                         style="width: 15px; position: relative; top: 3px; z-index: 1;vertical-align: initial;"/>
                    推广小工具
                    <div class="tips">全新上线 方便快捷！
                        <button type="button">好的</button>
                    </div>
                </a>
                <a href="/tk_zs/media.html" target="_blank">入驻大淘号</a>
                <a href="/tk_zs/media-ranking.html" target="_blank">商家合作</a>
                <a href="/pmc/openapi.html" target="_blank">开放平台API</a>
                <a href="http://help.dataoke.com" target="_blank">帮助中心</a>
                <a href="http://help.dataoke.com/hc/kb/article/1126623/" target="_blank">联系我们</a>
            </div>
        </div>
    </div>
    <style>
        .tools_header_tab {
            color: #f40 !important;
        }

        .tools_header_tab:hover {
            color: rgba(255, 68, 0, .8) !important;
        }
    </style>
    <div class="head-search">
        <div class="logo fl"><a href="/" title="首页" class="link_home">首页</a><a href="/xp" class="link_qlist"
                                                                               title="选品库">选品库</a></div>
        <div class="search fl">
            <div class="select-area">
                <div id="xuan" class="hide sear-option">
                    <span class="cur" data-value="keyword">标题</span>
                    <span data-value="keyword_miaoshu">标题和文案</span>
                    <span data-value="spid">商品ID</span>
                </div>
            </div>


            <!--新版  样式在 quan_common.css 里面 -->
            <div class="search_layout_form big_search">
                <form id="src_form" action="/search/">
                    <div class="search_input">
                        <div class="input">
                            <span class="tab"></span>
                            <input class=""
                                   ui-mta="clickStat"
                                   data-event="click"
                                   data-mta-key="xpk_1022"
                                   data-config="{title:'点击输入框'}"
                                   type="text" name="keywords" autocomplete="off" placeholder="请输入关键词/商品ID/商品链接"
                                   value=""/>
                            <span class="completion"></span>
                            <span class="src-close-btn"></span>
                            <span class="bq">按 → 补全</span>
                        </div>
                        <button type="submit" class="submit"
                                ui-mta="clickStat"
                                data-event="click"
                                data-mta-key="xpk_1022"
                                data-config="{title:'点击搜索按钮'}" onclick="document.getElementById('src_form').submit()"
                        >
                            搜 索
                        </button>
                        <div class="search_com_list " data-value="1">
                            <div class="search_com_list_cent">
                                <dl class="search_hot_list">
                                    <dt>热门搜索</dt>
                                    <dd></dd>
                                </dl>
                                <div class="search_relation_list">
                                    <dl class="src_list"></dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search_rec_nav">
                        <a class="new_gjz style_0 has_type"
                           href="/search/?keywords=%E7%8F%8A%E7%91%9A%E7%BB%92%E7%9D%A1%E8%A1%A3&fast_kw=1">珊瑚绒睡衣 </a>
                        <a class="new_gjz style_1 has_type"
                           href="/search/?keywords=%E6%9A%96%E5%AE%9D%E5%AE%9D&fast_kw=2">暖宝宝 </a>
                        <a class="new_gjz style_1 has_type"
                           href="/search/?keywords=%E5%8A%A0%E7%BB%92%E8%A2%9C&fast_kw=3">加绒袜 </a>
                        <a class="new_gjz style_0 has_type"
                           href="/search/?keywords=%E5%A4%A7%E9%97%B8%E8%9F%B9&fast_kw=4">大闸蟹 </a>
                        <a class="new_gjz style_1 has_type"
                           href="/search/?keywords=%E4%BF%9D%E6%9A%96%E5%86%85%E8%A1%A3&fast_kw=5">保暖内衣 </a>
                        <a class="new_gjz style_1 has_type"
                           href="/search/?keywords=%E5%8D%AB%E8%A1%A3&fast_kw=6">卫衣 </a>
                        <a class="new_gjz style_0 has_type"
                           href="/search/?keywords=%E6%B4%97%E8%A1%A3%E6%B6%B2&fast_kw=7">洗衣液 </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="head-search-right fr"></div>
    </div>
    <div class="head-navact_db11 times1">
        <div class="nav-main">
            <div class="nav-list clearfix">
                <ul>
                </ul>
            </div>
            <div class="nav-right" data-dtk-satc="{desc:'导航栏',name:'ListDisplayEvent'}" data-dtk-event='show'>
                <input type="hidden" id="get_cate_url" value="/getCate/?type=xpk">
                <input type="hidden" id="save_qing" value="/syncDTK">
                <input type="hidden" id="reset_url" value="/reset">
                <input type="hidden" id="jude_login_url" value="/online">
            </div>

        </div>

        <div class="nav-header-ext">

            <!--导购推广-->
            <div class="nav_cent dg">
                <div class="nav_guide w_1200">
                    <dl class="nav_guide_cp">
                        <dt class="transition400">产品服务</dt>
                        <dd class="transition400">
                            <a href="/cms-introduce.html" class="h_nav_cms h_icon"></a>
                            <div class="text" style="width: 220px">
                                <a class="bt" href="/cms-introduce.html">CMS网站 <span class="free">免费</span><span
                                            class="update">智能部署</span></a>
                                基于运营、活动、营销及体验的完整导购解决方案。
                            </div>
                        </dd>
                        <dd class="transition400">
                            <a href="/app-introduce.html" class="h_nav_app h_icon"></a>
                            <div class="text">
                                <a class="bt" href="/app-introduce.html">导购APP <span>全新改版</span> <span>积分系统</span> </a>
                                集内容运营、活动运营、创新体验一体，打造移动端完美导购体验。
                            </div>
                        </dd>
                    </dl>
                    <dl class="nav_guide_jp">
                        <dt class="transition400">精品单页 <span>效率工具</span></dt>
                        <dd class="transition400">
                            <a href="/wap-introduce.html">
                                <i class="h_nav_by h_icon"></i>
                                9块9包邮
                            </a>
                        </dd>
                        <dd class="transition400 odd">
                            <a href="/zhushou">
                                <i class="h_nav_zl h_icon"></i>
                                转链助手
                            </a>
                        </dd>
                        <dd class="transition400 end">
                            <a href="/wap-introduce.html">
                                <i class="h_nav_jx h_icon"></i>
                                每日精选
                            </a>
                        </dd>
                    </dl>
                </div>
            </div>

            <!-- 流量变现 -->

        </div>
    </div>
</div>

<script>

    var mcData = '[{"hz_quan_over":"25","yuanjia":"213.00","quan_jine":"10.00","quan_m_link":"30","type":"1","feature":"9989","red_packet":10.3,"id":"22852123","short_title":"Aussie\u5f3a\u97e7\u4fee\u62a4\u888b\u9f20\u53d1\u819c500ml","price":178,"coupon_amount":"10.00","commission_rate":"20.10","pic":"https:\/\/img.alicdn.com\/i3\/3913838992\/O1CN01RVayp22GINzQxbDxL_!!3913838992.png","seller_id":"3913838992","istmall":"1","slaes":"14685","market_id":"6,9","is_flagship":0,"is_tm_seller":0,"is_qiang":0,"is_ju":0,"shop_name":"aussie\u65d7\u8230\u5e97","market_group":["6","9"]},{"hz_quan_over":"0","yuanjia":"26.90","quan_jine":"20.00","quan_m_link":"0","type":"2","feature":"7103","red_packet":0,"id":"22941193","short_title":"\u3010\u5fbd\u6625\u5802\u3011\u4e00\u6735\u4e00\u676f\u91d1\u4e1d\u7687\u83ca60\u6735","price":6.9,"coupon_amount":"20.00","commission_rate":"20.00","pic":"https:\/\/img.alicdn.com\/imgextra\/i1\/2452619605\/TB2abnYlVmWBuNjSspdXXbugXXa_!!2452619605.jpg","seller_id":"2452619605","istmall":"1","slaes":"88591","market_id":null,"is_flagship":0,"is_tm_seller":0,"is_qiang":0,"is_ju":0,"shop_name":"\u5fbd\u6625\u5802\u65d7\u8230\u5e97","market_group":[]},{"hz_quan_over":"0","yuanjia":"208.00","quan_jine":"10.00","quan_m_link":"30","type":"3","feature":"277","red_packet":8.55,"id":"22794184","short_title":"\u5b89\u70ed\u6c99\u8d44\u751f\u5802\u5c0f\u91d1\u74f6\u9632\u6652\u971c60ml","price":198,"coupon_amount":"10.00","commission_rate":"15.00","pic":"https:\/\/img.alicdn.com\/imgextra\/i3\/1654735308\/O1CN01sTkEX21p56qaeq0uc_!!1654735308.jpg","seller_id":"2582702075","istmall":"1","slaes":"43026","market_id":"6,9","is_flagship":1,"is_tm_seller":0,"is_qiang":0,"is_ju":0,"shop_name":"ANESSA\u5b89\u70ed\u6c99\u5b98\u65b9\u65d7\u8230\u5e97","market_group":["6","9"]},{"hz_quan_over":"0","yuanjia":"32.80","quan_jine":"10.00","quan_m_link":null,"type":"4","feature":"57","red_packet":0,"id":"22916550","short_title":"\u3010\u4f18\u54c8\u3011\u65f6\u5c1a\u767e\u642d\u83f1\u683c\u5355\u80a9\u7ebf\u8de8\u94fe\u6761\u5305","price":22.8,"coupon_amount":"10.00","commission_rate":"30.00","pic":"https:\/\/img.alicdn.com\/imgextra\/i2\/1882956081\/O1CN01oCtv8i1un92ejJ6Lm_!!1882956081.jpg","seller_id":"349169988","istmall":"1","slaes":"14698","market_id":null,"is_flagship":0,"is_tm_seller":0,"is_qiang":0,"is_ju":0,"shop_name":"\u4f18\u54c8\u4f18\u54c8\u7bb1\u5305\u65d7\u8230\u5e97","market_group":[]},{"hz_quan_over":"0","yuanjia":"58.00","quan_jine":"3.00","quan_m_link":null,"type":"5","feature":"26.67","red_packet":0,"id":"22941123","short_title":"\u56fa\u7279\u5a01\u71c3\u6cb9\u5b9d\u6c7d\u6cb9\u6dfb\u52a0\u52428\u74f6","price":55,"coupon_amount":"3.00","commission_rate":"20.00","pic":"https:\/\/img.alicdn.com\/imgextra\/i4\/2312565957\/O1CN019Z4xhc1tsLupaofjf_!!2312565957.jpg","seller_id":"11867634","istmall":"0","slaes":"182","market_id":null,"is_flagship":0,"is_tm_seller":0,"is_qiang":0,"is_ju":0,"shop_name":"\u7cbe\u8d38\u8f66\u54c1\u4e0a\u6d77\u5e97","market_group":[]},{"hz_quan_over":"0","yuanjia":"899.00","quan_jine":"350.00","quan_m_link":null,"type":"7","feature":"109.8","red_packet":0,"id":"22941192","short_title":"\u4e5d\u9633\u7834\u58c1\u514d\u8fc7\u6ee4\u8c46\u6d46\u673a\u5c0f\u578b\u5bb6\u7528\u5168\u81ea\u52a8\u667a\u80fd\u716e","price":549,"coupon_amount":"350.00","commission_rate":"20.00","pic":"https:\/\/img.alicdn.com\/imgextra\/i1\/1764451681\/O1CN01JQKeKi1OHwL6eX1lS_!!1764451681.jpg","seller_id":"3834381337","istmall":"1","slaes":"420","market_id":null,"is_flagship":0,"is_tm_seller":0,"is_qiang":0,"is_ju":0,"shop_name":"\u4e5d\u9633\u7eb3\u8fb0\u4e13\u5356\u5e97","market_group":[]},{"hz_quan_over":"150","yuanjia":"4499.00","quan_jine":"950.00","quan_m_link":"100","type":"8","feature":"64","red_packet":40,"id":"22830272","short_title":"Midea\/\u7f8e\u7684\u5341\u5b57\u5bf9\u5f00\u56db\u95e8\u53d8\u9891\u51b0\u7bb1","price":3399,"coupon_amount":"950.00","commission_rate":"7.00","pic":"https:\/\/img.alicdn.com\/bao\/uploaded\/O1CN01CnmvzB1KCfJbDoNR1_!!2-item_pic.png","seller_id":"1014281128","istmall":"1","slaes":"4385","market_id":"6,9","is_flagship":1,"is_tm_seller":0,"is_qiang":0,"is_ju":0,"shop_name":"\u7f8e\u7684\u51b0\u7bb1\u65d7\u8230\u5e97","market_group":["6","9"]}]';
    var activity_goods_single_arr = '{"9":{"big":"https:\/\/thumbnail.dataoke.com\/img\/dtk\/market\/201910\/2019102014001687712122.png","small":"","st_active_type":"3"},"6":{"big":"https:\/\/thumbnail.dataoke.com\/img\/dtk\/market\/201910\/2019101613543885366198.png","small":"https:\/\/thumbnail.dataoke.com\/img\/dtk\/market\/201910\/2019101810324782086675.png","st_active_type":"2"}}';//活动单品图片标签   st_active_type   2 定金立减  3定金立减红包    red_packet 红包金额 必须大于0    hz_quan_over立减  quan_m_link定金

</script>
<div class="quan_home_layout" id="tabHome">
    <div class="quan_home_tab">
        <div class="w_1200">
            <span class="tab_name">
                <i class="quan_home_icon icon_tab"></i>
                商品分类：
            </span>
            <nav class="nav_list">
                <a href="/qlist/?cid=4" target="_blank">居家日用</a>
                <a href="/qlist/?cid=6" target="_blank">美食</a>
                <a href="/qlist/?cid=2" target="_blank">母婴</a>
                <a href="/qlist/?cid=3" target="_blank">美妆</a>
                <a href="/qlist/?cid=1" target="_blank">女装</a>
                <a href="/qlist/?cid=8" target="_blank">数码家电</a>
                <a href="/qlist/?cid=7" target="_blank">文娱车品</a>
                <a href="/qlist/?cid=10" target="_blank">内衣</a>
                <a href="/qlist/?cid=14" target="_blank">家装家纺</a>
                <a href="/qlist/?cid=5" target="_blank">鞋品</a>
                <a href="/qlist/?cid=9" target="_blank">男装</a>
                <a href="/qlist/?cid=12" target="_blank">配饰</a>
                <a href="/qlist/?cid=13" target="_blank">户外运动</a>
                <a href="/qlist/?cid=11" target="_blank">箱包</a>
                <a href="http://www.dataoke.com/brandFilter?source=lm1" target="_blank" style="color: #ff7800">
                    <i class="quan_home_icon" style="background: none;">
                        <img src="https://thumbnail.dataoke.com/img/brand_feature/201910/2019101516071825595522.png"
                             alt="">
                    </i>

                    品牌库 </a>
                <a href="http://www.dataoke.com/atopic/tmallchaoshi?source=lm2" target="_blank" style="color: #ff0000">
                    <i class="quan_home_icon" style="background: none;">
                        <img src="https://img.alicdn.com/imgextra/i3/2858490732/O1CN016kRXfq1HHIU6d6hSa_!!2858490732.png"
                             alt="">
                    </i>

                    猫超专栏 </a>
            </nav>
        </div>
    </div>
    <div class="quan_home_tab_bg"></div>
</div>

<div class="quan_header_hot">
    <div class="w_1200">
        <div class="hot_left hot_row ">
            <div class="quan_layout_row" key="QuanMofang">
                <div class="loading" style="opacity: 1"><span>一大波爆品即将呈现...</span></div>
            </div>
        </div>
        <div class="hot_center hot_row">
            <div class="banner">

                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <a href="http://www.dataoke.com/atopic/djzhuhuichang?source=lb1" target="_blank">
                                <img src="https://img.alicdn.com/imgextra/i3/2053469401/O1CN01QrKYZS2JJhymP6sWp_!!2053469401.jpg"
                                     class="swiper-lazy">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="http://www.dataoke.com/info/?id=268&source=lb2" target="_blank">
                                <img data-src="https://img.alicdn.com/imgextra/i4/2858490732/O1CN01CspVqA1HHIUEjhZTd_!!2858490732.png"
                                     class="swiper-lazy">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="http://www.dataoke.com/atopic/99yuanjingxuan?source=lb3" target="_blank">
                                <img data-src="https://img.alicdn.com/imgextra/i2/2858490732/O1CN01Jardec1HHIU9A07DX_!!2858490732.jpg"
                                     class="swiper-lazy">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="http://www.dataoke.com/brandFeature?source=lb4" target="_blank">
                                <img data-src="https://img.alicdn.com/imgextra/i4/2053469401/O1CN01hByYb42JJhyu7yx6Y_!!2053469401.jpg"
                                     class="swiper-lazy">
                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                            </a>
                        </div>


                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-white"></div>
                    <!-- Navigation -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>

            </div>

            <div class="act_item">
                <a target="_blank" href="http://www.dataoke.com/atopic/djtop1?source=x1">
                    <img src="https://img.alicdn.com/imgextra/i4/2053469401/O1CN01ixPB5M2JJhylKcPy7_!!2053469401.png"
                         alt="">
                    <div class="msg">
                        <p class="title">「双11·定金预售榜」</p>
                        <p class="desc">爆款实时更新</p>
                    </div>
                </a>
                <a target="_blank" href="http://www.dataoke.com/atopic/djfudinglizeng?source=x2">
                    <img src="https://img.alicdn.com/imgextra/i1/2053469401/O1CN01vsHOyP2JJhyoceuSY_!!2053469401.png"
                         alt="">
                    <div class="msg">
                        <p class="title">「双11·付定礼赠」</p>
                        <p class="desc">佣金提前锁定</p>
                    </div>
                </a>
                <a target="_blank" href="http://www.dataoke.com/atopic/djshunfengbaoyou?source=x3">
                    <img src="https://img.alicdn.com/imgextra/i3/2053469401/O1CN01e9Byfk2JJhyrPkMdS_!!2053469401.png"
                         alt="">
                    <div class="msg">
                        <p class="title">「双11·顺丰包邮」</p>
                        <p class="desc">优质快递推品更强</p>
                    </div>
                </a>
                </a>
            </div>

        </div>
        <div class="hot_right hot_row">
            <div class="operate">
                <h3 class="bt">大淘客运营数据</h3>
                <ul>
                    <li>
                        <p>3年8个月</p>
                        <span>稳定运行</span>
                    </li>
                    <li>
                        <p>10万+</p>
                        <span>日活淘客数</span>
                    </li>
                    <li>
                        <p>100万+</p>
                        <span>服务商家数</span>
                    </li>
                </ul>
            </div>
            <div class="faq">
                <a target="_blank" href="http://help.dataoke.com/hc/request/new"><i
                            class="quan_home_icon icon_edit"></i>意见反馈(1003)<i class="quan_home_icon icon_new"></i></a>
            </div>
            <div class="not">
                <div class="tab">
                    <a href="javascript:;" class="active">公告 <i></i></a>
                    <a href="javascript:;">规则 <i></i></a>
                    <a href="javascript:;">处罚 <i></i></a>
                </div>
                <div class="center">
                    <ul class="ullit">
                        <li><a target="_blank" title="[10-20] 【新】淘客推广争霸赛，万元大奖等你来拿！"
                               href="http://www.dataoke.com/info/?id=268&source=lb1">[10-20] 【新】淘客推广争霸赛，万元大奖等你来拿！</a>
                        </li>
                        <li><a target="_blank" title="[10-14] 【新】选品库首页上线！全新体验重磅来袭"
                               href="http://www.dataoke.com/info/?id=265">[10-14] 【新】选品库首页上线！全新体验重磅来袭</a></li>
                        <li><a target="_blank" title="[10-14] 【重要】「品牌优选」栏目全面升级"
                               href="http://www.dataoke.com/info/?id=264">[10-14] 【重要】「品牌优选」栏目全面升级</a></li>
                    </ul>
                    <ul class="ullit" style="display: none;">
                        <li><a target="_blank" title="[10-21] 【新】关于《关于劣质店铺及商品的处理办法》的变更通知（10月15日更新）"
                               href="http://www.dataoke.com/hz_tk/gz/?id=975">[10-21]
                                【新】关于《关于劣质店铺及商品的处理办法》的变更通知（10月15日更新）</a></li>
                        <li><a target="_blank" title="[10-21] 【重要】双十一活动商品提交规则（10月8日更新）"
                               href="http://www.dataoke.com/hz_tk/gz/?id=981">[10-21] 【重要】双十一活动商品提交规则（10月8日更新）</a></li>
                        <li><a target="_blank" title="[10-17] 【重要】大淘客联盟刷榜处罚规则(7月16日更新）"
                               href="http://www.dataoke.com/hz_tk/gz/?id=879">[10-17] 【重要】大淘客联盟刷榜处罚规则(7月16日更新）</a></li>
                    </ul>
                    <ul class="ullit" style="display: none;">
                        <li><a target="_blank" title="[10-21] 【新】关于处罚刷榜行为的公告（10月21日更新）"
                               href="http://www.dataoke.com/hz_tk/gz/?id=989">[10-21] 【新】关于处罚刷榜行为的公告（10月21日更新）</a></li>
                        <li><a target="_blank" title="[10-14] 【新】9月平台账号违规行为处罚公示"
                               href="http://www.dataoke.com/hz_tk/gz/?id=982">[10-14] 【新】9月平台账号违规行为处罚公示</a></li>
                        <li><a target="_blank" title="[10-14] 8月平台账号违规行为处罚公示"
                               href="http://www.dataoke.com/hz_tk/gz/?id=972">[10-14] 8月平台账号违规行为处罚公示</a></li>
                    </ul>
                </div>
            </div>

            <div class="regimental">
                <h3><i class="quan_home_icon icon_xin"></i>星级团长 <a target="_blank"
                                                                   href="http://www.dataoke.com/tk_zs/media-ranking.html"
                                                                   class="quan_home_icon icon_net"></a></h3>
                <ul class="ullit">
                    <a target="_blank" href="http://www.dataoke.com/tk_zs/tk-index.html?id=2872">
                        <li class="li1">
                            <i class="vip">Lv.5</i>
                            <p class="pic"><img
                                        src="https://img.alicdn.com/imgextra/i3/1122844978/O1CN019aDyJX1mdyBJ9UQIz_!!1122844978.jpg"
                                        alt=""></p>
                            <div class="name" style="color: #000;">乐尚团队-老豆</div>
                            <div class="desc col-money">服务商家数NO.1</div>
                        </li>
                    </a>
                    <a target="_blank" href="http://www.dataoke.com/tk_zs/tk-index.html?id=48307">
                        <li class="li2">
                            <i class="vip">Lv.4</i>
                            <p class="pic"><img
                                        src="https://img.alicdn.com/imgextra/i1/1049650647/O1CN01q4QLan1GeMjGrBWfP_!!1049650647.png"
                                        alt=""></p>
                            <div class="name" style="color: #000;">好望角团队-提莫</div>
                            <div class="desc col-money">实力招商大牛</div>
                        </li>
                    </a>
                    <a target="_blank" href="http://www.dataoke.com/tk_zs/tk-index.html?id=34862">
                        <li class="li3">
                            <i class="vip">Lv.3</i>
                            <p class="pic"><img
                                        src="https://img.alicdn.com/imgextra/i2/3008484522/TB2Q3HubTTI8KJjSsphXXcFppXa_!!3008484522.png"
                                        alt=""></p>
                            <div class="name" style="color: #000;">橙易推</div>
                            <div class="desc col-money">招商潜力NO.1</div>
                        </li>
                    </a>
                </ul>
            </div>

        </div>
        <div class="ov_h"></div>
    </div>
</div>

<div class="quan_tuijian w_1200"
     style="background-image:url('https://thumbnail.dataoke.com/img/dtk/market/201910/2019102018413763755703.jpg');">
    <div class="tab_bt">
        <div class="fl"><i class="quan_home_icon"><img
                        src="https://thumbnail.dataoke.com/img/dtk/market/201910/2019102018415218035371.png"></i>
            <h3 class="name col_text" style="color:#FE4732;">每日精选</h3><span class="desc">双11低价高佣好货推荐，佣金20%起</span></div>
        <div class="fr">
            <div class="time" data-end-time="1572105599">距结束 <span>27</span> : <span>35</span> : <span>29</span></div>
            <a target="_blank" href="http://www.dataoke.com/atopic/symeirijingxuan" class="new">查看更多</a></div>
    </div>
    <ul class="tuijian_item">
        <li class="li3">
            <div class="tag-wrap outer"><span class="lj">付定立减<i>20元</i></span>,<span class="dj">再返6.33元</span></div>
            <div class="center">
                <div class="tag"><span class="name quan_home_icon">双11预售·精选</span><a target="_blank"
                                                                                     href="/item?id=22932266"
                                                                                     class="new">爆款商品，热推中&gt;</a></div>
                <div class="goods_info">
                    <div class="pic quan_goods_pic" ui-activity-label="" data-market_id="6,9"><a target="_blank"
                                                                                                 href="/item?id=22932266"><img
                                    class="lazy"
                                    src="https://img.alicdn.com/imgextra/i2/43574553/O1CN01lfqHZ51jVJr5UodP9_!!43574553.jpg_310x310.jpg"
                                    data-original="https://img.alicdn.com/imgextra/i2/43574553/O1CN01lfqHZ51jVJr5UodP9_!!43574553.jpg_310x310.jpg"
                                    style="background: rgb(238, 238, 238); display: block;"></a>
                        <div class="but"><a href="javascript:;" ui-collection="" gid="22932266" size="min">收藏</a><a
                                    href="javascript:;" ui-copy="" gid="22932266">复制</a></div>
                        <div class="activity_label"><p><img
                                        src="https://thumbnail.dataoke.com/img/dtk/market/201910/2019101810324782086675.png">
                            </p></div>
                    </div>
                    <div class="nr"><a target="_blank" href="/item?id=22932266"><h3 class="bt" ui-goods-brand=""
                                                                                    data-id="78888695"
                                                                                    title="【双十一预售】韩后水动力面部护肤品4件套"
                                                                                    isajax="1"><em class="tag"
                                                                                                   title="点击查看更多该品牌商品">韩后</em>【双十一预售】水动力面部护肤品4件套
                            </h3></a>
                        <div class="tab"><a><i class="quan_home_icon"></i>买就送3件旅行套装</a><a><i class="quan_home_icon"></i>领津贴每满400减50</a><a><i
                                        class="quan_home_icon"></i>旗舰正品，过敏包退</a></div>
                    </div>
                </div>
                <div class="tag_item"><p class="p1"><a target="_blank" href="/item?id=22932266">券后价 <span
                                    class="col-money">¥109.9</span></a></p>
                    <p class="p2"><a target="_blank" href="/item?id=22932266" title="约21.98元">佣金 <span>20%</span></a>
                    </p>
                    <p><a target="_blank" href="/item?id=22932266">销量 <span>1903</span></a></p></div>
            </div>
            <div class="quan_shop" ui-goods-shop="" data-id="25941680">
                <div class="low">
                    <div class="is_tag"><img src="https://p1static.dataoke.com/web/images/icon/icon_pic_ju.png"
                                             alt=""><img
                                src="https://p1static.dataoke.com/web/images/icon/icon_pic_tiaomao.png" alt=""></div>
                    <div class="quan"><span class="quan_icon"><span>券</span><i>10元</i></span><span>优惠券剩余</span>
                        <sapn class="col-money">49500</sapn>
                        /50000
                    </div>
                    <div class="dp shopName loads">&nbsp;</div>
                    <div class="user shopUser loads">&nbsp;</div>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="quan_tuijian w_1200"
     style="background-image:url('https://thumbnail.dataoke.com/img/dtk/market/201910/2019102023560849438055.png');">
    <div class="tab_bt">
        <div class="fl"><i class="quan_home_icon"><img
                        src="https://thumbnail.dataoke.com/img/dtk/market/201910/2019101712023545381157.png"></i>
            <h3 class="name col_text">双11定金预售</h3><span class="desc">每日精选双11预售爆品，提前推广锁佣金</span></div>
        <div class="fr">
            <div class="time" data-end-time="1572141600">距结束 <span>37</span> : <span>36</span> : <span>08</span></div>
            <a target="_blank" href="http://www.dataoke.com/atopic/djfudinglizeng?source=hd2" class="new">查看更多</a></div>
    </div>
    <div class="quan_pingche">
        <ul class="ullit">
            <li>
                <div class="goods_item_main">
                    <div class="center">
                        <div class="pic quan_goods_pic" ui-activity-label="" data-size="max"
                             data-all-data="{&quot;id&quot;:&quot;22943175&quot;,&quot;active_id&quot;:&quot;5&quot;,&quot;goods_id&quot;:&quot;22943175&quot;,&quot;images&quot;:null,&quot;type&quot;:&quot;1&quot;,&quot;normal_config&quot;:null,&quot;main_config&quot;:{&quot;sort&quot;:&quot;&quot;,&quot;text_one&quot;:&quot;津贴每满400减50&quot;,&quot;text_two&quot;:&quot;&quot;,&quot;text_three&quot;:&quot;&quot;,&quot;title&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;,&quot;type&quot;:&quot;0&quot;,&quot;url&quot;:&quot;&quot;},&quot;sort&quot;:null,&quot;is_del&quot;:&quot;0&quot;,&quot;create_time&quot;:&quot;2019-10-25 18:13:03&quot;,&quot;d_title&quot;:&quot;Soap保湿滋养黄油身体乳500ml&quot;,&quot;xiaoliang&quot;:&quot;8496&quot;,&quot;huodong_type&quot;:&quot;3&quot;,&quot;istmall&quot;:&quot;1&quot;,&quot;seller_id&quot;:&quot;4041884127&quot;,&quot;market_id&quot;:&quot;6,9&quot;,&quot;jinpaimaijia&quot;:&quot;0&quot;,&quot;is_flagship&quot;:&quot;1&quot;,&quot;is_haitao&quot;:&quot;1&quot;,&quot;shoufa&quot;:&quot;0&quot;,&quot;start_time&quot;:&quot;2019-10-25 00:29:02&quot;,&quot;quan_jine&quot;:&quot;10.00&quot;,&quot;quan_over&quot;:&quot;71&quot;,&quot;hz_quan_over&quot;:&quot;10&quot;,&quot;quan_m_link&quot;:&quot;10&quot;,&quot;quan_num&quot;:&quot;99929&quot;,&quot;quan_time&quot;:&quot;2019-11-11 23:59:59&quot;,&quot;yongjin&quot;:&quot;20.01&quot;,&quot;jiage&quot;:&quot;69.00&quot;,&quot;pic&quot;:&quot;https://img.alicdn.com/imgextra/i4/3027584919/O1CN019lyOgC1mCwoaztyD9_!!3027584919.png&quot;,&quot;tk_zs_id&quot;:&quot;25953645&quot;,&quot;brand_id&quot;:&quot;15729690&quot;,&quot;red_packet&quot;:3.97,&quot;bijia_num&quot;:0,&quot;market_group&quot;:[&quot;6&quot;,&quot;9&quot;]}"
                             data-market_id="6,9"><a href="/item?id=22943175" target="_blank"><img
                                        src="https://img.alicdn.com/imgextra/i4/3027584919/O1CN019lyOgC1mCwoaztyD9_!!3027584919.png_310x310.jpg"
                                        alt=""></a>
                            <div class="but"><a href="javascript:;" ui-collection="" gid="22943175">加入收藏</a><a
                                        href="javascript:;" ui-copy="" gid="22943175">复制文案</a></div>
                            <div class="activity_label">
                                <div class="font01-wrapper"><img class="double-11"
                                                                 src="https://thumbnail.dataoke.com/img/dtk/market/201910/2019102014001687712122.png"><span
                                            class="span-wrapper"><span class="lj">付定立减<i>10元</i></span><span class="dj">再返3.97元</span></span>
                                </div>
                            </div>
                        </div>
                        <a href="/item?id=22943175" target="_blank"><h3 class="title" ui-goods-brand=""
                                                                        data-id="15729690" title="Soap保湿滋养黄油身体乳500ml">
                                Soap保湿滋养黄油身体乳500ml</h3></a>
                        <div class="desc"><span>津贴每满400减50</span></div>
                        <div class="tag_item"><p class="p1"><a target="_blank" href="/item?id=22943175">券后价 <span
                                            class="col-money">¥69</span></a></p>
                            <p class="p2"><a target="_blank" href="/item?id=22943175" title="约13.81元">佣金
                                    <span>20.01%</span></a></p>
                            <p class="p3"><a target="_blank" href="/item?id=22943175">销量 <span>8496</span></a></p></div>
                    </div>
                    <div class="quan_shop" ui-goods-shop="" data-id="25953645">
                        <div class="low">
                            <div class="is_tag"><img src="https://p1static.dataoke.com/web/images/icon/icon_pic_ju.png"
                                                     alt=""><img
                                        src="https://p1static.dataoke.com/web/images/icon/icon_pic_tiaomao.png"
                                        alt=""><img
                                        src="https://p1static.dataoke.com/web/images/icon/icon_pic_haitao.png" alt="">
                            </div>
                            <div class="quan"><span class="quan_icon"><span>券</span><i>10元</i></span></div>
                            <div class="dp"><span>优惠券剩余</span>
                                <sapn class="col-money">99929</sapn>
                                /100000
                            </div>
                            <div class="dp shopName loads">&nbsp;</div>
                            <div class="user shopUser loads">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="quan_row w_1200" style="">
    <div class="tab_bt">
        <div class="fl"><i class="quan_home_icon"><img
                        src="https://p1static.dataoke.com/web/css/quanHome/images/quan_bangdan_tab.png"></i>
            <h3 class="name col_text" style="color:#8B63FF;">精选榜单</h3><span class="desc">用最细微的态度，创造最极致的榜单。</span></div>
        <div class="tablist"><a href="javascript:;" data-type="zh" class="active">综合榜单</a><a href="javascript:;"
                                                                                             data-type="2h">实时销量榜</a><a
                    href="javascript:;" data-type="today">全天销量榜</a><a href="javascript:;" data-type="fav">热推榜</a><a
                    href="javascript:;" data-type="hot_search">买家热搜榜</a><a href="javascript:;" data-type="repurchase"
                                                                           class="last">复购榜</a></div>
        <div class="ov_h"></div>
    </div>
    <div class="quan_bangdan">
        <ul class="ullit">

            <li>
                <div class="goods_item_main">
                    <div class="center">
                        <div class="pic quan_goods_pic"><a target="_blank" href="/item?id=22951675"><img class="lazy"
                                                                                                         src="https://img.alicdn.com/imgextra/i3/880734502/O1CN01iTpIVI1j7xdo3Sh5w_!!880734502.jpg_310x310.jpg"
                                                                                                         data-original="https://img.alicdn.com/imgextra/i3/880734502/O1CN01iTpIVI1j7xdo3Sh5w_!!880734502.jpg_310x310.jpg"
                                                                                                         style="background: rgb(238, 238, 238); display: block;"></a>
                            <div class="but"><a href="javascript:;" ui-collection="" gid="22951675">加入收藏</a><a
                                        href="javascript:;" ui-copy="" gid="22951675">复制文案</a></div>
                        </div>
                        <div class="xiaolaing">新入榜</div>
                        <a target="_blank" href="/item?id=22951675"><h3 class="title" ui-goods-brand=""
                                                                        data-id="147280915" title="【三只松鼠】网红零食大礼包一箱">
                                【三只松鼠】网红零食大礼包一箱</h3></a>
                        <div class="tag_item"><p class="p1"><a target="_blank" href="/item?id=22951675">券后价<span
                                            class="col-money">¥29.9</span></a></p>
                            <p class="p2"><a target="_blank" href="/item?id=22951675" title="约4.49元">佣金<span
                                            class="col-blue">15%</span></a></p></div>
                        <div class="xl_time"><a class="link" target="_blank" href="/top_repurchase">复购榜：近期复购2.2<i
                                        style="font-size:12px;">万</i>件</a></div>
                    </div>
                    <div class="quan_shop" ui-goods-shop="" data-id="25962612">
                        <div class="low">
                            <div class="is_tag"><img src="https://p1static.dataoke.com/web/images/icon/icon_pic_ju.png"
                                                     alt=""><img
                                        src="https://p1static.dataoke.com/web/images/icon/icon_pic_tiaomao.png" alt="">
                            </div>
                            <div class="quan"><span class="quan_icon"><span>券</span><i>5元</i></span></div>
                            <div class="dp"><span>优惠券剩余</span>
                                <sapn class="col-money">96000</sapn>
                                /100000
                            </div>
                            <div class="dp shopName loads">&nbsp;</div>
                            <div class="user shopUser loads">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </li>
            <div class="ov_h"></div>
        </ul>
    </div>
    <a class="new_link" style="display: none;">查<br>看<br>更<br>多</a>
</div>

<div class="quan_row w_1200 quan_pinp" style="">
    <div class="row_left fl">

        <div class="tab_bt">
            <div class="fl"><i class="quan_home_icon"><img
                            src="https://p1static.dataoke.com/web/css/quanHome/images/quan_pq_tab.png"></i>
                <h3 class="name col_text" style=" color: #3A6BED;">品牌优选</h3><span class="desc">大牌合作限时活动，人工精选</span>
            </div>
            <div class="fr"><a target="_blank" href="/brandFeature" class="link_gd">更多活动 <i class="quan_home_icon"></i></a>
            </div>
            <div class="ov_h"></div>
        </div>
        <div class="quan_pinp_goods">
            <div class="pp">
                <div class="pic quan_home_icon"><a target="_blank" href="/featureSingle?id=8598007" class="img"><img
                                src="https://img.alicdn.com/bao/uploaded///img.taobaocdn.com/tps/TB1iYwSOXXXXXX6aXXXwu0bFXXX.png"
                                alt=""></a><a href="/featureSingle?id=8598007" class="name">韩都衣舍限时特卖会 低至5折起</a></div>
                <div class="gz">关注人数 <a target="_blank" href="/featureSingle?id=8598007">2144万</a><br>近期销量 <a
                            target="_blank" href="/featureSingle?id=8598007">6046</a></div>
                <div class="tag">限时特卖</div>
            </div>
            <div class="goods_center">
                <ul class="ullit">

                    <li>
                        <div class="goods_item_main">
                            <div class="center">
                                <div class="pic quan_goods_pic"><a target="_blank" href="/item?id=22903871"><img
                                                class="lazy"
                                                src="https://img.alicdn.com/imgextra/i4/3220506194/O1CN01DkY4e71vctmSfe0F3_!!3220506194.png_310x310.jpg"
                                                data-original="https://img.alicdn.com/imgextra/i4/3220506194/O1CN01DkY4e71vctmSfe0F3_!!3220506194.png_310x310.jpg"
                                                style="background: rgb(238, 238, 238); display: block;"></a>
                                    <div class="but"><a href="javascript:;" ui-collection="" gid="22903871" size="min">收藏</a><a
                                                href="javascript:;" ui-copy="" gid="22903871">复制</a></div>
                                    <h3 class="title" ui-roll=""><span class="list"
                                                                       style="top: -20.9775px;">摇粒绒面料，多色可选</span><span
                                                class="list" style="top: -20.9775px;">商场价158元，现仅需58元</span><span
                                                class="list" style="top: -20.9775px;">2019新款慵懒风</span></h3>
                                    <div class="tag_icon "><i class="quan_home_icon"></i>7.4折</div>
                                </div>
                                <a target="_blank" href="/item?id=22903871" class="title" title="韩都衣舍圆领加绒慵懒风卫衣">韩都衣舍圆领加绒慵懒风卫衣</a>
                                <div class="tag_item"><p class="p1"><a target="_blank" href="/item?id=22903871">券后价
                                            <span class="col-money">¥58</span></a></p>
                                    <p class="p2"><a target="_blank" href="/item?id=22903871" title="约15.08元">佣金 <span>26%</span></a>
                                    </p>
                                    <p class="p3"><a target="_blank" href="/item?id=22903871">销量 <span>236</span></a>
                                    </p></div>
                            </div>
                            <div class="quan_shop" ui-goods-shop="" data-id="25911914">
                                <div class="low">
                                    <div class="is_tag"><img
                                                src="https://p1static.dataoke.com/web/images/icon/icon_pic_tiaomao.png"
                                                alt=""></div>
                                    <div class="quan"><span class="quan_icon"><span>券</span><i>20元</i></span></div>
                                    <div class="dp"><span>优惠券剩余</span>
                                        <sapn class="col-money">19776</sapn>
                                        /20000
                                    </div>
                                    <div class="dp shopName loads">&nbsp;</div>
                                    <div class="user shopUser loads">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <div class="ov_h"></div>
                </ul>
            </div>
        </div>


    </div>
    <div class="row_right fr">
        <div class="quan_layout_row" key="QuanDdq">
            <div class="tab_bt">
                <div class="fl"><i class="quan_home_icon"><img
                                src="https://p1static.dataoke.com/web/css/quanHome/images/quan_ddq_tab.png"></i>
                    <h3 class="name col_text" style=" color: #EE4866;">咚咚抢</h3><span class="desc"> <span
                                class="time_cc">17点场</span> 疯抢中</span></div>
                <div class="fr"><a href="/ddq" target="_blank" class="link_gd">所有场次 <i class="quan_home_icon"></i></a>
                </div>
                <div class="ov_h"></div>
            </div>
            <ul class="ullit">
                <li>
                    <div class="goods_item_main">
                        <div class="center">
                            <div class="pic quan_goods_pic"><a target="_blank" href="/item?id=22955647"><img
                                            class="lazy"
                                            src="https://img.alicdn.com/imgextra/i2/2794034170/O1CN01TJdR1w1gfuA6XM6re_!!2794034170.jpg_310x310.jpg"
                                            data-original="https://img.alicdn.com/imgextra/i2/2794034170/O1CN01TJdR1w1gfuA6XM6re_!!2794034170.jpg_310x310.jpg"
                                            style="background: rgb(238, 238, 238); display: block;"></a>
                                <div class="but"><a href="/item?id=22955647" ui-collection="" gid="22955647" size="min">收藏</a><a
                                            href="javascript:;" ui-copy="" gid="22955647">复制</a></div>
                            </div>
                            <div class="nr">
                                <div class="info"><a target="_blank" href="/item?id=22955647"><h3 class="title"
                                                                                                  title="秋冬季韩版潮牌NY棒球帽休闲百搭"
                                                                                                  ui-goods-brand=""
                                                                                                  data-id="4528356097">
                                            秋冬季韩版潮牌NY棒球帽休闲百搭</h3></a>
                                    <div class="desc" title="多款颜色任你挑选"><span>多款颜色任你挑选</span></div>
                                </div>
                                <div class="tag_item"><p class="p1"><a target="_blank" href="/item?id=22955647">券后价
                                            <span class="col-money">¥9.9</span></a></p>
                                    <p class="p2"><a target="_blank" href="/item?id=22955647" title="约3.96元">佣金 <span>40%</span></a>
                                    </p>
                                    <p class="p3"><a target="_blank" href="/item?id=22955647">销量 <span>1124</span></a>
                                    </p></div>
                            </div>
                        </div>
                        <div class="quan_shop" ui-goods-shop="" data-id="25966886">
                            <div class="low">
                                <div class="is_tag"><img
                                            src="https://p1static.dataoke.com/web/images/icon/icon_pic_tiaomao.png"
                                            alt=""></div>
                                <div class="quan"><span
                                            class="quan_icon"><span>券</span><i>15元</i></span><span>优惠券剩余</span>
                                    <sapn class="col-money">10000</sapn>
                                    /10000
                                </div>
                                <div class="dp shopName loads">&nbsp;</div>
                                <div class="user shopUser loads">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                    <div class="ov_h"></div>
                </li>
            </ul>
            <div class="time_bb">距<a href="/ddq?time=2600" target="_blank">下一场</a>开始还有 <span>03</span> : <span>29</span>
                : <span>35</span></div>
        </div>
    </div>
    <div class="ov_h"></div>
</div>


<!-- 直播 -->
<div class="quan_zhibo w_1200"><h3 class="tab_h3"><span>直<i class="quan_home_icon"></i>播<i
                    class="quan_home_icon"></i>精<i class="quan_home_icon"></i>选</span></h3>
    <div class="tab_desc">必推爆款，实时更新</div>
    <div class="goods_item">
        <div class="wrapper">

            <div class="goods-list clearfix"

                <div data-id="22942188" id="goods-items_22942188" data_goodsid="601077546695" data-huodong_type="1"
                     data-sellerid="773114844" class="goods-item ">
                    <div class="goods-item-content script-other-no-use">


                        <a class="play-video-a" target="_blank" href="/item?nav_type=5&amp;id=22942188"></a>
                        <div class="goods-img">

                            <span class="goods-new new-goods-pic"></span>


                            <div class="target-panel-div card-div-panel">





                <span class="new-labels rank need-hide">
                                            <div class="label-cent">
                                                <div class="fullname">上榜<i class="ico"></i></div>
											    <div class="shorthand bang-d">榜</div>
                                            </div>

                                            <ul class="rank-cent">
                                               <li class="type1">
                                                   <h3>实时销量榜</h3>
                                                   <p class="zh">综合 <i>No.<b></b></i></p>
                                                   <p class="lm"><b class="name"></b> <i class="num-block">No.<b
                                                                   class="num"></b></i></p>
                                               </li>
                                                <li class="type2">
                                                   <h3>全天销量榜</h3>
                                                   <p class="zh">综合 <i>No.<b></b></i></p>
                                                   <p class="lm"><b class="name"></b> <i class="num-block">No.<b
                                                                   class="num"></b></i></p>
                                               </li>
                                                <li class="type3">
                                                   <h3>热推榜</h3>
                                                    <!--                                               <p class="zh">综合 <i>No.<b></b></i></p>-->
                                                   <p class="lm"><b class="name"></b> <i class="num-block">No.<b
                                                                   class="num"></b></i></p>
                                               </li>
                                            </ul>
                                        </span>

                            </div>

                            <a href="/item?nav_type=5&amp;id=22942188" target="_blank" ui-mta="clickStat"
                               data-event="click" data-mta-key="xpk_1005"
                               data-config="{gid:'22942188',cid:'10',price:'29',coupon:'20',title:'封面链接'}">
                                <img class="lazy" data-dtk-satc="{gid:'22942188',desc:'20_1',name:'ListGoodsImgEvent'}"
                                     src="https://img.alicdn.com/imgextra/i3/850469616/O1CN01UspiMK2KuB8IWfIqp_!!850469616.jpg_310x310.jpg"
                                     data-original="https://img.alicdn.com/imgextra/i3/850469616/O1CN01UspiMK2KuB8IWfIqp_!!850469616.jpg_310x310.jpg"
                                     style="background: rgb(238, 238, 238); display: inline;">
                            </a>
                            <span id="quan_add_u_22942188" data-gid="22942188" class="fl quan_add_u go_info"
                                  data-config="{gid:'22942188',cid:'10',price:'29',coupon:'20',title:'加入收藏'}"
                                  data-mtakey="xpk_1005" data-page="quanPage"
                                  data-dtk-satc="{gid:'22942188',type:'20_1',desc:'加入收藏',name:'ListGoodsEvent'}"><!--title="点击加入推广"-->
                                <!--<p>加入推广</p><span></span>-->
												<p>加入收藏</p><span></span>
											</span>
                            <div class="goods-img-line"></div>
                            <div class="copy_text fr" ui-mta="clickStat" data-event="click" data-mta-key="xpk_1005"
                                 data-huodong_type="1" data-is_d_p_fine="0"
                                 data-config="{gid:'22942188',cid:'10',price:'29',coupon:'20',title:'复制文案'}"
                                 data-dtk-satc="{gid:'22942188',type:'20_1',desc:'复制文案',name:'ListGoodsEvent'}">复制文案
                            </div>
                        </div>
                        <div class="goods-info">
										<span class="goods-tit">
											<a href="/item?nav_type=5&amp;id=22942188" target="_blank"
                                               title=" 【浪莎】37度恒温自发热保暖内衣套装"
                                               data-dtk-satc="{gid:'22942188',desc:'20_1',name:'ListGoodsBrandClickEvent'}"
                                               ui-mta="clickStat" data-event="click" data-mta-key="xpk_1005"
                                               data-config="{gid:'22942188',cid:'10',price:'29',coupon:'20',title:'标题链接'}"><!--remove the class="quan_title" attribute for this "a" tag-->



												<i data-dtk-satc="{gid:'22942188',desc:'20_1',name:'ListGoodsBrandClickEvent'}"
                                                   class="brand_in_check new-brand-name brand" data-brand_id="3227274"
                                                   title="点击查看更多该品牌商品">浪莎</i>
                                                <span class="tit-text" brand-id="3227274">37度恒温自发热保暖内衣套装</span>

											</a>
										</span>
                            <div class="goods-slider" title="优惠券已领取  1  张">
                                <span class="slider"><em data-width="0.001%"></em></span>
                            </div>

                            <!--新版样式，暂隐藏-->
                            <div class="goods-info-1" style="display: none">
                                <div class="">
										<span>
										29										</span>
                                    <label>券后价</label>
                                </div>
                                <div class="">
                                    <span>30%</span>
                                    <label>营销计划</label>
                                </div>
                                <div class="">
                                    <span>8.7</span>
                                    <label>佣金</label>
                                </div>
                            </div>


                            <div class="goods-qjy">
                                <div class="goods-price">
                                    <span>券后价</span>
                                    <p><b><i class="rmb-style">￥</i>29 </b>
                                    </p>
                                </div>
                                <div class="goods-yj" title="佣金 8.7 元">
                                    <span>营销计划</span>
                                    <p>30<b>%</b></p>
                                </div>
                            </div>


                            <div class="goods-sale clearfix">
                                <div class="goods-quan fl">
                                    <p>券<b><i class="rmb-style">￥</i>20</b></p>
                                </div>
                                <span class="fl">销量<b>5948</b></span>
                                <div class="tag clearfix">
                                    <i class="tag-tmall" title="天猫"></i></div>
                            </div>

                            <div class="type">
                                <span class="margin-num">优惠券剩余：<b>99999</b>/100000</span>
                                <span class="margin-num qlist-shop">店铺：<a class="gogo-search" target="_blank"
                                                                          href="/search?keywords=优迅服饰专营店"
                                                                          title="优迅服饰专营店">优迅服饰专营店</a></span>
                            </div>

                            <div class="goods-author"><i class="info"></i><span>放单人：</span><span>阿拉淘联盟</span></div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="quan_page" style="">
                <div class="quan_page_main" style="	margin: 0 auto;display: 	inline-block;	">
                    <div class="page_total">共 <b>105806</b> 条</div>
                    <span>首页</span><span><b>&lt; </b> 上一页</span> <span class="cur">1</span> <a
                            href="/list_data?_=1572006523360&amp;page=2">2</a> <a
                            href="/list_data?_=1572006523360&amp;page=3">3</a> <a
                            href="/list_data?_=1572006523360&amp;page=4">4</a><a
                            href="/list_data?_=1572006523360&amp;page=2">下一页 <b> &gt;</b></a><a
                            href="/list_data?_=1572006523360&amp;page=900">尾页</a>
                    <div class="page_ci">页次：<b><font>1</font>/900 </b>页（<b>20</b>条/页）
                    </div>

                    <input id="url" value="/list_data?_=1572006523360&amp;page=" type="hidden">

                    <span class="page_link"><a href="/qlist" target="_blank">查看全部&gt;</a></span></div>
            </div>


        </div>
    </div>
</div>

<script>
    var $static_url = 'https://p1static.dataoke.com';
</script>
<div class="side-bar">
    <div class="side-bar-list">
        <!-- 今日 -->
        <div class="side-bar-herald side-bar-item">
            <a href="/help/?id=5&cid=397" target='_blank'><i></i><em>客服中心</em></a>
        </div>
        <!-- 预告 -->
        <div class="side-bar-feedback side-bar-item">
            <a href="/fk/?type=1" target='_blank'><i></i><em>意见反馈</em></a>
        </div>
        <!-- 反馈 -->
        <div class="side-bar-favorite side-bar-item">
            <a href="/pmc/favorites.html" target='_blank'><i></i><em>我的收藏</em></a>
        </div>
        <div class="side-bar-top side-bar-item">
            <a href="javascript:void(0)" class="scrollTop"><i></i><em>返回顶部</em></a>
        </div>
    </div>
</div>


<div class="com_footer">
    <div class="footer_link">
        <div class="container-wrapper clearfix">
            <dl>
                <dt>关于我们</dt>
                <dd><a target="_blank" href="/about-us.html">公司简介</a></dd>
                <dd><a target="_blank" href="/about-us.html#list2">企业文化</a></dd>
                <dd><a target="_blank" href="/about-us.html#list3">合作联系</a></dd>
                <dd><a target="_blank" href="/about-us.html#list4">加入我们</a></dd>
            </dl>
            <dl>
                <dt>选品服务</dt>
                <dd><a target="_blank" href="/xp">选品库</a></dd>
                <dd><a target="_blank" href="/brandFeature">品牌优选</a></dd>
                <dd><a target="_blank" href="/top_sell">实时榜单</a></dd>
                <dd><a target="_blank" href="/ddq">咚咚抢</a></dd>
            </dl>
            <dl>
                <dt>导购推广</dt>
                <dd><a target="_blank" href="/cms-introduce.html">CMS网站</a></dd>
                <dd><a target="_blank" href="/app-introduce.html">导购APP</a></dd>
                <dd><a target="_blank" href="/wap-introduce.html">每日精选</a></dd>
                <dd><a target="_blank" href="/wap-introduce.html">9块9包邮</a></dd>
            </dl>
            <dl>
                <dt>自媒体中心</dt>
                <dd><a target="_blank" href="/tk_zs/media.html">自媒体入驻</a></dd>
                <dd><a target="_blank" href="/tk_zs/media-ranking.html">商家合作</a></dd>
            </dl>
            <dl>
                <dt>流量变现</dt>
                <dd><a target="_blank" href="http://bx.dataoke.com/">网站流量变现</a></dd>
                <dd><a target="_blank" href="http://bx.dataoke.com/xueyuan.html">变现学院</a></dd>
            </dl>
            <dl>
                <dt>开放平台</dt>
                <dd><a target="_blank" href="/pmc/openapi.html">开放平台</a></dd>
                <dd><a target="_blank" href="/pmc/api-market.html">API市场</a></dd>
                <dd><a target="_blank" href="/pmc/plan-goods.html">选品库方案</a></dd>
                <dd><a target="_blank" href="/pmc/plan-app.html">移动导购方案</a></dd>
            </dl>
            <dl>
                <dt>帮助中心</dt>
                <dd><a target="_blank" href="http://help.dataoke.com/hc/kb/section/1047165/">选品常见问题</a></dd>
                <dd><a target="_blank" href="http://help.dataoke.com/hc/kb/section/1047167/">导购常见问题</a></dd>
                <dd><a target="_blank" href="/hz_tk/gz/">自媒体入驻规则</a></dd>
                <dd><a target="_blank" href="http://bx.dataoke.com/xueyuan.html">流量变现学院</a></dd>
                <dd><a target="_blank" href="/pmc/open-gz.html?cid=3">开放平台帮助</a></dd>
            </dl>
            <dl class="code">
                <dt>
                    <div class="clearfix">
                        <div class="fl">
                            <i class="h_icon h_iocn_zx"></i>
                        </div>
                        <div class="fl" style="margin-left: 10px;">
                            <div class="title">
                                在线咨询
                            </div>
                            <p>周一到周日 9:00-18:00</p>
                        </div>
                    </div>
                </dt>
                <dd><a target="_blank"
                       href="http://help.dataoke.com/kchat/34187?from=%E5%94%AE%E5%89%8D&group=1012035&forum_ids=1044670%2C1045151%2C1045299%2C1045301%2C1045302%2C1045366%2C1045172%2C1045365%2C1045306%2C1045355%2C1045149%2C1045159%2C1045156%2C1045157%2C1045305&category_ids=42501231%2C42501232%2C42501233%2C42501234%2C42501235%2C42501236%2C42501237%2C42501238%2C42501252%2C42501253%2C42501254%2C42501255%2C42501256">售前咨询</a>
                </dd>
                <dd><a target="_blank"
                       href="http://help.dataoke.com/kchat/34187?from=%E5%94%AE%E5%90%8E&group=1012036&forum_ids=1045166%2C1044670%2C1045151%2C1045299%2C1045301%2C1045302%2C1045366%2C1045172%2C1045365%2C1045306%2C1045355%2C1045149%2C1045159%2C1045156%2C1045157%2C1045305&category_ids=42501231%2C42501232%2C42501233%2C42501234%2C42501235%2C42501236%2C42501237%2C42501238%2C42501252%2C42501253%2C42501254%2C42501255%2C42501256#/chatbox?robot=1&t=1520827118944">售后咨询</a>
                </dd>
            </dl>
        </div>
        <div class="bottom">
            © CopyRight 2011-2019&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;联盟 <a target="_blank" href="/">dataoke.com</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;蜀ICP备15025833号&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;增值电信业务经营许可证：川B2-20170282
        </div>
    </div>
</div>
<div class="ov_h">
</div>
@include('main.footer')

