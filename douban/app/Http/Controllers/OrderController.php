<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Area;
use App\Order;

use App\Books;
use App\User;
use Config;
use App\OrderGoods;

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


    //添加订单
    public function create(Request $request)
    {
        // dd($request->all());
        //将信息插入到订单表中
        $order = new Order;
        $order -> num = time().rand(1000000,9999999);
        $order -> user_id = session('uid');
        $order -> addresse_id = $request->input('addresse_id');
        $order -> total = $request->input('total');
        $order -> paytype = $request->input('paytype');
        $order -> status = 0;
        
        $cart = $request->input('cart');
        // dd($cart);
        if ($order->save()) {
            foreach ($cart as $key => $value) {
                $orderGoods = new OrderGoods;
                $orderGoods -> order_id = $order -> id;
                $orderGoods -> book_id = $value['id'];
                $orderGoods -> total = $request->input('total');
                $orderGoods -> save();
            }
        }
        return redirect('http://pay.xiaohigh.com/api/deal?to=xiaohigh@163.com&money='.$order->total.'&order_id='.$order->id.'&info='.config::get('app.APP_NAME').'商品购买&return_url=http://www.db.com/Order/changeStatus');
    }


    public function changeStatus(Request $request)
    {
        //获取参数
        $status= $request->input('status');
        $order_id = $request->input('order_id');

        if ($status == '00') {
            //读取信息
            $order = Order::find($order_id);
            // 更新字段
            $order -> status = 1;

            if ($order -> save()) {
                return view('index.order.reminder');
            }
        }
    }

    public function ordercart()
    {   
        $uid = session('uid');
        // $orderId = Order::where('user_id',$uid)->select('id')->get();
        // // dd($orderId);
        // $orderGoodsId = [];
        // foreach ($orderId as $key => $value) {
        //     // dd($value['id']) ;
        //     $orderGoodsId[] = OrderGoods::where('order_id',$value['id'])->get();

        // }
        $orders = User::find($uid)->order;
        $books = [];
        foreach ($orders as $k => $v) {
           foreach($v->books as $a => $b){
            $books[$v->id][] = $b;
           }
        }
        dd($books);
        return view('index.cart.ordercart',[
            
            ]);       
    }


}
