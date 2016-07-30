<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use DB;
use App\Book;
use App\Article;
use App\cate;
use App\DateTime;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function index()
    {
    	return view('admin.index',['title'=>'豆瓣后台']);
    }

    public function Alogin()
    {
    	return view('admin.login');
    }

    public function AdoLogin(Request $request)
    {	

    	$username = $request->input('username');
    	$password = $request->input('password');

    	$info = User::where('username',$username)->first();
    	if (empty($info)) {
    		return back()->with('error','用户名不存在');
    	}

    	if (Hash::check($password,$info['password'])) {

    		session(['uid'=>$info['id']]);
    		return redirect('/admin');
    	}

    	return back()->with('error','密码错误');
    }

    public function cc()
    {	
    	//无插件抓取
	        $url = 'https://book.douban.com/subject/26817186/?icn=index-editionrecommend';

	        $str = file_get_contents($url);

	        preg_match_all('/<title>(.*)\(/isU', $str , $title);
	        preg_match_all('/nbg.*src="(.*)"/isU', $str, $img);
	        preg_match_all('/出版社:<\/span>(.*)<br\/>/isU', $str, $press);
	        preg_match_all('/页数:<\/span>(.*)<br\/>/isU', $str, $pagination);
	        preg_match_all('/定价:<\/span>(.*)<br\/>/isU', $str, $pice);
	        preg_match_all('/ISBN:<\/span>(.*)<br\/>/isU', $str, $ISBN);
	        preg_match_all('/内容简介.*class="intro">(.*)<\/div>/isU',$str,$intro);
	        preg_match_all('/id="dir_26817186_full" style="display:none">(.*)\(<a/isU', $str, $list);
	        preg_match_all('/试读<\/span>.*<p>(.*)<\/p>/isU',$str,$content);
	        
	        if (!empty($img)) {

	        	$path = './download/images/'.basename($img[1][0]);
		 		file_put_contents($path, $img[1]);
	        }
	        

	        $books = new Book;
	        $books->title = $title[1][0];
	        $books->img = trim($path,'.');
	        $books->press = $press[1][0];
	        $books->pagination = $pagination[1][0];
	        $books->pice = $pice[1][0];
	        $books->ISBN = $ISBN[1][0];
	        $books->intro = $intro[1][0];
	        $books->catalog = $catalog[1][0];
	        $books->content = $content[1][0];
	        $books->cate_id = 1;
	        // dd($books);
	        $books->save();
	        // if ($res1) {

	        //     $info = new cate;
	        //     $data = [];
	        //         foreach ($res1[1] as $key => $value) {
	        //             $temp = [];
	        //             $temp['name'] = $value;
	        //             $temp['pid'] = 6;
	        //             $temp['path'] = '0,6';
	        //             $data[] = $temp;
	                         
	        //         }
	            
	        //     if(Cate::insert($data)){
	        //         echo 'ok';
	        //     }else{
	        //         echo 'file';
	        //     }
	        // }else{
	        //     echo '数据异常';
	        // }
       	

  		// $curl = new \Curl\Curl;

		// $curl -> get('http://blog.jobbole.com/77224/');

		// if ($curl -> response) {
		// 	preg_match('/<h1>(.*)<\/h1>/', $curl->response,$title);
		// 	$title || dd('标题为空');
		// 	preg_match('/copyright-area.*<\/div>(.*)<script/isU', $curl->response,$content);

		// 	preg_match('/<img.*src="(.*)"/isU',$content[1],$img);
			
		// 	if (!empty($img)) {
		// 		$curl->get($img[1]);

		// 		$path = './download/images/'.basename($img[1]);
		// 		file_put_contents($path, $curl->response);
		// 	}

		// 	$article = new Article;
		// 	$article-> title = $title[1];
		// 	$article -> content = $content[1];
		// 	$article -> img = trim($path,'.');
		// 	$article -> cate_id = rand(1,10);
		// 	$article -> status = 1;

		// 	$article->save();

		// }else{
		// 	echo 'file';
		// }
    }
}
