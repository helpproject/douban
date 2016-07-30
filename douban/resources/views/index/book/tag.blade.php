@extends('layout.index')

@section('title',$title)

@section('content')
<style type="text/css">
	.subject-item, .site-item {
  overflow: hidden;
  zoom: 1;
  border-top: 1px dashed #ddd;
  padding: 20px 0 10px;
  margin-bottom: 10px;
}
.subject-item .pic, .site-item .pic {
  float: left;
  margin-right: 20px;
}
.info1 {
	width:480px;
	height:38px;
	float:right;
}
.info {
	width:480px;
	height:38px;
	float:right;
}
</style>
<div id="content">
<h1>豆瓣图书标签:{{$cate->name}} </h1>
<div class="grid-16-8 clearfix">
  <div class="article">
    <div id="subject_list">
      <div class="clearfix">
        <span class="rr greyinput">综合排序 &nbsp;/&nbsp;
          <a href="/tag/%E5%B0%8F%E8%AF%B4?type=R">按出版日期排序</a>&nbsp;/&nbsp;
          <a href="/tag/%E5%B0%8F%E8%AF%B4?type=S">按评价排序</a></span>
      </div>
      <ul class="subject-list">
		@foreach($books as $k=>$v)
        <li class="subject-item">
          <div class="pic">
            <a class="nbg" href="https://book.douban.com/subject/1770782/" onclick="moreurl(this,{i:'0',subject_id:'1770782',from:'book_subject_search'})">
              <img class="" src="{{$v->img}}" width="90"></a>
          </div>
          <div class="info">
            <h2 class="">
              <a href="/subject/{{$v->id}}" title="{{$v->title}}" onclick="moreurl(this,{i:'0',subject_id:'1770782',from:'book_subject_search'})">{{$v->title}}</a></h2>
            <div class="pub"> /{{$v->author->name}}/ {{$v->press}} / {{$v->pressdate}} / {{$v->price}}元</div>
            <div class="star clearfix">
              <span class="allstar45"></span>
              <span class="rating_nums">8.8</span>
              <span class="pl">(222793人评价)</span></div>
              <div class="info1">
              {!! mb_substr($v->intro,0,80) !!}...
              </div>
            <!-- <div class="ft">
              <div class="collect-info">
                <span>
                  <a href="wish/148026085/update?add=1770782" name="sbtn-1770782-wish" class="j a_collect_btn" rel="nofollow">想读</a></span>
                <span>
                  <a href="do/148026085/update?add=1770782" name="sbtn-1770782-do" class="j a_collect_btn" rel="nofollow">在读</a></span>
                <span>
                  <a href="collection/148026085/update?add=1770782" name="sbtn-1770782-collect" class="j a_collect_btn" rel="nofollow">读过</a></span>
              </div>
              <div class="cart-actions">
                <span class="buy-info">
                  <a href="https://book.douban.com/subject/1770782/buylinks">纸质版 17.70 元起</a></span>
                <span class="cart-info">
                  <span class="add2cartWidget ">
                    <a href="javascript:;" class="j  a_add2cart add2cart" name="1770782">
                      <span>加入购书单</span></a>
                    <span class="color_gary book-in-cart hidden">已在
                      <a href="https://book.douban.com/cart">购书单</a>
                      <a class="delete-cart-item" rel="1770782" href="https://book.douban.com/cart">删除</a></span>
                  </span>
                </span>
              </div>
              <div class="ebook-link">
                <a target="_blank" href="https://read.douban.com/ebook/1162265/?dcs=tag-buylink&amp;dcm=douban&amp;dct=1770782">去看电子版</a></div>
            </div> -->
          </div>
        </li>
		@endforeach
      </ul>
      <div class="paginator">
        <!-- <span class="prev">&lt;前页</span>
        <span class="thispage">1</span>
        <a href="/tag/小说?start=20&amp;type=T">2</a>
        <a href="/tag/小说?start=40&amp;type=T">3</a>
        <a href="/tag/小说?start=60&amp;type=T">4</a>
        <a href="/tag/小说?start=80&amp;type=T">5</a>
        <a href="/tag/小说?start=100&amp;type=T">6</a>
        <a href="/tag/小说?start=120&amp;type=T">7</a>
        <a href="/tag/小说?start=140&amp;type=T">8</a>
        <a href="/tag/小说?start=160&amp;type=T">9</a>
        <span class="break">...</span>
        <span class="next">
          <link rel="next" href="/tag/小说?start=20&amp;type=T" />
          <a href="/tag/小说?start=20&amp;type=T">后页&gt;</a></span> -->
          {!! $books->render() !!}
      </div>
    </div>
  </div>
  <div class="aside">
    <br/>
    <div id="dale_book_tag_top_right"></div>
    <h2>
      <span class="">相关的标签</span>&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;</h2>
    <div class="tags-list">
      <a href="/tag/外国文学">外国文学</a>
      <a href="/tag/言情">言情</a>
      <a href="/tag/美国">美国</a>
      <a href="/tag/文学">文学</a>
      <a href="/tag/爱情">爱情</a>
      <a href="/tag/中国">中国</a>
      <a href="/tag/中国文学">中国文学</a>
      <a href="/tag/英国">英国</a></div>
    <form name="tsp_form" action="/tag/" method="GET">
      <input name="search_text" class="j a_search_text" type="text" size="24" maxlength="36" title="去其他标签" value="" />
      <input class="butt" type="submit" value="进入" /></form>
    <br/>
    <br/>
    <p class="pl2 mb30">&gt;
      <a href="/tag/">浏览全部图书标签</a></p>
    <br/>
    <br/>
    <div class="block5 movie_show">
      <h2>最近受关注的书-小说</h2>
      <div class="content clearfix" id="book_rec">
        <dl>
          <dt>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/26808630/">
              <img src="Picture/s28777465.jpg" class="m_sub_img" /></a>
          </dt>
          <dd>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/26808630/">审判日</a></dd>
        </dl>
        <dl>
          <dt>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/26698660/">
              <img src="Picture/s28668834.jpg" class="m_sub_img" /></a>
          </dt>
          <dd>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/26698660/">巨人的陨落</a></dd>
        </dl>
        <dl>
          <dt>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/1008145/">
              <img src="Picture/s1070222.jpg" class="m_sub_img" /></a>
          </dt>
          <dd>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/1008145/">围城</a></dd>
        </dl>
        <div class="clearfix rr" style="width:100%"></div>
        <dl>
          <dt>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/26787941/">
              <img src="Picture/s28738251.jpg" class="m_sub_img" /></a>
          </dt>
          <dd>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/26787941/">玛格丽特小镇</a></dd>
        </dl>
        <dl>
          <dt>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/26805297/">
              <img src="Picture/s28777181.jpg" class="m_sub_img" /></a>
          </dt>
          <dd>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/26805297/">我必须恋爱的理由</a></dd>
        </dl>
        <dl>
          <dt>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/2127606/">
              <img src="Picture/s2548966.jpg" class="m_sub_img" /></a>
          </dt>
          <dd>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/2127606/">持續勃起</a></dd>
        </dl>
        <div class="clearfix rr" style="width:100%"></div>
      </div>
    </div>
    <script type="text/javascript">(function(global) {
        var newNode = global.document.createElement('script'),
        existingNode = global.document.getElementsByTagName('script')[0],
        adSource = '//erebor.douban.com/',
        userId = '148026085',
        browserId = 'kwpBwoaw1uQ',
        criteria = '3:/tag/小说',
        preview = '',
        debug = false,
        adSlots = ['dale_book_tag_top_right'];

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
        newNode.setAttribute('src', 'https://img3.doubanio.com/f/shire/96526173dd3581591f014094ef3558116c8a17f3/js/ad.js');
        newNode.setAttribute('async', true);
        existingNode.parentNode.insertBefore(newNode, existingNode);
      })(this);</script>
  </div>
  <div class="extra"></div>
</div>
</div>
@endsection