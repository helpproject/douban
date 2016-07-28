<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attention;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AttentionController extends Controller
{
    public function getAdd(){

        return view('admin.attention.add',[
            'title'=>'关注的添加',


        ]);
    }

    public function postInsert(Request $request){
        $attention = new Attention;
        $attention->username = $request->input('username');
        $attention->attention_name = $request->input('attention_name');
        $attention->status = 1;

        if( $attention->save()){
            return redirect('/admin/attention/index')->with('info','添加成功');
        }else{
            return back()->with('error','添加失败');
        }

    }

    public function getIndex(Request $request){
        $attention = Attention::where(function($query)use($request){
            $keywords = $request->input('keywords');
            if(!empty($keywords)){
                $query->where('username','like','%'.$keywords.'%');
            }
        })
            ->orderBy('id','desc')
            ->paginate($request->input('num',10));

//        $test = Goods::find(30);
//        $res = $test->cate->first();
//        dd($res);
        return view('admin/attention/index',[
            'title' =>'商品的列表页',
            'request'=>$request,
            'attention'=>$attention
        ]);
    }

    public function getAjaxUpdate(Request $request){
        $data = $request->only(['status']);
        $res=Attention::where('id',$request->input('id'))->update($data);
        if($res){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

    public function getDelete(Request $request){
        $attention = Attention::findOrFail($request->input('id'));
        //获取图片路径

        if($attention->delete()){
            return back()->with('info','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
    /******* 前台 **********/
    public function show(Request $request){
        $id = session('uid');
        $user = User::where('id',$id)->firstOrFail();
        $username =  $user->username;
        $users = User::where('id',$request->input('id'))->firstOrFail();
        $attention_name = $users->username;

        $attention = new Attention;

        $attention->username = $username;
        $attention->attention_name = $attention_name;
        $attention->status = 1;


        if( $attention->save()){
            return 1;
        }else{
            return 0;
        }

    }

    public function delete(Request $request){
        $id = session('uid');
        $user = User::where('id',$id)->firstOrFail();
        $username =  $user->username;
        $users = User::where('id',$request->input('id'))->firstOrFail();
        $attention_name = $users->username;
        $attention = Attention::where('username',$username)->where('attention_name',$attention_name)->first();
        if($attention->delete()){
            return 1;
        }
    }
}
