
@extends('layout.index')
@section('content')
    <div id="content">

        <h1>我关注的阅读动态</h1>

        <div class="grid-16-8 clearfix">

            <div class="article">


                <div id="db-timeline-hd" class="clearfix">
                    <ul class="menu-list">
                        <li class="on ">
                            <a href="?ftype=">全部</a>
                        </li>

                    </ul>
                </div>

                <div id="miniblog" class="feed_mod">
                    @foreach($dongtai as $k=>$v)

                    <ul class="mbt">

                        <li style="margin-top:10px;border-bottom:1px solid #ddd;">
                            <h2 style="border-bottom: 0px;font-size:13px;margin-bottom: 5px;">{{$v['created_at']}}</h2>
                        </li>








                        <li   class="mbtl" >
                            <a href="/mine/{{$v->User->id}}">
                                <img src="{{$v->User->profile}}" alt="{{$v->User->username}}" title="{{$v->User->username}}" />
                            </a>
                        </li>


                        <li class="mbtr">


                            <div class="feed_title">
                                <a href="/mine/{{$v->User->id}}">{{$v->User->username}}</a>
                                @if($v->status == 1)
                                在读
                                @endif
                                @if($v->status == 2)
                                    想读
                                @endif
                                @if($v->status == 3)
                                    读过
                                @endif
                            </div>

                            <div class="feed_con">

                                <ul class="mod_book_list">

                                    <li>
                                        <div class="mod_book">
                                            <div class="mod_book_pic" style="float: left">
                                                <a href="/subject/{{$v->Books->id}}">
                                                    <img class="m_sub_img" src="{{$v->Books->img}}"  width="67" height="97"/>
                                                </a>

                                            <div class="mod_book_con" style="float: right;margin-left: 20px;" >
                                                <div class="mod_book_name">
                                                    <a href="/subject/{{$v->Books->id}}">{{$v->Books->title}}</a>
                                                </div>

                                                <div class="mod_book_data">

                                                  {{$v->Books->press}}
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
            @endforeach















                </div>
            </div>
            <div class="aside">

                <!-- douban ad begin -->
                <div id="dale_book_updates_top_right"></div>
                <!-- douban ad end -->


                <div class="contacts-merged-announcement">
                    <p>
                        阅读动态改版了，你能在这儿看到所有友邻的阅读动态；豆瓣还帮你把之前关注的读书人加为豆瓣友邻。查看<a href="https://www.douban.com/contacts/list">我的豆瓣友邻</a>。
                    </p>
                </div>

                <div class="mod">



                    <h2>
                        <span class="">阅读动态是怎样生成的？</span>
                        &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;

                    </h2>


                    <p class="pl">
                        阅读动态是你关注的友邻在豆瓣读书的收藏、书评笔记以及推荐的资讯，同时你关注的作者/译者小站的广播也会出现在这里。
                    </p>
                </div>













            </div>
            <div class="extra">

                <!-- douban ad begin -->
                <div id="dale_book_updates_bottom_banner"></div>
                <!-- douban ad end -->

            </div>
        </div>
    </div>

    <script type="text/javascript">
        Do(function() {
            // 不再提醒

            window.DOUBAN_SITE_URL = 'https://www.douban.com';
            Douban.init_delete_reply_notify=function(b){var a=function(h){h.preventDefault();var d=$(h.target);var i=d[0].href.split("#")[1];var c=(window.DOUBAN_SITE_URL||"")+"/j/reply_notify/remove_notify?id="+i;$.ajax({url:c,dataType:"jsonp"});var f=d.closest(".item-req");if($.contains($(".top-nav-reminder")[0],f[0])){f=f.parent();var g=f.siblings().length;f.fadeOut(function(){f.remove()});if(g===0){f.closest(".bd").find(".no-new-notis").show()}}else{f.fadeOut()}};if(b.type==="click"){a(b)}else{$(b).click(a)}};
            Douban.init_discard_notify=function(b){var a=function(i){i.preventDefault();var c=(window.DOUBAN_SITE_URL||"")+"/j/notification/discard";var f=$(i.target);var d=f[0].name;$.get(c,{id:d,ck:get_cookie("ck")},function(e){},"jsonp");var g=f.closest(".item-req");if($.contains($(".top-nav-reminder")[0],g[0])){g=g.parent();var h=g.siblings().length;g.fadeOut(function(){g.remove()});if(h===0){g.closest(".bd").find(".no-new-notis").show()}}else{g.fadeOut()}};if(b.type==="click"){a(b)}else{$(b).click(a)}};
            var current_noty_num=current_doumail_num=0;function updateNotyNum(b){current_noty_num=b;var a=$("#db-global-nav .top-nav-reminder");if(!b){a.find(".num").remove();return}var c=a.find(".num span");if(!c.length){a.append('<span class="num"><span>'+b+"</span><i></i></span>")}else{c.html(b)}if(b>0&&b<10){a.css("margin-right","5px")}else{if(b>10){a.css("margin-right","15px")}}}function updateDoumailNum(b){current_doumail_num=b;var c=$("#top-nav-doumail-link");var a=c.find("em");if(!b){a.remove();return}var d="("+b+")";if(!a.length){c.append("<em>"+d+"</em>")}else{a.html(d)}}function addCheckNotyLog(){$("#top-nav-notimenu").data("from_push","Y")}function addCheckDoumailLog(c){var b=document.getElementById("top-nav-doumail-link");b.onclick=function(){moreurl(this,{from:"check_doumail_from_push",uid:c})}}function showDesktopNotification(c){if(!window.Notification){return}if(!c.num){return}var b=get_cookie("enable_push_desktop_noty");b=b=="1";if(!b){return}var a="";if(c.type=="notification"){a="你收到一个新提醒"}else{if(c.type=="doumail"){a="你收到一封新豆邮"}else{return}}var d=new Notification("豆瓣",{body:a,tag:c.id,icon:"https://img3.doubanio.com/pics/icon/dou36.png"});d.onclick=function(){window.focus();this.close()};d.onshow=function(){setTimeout(function(){d.close()},3000)}}function get_auth_token(a){$.ajax({url:DOUBAN_SITE_URL+"/j/push/get_token_with_ts",dataType:"jsonp",success:function(b){a(b.token,b.timestamp)}})}var timer=null;function startSyncNotyNumsCrossTabs(){clearTimeout(timer);timer=setTimeout(function(){var b=parseInt(get_cookie("push_noty_num")||"0",10),a=parseInt(get_cookie("push_doumail_num")||"0",10);if(b!=current_noty_num){updateNotyNum(b)}if(a!=current_doumail_num){updateDoumailNum(a)}if(!b&&!a){clearTimeout(timer)}else{timer=setTimeout(arguments.callee,1500)}},1500)}var retry_times=0,max_retry=50,retry_interval_unit=1000*3;function connectSSE(b,a,g){if(!window.EventSource){return}var d="notification:user:"+b,c=(b+"_"+g)+":"+a,i="https://push.douban.com:4394/sse?channel="+d+"&auth="+c;if(location.protocol=="https:"){i="https://push.douban.com:4397/sse?channel="+d+"&auth="+c}var f=null;try{f=new EventSource(i)}catch(h){return}f.addEventListener("open",function(){retry_times=0},false);f.addEventListener("error",function(j){if(this.readyState==EventSource.CLOSED||this.readyState==EventSource.CONNECTING){f.close();f=null;setTimeout(function(){retry_times+=1;if(retry_times<max_retry){get_auth_token(function(e,k){connectSSE(b,e,k)})}},retry_times*retry_interval_unit)}},false);f.addEventListener("message",function(k){var j=JSON.parse(k.data);if(j.type=="notification"){updateNotyNum(j.num);addCheckNotyLog();set_cookie({push_noty_num:j.num})}else{if(j.type=="doumail"){updateDoumailNum(j.num);addCheckDoumailLog(b);set_cookie({push_doumail_num:j.num})}}startSyncNotyNumsCrossTabs();showDesktopNotification(j)},false)};

            var notimenu = $('#top-nav-notimenu');
            notimenu.bind('moreitem:show', function() {
                $.ajax({
                    url: 'https://www.douban.com/j/notification/nav_pop',
                    data: {
                        ck: get_cookie('ck'),
                        k: '148930326:516ecf48d7d94601c7f017a89835348bc748d871',
                        from_push: notimenu.data('from_push')
                    },
                    dataType: 'jsonp',
                    success: function(e) {
                        if (e.r) {
                            return;
                        }
                        notimenu.html(e.s);
                        if (e.n === 0) {
                            $('#db-global-nav .top-nav-reminder .num').remove();
                        } else {
                            $('#db-global-nav .top-nav-reminder .num span').html(e.n);
                        }
                        set_cookie({push_noty_num: e.n});
                        if (window.load_event_monitor) {
                            load_event_monitor($('#db-global-nav'));
                        }
                    }
                });
            });

            $(function() {
                $.ajax({
                    url: 'https://www.douban.com/j/notification/num',
                    dataType: 'jsonp',
                    success: function(r) {
                        updateNotyNum(r.num);
                    }
                });
                $.ajax({
                    url: 'https://www.douban.com/j/doumail/num',
                    dataType: 'jsonp',
                    success: function(r) {
                        updateDoumailNum(r.num);
                    }
                });
            });


            connectSSE('148930326', 'b068281f20ecb06128a35a33b9b4512f91afa2d5', '1469799387');
            set_cookie({
                push_noty_num: 0,
                push_doumail_num: 0
            });

        });
    </script><script type="text/javascript" src="https://img3.doubanio.com/misc/mixed_static/1950fbadab5c2c46.js"></script>
    <!-- mako -->

    <script type="text/javascript">
        var _paq = _paq || [];
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var p=(('https:' == document.location.protocol) ? 'https' : 'http'), u=p+'://fundin.douban.com/';
            _paq.push(['setTrackerUrl', u+'piwik']);
            _paq.push(['setSiteId', '100001']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript';
            g.defer=true;
            g.async=true;
            g.src=p+'://s.doubanio.com/dae/fundin/piwik.js';
            s.parentNode.insertBefore(g,s);
        })();
    </script>

    <script type="text/javascript">
        var setMethodWithNs = function(namespace) {
            var ns = namespace ? namespace + '.' : ''
                    , fn = function(string) {
                if(!ns) {return string}
                return ns + string
            }
            return fn
        }

        var gaWithNamespace = function(fn, namespace) {
            var method = setMethodWithNs(namespace)
            fn.call(this, method)
        }

        var _gaq = _gaq || []
                , accounts = [
            { id: 'UA-7019765-1', namespace: 'douban' }
            , { id: 'UA-7019765-16', namespace: '' }
        ]
                , gaInit = function(account) {
            gaWithNamespace(function(method) {
                gaInitFn.call(this, method, account)
            }, account.namespace)
        }
                , gaInitFn = function(method, account) {
            _gaq.push([method('_setAccount'), account.id])


            _gaq.push([method('_addOrganic'), 'google', 'q'])
            _gaq.push([method('_addOrganic'), 'baidu', 'wd'])
            _gaq.push([method('_addOrganic'), 'soso', 'w'])
            _gaq.push([method('_addOrganic'), 'youdao', 'q'])
            _gaq.push([method('_addOrganic'), 'so.360.cn', 'q'])
            _gaq.push([method('_addOrganic'), 'sogou', 'query'])
            if (account.namespace) {
                _gaq.push([method('_addIgnoredOrganic'), '豆瓣'])
                _gaq.push([method('_addIgnoredOrganic'), 'douban'])
                _gaq.push([method('_addIgnoredOrganic'), '豆瓣网'])
                _gaq.push([method('_addIgnoredOrganic'), 'www.douban.com'])
            }

            if (account.namespace === 'douban') {
                _gaq.push([method('_setDomainName'), '.douban.com'])
            }

            _gaq.push([method('_setCustomVar'), 1, 'responsive_view_mode', 'desktop', 3])

            _gaq.push([method('_setCustomVar'), 2, 'login_status', '1', 2]);

            _gaq.push([method('_trackPageview')])
        }

        for(var i = 0, l = accounts.length; i < l; i++) {
            var account = accounts[i]
            gaInit(account)
        }


        ;(function() {
            var ga = document.createElement('script');
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            ga.setAttribute('async', 'true');
            document.documentElement.firstChild.appendChild(ga);
        })()
    </script>

@endsection