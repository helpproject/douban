@extends('layout.index')

@section('content')
<style>
  .lnk-doulist-add i {
    display: inline-block;
    zoom: 1;
    width: 10px;
    height: 16px;
    vertical-align: middle;
    overflow: hidden;
    background: #fff url(/index/Images/add-doulist.gif) no-repeat 0 0;
}
</style>
      <h1>
        <span property="v:itemreviewed">{{$books->title}}</span>
        <div class="clear"></div>
      </h1>
      <div id="content">
        <div class="grid-16-8 clearfix">
          <div class="article">
            <div class="indent">
              <div class="subjectwrap clearfix">
                <div class="subject clearfix">
                  <div id="mainpic" class="">
                    <a class="nbg" href="https://img1.doubanio.com/lpic/s28873148.jpg" title="怒">
                      <img src="{{$books->img}}" title="点击看大图" alt="怒" rel="v:photo"></a>
                    <br>
                  </div>
                  <div id="info" class="">
                    <span>
                      <span class="pl">作者::{{$books->author->name}}</span>
                      <a class="" href="#"></a></span>
                    <br/>
                    <span class="pl">出版社:</span>{{$books->press}}
                    <br/>
                    <span class="pl">出版年:</span>{{$books->pressdate}}
                    <br/>
                    <span class="pl">页数:</span>{{$books->pagination}}
                    <br/>
                    <span class="pl">定价:</span>{{$books->price}}元
                    <br/>
                    <span class="pl">ISBN:</span>{{$books->ISBN}}
                    <br/></div></div>
                <div id="interest_sectl" class="">
                  <div class="rating_wrap clearbox" rel="v:rating">
                    <div class="rating_logo">豆瓣评分</div>
                    <div class="rating_self clearfix" typeof="v:Rating">
                      <strong class="ll rating_num " property="v:average">8.0</strong>
                      <span property="v:best" content="10.0"></span>
                      <div class="rating_right ">
                        <div class="ll bigstar40"></div>
                        <div class="rating_sum">
                          <span class="">
                            <a href="collections" class="rating_people">
                              <span property="v:votes">19</span>人评价</a></span>
                        </div>
                      </div>
                    </div>
                    <span class="stars5 starstop" title="力荐">5星</span>
                    <div class="power" style="width:52px"></div>
                    <span class="rating_per">47.4%</span>
                    <br>
                    <span class="stars4 starstop" title="推荐">4星</span>
                    <div class="power" style="width:58px"></div>
                    <span class="rating_per">52.6%</span>
                    <br>
                    <span class="stars3 starstop" title="还行">3星</span>
                    <div class="power" style="width:0px"></div>
                    <span class="rating_per">0.0%</span>
                    <br>
                    <span class="stars2 starstop" title="较差">2星</span>
                    <div class="power" style="width:0px"></div>
                    <span class="rating_per">0.0%</span>
                    <br>
                    <span class="stars1 starstop" title="很差">1星</span>
                    <div class="power" style="width:0px"></div>
                    <span class="rating_per">0.0%</span>
                    <br></div>
                </div>
              </div>
              <div id="interest_sect_level" class="clearfix">
                <a href="#" rel="nofollow" class="collect_btn colbutt ll" name="pbtn-26760976-wish">
                  <span>
                    <form method="POST" action="https://book.douban.com/subject/26760976/?interest=wish" class="miniform">
                      <div style="display:none;">
                        <input type="hidden" name="ck" value="UPr1" /></div>
                      <input type="submit" class="minisubmit j " value="想读" title="" />
                    </form>
                  </span>
                </a>
                <a href="#" rel="nofollow" class="collect_btn colbutt ll" name="pbtn-26760976-do">
                  <span>
                    <form method="POST" action="https://book.douban.com/subject/26760976/?interest=do" class="miniform">
                      <div style="display:none;">
                        <input type="hidden" name="ck" value="UPr1" /></div>
                      <input type="submit" class="minisubmit j " value="在读" title="" /></form>
                  </span>
                </a>
                <a href="#" rel="nofollow" class="collect_btn colbutt ll" name="pbtn-26760976-collect">
                  <span>
                    <form method="POST" action="https://book.douban.com/subject/26760976/?interest=collect" class="miniform">
                      <div style="display:none;">
                        <input type="hidden" name="ck" value="UPr1" /></div>
                      <input type="submit" class="minisubmit j " value="读过" title="" /></form>
                  </span>
                </a>
                <div class="ll j a_stars">评价:
                  <span id="rating">
                    <span id="stars" data-solid="https://img3.doubanio.com/f/shire/5a2327c04c0c231bced131ddf3f4467eb80c1c86/pics/rating_icons/star_onmouseover.png" data-hollow="https://img3.doubanio.com/f/shire/2520c01967207a1735171056ec588c8c1257e5f8/pics/rating_icons/star_hollow_hover.png" data-solid-2x="https://img3.doubanio.com/f/shire/7258904022439076d57303c3b06ad195bf1dc41a/pics/rating_icons/star_onmouseover@2x.png" data-hollow-2x="https://img3.doubanio.com/f/shire/95cc2fa733221bb8edd28ad56a7145a5ad33383e/pics/rating_icons/star_hollow_hover@2x.png">
                      <a href="javascript:;" class="j a_collect_btn" name="pbtn-26760976-collect-1">
                        <img src="/index/Picture/star_hollow_hover.png" id="star1" width="16" height="16" /></a>
                      <a href="javascript:;" class="j a_collect_btn" name="pbtn-26760976-collect-2">
                        <img src="/index/Picture/star_hollow_hover.png" id="star2" width="16" height="16" /></a>
                      <a href="javascript:;" class="j a_collect_btn" name="pbtn-26760976-collect-3">
                        <img src="/index/Picture/star_hollow_hover.png" id="star3" width="16" height="16" /></a>
                      <a href="javascript:;" class="j a_collect_btn" name="pbtn-26760976-collect-4">
                        <img src="/index/Picture/star_hollow_hover.png" id="star4" width="16" height="16" /></a>
                      <a href="javascript:;" class="j a_collect_btn" name="pbtn-26760976-collect-5">
                        <img src="/index/Picture/star_hollow_hover.png" id="star5" width="16" height="16" /></a>
                    </span>
                    <span id="rateword" class="pl"></span>
                    <input id="n_rating" type="hidden" value="" /></span>
                </div>
              </div>
              <div class="gtleft">
                <ul class="ul_subject_menu bicelink color_gray pt6 clearfix">
                  <li>
                    <img src="/index/Images/add-review.gif" />&nbsp;
                    <a href="" rel="nofollow">写笔记</a></li>
                  <li>
                    <img src="/index/Images/add-review.gif" />&nbsp;
                    <a href="" rel="nofollow">写书评</a></li>
                  <li>
                    <span class="rr">
                      <img src="/index/Images/add-cart.gif" />
                      <span style="display:none" class="gouwuche">已在<a href="/cart/{{session('uid')}}">购书单</a></span>
                      <a id="gouwu" aid="{{$books->id}}" cli="0" name="26760976" href="javascript:;">加入购书单</a>                   
                    </span>
                    <br class="clearfix" /></li>
                  <li>
                    <div class="doulist-add-btn">
                      <a href="javascript:void(0)" data-id="26760976" data-cate="1001" data-canview="True" data-url="https://book.douban.com/subject/26760976/" data-catename="图书" data-link="https://www.douban.com/people/148026085/doulists/all?add=26760976&amp;cat=1001" data-title="怒" data-picture="https://img1.doubanio.com/lpic/s28873148.jpg" class="lnk-doulist-add" onclick="moreurl(this, { 'from':'doulist-btn-1001-26760976-148026085'})">
                        <i>
                        </i>添加到豆列</a>
                    </div>
                  </li>
                  <li class="rec" id="C-26760976">
                    <a href="#" data-url="https://book.douban.com/subject/26760976/" data-desc="" data-title="书籍《怒》 (来自豆瓣) " data-pic="https://img1.doubanio.com/lpic/s28873148.jpg" class="bn-sharing ">分享到</a>&nbsp;&nbsp;</li>
                  <script>var __cache_url = __cache_url || {}; (function(u) {
                      if (__cache_url[u]) return;
                      __cache_url[u] = true;
                      window.DoubanShareIcons = 'https://img3.doubanio.com/f/shire/d15ffd71f3f10a7210448fec5a68eaec66e7f7d0/pics/ic_shares.png';
                      var initShareButton = function() {
                        $.ajax({
                          url: u,
                          dataType: 'script',
                          cache: true
                        });
                      };
                      if (typeof Do == 'function' && 'ready' in Do) {
                        Do('https://img3.doubanio.com/f/shire/8377b9498330a2e6f056d863987cc7a37eb4d486/css/ui/dialog.css', 'https://img3.doubanio.com/f/shire/4b3bad5e25de78678d700dd5353570dce3e6bbcc/js/ui/dialog.js', initShareButton);
                      } else if (typeof Douban == 'object' && 'loader' in Douban) {
                        Douban.loader.batch('https://img3.doubanio.com/f/shire/8377b9498330a2e6f056d863987cc7a37eb4d486/css/ui/dialog.css', 'https://img3.doubanio.com/f/shire/4b3bad5e25de78678d700dd5353570dce3e6bbcc/js/ui/dialog.js').done(initShareButton);
                      }
                    })('https://img3.doubanio.com/f/shire/3c817e21c473629a7e5fd09ca7f4eadf5ef24012/js/lib/sharebutton.js');</script>
                </ul>
              </div>
              <script>var rec_url = 'https://www.douban.com/share/recommend?'</script>
              <script type="text/javascript" src="/index/Scripts/dshare.js"></script>
              <div class="rec-sec">
                <span class="rec">
                  <a href="https://www.douban.com/share/recommend?sanity_key=_e38e0&amp;apikey=&amp;name=%E6%80%92&amp;image=https%3A%2F%2Fimg1.doubanio.com%2Fspic%2Fs28873148.jpg&amp;redir=https%3A%2F%2Fbook.douban.com%2Fsubject%2F26760976%2F&amp;href=https%3A%2F%2Fbook.douban.com%2Fsubject%2F26760976%2F&amp;curl=&amp;type=book&amp;properties=%7B%22rating%22%3A%228.0%22%7D&amp;desc=%5B%E6%97%A5%5D+%E5%90%89%E7%94%B0%E4%BF%AE%E4%B8%80+%2F+%E4%B8%96%E7%BA%AA%E6%96%87%E6%99%AF%2F%E4%B8%8A%E6%B5%B7%E4%BA%BA%E6%B0%91%E5%87%BA%E7%89%88%E7%A4%BE" share-id="26760976" data-mode="plain" data-name="怒" data-type="book" data-desc="[日] 吉田修一 / 世纪文景/上海人民出版社" data-href="https://book.douban.com/subject/26760976/" data-image="https://img1.doubanio.com/spic/s28873148.jpg" data-properties="{&#34;rating&#34;:&#34;8.0&#34;}" data-redir="https://book.douban.com/subject/26760976/vote?ck=UPr1" data-text="" data-apikey="" data-curl="" data-count="10" data-object_kind="1001" data-object_id="26760976" data-target_type="rec" data-target_action="0" data-action_props="{&#34;subject_url&#34;:&#34;https:\/\/book.douban.com\/subject\/26760976\/&#34;,&#34;subject_title&#34;:&#34;怒&#34;}" data-sanity_key="_e38e0" class="lnk-sharing lnk-douban-sharing">推荐</a></span>
              </div>
            </div>
            <br clear="all">
            <div id="collect_form_26760976"></div>
            <div class="related_info">
              @if(!empty($books->intro))
                <h2>
                  <span class="">内容简介</span>&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;</h2>
                <div class="indent" id="link-report">

                  <span class="short">
                    <style type="text/css" media="screen">.intro p{text-indent:2em;}</style>
                    <div class="intro">
                     {!! $books->intro !!}
                    </div>
                  </span>
                </div>
              @endif

              @if(!empty($author->abstract))
                <h2>
                  <span class="">作者简介</span>&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;</h2>
                <div class="indent ">
                  <div class="">
                    <style type="text/css" media="screen">.intro p{text-indent:2em;}</style>
                    <div class="intro">
                      {!! $author->abstract !!}
                    </div>
                  </div>
                </div>
              @endif

              @if(!empty($books->catalog))
              <h2>
                <span class="">目录</span>&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;</h2>
                {!! $books->catalog !!}
                <h2>
              @endif
              <div id="db-tags-section" class="blank20">
                <h2>
                  <span class="">豆瓣成员常用的标签(共22个)</span>&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;</h2>
                <div class="indent">
                  <span class="">
                    <a class="  tag" href="/tag/吉田修一">吉田修一</a>&nbsp;</span>
                  <span class="">
                    <a class="  tag" href="/tag/日本">日本</a>&nbsp;</span>
                  <span class="">
                    <a class="  tag" href="/tag/推理">推理</a>&nbsp;</span>
                  <span class="">
                    <a class="  tag" href="/tag/日本文学">日本文学</a>&nbsp;</span>
                  <span class="">
                    <a class="  tag" href="/tag/小说">小说</a>&nbsp;</span>
                  <span class="">
                    <a class="  tag" href="/tag/推理小说">推理小说</a>&nbsp;</span>
                  <span class="">
                    <a class="  tag" href="/tag/直木奖">直木奖</a>&nbsp;</span>
                  <span class="">
                    <a class="  tag" href="/tag/2016">2016</a>&nbsp;</span></div>
              </div>
              <div class="subject_show block5">
                <h2>丛书信息</h2>
                <div>　　
                  <a href="https://book.douban.com/series/35046">吉田修一作品 (共2册)</a>, 这套丛书还有 《同栖生活》,</div></div>
              <div class="mod-hd">
                <a class="redbutt j a_collect_btn rr" name="cbtn-26760976" href="javascript:;" rel="nofollow">
                  <span>我来说两句</span></a>
                <h2>
                  <span class="">短评</span>&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
                  <span class="pl">&nbsp;(
                    <a href="https://book.douban.com/subject/26760976/comments/">全部 9 条</a>)</span></h2>
              </div>
              <div class="nav-tab">
                <div class="tabs-wrapper  line">
                  <a class="short-comment-tabs on-tab" href="hot" data-tab="hot">热门</a>
                  <span>/</span>
                  <a class="short-comment-tabs " href="new" data-tab="new">最新</a>
                  <span>/</span>
                  <a class="short-comment-tabs " href="follows" data-tab="follows">好友</a></div>
              </div>
              <div id="comment-list-wrapper" class="indent">
                <div class="comment-list hot show">
                  <ul>
                    <li class="comment-item">
                      <h3>
                        <span class="comment-vote">
                          <span id="c-1064653191" class="vote-count">0</span>
                          <a href="javascript:;" id="btn-1064653191" class="j vote-comment" data-cid="1064653191">有用</a></span>
                        <span class="comment-info">
                          <a href="https://www.douban.com/people/qijiuzhiyue/">桃桃淘电影</a>
                          <span class="user-stars allstar40 rating" title="推荐"></span>
                          <span>2016-07-21</span></span>
                      </h3>
                      <p class="comment-content">信任</p></li>
                    
                  </ul>
                </div>
               
                <div class="comment-list follows noshow">
                  <ul>
                    <li class="comment-item">
                      <p class="blank-tip">你关注的人还没有写短评呢</p></li>
                  </ul>
                </div>
              </div>
              <script src="/index/Scripts/short_comment_vote.js"></script>
              <script src="/index/Scripts/short_comment_nav.js"></script>
              <script>(function() {
                  $('.comment-list').delegate('.vote-comment', 'click',
                  function(e) {
                    vote_comment(e);
                  }).delegate('.delete-comment', 'click',
                  function(e) {
                    if (confirm('确定删除吗？')) {
                      delete_comment(e);
                    }
                  });
                })();</script>
              <div id="reviews" class="ugc-mod">
                <h2 class="clearfix">书评&nbsp;&nbsp;· · · · · ·&nbsp;</h2>
                <a class="redbutt rr" href="https://book.douban.com/subject/26760976/new_review" rel="nofollow">
                  <span>我来评论这本书</span></a>
                <ul id="comment_tab" class="inline-tabs">
                  <li id="t_0" class="on">
                    <a href="javascript:void(0)" onclick="return switch_tab('t_0')">热门评论</a></li>
                  <li id="t_1">
                    <a href="javascript:void(0)" onclick="return switch_tab('t_1')">最新评论</a></li>
                </ul>
                <div id="wt_0" class="">
                  <div class='ctsh'>
                    <div class="tlst">
                      <div class="ilst">
                        <a href="https://www.douban.com/people/120850670/" title="Alen09">
                          <img class="pil" src="/index/Picture/u120850670-5.jpg" alt="Alen09" /></a>
                      </div>
                      <div class="nlst">
                        <h3>
                          <div id="tb-7834995" class="rr">
                            <a id="af-7834995" href="https://book.douban.com/review/7834995/" class="j a_unfolder" style="background:none;">
                              <img src="/index/Picture/blank.gif" class="bn-arrow" width="48" height="19" alt="&gt;" title="展开全文" /></a>
                            <a id="au-7834995" href="javascript:void(0);" class="j a_folder" style="background:none;display:none">
                              <img src="/index/Picture/blank.gif" class="bn-arrow" width="48" height="19" alt="&lt;" title="缩进全文" /></a>
                          </div>
                          <a title="對抗不生存的所有理由" class="" href="https://book.douban.com/review/7834995/">對抗不生存的所有理由</a></h3>
                      </div>
                      <div class="clst">
                        <span class="ll user">
                          <span class="starb">
                            <a href="https://www.douban.com/people/120850670/" class=" ">Alen09</a>&nbsp;</span>
                          <span class="allstar40" title="推荐"></span>
                        </span>
                        <br />
                        <br />
                        <div id='review_7834995_short' class="review-short">
                          <span class="">「不久前，看到西藏僧人自焚的新聞，那時候我真的不解，他那種寧死不屈的心情，到底是種甚麼樣的感覺。應該不是痛恨至極，或是悲傷、或是可憐這種簡單可以說明的吧？他想表現的是，我是來真的，我是真的生氣了。可是，難道除了死之外，沒有別的方法讓別人理解嗎？……但我想也許不行吧。讓別人理解自己的認真，可能很困難吧。因為認真或不認真，不能用肉眼看到。……」 （《怒》，頁169） 我一直覺得，吉田修一的小說像是電視劇，......
                            <div class="clear"></div>......</span>
                          <a class="pl" href="https://book.douban.com/review/7834995/">(
                            <span class="">1回应</span>)</a>
                          <br/>
                          <br/>
                          <div class="pl clearfix">
                            <span class="fleft">
                              <span class="">2016-04-01 01:55</span>&nbsp; &nbsp;
                              <span class="">3/3有用</span></span>
                            <span class="works-link">来自&nbsp;
                              <a onclick="moreurl(this, {from:'works'})" href="https://book.douban.com/subject/26245301/">聯經2014版</a></span>
                          </div>
                        </div>
                        <div id="review_7834995_full" style="display:none"></div>
                        <script type="text/json" class="data-review-sharing">{
                            "url": "https://book.douban.com/review/7834995/",
                            "text": "\u300c\u4e0d\u4e45\u524d\uff0c\u770b\u5230\u897f\u85cf\u50e7\u4eba\u81ea\u711a\u7684\u65b0\u805e\uff0c\u90a3\u6642\u5019\u6211\u771f\u7684\u4e0d\u89e3\uff0c\u4ed6\u90a3\u7a2e\u5be7\u6b7b\u4e0d\u5c48\u7684\u5fc3\u60c5\uff0c\u5230\u5e95\u662f\u7a2e\u751a\u9ebc\u6a23\u7684\u611f\u89ba\u3002\u61c9\u8a72\u4e0d\u662f\u75db\u6068\u81f3\u6975\uff0c\u6216\u662f\u60b2\u50b7\u3001\u6216\u662f\u53ef\u6190\u9019\u7a2e\u7c21\u55ae\u53ef\u4ee5\u8aaa\u660e\u7684\u5427\uff1f\u4ed6\u60f3\u8868\u73fe\u7684\u662f\uff0c\u6211\u662f\u4f86\u771f\u7684\uff0c\u6211\u662f\u771f\u7684\u751f\u6c23\u4e86\u3002\u53ef\u662f\uff0c\u96e3\u9053\u9664\u4e86\u6b7b\u4e4b\u5916\uff0c\u6c92\u6709\u5225\u7684\u65b9\u6cd5\u8b93\u5225\u4eba\u7406\u89e3\u55ce\uff1f\u2026\u2026\u4f46\u6211\u60f3\u4e5f\u8a31\u4e0d\u884c\u5427\u3002\u8b93\u5225\u4eba\u7406\u89e3\u81ea\u5df1\u7684\u8a8d\u771f\uff0c\u53ef\u80fd\u5f88\u56f0\u96e3\u5427\u3002\u56e0\u70ba\u8a8d\u771f\u6216\u4e0d\u8a8d\u771f\uff0c\u4e0d\u80fd\u7528\u8089\u773c\u770b\u5230\u3002\u2026\u2026\u300d \uff08\u300a\u6012\u300b\uff0c\u9801169\uff09  \u6211\u4e00\u76f4\u89ba\u5f97\uff0c\u5409\u7530\u4fee\u4e00\u7684\u5c0f\u8aaa\u50cf\u662f\u96fb\u8996\u5287\uff0c......<div class=\"clear\"></div>......",
                            "site": "\u8c46\u74e3",
                            "title": "\u5c0d\u6297\u4e0d\u751f\u5b58\u7684\u6240\u6709\u7406\u7531"
                          }</script>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
                <div id="wt_1" class="hidden">
                  <div class='ctsh'>
                    <div class="tlst">
                      <div class="ilst">
                        <a href="https://www.douban.com/people/120850670/" title="Alen09">
                          <img class="pil" src="/index/Picture/u120850670-5.jpg" alt="Alen09" /></a>
                      </div>
                      <div class="nlst">
                        <h3>
                          <div id="tb-7834995" class="rr">
                            <a id="af-7834995" href="https://book.douban.com/review/7834995/" class="j a_unfolder" style="background:none;">
                              <img src="/index/Picture/blank.gif" class="bn-arrow" width="48" height="19" alt="&gt;" title="展开全文" /></a>
                            <a id="au-7834995" href="javascript:void(0);" class="j a_folder" style="background:none;display:none">
                              <img src="/index/Picture/blank.gif" class="bn-arrow" width="48" height="19" alt="&lt;" title="缩进全文" /></a>
                          </div>
                          <a title="對抗不生存的所有理由" class="" href="https://book.douban.com/review/7834995/">對抗不生存的所有理由</a></h3>
                      </div>
                      <div class="clst">
                        <span class="ll user">
                          <span class="starb">
                            <a href="https://www.douban.com/people/120850670/" class=" ">Alen09</a>&nbsp;</span>
                          <span class="allstar40" title="推荐"></span>
                        </span>
                        <br />
                        <br />
                        <div id='review_7834995_short' class="review-short">
                          <span class="">「不久前，看到西藏僧人自焚的新聞，那時候我真的不解，他那種寧死不屈的心情，到底是種甚麼樣的感覺。應該不是痛恨至極，或是悲傷、或是可憐這種簡單可以說明的吧？他想表現的是，我是來真的，我是真的生氣了。可是，難道除了死之外，沒有別的方法讓別人理解嗎？……但我想也許不行吧。讓別人理解自己的認真，可能很困難吧。因為認真或不認真，不能用肉眼看到。……」 （《怒》，頁169） 我一直覺得，吉田修一的小說像是電視劇，......
                            <div class="clear"></div>......</span>
                          <a class="pl" href="https://book.douban.com/review/7834995/">(
                            <span class="">1回应</span>)</a>
                          <br/>
                          <br/>
                          <div class="pl clearfix">
                            <span class="fleft">
                              <span class="">2016-04-01 01:55</span>&nbsp; &nbsp;
                              <span class="">3/3有用</span></span>
                            <span class="works-link">来自&nbsp;
                              <a onclick="moreurl(this, {from:'works'})" href="https://book.douban.com/subject/26245301/">聯經2014版</a></span>
                          </div>
                        </div>
                        <div id="review_7834995_full" style="display:none"></div>
                        <script type="text/json" class="data-review-sharing">{
                            "url": "https://book.douban.com/review/7834995/",
                            "text": "\u300c\u4e0d\u4e45\u524d\uff0c\u770b\u5230\u897f\u85cf\u50e7\u4eba\u81ea\u711a\u7684\u65b0\u805e\uff0c\u90a3\u6642\u5019\u6211\u771f\u7684\u4e0d\u89e3\uff0c\u4ed6\u90a3\u7a2e\u5be7\u6b7b\u4e0d\u5c48\u7684\u5fc3\u60c5\uff0c\u5230\u5e95\u662f\u7a2e\u751a\u9ebc\u6a23\u7684\u611f\u89ba\u3002\u61c9\u8a72\u4e0d\u662f\u75db\u6068\u81f3\u6975\uff0c\u6216\u662f\u60b2\u50b7\u3001\u6216\u662f\u53ef\u6190\u9019\u7a2e\u7c21\u55ae\u53ef\u4ee5\u8aaa\u660e\u7684\u5427\uff1f\u4ed6\u60f3\u8868\u73fe\u7684\u662f\uff0c\u6211\u662f\u4f86\u771f\u7684\uff0c\u6211\u662f\u771f\u7684\u751f\u6c23\u4e86\u3002\u53ef\u662f\uff0c\u96e3\u9053\u9664\u4e86\u6b7b\u4e4b\u5916\uff0c\u6c92\u6709\u5225\u7684\u65b9\u6cd5\u8b93\u5225\u4eba\u7406\u89e3\u55ce\uff1f\u2026\u2026\u4f46\u6211\u60f3\u4e5f\u8a31\u4e0d\u884c\u5427\u3002\u8b93\u5225\u4eba\u7406\u89e3\u81ea\u5df1\u7684\u8a8d\u771f\uff0c\u53ef\u80fd\u5f88\u56f0\u96e3\u5427\u3002\u56e0\u70ba\u8a8d\u771f\u6216\u4e0d\u8a8d\u771f\uff0c\u4e0d\u80fd\u7528\u8089\u773c\u770b\u5230\u3002\u2026\u2026\u300d \uff08\u300a\u6012\u300b\uff0c\u9801169\uff09  \u6211\u4e00\u76f4\u89ba\u5f97\uff0c\u5409\u7530\u4fee\u4e00\u7684\u5c0f\u8aaa\u50cf\u662f\u96fb\u8996\u5287\uff0c......<div class=\"clear\"></div>......",
                            "site": "\u8c46\u74e3",
                            "title": "\u5c0d\u6297\u4e0d\u751f\u5b58\u7684\u6240\u6709\u7406\u7531"
                          }</script>
                      </div>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
                <script type="text/javascript">function switch_tab(tab_id) {
                    hide_tab_id = $("#comment_tab .on")[0].id;
                    if (hide_tab_id == tab_id) {
                      return false;
                    }
                    $("#" + tab_id).addClass("on");
                    $("#" + hide_tab_id).removeClass("on");
                    $("#w" + hide_tab_id).hide();
                    $("#w" + tab_id).show();
                  }

                  $('.ctsh').delegate('.clst', 'hover',
                  function(e) {
                    $(this).find('.report')[e.type === 'mouseenter' ? 'show': 'hide']()
                  })</script>
              </div>
              <div class="ugc-mod reading-notes">
                <div class="hd">
                  <h2>读书笔记&nbsp;&nbsp;· · · · · ·&nbsp;</h2>
                  <a rel="nofollow" href="/annotation/write?sid=26760976" class="redbutt rr">
                    <span>我来写笔记</span></a>
                </div>
                <div class="bd">
                  <ul class="inline-tabs">
                    <li class="on">
                      <a href="#rank" id="by_rank">按有用程度</a></li>
                    <li>
                      <a href="#page" id="by_page">按页码先后</a></li>
                    <li>
                      <a href="#time" id="by_time">最新笔记</a></li>
                  </ul>
                  <ul class="comments by_rank">
                    <li class="ctsh clearfix" data-cid="38145828">
                      <div class="ilst">
                        <a href="https://www.douban.com/people/duoduoshuwu/">
                          <img src="/index/Picture/u64610094-101.jpg" alt="张躲躲" class="" /></a>
                      </div>
                      <div class="con">
                        <div class="nlst">
                          <h3>
                            <div class="note-toggle rr">
                              <a href="https://book.douban.com/annotation/38145828/" class="note-unfolder">展开</a>
                              <a href="javascript:void(0);" class="note-folder">收起</a></div>
                            <a href="https://book.douban.com/annotation/38145828/" class="">第61页</a></h3>
                        </div>
                        <div class="clst">
                          <p class="user">
                            <a href="https://www.douban.com/people/duoduoshuwu/" class=" " title="张躲躲">张躲躲</a>(不器。务虚。)
                            <span class="allstar40" title="推荐"></span></p>
                          <div class="reading-note" data-cid="38145828">
                            <div class="short">
                              <span class="">十六岁的花季少女，对母亲的感情是复杂的。这种感情里总夹杂着爱与恨,或者说无限接近&quot;恨&quot;。她们在原本当成母亲的那个人身上，看到了她作为&quot;女人&quot;的那一部分。妈妈作为&quot;女人&quot;的那一部分，让她们感到厌恶。</span>
                              <p class="pl">
                                <span class="">2016-07-14 10:23</span></p>
                            </div>
                            <div class="all hidden" style="display:none">十六岁的花季少女，对母亲的感情是复杂的。这种感情里总夹杂着爱与恨,或者说无限接近&quot;恨&quot;。她们在原本当成母亲的那个人身上，看到了她作为&quot;女人&quot;的那一部分。妈妈作为&quot;女人&quot;的那一部分，让她们感到厌恶。
                              <div class="col-rec-con clearfix">
                                <script>var rec_url = 'https://www.douban.com/share/recommend?'</script>
                                <script type="text/javascript" src="/index/Scripts/dshare.js"></script>
                                <div class="rec-sec">
                                  <span class="rec">
                                    <a href="https://www.douban.com/share/recommend?sanity_key=_496f0&amp;apikey=&amp;name=%E6%80%92&amp;image=&amp;redir=https%3A%2F%2Fbook.douban.com%2Fannotation%2F38145828%2F&amp;href=https%3A%2F%2Fbook.douban.com%2Fannotation%2F38145828%2F&amp;curl=&amp;type=&amp;properties=%7B%7D&amp;desc=%E5%8D%81%E5%85%AD%E5%B2%81%E7%9A%84%E8%8A%B1%E5%AD%A3%E5%B0%91%E5%A5%B3%EF%BC%8C%E5%AF%B9%E6%AF%8D%E4%BA%B2%E7%9A%84%E6%84%9F%E6%83%85%E6%98%AF%E5%A4%8D%E6%9D%82%E7%9A%84%E3%80%82%E8%BF%99%E7%A7%8D%E6%84%9F..." share-id="38145828" data-mode="plain" data-name="怒" data-type="" data-desc="十六岁的花季少女，对母亲的感情是复杂的。这种感情里总夹杂着爱与恨,或者说无限接近&amp;quot;恨&amp;quot;。她..." data-href="https://book.douban.com/annotation/38145828/" data-image="" data-properties="{}" data-redir="https://book.douban.com/static/dshare_proxy.html" data-text="" data-apikey="" data-curl="" data-count="10" data-object_kind="3049" data-object_id="38145828" data-target_type="rec" data-target_action="0" data-action_props="{&#34;subject_url&#34;:&#34;https:\/\/book.douban.com\/subject\/26760976\/&#34;,&#34;note_url&#34;:&#34;https:\/\/book.douban.com\/annotation\/38145828\/&#34;,&#34;author_name&#34;:&#34;张躲躲&#34;,&#34;subject_title&#34;:&#34;怒&#34;,&#34;note_title&#34;:&#34;张躲躲 对 怒 的笔记 - 第61页&#34;}" data-sanity_key="_496f0" class="lnk-sharing lnk-douban-sharing">推荐</a></span>
                                </div>
                                <a href="javascript:;" id="n-38145828" class="j  colbutt ll add-col">
                                  <span>收藏</span></a>
                              </div>
                              <div class="pl col-time">
                                <a href="https://book.douban.com/annotation/38145828/#comments">回应</a>&nbsp;&nbsp; 2016-07-14 10:23</div></div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="comments by_page" style="display: none">
                    <li class="ctsh clearfix" data-cid="38145828">
                      <div class="ilst">
                        <a href="https://www.douban.com/people/duoduoshuwu/">
                          <img src="/index/Picture/u64610094-101.jpg" alt="张躲躲" class="" /></a>
                      </div>
                      <div class="con">
                        <div class="nlst">
                          <h3>
                            <div class="note-toggle rr">
                              <a href="https://book.douban.com/annotation/38145828/" class="note-unfolder">展开</a>
                              <a href="javascript:void(0);" class="note-folder">收起</a></div>
                            <a href="https://book.douban.com/annotation/38145828/" class="">第61页</a></h3>
                        </div>
                        <div class="clst">
                          <p class="user">
                            <a href="https://www.douban.com/people/duoduoshuwu/" class=" " title="张躲躲">张躲躲</a>(不器。务虚。)
                            <span class="allstar40" title="推荐"></span></p>
                          <div class="reading-note" data-cid="38145828">
                            <div class="short">
                              <span class="">十六岁的花季少女，对母亲的感情是复杂的。这种感情里总夹杂着爱与恨,或者说无限接近&quot;恨&quot;。她们在原本当成母亲的那个人身上，看到了她作为&quot;女人&quot;的那一部分。妈妈作为&quot;女人&quot;的那一部分，让她们感到厌恶。</span>
                              <p class="pl">
                                <span class="">2016-07-14 10:23</span></p>
                            </div>
                            <div class="all hidden" style="display:none">十六岁的花季少女，对母亲的感情是复杂的。这种感情里总夹杂着爱与恨,或者说无限接近&quot;恨&quot;。她们在原本当成母亲的那个人身上，看到了她作为&quot;女人&quot;的那一部分。妈妈作为&quot;女人&quot;的那一部分，让她们感到厌恶。
                              <div class="col-rec-con clearfix">
                                <script>var rec_url = 'https://www.douban.com/share/recommend?'</script>
                                <script type="text/javascript" src="/index/Scripts/dshare.js"></script>
                                <div class="rec-sec">
                                  <span class="rec">
                                    <a href="https://www.douban.com/share/recommend?sanity_key=_496f0&amp;apikey=&amp;name=%E6%80%92&amp;image=&amp;redir=https%3A%2F%2Fbook.douban.com%2Fannotation%2F38145828%2F&amp;href=https%3A%2F%2Fbook.douban.com%2Fannotation%2F38145828%2F&amp;curl=&amp;type=&amp;properties=%7B%7D&amp;desc=%E5%8D%81%E5%85%AD%E5%B2%81%E7%9A%84%E8%8A%B1%E5%AD%A3%E5%B0%91%E5%A5%B3%EF%BC%8C%E5%AF%B9%E6%AF%8D%E4%BA%B2%E7%9A%84%E6%84%9F%E6%83%85%E6%98%AF%E5%A4%8D%E6%9D%82%E7%9A%84%E3%80%82%E8%BF%99%E7%A7%8D%E6%84%9F..." share-id="38145828" data-mode="plain" data-name="怒" data-type="" data-desc="十六岁的花季少女，对母亲的感情是复杂的。这种感情里总夹杂着爱与恨,或者说无限接近&amp;quot;恨&amp;quot;。她..." data-href="https://book.douban.com/annotation/38145828/" data-image="" data-properties="{}" data-redir="https://book.douban.com/static/dshare_proxy.html" data-text="" data-apikey="" data-curl="" data-count="10" data-object_kind="3049" data-object_id="38145828" data-target_type="rec" data-target_action="0" data-action_props="{&#34;subject_url&#34;:&#34;https:\/\/book.douban.com\/subject\/26760976\/&#34;,&#34;note_url&#34;:&#34;https:\/\/book.douban.com\/annotation\/38145828\/&#34;,&#34;author_name&#34;:&#34;张躲躲&#34;,&#34;subject_title&#34;:&#34;怒&#34;,&#34;note_title&#34;:&#34;张躲躲 对 怒 的笔记 - 第61页&#34;}" data-sanity_key="_496f0" class="lnk-sharing lnk-douban-sharing">推荐</a></span>
                                </div>
                                <a href="javascript:;" id="n-38145828" class="j  colbutt ll add-col">
                                  <span>收藏</span></a>
                              </div>
                              <div class="pl col-time">
                                <a href="https://book.douban.com/annotation/38145828/#comments">回应</a>&nbsp;&nbsp; 2016-07-14 10:23</div></div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="comments by_time" style="display: none">
                    <li class="ctsh clearfix" data-cid="38145828">
                      <div class="ilst">
                        <a href="https://www.douban.com/people/duoduoshuwu/">
                          <img src="/index/Picture/u64610094-101.jpg" alt="张躲躲" class="" /></a>
                      </div>
                      <div class="con">
                        <div class="nlst">
                          <h3>
                            <div class="note-toggle rr">
                              <a href="https://book.douban.com/annotation/38145828/" class="note-unfolder">展开</a>
                              <a href="javascript:void(0);" class="note-folder">收起</a></div>
                            <a href="https://book.douban.com/annotation/38145828/" class="">第61页</a></h3>
                        </div>
                        <div class="clst">
                          <p class="user">
                            <a href="https://www.douban.com/people/duoduoshuwu/" class=" " title="张躲躲">张躲躲</a>(不器。务虚。)
                            <span class="allstar40" title="推荐"></span></p>
                          <div class="reading-note" data-cid="38145828">
                            <div class="short">
                              <span class="">十六岁的花季少女，对母亲的感情是复杂的。这种感情里总夹杂着爱与恨,或者说无限接近&quot;恨&quot;。她们在原本当成母亲的那个人身上，看到了她作为&quot;女人&quot;的那一部分。妈妈作为&quot;女人&quot;的那一部分，让她们感到厌恶。</span>
                              <p class="pl">
                                <span class="">2016-07-14 10:23</span></p>
                            </div>
                            <div class="all hidden" style="display:none">十六岁的花季少女，对母亲的感情是复杂的。这种感情里总夹杂着爱与恨,或者说无限接近&quot;恨&quot;。她们在原本当成母亲的那个人身上，看到了她作为&quot;女人&quot;的那一部分。妈妈作为&quot;女人&quot;的那一部分，让她们感到厌恶。
                              <div class="col-rec-con clearfix">
                                <script>var rec_url = 'https://www.douban.com/share/recommend?'</script>
                                <script type="text/javascript" src="/index/Scripts/dshare.js"></script>
                                <div class="rec-sec">
                                  <span class="rec">
                                    <a href="https://www.douban.com/share/recommend?sanity_key=_496f0&amp;apikey=&amp;name=%E6%80%92&amp;image=&amp;redir=https%3A%2F%2Fbook.douban.com%2Fannotation%2F38145828%2F&amp;href=https%3A%2F%2Fbook.douban.com%2Fannotation%2F38145828%2F&amp;curl=&amp;type=&amp;properties=%7B%7D&amp;desc=%E5%8D%81%E5%85%AD%E5%B2%81%E7%9A%84%E8%8A%B1%E5%AD%A3%E5%B0%91%E5%A5%B3%EF%BC%8C%E5%AF%B9%E6%AF%8D%E4%BA%B2%E7%9A%84%E6%84%9F%E6%83%85%E6%98%AF%E5%A4%8D%E6%9D%82%E7%9A%84%E3%80%82%E8%BF%99%E7%A7%8D%E6%84%9F..." share-id="38145828" data-mode="plain" data-name="怒" data-type="" data-desc="十六岁的花季少女，对母亲的感情是复杂的。这种感情里总夹杂着爱与恨,或者说无限接近&amp;quot;恨&amp;quot;。她..." data-href="https://book.douban.com/annotation/38145828/" data-image="" data-properties="{}" data-redir="https://book.douban.com/static/dshare_proxy.html" data-text="" data-apikey="" data-curl="" data-count="10" data-object_kind="3049" data-object_id="38145828" data-target_type="rec" data-target_action="0" data-action_props="{&#34;subject_url&#34;:&#34;https:\/\/book.douban.com\/subject\/26760976\/&#34;,&#34;note_url&#34;:&#34;https:\/\/book.douban.com\/annotation\/38145828\/&#34;,&#34;author_name&#34;:&#34;张躲躲&#34;,&#34;subject_title&#34;:&#34;怒&#34;,&#34;note_title&#34;:&#34;张躲躲 对 怒 的笔记 - 第61页&#34;}" data-sanity_key="_496f0" class="lnk-sharing lnk-douban-sharing">推荐</a></span>
                                </div>
                                <a href="javascript:;" id="n-38145828" class="j  colbutt ll add-col">
                                  <span>收藏</span></a>
                              </div>
                              <div class="pl col-time">
                                <a href="https://book.douban.com/annotation/38145828/#comments">回应</a>&nbsp;&nbsp; 2016-07-14 10:23</div></div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <script type="text/javascript">$(document).ready(function() {
                  var TEMPL_ADD_COL = '<a href="" id="n-{NOTE_ID}" class="colbutt ll add-col"><span>收藏</span></a>',
                  TEMPL_DEL_COL = '<span class="pl">已收藏 &gt;<a href="" id="n-{NOTE_ID}" class="del-col">取消收藏</a></span>';

                  $('body').delegate('.add-col', 'click',
                  function(e) {
                    e.preventDefault();
                    var nnid = $(this).attr('id').split('-')[1],
                    bn_add = $(this);
                    $.post_withck("/j/book/annotation_collect", {
                      nid: nnid
                    },
                    function() {
                      var a = $(TEMPL_DEL_COL.replace('{NOTE_ID}', nnid));
                      bn_add.before(a);
                      bn_add.remove();
                    })
                  });

                  $('body').delegate('.del-col', 'click',
                  function(e) {
                    e.preventDefault();
                    var nnid = $(this).attr('id').split('-')[1],
                    bn_del = $(this).parent();
                    $.post_withck("/j/book/annotation_uncollect", {
                      nid: nnid
                    },
                    function() {
                      var a = $(TEMPL_ADD_COL.replace('{NOTE_ID}', nnid));
                      bn_del.before(a);
                      bn_del.remove();
                    })
                  });

                  $("pre.source").each(function() {
                    var cn = $(this).attr('class').split(' ');
                    l = cn[1];
                    s = 'rand01';
                    n = cn[2];
                    $(this).snippet(n, {
                      style: s,
                      showNum: l
                    });
                  });

                  var annotationMod = $('.reading-notes .bd'),
                  annotationTabs = annotationMod.find('.inline-tabs li'),
                  annotationTabLinks = annotationTabs.find('a'),
                  annotationTabContents = annotationMod.find('ul.comments');

                  annotationTabLinks.click(function(e) {
                    e.preventDefault();
                    var el = $(this),
                    kind = el.attr('id');

                    annotationTabs.removeClass('on');
                    el.parent().addClass('on');
                    annotationTabContents.hide();
                    annotationTabContents.filter('.' + kind).show();
                  });
                });</script>
              <script type="text/x-mathjax-config">MathJax.Hub.Config({
                  jax: ["input/TeX", "output/HTML-CSS"],
                  extensions: ["tex2jax.js", "TeX/AMSmath.js", "TeX/AMSsymbols.js", "TeX/noUndefined.js"],
                  tex2jax: {
                    inlineMath: [["($", "$)"], ['\\(', '\\)']],
                    displayMath: [["($$", "$$)"], ['\\[', '\\]']],
                    skipTags: ["script", "noscript", "style", "textarea"],
                    processEscapes: true,
                    processEnvironments: true,
                    preview: "TeX"
                  },
                  showProcessingMessages: false
                });</script>
              <div id="db-discussion-section" class="indent ugc-mod">
                <a class="redbutt  rr" href="https://book.douban.com/subject/26760976/discussion/create" rel="nofollow">
                  <span>在这本书的论坛里发言</span></a>
              </div>
            </div>
            <script type="text/javascript">$(function() {
                if ($.browser.msie && $.browser.version == 6.0) {
                  var maxWidth = parseInt($('#info').css('max-width'));
                  if ($('#info').width() > maxWidth) $('#info').width(maxWidth)
                }
              });</script>
          </div>
          <div class="aside">
            <div class="get_douban_app">
              <h2 class="discuss-title">在豆瓣App讨论这本书 · · · · · ·</h2>
              <div class="bd">
                <img src="/index/Picture/26760976.png" alt="扫码下载豆瓣App">
                <div class="info">
                  <div class="avatars">
                    <img src="/index/Picture/u122201269-4.jpg" class="discuss-avator"></div>
                  <div class="text">用豆瓣App扫码，找人聊聊这本书。
                    <br>没有豆瓣App？
                    <a href="https://www.douban.com/doubanapp/app?channel=subject_promotion_qr">去下载</a></div>
                </div>
              </div>
            </div>
            <style type="text/css" media="screen">.add2cartContainer{height:25px;overflow:hidden;vertical-align:bottom}.add2cartContainer .add2cart{margin-right:0;display:inline-block}#buyinfo h2{margin-bottom:6px}#buyinfo .bs{margin:0}#buyinfo li{position:relative;line-height:1;border-bottom:1px dashed #ddd}#buyinfo li a{display:block;padding:6px;border-radius:3px}#buyinfo li a:hover{color:#fff;background-color:#f7b779;background-image:url(Images/icon-brown.png);background-repeat:no-repeat;background-position:265px center}#buyinfo li a:hover .comment,#buyinfo li a:hover .buyinfo-promotion{color:#ab7947}#buyinfo li a:hover .buylink-price{color:#fff}#buyinfo li a:hover .saved-price{display:inline}#buyinfo li a:hover.other-edition{background-image:none}#buyinfo li .buylink-price{position:absolute;left:100px;color:#8fadc6}#buyinfo .more-info{color:#aaa;margin:6px 0 -2px 0}#buyinfo .price-page{text-align:center;border:none}#buyinfo .saved-price{display:none;margin-left:5px}#buyinfo .cart-tip{float:right;padding-right:5px;line-height:25px}#buyinfo #buyinfo-ebook{margin-bottom:15px}#buyinfo #buyinfo-ebook .buylink-price{left:auto;right:30px}#buyinfo-printed{margin-bottom:8px;border-bottom:1px solid #e4e4e4}#buyinfo-printed.no-border{border-bottom:0}#buyinfo-report{display:none}#buyinfo-report .lnk-close-report{float:right;margin-top:-30px;line-height:14px}#buyinfo-report .item{margin-bottom:10px}#buyinfo-report .item input{vertical-align:text-bottom;*vertical-align:middle}#buyinfo-report .item label{margin:0 5px 0 2px}#buyinfo-report .item-submit .bn-flat{margin-right:10px}#buyinfo-report .item-price input{width:220px;border:1px solid #ccc;padding:4px}#buyinfo-report form{margin:5px 0 10px}#bi-report-btn{float:right;margin:2px 0;line-height:14px;display:none}.bi-vendor-report{color:#aaa}.bi-vendor-report-form{display:none;color:#111;margin:0 5px;line-height:25px}.gray_ad .ebook-tag{margin-left:8px;padding:0 6px;line-height:20px;font-size:11px;border:1px solid #e6e6e2;background:#f1f1ed;display:inline-block;*display:inline;*zoom:1;vertical-align:top}@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi){#buyinfo li a:hover{background-image:url(Images/icon-brown@2x.png);background-size:16px 12px}}#intervenor-buyinfo h2{margin-bottom:6px}#intervenor-buyinfo .bs{margin:0}#intervenor-buyinfo li{position:relative;line-height:1;border-bottom:1px dashed #ddd}#intervenor-buyinfo li .basic-info{color:#494949;font-size:14px;line-height:18px}#intervenor-buyinfo li a{display:block;padding:10px 4px;border-radius:3px}#intervenor-buyinfo li a:hover{color:#000;background-color:#FFF;background-repeat:no-repeat;background-position:265px center}#intervenor-buyinfo li a:hover .comment{color:#e97e7e}#intervenor-buyinfo li a:hover .buy-btn{background:#fff;border:1px solid #e97e7e;border-radius:2px;color:#e97e7e}#intervenor-buyinfo li .buylink-price{position:absolute;left:140px;color:#9c9c9c}#intervenor-buyinfo .jd-buy-icon{float:left;margin-right:3px}#intervenor-buyinfo .buy-btn{float:right;position:absolute;right:10px;bottom:10px;color:#9c9c9c;padding:6px 12px;border:1px solid transparent}#intervenor-buyinfo .comment{color:#e97e7e;margin:6px 0 -2px 0}#intervenor-buyinfo .price-page a:hover{background-color:#f7b779;color:#FFF}#intervenor-buyinfo .price-page{text-align:center;border:none}#intervenor-buyinfo .saved-price{display:none;margin-left:5px}#intervenor-buyinfo .cart-tip{float:right;padding-right:5px;line-height:25px}#intervenor-buyinfo #buyinfo-ebook{margin-bottom:15px}#intervenor-buyinfo #buyinfo-ebook .buylink-price{left:auto;right:30px}</style>
            <div class="gray_ad" id="buyinfo">
              <div id="buyinfo-printed">
                <h2 class="">在哪儿买这本书?</h2>
                <ul class="bs noline more-after ">
                  <li class="">
                    <a target="_blank" href="https://book.douban.com/link2/?lowest=3198&amp;pre=0&amp;vendor=jingdong&amp;srcpage=subject&amp;price=3740&amp;pos=1&amp;url=http%3A%2F%2Funion.click.jd.com%2Fjdc%3Fe%3D%26p%3DAyIOZR5aEQISA1AYUyUCEg9SH1sQCyJDCkMFSjJLQhBaUAscSkIBR0ROVw1VC0dFFQIaAFEbXhwdS0IJRmt2cWh%252FEm8ffWBldS0ZP215ZUAyGD1TDh43Uh5cEwUbBFIrWxEDFgNlKzpnMkBpja3tzaejG4Gx1MCKhTdUK1sQBRoGUhpfFAcRA1wrXCXbkrCDucnMnJjS3YxrJTIi%26t%3DW1dCFBBFC1pXUwkEAEAdQFkJBVsVChUDVR5SCltXWwg%253D&amp;cntvendor=3&amp;srcsubj=26760976&amp;type=bkbuy&amp;subject=26760976" class="">
                      <div class="basic-info">
                        <span class="">京东商城</span>
                        <span class="buylink-price">
                          <span class="">37.40 元</span>
                          <span class="saved-price">节省 4.6</span></span>
                      </div>
                    </a>
                  </li>
                  <li class="">
                    <a target="_blank" href="https://book.douban.com/link2/?lowest=3198&amp;pre=0&amp;vendor=dangdang&amp;srcpage=subject&amp;price=3360&amp;pos=2&amp;url=http%3A%2F%2Funion.dangdang.com%2Ftransfer.php%3Ffrom%3DP-306226-148026085-s26760976%26backurl%3Dhttp%3A%2F%2Fproduct.dangdang.com%2Fproduct.aspx%3Fproduct_id%3D23996508&amp;cntvendor=3&amp;srcsubj=26760976&amp;type=bkbuy&amp;subject=26760976" class="">
                      <div class="basic-info">
                        <span class="">当当网</span>
                        <span class="buylink-price">
                          <span class="">33.60 元</span>
                          <span class="saved-price">节省 8.4</span></span>
                      </div>
                    </a>
                  </li>
                  <li class="">
                    <a target="_blank" href="https://book.douban.com/link2/?lowest=3198&amp;pre=0&amp;vendor=joyo&amp;srcpage=subject&amp;price=3198&amp;pos=3&amp;url=http%3A%2F%2Fwww.amazon.cn%2Fmn%2FdetailApp%2Fref%3Dasc_df_B01HZ419L22219026%2F%3Fasin%3DB01HZ419L2%26tag%3Ddouban-23%26creative%3D2384%26creativeASIN%3DB01HZ419L2%26linkCode%3Ddf0&amp;cntvendor=3&amp;srcsubj=26760976&amp;type=bkbuy&amp;subject=26760976" class="">
                      <div class="basic-info">
                        <span class="">亚马逊</span>
                        <span class="buylink-price">
                          <span class="">31.98 元</span>
                          <span class="saved-price">节省 10.02</span></span>
                      </div>
                    </a>
                  </li>
                  <li class="price-page">
                    <a href="https://book.douban.com/subject/26760976/buylinks">查看 3 家网店价格 （31.98 元起）</a></li>
                </ul>
              </div>
              <div class="add2cartContainer ft
              no-border
              ">
                <span class="add2cartWidget ll">
                  <a href="javascript:;" class="j colbutt a_add2cart add2cart" name="26760976">
                    <span>加入购书单</span></a>
                  <span class="color_gary book-in-cart hidden">已在购书单&nbsp;
                    <a href="https://book.douban.com/cart">查看</a>
                    <a class="delete-cart-item" rel="26760976" href="https://book.douban.com/cart">删除</a></span>
                </span>
                <span class="pl cart-tip">多本比价，批量购买</span></div>
            </div>
            <style class="text/css">.presale-indicator{display:inline-block;*display:inline;*zoom:1;width:24px;height:15px;line-height:15px;background:url(Images/presale_text.gif) no-repeat;text-indent:-9999px;vertical-align:middle;*vertical-align:0;_vertical-align:2px;margin-left:.5em}</style>
            <div id="dale_book_subject_top_right"></div>
            <div id="dale_book_subject_top_middle"></div>
            <h2>
              <span class="">这本书的其他版本</span>&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
              <span class="pl">&nbsp;(
                <a href="https://book.douban.com/works/1058359">全部3</a>)</span></h2>
            <div class="indent">
              <ul>
                <li class="mb8 pl">
                  <a href="https://book.douban.com/subject/26245301/">聯經版</a>2014-12 / 57人读过 / 有售</li>
                <li class="mb8 pl">
                  <a href="https://book.douban.com/subject/25787487/">中央公論新社版</a>2014-1-25 / 5人读过</li></ul>
            </div>
            <h2>
              <span class="">以下豆列推荐</span>&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;
              <span class="pl">&nbsp;(
                <a href="https://book.douban.com/subject/26760976/doulists">全部</a>)</span></h2>
            <div id="db-doulist-section" class="indent">
              <ul class="bs">
                <li class="">
                  <a class="" href="https://www.douban.com/doulist/41073897/" target="_blank">谨以此献给孤独长日</a>
                  <span class="pl">(仙爪)</span></li>
                <li class="">
                  <a class="" href="https://www.douban.com/doulist/1334076/" target="_blank">同志文学藏书</a>
                  <span class="pl">(鹿鸣之什)</span></li>
                <li class="">
                  <a class="" href="https://www.douban.com/doulist/3527466/" target="_blank">要买的书3</a>
                  <span class="pl">(闲人)</span></li>
                <li class="">
                  <a class="" href="https://www.douban.com/doulist/1004031/" target="_blank">搜书榜</a>
                  <span class="pl">(京奈)</span></li>
                <li class="">
                  <a class="" href="https://www.douban.com/doulist/1867348/" target="_blank">读书。小说。读这些不完全是消遣。</a>
                  <span class="pl">(VanessaVesper.)</span></li>
              </ul>
            </div>
            <h2>谁读这本书?</h2>
            <div class="indent" id="collector">
              <div class="">
                <div class="ll">
                  <a href="https://www.douban.com/people/winterisgoing/">
                    <img src="/index/Picture/u126909196-1.jpg" class="pil" alt="winterisgoing" /></a>
                </div>
                <div style="padding-left:60px">
                  <a class="" href="https://www.douban.com/people/winterisgoing/">winterisgoing</a>
                  <br/>
                  <div class="pl ll">29分钟前 想读</div>
                  <br/></div>
                <div class="clear"></div>
                <br/>
                <div class="ul" style="margin-bottom:12px;"></div>
              </div>
              <div class="">
                <div class="ll">
                  <a href="https://www.douban.com/people/1313110/">
                    <img src="/index/Picture/u1313110-41.jpg" class="pil" alt="maggie" /></a>
                </div>
                <div style="padding-left:60px">
                  <a class="" href="https://www.douban.com/people/1313110/">maggie</a>
                  <br/>
                  <div class="pl ll">59分钟前 想读</div>
                  <br/></div>
                <div class="clear"></div>
                <br/>
                <div class="ul" style="margin-bottom:12px;"></div>
              </div>
              <div class="">
                <div class="ll">
                  <a href="https://www.douban.com/people/122045669/">
                    <img src="/index/Picture/u122045669-5.jpg" class="pil" alt="我叫什么" /></a>
                </div>
                <div style="padding-left:60px">
                  <a class="" href="https://www.douban.com/people/122045669/">我叫什么</a>
                  <br/>
                  <div class="pl ll">1小时前 想读</div>
                  <br/></div>
                <div class="clear"></div>
                <br/>
                <div class="ul" style="margin-bottom:12px;"></div>
              </div>
              <div class="">
                <div class="ll">
                  <a href="https://www.douban.com/people/61990754/">
                    <img src="/index/Picture/u61990754-4.jpg" class="pil" alt="willycheng" /></a>
                </div>
                <div style="padding-left:60px">
                  <a class="" href="https://www.douban.com/people/61990754/">willycheng</a>
                  <br/>
                  <div class="pl ll">今天上午 想读</div>
                  <br/></div>
                <div class="clear"></div>
                <br/>
                <div class="ul" style="margin-bottom:12px;"></div>
              </div>
              <p class="pl">&gt;
                <a href="https://book.douban.com/subject/26760976/doings">3人在读</a></p>
              <p class="pl">&gt;
                <a href="https://book.douban.com/subject/26760976/collections">23人读过</a></p>
              <p class="pl">&gt;
                <a href="https://book.douban.com/subject/26760976/wishes">713人想读</a></p>
            </div>
            <div class="pop_win" style="display: none; left: 50%; top: 50%; margin-left: -280px; margin-top: -150px; visibility: visible; z-index: 9999;">
              <a class="pop_win_close" href="javascript:;" onclick="pop_win.close()">X</a>
              <style type="text/css">.captcha_image {height:40px; padding-left:20px;} a.pop_win_close { top: 5px } .pop_win { padding: 0 } .pop_win h3 { font-size: 14px; padding: 12px 10px 8px 10px; margin: 0; color: #006600; background: #ebf5eb; *height: auto } .dui-dialog .hd h3 { color: #006600 } .pop_win h3 span, .dui-dialog .hd h3 span { color: #888; font-size: 12px } .pop_win h3 a, .dui-dialog .hd h3 a { font-size: 12px } #pop_win_login { width:560px; padding: 10px } #pop_win_login form { width: 280px; border: none } #pop_win_login fieldset { border: 0 none; padding: 0; margin: 0 } #pop_win_login .item { margin: 15px 0 12px 0; overflow: visible } #pop_win_login label { display: inline-block; float:left; margin-right: 15px; text-align: right; width: 30px; font-size: 14px; line-height: 30px; vertical-align: baseline } #pop_win_login label.sub { font-size: 12px; display: inline; width: auto; text-align: left; float: none; margin: 0; color: #666 } #pop_win_login input { vertical-align: middle } #pop_win_login .text { width: 200px; padding: 5px; height: 18px; font-size: 14px; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; border: 1px solid #c9c9c9 } #pop_win_login .text:focus { border: 1px solid #a9a9a9 } .captcha_block { margin-top:1em; } .device-mobile #pop_win_login { width:auto; } .device-mobile #pop_win_login form { width:auto; } .device-mobile #pop_win_login .item { margin:0 0 5px;overflow:hidden; } .device-mobile #pop_win_login label { margin-right: 5px; width: 30px; } .device-mobile #pop_win_login .text { width: 70%; padding: 2px; height: auto; font-size: 14px; } .device-mobile #captcha_field { padding:2px;width:30% } .device-mobile #captcha_image { padding:0; } .device-mobile .captcha_block { margin-top:5px; } .device-mobile .recsubmit { padding-top:10px; } /* BY RYAN KUNG */ .device-mobile .dui-dialog-content h3 {font-size:16px;} .device-mobile .dui-dialog-content h3 span{font-size:14px;} .device-mobile a.dui-dialog-close {font-size: 20px;} /* .device-mobile #pop_win_login {padding:0;} .device-mobile #pop_win_login .item .text{width:65%; padding:8px;} .device-mobile #pop_win_login .item {margin:10px 0;} .device-mobile #pop_win_login .item label {float:none;display:inline-block;} .device-mobile #pop_win_login .item #remember {height:30px;} .device-mobile #pop_win_login .recsubmit label {display:none;} .device-mobile #pop_win_login .recsubmit .bn-flat{margin:0;} .device-mobile #pop_win_login .recsubmit .bn-flat input{font-size:16px; height:40px; padding:0 40%;} .device-mobile #pop_win_login .remember {padding:10px 0;} .device-mobile #pop_win_login label {height:30px; width:auto;} .device-mobile #pop_win_login a{line-height:30px;display:inline-block;} .device-mobile #captcha_field { padding:2px;width:30% } .device-mobile #captcha_image { padding:0; } .device-mobile .captcha_block { margin-top:5px; } */ #pop_win_login { padding:0; } .book-pop-login form { padding-left: 10px; } #pop_win_login form { float:left;border-right: 1px solid #E0E1E0; padding-left: 10px; } #pop_win_login .alternative { float: left; margin-left: 20px; padding: 7px } #pop_win_login .alternative p { color: #666 } #pop_win_login .alternative p.redirect { margin-top: 6.5em; } #pop_win_login .alternative ul { margin-top: 25px; } #pop_win_login .alternative li { display:inline-block;*display:inline;zoom:1;vertical-align:top;color:#333;margin-right:10px; } #pop_win_login .alternative a.signin { display:inline-block;*display:inline;zoom:1;border:1px solid #dcdcdc;height:30px;width:54px;padding:0 5px 0 36px;line-height:30px;cursor:pointer; -moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px; } #pop_win_login .alternative a.signin:hover { color:#666; } #login_sina { background:url(/pics/ic_3rd_login.png) no-repeat 5px 5px; } #login_qq { background:url(/pics/connect_qq.png) no-repeat 5px 7px; } #pop_win_login #login_msn { background:url(/pics/msn_login_btn.png) no-repeat 7px 6px;padding-left:44px; width:46px;} div.login_notice_from_subject {background:#FFF7BE; padding:1em; text-align:center; font: 12px, Arial,Helvetica,sans-serif;}</style>
              <h3>登录豆瓣读书
                <span>(
                  <a href="https://www.douban.com/accounts/register">还没有注册?</a>)</span></h3>
              <div class="book-pop-login" id="pop_win_login">
                <form action="/admin/login" method="post" name="pop_win_login_form" id="pop_win_login_form" class="pop_win_login_form">
                  <fieldset>
                    <input type="hidden" value="book" name="source">
                    <div class="item">
                      <label for="form_email">帐号</label>
                      <input type="text" class="text pop_email" name="username" id="form_email" tabindex="1"></div>
                    <div class="item">
                      <label for="form_password">密码</label>
                      <input type="password" class="text" id="pop_password" name="password" tabindex="2"></div>
                    
                    <div class="item remember">
                      <label>&nbsp;</label>
                      <a style="margin-left: 0.8em;" href="https://www.douban.com/accounts/resetpassword">忘记密码了</a></div>
                    <div class="item recsubmit">
                      <label>&nbsp;</label>
                      <div>
                        <span class="bn-flat">
                          {{csrf_field()}}
                          <input type="submit" value="登录"></span>
                          
                      </div>
                    </div>
                  </fieldset>
                </form>
                <div class="alternative">
                    <img src="/index/Images/douban.png" style="width:100px;padding:20px" alt="">
                </div>
              </div>
            </div>
            <!-- douban ad begin -->
            <div id="dale_book_subject_middle_right"></div>
            <script type="text/javascript">(function(global) {
                if (!document.getElementsByClassName) {
                  document.getElementsByClassName = function(className) {
                    return this.querySelectorAll("." + className);
                  };
                  Element.prototype.getElementsByClassName = document.getElementsByClassName;

                }
                var articles = global.document.getElementsByClassName('article'),
                asides = global.document.getElementsByClassName('aside');

                if (articles.length > 0 && asides.length > 0 && articles[0].offsetHeight >= asides[0].offsetHeight) { (global.DoubanAdSlots = global.DoubanAdSlots || []).push('dale_book_subject_middle_right');
                }
              })(this);</script>
            
            
          </div>
          <div class="extra">
            <!-- douban ad begin -->
            <div id="dale_book_subject_bottom_super_banner"></div>
            <script type="text/javascript">(function(global) {
                var body = global.document.body,
                html = global.document.documentElement;

                var height = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
                if (height >= 2000) { (global.DoubanAdSlots = global.DoubanAdSlots || []).push('dale_book_subject_bottom_super_banner');
                }
              })(this);</script>
            <!-- douban ad end --></div>
        </div>
      </div>
@endsection

@section('myJs')
<script type="text/javascript">
    $(function(){
      $('#gouwu').click(function(){
        
        var id = $(this).attr('aid');
        $.get('/getCart',{id:id},function(data){
            if(data == '0'){
              $('.pop_win').show();
            }else{
              $('#gouwu').remove();        
              $('.gouwuche').css('display','inline');           
            }
        },'json')
      });
    })
    $('.pop_win_close').click(function(){
      $('.pop_win').hide();
    })
</script>
@endsection