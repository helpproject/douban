<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Author;
use DB;
use App\Http\Requests\InsertAuthorRuquest;
use App\Http\Controllers\Controller;
class AuthorController extends Controller
{
    /**
     * 作者添加页面
     */
    public function getAdd()
    {
        return view('admin.author.add',[
            'title'=>'作者添加',
            ]);
    }

    /**
     * 作者插入操作
     */
    public function postInsert(InsertAuthorRuquest $request)
    {
        $authors = new Author;
        $authors ->name = $request->input('name');
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
            ->orderBy('id','asc')
            ->paginate($request->input('num',10));
        return view('admin.author.index',[
            'title'=>'作者显示页面',
            'authors'=>$authors,
            'request'=>$request
            ]);
    }


    public function getEdit(Request $request)
    {   
        $info = Author::find($request->input('id'));
        // dd($info);
        return view('/admin/author/edit',[
            'info'=>$info,
            'title'=>'作者修改页面',
            ]);
    }

    public function postUpdate(InsertAuthorRuquest $request)
    {
        $data = $request->except(['id','_token']);
        $authors = new Author;
        $authors = Author::find($request->input('id'));
        
        foreach ($data as $key => $value) {
            $authors->$key = $value;
        }
        // dd($authors);
        if ($authors->save()) {
            return redirect('admin/author/index')->with('info','修改成功');           
        }else{
            return back()->with('info','修改失败');
        }
    }

    public function getDelete(Request $request)
    {
        $data = Author::findOrFail($request->input('id'));

        if ($data->delete()) {
            return back()->with('info','删除成功');
        }else{
            return back()->with('info','删除失败');
        }
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

}
