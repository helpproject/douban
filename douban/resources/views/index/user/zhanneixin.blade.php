@extends('layout.index')
@section('content')
    <div id="wrapper">
    <div id="content">

        <h1>与Loading…💤的豆邮</h1>

        <div class="grid-16-8 clearfix">


            <div class="article">

                <div class="doumail-hd">
                    发起于 2016-07-29 21:04
                </div>

                <div class="doumail-bd">











                    <div class="split-line"><i>2016-07-29</i></div>

                    <div class="chat"  data="1157035134">

                        <div class="info">
                            <span class="time">21:04</span>
                        </div>


                        <div class="pic">
                            <a href="https://www.douban.com/people/148930326/">
                                <img src="{{$user->profile}}" alt="ss">
                            </a>
                        </div>
                        <div class="content">
                            <div class="sender">
                                <a href="https://www.douban.com/people/148930326/">ss</a>
                            </div>


                            <p>dsadasdsa</p>

                        </div>

                        <div class="operations">
                            <a href="#" data-mid="1157035134" class="lnk-delete">删除</a>
                        </div>
                    </div>


                    <div class="chat"  data="1157036723">

                        <div class="info">
                            <span class="time">21:05</span>
                        </div>


                        <div class="pic">
                            <a href="https://www.douban.com/people/147942680/">
                                <img src="https://img3.doubanio.com/icon/u147942680-1.jpg" alt="Loading…💤">
                            </a>
                        </div>
                        <div class="content">
                            <div class="sender">
                                <a href="https://www.douban.com/people/147942680/">Loading…💤</a>
                            </div>


                            <p>asdsadsadas</p>

                        </div>

                        <div class="operations">
                            <a href="#" data-mid="1157036723" class="lnk-delete">删除</a>
                        </div>
                    </div>


                    <div class="chat"  data="1157042223">

                        <div class="info">
                            <span class="time">21:10</span>
                        </div>


                        <div class="pic">
                            <a href="https://www.douban.com/people/148930326/">
                                <img src="https://img1.doubanio.com/icon/user_normal.jpg" alt="ss">
                            </a>
                        </div>
                        <div class="content">
                            <div class="sender">
                                <a href="https://www.douban.com/people/148930326/">ss</a>
                            </div>


                            <p>ytrrt</p>

                        </div>

                        <div class="operations">
                            <a href="#" data-mid="1157042223" class="lnk-delete">删除</a>
                        </div>
                    </div>


                    <div class="chat" id="status-unread-anchor" data="1157045892">

                        <div class="info">
                            <span class="time">21:13</span>
                        </div>


                        <div class="pic">
                            <a href="https://www.douban.com/people/147942680/">
                                <img src="https://img3.doubanio.com/icon/u147942680-1.jpg" alt="Loading…💤">
                            </a>
                        </div>
                        <div class="content">
                            <div class="sender">
                                <a href="https://www.douban.com/people/147942680/">Loading…💤</a>
                            </div>


                            <p>ghfhgf</p>

                        </div>

                        <div class="operations">
                            <a href="#" data-mid="1157045892" class="lnk-delete">删除</a>
                        </div>
                    </div>




                    <div class="doumail-reply">
                        <form id="doumail-reply-form" method="post"><div style="display:none;"><input type="hidden" name="ck" value="F4rO"/></div>
                            <div class="item">
                                <textarea name="m_text" rows="10" cols="80" autocomplete="off"></textarea>
                            </div>
                            <div class="item-submit">
            <span>
              豆瓣App现已支持发图了，
              <a href="https://douban.com/doubanapp/frodo" target="_blank">马上去试试</a>
            </span>&nbsp;&nbsp;
                                <span class="bn-flat"><input type="submit" name="m_reply" value="回应"></span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="doumail-ft">
                    <form method="post" onsubmit="return isConfirmed;"><div style="display:none;"><input type="hidden" name="ck" value="F4rO"/></div>
                        <span class="warn">近期有帐号冒充豆瓣官方发布 “钓鱼” 信息，非<strong>豆瓣系统豆邮</strong>请勿轻信。</span>
                        <input type="submit" name="m_spam" value="移至垃圾箱" onclick="isConfirmed = true"/>
                        <input type="submit" name="m_delete" value="删除" onclick="isConfirmed = confirm('将删除整个对话, 是否确定?')"/>
                    </form>
                </div>

            </div>
            <div class="aside">

                <p class="pl2"><a href="/doumail/">&gt; 返回我的豆邮</a></p>

                <p class="pl2"><a href="https://www.douban.com/people/147942680/">&gt; 去Loading…💤的主页</a></p>
                <br/><br/>
                <p class="pl2"><a data-sender_id="147942680" data-sender_name="Loading…💤" href="javascript:void(0)" id="add-to-blacklist">&gt; 将Loading…💤列入我的黑名单</a></p>

            </div>
            <div class="extra">

            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://img3.doubanio.com/misc/mixed_static/350b6f8e4c469352.js"></script><script type="text/javascript">
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


            connectSSE('148930326', '6630ddb2ce8d2a00e6ea28e03ca7d006cc648f0f', '1469844752');
            set_cookie({
                push_noty_num: 0,
                push_doumail_num: 0
            });

        });
    </script><script type="text/javascript" src="https://img3.doubanio.com/misc/mixed_static/118ef189be4b1540.js"></script>

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
            g.src=p+'://img3.doubanio.com/dae/fundin/piwik.js';
            s.parentNode.insertBefore(g,s);
        })();
    </script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-7019765-1']);
        _gaq.push(['_setCampNameKey', 'dcn']);
        _gaq.push(['_setCampSourceKey', 'dcs']);
        _gaq.push(['_setCampMediumKey', 'dcm']);
        _gaq.push(['_setCampTermKey', 'dct']);
        _gaq.push(['_setCampContentKey', 'dcc']);
        _gaq.push(['_addOrganic', 'baidu', 'word']);
        _gaq.push(['_addOrganic', 'soso', 'w']);
        _gaq.push(['_addOrganic', '3721', 'name']);
        _gaq.push(['_addOrganic', 'youdao', 'q']);
        _gaq.push(['_addOrganic', 'so.360.cn', 'q']);
        _gaq.push(['_addOrganic', 'vnet', 'kw']);
        _gaq.push(['_addOrganic', 'sogou', 'query']);
        _gaq.push(['_addIgnoredOrganic', '豆瓣']);
        _gaq.push(['_addIgnoredOrganic', 'douban']);
        _gaq.push(['_addIgnoredOrganic', '豆瓣网']);
        _gaq.push(['_addIgnoredOrganic', 'www.douban.com']);
        _gaq.push(['_setDomainName', '.douban.com']);


        _gaq.push(['_setCustomVar', 1, 'responsive_view_mode', 'desktop', 3]);

        _gaq.push(['_trackPageview']);
        _gaq.push(['_trackPageLoadTime']);
        _gaq.push(['_setVar', '14893']);

        window._ga_init = function() {
            var ga = document.createElement('script');
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            ga.setAttribute('async', 'true');
            document.documentElement.firstChild.appendChild(ga);
        };
        if (window.addEventListener) {
            window.addEventListener('load', _ga_init, false);
        } else {
            window.attachEvent('onload', _ga_init);
        }
    </script>
@endsection