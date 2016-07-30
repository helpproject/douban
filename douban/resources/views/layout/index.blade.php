<!DOCTYPE html>
<html lang="zh-CN" class="ua-windows ua-webkit book-new-nav">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Expires" content="Sun, 6 Mar 2005 01:00:00 GMT">
    <meta http-equiv="mobile-agent" content="format=xhtml; url=http://m.douban.com/book/">
    <meta name="keywords" content="豆瓣读书,新书速递,畅销书,书评,书单" />
    <meta name="description" content="记录你读过的、想读和正在读的书，顺便打分，添加标签及个人附注，写评论。根据你的口味，推荐适合的书给你。" />
    <meta name="verify-v1" content="EYARGSAVd5U+06FeTmxO8Mj28Fc/hM/9PqMfrlMo8YA=">
    <meta property="wb:webmaster" content="7c86191e898cd20d">
    <meta property="qc:admins" content="1520412177364752166375">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <script>var Douban = {},
      Book = {}
      var Do = function() {
        Do.actions.push([].slice.call(arguments))
      };
      Do.ready = function() {
        Do.actions.push([].slice.call(arguments))
      };
      Do.add = Do.define = function(a, b) {
        Do.mods[a] = b
      };
      Do.global = function() {
        Do.global.mods = Array.concat(Do.global.mods, [].slice.call(arguments))
      };
      Do.global.mods = [];
      Do.mods = {};
      Do.actions = [];</script>
    <script src="/index/Scripts/define.js"></script>
    <script>define.ns('Book') define.config({
        'jquery': '$',
        'piwik': 'Piwik',
        'mod/ga': 'Book.ga',
        'mod/ajax': 'Book.ajax',
        'mod/cookie': 'Book.cookie'
      })

      Do.add('mod/cookie', {
        path: '',
        type: 'js'
      })

      Do.add('mod/ajax', {
        path: '',
        requires: ['mod/cookie'],
        type: 'js'
      })

      Do.add('mod/ga', {
        path: '',
        type: 'js'
      })</script>
    <script>!
      function(f) {
        var h = function(o, n, m) {
          var k = new Date(),
          j,
          l;
          n = n || 30;
          m = m || "/";
          k.setTime(k.getTime() + (n * 24 * 60 * 60 * 1000));
          j = "; expires=" + k.toGMTString();
          for (l in o) {
            f.cookie = l + "=" + o[l] + j + "; path=" + m
          }
        },
        d = function(m) {
          var l = m + "=",
          o, n, j, k = f.cookie.split(";");
          for (n = 0, j = k.length; n < j; n++) {
            o = k[n].replace(/^\s+|\s+$/g, "");
            if (o.indexOf(l) == 0) {
              return o.substring(l.length, o.length).replace(/\"/g, "")
            }
          }
          return null
        },
        e = f.write,
        b = {
          "douban.com": 1,
          "douban.fm": 1,
          "google.com": 1,
          "google.cn": 1,
          "": 1,
          "gmaptiles.co.kr": 1,
          "gstatic.com": 1,
          "gstatic.cn": 1,
          "google-analytics.com": 1,
          "googleadservices.com": 1
        },
        a = function(l, k) {
          var j = new Image();
          j.onload = function() {};
          j.src = "" + encodeURIComponent(l) + "&environment=" + encodeURIComponent(k)
        },
        i = function(k) {
          try {
            e.call(f, k)
          } catch(j) {
            e(k)
          }
        },
        c = /<script.*?src\=["']?([^"'\s>]+)/ig,
        // g = /http:\/\/(.+?)\.([^\/]+).+/i;
        f.writeln = f.write = function(k) {
          var j = c.exec(k),
          l;
          if (!j) {
            i(k);
            return
          }
          l = g.exec(j[1]);
          if (!l) {
            i(k);
            return
          }
          if (b[l[2]]) {
            i(k);
            return
          }
          if (d("hj") === "tqs") {
            return
          }
          a(j[1], location.href);
          h({
            hj: "tqs"
          },
          1);
          setTimeout(function() {
            location.replace(location.href)
          },
          50)
        }
      } (document);</script>
    <link href="/index/Css/master.css" rel="stylesheet" type="text/css">
    <style type="text/css"></style>
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>

    <script>var _head_start = new Date();</script>
    <script>define.config({
        'ui/slide': 'Book.slide',
        'ui/bubble': 'Book.Bubble'
      }) Do.add('book/index', {
        path: ''
      }) Do.add('ui/slide', {
        path: ''
      }) Do.add('ui/bubble', {
        path: ''
      }) Do.add('widget/tabs', {
        path: ''
      }) Do('book/index')</script>
    <script type='text/javascript'>var _vds = _vds || []; (function() {
        _vds.push(['setAccountId', '22c937bbd8ebd703f2d8e9445f7dfd03']);
        _vds.push(['setCS1', 'user_id', '1']); (function() {
          var vds = document.createElement('script');
          vds.type = 'text/javascript';
          vds.async = true;
          // vds.src = ('https:' == document.location.protocol ? 'https://': 'http://') + 'dn-growing.qbox.me/vds.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(vds, s);
        })();
      })();</script>
    <script type='text/javascript'>var _vwo_code = (function() {
        var account_id = 249272,
        settings_tolerance = 2000,
        library_tolerance = 2500,
        use_existing_jquery = false,
        // DO NOT EDIT BELOW THIS LINE
        f = false,
        d = document;
        return {
          use_existing_jquery: function() {
            return use_existing_jquery;
          },
          library_tolerance: function() {
            return library_tolerance;
          },
          finish: function() {
            if (!f) {
              f = true;
              var a = d.getElementById('_vis_opt_path_hides');
              if (a) a.parentNode.removeChild(a);
            }
          },
          finished: function() {
            return f;
          },
          load: function(a) {
            var b = d.createElement('script');
            b.src = a;
            b.type = 'text/javascript';
            b.innerText;
            b.onerror = function() {
              _vwo_code.finish();
            };
            d.getElementsByTagName('head')[0].appendChild(b);
          },
          init: function() {
            settings_timer = setTimeout('_vwo_code.finish()', settings_tolerance);
            var a = d.createElement('style'),
            b = 'body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',
            h = d.getElementsByTagName('head')[0];
            a.setAttribute('id', '_vis_opt_path_hides');
            a.setAttribute('type', 'text/css');
            if (a.styleSheet) a.styleSheet.cssText = b;
            else a.appendChild(d.createTextNode(b));
            h.appendChild(a);
            this.load('//dev.visualwebsiteoptimizer.com/j.php?a=' + account_id + '&u=' + encodeURIComponent(d.URL) + '&r=' + Math.random());
            return settings_timer;
          }
        };
      } ());
      _vwo_settings_timer = _vwo_code.init();</script>
    <script></script>
    <link rel="stylesheet" href="/index/Css/626b7f4ad46e153a.css"></head>
    
  <body>

    <script>var _body_start = new Date();</script>
    <div id="db-global-nav" class="global-nav">
      <div class="bd">
      @if(empty(session('uid')))
      <div class="top-nav-info">
        <a href="/login" class="nav-login" rel="nofollow">登录</a>
        <a href="/register" class="nav-register" rel="nofollow">注册</a>
      </div>
      @endif

      @if(!empty(session('uid')))  
        <div class="top-nav-info">
          <span class="perf-metric">
          </span>
          <ul>
            <li>
              <a id="top-nav-doumail-link" href="">豆邮</a></li>
            <li class="nav-user-account">
              <a target="_blank" href="" class="bn-more">
                <span>{{getUser(session('uid'))}}的帐号</span>
                <span class="arrow"></span>
              </a>
              <div class="more-items">
                <table cellpadding="0" cellspacing="0">
                  <tr>
                    <td>
                      <a href="">个人主页</a></td>
                  </tr>
                  <tr>
                    <td>
                      <a target="_blank" href="">我的订单</a></td>
                  </tr>
                  <tr>
                    <td>
                      <a target="_blank" href="">我的钱包</a></td>
                  </tr>
                  <tr>
                    <td>
                      <a target="_blank" href="">帐号管理</a></td>
                  </tr>
                  <tr>
                    <td>
                      <a href="/e">退出</a></td>
                  </tr>
                </table>
              </div>
            </li>
          </ul>
        </div>
      @endif
        <!-- <div class="top-nav-reminder">
          <a href="" class="lnk-remind">提醒</a>
          <div id="top-nav-notimenu" class="more-items">
            <div class="bd">
              <p>加载中...</p>
            </div>
          </div>
        </div> -->

        <div class="top-nav-doubanapp">
          <a href="" class="lnk-doubanapp">下载豆瓣客户端</a>
          <div id="top-nav-appintro" class="more-items">
            <p class="appintro-title">豆瓣</p>
            <p class="slogan">我们的精神角落</p>
            <p class="qrcode">扫码直接下载</p>
            <div class="download">
              <a href="">iPhone</a>
              <span>·</span>
              <a href="">Android</a></div>
          </div>
          <div id="doubanapp-tip">
            <a href="" class="tip-link">豆瓣 4.0 全新发布</a>
            <a href="javascript: void 0;" class="tip-close">×</a></div>
        </div>
        <div class="global-nav-items">
          <ul>
            <li class="">
              <a href="" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-main&#34;,&#34;uid&#34;:&#34;148026085&#34;}">豆瓣</a></li>
            <li class="on">
              <a href="/" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-book&#34;,&#34;uid&#34;:&#34;148026085&#34;}">读书</a></li>
            <li class="">
              <a href="" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-movie&#34;,&#34;uid&#34;:&#34;148026085&#34;}">电影</a></li>
            <li class="">
              <a href="" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-music&#34;,&#34;uid&#34;:&#34;148026085&#34;}">音乐</a></li>
            <li class="">
              <a href="" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-location&#34;,&#34;uid&#34;:&#34;148026085&#34;}">同城</a></li>
            <li class="">
              <a href="" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-group&#34;,&#34;uid&#34;:&#34;148026085&#34;}">小组</a></li>
            <li class="">
              <a href="" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-read&#34;,&#34;uid&#34;:&#34;148026085&#34;}">阅读</a></li>
            <li class="">
              <a href="" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-fm&#34;,&#34;uid&#34;:&#34;148026085&#34;}">FM</a></li>
            <li class="">
              <a href="" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-commodity&#34;,&#34;uid&#34;:&#34;148026085&#34;}">东西</a></li>
            <li class="">
              <a href="" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-market&#34;,&#34;uid&#34;:&#34;148026085&#34;}">市集</a></li>
            <li>
              <a href="#more" class="bn-more">
                <span>更多</span></a>
              <div class="more-items">
                <table cellpadding="0" cellspacing="0">
                  <tr>
                    <td>
                      <a href="" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-moment&#34;,&#34;uid&#34;:&#34;148026085&#34;}">一刻</a></td>
                  </tr>
                  <tr>
                    <td>
                      <a href="" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-ypy&#34;,&#34;uid&#34;:&#34;148026085&#34;}">一拍一</a></td>
                  </tr>
                </table>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="db-nav-book" class="nav">
      <div class="nav-wrap">
        <div class="nav-primary">
          <div class="nav-logo">
            <a href="/">豆瓣读书</a></div>
          <div class="nav-search">
            <form action="/tag" method="get">
              <fieldset>
                <legend>搜索：</legend>
                <label for="inp-query">书名</label>
                <div class="inp">
                  <input id="inp-query" name="q" size="22" maxlength="60" value=""></div>
                <div class="inp-btn">
                  <input type="submit" value="搜索"></div>
                </fieldset>
            </form>
            <style>.nav-search, .nav .nav-primary { overflow: visible !important; } .nav-search { margin-left: 145px; }</style></div>
        </div>
      </div>
      <div class="nav-secondary">
        <ul class="nav-items">
          @if(session('uid'))
          <li class="nav-item-first">
            <a href="">我读</a></li>
          <li>
            <a href="/dongtai/{{session('uid')}}">动态</a></li>
          <li>
            <a href="">豆瓣猜</a></li>
          @endif
          <li>
            <a href="/cate">分类浏览</a></li>
          <li class="book-cart ">
            <a href="/cate">购书单</a></li>
          <li>
            <a href="">电子图书</a></li>
          <li>
            <a href="">纸书</a></li>
        </ul>
      </div>
    </div>
    <script type="text/template" id="suggest-item">< li class = "item" > <a href = "#" > {
        { = item
        }
      } < /a></li > </script>
    <div id="wrapper">

      @section('content')
      <div id="content">
        <div class="grid-16-8 clearfix">
          <div class="article">
            <div class="section books-express ">
              <div class="hd">
                <h2 class=''>
                  <span class="">新书速递</span>
                  <span class="link-more">
                    <a class="" href="/latest?icn=index-latestbook-all">更多»</a></span>
                </h2>
               
              </div>
              <div class="bd">
                <div class="carousel">
                  <div class="slide-list">
                    <ul class="list-col list-col5 list-express slide-item">

                      <li class="">
                        <div class="cover">
                          <a href="/" title="我们始终独自行走在这个世界">
                            <img src="/index/Picture/s28812557.jpg" class="" width="106px" height="158px" alt="我们始终独自行走在这个世界"></a>
                        </div>
                        <div class="intervenor-info">
                          <img src="/index/Picture/jd_recommend.png" class='jd-icon' width="16" height="16" />
                          <span>推荐</span></div>
                          <div class="title">
                            <a class="" href="" title="我们始终独自行走在这个世界">我们始终独自行走在这个世界</a></div>
                          <div class="author">米娅、七毛、牛莹等</div>
                          <div class="more-meta">
                            <h4 class="title">我们始终独自行走在这个世界</h4>
                            <p>
                              <span class="author">米娅、七毛、牛莹等</span>/
                              <span class="year">2016-7</span>/
                              <span class="publisher">百花洲文艺出版社</span></p>
                            <p class="abstract">十点读书、二更食堂、清华南都等各大微信号签约作者燃情巨献， 简书、豆瓣千万读者口碑相传作品。 这些年为了跟上梦想的脚步， 我们从一个小地方来到大都市。 曾经以为跌倒就再也爬不起来了， 曾经恨透了时间，它让我们在成功面前惨淡无光。 直到有一天，直面镜子里的自己， 回首来时的路， 每一段虽然艰辛但是一步一个脚印， 筑梦踏实。 我们从一个无所事事的人变成了现在更好...</p></div>
                      </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- douban ad begin -->
            <div id="dale_book_home_left_top" class="ad-placeholder" style="margin:-30px 0 30px;"></div>
            <!-- douban app end -->
           <!--  <div class="section popular-books">
              <div class="hd">
                <h2>
                  <span>最受关注图书榜</span>
                </h2>
              </div>
              <div class="bd">
                <ul class="list-col list-col2 list-summary s" data-dstat-areaid="61" data-dstat-mode="click,expose">
                  <li class="">
                    <div class="cover">
                      <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/subject/26768309/?icn=index-topchart-subject">
                        <img src="/index/Picture/s28671476.jpg" alt="查令十字街84号" class=""></a>
                    </div>
                    <div class="info">
                      <h4 class="title">
                        <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/subject/26768309/?icn=index-topchart-subject" class="">查令十字街84号</a></h4>
                      <p class="entry-star-small">
                        <span class="allstar40 star-img"></span>
                        <span class="average-rating">8.1</span></p>
                      <p class="author">作者：[美] 海莲·汉芙</p>
                      <p class="book-list-classification"></p>
                      <p class="extra-info">
                        <span class="meta-label">有电子书</span></p>
                      <p class="reviews">市街从不是有效抵御时间风蚀的形式，书籍才是。 (
                        <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/review/7959865/?icn=index-topchart-subject">空白中的独舞评论</a>)</p></div>
                  </li>
                  
                  </li>
                </ul>
              </div>
            </div> -->
            <!-- douban ad begin -->
            <div id="dale_book_home_left_middle" class="ad-placeholder" style="margin:-50px 0 30px;"></div>
            <!-- douban app end -->
            
          </div>
          <div class="aside">
            <!-- douban ad begin -->
            <div id="dale_book_home_top_right" class="s ad-placeholder" data-dstat-areaid="51" data-dstat-mode="click,expose" style="margin-top: 30px;"></div>
            <!-- douban ad end -->
            <!-- douban ad begin -->
            <div id="dale_book_home_top_right2" class="ad-placeholder"></div>
            <!-- douban ad end -->
            <h2 class=''>
              <span class="">热门标签</span>
              <span class="link-more">
                <a class="" href="/tag/?view=type&amp;icn=index-sorttags-all">所有热门标签»</a></span>
            </h2>
            <ul class="hot-tags-col5 s" data-dstat-areaid="54" data-dstat-mode="click,expose">
              <li>
                <ul class="clearfix">
                  <li class="tag_title">文学</li>
                  <li>
                    <a href="/tag/小说" class="tag">小说</a></li>
                  <li>
                    <a href="/tag/随笔" class="tag">随笔</a></li>
                  <li>
                    <a href="/tag/日本文学" class="tag">日本文学</a></li>
                  <li class="last">
                    <a href="/tag/散文" class="tag">散文</a></li>
                  <li>
                    <a href="/tag/童话" class="tag">童话</a></li>
                  <li>
                    <a href="/tag/诗歌" class="tag">诗歌</a></li>
                  <li>
                    <a href="/tag/名著" class="tag">名著</a></li>
                  <li class="last">
                    <a href="/tag/港台" class="tag">港台</a></li>
                  <li class="last">
                    <a href="" class="tag more_tag">更多》</a></li>
                </ul>
              </li>
              <li>
                <ul class="clearfix">
                  <li class="tag_title">流行</li>
                  <li>
                    <a href="/tag/漫画" class="tag">漫画</a></li>
                  <li>
                    <a href="/tag/绘本" class="tag">绘本</a></li>
                  <li>
                    <a href="/tag/推理" class="tag">推理</a></li>
                  <li class="last">
                    <a href="/tag/青春" class="tag">青春</a></li>
                  <li>
                    <a href="/tag/言情" class="tag">言情</a></li>
                  <li>
                    <a href="/tag/科幻" class="tag">科幻</a></li>
                  <li>
                    <a href="/tag/武侠" class="tag">武侠</a></li>
                  <li class="last">
                    <a href="/tag/奇幻" class="tag">奇幻</a></li>
                  <li class="last">
                    <a href="/tag/?view=type&amp;icn=index-sorttags-hot#流行" class="tag more_tag">更多》</a></li>
                </ul>
              </li>
              <li>
                <ul class="clearfix">
                  <li class="tag_title">文化</li>
                  <li>
                    <a href="/tag/历史" class="tag">历史</a></li>
                  <li>
                    <a href="/tag/哲学" class="tag">哲学</a></li>
                  <li>
                    <a href="/tag/传记" class="tag">传记</a></li>
                  <li class="last">
                    <a href="/tag/设计" class="tag">设计</a></li>
                  <li>
                    <a href="/tag/建筑" class="tag">建筑</a></li>
                  <li>
                    <a href="/tag/电影" class="tag">电影</a></li>
                  <li>
                    <a href="/tag/回忆录" class="tag">回忆录</a></li>
                  <li class="last">
                    <a href="/tag/音乐" class="tag">音乐</a></li>
                  <li class="last">
                    <a href="/tag/?view=type&amp;icn=index-sorttags-hot#文化" class="tag more_tag">更多》</a></li>
                </ul>
              </li>
              <li>
                <ul class="clearfix">
                  <li class="tag_title">生活</li>
                  <li>
                    <a href="/tag/旅行" class="tag">旅行</a></li>
                  <li>
                    <a href="/tag/励志" class="tag">励志</a></li>
                  <li>
                    <a href="/tag/职场" class="tag">职场</a></li>
                  <li class="last">
                    <a href="/tag/美食" class="tag">美食</a></li>
                  <li>
                    <a href="/tag/教育" class="tag">教育</a></li>
                  <li>
                    <a href="/tag/灵修" class="tag">灵修</a></li>
                  <li>
                    <a href="/tag/健康" class="tag">健康</a></li>
                  <li class="last">
                    <a href="/tag/家居" class="tag">家居</a></li>
                  <li class="last">
                    <a href="/tag/?view=type&amp;icn=index-sorttags-hot#生活" class="tag more_tag">更多》</a></li>
                </ul>
              </li>
              <li>
                <ul class="clearfix">
                  <li class="tag_title">经管</li>
                  <li>
                    <a href="/tag/经济学" class="tag">经济学</a></li>
                  <li>
                    <a href="/tag/管理" class="tag">管理</a></li>
                  <li>
                    <a href="/tag/金融" class="tag">金融</a></li>
                  <li class="last">
                    <a href="/tag/商业" class="tag">商业</a></li>
                  <li>
                    <a href="/tag/营销" class="tag">营销</a></li>
                  <li>
                    <a href="/tag/理财" class="tag">理财</a></li>
                  <li>
                    <a href="/tag/股票" class="tag">股票</a></li>
                  <li class="last">
                    <a href="/tag/企业史" class="tag">企业史</a></li>
                  <li class="last">
                    <a href="/tag/?view=type&amp;icn=index-sorttags-hot#经管" class="tag more_tag">更多》</a></li>
                </ul>
              </li>
              <li>
                <ul class="clearfix">
                  <li class="tag_title">科技</li>
                  <li>
                    <a href="/tag/科普" class="tag">科普</a></li>
                  <li>
                    <a href="/tag/互联网" class="tag">互联网</a></li>
                  <li>
                    <a href="/tag/编程" class="tag">编程</a></li>
                  <li class="last">
                    <a href="/tag/交互设计" class="tag">交互设计</a></li>
                  <li>
                    <a href="/tag/算法" class="tag">算法</a></li>
                  <li>
                    <a href="/tag/通信" class="tag">通信</a></li>
                  <li>
                    <a href="/tag/神经网络" class="tag">神经网络</a></li>
                  <li class="last">
                    <a href="/tag/?view=type&amp;icn=index-sorttags-hot#科技" class="tag more_tag">更多》</a></li>
                </ul>
              </li>
            </ul>
            <!-- douban ad begin -->
            <div id="dale_book_homepage_right_bottom" class="ad-placeholder"></div>
            <!-- douban ad end -->
            
            <div class="block5">
              <h2 class=''>
                <span class="">豆瓣猜你可能感兴趣的图书</span>
                <span class="link-more">
                  <a class="" href="/recommended?icn=index-book250-all">更多»</a></span>
              </h2>
              <div class="content clearfix s" id="book_rec" data-dstat-areaid="59" data-dstat-mode="click,expose">
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="">
                      <img src="/index/Picture/s4764383.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="">Principles of Computer System Design</a>
                    <span class="gact">
                      <a href="javascript:" rel="3707841" class="book_x" title="从推荐中去掉Principles of Computer System Design">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="">
                      <img src="/index/Picture/s8488131.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="">计算机网络系统方法</a>
                    <span class="gact">
                      <a href="javascript:" rel="1225935" class="book_x" title="从推荐中去掉计算机网络系统方法">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="">
                      <img src="/index/Picture/s2804353.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="">鲁迅书信集（共两卷）</a>
                    <span class="gact">
                      <a href="javascript:" rel="1853531" class="book_x" title="从推荐中去掉鲁迅书信集（共两卷）">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
                <div class="clearfix rr" style="width:100%"></div>
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="">
                      <img src="/index/Picture/s28385303.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="">见信如晤</a>
                    <span class="gact">
                      <a href="javascript:" rel="26667282" class="book_x" title="从推荐中去掉见信如晤">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="">
                      <img src="/index/Picture/s5646472.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="">操作系统</a>
                    <span class="gact">
                      <a href="javascript:" rel="1506160" class="book_x" title="从推荐中去掉操作系统">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="">
                      <img src="/index/Picture/s23131223.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="">书虫小鼠</a>
                    <span class="gact">
                      <a href="javascript:" rel="11026780" class="book_x" title="从推荐中去掉书虫小鼠">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
                <div class="clearfix rr" style="width:100%"></div>
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="">
                      <img src="/index/Picture/s1937066.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="">世界上最动人的书信</a>
                    <span class="gact">
                      <a href="javascript:" rel="1195935" class="book_x" title="从推荐中去掉世界上最动人的书信">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
              </div>
            </div>
            
            <!-- douban app begin -->
            <div class="s" data-dstat-areaid="60" data-dstat-mode="click,expose">
              <style>.qrcode-app { margin: 20px 0; } .qrcode-app a.download { display: block; width: 300px; height: 80px; background: url(Images/qrcode_app4@2x.png) no-repeat; background-size: contain; background-image: -webkit-image-set(url() 1x, url() 2x); background-image: -moz-image-set(url() 1x, url() 2x); background-image: -ms-image-set(url() 1x, url() 2x); background-image: -o-image-set(url() 1x, url() 2x); }</style>
              <div class="qrcode-app">
                <a class="download" href="" target="_blank"></a>
              </div>
            </div>
            <!-- douban app end -->
            <!-- douban ad begin -->

            <div id="dale_book_home_bottem_right" class="ad-placeholder"></div>
            <!-- douban ad end --></div>
          <div class="extra"></div>
        </div>
      </div>
      @show
      <div id="footer">
        <span id="icp" class="fleft gray-link">&copy; 2005－2016 douban.com, all rights reserved 北京豆网科技有限公司</span>
        <a href="" style="display: none;"></a>
        <span class="fright">
          <a href="">关于豆瓣</a>·
          <a href="">在豆瓣工作</a>·
          <a href="">联系我们</a>·
          <a href="">免责声明</a>·
          <a href="" target="_blank">帮助中心</a>·
          <a href="">图书馆合作</a>·
          <a href="">移动应用</a>·
          <a href="">豆瓣广告</a></span>
        <script src="/index/Scripts/init.js" data-cfg-corelib="/index/js/jquery.js"></script>
      </div>
    </div>
    <script type="text/javascript">Do(function() {
        // 不再提醒
        window.DOUBAN_SITE_URL = '';
        Douban.init_delete_reply_notify = function(b) {
          var a = function(h) {
            h.preventDefault();
            var d = $(h.target);
            var i = d[0].href.split("#")[1];
            var c = (window.DOUBAN_SITE_URL || "") + "/j/reply_notify/remove_notify?id=" + i;
            $.ajax({
              url: c,
              dataType: "jsonp"
            });
            var f = d.closest(".item-req");
            if ($.contains($(".top-nav-reminder")[0], f[0])) {
              f = f.parent();
              var g = f.siblings().length;
              f.fadeOut(function() {
                f.remove()
              });
              if (g === 0) {
                f.closest(".bd").find(".no-new-notis").show()
              }
            } else {
              f.fadeOut()
            }
          };
          if (b.type === "click") {
            a(b)
          } else {
            $(b).click(a)
          }
        };
        Douban.init_discard_notify = function(b) {
          var a = function(i) {
            i.preventDefault();
            var c = (window.DOUBAN_SITE_URL || "") + "/j/notification/discard";
            var f = $(i.target);
            var d = f[0].name;
            $.get(c, {
              id: d,
              ck: get_cookie("ck")
            },
            function(e) {},
            "jsonp");
            var g = f.closest(".item-req");
            if ($.contains($(".top-nav-reminder")[0], g[0])) {
              g = g.parent();
              var h = g.siblings().length;
              g.fadeOut(function() {
                g.remove()
              });
              if (h === 0) {
                g.closest(".bd").find(".no-new-notis").show()
              }
            } else {
              g.fadeOut()
            }
          };
          if (b.type === "click") {
            a(b)
          } else {
            $(b).click(a)
          }
        };
        var current_noty_num = current_doumail_num = 0;
        function updateNotyNum(b) {
          current_noty_num = b;
          var a = $("#db-global-nav .top-nav-reminder");
          if (!b) {
            a.find(".num").remove();
            return
          }
          var c = a.find(".num span");
          if (!c.length) {
            a.append('<span class="num"><span>' + b + "</span><i></i></span>")
          } else {
            c.html(b)
          }
          if (b > 0 && b < 10) {
            a.css("margin-right", "5px")
          } else {
            if (b > 10) {
              a.css("margin-right", "15px")
            }
          }
        }
        function updateDoumailNum(b) {
          current_doumail_num = b;
          var c = $("#top-nav-doumail-link");
          var a = c.find("em");
          if (!b) {
            a.remove();
            return
          }
          var d = "(" + b + ")";
          if (!a.length) {
            c.append("<em>" + d + "</em>")
          } else {
            a.html(d)
          }
        }
        function addCheckNotyLog() {
          $("#top-nav-notimenu").data("from_push", "Y")
        }
        function addCheckDoumailLog(c) {
          var b = document.getElementById("top-nav-doumail-link");
          b.onclick = function() {
            moreurl(this, {
              from: "check_doumail_from_push",
              uid: c
            })
          }
        }
        function showDesktopNotification(c) {
          if (!window.Notification) {
            return
          }
          if (!c.num) {
            return
          }
          var b = get_cookie("enable_push_desktop_noty");
          b = b == "1";
          if (!b) {
            return
          }
          var a = "";
          if (c.type == "notification") {
            a = "你收到一个新提醒"
          } else {
            if (c.type == "doumail") {
              a = "你收到一封新豆邮"
            } else {
              return
            }
          }
          var d = new Notification("豆瓣", {
            body: a,
            tag: c.id,
            icon: ""
          });
          d.onclick = function() {
            window.focus();
            this.close()
          };
          d.onshow = function() {
            setTimeout(function() {
              d.close()
            },
            3000)
          }
        }
        function get_auth_token(a) {
          $.ajax({
            url:,
            dataType: "jsonp",
            success: function(b) {
              a(b.token, b.timestamp)
            }
          })
        }
        var timer = null;
        function startSyncNotyNumsCrossTabs() {
          clearTimeout(timer);
          timer = setTimeout(function() {
            var b = parseInt(get_cookie("push_noty_num") || "0", 10),
            a = parseInt(get_cookie("push_doumail_num") || "0", 10);
            if (b != current_noty_num) {
              updateNotyNum(b)
            }
            if (a != current_doumail_num) {
              updateDoumailNum(a)
            }
            if (!b && !a) {
              clearTimeout(timer)
            } else {
              timer = setTimeout(arguments.callee, 1500)
            }
          },
          1500)
        }
        var retry_times = 0,
        max_retry = 50,
        retry_interval_unit = 1000 * 3;
        function connectSSE(b, a, g) {
          if (!window.EventSource) {
            return
          }
          var d = "notification:user:" + b,
          c = (b + "_" + g) + ":" + a,
          i = "" + c;
          if (location.protocol == "https:") {
            i = "" + c
          }
          var f = null;
          try {
            f = new EventSource(i)
          } catch(h) {
            return
          }
          f.addEventListener("open",
          function() {
            retry_times = 0
          },
          false);
          f.addEventListener("error",
          function(j) {
            if (this.readyState == EventSource.CLOSED || this.readyState == EventSource.CONNECTING) {
              f.close();
              f = null;
              setTimeout(function() {
                retry_times += 1;
                if (retry_times < max_retry) {
                  get_auth_token(function(e, k) {
                    connectSSE(b, e, k)
                  })
                }
              },
              retry_times * retry_interval_unit)
            }
          },
          false);
          f.addEventListener("message",
          function(k) {
            var j = JSON.parse(k.data);
            if (j.type == "notification") {
              updateNotyNum(j.num);
              addCheckNotyLog();
              set_cookie({
                push_noty_num: j.num
              })
            } else {
              if (j.type == "doumail") {
                updateDoumailNum(j.num);
                addCheckDoumailLog(b);
                set_cookie({
                  push_doumail_num: j.num
                })
              }
            }
            startSyncNotyNumsCrossTabs();
            showDesktopNotification(j)
          },
          false)
        };

        var notimenu = $('#top-nav-notimenu');
        notimenu.bind('moreitem:show',
        function() {
          $.ajax({
            url: '',
            data: {
              ck: get_cookie('ck'),
              k: '148026085:548d9e32fcd0a79951301ea2ade54f9b183daccd',
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
              set_cookie({
                push_noty_num: e.n
              });
              if (window.load_event_monitor) {
                load_event_monitor($('#db-global-nav'));
              }
            }
          });
        });

        $(function() {
          $.ajax({
            url: '',
            dataType: 'jsonp',
            success: function(r) {
              updateNotyNum(r.num);
            }
          });
          $.ajax({
            url: '',
            dataType: 'jsonp',
            success: function(r) {
              updateDoumailNum(r.num);
            }
          });
        });

        connectSSE('148026085', 'de9431408d1c620822ccc42af437ba526def7a92', '1469542057');
        set_cookie({
          push_noty_num: 0,
          push_doumail_num: 0
        });

      });</script>
    <script type="text/javascript" src="/index/Scripts/559ed7dcf41d7f07.js"></script>
    <!-- mako -->
    <!-- douban ad begin -->
   
    <!-- douban ad end -->
    <script>Do(function() {
        $('.click-track').on('click',
        function(e) {
          e.preventDefault() var name = $(this).data('name') moreurl(this, {
            from: name
          })
        })
      })</script>
    <script type="text/javascript">var _paq = _paq || [];
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']); (function() {
        // var p = (('https:' == document.location.protocol) ? 'https': 'http'),
        u = p + '://fundin.douban.com/';
        _paq.push(['setTrackerUrl', u + 'piwik']);
        _paq.push(['setSiteId', '100001']);
        var d = document,
        g = d.createElement('script'),
        s = d.getElementsByTagName('script')[0];
        g.type = 'text/javascript';
        g.defer = true;
        g.async = true;
        g.src = p + '';
        s.parentNode.insertBefore(g, s);
      })();</script>
    <script type="text/javascript">var setMethodWithNs = function(namespace) {
        var ns = namespace ? namespace + '.': '',
        fn = function(string) {
          if (!ns) {
            return string
          }
          return ns + string
        }
        return fn
      }

      var gaWithNamespace = function(fn, namespace) {
        var method = setMethodWithNs(namespace) fn.call(this, method)
      }

      var _gaq = _gaq || [],
      accounts = [{
        id: 'UA-7019765-1',
        namespace: 'douban'
      },
      {
        id: 'UA-7019765-16',
        namespace: ''
      }],
      gaInit = function(account) {
        gaWithNamespace(function(method) {
          gaInitFn.call(this, method, account)
        },
        account.namespace)
      },
      gaInitFn = function(method, account) {
        _gaq.push([method('_setAccount'), account.id])

        _gaq.push([method('_addOrganic'), 'google', 'q']) _gaq.push([method('_addOrganic'), 'baidu', 'wd']) _gaq.push([method('_addOrganic'), 'soso', 'w']) _gaq.push([method('_addOrganic'), 'youdao', 'q']) _gaq.push([method('_addOrganic'), 'so.360.cn', 'q']) _gaq.push([method('_addOrganic'), 'sogou', 'query']) if (account.namespace) {
          _gaq.push([method('_addIgnoredOrganic'), '豆瓣']) _gaq.push([method('_addIgnoredOrganic'), 'douban']) _gaq.push([method('_addIgnoredOrganic'), '豆瓣网']) _gaq.push([method('_addIgnoredOrganic'), ''])
        }

        if (account.namespace === 'douban') {
          _gaq.push([method('_setDomainName'), '.douban.com'])
        }

        _gaq.push([method('_setCustomVar'), 1, 'responsive_view_mode', 'desktop', 3])

        _gaq.push([method('_setCustomVar'), 2, 'login_status', '1', 2]);

        _gaq.push([method('_trackPageview')])
      }

      for (var i = 0,
      l = accounts.length; i < l; i++) {
        var account = accounts[i] gaInit(account)
      }

      ; (function() {
        var ga = document.createElement('script');
        // ga.src = ('https:' == document.location.protocol ? 'https://ssl': 'http://www') + '.google-analytics.com/ga.js';
        ga.setAttribute('async', 'true');
        document.documentElement.firstChild.appendChild(ga);
      })()</script>
    <!-- dis6-docker--></body>

</html>
@section('myJs')
@show