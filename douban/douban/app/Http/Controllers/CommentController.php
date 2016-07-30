<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Comment;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function getAdd()
    {
       return view('admin.comment.add');
    }

    public function postInsert(Request $request)
    {
        $comment = new Comment;
        $comment->user_id = $request->input('user_id');
        $comment->book_id = $request->input('book_id');
        $comment->pid = $request->input('pid');
        $comment->content = $request->input('content');

        if($comment->save())
        {
            return redirect('/admin/comment/')->with('info','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
        // $data = $request->only(['user_id','article_id','pid','content']);
        // if(DB::table('comment')->insert($data)){
        //     return redirect('/admin/comment/index')->with('info','添加成功');
        // }else{
        //     return back()->with('error','添加失败');
        // }
    }
    public function getIndex(Request $request)
    {
        $comment = Comment::where(function($query)use($request){
                //判断当前请求的keywords参数
                $keywords = $request->input('keywords');
                //检测
                if(!empty($keywords)){
                    $query->where('user_id','like','%'.$keywords.'%');
                }
            })
            ->orderBy('user_id','desc')
            ->paginate($request->input('num',10));
        

        return view('admin.comment.index', [
            'comment'=>$comment,
            'title'=>'评论的列表页',
            'request'=>$request
            ]);
    }

    public function getEdit(Request $request)
    {
    //获取id
    $id = $request->input('id');
    //获取信息
    $info = Comment::findOrFail($id);
    // dd($info);
    //解析模板
    return view('admin.comment.edit',[
        'title'=>'评论的修改',
        'info'=>$info,
        ]);
   }

   public function postUpdate(Request $request)
   {
        // $data = $request->except(['_token','id']);
        $comment = new Comment;
        $comment->user_id = $request->input('user_id');
        $comment->book_id = $request->input('book_id');
        $comment->pid = $request->input('pid');
        $comment->content = $request->input('content');
        if($comment->save())
        {
            return redirect('/admin/comment/')->with('info','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
   }


   public function getDelete(Request $request){
        if(DB::table('comment')->where('id',$request->input('id'))->delete()){
            return back()->with('info', '删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

   public function getAjaxUpdate(Request $request){
        $data = $request->only(['status']);
        $res=User::where('id',$request->input('id'))->update($data);
        if($res){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }
    
}
