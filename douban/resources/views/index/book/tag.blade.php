@extends('layout.index')

@section('title',$title)

@section('content')
<div id="content">
<h1>豆瓣图书标签:{{$cate->name}} </h1>
<div class="grid-16-8 clearfix">
  <div class="article">
    <div id="subject_list">
      <div class="clearfix">
        <span class="rr greyinput">综合排序 &nbsp;/&nbsp;
          <a href="/tags/?id={{$cate->id}}&type=R">按出版日期排序</a>&nbsp;/&nbsp;
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
              <div class="info1" style="padding-bottom:10px;">
              {!! mb_substr($v->intro,0,80) !!}...
              </div>
            <!-- <div class="ft" style="margin-top:10px;">
              <div class="cart-actions" >
                  <span class="add2cartWidget ">
                    <a href="javascript:;" class="" name="1770782" >
                      <span >加入购书单</span></a>
                  </span>
              </div>
            </div> -->
          </div>
        </li>
		@endforeach
      </ul>
      <div class="paginator">
          {!! $books->appends($request->all())->render() !!}
      </div>
      
    </div>
  </div>
  <div class="aside">
    <br/>
    <div id="dale_book_tag_top_right">
      <img src="/index/Images/e5cb14345c096fa.jpg" alt="">
    </div>
    <h2>
      <span class="">相关的标签</span>&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;</h2>
    <div class="tags-list">
      @foreach($path as $k=>$v)
      <a href="/tag/?cate_id={{$v->id}}">{{$v->name}}</a>
      @endforeach
      </div>
    <form name="cate" action="/tag" method="GET">
      <input name="cate" class="j a_search_text" type="text" size="24" maxlength="36" title="去其他标签" value="" placeholder="去其他标签" />
      <input class="butt" type="submit" value="进入" />
    </form>
    <br/>
    <br/>
    <p class="pl2 mb30">&gt;
      <a href="/cate">浏览全部图书标签</a></p>
    <br/>
    <br/>
    <div class="block5 movie_show">
      <h2>最近受关注的书-小说</h2>
      <div class="content clearfix" id="book_rec">
        <dl>
          <dt>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/26808630/">
              <img src="/index/Picture/s28777465.jpg" class="m_sub_img" /></a>
          </dt>
          <dd>
            <a onclick="moreurl(this, {'r1001':'book-tag-top'})" href="https://book.douban.com/subject/26808630/">审判日</a></dd>
        </dl>
       
        <div class="clearfix rr" style="width:100%"></div>
      </div>
    </div>
    
  </div>
  <div class="extra"></div>
</div>
</div>
@endsection