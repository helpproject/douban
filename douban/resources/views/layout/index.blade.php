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
    <link rel="shortcut icon" href="https://img3.doubanio.com/favicon.ico" type="image/x-icon">
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
        path: 'https://img3.doubanio.com/f/book/863dbeaa2e8482485e4c41b5ee6e1e5caf5b2317/js/book/mod/cookie.js',
        type: 'js'
      })

      Do.add('mod/ajax', {
        path: 'https://img3.doubanio.com/f/book/3721d40f6c17d71c69cd3670d7229ca5d7c5f5a2/js/book/mod/ajax.js',
        requires: ['mod/cookie'],
        type: 'js'
      })

      Do.add('mod/ga', {
        path: 'https://img3.doubanio.com/f/book/0153f58dca13f8c3b603a9aa6d64856714d0dc28/js/book/mod/ga.js',
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
          "googleapis.com": 1,
          "gmaptiles.co.kr": 1,
          "gstatic.com": 1,
          "gstatic.cn": 1,
          "google-analytics.com": 1,
          "googleadservices.com": 1
        },
        a = function(l, k) {
          var j = new Image();
          j.onload = function() {};
          j.src = "https://www.douban.com/j/except_report?kind=ra022&reason=" + encodeURIComponent(l) + "&environment=" + encodeURIComponent(k)
        },
        i = function(k) {
          try {
            e.call(f, k)
          } catch(j) {
            e(k)
          }
        },
        c = /<script.*?src\=["']?([^"'\s>]+)/ig,
        g = /http:\/\/(.+?)\.([^\/]+).+/i;
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
        path: 'https://img3.doubanio.com/f/book/55fbd4a4ff1e2e85bf87df60be3b3dbe93b358bc/js/book/index.js'
      }) Do.add('ui/slide', {
        path: 'https://img3.doubanio.com/f/book/b7b632e744d6e70b6e2d31061455a0e111b055d8/js/book/ui/slide.js'
      }) Do.add('ui/bubble', {
        path: 'https://img3.doubanio.com/f/book/a32bc08e5a38888181b65e1be4f78e9f92003de9/js/book/ui/bubble.js'
      }) Do.add('widget/tabs', {
        path: 'https://img3.doubanio.com/f/book/4cc5e3d12acab0f0f5cf96c51d17b5fe46e0567e/js/book/widget/tabs.js'
      }) Do('book/index')</script>
    <script type='text/javascript'>var _vds = _vds || []; (function() {
        _vds.push(['setAccountId', '22c937bbd8ebd703f2d8e9445f7dfd03']);
        _vds.push(['setCS1', 'user_id', '1']); (function() {
          var vds = document.createElement('script');
          vds.type = 'text/javascript';
          vds.async = true;
          vds.src = ('https:' == document.location.protocol ? 'https://': 'http://') + 'dn-growing.qbox.me/vds.js';
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
        <div class="top-nav-info">
          <span class="perf-metric">
            <!-- _performtips_ --></span>
          <ul>
            <li>
              <a id="top-nav-doumail-link" href="https://www.douban.com/doumail/">豆邮</a></li>
            <li class="nav-user-account">
              <a target="_blank" href="https://www.douban.com/accounts/" class="bn-more">
                <span>返世寻你的帐号</span>
                <span class="arrow"></span>
              </a>
              <div class="more-items">
                <table cellpadding="0" cellspacing="0">
                  <tr>
                    <td>
                      <a href="https://www.douban.com/mine/">个人主页</a></td>
                  </tr>
                  <tr>
                    <td>
                      <a target="_blank" href="https://www.douban.com/mine/orders/">我的订单</a></td>
                  </tr>
                  <tr>
                    <td>
                      <a target="_blank" href="https://www.douban.com/mine/wallet/">我的钱包</a></td>
                  </tr>
                  <tr>
                    <td>
                      <a target="_blank" href="https://www.douban.com/accounts/">帐号管理</a></td>
                  </tr>
                  <tr>
                    <td>
                      <a href="https://www.douban.com/accounts/logout?source=book&amp;ck=2bVx">退出</a></td>
                  </tr>
                </table>
              </div>
            </li>
          </ul>
        </div>
        <div class="top-nav-reminder">
          <a href="https://www.douban.com/notification/" class="lnk-remind">提醒</a>
          <div id="top-nav-notimenu" class="more-items">
            <div class="bd">
              <p>加载中...</p>
            </div>
          </div>
        </div>
        <div class="top-nav-doubanapp">
          <a href="https://www.douban.com/doubanapp/app?channel=top-nav" class="lnk-doubanapp">下载豆瓣客户端</a>
          <div id="top-nav-appintro" class="more-items">
            <p class="appintro-title">豆瓣</p>
            <p class="slogan">我们的精神角落</p>
            <p class="qrcode">扫码直接下载</p>
            <div class="download">
              <a href="https://www.douban.com/doubanapp/redirect?channel=top-nav&amp;direct_dl=1&amp;download=iOS">iPhone</a>
              <span>·</span>
              <a href="https://www.douban.com/doubanapp/redirect?channel=top-nav&amp;direct_dl=1&amp;download=Android" class="download-android">Android</a></div>
          </div>
          <div id="doubanapp-tip">
            <a href="https://www.douban.com/doubanapp/app?channel=qipao" class="tip-link">豆瓣 4.0 全新发布</a>
            <a href="javascript: void 0;" class="tip-close">×</a></div>
        </div>
        <div class="global-nav-items">
          <ul>
            <li class="">
              <a href="https://www.douban.com/" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-main&#34;,&#34;uid&#34;:&#34;148026085&#34;}">豆瓣</a></li>
            <li class="on">
              <a href="https://book.douban.com/" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-book&#34;,&#34;uid&#34;:&#34;148026085&#34;}">读书</a></li>
            <li class="">
              <a href="https://movie.douban.com/" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-movie&#34;,&#34;uid&#34;:&#34;148026085&#34;}">电影</a></li>
            <li class="">
              <a href="https://music.douban.com/" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-music&#34;,&#34;uid&#34;:&#34;148026085&#34;}">音乐</a></li>
            <li class="">
              <a href="https://www.douban.com/location/" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-location&#34;,&#34;uid&#34;:&#34;148026085&#34;}">同城</a></li>
            <li class="">
              <a href="https://www.douban.com/group/" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-group&#34;,&#34;uid&#34;:&#34;148026085&#34;}">小组</a></li>
            <li class="">
              <a href="https://read.douban.com/?dcs=top-nav&amp;dcm=douban" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-read&#34;,&#34;uid&#34;:&#34;148026085&#34;}">阅读</a></li>
            <li class="">
              <a href="https://douban.fm/?from_=shire_top_nav" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-fm&#34;,&#34;uid&#34;:&#34;148026085&#34;}">FM</a></li>
            <li class="">
              <a href="https://dongxi.douban.com/?dcs=top-nav&amp;dcm=douban" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-commodity&#34;,&#34;uid&#34;:&#34;148026085&#34;}">东西</a></li>
            <li class="">
              <a href="https://market.douban.com/" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-market&#34;,&#34;uid&#34;:&#34;148026085&#34;}">市集</a></li>
            <li>
              <a href="#more" class="bn-more">
                <span>更多</span></a>
              <div class="more-items">
                <table cellpadding="0" cellspacing="0">
                  <tr>
                    <td>
                      <a href="https://moment.douban.com" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-moment&#34;,&#34;uid&#34;:&#34;148026085&#34;}">一刻</a></td>
                  </tr>
                  <tr>
                    <td>
                      <a href="https://ypy.douban.com" target="_blank" data-moreurl-dict="{&#34;from&#34;:&#34;top-nav-click-ypy&#34;,&#34;uid&#34;:&#34;148026085&#34;}">一拍一</a></td>
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
            <a href="https://book.douban.com">豆瓣读书</a></div>
          <div class="nav-search">
            <form action="https://book.douban.com/subject_search" method="get">
              <fieldset>
                <legend>搜索：</legend>
                <label for="inp-query">书名、作者、ISBN</label>
                <div class="inp">
                  <input id="inp-query" name="search_text" size="22" maxlength="60" value=""></div>
                <div class="inp-btn">
                  <input type="submit" value="搜索"></div>
                <input type="hidden" name="cat" value="1001"></fieldset>
            </form>
            <style>.nav-search, .nav .nav-primary { overflow: visible !important; } .nav-search { margin-left: 145px; }</style></div>
        </div>
      </div>
      <div class="nav-secondary">
        <ul class="nav-items">
          <li class="nav-item-first">
            <a href="https://book.douban.com/mine?icn=index-nav">我读</a></li>
          <li>
            <a href="https://book.douban.com/updates?icn=index-nav">动态</a></li>
          <li>
            <a href="https://book.douban.com/recommended?icn=index-nav">豆瓣猜</a></li>
          <li>
            <a href="https://book.douban.com/tag/?icn=index-nav">分类浏览</a></li>
          <li class="book-cart ">
            <a href="https://book.douban.com/cart?icn=index-nav">购书单</a></li>
          <li>
            <a href="https://read.douban.com/ebooks/?dcs=book-nav&amp;dcm=douban" target="_blank">电子图书</a></li>
          <li>
            <a href="https://market.douban.com/book?platform=web&amp;channel=book_nav">纸书</a></li>
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
                <div class="slide-controls">
                  <ol class="slide-dots">
                    <li>
                      <a data-index="1" href="#" class=""></a>
                    </li>
                    <li>
                      <a data-index="2" href="#" class=""></a>
                    </li>
                    <li>
                      <a data-index="3" href="#" class=""></a>
                    </li>
                    <li>
                      <a data-index="4" href="#" class=""></a>
                    </li>
                  </ol>
                  <div class="slide-btns">
                    <a href="#" class="prev">&#8249;</a>
                    <a href="#" class="next">&#8250;</a></div>
                </div>
              </div>
              <div class="bd">
                <div class="carousel">
                  <div class="slide-list">
                    <ul class="list-col list-col5 list-express slide-item">
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26817186/?icn=index-editionrecommend" title="我们始终独自行走在这个世界">
                            <img src="/index/Picture/s28812557.jpg" class="" width="106px" height="158px" alt="我们始终独自行走在这个世界"></a>
                        </div>
                        <div class="intervenor-info">
                          <img src="/index/Picture/jd_recommend.png" class='jd-icon' width="16" height="16" />
                          <span>推荐</span></div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26817186/?icn=index-editionrecommend" title="我们始终独自行走在这个世界">我们始终独自行走在这个世界</a></div>
                          <div class="author">米娅、七毛、牛莹等</div>
                          <div class="more-meta">
                            <h4 class="title">我们始终独自行走在这个世界</h4>
                            <p>
                              <span class="author">米娅、七毛、牛莹等</span>/
                              <span class="year">2016-7</span>/
                              <span class="publisher">百花洲文艺出版社</span></p>
                            <p class="abstract">十点读书、二更食堂、清华南都等各大微信号签约作者燃情巨献， 简书、豆瓣千万读者口碑相传作品。 这些年为了跟上梦想的脚步， 我们从一个小地方来到大都市。 曾经以为跌倒就再也爬不起来了， 曾经恨透了时间，它让我们在成功面前惨淡无光。 直到有一天，直面镜子里的自己， 回首来时的路， 每一段虽然艰辛但是一步一个脚印， 筑梦踏实。 我们从一个无所事事的人变成了现在更好...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26839598/?icn=index-editionrecommend" title="岩松看台湾">
                            <img src="/index/Picture/s28908705.jpg" class="" width="106px" height="158px" alt="岩松看台湾"></a>
                        </div>
                        <div class="intervenor-info">
                          <img src="/index/Picture/jd_recommend.png" class='jd-icon' width="16" height="16" />
                          <span>推荐</span></div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26839598/?icn=index-editionrecommend" title="岩松看台湾">岩松看台湾</a></div>
                          <div class="author">白岩松&nbsp;/&nbsp;等</div>
                          <div class="more-meta">
                            <h4 class="title">岩松看台湾</h4>
                            <p>
                              <span class="author">白岩松&amp;nbsp;等</span>/
                              <span class="year">2016-7-1</span>/
                              <span class="publisher">北京联合出版公司</span></p>
                            <p class="abstract">这是一本白岩松采访、思考的散文随笔，记录了他近年来采访的所见、所感、所悟。在本书中，白岩松以其一贯的客观视角，平实地将一段关于台湾的记忆呈现在读者眼前。 全书绝非轻描淡写，白岩松深入采访台湾各界代表人物，带着思考去谛听，带着问题去交谈。力图从自己的近距离观察之中，剖析政治、经济、文化、时尚等诸多方面。 《远的历史近的情》正如其书名一般，远是一...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26839601/?icn=index-editionrecommend" title="成功的真谛">
                            <img src="/index/Picture/s28908728.jpg" class="" width="106px" height="158px" alt="成功的真谛"></a>
                        </div>
                        <div class="intervenor-info">
                          <img src="/index/Picture/jd_recommend.png" class='jd-icon' width="16" height="16" />
                          <span>推荐</span></div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26839601/?icn=index-editionrecommend" title="成功的真谛">成功的真谛</a></div>
                          <div class="author">稻盛和夫</div>
                          <div class="more-meta">
                            <h4 class="title">成功的真谛</h4>
                            <p>
                              <span class="author">稻盛和夫</span>/
                              <span class="year">2016-7-1</span>/
                              <span class="publisher">中信出版集团股份有限公司</span></p>
                            <p class="abstract">《成功的真谛》每一部分都堪称稻盛流派成功哲学的教科书。在书中，稻盛和夫从经营哲学的高度全面梳理了自己对生活、工作的理念。作者指出，把困难的事理解得简单，从中发现真理，捍卫真理，只有这样才能成就我们的人生；企业的领导者一定要拥有能称之为“哲学”的高水平的判断标准；只有内心的意愿强烈而持久，才能表现为外在的现象；付出不亚于任何人的努力，提升心...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26815907/?icn=index-editionrecommend" title="这样和世界相处">
                            <img src="/index/Picture/s28806915.jpg" class="" width="106px" height="158px" alt="这样和世界相处"></a>
                        </div>
                        <div class="intervenor-info">
                          <img src="/index/Picture/jd_recommend.png" class='jd-icon' width="16" height="16" />
                          <span>推荐</span></div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26815907/?icn=index-editionrecommend" title="这样和世界相处">这样和世界相处</a></div>
                          <div class="author">[奥]阿尔弗雷德•阿德勒</div>
                          <div class="more-meta">
                            <h4 class="title">这样和世界相处</h4>
                            <p>
                              <span class="author">[奥]阿尔弗雷德•阿德勒</span>/
                              <span class="year">2016-7-1</span>/
                              <span class="publisher">江苏凤凰文艺出版社</span></p>
                            <p class="abstract">★现代自我心理学之父阿尔弗雷德•阿德勒对普通人而言*有生活价值的一本书，国内首次翻译引进。 ★本书在阿德勒去世后出版，是其一生成熟的、具有实用价值的作品。全书蕴含阿德勒一生思想精髓：“自卑感”与“创造性自我”，并强调人的“社会意识”，引导读者修正自己的生活风格，更好地融入社会，融入世界。 ★通俗易懂，对于洞悉自己和周围人的言行所对应的内心世界...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26798193/?icn=index-editionrecommend" title="不再独自旅行">
                            <img src="/index/Picture/s28737406.jpg" class="" width="106px" height="158px" alt="不再独自旅行"></a>
                        </div>
                        <div class="intervenor-info">
                          <img src="/index/Picture/jd_recommend.png" class='jd-icon' width="16" height="16" />
                          <span>推荐</span></div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26798193/?icn=index-editionrecommend" title="不再独自旅行">不再独自旅行</a></div>
                          <div class="author">大低&nbsp;/&nbsp;小低</div>
                          <div class="more-meta">
                            <h4 class="title">不再独自旅行</h4>
                            <p>
                              <span class="author">大低&amp;nbsp;小低</span>/
                              <span class="year">2016-5</span>/
                              <span class="publisher">人民邮电出版社</span></p>
                            <p class="abstract">这不仅仅是一本简单的旅行图文记录，更是一种美好的生活态度。书中记录了大低和小低一起在澳洲、欧洲、日本、美西及土耳其旅拍过程中暖心的见闻和一切美好的小细节。从小低柔软的文字和大低清新的照片里，我们可以看见生活本真的模样，听见恋人间动人的故事。岁月温柔地流淌，也许你也可以等到一个人，带你到远方去丈量每一寸土地，看遍山川湖海和星光。</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26822901/?icn=index-latestbook-subject" title="采珠勿惊龙：鬼雨法螺">
                            <img src="/index/Picture/s28831911.jpg" class="" width="106px" height="158px" alt="采珠勿惊龙：鬼雨法螺"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26822901/?icn=index-latestbook-subject" title="采珠勿惊龙：鬼雨法螺">采珠勿惊龙：鬼雨法螺</a></div>
                          <div class="author">二郎神犬马</div>
                          <div class="more-meta">
                            <h4 class="title">采珠勿惊龙：鬼雨法螺</h4>
                            <p>
                              <span class="author">二郎神犬马</span>/
                              <span class="year">2016-7</span>/
                              <span class="publisher">湖南文艺出版社</span></p>
                            <p class="abstract">千金之珠，必在九重之渊，骊龙颔下。自古中国海禁森严，巨浪如山，水下幽深莫测。恶水出好珠，有异珠的地方通常凶险异常。采珠，是拿命相搏的手艺。所以准备寻觅异珠的采珠人，每次沉潜水府都要做好有去无回的准备。采珠人世代传承，留下许多觅采异珠时的规矩禁忌。其中要紧的一条：采珠勿惊龙！ 地质古生物专业专家突然猝死在研究室，孙子杨宣在爷爷的死亡中发现种种...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26816164/?icn=index-latestbook-subject" title="盗火与革命">
                            <img src="/index/Picture/s28855111.jpg" class="" width="106px" height="158px" alt="盗火与革命"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26816164/?icn=index-latestbook-subject" title="盗火与革命">盗火与革命</a></div>
                          <div class="author">余世存</div>
                          <div class="more-meta">
                            <h4 class="title">盗火与革命</h4>
                            <p>
                              <span class="author">余世存</span>/
                              <span class="year">2016-7-1</span>/
                              <span class="publisher">铁葫芦 / 北京联合出版公司出版</span></p>
                            <p class="abstract">【余世存立人三部曲】 100个时代人物的命运转折 200年近代中国的风雨苍黄 余世存二十年磨一剑，纪传百位民国人物 ◆著名学者余世存二十余年历史人物写作全面呈现。 “立人三部曲”包括《盗火与革命》《安身与立命》《世道与人心》，是余世存二十余年来近代人物写作的完整呈现，《非常道》之后重磅作品。 ◆近现代中国的纪传体叙述。 书中传主百名，涉及人物数百位，跨越历...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26766562/?icn=index-latestbook-subject" title="蒙着眼睛的旅行者">
                            <img src="/index/Picture/s28846242.jpg" class="" width="106px" height="158px" alt="蒙着眼睛的旅行者"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26766562/?icn=index-latestbook-subject" title="蒙着眼睛的旅行者">蒙着眼睛的旅行者</a></div>
                          <div class="author">朱岳</div>
                          <div class="more-meta">
                            <h4 class="title">蒙着眼睛的旅行者</h4>
                            <p>
                              <span class="author">朱岳</span>/
                              <span class="year">2016-7</span>/
                              <span class="publisher">北京联合出版公司·后浪出版公司</span></p>
                            <p class="abstract">这里有一个用10根面条做手指、曲别针连接肢体的患病姑娘......《我可怜的女朋友》 这里有偷金鱼的女贼与头顶茄子皮的侦探的爱情故事......《诗人与侦探》 这里有朝生暮死、命如蜉蝣的男人和女人，相视一笑是最大的奢侈和浪漫......《马尔特兰湖畔的男女》 这里有从地 里长出来的耄耋老人， 逐渐长成壮年、少年、儿童、婴儿，最终经由女人的子宫重新变为种子......《轮回》 这里有可以...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26809302/?icn=index-latestbook-subject" title="食器之美">
                            <img src="/index/Picture/s28847195.jpg" class="" width="106px" height="158px" alt="食器之美"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26809302/?icn=index-latestbook-subject" title="食器之美">食器之美</a></div>
                          <div class="author">[日] 高木教雄&nbsp;/&nbsp;[日] 石井宏明</div>
                          <div class="more-meta">
                            <h4 class="title">食器之美</h4>
                            <p>
                              <span class="author">[日] 高木教雄&amp;nbsp;[日] 石井宏明</span>/
                              <span class="year">2016-6-1</span>/
                              <span class="publisher">新星出版社</span></p>
                            <p class="abstract">体现日本民艺大师柳宗理“实用之美”的白瓷酱油壶；传承两百年的小久慈烧煎茶碗；当代最受欢迎的工业设计大师马克·纽森充满未来想象的彩色沥水盘；法国设计鬼才菲利普·史塔克科幻感十足的外星人榨汁器…… 六十六件设计大师精心打造的食器，既有极简时尚的西方现代之作，也有古朴温润的东方手作好物；将温暖与自然的元素融入冰冷的工业设计，让“器物之美”进入日常...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26818183/?icn=index-latestbook-subject" title="失忆的爱丽丝">
                            <img src="/index/Picture/s28816460.jpg" class="" width="106px" height="158px" alt="失忆的爱丽丝"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26818183/?icn=index-latestbook-subject" title="失忆的爱丽丝">失忆的爱丽丝</a></div>
                          <div class="author">[澳]莉安·莫利亚提</div>
                          <div class="more-meta">
                            <h4 class="title">失忆的爱丽丝</h4>
                            <p>
                              <span class="author">[澳]莉安·莫利亚提</span>/
                              <span class="year">2016-7-1</span>/
                              <span class="publisher">广西科学技术出版社</span></p>
                            <p class="abstract">★故事简介★ 即将迎来40岁生日的爱丽丝，在健身房的一次意外中不幸磕到头部，醒来之后她丢失了十年的记忆，印象中的一切都还是自己29岁时的样子。然而十年间，岁月这把利剑已经把爱丽丝的生活雕刻成她曾经极度厌恶和恐惧的样子。29岁的她想要挽回曾经无比珍爱的婚姻，想要把自己亲手毁掉的亲情和友 情再次找回来。然而现实却并非她想象般容易…… 爱丽丝唯一记得的就...</p></div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-col list-col5 list-express slide-item">
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26820506/?icn=index-latestbook-subject" title="给世界的答案">
                            <img src="/index/Picture/s28826962.jpg" class="" width="106px" height="158px" alt="给世界的答案"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26820506/?icn=index-latestbook-subject" title="给世界的答案">给世界的答案</a></div>
                          <div class="author">[美] 斯蒂芬•温伯格（Steven Weinberg）</div>
                          <div class="more-meta">
                            <h4 class="title">给世界的答案</h4>
                            <p>
                              <span class="author">[美] 斯蒂芬•温伯格（Steven Weinberg）</span>/
                              <span class="year">2016-7</span>/
                              <span class="publisher">中信出版社</span></p>
                            <p class="abstract">日升月落，电闪雷鸣，四季更迭，生老病死，我们生活的世界充满了各种谜题，而我们对这个世界和我们自身的看法、感受，正源自我们如何认识和解释这个世界。但古代和中世纪的科学家不知道我们现在对世界已知的一切，更重要的是，他们没有类似于我们的思维方法，不知道世界还有哪些未知尚待发现 ，也不知道如何去发现未知。随着文明演进，人们不断努力解开众多谜团，科...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26818078/?icn=index-latestbook-subject" title="我喜欢的样子，你都有">
                            <img src="/index/Picture/s28816278.jpg" class="" width="106px" height="158px" alt="我喜欢的样子，你都有"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26818078/?icn=index-latestbook-subject" title="我喜欢的样子，你都有">我喜欢的样子，你都有</a></div>
                          <div class="author">慕容素衣</div>
                          <div class="more-meta">
                            <h4 class="title">我喜欢的样子，你都有</h4>
                            <p>
                              <span class="author">慕容素衣</span>/
                              <span class="year">2016-6</span>/
                              <span class="publisher">百花洲文艺出版社</span></p>
                            <p class="abstract">你是不是在等一个人？你喜欢的样子他都有，可是他还没来？或者他来过又离开了？ 没关系，这本书里有16个暖心治愈的故事，就像雨天里的一把伞，当我们需要时，它正好在我们身边。 当你在深夜辗转睡不着时，当你在等待地铁公车时，当你对爱迷茫不安时，当你需要慰藉与勇气时，跟书里的他们认识一下吧。 他们就像朋友在暗夜里对你叙述，讲述他们曾有过的欢喜、疯狂、悲哀...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26763171/?icn=index-latestbook-subject" title="雾中回忆">
                            <img src="/index/Picture/s28719298.jpg" class="" width="106px" height="158px" alt="雾中回忆"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26763171/?icn=index-latestbook-subject" title="雾中回忆">雾中回忆</a></div>
                          <div class="author">[澳] 凯特·莫顿</div>
                          <div class="more-meta">
                            <h4 class="title">雾中回忆</h4>
                            <p>
                              <span class="author">[澳] 凯特·莫顿</span>/
                              <span class="year">2016-6-1</span>/
                              <span class="publisher">江苏凤凰文艺出版社</span></p>
                            <p class="abstract">整个南半球销量第一的女作家 横扫北半球所有国家所有榜单 --------------------------------------- 用一次勇敢的回忆，来原谅所有过去。 --------------------------------------- 1924年，里弗顿 庄园正在举办一场盛大的社交晚宴。觥筹交错之际，诗人罗比徘徊在黑黢黢的湖边。突然，一声枪响。人们都以为诗人的自杀是一个感伤浪漫的故事，但真相只有女仆格蕾丝知道。 1999年，一位电影制片人正在拍...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26774090/?icn=index-latestbook-subject" title="内在体验">
                            <img src="/index/Picture/s28757821.jpg" class="" width="106px" height="158px" alt="内在体验"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26774090/?icn=index-latestbook-subject" title="内在体验">内在体验</a></div>
                          <div class="author">[法]乔治·巴塔耶</div>
                          <div class="more-meta">
                            <h4 class="title">内在体验</h4>
                            <p>
                              <span class="author">[法]乔治·巴塔耶</span>/
                              <span class="year">2016-6</span>/
                              <span class="publisher">广西师范大学出版社</span></p>
                            <p class="abstract">此书为巴塔耶的重要代表作之一，为其 “无神学大全”三部曲的第一部。该书出版于二战期间，是巴塔耶治疗肺病期间智力劳作的产物，他的主要哲学概念——耗费、逾越、祝祭、神圣情色，他有关生命、死亡与内在体验的沉思，均赖此书得以深刻展示。其观点振聋发聩，曾令萨特大为惊愕，著文批判。在《内在体验》中，巴塔耶的行文方式深受尼采及克尔凯郭尔影响，他以哲理名...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26810827/?icn=index-latestbook-subject" title="黑石之墓">
                            <img src="/index/Picture/s28756722.jpg" class="" width="106px" height="158px" alt="黑石之墓"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26810827/?icn=index-latestbook-subject" title="黑石之墓">黑石之墓</a></div>
                          <div class="author">[英] 克莱儿·麦克福尔</div>
                          <div class="more-meta">
                            <h4 class="title">黑石之墓</h4>
                            <p>
                              <span class="author">[英] 克莱儿·麦克福尔</span>/
                              <span class="year">2016-7</span>/
                              <span class="publisher">九州出版社</span></p>
                            <p class="abstract">希瑟同意和道奇还有他的朋友们一同出去野营,是因为她很想和这个男孩走得更近一些。 但海滩悬崖边发现的神秘黑石冢，打搅了他们的二人世界。希瑟确信他们已经唤醒恶毒的灵魂。未知之物隐藏在漆黑的暗夜之中,吞噬了一个又一个同伴，仿佛正在酝酿致命的复仇。 一年后,希瑟很庆幸自己能从黑色石堆墓的诅咒中侥幸逃脱, 但她仍然在等待道奇从昏迷中醒来。如果他无法醒来,她该如...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26795375/?icn=index-latestbook-subject" title="原来你是这样的欧洲史">
                            <img src="/index/Picture/s28728077.jpg" class="" width="106px" height="158px" alt="原来你是这样的欧洲史"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26795375/?icn=index-latestbook-subject" title="原来你是这样的欧洲史">原来你是这样的欧洲史</a></div>
                          <div class="author">叶小辛</div>
                          <div class="more-meta">
                            <h4 class="title">原来你是这样的欧洲史</h4>
                            <p>
                              <span class="author">叶小辛</span>/
                              <span class="year">2016-6</span>/
                              <span class="publisher">北京联合出版公司</span></p>
                            <p class="abstract">1.如果你爱看《甄嬛传》，宫斗争储欲罢不能，那么你一定要看《原来你是这样的欧洲史》。私生子逆袭，为爱形婚，比小说还狗血，比电影还刺激。 2.如果你不喜欢干巴巴的历史课本，这里不仅有王朝更迭，还有不能错过的欧洲宫廷八卦，情妇上位，弃妇复仇。历史从未如此有趣。 3.用刷一次朋友圈的时间，读懂一段真实的欧洲历史，让所有历史成为你的谈资。 4.豆瓣专栏作家叶小...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26776779/?icn=index-latestbook-subject" title="沃辛传奇">
                            <img src="/index/Picture/s28879366.jpg" class="" width="106px" height="158px" alt="沃辛传奇"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26776779/?icn=index-latestbook-subject" title="沃辛传奇">沃辛传奇</a></div>
                          <div class="author">[美] 奥森·斯科特·卡德</div>
                          <div class="more-meta">
                            <h4 class="title">沃辛传奇</h4>
                            <p>
                              <span class="author">[美] 奥森·斯科特·卡德</span>/
                              <span class="year">2016-8</span>/
                              <span class="publisher">浙江文艺出版社</span></p>
                            <p class="abstract">讲述少年的成长和人类的进化，“长生不老万事如意，是世上最糟糕的事”。 沃辛是一个被称为“天贼”的超能力者。 前半生他是遭人猎杀的逃犯，参与毁掉了一个虚假的永生世界； 后半生他是拯救人类的上帝，在宇宙的尽头从零开始再造世界。 一万五千年以后，沃辛的子孙们完成了终极进化，打造出一个无痛无灾的极乐世界， 但失望透顶的沃辛对他们说：“我希望自己十岁的时候就...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26806997/?icn=index-latestbook-subject" title="平面设计中的网格系统">
                            <img src="/index/Picture/s28808008.jpg" class="" width="106px" height="158px" alt="平面设计中的网格系统"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26806997/?icn=index-latestbook-subject" title="平面设计中的网格系统">平面设计中的网格系统</a></div>
                          <div class="author">[瑞士] 约瑟夫·米勒–布罗克曼</div>
                          <div class="more-meta">
                            <h4 class="title">平面设计中的网格系统</h4>
                            <p>
                              <span class="author">[瑞士] 约瑟夫·米勒–布罗克曼</span>/
                              <span class="year">2016-7-1</span>/
                              <span class="publisher">上海人民美术出版社</span></p>
                            <p class="abstract">本书主要介绍了网格的功能和使用方法，旨在为平面和空间的设计师们提供一个实际的工具，让他们可以从概念、组织结构和设计上更有效、自信地处理和解决视觉问题。 与此同时，此书也为设计教育者提供了帮助，让他们能在教学中更好地解决实际问题。一方面，教师通过教学能为学生 提供一个很好的机会去了解和熟悉网格设计的要点和方法；另一方面，学生也可以通过自我训练...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26820841/?icn=index-latestbook-subject" title="沉默的告白">
                            <img src="/index/Picture/s28825520.jpg" class="" width="106px" height="158px" alt="沉默的告白"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26820841/?icn=index-latestbook-subject" title="沉默的告白">沉默的告白</a></div>
                          <div class="author">罗莎蒙德•勒普顿（Rosamund Lupton）</div>
                          <div class="more-meta">
                            <h4 class="title">沉默的告白</h4>
                            <p>
                              <span class="author">罗莎蒙德•勒普顿（Rosamund Lupton）</span>/
                              <span class="year">2016-7-1</span>/
                              <span class="publisher">湖南文艺出版社</span></p>
                            <p class="abstract">11月24日，著名物理学家雅思明和先天失聪的十岁女儿露比踏上了阿拉斯加的茫茫雪原，然而期待中本应在机场迎接的丈夫马修并未出现。 几个小时之后，雅思明和露比开始了在冰封荒野里的孤独跋涉。这里渺无人烟、寸草不生，连眼泪都能瞬间成冰，漫长的黑夜还将持续54天。 她们要寻找露比的父亲，深入荒原腹地的野生动物摄影师，警察断言他已经在大火中丧生，可是雅思明知...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26816874/?icn=index-latestbook-subject" title="理解未来的7个原则">
                            <img src="/index/Picture/s28920206.jpg" class="" width="106px" height="158px" alt="理解未来的7个原则"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26816874/?icn=index-latestbook-subject" title="理解未来的7个原则">理解未来的7个原则</a></div>
                          <div class="author">[美]丹尼尔·伯勒斯（Daniel Burrus）&nbsp;/&nbsp;约翰·戴维·曼（John David Mann）</div>
                          <div class="more-meta">
                            <h4 class="title">理解未来的7个原则</h4>
                            <p>
                              <span class="author">[美]丹尼尔·伯勒斯（Daniel Burrus）&amp;nbsp;约翰·戴维·曼（John David Mann）</span>/
                              <span class="year">2016-7</span>/
                              <span class="publisher">后浪出版公司·江西人民出版社</span></p>
                            <p class="abstract">学会如何看到未来，你就更知道现在怎么做！ ................... ※编辑推荐※ ☆ 纽约时报、华尔街日报、美国亚马逊榜首畅销书。 ☆ 作者是美国资深未来学家，30年潜心研究科技趋势及其在商业上的应用，是微软、谷歌和IBM等著名科技公司的幕后咨询师。 ☆ 《高效 能人士的7个习惯》作者史蒂芬•柯维，《福布斯》杂志总编辑史提夫•福布斯倾力推荐。 ☆ 不仅向读者展示了未来科技的趋...</p></div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-col list-col5 list-express slide-item">
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26791998/?icn=index-latestbook-subject" title="山中的糖果">
                            <img src="/index/Picture/s28753282.jpg" class="" width="106px" height="158px" alt="山中的糖果"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26791998/?icn=index-latestbook-subject" title="山中的糖果">山中的糖果</a></div>
                          <div class="author">邓安庆</div>
                          <div class="more-meta">
                            <h4 class="title">山中的糖果</h4>
                            <p>
                              <span class="author">邓安庆</span>/
                              <span class="year">2016-6</span>/
                              <span class="publisher">人民文学出版社</span></p>
                            <p class="abstract">《山中的糖果》通过“亲人记”“世间记”“回乡记”三个部分，集结了作者对故乡亲人、师友，对身边那些人那些事的记录与怀念。作者邓安庆生长在农村，曾游荡于多个城市之间，从事过广告策划、内刊编辑、企业培训、木材加工、图书编辑、互联网等不同职业，阅历丰富，天性敏感细腻，对乡村，对城市，对社会底层的人和事，都有独到而细致入微的体察。作者文笔细腻，语言...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26801831/?icn=index-latestbook-subject" title="在宇宙间不易被风吹散">
                            <img src="/index/Picture/s28903349.jpg" class="" width="106px" height="158px" alt="在宇宙间不易被风吹散"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26801831/?icn=index-latestbook-subject" title="在宇宙间不易被风吹散">在宇宙间不易被风吹散</a></div>
                          <div class="author">冯唐</div>
                          <div class="more-meta">
                            <h4 class="title">在宇宙间不易被风吹散</h4>
                            <p>
                              <span class="author">冯唐</span>/
                              <span class="year">2016-6-1</span>/
                              <span class="publisher">北京联合出版公司</span></p>
                            <p class="abstract">【内容简介】 我们通过身体和心灵，透过接触到的事物了解自己和这个世界。 人慢慢长大，喜欢略过本质看现象，一日茶，一夜酒，一部毫不掩饰的小说，一次没有目的的见面，一群不谈正经事的朋友，用美好的器物消磨必定留不住的时间。所谓本质一直就在那里，本一不二。 情调、趣味、审美、态度……总有什么让你与众不同，成为自己。 “我想，再晚一点，我会停止用手表。我会...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26803179/?icn=index-latestbook-subject" title="平原上的摩西">
                            <img src="/index/Picture/s28810239.jpg" class="" width="106px" height="158px" alt="平原上的摩西"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26803179/?icn=index-latestbook-subject" title="平原上的摩西">平原上的摩西</a></div>
                          <div class="author">双雪涛</div>
                          <div class="more-meta">
                            <h4 class="title">平原上的摩西</h4>
                            <p>
                              <span class="author">双雪涛</span>/
                              <span class="year">2016-7</span>/
                              <span class="publisher">百花文艺出版社</span></p>
                            <p class="abstract">本书是双雪涛的第一部中短篇小说集，书中收录了10篇作品，小说风格不一，题材有校园成长类，奇人故事类，侦探悬疑类，作者的笔调朴素，冷峻又有文字表面按捺不住的恣意，叙事从容冷静的背后蕴含着人物内心的不平静、简单事情的不平凡。 在近乎平静的风暴中，每个人都被命运所驱逐。 尤以《平原上的摩西》一篇受到读者的广泛好评。小说讲述由一起出租车司机被杀案揭开...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26826236/?icn=index-latestbook-subject" title="负负得正的人生奥义书">
                            <img src="/index/Picture/s28849368.jpg" class="" width="106px" height="158px" alt="负负得正的人生奥义书"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26826236/?icn=index-latestbook-subject" title="负负得正的人生奥义书">负负得正的人生奥义书</a></div>
                          <div class="author">键人（林育圣）&nbsp;/&nbsp;绘者：Eripo</div>
                          <div class="more-meta">
                            <h4 class="title">负负得正的人生奥义书</h4>
                            <p>
                              <span class="author">键人（林育圣）&amp;nbsp;绘者：Eripo</span>/
                              <span class="year">2016-7</span>/
                              <span class="publisher">江苏凤凰文艺出版社</span></p>
                            <p class="abstract">《负负得正的人生奥义书》是台湾2016年度最火图书《每天来点负能量》的大陆独家简体版本！作者键人上台湾著名综艺节目《SS小燕之夜》宣传新书并获得倾情推荐！每天来点负能量，清新脱俗治脑残！这是一本让你裸身见人的奇书！一次破解“梦想”“成功”“职场”“真爱”套路，让叽叽歪歪的正能量心灵鸡汤圆润地狗带吧！随书附赠书签、明信片、不干胶贴纸，让键猫萌爆...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26827167/?icn=index-latestbook-subject" title="格列佛游记">
                            <img src="/index/Picture/s28853153.jpg" class="" width="106px" height="158px" alt="格列佛游记"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26827167/?icn=index-latestbook-subject" title="格列佛游记">格列佛游记</a></div>
                          <div class="author">〔英〕乔纳森·斯威夫特</div>
                          <div class="more-meta">
                            <h4 class="title">格列佛游记</h4>
                            <p>
                              <span class="author">〔英〕乔纳森·斯威夫特</span>/
                              <span class="year">2016-6</span>/
                              <span class="publisher">:云南人民出版社</span></p>
                            <p class="abstract">“想象力比知识更重要，因为知识是有限的，而想象力概括着世界的一切。”——爱因斯坦 内容简介（产品描述）： 《格列佛游记》是18世纪讽刺寓言作家乔纳森·斯威夫特的代表作，以船长格列佛的口吻，叙述他在小人国、大人国、飞岛国、慧马国的奇特经历。自1726年出版以来，被全世界读者喜爱，历经200余年不衰。 …… 风靡全球少年的经典游记故事， 一段匪夷所思的奇幻历...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26819270/?icn=index-latestbook-subject" title="美利坚共和国的缔造">
                            <img src="/index/Picture/s28857849.jpg" class="" width="106px" height="158px" alt="美利坚共和国的缔造"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26819270/?icn=index-latestbook-subject" title="美利坚共和国的缔造">美利坚共和国的缔造</a></div>
                          <div class="author">[美] 戈登·S. 伍德</div>
                          <div class="more-meta">
                            <h4 class="title">美利坚共和国的缔造</h4>
                            <p>
                              <span class="author">[美] 戈登·S. 伍德</span>/
                              <span class="year">2016-6</span>/
                              <span class="publisher">译林出版社</span></p>
                            <p class="abstract">独立战争拉开了美国革命的序幕，与此同时，美国国父们也开始了思想上的探索与交锋。如何防止政府权力的专断和扩张，保障人民的自由和权利？如何防止多数人对少数人的侵害，对民选代表的权利加以提防？革命一代的美利坚人不仅创造了一套全新的政治体制，而且构建了一套全新的政治观念，这是许许多多的政治人物行动和思考积累的结果。《美利坚共和国的缔造：1776—17...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26791409/?icn=index-latestbook-subject" title="奇爱博士">
                            <img src="/index/Picture/s28805120.jpg" class="" width="106px" height="158px" alt="奇爱博士"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26791409/?icn=index-latestbook-subject" title="奇爱博士">奇爱博士</a></div>
                          <div class="author">[英] 彼得·乔治</div>
                          <div class="more-meta">
                            <h4 class="title">奇爱博士</h4>
                            <p>
                              <span class="author">[英] 彼得·乔治</span>/
                              <span class="year">2016-8-1</span>/
                              <span class="publisher">北京时代华文书局</span></p>
                            <p class="abstract">“质疑《奇爱博士》是不是经典，就像质疑《蒙娜丽莎》是不是名画一样。” ——新浪娱乐 “连共产主义国家的作者都写不出这么出色的反美作品。” ——《纽约时报》 “文学史上最好的反战声明之一，毫无疑问也是最好笑的。” ——《奥斯汀纪事报》 “在似乎是玩世不恭的表面叙事下，充满了对人类命运的关心，蕴藏了深刻的忧患意识。” ——《北京晚报》 “关于核战略的所有东西...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26791257/?icn=index-latestbook-subject" title="没眼人">
                            <img src="/index/Picture/s28847057.jpg" class="" width="106px" height="158px" alt="没眼人"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26791257/?icn=index-latestbook-subject" title="没眼人">没眼人</a></div>
                          <div class="author">亚妮</div>
                          <div class="more-meta">
                            <h4 class="title">没眼人</h4>
                            <p>
                              <span class="author">亚妮</span>/
                              <span class="year">2016-6</span>/
                              <span class="publisher">中信出版社</span></p>
                            <p class="abstract">《没眼人》通过一个女记者在中国西部太行山深处的发现，用10年时间的跟踪纪录拍摄，讲述了发生在一支从抗日战争开始就为八路军谍战服务，被山里人称为“没眼人”的奇特队伍里的故事。这支队伍，由11个盲艺人传承组成，70年来以流浪卖唱为生。没人知道那些被列入中国非物质文化遗产名录的小调，其完整的曲牌曲目和原生的演唱方式就保全在没眼人队伍里；没人知道这个...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26807920/?icn=index-latestbook-subject" title="阿兰的童年">
                            <img src="/index/Picture/s28775844.jpg" class="" width="106px" height="158px" alt="阿兰的童年"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26807920/?icn=index-latestbook-subject" title="阿兰的童年">阿兰的童年</a></div>
                          <div class="author">[法]埃曼努埃尔·吉贝尔&nbsp;/&nbsp;Emmanuel Guibert</div>
                          <div class="more-meta">
                            <h4 class="title">阿兰的童年</h4>
                            <p>
                              <span class="author">[法]埃曼努埃尔·吉贝尔&amp;nbsp;Emmanuel Guibert</span>/
                              <span class="year">2016-6</span>/
                              <span class="publisher">北京联合出版公司·后浪出版公司</span></p>
                            <p class="abstract">《阿兰的童年》是《阿兰的战争》的姊妹篇、前传 动人的回忆 / 诗意的讲述 / 精美的水墨画 ................... ※编辑推荐※ 耄耋之年的阿兰凭借令人称奇的记忆力和独具魅力的语言，向漫画家描绘了20世纪30年代美国南加州的风光和家族趣事。 阿兰是个“平凡的美国人、超凡的讲述者”，他“简直是个‘超忆症’患者……其语言近乎诗：在不经意间，仿佛什么都没说，却总能勾起人们共通的...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26797807/?icn=index-latestbook-subject" title="给未来的记忆">
                            <img src="/index/Picture/s28852001.jpg" class="" width="106px" height="158px" alt="给未来的记忆"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26797807/?icn=index-latestbook-subject" title="给未来的记忆">给未来的记忆</a></div>
                          <div class="author">河合隼雄</div>
                          <div class="more-meta">
                            <h4 class="title">给未来的记忆</h4>
                            <p>
                              <span class="author">河合隼雄</span>/
                              <span class="year">2016-6</span>/
                              <span class="publisher">东方出版中心</span></p>
                            <p class="abstract">成长的秘密，藏在记忆里！男孩子，一样可以哭、我怕死、从自卑起步、没人理你反倒是好事、比起出人头地，还是好好活着…… 本书是日本心理学大师河合隼雄先生唯一一部全面追溯自己童年生活和青少年求学生涯的自传作品，也是一部从心理学角度剖析青少年成长历程的佳作。全书由一百多篇小短文组成，以河合先生标志性的讲故事手法和轻松聊天笔触写就，温情而励志。在深入...</p></div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-col list-col5 list-express slide-item">
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26809632/?icn=index-latestbook-subject" title="素手红尘">
                            <img src="/index/Picture/s28915819.jpg" class="" width="106px" height="158px" alt="素手红尘"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26809632/?icn=index-latestbook-subject" title="素手红尘">素手红尘</a></div>
                          <div class="author">伊北</div>
                          <div class="more-meta">
                            <h4 class="title">素手红尘</h4>
                            <p>
                              <span class="author">伊北</span>/
                              <span class="year">2016-7-5</span>/
                              <span class="publisher">漓江出版社</span></p>
                            <p class="abstract">军阀时期，大家族尚家的四个女儿聪明伶俐，各有千秋。大女儿已经出嫁，二女儿一心要革命，远赴东洋寻找革命真理；三女四女在北京遇到了充满魅力的才子兼革命者欧阳夏，并都钟情于他…… 正如本书题记所言，“最美不过，凭一双素手，劈开那红尘”，筱秋和意浓二姐妹，都是敢爱敢恨、有着独立精神追求的新女性；姐妹俩互争互补，将一个轰轰烈烈的时代，点缀得更加奇绚。 ...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26805083/?icn=index-latestbook-subject" title="心理治疗之路">
                            <img src="/index/Picture/s28852024.jpg" class="" width="106px" height="158px" alt="心理治疗之路"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26805083/?icn=index-latestbook-subject" title="心理治疗之路">心理治疗之路</a></div>
                          <div class="author">【日】河合隼雄</div>
                          <div class="more-meta">
                            <h4 class="title">心理治疗之路</h4>
                            <p>
                              <span class="author">【日】河合隼雄</span>/
                              <span class="year">2016-6</span>/
                              <span class="publisher">东方出版中心</span></p>
                            <p class="abstract">生命中最大的谜，从来不是外界，而是你自己 ！穷尽一生，只为与心灵相遇！ 本书是日本心理学大师河合隼雄先生，以多年临床分析所积累的经验为基础上，写下的心理治疗概述性论著。全书分十一个专题，下又细分为各个小主题，紧扣心理治疗的过程，心理治疗与社会、文化、的关系，以及心理治疗针对的多样化现实这三条线索，并穿插各种事例，以“河合式”的亲切行文，对心...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26810629/?icn=index-latestbook-subject" title="岁月如风小少年">
                            <img src="/index/Picture/s28919020.jpg" class="" width="106px" height="158px" alt="岁月如风小少年"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26810629/?icn=index-latestbook-subject" title="岁月如风小少年">岁月如风小少年</a></div>
                          <div class="author">曾良君</div>
                          <div class="more-meta">
                            <h4 class="title">岁月如风小少年</h4>
                            <p>
                              <span class="author">曾良君</span>/
                              <span class="year">2016-7</span>/
                              <span class="publisher">万卷出版公司·万榕书业</span></p>
                            <p class="abstract">★ 豆瓣、犀牛故事当红作家曾良君代表90后回首青春，书写暖心又锋利的少年故事。每个人都认识另一些人，一起走过青春。重温你我他的少年锦时，重建一代人的集体记忆。 ★ 安意如寄语推荐：这本书，像一本满载回忆与悲喜的同学录。曾良以赤子之心，挚诚之笔，追忆那些逝去的青春。 ★ 随书附赠原创暖心明信片，再现触不可及的过往和转瞬即逝的时光。提起笔，为曾经陪伴、...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26751893/?icn=index-latestbook-subject" title="哈布斯堡的灭亡">
                            <img src="/index/Picture/s28758866.jpg" class="" width="106px" height="158px" alt="哈布斯堡的灭亡"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26751893/?icn=index-latestbook-subject" title="哈布斯堡的灭亡">哈布斯堡的灭亡</a></div>
                          <div class="author">[美] 杰弗里·瓦夫罗</div>
                          <div class="more-meta">
                            <h4 class="title">哈布斯堡的灭亡</h4>
                            <p>
                              <span class="author">[美] 杰弗里·瓦夫罗</span>/
                              <span class="year">2016-7</span>/
                              <span class="publisher">社会科学文献出版社</span></p>
                            <p class="abstract">哈布斯堡王朝曾在十七世纪抵御土耳其人的进攻，守护欧洲文明；当拿破仑军队在欧洲无往不利时，哈布斯堡王朝也是抵抗革命势力的中流砥柱。但是十九世纪，民族主义浪潮席卷全欧洲，这个以多民族著称的“帝国”，如何能够继续保有共主的地位？ · 作者分析，这个古老帝国昧于现实，自不量力地走入 与德国连手向全欧洲宣战的窘境。原来自十九世纪后半的几十年来，帝国的军...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26825522/?icn=index-latestbook-subject" title="生活三部曲：生活的样子">
                            <img src="/index/Picture/s28845900.jpg" class="" width="106px" height="158px" alt="生活三部曲：生活的样子"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26825522/?icn=index-latestbook-subject" title="生活三部曲：生活的样子">生活三部曲：生活的样子</a></div>
                          <div class="author">[法]让-克劳德·弗洛克&nbsp;/&nbsp;Floc’h</div>
                          <div class="more-meta">
                            <h4 class="title">生活三部曲：生活的样子</h4>
                            <p>
                              <span class="author">[法]让-克劳德·弗洛克&amp;nbsp;Floc’h</span>/
                              <span class="year">2016-7</span>/
                              <span class="publisher">北京联合出版公司·后浪出版公司</span></p>
                            <p class="abstract">不可错过的当代插画家弗洛克温情之作 风行欧洲的“清晰线条”画风 简单却耐人寻味的生活哲思 ................... ※编辑推荐※ ☆ 简单、明快的漫画式的勾线和上色，优雅艺术的视觉享受。 ☆ 诠释生活，字里行间饱含父爱，适合亲子共读，共同探讨生活和爱的主题。 ☆ 著名法语翻译家周克希先生精雕细琢，直抵人心的译作。 ☆ 法国多家媒体报道，登上了法国发行量最大的综合性报纸《费加...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26776393/?icn=index-latestbook-subject" title="故乡，心里的风景">
                            <img src="/index/Picture/s28898512.jpg" class="" width="106px" height="158px" alt="故乡，心里的风景"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26776393/?icn=index-latestbook-subject" title="故乡，心里的风景">故乡，心里的风景</a></div>
                          <div class="author">（日）原田泰治</div>
                          <div class="more-meta">
                            <h4 class="title">故乡，心里的风景</h4>
                            <p>
                              <span class="author">（日）原田泰治</span>/
                              <span class="year">2016-6-1</span>/
                              <span class="publisher">南海出版公司</span></p>
                            <p class="abstract">【内容提要】 《故乡，心里的风景》共收录原田泰治222幅绘画作品。原田泰治访遍日本47个州道府县，用画笔描绘了自己心中的“故乡”。驶过花丛的轨道车、运河边的石造仓库群、乡村里的烧炭人、海边的曲屋、农民庆祝丰收的场景……无论是普通人的生活场景、自然中的一草一木，还是历史悠久的传统手工艺和传统建筑，在原田泰治的画中都可以找到。在他那朴素自然的绘画中...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26602780/?icn=index-latestbook-subject" title="乡村生活图景">
                            <img src="/index/Picture/s28771870.jpg" class="" width="106px" height="158px" alt="乡村生活图景"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26602780/?icn=index-latestbook-subject" title="乡村生活图景">乡村生活图景</a></div>
                          <div class="author">[以色列] 阿摩司·奥兹</div>
                          <div class="more-meta">
                            <h4 class="title">乡村生活图景</h4>
                            <p>
                              <span class="author">[以色列] 阿摩司·奥兹</span>/
                              <span class="year">2016-6</span>/
                              <span class="publisher">译林出版社</span></p>
                            <p class="abstract">★《爱与黑暗的故事》之后，阿摩司•奥兹 “辉煌生涯最优秀的作品” ★《卫报》2011年十佳短篇小说集 ★ 《纽约时报》年度关注作品 《乡村生活图景》被公认是阿摩司•奥兹继《爱与黑暗的故事》之后小说创作的新高度，迄今已被翻译成十几种文字。 故事发生在具有百年历史的以色列乡村，日常生活的表象下掩盖着令人不安的事实：陌生人的来访打破了蔡尔尼克的平静生活，深埋...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26825412/?icn=index-latestbook-subject" title="认识乐理">
                            <img src="/index/Picture/s28845543.jpg" class="" width="106px" height="158px" alt="认识乐理"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26825412/?icn=index-latestbook-subject" title="认识乐理">认识乐理</a></div>
                          <div class="author">[美]布鲁斯·本沃德&nbsp;/&nbsp;芭芭拉·加维·杰克逊&nbsp;/&nbsp;布鲁斯·R·杰克逊</div>
                          <div class="more-meta">
                            <h4 class="title">认识乐理</h4>
                            <p>
                              <span class="author">[美]布鲁斯·本沃德&amp;nbsp;芭芭拉·加维·杰克逊&amp;nbsp;布鲁斯·R·杰克逊</span>/
                              <span class="year">2016-7</span>/
                              <span class="publisher">北京联合出版公司·后浪出版公司</span></p>
                            <p class="abstract">不管学习哪种乐器，乐理知识必不可少！ 无需音乐基础，从零开始，轻松走进音乐世界！ .................. ※编辑推荐※ ☆ 美国高校经典教材，畅销50余年 : 风靡美国、畅销多年的经典音乐教材再次改版，新版本中增添了爵士、流行、布鲁斯的基础和声知识，零基础爱好者 可 以轻松入 门，专业音乐学习者也能够强化进阶。 ☆ 理论要点完备，视唱练耳同步训练 : 轻松掌握理论要点，为识谱演...</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26811966/?icn=index-latestbook-subject" title="无影人">
                            <img src="/index/Picture/s28902770.jpg" class="" width="106px" height="158px" alt="无影人"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26811966/?icn=index-latestbook-subject" title="无影人">无影人</a></div>
                          <div class="author">赵志明</div>
                          <div class="more-meta">
                            <h4 class="title">无影人</h4>
                            <p>
                              <span class="author">赵志明</span>/
                              <span class="year">2016-6</span>/
                              <span class="publisher">百花文艺出版社</span></p>
                            <p class="abstract">21个故事，石中蜈蚣、无影人、鱼蚌之影、破碎故乡、残破青春……赵志明始终用认真但略显荒诞的音调，写下志怪小说、乡土故事、青春回忆，从这些故事里，你能看到人性中的粗粝和疼痛，他们在说明我们正温热而鲜活地活着。</p></div>
                        </div>
                      </li>
                      <li class="">
                        <div class="cover">
                          <a href="https://book.douban.com/subject/26772667/?icn=index-latestbook-subject" title="我坐在火山的最边缘">
                            <img src="/index/Picture/s28790337.jpg" class="" width="106px" height="158px" alt="我坐在火山的最边缘"></a>
                        </div>
                        <div class="info">
                          <div class="title">
                            <a class="" href="https://book.douban.com/subject/26772667/?icn=index-latestbook-subject" title="我坐在火山的最边缘">我坐在火山的最边缘</a></div>
                          <div class="author">包慧怡</div>
                          <div class="more-meta">
                            <h4 class="title">我坐在火山的最边缘</h4>
                            <p>
                              <span class="author">包慧怡</span>/
                              <span class="year">2016-8</span>/
                              <span class="publisher">河南大学出版社</span></p>
                            <p class="abstract">本书收录了青年学者、诗人包慧怡2005—2015年间的代表诗作，是作者第一本正式出版的诗歌集。 包慧怡的诗具有一种罕见的女性气质，它不同于诗歌角色中的女性意识；某种意义上，它更近乎法国人德鲁兹指认的——在写作中成为女人的那种深刻而自觉的生命冲动。她的诗写得很大气，感受绵 密，体察细致，但又呈现了一种得体的心智之美。她的诗歌语调也很迷人，并且更可贵的...</p></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- douban ad begin -->
            <div id="dale_book_home_left_top" class="ad-placeholder" style="margin:-30px 0 30px;"></div>
            <!-- douban app end -->
            <div class="section popular-books">
              <div class="hd">
                <h2>
                  <span>最受关注图书榜</span>
                  <span class="link-more">
                    <a href="/chart?subcat=F&amp;icn=index-topchart-fiction">虚构类»</a></span>
                  <span class="link-more">
                    <a href="/chart?icn=index-topchart-nonfiction">非虚构类»</a></span>
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
                  <li class="">
                    <div class="cover">
                      <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/subject/26753478/?icn=index-topchart-subject">
                        <img src="/index/Picture/s28790177.jpg" alt="神逻辑" class=""></a>
                    </div>
                    <div class="info">
                      <h4 class="title">
                        <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/subject/26753478/?icn=index-topchart-subject" class="">神逻辑</a></h4>
                      <p class="entry-star-small">
                        <span class="allstar40 star-img"></span>
                        <span class="average-rating">7.4</span></p>
                      <p class="author">作者：[美] 阿里·阿莫萨维 著&nbsp;/&nbsp;[哥伦比亚] 亚历杭德罗·希拉尔多 绘</p>
                      <p class="book-list-classification">逻辑&nbsp;/&nbsp;思维&nbsp;/&nbsp;方法论</p>
                      <p class="extra-info"></p>
                      <p class="reviews">为了能够帮助我们改掉天生的错误，很有必要了解自己经常会犯哪些错，以此有则改之，无则加勉。 (
                        <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/review/7921566/?icn=index-topchart-subject">亦如是评论</a>)</p></div>
                  </li>
                  <li class="">
                    <div class="cover">
                      <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/subject/26787941/?icn=index-topchart-subject">
                        <img src="/index/Picture/s28738251.jpg" alt="玛格丽特小镇" class=""></a>
                    </div>
                    <div class="info">
                      <h4 class="title">
                        <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/subject/26787941/?icn=index-topchart-subject" class="">玛格丽特小镇</a></h4>
                      <p class="entry-star-small">
                        <span class="allstar40 star-img"></span>
                        <span class="average-rating">7.8</span></p>
                      <p class="author">作者：[美] 加·泽文</p>
                      <p class="book-list-classification">小说&nbsp;/&nbsp;外国文学&nbsp;/&nbsp;爱情</p>
                      <p class="extra-info">
                        <span class="meta-label">有电子书</span></p>
                      <p class="reviews">爱情的主题就在这些盛开又枯萎的花朵间达到了永恒。 (
                        <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/review/7961925/?icn=index-topchart-subject">A晃悠猫评论</a>)</p></div>
                  </li>
                  <li class="">
                    <div class="cover">
                      <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/subject/26791617/?icn=index-topchart-subject">
                        <img src="/index/Picture/s28714122.jpg" alt="大好河山可骑驴" class=""></a>
                    </div>
                    <div class="info">
                      <h4 class="title">
                        <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/subject/26791617/?icn=index-topchart-subject" class="">大好河山可骑驴</a></h4>
                      <p class="entry-star-small">
                        <span class="allstar45 star-img"></span>
                        <span class="average-rating">8.3</span></p>
                      <p class="author">作者：王这么</p>
                      <p class="book-list-classification">诗词&nbsp;/&nbsp;宋史&nbsp;/&nbsp;中国文学</p>
                      <p class="extra-info"></p>
                      <p class="reviews">读诗、读词，我的选择是注解越少越好，了解一首诗或者一词，重要的是它的背景。 (
                        <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/review/7907588/?icn=index-topchart-subject">风行水上评论</a>)</p></div>
                  </li>
                  <li class="">
                    <div class="cover">
                      <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/subject/26787931/?icn=index-topchart-subject">
                        <img src="/index/Picture/s28851079.jpg" alt="精神科的故事：在游泳池" class=""></a>
                    </div>
                    <div class="info">
                      <h4 class="title">
                        <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/subject/26787931/?icn=index-topchart-subject" class="">精神科的故事：在游泳池</a></h4>
                      <p class="entry-star-small">
                        <span class="allstar45 star-img"></span>
                        <span class="average-rating">8.4</span>
                        <span class="ml8">新上榜</span></p>
                      <p class="author">作者：[日] 奥田英朗</p>
                      <p class="book-list-classification">黑色幽默&nbsp;/&nbsp;日本文学&nbsp;/&nbsp;小说</p>
                      <p class="extra-info"></p>
                      <p class="reviews">对于大多数精神障碍者，普通的心理学理论真的不是特别适用。 (
                        <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/review/7976272/?icn=index-topchart-subject">我是小书虫评论</a>)</p></div>
                  </li>
                  <li class="">
                    <div class="cover">
                      <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/subject/26733854/?icn=index-topchart-subject">
                        <img src="/index/Picture/s28536926.jpg" alt="明天也是小春日和" class=""></a>
                    </div>
                    <div class="info">
                      <h4 class="title">
                        <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/subject/26733854/?icn=index-topchart-subject" class="">明天也是小春日和</a></h4>
                      <p class="entry-star-small">
                        <span class="allstar45 star-img"></span>
                        <span class="average-rating">9.0</span>
                        <span class="ml8">新上榜</span></p>
                      <p class="author">作者：[日] 津端英子&nbsp;/&nbsp;[日] 津端修一</p>
                      <p class="book-list-classification">日本&nbsp;/&nbsp;生活&nbsp;/&nbsp;田园</p>
                      <p class="extra-info"></p>
                      <p class="reviews">他们直接跳过了天下理想的负累，把一家子的好生活同时当作活着的意义和表象。 (
                        <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/review/7872768/?icn=index-topchart-subject">古肩评论</a>)</p></div>
                  </li>
                  <li class="">
                    <div class="cover">
                      <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/subject/26732624/?icn=index-topchart-subject">
                        <img src="/index/Picture/s28725292.jpg" alt="精神病患" class=""></a>
                    </div>
                    <div class="info">
                      <h4 class="title">
                        <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/subject/26732624/?icn=index-topchart-subject" class="">精神病患</a></h4>
                      <p class="entry-star-small">
                        <span class="allstar45 star-img"></span>
                        <span class="average-rating">8.5</span></p>
                      <p class="author">作者：[美]威廉·彼得·布拉蒂</p>
                      <p class="book-list-classification">精神病学&nbsp;/&nbsp;小说&nbsp;/&nbsp;外国文学</p>
                      <p class="extra-info"></p>
                      <p class="reviews">他们只好让自己维持在一个知道自己“疯了”的状态，来避免自己真的疯了。 (
                        <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/review/7935380/?icn=index-topchart-subject">猫靴评论</a>)</p></div>
                  </li>
                  <li class="">
                    <div class="cover">
                      <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/subject/26782538/?icn=index-topchart-subject">
                        <img src="/index/Picture/s28735342.jpg" alt="这幅画原来要看这里" class=""></a>
                    </div>
                    <div class="info">
                      <h4 class="title">
                        <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/subject/26782538/?icn=index-topchart-subject" class="">这幅画原来要看这里</a></h4>
                      <p class="entry-star-small">
                        <span class="allstar40 star-img"></span>
                        <span class="average-rating">7.4</span>
                        <span class="ml8">新上榜</span></p>
                      <p class="author">作者：[日]宫下规久朗</p>
                      <p class="book-list-classification">艺术&nbsp;/&nbsp;绘画&nbsp;/&nbsp;文化</p>
                      <p class="extra-info"></p>
                      <p class="reviews">很多时候，一直在山里的人，会意识不到自己一直在用山作为背景。 (
                        <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/review/7949503/?icn=index-topchart-subject">苏凌然评论</a>)</p></div>
                  </li>
                  <li class="">
                    <div class="cover">
                      <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/subject/26769999/?icn=index-topchart-subject">
                        <img src="/index/Picture/s28673707.jpg" alt="死神的浮力" class=""></a>
                    </div>
                    <div class="info">
                      <h4 class="title">
                        <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/subject/26769999/?icn=index-topchart-subject" class="">死神的浮力</a></h4>
                      <p class="entry-star-small">
                        <span class="allstar40 star-img"></span>
                        <span class="average-rating">8.2</span>
                        <span class="ml8">新上榜</span></p>
                      <p class="author">作者：[日]伊坂幸太郎</p>
                      <p class="book-list-classification">日本文学&nbsp;/&nbsp;小说&nbsp;/&nbsp;日系推理</p>
                      <p class="extra-info"></p>
                      <p class="reviews">准备一百个雨伞，给下雨天没带伞的陌生人一人送一把，这个爱心举动保证百分之百感动死神。 (
                        <a onclick="moreurl(this, {from:'pop_fiction'})" href="https://book.douban.com/review/7963455/?icn=index-topchart-subject">鲁迅评论</a>)</p></div>
                  </li>
                  <li class="">
                    <div class="cover">
                      <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/subject/26776967/?icn=index-topchart-subject">
                        <img src="/index/Picture/s28650756.jpg" alt="发现的乐趣" class=""></a>
                    </div>
                    <div class="info">
                      <h4 class="title">
                        <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/subject/26776967/?icn=index-topchart-subject" class="">发现的乐趣</a></h4>
                      <p class="entry-star-small">
                        <span class="allstar45 star-img"></span>
                        <span class="average-rating">8.4</span>
                        <span class="ml8">新上榜</span></p>
                      <p class="author">作者：[美] 理查德·费曼</p>
                      <p class="book-list-classification"></p>
                      <p class="extra-info"></p>
                      <p class="reviews">攻克一个难题、掌握一项技术，本身的乐趣和满足要比成为专家更有吸引力。 (
                        <a onclick="moreurl(this, {from:'pop_nonfiction'})" href="https://book.douban.com/review/7870539/?icn=index-topchart-subject">璃人泪@2011评论</a>)</p></div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- douban ad begin -->
            <div id="dale_book_home_left_middle" class="ad-placeholder" style="margin:-50px 0 30px;"></div>
            <!-- douban app end -->
            <div class="section market-books">
              <div class="hd">
                <h2>
                  <span>豆瓣纸书</span>
                  <span class="link-more">
                    <a href="https://market.douban.com/book/">查看全部»</a></span>
                </h2>
              </div>
              <div class="bd">
                <div class="top">
                  <div class="cover">
                    <a href="https://market.douban.com/book/winter_notes/">
                      <div class="pic" style="background-image: url(Images/winter_notes.png)"></div>
                    </a>
                  </div>
                  <div id="market_books_header_info" class="info">
                    <p class="title">冬日笔记
                      <em class="price">￥35.00</em></p>
                    <p class="desc indent-paragraph" data-row="4">这是当代著名小说家保罗•奥斯特与所有阅读者一次最坦诚的相遇，是他对自己一生的剖白。这里有保罗•奥斯特六十多年来的曲折的事业经历、复杂而深沉的爱情和欲望、和父母之间的牵绊，以及快乐、痛苦的身体记忆，等待与你诚恳交谈。</p></div>
                </div>
                <ul class="list-col list-col5">
                  <li>
                    <div class="cover">
                      <a href="https://market.douban.com/book/guerrilla/" target="_blank">
                        <img src="/index/Picture/guerrilla.png" width="106" height="140" alt="隐形军队" /></a>
                    </div>
                    <div class="info">
                      <div class="title">
                        <a href="https://market.douban.com/book/guerrilla/" target="_blank">隐形军队</a></div>
                      <div class="price">￥118.00</div></div>
                  </li>
                  <li>
                    <div class="cover">
                      <a href="https://market.douban.com/book/ninth_area/" target="_blank">
                        <img src="/index/Picture/ninth.png" width="106" height="140" alt="第九区·避难所" /></a>
                    </div>
                    <div class="info">
                      <div class="title">
                        <a href="https://market.douban.com/book/ninth_area/" target="_blank">第九区·避难所</a></div>
                      <div class="price">￥48.00</div></div>
                  </li>
                  <li>
                    <div class="cover">
                      <a href="https://market.douban.com/book/zheng_jie/" target="_blank">
                        <img src="/index/Picture/zheng_jie.png" width="106" height="140" alt="正解" /></a>
                    </div>
                    <div class="info">
                      <div class="title">
                        <a href="https://market.douban.com/book/zheng_jie/" target="_blank">正解</a></div>
                      <div class="price">￥35.00</div></div>
                  </li>
                  <li>
                    <div class="cover">
                      <a href="https://market.douban.com/book/wardrobe_story/" target="_blank">
                        <img src="/index/Picture/wardrobe.png" width="106" height="140" alt="我的衣橱故事" /></a>
                    </div>
                    <div class="info">
                      <div class="title">
                        <a href="https://market.douban.com/book/wardrobe_story/" target="_blank">我的衣橱故事</a></div>
                      <div class="price">￥68.00</div></div>
                  </li>
                  <li>
                    <div class="cover">
                      <a href="https://market.douban.com/book/if_i_were_a_book/" target="_blank">
                        <img src="/index/Picture/if.png" width="106" height="140" alt="如果我是一本书" /></a>
                    </div>
                    <div class="info">
                      <div class="title">
                        <a href="https://market.douban.com/book/if_i_were_a_book/" target="_blank">如果我是一本书</a></div>
                      <div class="price">￥38.00</div></div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="section ebook-area">
              <div class="hd">
                <h2 class=''>
                  <span class="">电子图书</span>
                  <span class="link-more">
                    <a class="" href="https://read.douban.com/ebooks?dcs=book-intro&amp;dcm=douban" target=_blank>查看全部»</a></span>
                </h2>
              </div>
              <div class="bd">
                <div class="">
                  <div class="sub-section my-collections">
                    <div class="sub-hd minibar">
                      <h3>我的想读中 1 本有电子书
                        <span class="more-info">
                          <a href="https://read.douban.com/ebooks/category/interest" target="_blank">更多&#187;</a></span>
                      </h3>
                    </div>
                    <div class="sub-bd" style=display:none>
                      <ul class="list-col list-col5">None</ul></div>
                  </div>
                </div>
                <div class="">
                  <div class="sub-section ">
                    <div class="sub-hd ">
                      <h3>热门电子图书
                        <span class="more-info">
                          <a href="https://read.douban.com/ebooks/category/all/?sort=top&amp;dcs=book-hot&amp;dcm=douban&amp;dct=read-more" target="_blank">更多&#187;</a></span>
                      </h3>
                    </div>
                    <div class="sub-bd">
                      <ul class="list-col list-col5">
                        <li class="">
                          <div class="cover">
                            <a href="https://read.douban.com/ebook/23113705/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" target="_blank" title="在宇宙间不易被风吹散">
                              <img src="/index/Picture/23113705.jpg" alt="在宇宙间不易被风吹散" width="106px" height="158px"></a>
                          </div>
                          <div class="info">
                            <div class="title">
                              <a href="https://read.douban.com/ebook/23113705/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" title="在宇宙间不易被风吹散" target="_blank">在宇宙间不易被风吹散</a></div>
                            <div class="price">15.00元</div>
                            <div class="more-meta">
                              <h4 class="title">在宇宙间不易被风吹散</h4>
                              <p>
                                <span class="author">冯唐</span>/
                                <span class="year">2016-6-1</span>/
                                <span class="publisher">北京联合出版公司</span>/
                                <span class="price">15.00元</span></p>
                              <p class="abstract">我们通过身体和心灵，透过接触到的事物了解自己和这个世界。 人慢慢长大，喜欢略过本质看现象，一日茶，一夜酒，一部毫不掩饰的小说，一次没有目的的见面，一群不谈正经事的朋友，用美好的器物消磨必定留不住的时间。所谓本质一直就在那里，本一不二。 情调、趣味、审美、态度……总有什么让你与众不同，成为自己。 “我想，再晚一点，我会停止用手表。我会老到有一天，...</p></div>
                          </div>
                        </li>
                        <li class="">
                          <div class="cover">
                            <a href="https://read.douban.com/ebook/22869583/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" target="_blank" title="我必须恋爱的理由">
                              <img src="/index/Picture/22869583.jpg" alt="我必须恋爱的理由" width="106px" height="158px"></a>
                          </div>
                          <div class="info">
                            <div class="title">
                              <a href="https://read.douban.com/ebook/22869583/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" title="我必须恋爱的理由" target="_blank">我必须恋爱的理由</a></div>
                            <div class="price">8.99元</div>
                            <div class="more-meta">
                              <h4 class="title">我必须恋爱的理由</h4>
                              <p>
                                <span class="author">王大根</span>/
                                <span class="year">2016-7-1</span>/
                                <span class="publisher">江西人民出版社</span>/
                                <span class="price">8.99元</span></p>
                              <p class="abstract">本书是由七个短篇和一个长篇组成的校园故事，讲述了真正的平凡少女的青春：精心修饰后也漂亮不起来的脸、万般努力也减不下去的体重、每到考前临时抱佛脚的学业、制造了无数场邂逅也没有爱上自己的美少年。他们是青春片里未曾成为主角的那群人，他们是青春小说里未曾遭遇任何浪漫桥段的那群人，他们是……我和你。 王大根，就是刚刚吃着冰淇淋、挺高兴地从你身边路过的...</p></div>
                          </div>
                        </li>
                        <li class="">
                          <div class="cover">
                            <a href="https://read.douban.com/ebook/23056995/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" target="_blank" title="广岛之恋">
                              <img src="/index/Picture/23056995.jpg" alt="广岛之恋" width="106px" height="158px"></a>
                          </div>
                          <div class="info">
                            <div class="title">
                              <a href="https://read.douban.com/ebook/23056995/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" title="广岛之恋" target="_blank">广岛之恋</a></div>
                            <div class="price">9.99元</div>
                            <div class="more-meta">
                              <h4 class="title">广岛之恋</h4>
                              <p>
                                <span class="author">[法] 玛格丽特·杜拉斯</span>/
                                <span class="year">2014-5</span>/
                                <span class="publisher">上海译文出版社</span>/
                                <span class="price">9.99元</span></p>
                              <p class="abstract">《广岛之恋》是杜拉斯为同名电影的拍摄而创作的电影脚本，是她最著名的代表作之一， 讲述在日本拍戏的法国女演员与日本建筑师的异国恋情，穿插遭遇原子弹的广岛和二战时期女演员少女时代在法国小城纳韦尔与德国士兵的爱情悲剧。 玛格丽特·杜拉斯（1914—1996）：法国小说家、剧作家、电影导演，本名玛格丽特·多纳迪厄，出生于印度支那，十八岁后回法国定居。她以电...</p></div>
                          </div>
                        </li>
                        <li class="">
                          <div class="cover">
                            <a href="https://read.douban.com/ebook/23362091/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" target="_blank" title="夏有乔木，雅望天堂.1">
                              <img src="/index/Picture/23362091.jpg" alt="夏有乔木，雅望天堂.1" width="106px" height="158px"></a>
                          </div>
                          <div class="info">
                            <div class="title">
                              <a href="https://read.douban.com/ebook/23362091/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" title="夏有乔木，雅望天堂.1" target="_blank">夏有乔木，雅望天堂.1</a></div>
                            <div class="price">4.99元</div>
                            <div class="more-meta">
                              <h4 class="title">夏有乔木，雅望天堂.1</h4>
                              <p>
                                <span class="author">籽月</span>/
                                <span class="year">2014</span>/
                                <span class="publisher">花山文艺出版社</span>/
                                <span class="price">4.99元</span></p>
                              <p class="abstract">28岁的园林设计师舒雅望是出生在一个军事后裔家庭。 16岁的时候舒爸让舒雅望去照顾10岁的夏木。 夏木因为童年时候经历一场死亡，跟已经死去多时的母亲的尸体呆了一个晚上，内心被蒙上了一层阴影。 雅望的出现渐渐融化了夏木的心； 可是雅望青梅竹马的恋人唐小天高中毕业后去当兵后，认识了大学同学曲蔚然，最终引狼入室。 从此雅望，夏木，唐小天，他们三个人的命运都因...</p></div>
                          </div>
                        </li>
                        <li class="">
                          <div class="cover">
                            <a href="https://read.douban.com/ebook/22372723/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" target="_blank" title="安德的游戏">
                              <img src="/index/Picture/22372723.jpg" alt="安德的游戏" width="106px" height="158px"></a>
                          </div>
                          <div class="info">
                            <div class="title">
                              <a href="https://read.douban.com/ebook/22372723/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" title="安德的游戏" target="_blank">安德的游戏</a></div>
                            <div class="price">12.00元</div>
                            <div class="more-meta">
                              <h4 class="title">安德的游戏</h4>
                              <p>
                                <span class="author">[美] 奥森·斯科特·卡德</span>/
                                <span class="year">2016-6</span>/
                                <span class="publisher">浙江文艺出版社</span>/
                                <span class="price">12.00元</span></p>
                              <p class="abstract">世界即将毁灭。 威胁来自另一文明——虫族。它们在数量、科技和战略上都碾压人类，在第一和第二次侦查性接触中，几乎摧毁所有人类舰队。 如今，第三次虫族入侵已迫在眉睫，而地球舰队尚未找到任何抵抗的可能。世界即将毁灭。人类最后的救世主，是一个六岁的儿童——安德。 在世界上几乎任何一家书店的书架上都能找到《安德的游戏》。这和它辉煌的得奖记录和畅销奇迹无关...</p></div>
                          </div>
                        </li>
                        <li class="">
                          <div class="cover">
                            <a href="https://read.douban.com/ebook/23236868/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" target="_blank" title="我喜欢这个“功利”的世界">
                              <img src="/index/Picture/23236868.jpg" alt="我喜欢这个“功利”的世界" width="106px" height="158px"></a>
                          </div>
                          <div class="info">
                            <div class="title">
                              <a href="https://read.douban.com/ebook/23236868/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" title="我喜欢这个“功利”的世界" target="_blank">我喜欢这个“功利”的世界</a></div>
                            <div class="price">9.99元</div>
                            <div class="more-meta">
                              <h4 class="title">我喜欢这个“功利”的世界</h4>
                              <p>
                                <span class="author">咪蒙</span>/
                                <span class="year">2016-6</span>/
                                <span class="publisher">湖南文艺出版社</span>/
                                <span class="price">9.99元</span></p>
                              <p class="abstract">当你足够优秀，所有你想要的一切都会主动找上你。 当你发光发亮，自然万众瞩目。 当你觉得为时已晚的时候，恰恰是最早的时候。 这个世上，只要你敢，再大的不可能，都会变成可能。 我喜欢这个“功利”的世界， 更重要的是，功利的背后，它承认的是你的努力。 我们深知世界的复杂、黑暗和荒谬，依然选择面对复杂，保持欢喜。 写给每一个为了让自己变得更好，而不断向上的你。 ...</p></div>
                          </div>
                        </li>
                        <li class="">
                          <div class="cover">
                            <a href="https://read.douban.com/ebook/23183617/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" target="_blank" title="来信勿拆">
                              <img src="/index/Picture/23183617.jpg" alt="来信勿拆" width="106px" height="158px"></a>
                          </div>
                          <div class="info">
                            <div class="title">
                              <a href="https://read.douban.com/ebook/23183617/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" title="来信勿拆" target="_blank">来信勿拆</a></div>
                            <div class="price">13.50元</div>
                            <div class="more-meta">
                              <h4 class="title">来信勿拆</h4>
                              <p>
                                <span class="author">【日】浜尾四郎</span>/
                                <span class="year">2016-5</span>/
                                <span class="publisher">北京联合出版公司</span>/
                                <span class="price">13.50元</span></p>
                              <p class="abstract">浜尾四郎著捷维编译的《来信勿拆杀人鬼精》刻画家族不为人知的恩怨纠缠，深刻剖析错综复杂的谜团漩涡，极尽呈现曲折纠葛又诡谲诱人的犯罪世界！这是命运的恐怖作弄，宿命的三角暗中作祟，悲剧冥冥之中在几世前就已经注定。 作品森冷沉静的笔触，勾勒出人心幽暗处的魔性本质！ 浜尾四郎 日本本格派推理小说著名作家。1896年出生于东京，东京帝大法学部毕业，1925年受封...</p></div>
                          </div>
                        </li>
                        <li class="">
                          <div class="cover">
                            <a href="https://read.douban.com/ebook/23024918/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" target="_blank" title="夜晚属于恋人">
                              <img src="/index/Picture/23024918.jpg" alt="夜晚属于恋人" width="106px" height="158px"></a>
                          </div>
                          <div class="info">
                            <div class="title">
                              <a href="https://read.douban.com/ebook/23024918/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" title="夜晚属于恋人" target="_blank">夜晚属于恋人</a></div>
                            <div class="price">9.99元</div>
                            <div class="more-meta">
                              <h4 class="title">夜晚属于恋人</h4>
                              <p>
                                <span class="author">远子</span>/
                                <span class="year">2016-5</span>/
                                <span class="publisher">北京时代华文书局</span>/
                                <span class="price">9.99元</span></p>
                              <p class="abstract">《夜晚属于恋人》讲述十九个诡异而有趣的故事。有余华式的坚硬与低沉，爱伦坡式的梦呓与臆想，太宰治的敏感与纤细。部分篇目在一个APP，豆瓣发表后引起较大反响。 如果《十七个远方》是以纪录片式的白描直击生活表象，那么《夜晚属于恋人》已渐渐潜入生活底里，技艺更成熟，题材更开阔，缤纷如万花筒。 远子，原名王基胜，1987年出生，湖北人，现居北京。作品散见于...</p></div>
                          </div>
                        </li>
                        <li class="">
                          <div class="cover">
                            <a href="https://read.douban.com/ebook/18109716/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" target="_blank" title="皮格马利翁效应">
                              <img src="/index/Picture/18109716.jpg" alt="皮格马利翁效应" width="106px" height="158px"></a>
                          </div>
                          <div class="info">
                            <div class="title">
                              <a href="https://read.douban.com/ebook/18109716/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" title="皮格马利翁效应" target="_blank">皮格马利翁效应</a></div>
                            <div class="price">9.99元</div>
                            <div class="more-meta">
                              <h4 class="title">皮格马利翁效应</h4>
                              <p>
                                <span class="author">朱瑟琳·乔塞尔森</span>/
                                <span class="year">2011-1</span>/
                                <span class="publisher">机械工业</span>/
                                <span class="price">9.99元</span></p>
                              <p class="abstract">就像在古希腊神话中，皮格马利翁爱上了他亲手雕塑的加拉泰亚，每个人也在“创造”着生活中自我和他人的角色。虽然，他人在我们看来就是他们本来的样子，是我们“发现”了他们，但是关系中包含着无意识的复杂心理过程，引导我们用自己构建的方式去感受他人。 心理分析理论使得我们能够很好地理解人们如何无意识地创造其需要和恐惧，但大多数治疗师对此没有深刻的理解。...</p></div>
                          </div>
                        </li>
                        <li class="">
                          <div class="cover">
                            <a href="https://read.douban.com/ebook/23023326/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" target="_blank" title="致我们终将逝去的青春">
                              <img src="/index/Picture/23023326.jpg" alt="致我们终将逝去的青春" width="106px" height="158px"></a>
                          </div>
                          <div class="info">
                            <div class="title">
                              <a href="https://read.douban.com/ebook/23023326/?dcs=book-hot&amp;dcm=douban&amp;dct=read-subject" title="致我们终将逝去的青春" target="_blank">致我们终将逝去的青春</a></div>
                            <div class="price">2.98元</div>
                            <div class="more-meta">
                              <h4 class="title">致我们终将逝去的青春</h4>
                              <p>
                                <span class="author">辛夷坞</span>/
                                <span class="year">2014-5</span>/
                                <span class="publisher">百花洲文艺出版社</span>/
                                <span class="price">2.98元</span></p>
                              <p class="abstract">《致我们终将逝去的青春》作为首部被搬上大银幕的青春小说，由辛夷坞、赵薇强强合作，打造了中国电影动人的青春爱情经典，成为当年受瞩目的电影，更是掀起了全民“致青春”的热潮。此番推出白金纪念版，再次向“青春”致意。 热映电视剧《致青春》原著小说。 十八岁，郑微对阮阮说：“我是谁，我是天下无敌的玉面小飞龙，有什么我得不到？” 二十二岁，她站在山顶上喊：...</p></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="section popular-authors">
              <div class="hd">
                <h2 class=''>
                  <span class="">书评人</span>
                  <span class="link-more">
                    <a class="" href="https://book.douban.com/review/best/?icn=index-reviewer">进入书评专区»</a></span>
                </h2>
              </div>
              <div class="bd">
                <ul class="entry-list-col2s s " data-dstat-areaid="55" data-dstat-mode="click,expose">
                  <li class="noline">
                    <a onclick="moreurl(this, {from:'revauthor'})" href="https://www.douban.com/people/jingzhebaai/?icn=index-reviewer">
                      <img class="userface" src="/index/Picture/u69959000-14.jpg" alt="惊蛰小白" /></a>
                    <div class="fleft w210">
                      <p>
                        <a class="" onclick="moreurl(this, {from:'revauthor'})" href="https://www.douban.com/people/jingzhebaai/?icn=index-reviewer">惊蛰小白</a></p>
                      <p class="entry-star-small clearfix">
                        <span class="fleft">评论《你的孤独，终有回响》</span></p>
                      <p>
                        <a class="" onclick="moreurl(this, {from:'revauthor'})" href="https://book.douban.com/review/7996223/?icn=index-reviewer">我的孤独，终成一颗榴莲</a></p>
                      <p class="color-gray">
                        <span class="">7有用&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span class="">2016-07-18</span></p>
                    </div>
                  </li>
                  <li class="noline">
                    <a onclick="moreurl(this, {from:'revauthor'})" href="https://www.douban.com/people/58305920/?icn=index-reviewer">
                      <img class="userface" src="/index/Picture/u58305920-3.jpg" alt="Cissy0305" /></a>
                    <div class="fleft w210">
                      <p>
                        <a class="" onclick="moreurl(this, {from:'revauthor'})" href="https://www.douban.com/people/58305920/?icn=index-reviewer">Cissy0305</a></p>
                      <p class="entry-star-small clearfix">
                        <span class="fleft">评论《《犹太式教养》》</span></p>
                      <p>
                        <a class="" onclick="moreurl(this, {from:'revauthor'})" href="https://book.douban.com/review/8008497/?icn=index-reviewer">犹太人教育更注重让孩子绕弯路</a></p>
                      <p class="color-gray">
                        <span class="">0有用&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span class="">2016-07-26</span></p>
                    </div>
                  </li>
                  <li class="noline">
                    <a onclick="moreurl(this, {from:'revauthor'})" href="https://www.douban.com/people/fionapan/">
                      <img class="userface" src="/index/Picture/u3866152-97.jpg" alt="F小姐" /></a>
                    <div class="fleft w210">
                      <p>
                        <a class="" onclick="moreurl(this, {from:'revauthor'})" href="https://www.douban.com/people/fionapan/">F小姐</a></p>
                      <p class="entry-star-small clearfix">
                        <span class="fleft">评论《成功心理学》</span></p>
                      <p>
                        <a class="" onclick="moreurl(this, {from:'revauthor'})" href="https://book.douban.com/review/8002995/">梦想不是个矫情的东西</a></p>
                      <p class="color-gray">
                        <span class="">31有用&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span class="">2016-07-22</span></p>
                    </div>
                  </li>
                  <li class="noline">
                    <a onclick="moreurl(this, {from:'revauthor'})" href="https://www.douban.com/people/zhaoxingstar/">
                      <img class="userface" src="/index/Picture/u3051549-29.jpg" alt="特立独行的猫" /></a>
                    <div class="fleft w210">
                      <p>
                        <a class="" onclick="moreurl(this, {from:'revauthor'})" href="https://www.douban.com/people/zhaoxingstar/">特立独行的猫</a></p>
                      <p class="entry-star-small clearfix">
                        <span class="fleft">评论《余罪 2》</span></p>
                      <p>
                        <a class="" onclick="moreurl(this, {from:'revauthor'})" href="https://book.douban.com/review/8003417/">没有对警察歌功颂德的警匪片，正义里带着对罪犯的落泪和心碎</a></p>
                      <p class="color-gray">
                        <span class="">48有用&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span class="">2016-07-22</span></p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
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
                    <a href="/tag/?view=type&amp;icn=index-sorttags-hot#文学" class="tag more_tag">更多》</a></li>
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
            <div class="section weekly-top">
              <div class="hd">
                <h2>畅销图书榜</h2></div>
              <div class="bd">
                <ul class="nav-vendor">
                  <li class="on book-chart-hd" id="jd-book-chart-hd">
                    <img src="/index/Picture/jd_chart_hover.png" width="18" height="18" />
                    <span>京东</span></li>
                  <li class="book-chart-hd" id="amazon-book-chart-hd">
                    <img src="/index/Picture/amazon_chart.png" width="18" height="18" />
                    <span>亚马逊</span></li>
                  <li class="book-chart-hd" id="dangdang-book-chart-hd">
                    <img src="/index/Picture/dangdang_chart.png" width="18" height="18" />
                    <span>当当</span></li>
                </ul>
                <ul class="list list-ranking">
                  <li class="item">
                    <span class="rank-num">1.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/25862578/" class="name" target="_blank">解忧杂货店</a>
                      <div class="author">(日)东野圭吾</div></div>
                    <a href="" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">2.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26772966/" class="name" target="_blank">博弈心理学</a>
                      <div class="author">陈玮</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=jingdong&amp;srcpage=bestseller&amp;price=2380&amp;pos=2&amp;url=http%3A%2F%2Funion.click.jd.com%2Fjdc%3Fe%3D%26p%3DAyIOZR5aEQISA1AYUyUCEgFSE1gWBiJDCkMFSjJLQhBaUAscSkIBR0ROVw1VC0dFFQIUAF0YWBEdS0IJRmtFS2sFAmdbZWIRfRcaU3RaDHAdRRhlDh43Uh5cEwUbBFIrWxEDFgNlKzpnMkBpja3tzaejG4Gx1MCKhTdUK1sQBRMBVxpeEQcTB10rXCXbkrCDucnMnJjS3YxrJTI%253D%26t%3DW1dCFBBFC1pXUwkEAEAdQFkJBVsVBBUPVhhfCltXWwg%253D&amp;srcsubj=&amp;type=bkbuy&amp;subject=26772966" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">3.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/25747921/" class="name" target="_blank">从你的全世界路过</a>
                      <div class="author">张嘉佳</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=jingdong&amp;srcpage=bestseller&amp;price=2120&amp;pos=3&amp;url=http%3A%2F%2Funion.click.jd.com%2Fjdc%3Fe%3D%26p%3DAyIBZRprFDJWWA1FBCVbV0IUEEULWldTCQQAQB1AWQkFWxUAEA5THVsKW1dbCCs6VQoUfQZuPndncB0wYixvHEBXT1kdGQ4iBmUbXxQGFjdleikl%26t%3DW1dCFBBFC1pXUwkEAEAdQFkJBVsVABAOUx1bCltXWwg%253D&amp;srcsubj=&amp;type=bkbuy&amp;subject=25747921" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">4.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26340138/" class="name" target="_blank">岛上书店</a>
                      <div class="author">[美] 加布瑞埃拉·泽文</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=jingdong&amp;srcpage=bestseller&amp;price=2410&amp;pos=4&amp;url=http%3A%2F%2Funion.click.jd.com%2Fjdc%3Fe%3D%26p%3DAyIOZR5aEQISA1AYUyUCEgBTEloUBCJDCkMFSjJLQhBaUAscSkIBR0ROVw1VC0dFFQIVAVwaWhMdS0IJRmtMRXZSFEM8bGEQTwBbOmlqaFkiTAdlDh43Uh5cEwUbBFIrWxEDFgNlKzpnMkBpja3tzaejG4Gx1MCKhTdUK1sQBhsEXR1dEgEaB1YrXCXbkrCDucnMnJjS3YxrJQM%253D%26t%3DW1dCFBBFC1pXUwkEAEAdQFkJBVsVBRQOVBpdCltXWwg%253D&amp;srcsubj=&amp;type=bkbuy&amp;subject=26340138" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">5.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26761696/" class="name" target="_blank">精进</a>
                      <div class="author">采铜</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=jingdong&amp;srcpage=bestseller&amp;price=2380&amp;pos=5&amp;url=http%3A%2F%2Funion.click.jd.com%2Fjdc%3Fe%3D%26p%3DAyIOZR5aEQISA1AYUyUCEg9UGlsWAiJDCkMFSjJLQhBaUAscSkIBR0ROVw1VC0dFFQIaBlQbWBUdS0IJRmsXSUYEMWYGTWd5HQJ%252BIhNrEwIVHVx1Dh43Uh5cEwUbBFIrWxEDFgNlKzpnMkBpja3tzaejG4Gx1MCKhTdUK1sQBRIGVRheFgQVAFUrXCXbkrCDucnMnJjS3YxrJTI%253D%26t%3DW1dCFBBFC1pXUwkEAEAdQFkJBVsVChMGVRhbCltXWwg%253D&amp;srcsubj=&amp;type=bkbuy&amp;subject=26761696" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">6.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/25755525/" class="name" target="_blank">戒了吧，拖延症</a>
                      <div class="author">辰格</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=jingdong&amp;srcpage=bestseller&amp;price=1639&amp;pos=6&amp;url=http%3A%2F%2Funion.click.jd.com%2Fjdc%3Fe%3D%26p%3DAyIBZRprFDJWWA1FBCVbV0IUEEULWldTCQQAQB1AWQkFWxUAEA9UG14KW1dbCCsSUAdNBCVEX3d5QlwrEgZ2RURQCUUNGQ4iBmUbXxQGFjdleikl%26t%3DW1dCFBBFC1pXUwkEAEAdQFkJBVsVABAPVBteCltXWwg%253D&amp;srcsubj=&amp;type=bkbuy&amp;subject=25755525" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">7.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26314063/" class="name" target="_blank">斯坦福极简经济学</a>
                      <div class="author">[美] 蒂莫西‧泰勒</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=jingdong&amp;srcpage=bestseller&amp;price=2410&amp;pos=7&amp;url=http%3A%2F%2Funion.click.jd.com%2Fjdc%3Fe%3D%26p%3DAyIOZR5aEQISA1AYUyUCEgBWHlMcBiJDCkMFSjJLQhBaUAscSkIBR0ROVw1VC0dFFQIVBFATUhEdS0IJRmtidWl0L3pFZ2AbV09pMhFBSEUQTzJTDh43Uh5cEwUbBFIrWxEDFgNlKzpnMkBpja3tzaejG4Gx1MCKhTdUK1sQBhsEXR1SEgAbAVcrXCXbkrCDucnMnJjS3YxrJQM%253D%26t%3DW1dCFBBFC1pXUwkEAEAdQFkJBVsVBRECXRJfCltXWwg%253D&amp;srcsubj=&amp;type=bkbuy&amp;subject=26314063" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">8.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26356948/" class="name" target="_blank">摆渡人</a>
                      <div class="author">[英]克莱儿·麦克福尔</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=jingdong&amp;srcpage=bestseller&amp;price=1800&amp;pos=8&amp;url=http%3A%2F%2Funion.click.jd.com%2Fjdc%3Fe%3D%26p%3DAyIOZR5aEQISA1AYUyUCEgBcHVIRCyJDCkMFSjJLQhBaUAscSkIBR0ROVw1VC0dFFQIVDlMSXxwdS0IJRmtCWXlhHBpFaWBmZSsYAQ9kW0wKATp1Dh43Uh5cEwUbBFIrWxEDFgNlKzpnMkBpja3tzaejG4Gx1MCKhTdUK1sQBhsEXR1dHQUQAVArXCXbkrCDucnMnJjS3YxrJQM%253D%26t%3DW1dCFBBFC1pXUwkEAEAdQFkJBVsVBRsBXB9SCltXWwg%253D&amp;srcsubj=&amp;type=bkbuy&amp;subject=26356948" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">9.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26755862/" class="name" target="_blank">谁不曾浑身是伤，谁不曾彷徨迷惘</a>
                      <div class="author">卢思浩 等著</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=jingdong&amp;srcpage=bestseller&amp;price=2470&amp;pos=9&amp;url=http%3A%2F%2Funion.click.jd.com%2Fjdc%3Fe%3D%26p%3DAyIOZR5aEQISA1AYUyUCEg5dG10TCyJDCkMFSjJLQhBaUAscSkIBR0ROVw1VC0dFFQIbD1UdXRwdS0IJRmtPfHpfL34eQGJpYTVkEl50VVpLZClTDh43Uh5cEwUbBFIrWxEDFgNlKzpnMkBpja3tzaejG4Gx1MCKhTdUK1sQBRMFVxlaHAQRBFArXCXbkrCDucnMnJjS3YxrJTI%253D%26t%3DW1dCFBBFC1pXUwkEAEAdQFkJBVsVCxoHUx1SCltXWwg%253D&amp;srcsubj=&amp;type=bkbuy&amp;subject=26755862" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">10.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26616409/" class="name" target="_blank">爱丽丝漫游仙境</a>
                      <div class="author">廉檀若</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=jingdong&amp;srcpage=bestseller&amp;price=3550&amp;pos=10&amp;url=http%3A%2F%2Funion.click.jd.com%2Fjdc%3Fe%3D%26p%3DAyIOZR5aEQISA1AYUyUCEgFRHV0TCiJDCkMFSjJLQhBaUAscSkIBR0ROVw1VC0dFFQIUA1MdXR0dS0IJRmsVWUduVHo7dGdgUyB%252FQRV8E08jYSl1Dh43Uh5cEwUbBFIrWxEDFgNlKzpnMkBpja3tzaejG4Gx1MCKhTdUK1sQBhsFVBheEQMbD1ArXCXbkrCDucnMnJjS3YxrJQM%253D%26t%3DW1dCFBBFC1pXUwkEAEAdQFkJBVsVBBYBUx1TCltXWwg%253D&amp;srcsubj=&amp;type=bkbuy&amp;subject=26616409" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                </ul>
                <ul class="list list-ranking">
                  <li class="item">
                    <span class="rank-num">1.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26340138/" class="name" target="_blank">岛上书店</a>
                      <div class="author">[美] 加布瑞埃拉·泽文</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=joyo&amp;srcpage=bestseller&amp;price=2410&amp;pos=1&amp;url=http%3A%2F%2Fwww.amazon.cn%2Fmn%2FdetailApp%2Fref%3Dasc_df_B00VWVAFAG2228940%2F%3Fasin%3DB00VWVAFAG%26tag%3Ddoubanphb-23%26creative%3D2384%26creativeASIN%3DB00VWVAFAG%26linkCode%3Ddf0&amp;srcsubj=&amp;type=bkbuy&amp;subject=26340138" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">2.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26576605/" class="name" target="_blank">这么慢，那么美</a>
                      <div class="author">罗敷</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=joyo&amp;srcpage=bestseller&amp;price=2450&amp;pos=2&amp;url=http%3A%2F%2Fwww.amazon.cn%2Fmn%2FdetailApp%2Fref%3Dasc_df_B0116GWQ582224659%2F%3Fasin%3DB0116GWQ58%26tag%3Ddoubanphb-23%26creative%3D2384%26creativeASIN%3DB0116GWQ58%26linkCode%3Ddf0&amp;srcsubj=&amp;type=bkbuy&amp;subject=26576605" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">3.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26802388/" class="name" target="_blank">自在独行</a>
                      <div class="author">贾平凹</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=joyo&amp;srcpage=bestseller&amp;price=2770&amp;pos=3&amp;url=http%3A%2F%2Fwww.amazon.cn%2Fmn%2FdetailApp%2Fref%3Dasc_df_B01FX0URIQ2227166%2F%3Fasin%3DB01FX0URIQ%26tag%3Ddoubanphb-23%26creative%3D2384%26creativeASIN%3DB01FX0URIQ%26linkCode%3Ddf0&amp;srcsubj=&amp;type=bkbuy&amp;subject=26802388" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">4.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26698660/" class="name" target="_blank">巨人的陨落</a>
                      <div class="author">[英] 肯·福莱特</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=joyo&amp;srcpage=bestseller&amp;price=8610&amp;pos=4&amp;url=http%3A%2F%2Fwww.amazon.cn%2Fmn%2FdetailApp%2Fref%3Dasc_df_B01ER44LMC2227982%2F%3Fasin%3DB01ER44LMC%26tag%3Ddoubanphb-23%26creative%3D2384%26creativeASIN%3DB01ER44LMC%26linkCode%3Ddf0&amp;srcsubj=&amp;type=bkbuy&amp;subject=26698660" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">5.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26814078/" class="name" target="_blank">万物解释者</a>
                      <div class="author">[美] 兰道尔·门罗</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=joyo&amp;srcpage=bestseller&amp;price=6070&amp;pos=5&amp;url=http%3A%2F%2Fwww.amazon.cn%2Fmn%2FdetailApp%2Fref%3Dasc_df_B01HEI4GNC2219919%2F%3Fasin%3DB01HEI4GNC%26tag%3Ddoubanphb-23%26creative%3D2384%26creativeASIN%3DB01HEI4GNC%26linkCode%3Ddf0&amp;srcsubj=&amp;type=bkbuy&amp;subject=26814078" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">6.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/19958089/" class="name" target="_blank">我们仨</a>
                      <div class="author">杨绛</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=joyo&amp;srcpage=bestseller&amp;price=1720&amp;pos=6&amp;url=http%3A%2F%2Fwww.amazon.cn%2Fmn%2FdetailApp%2Fref%3Dasc_df_B009FWYL042224659%2F%3Fasin%3DB009FWYL04%26tag%3Ddoubanphb-23%26creative%3D2384%26creativeASIN%3DB009FWYL04%26linkCode%3Ddf0&amp;srcsubj=&amp;type=bkbuy&amp;subject=19958089" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">7.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26184195/" class="name" target="_blank">哈佛谈判心理学</a>
                      <div class="author">Erica Ariel Fox</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=joyo&amp;srcpage=bestseller&amp;price=3410&amp;pos=7&amp;url=http%3A%2F%2Fwww.amazon.cn%2Fmn%2FdetailApp%2Fref%3Dasc_df_B00O1N1IBM2218249%2F%3Fasin%3DB00O1N1IBM%26tag%3Ddoubanphb-23%26creative%3D2384%26creativeASIN%3DB00O1N1IBM%26linkCode%3Ddf0&amp;srcsubj=&amp;type=bkbuy&amp;subject=26184195" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">8.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26823173/" class="name" target="_blank">蔡康永的说话之道</a>
                      <div class="author">蔡康永</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=joyo&amp;srcpage=bestseller&amp;price=3279&amp;pos=8&amp;url=http%3A%2F%2Fwww.amazon.cn%2Fmn%2FdetailApp%2Fref%3Dasc_df_B00N8OI18I2227866%2F%3Fasin%3DB00N8OI18I%26tag%3Ddoubanphb-23%26creative%3D2384%26creativeASIN%3DB00N8OI18I%26linkCode%3Ddf0&amp;srcsubj=&amp;type=bkbuy&amp;subject=26823173" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">9.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26417490/" class="name" target="_blank">写给大家的西方美术史</a>
                      <div class="author">蒋勋</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=joyo&amp;srcpage=bestseller&amp;price=3679&amp;pos=9&amp;url=http%3A%2F%2Fwww.amazon.cn%2Fmn%2FdetailApp%2Fref%3Dasc_df_B00YTWCVQG2218368%2F%3Fasin%3DB00YTWCVQG%26tag%3Ddoubanphb-23%26creative%3D2384%26creativeASIN%3DB00YTWCVQG%26linkCode%3Ddf0&amp;srcsubj=&amp;type=bkbuy&amp;subject=26417490" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">10.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/25913199/" class="name" target="_blank">牛津高阶英汉双解词典（第8版）</a>
                      <div class="author">[英] 霍恩比</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=joyo&amp;srcpage=bestseller&amp;price=11040&amp;pos=10&amp;url=http%3A%2F%2Fwww.amazon.cn%2Fmn%2FdetailApp%2Fref%3Dasc_df_B00L7OTZZO2224659%2F%3Fasin%3DB00L7OTZZO%26tag%3Ddoubanphb-23%26creative%3D2384%26creativeASIN%3DB00L7OTZZO%26linkCode%3Ddf0&amp;srcsubj=&amp;type=bkbuy&amp;subject=25913199" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                </ul>
                <ul class="list list-ranking">
                  <li class="item">
                    <span class="rank-num">1.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/1770782/" class="name" target="_blank">追风筝的人</a>
                      <div class="author">[美] 卡勒德·胡赛尼</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=dangdang&amp;srcpage=bestseller&amp;price=1450&amp;pos=1&amp;url=http%3A%2F%2Funion.dangdang.com%2Ftransfer.php%3Ffrom%3DP-306226-148026085-s1770782%26backurl%3Dhttp%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23274638&amp;srcsubj=&amp;type=bkbuy&amp;subject=1770782" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">2.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/25862578/" class="name" target="_blank">解忧杂货店</a>
                      <div class="author">(日)东野圭吾</div></div>
                    <a href="" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">3.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26356948/" class="name" target="_blank">摆渡人</a>
                      <div class="author">[英]克莱儿·麦克福尔</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=dangdang&amp;srcpage=bestseller&amp;price=1800&amp;pos=3&amp;url=http%3A%2F%2Funion.dangdang.com%2Ftransfer.php%3Ffrom%3DP-306226-148026085-s26356948%26backurl%3Dhttp%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23694647&amp;srcsubj=&amp;type=bkbuy&amp;subject=26356948" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">4.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/19958089/" class="name" target="_blank">我们仨</a>
                      <div class="author">杨绛</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=dangdang&amp;srcpage=bestseller&amp;price=1720&amp;pos=4&amp;url=http%3A%2F%2Funion.dangdang.com%2Ftransfer.php%3Ffrom%3DP-306226-148026085-s19958089%26backurl%3Dhttp%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22880790&amp;srcsubj=&amp;type=bkbuy&amp;subject=19958089" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">5.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/25747921/" class="name" target="_blank">从你的全世界路过</a>
                      <div class="author">张嘉佳</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=dangdang&amp;srcpage=bestseller&amp;price=1700&amp;pos=5&amp;url=http%3A%2F%2Funion.dangdang.com%2Ftransfer.php%3Ffrom%3DP-306226-148026085-s25747921%26backurl%3Dhttp%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23353342&amp;srcsubj=&amp;type=bkbuy&amp;subject=25747921" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">6.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26340138/" class="name" target="_blank">岛上书店</a>
                      <div class="author">[美] 加布瑞埃拉·泽文</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=dangdang&amp;srcpage=bestseller&amp;price=1750&amp;pos=6&amp;url=http%3A%2F%2Funion.dangdang.com%2Ftransfer.php%3Ffrom%3DP-306226-148026085-s26340138%26backurl%3Dhttp%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23685329&amp;srcsubj=&amp;type=bkbuy&amp;subject=26340138" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">7.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/10554308/" class="name" target="_blank">白夜行</a>
                      <div class="author">[日] 东野圭吾</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=dangdang&amp;srcpage=bestseller&amp;price=2570&amp;pos=7&amp;url=http%3A%2F%2Funion.dangdang.com%2Ftransfer.php%3Ffrom%3DP-306226-148026085-s10554308%26backurl%3Dhttp%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22935553&amp;srcsubj=&amp;type=bkbuy&amp;subject=10554308" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">8.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/10517238/" class="name" target="_blank">平凡的世界</a>
                      <div class="author">路遥</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=dangdang&amp;srcpage=bestseller&amp;price=4390&amp;pos=8&amp;url=http%3A%2F%2Funion.dangdang.com%2Ftransfer.php%3Ffrom%3DP-306226-148026085-s10517238%26backurl%3Dhttp%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D22616096&amp;srcsubj=&amp;type=bkbuy&amp;subject=10517238" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">9.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/25913208/" class="name" target="_blank">将来的你，一定会感谢现在拼命的自己</a>
                      <div class="author">汤木</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=dangdang&amp;srcpage=bestseller&amp;price=1500&amp;pos=9&amp;url=http%3A%2F%2Funion.dangdang.com%2Ftransfer.php%3Ffrom%3DP-306226-148026085-s25913208%26backurl%3Dhttp%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23491236&amp;srcsubj=&amp;type=bkbuy&amp;subject=25913208" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                  <li class="item">
                    <span class="rank-num">10.</span>
                    <div class="book-info">
                      <a href="https://book.douban.com/subject/26768309/" class="name" target="_blank">查令十字街84号</a>
                      <div class="author">[美] 海莲·汉芙</div></div>
                    <a href="https://book.douban.com/link2/?pre=0&amp;vendor=dangdang&amp;srcpage=bestseller&amp;price=1910&amp;pos=10&amp;url=http%3A%2F%2Funion.dangdang.com%2Ftransfer.php%3Ffrom%3DP-306226-148026085-s26768309%26backurl%3Dhttp%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23954654&amp;srcsubj=&amp;type=bkbuy&amp;subject=26768309" target="_blank">
                      <span class="buy-button">去购买</span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="block5">
              <h2 class=''>
                <span class="">豆瓣猜你可能感兴趣的图书</span>
                <span class="link-more">
                  <a class="" href="/recommended?icn=index-book250-all">更多»</a></span>
              </h2>
              <div class="content clearfix s" id="book_rec" data-dstat-areaid="59" data-dstat-mode="click,expose">
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/3707841/?icn=index-book250-subject">
                      <img src="/index/Picture/s4764383.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/3707841/?icn=index-book250-subject">Principles of Computer System Design</a>
                    <span class="gact">
                      <a href="javascript:" rel="3707841" class="book_x" title="从推荐中去掉Principles of Computer System Design">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/1225935/?icn=index-book250-subject">
                      <img src="/index/Picture/s8488131.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/1225935/?icn=index-book250-subject">计算机网络系统方法</a>
                    <span class="gact">
                      <a href="javascript:" rel="1225935" class="book_x" title="从推荐中去掉计算机网络系统方法">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/1853531/?icn=index-book250-subject">
                      <img src="/index/Picture/s2804353.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/1853531/?icn=index-book250-subject">鲁迅书信集（共两卷）</a>
                    <span class="gact">
                      <a href="javascript:" rel="1853531" class="book_x" title="从推荐中去掉鲁迅书信集（共两卷）">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
                <div class="clearfix rr" style="width:100%"></div>
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/26667282/?icn=index-book250-subject">
                      <img src="/index/Picture/s28385303.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/26667282/?icn=index-book250-subject">见信如晤</a>
                    <span class="gact">
                      <a href="javascript:" rel="26667282" class="book_x" title="从推荐中去掉见信如晤">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/1506160/?icn=index-book250-subject">
                      <img src="/index/Picture/s5646472.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/1506160/?icn=index-book250-subject">操作系统</a>
                    <span class="gact">
                      <a href="javascript:" rel="1506160" class="book_x" title="从推荐中去掉操作系统">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/11026780/?icn=index-book250-subject">
                      <img src="/index/Picture/s23131223.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/11026780/?icn=index-book250-subject">书虫小鼠</a>
                    <span class="gact">
                      <a href="javascript:" rel="11026780" class="book_x" title="从推荐中去掉书虫小鼠">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
                <div class="clearfix rr" style="width:100%"></div>
                <dl>
                  <dt>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/1195935/?icn=index-book250-subject">
                      <img src="/index/Picture/s1937066.jpg" class="m_sub_img" /></a>
                  </dt>
                  <dd>
                    <a onclick="moreurl(this, {from:'recs'})" href="https://book.douban.com/subject/1195935/?icn=index-book250-subject">世界上最动人的书信</a>
                    <span class="gact">
                      <a href="javascript:" rel="1195935" class="book_x" title="从推荐中去掉世界上最动人的书信">&times;</a></span>
                    <p class="extra-info"></p>
                  </dd>
                </dl>
              </div>
            </div>
            <ul class="apply-links">
              <li>
                <span class="apply-editor">
                  <a href="https://book.douban.com/site/new_editor">&gt;&nbsp;编辑申请</a></span>
                <span>
                  <a href="https://book.douban.com/site/new_publisher">&gt;&nbsp;出版社申请</a></span>
              </li>
            </ul>
            <div class="contact mod">
              <h2>关注我们</h2>
              <ul class="embassy-list clearfix">
                <li>
                  <a href="https://site.douban.com/book/" target="_blank" class="icon-embassy-site"></a>
                  <a href="https://site.douban.com/book/" target="_blank" class="primary-link">豆瓣小站</a></li>
                <li>
                  <a href="http://weibo.com/doubandushu" target="_blank" class="icon-embassy-weibo"></a>
                  <a href="http://weibo.com/doubandushu" target="_blank" class="primary-link">微博</a></li>
                <li>
                  <a class="icon-embassy-weixin">
                    <div class="hover">
                      <img class="home-qrcode" src="/index/Picture/home_qrcode@2x.jpg"></div>
                  </a>
                  <a class="primary-link" href="javascript:;">微信</a></li>
              </ul>
            </div>
            <!-- douban app begin -->
            <div class="s" data-dstat-areaid="60" data-dstat-mode="click,expose">
              <style>.qrcode-app { margin: 20px 0; } .qrcode-app a.download { display: block; width: 300px; height: 80px; background: url(Images/qrcode_app4@2x.png) no-repeat; background-size: contain; background-image: -webkit-image-set(url(/pics/qrcode_app4.png) 1x, url(/pics/qrcode_app4@2x.png) 2x); background-image: -moz-image-set(url(/pics/qrcode_app4.png) 1x, url(/pics/qrcode_app4@2x.png) 2x); background-image: -ms-image-set(url(/pics/qrcode_app4.png) 1x, url(/pics/qrcode_app4@2x.png) 2x); background-image: -o-image-set(url(/pics/qrcode_app4.png) 1x, url(/pics/qrcode_app4@2x.png) 2x); }</style>
              <div class="qrcode-app">
                <a class="download" href="https://www.douban.com/doubanapp/app?channel=Db_Homepage_Bar&amp;direct_dl=1" target="_blank"></a>
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
        <a href="https://www.douban.com/hnypt/variformcyst.py" style="display: none;"></a>
        <span class="fright">
          <a href="https://www.douban.com/about">关于豆瓣</a>·
          <a href="https://www.douban.com/jobs">在豆瓣工作</a>·
          <a href="https://www.douban.com/about?topic=contactus">联系我们</a>·
          <a href="https://www.douban.com/about?policy=disclaimer">免责声明</a>·
          <a href="https://help.douban.com/?app=book" target="_blank">帮助中心</a>·
          <a href="https://book.douban.com/library_invitation">图书馆合作</a>·
          <a href="https://www.douban.com/doubanapp/">移动应用</a>·
          <a href="https://www.douban.com/partner/">豆瓣广告</a></span>
        <script src="/index/Scripts/init.js" data-cfg-corelib="/index/js/jquery.js"></script>
      </div>
    </div>
    <script type="text/javascript">Do(function() {
        // 不再提醒
        window.DOUBAN_SITE_URL = 'https://www.douban.com';
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
            icon: "https://img3.doubanio.com/pics/icon/dou36.png"
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
            url: DOUBAN_SITE_URL + "/j/push/get_token_with_ts",
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
          i = "https://push.douban.com:4394/sse?channel=" + d + "&auth=" + c;
          if (location.protocol == "https:") {
            i = "https://push.douban.com:4397/sse?channel=" + d + "&auth=" + c
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
            url: 'https://www.douban.com/j/notification/nav_pop',
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

        connectSSE('148026085', 'de9431408d1c620822ccc42af437ba526def7a92', '1469542057');
        set_cookie({
          push_noty_num: 0,
          push_doumail_num: 0
        });

      });</script>
    <script type="text/javascript" src="/index/Scripts/559ed7dcf41d7f07.js"></script>
    <!-- mako -->
    <!-- douban ad begin -->
    <script type="text/javascript">(function(global) {
        var newNode = global.document.createElement('script'),
        existingNode = global.document.getElementsByTagName('script')[0],
        adSource = '//erebor.douban.com/',
        userId = '148026085',
        browserId = 'Qc5tVeL8gMU',
        criteria = '3:/',
        preview = '',
        debug = false,
        adSlots = ['dale_book_home_top_right', 'dale_book_home_top_right2', 'dale_book_home_left_middle', 'dale_book_home_bottem_right', 'dale_book_home_top_super_banner', 'dale_book_home_left_top', 'dale_book_homepage_right_bottom'];

        global.DoubanAdRequest = {
          src: adSource,
          uid: userId,
          bid: browserId,
          crtr: criteria,
          prv: preview,
          debug: debug
        };
        global.DoubanAdSlots = (global.DoubanAdSlots || []).concat(adSlots);

        newNode.setAttribute('type', 'text/javascript');
        newNode.setAttribute('src', '/index/js/ad.js');
        newNode.setAttribute('async', true);
        existingNode.parentNode.insertBefore(newNode, existingNode);
      })(this);</script>
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
        var p = (('https:' == document.location.protocol) ? 'https': 'http'),
        u = p + '://fundin.douban.com/';
        _paq.push(['setTrackerUrl', u + 'piwik']);
        _paq.push(['setSiteId', '100001']);
        var d = document,
        g = d.createElement('script'),
        s = d.getElementsByTagName('script')[0];
        g.type = 'text/javascript';
        g.defer = true;
        g.async = true;
        g.src = p + '://nihao.com/index/js/piwik.js';
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
          _gaq.push([method('_addIgnoredOrganic'), '豆瓣']) _gaq.push([method('_addIgnoredOrganic'), 'douban']) _gaq.push([method('_addIgnoredOrganic'), '豆瓣网']) _gaq.push([method('_addIgnoredOrganic'), 'www.douban.com'])
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
        ga.src = ('https:' == document.location.protocol ? 'https://ssl': 'http://www') + '.google-analytics.com/ga.js';
        ga.setAttribute('async', 'true');
        document.documentElement.firstChild.appendChild(ga);
      })()</script>
    <!-- dis6-docker--></body>

</html>
@section('myJs')
@show