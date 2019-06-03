<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function getLogin(){
        return view('Login');
    }

    public function postLogin(Request $request){
        /*$this->validate($request,[
            'username'=>'required',
            'password'=>'required|min:5|max:30'
        ],[
            'email.required'=>'Tên đăng nhập không được bỏ trống',
            'password.required'=>'Mật khẩu không được bỏ trống',
            'password.min'=>'Mật khẩu không được ngắn hơn 5 ký tự',
            'password.max'=>'Mật khẩu không được dài hơn 30 ký tự'
        ]);*/
        $arr=['username'=>$request->username,'password'=>$request->password];
        if($request->remember='1'){
            $remember=true;
        }
        else{
            $remember=false;
        }
        if(Auth::attempt($arr,$remember))
        {
            $user=Auth::user();
            if($user->level==1)
            {
                return redirect('quantrihethong');
            }
            else if($user->level==2)
            {
                return redirect('giangvien');
            }
            else
            {
                return redirect('sinhvien');
            }
        }
        else
        {
            return back()->withInput()->with('error','Tài khoản hoặc mật khẩu không đúng');
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect('login');
    }
}
