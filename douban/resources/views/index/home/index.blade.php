@extends('layout.index')

@section('content')
<div id="content">
<div class="grid-16-8 clearfix">
  <div class="article">
    <div class="section books-express ">
      <div class="hd">
        <h2 class=''>
          <span class="">新书速递</span>
        </h2>
      </div>
      <div class="bd">
        <div class="carousel">
          <div class="slide-list">

            <ul class="list-col list-col5 list-express slide-item">
              @foreach($books as $k=>$v)
              <li class="">
                <div class="cover">
                  <a href="/subject/{{$v->id}}" title="{{$v->title}}">
                    <img src="{{$v->img}}" class="" width="106px" height="158px" alt="{{$v->title}}"></a>
                </div>
                  <div class="title">
                    <a class="" href="/subject/{{$v->id}}" title="{{$v->title}}">{{$v->title}}</a></div>
                  <div class="author">{{$v->author->name}}</div>
                  <div class="more-meta">
                    <h4 class="title">{{$v->title}}</h4>
                    <p>
                      <span class="author">{{$v->author->name}}</span>/
                      <span class="year">{{$v->pressdate}}</span>/
                      <span class="publisher">{{$v->press}}</span></p>
                    <p class="abstract">{{$v->intro}}</p></div>
              </li>
              @endforeach
            </ul>

          </div>
        </div>
      </div>
    </div>
    <!-- douban ad begin -->
    <div id="dale_book_home_left_top" class="ad-placeholder" style="margin:-30px 0 30px;"><img src="/index/Images/02293c9c73f44ad.jpg" alt=""></div>
    <!-- douban app end -->
    <div class="section popular-books">
      <div class="hd">
        <h2>
          <span>最热图书榜</span>
        </h2>
      </div>
      <div class="bd">
        <ul class="list-col list-col2 list-summary s" data-dstat-areaid="61" data-dstat-mode="click,expose">
		@foreach($book as $k=>$v)
          <li class=" ckd-item">
            <div class="cover">
              <a  href="/subject/{{$v->id}}">
                <img src="{{$v->img}}" alt="{{$v->title}}" class=""></a>
            </div>
            <div class="infoz">
              <h4 class="title">
                <a  href="" class="">{{$v->title}}</a></h4>
            <p class="entry-star-small">
                <span class="allstar40 star-img"></span>
                <span class="average-rating">8.1</span></p>
              	<p class="author">作者：{{$v->author->name}}</p>
              	<p class="book-list-classification" style="color:#CC3366">{{$v->cate->name}}</p>
            </div>
          </li>
		@endforeach
        </ul>
      </div>
    </div>
    <style type="text/css">
		.infoz {
		  font-size: 12px;
		  margin-right: 20px;
		}
    </style>
    <!-- douban ad begin -->
    <div id="dale_book_home_left_middle" class="ad-placeholder" style="margin:-50px 0 30px;"><img src="/index/Images/94735b9b19f8ea1.jpg" alt=""></div>
    <!-- douban app end -->
    
  </div>
  <div class="aside">
    <!-- douban ad begin -->
    <div id="dale_book_home_top_right" class="s ad-placeholder" data-dstat-areaid="51" data-dstat-mode="click,expose" style="margin-top: 30px;"><img src="/index/Images/c7b494a2f9e6577.jpg" alt=""></div><br>
    <!-- douban ad end -->
    <h2 class=''>
      <span class="">热门标签</span>
      <span class="link-more">
        <a class="" href="/cate">所有热门标签»</a></span>
    </h2>
    <ul class="hot-tags-col5 s" data-dstat-areaid="54" data-dstat-mode="click,expose">
      <li>
        <ul class="clearfix">
          <li class="tag_title">文学</li>
		@foreach($cate1 as $k=>$v)
          <li><a href="/tag/?cate_id={{$v->id}}" class="tag">{{$v->name}}</a></li>
        @endforeach   
          <li class="last">
            <a href="/cate" class="tag more_tag">更多》</a></li>
        </ul>
      </li>
      <li>
        <ul class="clearfix">
          <li class="tag_title">流行</li>
          @foreach($cate2 as $k=>$v)
          <li><a href="/tag/?cate_id={{$v->id}}" class="tag">{{$v->name}}</a></li>
          @endforeach
          <li class="last">
            <a href="/cate" class="tag more_tag">更多》</a></li>
        </ul>
      </li>
      <li>
        <ul class="clearfix">
          <li class="tag_title">文化</li>
          @foreach($cate3 as $k=>$v)
          <li><a href="/tag/?cate_id={{$v->id}}" class="tag">{{$v->name}}</a></li>
          @endforeach
          <li class="last">
            <a href="/cate" class="tag more_tag">更多》</a></li>
        </ul>
      </li>
      <li>
        <ul class="clearfix">
          <li class="tag_title">生活</li>
          @foreach($cate4 as $k=>$v)
          <li><a href="/tag/?cate_id={{$v->id}}" class="tag">{{$v->name}}</a></li>
          @endforeach
          <li class="last">
            <a href="/cate" class="tag more_tag">更多》</a></li>
        </ul>
      </li>
      <li>
        <ul class="clearfix">
          <li class="tag_title">经管</li>
          @foreach($cate5 as $k=>$v)
          <li><a href="/tag/?cate_id={{$v->id}}" class="tag">{{$v->name}}</a></li>
          @endforeach
          <li class="last">
            <a href="/cate" class="tag more_tag">更多》</a></li>
        </ul>
      </li>
      <li>
        <ul class="clearfix">
          <li class="tag_title">科技</li>
		  @foreach($cate6 as $k=>$v)
          <li><a href="/tag/?cate_id={{$v->id}}" class="tag">{{$v->name}}</a></li>
          @endforeach
          <li class="last">
            <a href="/cate" class="tag more_tag">更多》</a></li>
        </ul>
      </li>
    </ul>
    <!-- douban ad begin -->
    <div id="dale_book_homepage_right_bottom" class="ad-placeholder"><img src="/index/Images/94063be15fe367a.jpg" alt=""></div><br>
    <!-- douban ad end -->
    
    <div class="block5">
      <h2 class=''>
        <span class="">豆瓣猜你可能感兴趣的图书</span>
        <span class="link-more">
          <a class="" href="/recommended?icn=index-book250-all">更多»</a></span>
      </h2>
      <div class="content clearfix s" id="book_rec" data-dstat-areaid="59" data-dstat-mode="click,expose">
      @foreach($nbook as $k=>$v)
        <dl>
          <dt>
              <a href="/subject/{{$v->id}}"><img src="{{$v->img}}" class="m_sub_img" /></a>
          </dt>
          <dd>
            <a  href="">{{mb_substr($v->title,0,4)}}...</a>
          </dd>
        </dl>
       @endforeach 
        <div class="clearfix rr" style="width:100%"></div>
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
@endsection