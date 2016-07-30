<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Config;
use Image;
use App\Http\Requests;
use App\Books;
use App\Cate;
use App\Bk_ar;
use App\Author;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoodsInsertCateRequest;
class BookController extends Controller
{   
    /**
     * 图书添加页面
     */
    public function getAdd()
    {
        $cates = CateController::getAllCates();
        return view('admin.book.add',[
            'cates' => $cates
            ]);
    }

    /**
     * 图书插入操作
     */
    public function postInsert(GoodsInsertCateRequest $request)
    {
        // dd($request->all());
        $books = new Books;
        $books -> title = $request->input('title');
        $books -> press = $request->input('press');
        $books -> pressdate = $request->input('pressdate');
        $books -> pagination = $request->input('pagination');
        $books -> price = $request->input('price');
        $books -> cate_id = $request->input('cate_id');
        $books -> intro = $request->input('intro');
        $books -> catalog = $request->input('catalog');
        $books -> ISBN = $request->input('ISBN');
        //检测图片文件
        $images = '';
        if($request->hasFile('img')){
                $dir = Config::get('app.upload_dir');
                $img = $request->file('img');
                $name = time().rand(100000,999999).'.'.$img->getClientOriginalExtension();
                $img->move($dir, $name);
                $profiles = ($dir.'/'.$name);
                $img = Image::make($profiles)->resize(50,50)->save($profiles);
                $profile = trim($img->dirname.'/'.$img->basename,'.');
        }

        $books -> img = $profile;
       
        if($books->save()){
            return redirect('admin/book/index')->with('info','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    /**
     * 图书列表操作
     */
    public function getIndex(Request $request)
    {   
        // 读取文章的信息
        $books = Books::where(function($query)use($request){
                //判断当前请求的keywords参数
                $keywords = $request->input('keywords');
                //检测
                if(!empty($keywords)){
                    // laravel框架限定
                    $query->where('title','like','%'.$keywords.'%');
                }
            })
            ->paginate($request->input('num',10));
        return view('admin.book.index',[
            'title'=>'图书详情页',
            'books'=>$books,
            'request'=>$request
            ]);
    }

    /**
     * ajax更新操作
     */
    public function getAjaxUpdate(Request $request)
    {
        if(DB::table('books')
            ->where('id',$request->input('id'))
            ->update($request->only(['status']))){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

    /**
     * 商品的修改页面
     */
    public function getEdit(Request $request)
    {
        //获取id
        $id = $request -> input('id');
        //信息读取
        $info = Books::findOrFail($id);
        //显示模板
        return view('admin.book.edit',[
            'info'=>$info,
            'title'=>'图书修改页面'
            ]);
    }

    /**
     * 商品的更新操作
     */
    public function postUpdate(GoodsInsertCateRequest $request)
    {
        $books = Books::find($request->input('id'));
        $books -> title = $request->input('title');
        $books -> press = $request->input('press');
        $books -> pressdate = $request->input('pressdate');
        $books -> pagination = $request->input('pagination');
        $books -> price = $request->input('price');
        $books -> cate_id = $request->input('cate_id');
        $books -> intro = $request->input('intro');
        $books -> catalog = $request->input('catalog');
        $books -> ISBN = $request->input('ISBN');

        if($request->hasFile('img')){
            $images = $this->getUploadFileName($request);
            $books->img = $images ? $images : '';
            //删除原来的图片
            $this->deleteProfile($request->input('id'));
            // dd($books);
        }
        // dd($books);
        if($books->save()){
            return redirect('admin/book/index')->with('info','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }

     /**
     * 文件上传操作
     */
    private function getUploadFileName($request)
    {
        if($request->hasFile('img')){
            $dir = Config::get('app.upload_dir');
            $img = $request->file('img');
            $name = time().rand(100000,999999).'.'.$img->getClientOriginalExtension();
            if($img->move($dir, $name)){
                //修改图片的路径 
                $images = trim($dir.$name,'.');
                return $images;
            }
        }
    }

    /**
     * 删除图书原来的封面
     */
    private function deleteProfile($id)
    {
        //读取数据
        $info = Books::where('id',$id)->firstOrFail();

        // '/uploads/20160711/1468208850116506.jpg';
        //删除图片
        //检测图片文件是否存在
        $path = $info->img;
        
        // dd($path);
        if(file_exists('.'.$path)){
            unlink('.'.$path);
        }
    }

    /**
     * 删除图书
     */
    public function getDelete(Request $request)
    {
        $books = Books::findOrFail($request->input('id'));
        // 获取图片路径
        if($books){
            $this->deleteProfile($request->input('id'));
        }

        // 删除
        if($books->delete()){
            return back()->with('info','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

    /*****************  前台操作  *********************/

    public function show($id)
    {
        //读取图书的详细信息
        $books = Books::find($id);
        $author_id = $books->bk_ar->author_id;
        $author = Author::where('id',$author_id)->firstOrFail();
        //解析模板
        return view('index.book.detail',[
            'books'=>$books,
            'author'=>$author
            ]);
    }

    public function tag($id)
    {
        //读取分类下图书的信息
        $books = Books::where('cate_id',$id)->simplePaginate(10);
        //读取分类
        $cate = Cate::where('id',$id)->firstOrFail();
        //读取作者信息
        // $author_id = $books->bk_ar->author_id;
        // dd($author_id);
        // dd($cate);
        //解析模板
        return view('index.book.tag',[
            'title'=>'豆瓣图书列表',
            'books'=>$books,
            'cate'=>$cate,
            ]);
    }
 
}
