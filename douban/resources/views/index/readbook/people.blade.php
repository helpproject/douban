@extends('layout.index')
@section('content')
    <div id="content">


        <div class="grid-16-8 clearfix">


            <div class="article">




                <div id="db-usr-profile">
                    <div class="pic">
                        <a href="/mine/{{$user->id}}">
                            <img width="48" height="48" src="{{$user->profile}}" alt="六一桶江湖">
                        </a>
                    </div>
                    <div class="info">
                        <h1>{{$user->username}}关注的人({{count($attention)}})</h1>

                        <ul>
                            <li><a href="/mine/{{$user->id}}">{{$user->username}}的主页</a></li>
                        </ul>

                    </div>
                </div>
                <div class="clear"></div>
                @foreach($ss as $k=>$v)
                <dl class="obu" ><dt><a href="/mine/{{$v['id']}}" class="nbg"><img src="{{$v['profile']}}" class="m_sub_img" alt="{{$v['username']}}"/></a></dt>
                    <dd><a href="/mine/{{$v['id']}}}">{{$v['username']}}</a></dd></dl>
                @endforeach
            </div>
            <div class="aside">







            </div>
            <div class="extra">

            </div>
        </div>
    </div>
@endsection