<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorInsertRequest;//作者插入表单验证
use App\Author;
use DB;

class AuthorController extends Controller
{
    /**
     * 作者添加页面
     */
    public function getAdd()
    {
        return view('admin.author.add');
    }

    /**
     * 作者插入操作
     */
    public function postInsert(AuthorInsertRequest $request)
    {
        $authors = new Author;
        $authors -> name = $request->input('name');
        $authors -> book_id = $request->input('book_id');
        $authors ->abstract = $request->input('abstract');

        if($authors->save()){
            return redirect('admin/author/index')->with('info','添加成功');
        }else{
            return back()->with('error','添加错误');
        }
    }

    /**
     * 作者显示页面
     */
    public function getIndex(Request $request)
    {
        // 读取文章的信息
        $authors = Author::where(function($query)use($request){
                //判断当前请求的keywords参数
                $keywords = $request->input('keywords');
                //检测
                if(!empty($keywords)){
                    // laravel框架限定
                    $query->where('name','like','%'.$keywords.'%');
                }
            })
            ->paginate($request->input('num',10));
        return view('admin.author.index',[
            'title'=>'作者显示页面',
            'authors'=>$authors,
            'request'=>$request
            ]);
    }

     /**
     * ajax更新操作
     */
    public function getAjaxUpdate(Request $request)
    {
        if(DB::table('authors')
            ->where('id',$request->input('id'))
            ->update($request->only(['status']))){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

    /**
     * 作者更改页面
     */
    public function getEdit(Request $request)
    {
        //获取id
        $id = $request -> input('id');
        //信息读取
        $info = Author::findOrFail($id);
        //显示模板
        return view('admin.author.edit',[
            'info'=>$info,
            'title'=>'图书修改页面'
            ]);
    }

    /**
     * 作者更新页面
     */
    public function postUpdate(AuthorInsertRequest $request)
    {
        $authors = Author::find($request->input('id'));
        $authors -> name = $request->input('name');
        $authors -> book_id = $request->input('book_id');
        $authors ->abstract = $request->input('abstract');

        if($authors->save()){
            return redirect('admin/author/index')->with('info','更新成功');
        }else{
            return back()->with('error','更新失败');
        }
    }

    /**
     * 删除图书
     */
    public function getDelete(Request $request)
    {
        $authors = Author::findOrFail($request->input('id'));

        // 删除
        if($authors->delete()){
            return back()->with('info','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
