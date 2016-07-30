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
use App\Http\Controllers\Controller;

class ReadbookController extends Controller
{
   public function wodu($id){
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
       
       return view('/index/readbook/wodu',[
           'user'=>$user,
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
    public function duguo($id){
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

        return view('/index/readbook/duguo',[
            'user'=>$user,
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
    public function zaidu($id){
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

        return view('/index/readbook/zaidu',[
            'user'=>$user,
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
    public function xiangdu(Request $request){
        $readbook = Readbook::where('user_id',$request->input('user_id'))->where('book_id',$request->input('book_id'))->first();
        if($readbook->delete()){
            return 1;die;
        }else{
            return 0;die;
        }
    }


    public function dongtai($id){

        $id = session('uid');
        $user = User::where('id',$id)->firstOrFail();
        $attention = Attention::where('username',$user->username)->get();
        $ss = [];
        foreach($attention as $k=>$v){
            $ss[] = User::where('username',$v['attention_name'])->first();
        }
       $ss[] = $user;
        $cc = [];
        foreach($ss as $k=>$v){
            $cc[] = Readbook::where('user_id',$v['id'])->get();
        }
        $dd = [];
        foreach($cc as $k=>$v){
            foreach($v as $k2=>$v2){
               $dd[] = $v2;
            }
        }
        
        return view('index.readbook.dongtai',[
            'dongtai' =>$dd
        ]);
    }
}
