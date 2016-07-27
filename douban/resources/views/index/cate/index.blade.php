@extends('layout.index')

@section('title',$title)

@section('content')
<style>
    .tagCol td {
        width: 20%;
        font-size: 14px;
    }
    body, td, th {
        font: 12px Helvetica,Arial,sans-serif;
        /*line-height: 1.62;*/
    }
    .tagCol td b {
        font-weight: normal;
        color: #aaa;
    }
    h2 {
        font: 15px Arial, Helvetica, sans-serif;
        color: #072;
        margin: 0 0 12px 0;
        line-height: 150%;
        border-bottom: 0px solid #ddd;
    }

    .tag-view-type {
        border-bottom: 1px solid #ccc;
        padding-bottom: 5px;
        margin-bottom: 10px;
    }
    body,td{
      line-height: 1.90;
    }
</style>
<?php 

    $cates = \App\Http\Controllers\CateController::getCatesByPid(0);

    ?>
<div id="content">
        <h1>豆瓣图书标签</h1>
        <div class="grid-16-8 clearfix">
          <div class="article">
            <div class="tag-view-type clearfix">
              <span class="rr greyinput">分类浏览 /
                <a href="https://book.douban.com/tag/?view=cloud">所有热门标签</a></span>
            </div>
            <div class="">
              @foreach($cates as $k=>$v)
              <div class="">
                <a name="{{$v->name}}" class="tag-title-wrapper">
                  <h2 style="padding-top:10px">{{$v->name}} · · · · · ·</h2></a>


                <table class="tagCol">
                 
                  <tbody>                    
                    
                    <tr>
                    @foreach($v->subcate as $key=>$value)
                           
                      
                     @if($key%4 == 0) 
                     </tr><tr>
                     @endif
                     <td>
                        <a href="/tag/{{$value->id}}">{{$value->name}}</a>
                        <b>(41162)</b><br>
                      </td>
                    @endforeach                     
                    </tr>
                                    
                  </tbody>
                  
                </table>
              </div>
              @endforeach
            </div>
          </div>
          <div class="aside">
            <h2>
              <span class="">标签直达</span>&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;&nbsp;&middot;</h2>
            <form name="tsp_form" action="https://book.douban.com/tag/" method="GET">
              <input name="search_text" class="j a_search_text" type="text" size="24" maxlength="36" title="去其他标签" value="" />
              <input class="butt" type="submit" value="进入" /></form>
            <br/>
            <br/>
            <!-- douban ad begin -->
            <div id="dale_book_tags_top_right"></div>
            <!-- douban ad end --></div>
          <div class="extra">
            <!-- douban ad begin -->
            <div id="dale_book_tag_bottom_banner"></div>
            <!-- douban ad end --></div>
        </div>
      </div>
@endsection