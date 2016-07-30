<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Addresse;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
	public  $data = [];
    //发送ajax提叫购物车
    public function getCart(Request $request)
    {	
        
    	if(empty(session('uid'))){
    		echo 0;die;
    	}else{

    		 $res = $this->checkExists($request->input('id'));
    		 if (!$res) {
            	// session(['cart'=>$request->only(['id'])]);
                $request->session()->push('cart',$request->input('id'));

                
      		 }
             echo 1; 		
    		// var_dump(session("cart"));
    	}
    }

    private function checkExists($id)
    {
        $goods = session('cart');
        if (!empty($goods)) {
            foreach ($goods as $key => $value) {
            if ($value == $id) {
                return true;
                }
            }
             return false;
        }
        
        return false;
    }

    public function cart()
    {	
    	$cart = session('cart');
        $uid = session('uid');
    	$data = [];
    	foreach ($cart as $key => $value) {
            $data[] = $value;
            }

    	$books = Books::find($data);

    	$addresses = Addresse::where('user_id',$uid)->get();
        // dd($addresses);
    	return view('index.cart.index',[
    		'books'=>$books,
            'addresses'=>$addresses
    		]);
    }

    //ajax购物车删除
    public function getDelete(Request $request)
    {   
        // dd(session()->all());
        $cart = session('cart');
        $id = $request->input('id');
        foreach ($cart as $key => $value) {
            if ($value == $id) {
                // $res = $request->session()->put($key, null);
                $res = session([['cart']=>[$key=>null]]);
            }
        }
        
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }


    // 添加购物车
    public function insetAddress(Request $request)
    {
        $address = new Addresse;
        $address -> name = $request->input('name');
        $address -> phone = $request->input('phone');
        $address -> sheng = $request->input('sheng');
        $address -> shi = $request->input('shi');
        $address -> xian = $request->input('xian');
        $address -> detail = $request->input('detail');
        $address -> youbian = $request->input('youbian');
        $address -> isdefault = $request->input('isdefault');
        $address -> user_id = session('uid');

        if ($address->save()) {
            echo 1;die;
        }else{
            echo 0;die;
        }
    }
}
