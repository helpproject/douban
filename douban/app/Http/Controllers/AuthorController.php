<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Author;
use App\Http\Requests\InsertAuthorRuquest;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function getAdd()
    {
        return view('admin.author.add',[
            'title'=> '作者管理',
            ]);
    }

    public function postInsert(InsertAuthorRuquest $request)
    {
        $authors = new Author;

        $authors->name = $request->input('name');
        $authors->abstract = $request->input('abstract');
        $authors->status = $request->input('status');

        if($authors->save()){
            return redirect('/admin/author/index')->with('info','添加成功');
        }else{
            return back()->with('info','添加失败');
        }
    }

    public function getIndex(Request $request)
    {   
        $authors = Author::where(function($query)use($request){
            $keywords = $request->input('keywords');
            if(!empty($keywords)){
                $query->where('name','like','%'.$keywords.'%');
            }
        })
            ->orderBy('id','desc')
            ->paginate($request->input('num',10));

        return view('/admin/author/index',[
            'authors'=>$authors,
            'title'=>'作者列表页',
            'request'=>$request
            ]);
    }

    public function getEdit(Request $request)
    {   
        $authors = Author::find($request->input('id'));
        // dd($info);
        return view('/admin/author/edit',[
            'authors'=>$authors,
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
            return back()->with('error','删除失败');
        }
    }

    /**
     * ajax更新操作
     */
    public function getAjaxUpdate(Request $request)
    {
        //获取参数
        $data = $request->only(['status']);
        //更新
        $res = Author::where('id',$request->input('id'))->update($data);
        if($res){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }
}
