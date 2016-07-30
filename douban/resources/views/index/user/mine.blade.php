@extends('layout.index')
@yield('title')
@section('content')

    <div id="content">


        <div class="user-profile-nav" id="db-usr-profile">
            <div class="pic">
                <a href="https://book.douban.com/people/148026085/">
                    <img height="48" width="48"
                         src="{{$user->profile}}"/>
                </a>
            </div>
            <div class="info">
                <h1> {{$user->username}}的读书主页 </h1>
                <ul class="nav-list">

                    <li class="user-profile-nav-activated">读书主页</li>
                    @if($user->id == session('uid'))
                        <li><a href="/zaidu/{{$user->id}}">在读</a></li>

                        <li><a href="/wodu/{{$user->id}}">想读</a></li>

                        <li><a href="/duguo/{{$user->id}}">读过</a></li>
                    @endif

                    <li><a href="https://www.douban.com/people/148026085/">豆瓣主页</a></li>
                </ul>
            </div>
        </div>


        <div class="grid-16-8 clearfix">

            <div class="article">

                <div class="">


                </div>

                @if(!empty($ibook))
                <div id="db-book-mine">


                    <div class="">


                        <h2>
                            <span class="">想读</span>
                            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
                            <span class="pl">&nbsp;(
          <a href="https://book.douban.com/people/148026085/wish">{{count($ibook)}}本</a>
        ) </span>

                        </h2>


                        <div class="mod">
                            <div class="sub-list">
                                <ul class="list-s clearfix">

                                    <li>

                                        @foreach($ibook as $k=>$v)

                                        <a href="https://book.douban.com/subject/1230413/" class="cover"><img
                                                    alt="深入理解计算机系统" title=" {{$v['title']}}" src="{{$v['img']}}"></a>
                                        @endforeach
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>


                </div>
                @endif
                @if(!empty($rbook))
                <div id="db-book-mine">


                    <div class="">


                        <h2>
                            <span class="">读过</span>
                            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
                            <span class="pl">&nbsp;(
          <a href="https://book.douban.com/people/148026085/wish">{{count($rbook)}}本</a>
        ) </span>

                        </h2>


                        <div class="mod">
                            <div class="sub-list">
                                <ul class="list-s clearfix">

                                    <li>

                                        @foreach($rbook as $k=>$v)

                                            <a href="https://book.douban.com/subject/1230413/" class="cover"><img
                                                        alt="深入理解计算机系统" title=" {{$v['title']}}" src="{{$v['img']}}"></a>
                                        @endforeach
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>


                </div>
                @endif
                @if(!empty($zbook))
                <div id="db-book-mine">


                    <div class="">


                        <h2>
                            <span class="">在读</span>
                            &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
                            <span class="pl">&nbsp;(
          <a href="https://book.douban.com/people/148026085/wish">{{count($ibook)}}本</a>
        ) </span>

                        </h2>


                        <div class="mod">
                            <div class="sub-list">
                                <ul class="list-s clearfix">

                                    <li>

                                        @foreach($zbook as $k=>$v)

                                            <a href="https://book.douban.com/subject/1230413/" class="cover"><img
                                                        alt="深入理解计算机系统" title=" {{$v['title']}}" src="{{$v['img']}}"></a>
                                        @endforeach
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>


                </div>
                @endif


            </div>


            <div class="aside" >


                <div class="bd" style="    word-wrap: break-word;
    padding: 4px 9px;
    background: #fff6ed;
    border: 1px solid #faefe3;
    border-width: 0 1px;">

                    <div class="basic-info" >

                        <img src="{{$user->profile}}" class="userface" alt="" style="margin-bottom: 20px;">

                        <div class="user-info">

                            常居:&nbsp;<a href="https://shanghai.douban.com/">{{$user->city}}</a><br>

                            <div class="pl">{{$user->username}} </div>


                        </div>
                    </div>


                    <div class="user-opt">
                        @if($user->id != session('uid'))
                        <a href="javascript:void(0);" iid="{{$user->id}}" id="xgz" class="a-btn-add mr10 add_contact xgz  ygz" style="display: none" >取消关注</a>
                        <a href="javascript:void(0);" iid="{{$user->id}}" id="qgz" class="a-btn-add mr10 add_contact xgz  wgz" style="display: none" >关注此人</a>
                        @if($c ==1 )
                        <a href="javascript:void(0);" iid="{{$user->id}}" id="gz"  class="a-btn-add mr10 add_contact  wgz" >关注此人</a>
                        @elseif ($c ==2)
                            <a href="javascript:void(0);" iid="{{$user->id}}" id="ygz" class="a-btn-add mr10 add_contact ygz  " >取消关注</a>
                        @endif
                        <br>
                            {{--<a href="javascript:void(0);" iid="{{$user->id}}" id="gz" class="a-btn-add mr10 add_contact" @if($a->username == $usera->username && $a->attention_name == $user->username) 已经关注 @else 关注此人 @endif>已经关注</a>--}}
                        <a class="a-btn mr5" rel="nofollow"
                           href="/to/{{$user->id}}">发豆邮</a>

                        @endif
                        <div id="divac">

                        </div>

                        <script>
                            var optPara = '',
                                    tempNewName = '',
                                    groupNameArr = [],
                                    more_opt = $('.more-opt'),
                                    glist = $('.user-group-list'),
                                    sglist = $('.set-group-list'),
                                    sgarrow = $('.user-group-arrow'),
                                    gname = $('.user-group .user-rs'),
                                    btn_item = $('.user-group-list li'),
                                    sgarrow = $('.user-group-arrow'),
                                    ID_CANCEL = 'follow-cancel',
                                    ID_BAN = 'add-to-blacklist',
                                    ID_REPORT = 'report-user',
                                    ID_DONATE = 'usr-donate',
                                    CSS_USER_GROUP = '.user-group',
                                    CSS_SET_GROUP_LIST = '.set-group-list',
                                    TEMPL_NEW_TAG = '<li><a href="/contacts/list?tag={ID}">{NAME}</a></li>',
                                    people_info = {"ck": "Tb5X", "is_contact": false, "id": "1829293", "name": "Jophy"},
                                    isContact = people_info.is_contact,
                                    PEOPLE_NAME = people_info.name,
                                    PEOPLE_ID = people_info.id,
                                    collectGroupName = function () {
                                        groupObjArr = $('.set-group-list label').toArray(),
                                                $.each(groupObjArr, function (i, v) {
                                                    groupNameArr[i] = $.trim($(v).text());
                                                });
                                    },
                                    changeCb = function (obj, para, is, uid, tid) {
                                        var cb = $(obj).children('input');
                                        $.post_withck(
                                                '/j/contact/' + para,
                                                {
                                                    'people': uid,
                                                    'tag': tid
                                                },
                                                function () {
                                                    setTimeout(function () {
                                                        $(CSS_LOADER, obj).remove();
                                                        // change checkbox state
                                                        if (is && para === 'addtotag' || !is && para === 'addtotag') {
                                                            cb.attr('checked', 'checked').show();
                                                        } else {
                                                            cb.removeAttr('checked').show();
                                                        }
                                                        changeGroupShow($(obj));
                                                    }, 200);
                                                }
                                        );
                                    },
                                    autoIframeHeight = function (h) {
                                        $('#ifm-donate').css('height', h + 'px');
                                        set_overlay();
                                    };

                            collectGroupName();

                            sgarrow.setItemList({
                                limit: 9,
                                create: {
                                    title: '新分组',
                                    tips: '创建新分组',
                                    maxLen: 10,
                                    callback: createNewGroup
                                },
                                target: PEOPLE_ID,
                                callback: changeCb
                            });

                            // for UI
                            if ($('.a-btn-add').length) {
                                $(CSS_USER_GROUP).remove();
                            } else {
                                $(CSS_USER_GROUP).show();
                            }

                            // void duplicate menu display
                            more_opt.click(function (e) {
                                glist.show();
                                if (sglist.length === 1) {
                                    sglist.hide();
                                    sgarrow.removeClass('arrow-select');
                                }
                                return false;
                            });

                            sgarrow.click(function () {
                                glist.hide();
                            });

                            // user option
                            btn_item.delegate('a', 'click', function (e) {
                                e.preventDefault();
                                e.stopPropagation();
                                glist.hide();
                                var elm = $(e.currentTarget),
                                        thisId = elm.attr('id'),
                                        menu_actions = {};

                                menu_actions[ID_REPORT] = function () {
                                    location.href = '/misc/audit_report?url=https://www.douban.com/people/maranyway/';
                                };

                                menu_actions[ID_BAN] = function () {
                                    var msg = PEOPLE_NAME + '将不能：\n- 关注你（已关注的会自动取消）\n- 给你发豆邮\n- 在你的日记、相册、广播、推荐、留言板留言\n\n确定把' + PEOPLE_NAME + '加入黑名单？';
                                    if (confirm(msg)) {
                                        $.post_withck(
                                                '/j/contact/addtoblacklist',
                                                {'people': PEOPLE_ID},
                                                function () {
                                                    location.reload();
                                                }
                                        );
                                    }
                                };

                                menu_actions[ID_CANCEL] = function () {
                                    // cancel follow
                                    var msg = '确实不再关注 ' + PEOPLE_NAME + ' 吗？';
                                    if (confirm(msg)) {
                                        $.post_withck(
                                                '/j/contact/removecontact',
                                                {'people': PEOPLE_ID},
                                                function () {
                                                    location.reload();
                                                }
                                        );
                                    }
                                };

                                menu_actions[ID_DONATE] = function () {
                                    var dlgWidth = 420,
                                            dlgContent = '<div class="dlg-hd"><h3>{TITLE}</h3><a href="#" class="bn-dlg-close">x</a></div><iframe id="ifm-donate" src="' + elm.attr('href') + '" frameborder="0" width="' + dlgWidth + '" height="240" scrolling="no">';
                                    show_dialog(dlgContent.replace('{TITLE}', '送小豆给' + elm.attr('data-user')), dlgWidth);
                                    $('#dialog .bn-dlg-close').click(function (e) {
                                        e.preventDefault();
                                        close_dialog();
                                    });
                                };

                                if (menu_actions[thisId]) {
                                    menu_actions[thisId]();
                                }
                            });

                            $(document.body).click(function (e) {
                                glist.hide();
                            });

                            $(".add_contact").click(function () {
                                $.post_withck(
                                        '/j/contact/addcontact',
                                        {'people': this.id},
                                        function (r) {
                                            if (r.result) {
                                                pop_win.load('/j/misc/follow_form');
                                            } else if (r.msg === 'need_captcha') {
                                                $.get('/j/misc/captcha', function (r) {
                                                    url = r.url;
                                                    token = r.token;
                                                    html = '<form><div class="rectitle"><span class="gact rr"><a onclick="close_dialog()" href="javascript:;">x</a></span><span class="m"><i>请输入验证码</i></span></div><span class="recsmr addcontact"><img src="{url}" /><input type="text" class="captcha-input"/><input type="hidden" class="tk-input" value="{token}"/>看不清？<a href="#" class="change">换一个</a></span><div class="reccomment"><div class="recsubmit"><span class="bn-flat"><input value="确定" type="submit"/></span></div></div></form>'
                                                    html = html.replace('{token}', token).replace('{url}', url);
                                                    show_dialog(html, 300);
                                                    $("#dialog").css("height", "195px");
                                                    $("#overlay").css("height", "213px");
                                                    $(".addcontact img").css("margin-bottom", "10px");
                                                    $(".change").click(function (o) {
                                                        $.get('/j/misc/captcha', function (r) {
                                                            $(".recsmr img").attr("src", r.url);
                                                            $(".tk-input").attr("value", r.token);
                                                        });
                                                        return false;
                                                    });
                                                    $("form").submit(function (e) {
                                                        sl = $(".captcha-input").val();
                                                        tk = $(".tk-input").val();
                                                        $.post_withck('/j/contact/addcontact',
                                                                {'tk': tk, 'sl': sl, 'people': PEOPLE_ID},
                                                                function (r) {
                                                                    if (r.result) {
                                                                        close_dialog();
                                                                        pop_win.load('/j/misc/follow_form');
                                                                    } else {
                                                                        $.get('/j/misc/captcha', function (r) {
                                                                            $(".recsmr img").attr("src", r.url);
                                                                            $(".tk-input").attr("value", r.token);
                                                                        });
                                                                    }
                                                                }, 'json');
                                                        e.preventDefault();
                                                    });
                                                }, 'json');
                                            } else {
                                                $('#contact_msg').css('display', '');
                                            }
                                        },
                                        'json'
                                );
                            });
                        </script>


                    </div>


                    <div class="sep-line"></div>

                </div>


                <div class="mod">


                    <h2>
                        <span class="">最近阅读</span>
                        &nbsp;&middot;&nbsp;&middot;&nbsp;&middot;

                    </h2>

                    @if(!empty($ibook))
                    <ul class="mbt">


                        <li class="mbtrmini">
                            @foreach($ibook as $k => $v)
  <span class="starb">
    <span class="pl">
      想读
      <a href="{{$v['img']}}">{{$v['title']}}</a>
    </span>
  </span>
                            @endforeach
                        </li>
                    </ul>
                    @endif
                    @if(!empty($rbook))
                    <ul class="mbt">


                        <li class="mbtrmini">
                            @foreach($rbook as $k => $v)
                                <span class="starb">
    <span class="pl">
      读过
      <a href="{{$v['img']}}">{{$v['title']}}</a>
    </span>
  </span>
                            @endforeach
                        </li>
                    </ul>
                    @endif
                    @if(!empty($zbook))
                    <ul class="mbt">


                        <li class="mbtrmini">
                            @foreach($zbook as $k => $v)
                                <span class="starb">
    <span class="pl">
      在读
      <a href="{{$v['img']}}">{{$v['title']}}</a>
    </span>
  </span>
                            @endforeach
                        </li>
                    </ul>
                        @endif
                </div>
                <div id="friend">

                    <h2>
                        {{$user->username}}的关注
                        &nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·
            <span class="pl">&nbsp;(

                <a href="/people/{{$user->id}}" target="_self">成员{{count($attentions)}}</a>
                ) </span>
                    </h2>
                    @foreach( $atten2 as $k=>$v)
                    <dl class="obu">
                        <dt><a href="/mine/{{$v['id']}}" class="nbg"><img
                                        src="{{$v['profile']}}" class="m_sub_img" alt="{{$v['username']}}"></a>
                        </dt>
                        <dd><a href="/mine/{{$v['id']}}">{{$v['username']}}</a></dd>
                    </dl>
                   @endforeach
                    <br clear="all">

                </div>

                <div class="mod">
                    <p class="pl">
                        &gt; <a href="https://book.douban.com/people/148026085/all">我的全部图书标签</a>
                        <br>
                        &gt; <a href="https://book.douban.com/people/148026085/discussions">我回应的书评与讨论</a>
                    </p>
                </div>


            </div>
            <div class="extra">

            </div>
        </div>
    </div>
@endsection
@section('myJs')
    <script>
            $('.wgz').click(function(){
                var id = $('#gz').attr('iid');

                $.get('/attention',{'id':id},function(data){
                    if(data == 1){
                        $('.wgz').css('display','none');
                        $('#xgz').css('display','block').css('width','48');
                    }
                })
            })

            $('.ygz').click(function(){
                    var id = $('.ygz').attr('iid');
                    var flag = confirm("确定要取消关注吗");
                    if(flag){
                       $.get('/doattention',{'id':id},function(data){
                            if(data == 1){
                                $('.ygz').css('display','none');
                                $('#qgz').css('display','block').css('width','48');
                            }
                       })
                    }else{
                        return false;
                    }

            })

            $('#qgz').click(function(){
                var id = $('#qgz').attr('iid');

                $.get('/attention',{'id':id},function(data){
                    if(data == 1){
                        $('#qgz').css('display','none');
                        $('#xgz').css('display','block').css('width','48');
                    }
                })
            })
    </script>
@endsection
