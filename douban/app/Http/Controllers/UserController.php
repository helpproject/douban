<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Hash;
use Mail;
use Config;
use Image;
use App\Readbook;
use App\Books;
use App\Attention;
use App\User;
use App\Http\Requests;
use App\Http\Requests\ZcRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function getAdd()
    {

    	return view('admin.user.add');
    }


    public function postInsert(Request $request){
        $this->validate($request,[
           'username' =>'required|unique:users|regex:/^\w{5,18}$/',
            'password'=>'required|regex:/^\S{6,30}$/',
            'repassword'=>'required|same:password',
            'email'=>'required|regex:/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/',
            'phone'=>'required|regex:/^1\d{10}$/',
            'city'=>'required',
            'nickname'=>'required|regex:/^\w{3,8}$/'
        ],[
            'username.required' => '用户名不能为空',
            'username.unique'=>'用户名已经存在',
            'username.regex' => '用户名格式不正确',
            'password.required'=>'密码不能为空',
            'password.regex' => '密码格式不正确',
            'repassword.required'=>'确认密码不能为空',
            'repassword.same'=>'两次的密码不一致',
            'email.required' => '邮箱不能为空',
            'email.regex'=>'邮箱的格式不正确',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号格式不正确',
            'city.required'=>'城市不能为空',
            'nickname.required' => '昵称不能为空',
            'nickname.regex'=>'昵称格式不正确3-8位'
        ]);

        $data = $request->only(['username','password','email','phone','city','nickname']);

        $data['password'] = Hash::make($request->input('password'));

        //生成随即的字符串
        $data['token'] = str_random(50);
        //上传图片
        $profile = $this->getUploadFileName($request);
        $data['profile'] = $profile ? $profile : '';
        //添加状态
        $data['status'] = 0;
        //插入数据库
        if(DB::table('users')->insert($data)){
            return redirect('/admin/user/index')->with('info','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    //文件上传
    private function getUploadFileName($request){
        if($request->hasFile('profile')){
            $name = time().rand(1000000,9999999);
            $suffix = $request->file('profile')->getClientOriginalExtension();
            $fileName = $name.'.'.$suffix;
            $dir = './uploads/'.date('Ymd');
            if($request->file('profile')->move($dir,$fileName)){
                $profiles = ($dir.'/'.$fileName);
               $img = Image::make($profiles)->resize(50,50)->save($profiles);
                $profile = trim($img->dirname.'/'.$img->basename,'.');

                return $profile;
            }
        }
    }


    public function getIndex(Request $request)
    {
       $users = DB::table('users')
           ->where(function($query)use($request){
               $keywords = $request->input('keywords');

               if(!empty($keywords)){
                   $query->where('username','like','%'.$keywords.'%');
               }
           })
           ->orderBy('id','desc')
       ->paginate($request->input('num',10));

        return view('admin.user.index', [
            'users'=>$users,
            'title'=>'用户的列表页',
            'request'=>$request
        ]);
    }


    public function getEdit(Request $request){
        $info = DB::table('users')->where('id',$request->input('id'))->first();

        if(empty($info)){
            abort(404);
        }

        return view('admin.user.edit',['info'=>$info]);
    }

    public function postUpdate(Request $request){
        $this->validate($request, [
            'username' => 'required|regex: /^\w{8,20}$/',
            'email'=>'required|regex:/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/',
            'phone'=>'required|regex:/^1\d{10}$/',
            'city'=>'required',
            'nickname'=>'required|regex:/^\w{3,8}$/'

        ],[
            'username.required' => '用户名不能为空',
            'username.regex' => '用户名格式不正确',
            'email.required' => '邮箱不能为空',
            'email.regex'=>'邮箱的格式不正确',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号格式不正确',
            'city.required'=>'城市不能为空',
            'nickname.required' => '昵称不能为空',
            'nickname.regex'=>'昵称格式不正确2-8位'
        ]);

        $data = $request->except(['_token','id']);

        if($request->hasFile('profile')){
          $profile = $this->getUploadFileName($request);
            $data['profile'] = $profile?$profile:'';
            $this->deleteProfile($request->input('id'));

        }

        $res = DB::table('users')->where('id',$request->input('id'))->update($data);
        if($res) {
            return redirect('/admin/user/index')->with('info','更新成功');
        }else{
            return bakc()->with('error','更新失败');
        }
    }

    private function deleteProfile($id){
        $info = DB::table('users')->where('id',$id)->first();

        if(empty($info)){
            abort(404);
        }

        $path ='.'.$info->profile;
        if(file_exists($path)){
             unlink($path);}
    }

    public function getDelete(Request $request){
        $this->deleteProfile($request->input('id'));
        if(DB::table('users')->where('id',$request->input('id'))->delete()){
            return back()->with('info', '删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

    public function getAjaxUpdate(Request $request){
        $data = $request->only(['status']);
        $res=User::where('id',$request->input('id'))->update($data);
        if($res){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }



    public function alogin()
    {   
        return view('admin.login');
    }

    public function adoLogin(LoginRequest $request)
    {   
        
        $password = $request->input('password');
        $info = user::where('username',$request->input('username'))->first();
        // dd($info['password']);
        if (Hash::check($password, $info['password'])) {
            session(['uid'=>$info['id']]);
            
            $url = session('redirectUrl');
            
            if (!empty($url)) {
                session(['redirectUrl'=> null]);
                return redirect($url);

            }

            return redirect('/');
        }else{

            return back()->with('error','密码错误');
        }
        
    }

    /**********  前台 *************/

    public function login(){
        return view('index.user.login');
    }

    public function dologin(Request $request){
            $username = $request->input('username');
            $password = $request->input('password');
        
        $info = User::where('username',$username)->first();
        
        if(empty($info)){
            return back()->with('error','用户名不存在');
        }
        
        if(Hash::check($password,$info['password'])){
            //写入session  id
            session(['uid'=>$info['id']]);
            //登录后跳转的页面
            $url = session('redirectUrl');
            //判断是否有要跳转的页面 没有则默认首页
            if(!empty($url)){
                session(['redirectUrl'=>null]);
                return redirect($url);
            }
            return redirect('/');
        }else{
            return back()->with('error','密码不对');
        }
    }

    //注册

    public function register(){
        return view('index/user/register');
    }

    public function doregister(ZcRequest $request){
            $user = new User();
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input('email');
        $user->nickname = $request->input('nickname');
        $user->status = 0;
        $user->token = str_random(50);
        if($user->save()){
            Mail::send('emails.register',['user'=>$user],function($m)use($user){
                $m->from(env('MAIL_USERNAME'),Config::get('app.APP_NAME'));
                $m->to($user->email)->subject('用户激活');
            });
        }
        return view('index.user.registerRemind');
    }
    
    //激活
    
    public function jihuo(Request $request){
        $info = User::findOrFail($request->input('id'));
        if($info->token == $request->input('token')){
            $info->status = 1;
            $info->token = str_random(50);
            if($info->save()){
                return redirect('/login');
            }
        }else{
            abort(404);
        }
        
    }
    
    //修改密码
    
    public function forget(Request $request){
        return view('index.user.forget');
    }
    
    public function doforget(Request $request){

        $this->validate($request,[
            'email'=>'exists:users,email|regex:/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/',


        ],[
            'email.exists'=>'邮箱不存在',
            'email.regex' => '邮箱格式不正确',

        ]);
        $info = User::where('email',$request->input('email'))->firstOrFail();

        Mail::send('emails.forgect', ['info'=> $info], function($m)use($info){
            $m->from(env('MAIL_USERNAME'), Config::get('app.APP_NAME'));
            $m->to($info->email)->subject('找回密码邮件');
        });
    }
    
    public function reset(Request $request){
        $user = User::where('id',$request->input('id'))->where('token',$request->input('token'))->firstOrFail();
        return view('index.user.reset',[
            'user'=>$user
        ]);
    }
    
    public function doreset(Request $request){
        $this->validate($request,[
            'password'=>'required|regex:/^\S{6,30}$/',
            'repassword'=>'required|same:password',
           
        ],[
            'password.required'=>'密码不能为空',
            'password.regex' => '密码格式不正确',
            'repassword.required'=>'确认密码不能为空',
            'repassword.same'=>'两次的密码不一致',
           
        ]);
        $user = User::where('id',$request->input('id'))->where('token',$request->input('token'))->firstOrFail();
        
        $user->password = Hash::make($request->input('password'));
        $user->token = str_random(50);
        if($user->save()) {
            return redirect('/login')->with('info','更新成功');
        }else{
            return back();
        }
    
    }

    //前台更新

    public function account(){
        $id = session('uid');
        $user = User::where('id',$id)->firstOrFail();
        return view('index.user.account',[
            'user'=>$user
        ]);
    }
    
   public function doaccount(Request $request){
        $this->validate($request, [
            'email'=>'regex:/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/',
            'phone'=>'required|regex:/^1\d{10}$/',
            'city'=>'required',
            'nickname'=>'required|regex:/^\w{3,8}$/'

        ],[
            'email.regex'=>'邮箱的格式不正确',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号格式不正确',
            'city.required'=>'城市不能为空',
            'nickname.required' => '昵称不能为空',
            'nickname.regex'=>'昵称格式不正确2-8位'
        ]);

        $data = $request->except(['_token','id']);

        if($request->hasFile('profile')){
            $profile = $this->getUploadFileName($request);
            $data['profile'] = $profile?$profile:'';
            $this->deleteProfile($request->input('id'));

        }

        $res = DB::table('users')->where('id',$request->input('id'))->update($data);
        if($res) {
            return back()->with('info','更新成功');
        }else{
            return back()->with('error','更新失败');
        }
   }
    
    public function suicide(){
        $id = session('uid');
        $user = User::where('id',$id)->firstOrFail();
        return view('index.user.delete',[
            'user'=>$user
        ]);
    }


    public function dosuicide(Request $request){
        $user = User::findOrFail($request->input('id'));

        if($user->delete()){
            session(['uid'=>null]);
            return redirect('/login')->with('info','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
        }
        
    
    
    
    public function Mine($id){
        $user = User::findOrFail($id);
        $iid = session('uid');
        $usera = User::where('id',$iid)->firstOrFail();
        $username =  $usera->username;
        $attention = Attention::where('username',$username)->where('attention_name',$user->username)->first();
        $attentions = Attention::where('username',$user->username)->get();
        $attentions2 = Attention::where('username',$user->username)->take(8)->orderBy('id','desc')->get();
       $atten = [];
        foreach($attentions as $k=>$v) {
            $atten[] = User::where('username',$v['attention_name'])->first();
        }
        $atten2 = [];
        foreach($attentions2 as $k=>$v) {
            $atten2[] = User::where('username',$v['attention_name'])->first();
        }
        
        $readbook = Readbook::where('user_id',$user->id)->where('status',1)->get();
        $readbook2 = Readbook::where('user_id',$user->id)->where('status',2)->get();
        $readbook3 = Readbook::where('user_id',$user->id)->where('status',3)->get();
        $ibooks=[];
        foreach ($readbook as $k=>$v) {
            $ibooks[]= Books::where('id', $v['book_id'])->first();
        }
        $rbooks=[];
        foreach ($readbook2 as $k=>$v) {
            $rbooks[]= Books::where('id', $v['book_id'])->first();
        }
        $zbooks=[];
        foreach ($readbook3 as $k=>$v) {
            $zbooks[]= Books::where('id', $v['book_id'])->first();
        }
        if(empty($attention)){
          $c = 1;
        }
        else{
            $c = 2;
        }

//
//        $attention = Attention::where('username',$username)->get();
//
//        $a = $attention->where('attention_name',$user->username)->first();


//        $img = Image::make('.'.$user->profile)->resize(300,300)->;
//        $attention = Attention::where('username',$user->username)->where()
        return view('/index/user/mine',[
            'user'=>$user,
            'c'=>$c,
            'ibook'=>$ibooks,
            'rbook'=>$rbooks,
            'zbook'=>$zbooks,
            'attentions'=>$attentions,
            'atten'=>$atten,
            'atten2'=> $atten2

//            'usera'=>$usera,
//            'a'=>$a
        ]);
        
    }
//    public function upimage(Request $request){
//        $data = $request->except(['id']);
//        if($request->hasFile('profile')){
//            $profile = $this->getUploadFileName($request);
//            $data['profile'] = $profile?$profile:'';
//            $this->deleteProfile($request->input('id'));
//
//        }
//        dd($request->hasFile('profile'));
//        $res = DB::table('users')->where('id',$request->input('id'))->update($data);
//        if($res) {
//           echo '1';die;
//        }else{
//            echo '0';die;
//        }
//    }

    public function zhanneixin($id) {
       $user = User::where('id',$id)->first();

        return view('index.user.zhanneixin',[
            'user'=>$user
        ]);
    }

}
