<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InsertCateRequest;
use App\Http\Requests\UpdataCateRequest;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CateController extends Controller
{
    // 快熟获取文章的分类信息
    public static function getAllCates()
    {
        //数据排列
        $cates = DB::table('cates as a')
            ->select(DB::raw('a.*,b.name as names,concat(a.path,",",a.id) as paths'))
            ->leftJoin('cates as b ','a.pid','=','b.id')
            ->orderBy('paths')
            ->get();
        //数据排版
        foreach ($cates as $key => $value) {
            $arr = explode(',',$value->path);           
            $num = count($arr)-1;
            $prefix = str_repeat('|-----',$num);
            $value->name = $prefix.$value->name;
        }
        return $cates;
    }

	//储存分类
	private $cates = [];

    //
    public function getAdd()
    {	
    	$cates = DB::table('cates')->get();
    	return view('admin.cate.add',['cates'=>$cates]);
    }

    public function postInsert(InsertCateRequest $request)
    {
    	$data = $request->except(['_token']);
    	$data = $this -> getData($data);

    	if(DB::table('cates')->insert($data)){
    		return redirect('/admin/cate/index')->with('info','添加成功');
    	}else{
    		return back()->with('error','添加失败');
    	}
    }

    public function getIndex(Request $request)
    {
    	// $cates = DB::table('cates')
	    // 	->select(DB::raw('*,concat(path,",",id) as paths'))
	    // 	->orderBy('paths')
	    // 	->paginate(5);

    	$cates = DB::table('cates as a')
    		->select(DB::raw('a.*,b.name as names,concat(a.path,",",a.id) as paths'))
    		->leftJoin('cates as b ','a.pid','=','b.id')
    		->orderBy('paths')
    		->where(function($query)use($request){
    			if (!empty($request)) {
    				$query->where('a.name','like','%'.$request->input('keywords').'%');
    			}
    		})
    		->paginate($request->input('num',10));

    	foreach ($cates as $key => $value) {
    		$arr = explode(',',$value->path);    		
    		$num = count($arr)-1;
    		$prefix = str_repeat('|-----',$num);
    		$value->name = $prefix.$value->name;
    	}
    
    	return view('admin.cate.index',[
    		'cates'=>$cates,
    		'title'=>'分类列表',
    		'request'=>$request
    		]);
    }

    public function getAjaxUpdate(Request $request)
    {
    	$data = $request->only(['status']);
    	$res = DB::table('cates')->where('id',$request->input('id'))->update($data);
    	if ($res) {
    		echo 1;die;
    	}else{
    		echo 0;die;
    	}
    }

    public function getEdit(Request $request)
    {
    	//数据排列
    	$cates = DB::table('cates as a')
    		->select(DB::raw('a.*,b.name as names,concat(a.path,",",a.id) as paths'))
    		->leftJoin('cates as b ','a.pid','=','b.id')
    		->orderBy('paths')
    		->get();
    	//数据排版
    	foreach ($cates as $key => $value) {
    		$arr = explode(',',$value->path);    		
    		$num = count($arr)-1;
    		$prefix = str_repeat('|-----',$num);
    		$value->name = $prefix.$value->name;
    	}
    	
    	$info = DB::table('cates')->where('id',$request->input('id'))->first();
    	if (empty($info)) {
    		abort(404);
    	}

    	return view('admin.cate.edit',[
    		'info'=>$info,
    		'cates'=>$cates,
    		]);
    }

    public function postUpdata(UpdataCateRequest $request)
    {
    	$data = $request->only(['name','status','pid']);
    	
    	$data = $this -> getData($data);
		
    	if(DB::table('cates')->where('id',$request->input('id'))->update($data)){
    		return redirect('/admin/cate/index')->with('info','修改成功');
    	}else{
    		return back()->with('error','更新失败');
    	}
    }

    public function getData($data)
    {
    	if ($data['pid'] == '0') {
    		$data['path'] = '0';
    	}else{
    		$p = DB::table('cates')->where('id',$data['pid'])->first();
    		$data['path'] = $p->path.','.$p->id;
    	}
    	return $data;
    }

    public function getDelete(Request $request)
    {
    	$id = $request->input('id');

    	$info = DB::table('cates')->where('id',$id)->first();
    	$prefix = $info->path.','.$info->id;

    	DB::table('cates')->where('path','like',$prefix.'%')->delete();

    	if (DB::table('cates')->where('id',$id)->delete()) {
    		return back()->with('info','删除成功');
    	}else{
    		return back()->with('error','删除失败');
    	}
    }

    public static function getCatesById($pid)
    {
    	$cates = DB::table('cates')->where('pid',$pid)->get();

    	$res = [];
    	foreach($cates as $k=>$v){
    		$v->subcate = self::getCatesById($v->id);
    		$res[] = $v;
    	}

    	return $res;

    }

    public function getCates()
    {
    	if (!$this->cates) {
    		$this->cates = DB::table('cates')->get();
    	}
    	return $this->cates;
    }

    public function getCatesByIdArr($pid)
    {	
    	$cates = [];
    	$arr = $this->getCates();
    	foreach ($arr as $k => $v) {
    		if ($v->pid == $pid) {
    			$cates[] = $v;
    		}
    	}

    	$res = [];
    	foreach ($cates as $k => $v) {
    		$v->subcate = $this->getCatesByIdArr($v->id);
    		$res[] = $v;
    	}

    	return $res;
    }

    public function getTest()
    {
    	// $cates = $this->getCatesById(0);
    	$cates = $this->getCatesByIdArr(0);
    	dd($cates);
    }
}
