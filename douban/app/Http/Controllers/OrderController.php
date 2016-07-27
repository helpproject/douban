<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Area;
use App\Order;
use DB;
use App\Http\Requests\OrderControllerRequest;// 地址插入验证
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * 地址添加页面
     */
    public function getAdd()
    {
        return view('admin.order.add');
    }

    /**
     * 获取省份
     */
    public function getProvince()
    {	

    	//获取省份信息
    	$prov = Area::where('arrparentid',0)
    		->orderBy('areaid','asc')
    		->select('areaid','areaname')
    		->get();

    	return response()->json($prov);
    }

    /**
     * 获取市区信息
     */
    public function getCity(Request $request)
    {
    	// 获取省份id
    	$pid = $request->input('province_id');
    	// 查询数据
    	$res = Area::where('parentid',$pid)->orderBy('areaid','asc')->select('areaid','areaname')->get();
    	// 返回结果
    	return response()->json($res);
    }

    /**
     * 地址插入操作
     */
    public function postInsert(OrderControllerRequest $request)
    {
    	$orders = new Order;
    	$orders -> name = $request->input('name');
    	$orders -> phone = $request->input('phone');
    	$orders -> sheng = $request->input('sheng');
    	$orders -> shi = $request->input('shi');
    	$orders -> xian = $request->input('xian');
    	$orders -> youbian = $request->input('youbian');
    	$orders -> user_id = $request->input('user_id');
    	$orders -> detail = $request->input('detail');

    	if($orders->save()){
    		return redirect('admin/order/index')->with('info','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    /**
     * 收货地址列表操作
     */
    public function getIndex(Request $request)
    {   
        // 读取文章的信息
        $orders = Order::where(function($query)use($request){
                //判断当前请求的keywords参数
                $keywords = $request->input('keywords');
                //检测
                if(!empty($keywords)){
                    // laravel框架限定
                    $query->where('name','like','%'.$keywords.'%');
                }
            })
            ->paginate($request->input('num',10));
        return view('admin.order.index',[
            'title'=>'收货地址详情页',
            'orders'=>$orders,
            'request'=>$request
            ]);
    }

    /**
     * ajax更新操作
     */
    public function getAjaxUpdate(Request $request)
    {
        if(DB::table('orders')
            ->where('id',$request->input('id'))
            ->update($request->only(['status']))){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

    /**
     * 收货地址修改页面
     */
    public function getEdit(Request $request)
    {
    	// 获取id
    	$id = $request -> input('id');
    	// 查询信息
    	$info = Order::findOrFail($id);
    	// 显示模板
    	return view('admin.order.edit',[
    		'info'=>$info,
    		'title'=>'收货地址修改页面'
    		]);
    }

    /**
     * 收货地址更新
     */
    public function postUpdate(OrderControllerRequest $request)
    {
    	$orders = Order::find($request->id);
    	$orders -> name = $request->input('name');
    	$orders -> phone = $request->input('phone');
    	$orders -> sheng = $request->input('sheng');
    	$orders -> shi = $request->input('shi');
    	$orders -> xian = $request->input('xian');
    	$orders -> youbian = $request->input('youbian');
    	$orders -> user_id = $request->input('user_id');
    	$orders -> detail = $request->input('detail');
    	if($orders->save()){
    		return redirect('admin/order/index')->with('info','更新成功');
        }else{
            return back()->with('error','更新失败');
        }
    }

    /**
     * 删除操作
     */
    public function getDelete(Request $request)
    {
    	// 获取信息
    	$orders = Order::findOrFail($request->input('id'));

    	// 删除
        if($orders->delete()){
            return back()->with('info','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
