<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Requests\TagRequest;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function getAdd(){
       return view('admin.tag.add');
}

    public function postInsert(TagRequest $request){
        $tag = new Tag;

        $tag->tag = $request->input('tag');
        $tag->user_id = $request->input('user_id');
        $tag->book_id = $request->input('book_id');
        $tag->status = 0;
        if( $tag->save()){
            return redirect('/admin/tag/index')->with('info','添加成功');
        }else{
            return back()->with('error','添加失败');
        }

    }
    public function getAjaxUpdate(Request $request){
        $data = $request->only(['status']);
        $res=Tag::where('id',$request->input('id'))->update($data);
        if($res){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }
    public function getIndex(Request $request){
      
        
        $tag = Tag::where(function($query)use($request){
            $keywords = $request->input('keywords');
            if(!empty($keywords)){
                $query->where('user_id','like','%'.$keywords.'%');
            }})
            ->orderBy('id','desc')
            ->paginate($request->input('num',10));
                
        
        
        return view('admin.tag.index',[
            'title'=>'标签的列表页',
            'tag'=>$tag,
            'request'=>$request
        ]);
    }

    public function getDelete(Request $request){

            $attention = Tag::findOrFail($request->input('id'));
            //获取图片路径

            if($attention->delete()){
                return back()->with('info','删除成功');
            }else{
                return back()->with('error','删除失败');
                }
    }
   
}
