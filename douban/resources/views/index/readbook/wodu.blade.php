@extends('layout.index')


@section('content')
    <script>!function(f){var h=function(o,n,m){var k=new Date(),j,l;n=n||30;m=m||"/";k.setTime(k.getTime()+(n*24*60*60*1000));j="; expires="+k.toGMTString();for(l in o){f.cookie=l+"="+o[l]+j+"; path="+m}},d=function(m){var l=m+"=",o,n,j,k=f.cookie.split(";");for(n=0,j=k.length;n<j;n++){o=k[n].replace(/^\s+|\s+$/g,"");if(o.indexOf(l)==0){return o.substring(l.length,o.length).replace(/\"/g,"")}}return null},e=f.write,b={"douban.com":1,"douban.fm":1,"google.com":1,"google.cn":1,"googleapis.com":1,"gmaptiles.co.kr":1,"gstatic.com":1,"gstatic.cn":1,"google-analytics.com":1,"googleadservices.com":1},a=function(l,k){var j=new Image();j.onload=function(){};j.src="https://www.douban.com/j/except_report?kind=ra022&reason="+encodeURIComponent(l)+"&environment="+encodeURIComponent(k)},i=function(k){try{e.call(f,k)}catch(j){e(k)}},c=/<script.*?src\=["']?([^"'\s>]+)/ig,g=/http:\/\/(.+?)\.([^\/]+).+/i;f.writeln=f.write=function(k){var j=c.exec(k),l;if(!j){i(k);return}l=g.exec(j[1]);if(!l){i(k);return}if(b[l[2]]){i(k);return}if(d("hj")==="tqs"){return}a(j[1],location.href);h({hj:"tqs"},1);setTimeout(function(){location.replace(location.href)},50)}}(document);</script>


    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="Sun, 6 Mar 2005 01:00:00 GMT">

    <script>var _head_start = new Date();</script>

    <link href="/index/Css/master.css" rel="stylesheet" type="text/css">

    <style type="text/css">

        .item .title { background-color: #f8f8f0; }
        .tag-list .on { background-color: #7f9981; }
    </style>
    <script src="/index/Scripts/jquery.js"></script>
    <script src="/index/Scripts/master.js"></script>









    <link rel="stylesheet" href="/index/Css/index.css" type="text/css" />





    <script>  </script>
    <link rel="stylesheet" href="/index/Css/22395c8cf66a8bed.css">
    <div id="content">




        <div class="user-profile-nav" id="db-usr-profile">
            <div class="pic">
                <a href="{{$user->id}}">
                    <img height="48" width="48"
                         alt="返世寻你" src="{{$user->profile}}" />
                </a>
            </div>
            <div class="info">
                <h1> 我想读的书({{count($ibook)}}) </h1>
                <ul class="nav-list">

                    <li><a href="/mine/{{$user->id}}">读书主页</a></li>



                    <li><a href="/zaidu/{{$user->id}}">在读</a></li>

                    <li class="user-profile-nav-activated">想读</li>

                    <li><a href="/duguo/{{$user->id}}">读过</a></li>

                    <li><a href="https://www.douban.com/people/148026085/">豆瓣主页</a></li>
                </ul>
            </div>
        </div>



        <div class="grid-16-8 clearfix">

            <div class="article">






                @foreach($ibook as $k=>$v)
                <ul class="interest-list">




                    <li class="subject-item">
                        <div class="pic">
                            <a class="nbg" href="https://book.douban.com/subject/1230413/"
                               onclick="moreurl(this,{i:'0',subject_id:'1230413',from:'book_subject_search'})">
                                <img class="" src="{{$v['img']}}"
                                     width="90">
                            </a>
                        </div>
                        <div class="info">
                            <h2 class="">


                                <a href="/subject/{{$v['id']}}" title="{{$v['title']}}"
                                   onclick="moreurl(this,{i:'0',subject_id:'1230413',from:'book_subject_search'})">

                                   {{$v['title']}}




                                </a>

                            </h2>
                            <div class="pub">


                                {{$v->Author->name}}/{{$v['press']}}/ {{$v->pressdate}} / {{$v->price}}元

                            </div>
                            <div class="short-note">


                                <div>

    <span class="date">
      想读</span>


                                </div>





                                <p class="comment">
                                </p>



                                <div class="opt-l">


                                    <a bookid ='{{$v['id']}}'  iid = '{{$user->id}}' class="ss"  rel="1230413:F" href="#">
                                        删除
                                    </a>
                                </div>


                            </div>

                            <div class="ft">

                                <div class="cart-actions">








                                </div>





                            </div>

                        </div>
                    </li>


                </ul>
                @endforeach








            </div>
            <div class="aside">


                <div class="mod">
                    <p class="pl2 m0">
                        &gt;
                        <a href="/mine/{{$user->id}}">
                            我的读书主页
                        </a>
                    </p>
                </div>




                <h2>
                    <span class="">想读的标签</span>
                    &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;

                </h2>






                <div class="opt-bar mb15 clearfix">
                    <div class="sort">

                        按标签量排序
                        <span class="gray-dot">·</span>


                    </div>
                </div>
                <ul class="tag-list mb10">

                @foreach($ibook as $k=>$v)

                    <li class=" clearfix">
                        <a href="/cate?id={{$v->cate->id}}" title="好书，值得一读">{{$v->cate->name}}</a>
                        <span>{{count($v->cate->id)}}</span>
                    </li>


                 @endforeach()

                </ul>


                <script>
                    $(function () {
                        var TAG_URL_PARAMS = {"sort":"time","tags_sort":"name","filter":"all","mode":"grid"};
                        $('#open_tags').click(function() {
                            var $btn = $(this);
                            var $container = $("ul.tag-list");
                            var $tmpl = $container.find("li").first();

                            $.get("https://book.douban.com/j/people/148026085/get_collection_tags", {
                                offset: 90,
                                tags_sort: "count",
                                cat_id: "1001",
                                action: "wish"
                            }, function (res) {
                                var tagUrl, newEl;

                                $(res).each(function (i, tagInfo) {
                                    TAG_URL_PARAMS["tag"] = tagInfo.tag;
                                    tagUrl = "https://book.douban.com/people/148026085/wish?" + $.param(TAG_URL_PARAMS);
                                    newEl = $tmpl.clone();
                                    if (tagInfo.tag === "None") {
                                        newEl.addClass("on");
                                    }
                                    newEl.find('a').attr("href", tagUrl)
                                            .attr("title", tagInfo.tag)
                                            .html(tagInfo.tag)
                                            .end()
                                            .find("span").html(tagInfo.count)
                                            .end().appendTo($container);
                                });
                                $btn.remove();
                            }, "json");
                        });
                    });
                </script>



            </div>
            <div class="extra">

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
                        k: '148026085:e8e9aa10cb8fb22b7f27a1a4893d88dd06a6dd62',
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


            connectSSE('148026085', '63c1d5692e1941ffd7d0e42091187314facc9fa3', '1469753821');
            set_cookie({
                push_noty_num: 0,
                push_doumail_num: 0
            });

        });
    </script><script type="text/javascript" src="/index/Scripts/1393a23ba7289636.js"></script>
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
@section('myJs')
    <script>
        $('.ss').click(function(){
            var book_id = $(this).attr('bookid');
            var user_id = $(this).attr('iid')
            var ss = $(this)
           $.get('/shanchu',{'book_id':book_id,'user_id':user_id},function(data){
                    if(data == 1){

                        $(ss).parents('.interest-list').empty()
                    }
           })
        })
    </script>
@endsection

































