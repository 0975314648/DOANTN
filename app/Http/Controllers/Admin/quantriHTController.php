<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use App\User;
use App\MonHoc;

class quantriHTController extends Controller
{
    //
    public function getQTUser( Request $request){
        if($request->search != "")
        {
            $user = User::where('fullname','like','%'.$request->search.'%')->orWhere('username','like','%'.$request->search.'%')->paginate(10);
        }
        else
        {
            $user = User::paginate(10);
        }
        $dem=1;

        if($request->popupDiv != 0){
            if($request->hoten !="" && $request->username !="" && $request->password !="" && $request->loaitk !="")
            {
                $fullname = $request->input('hoten');
                $username = $request->input('username');
                $password = $request->input(bcrypt('password'));
                $status = $request->has('trangthai')? 1 : 0;
                $level = $request->input('loaitk');
                DB::insert('insert into users (fullname, username, password, status, level) values (?, ?, ?, ?, ?)', [$fullname, $username, $password, $status, $level]);
            }
        }
        return view('quantri.user',compact('user','dem'));
    }
    public function postQTUser( Request $request){
        
    }
    public function getDefault(){
        return view('layout_quantri.index');
    }
    public function getSinhvien(){
        return view('quantri.sinhvien');
    }
    public function getGiangvien(){
        return view('quantri.giangvien');
    }
    public function getTKB(){
        return view('quantri.tkb');
    }
    public function getLop(){
        return view('quantri.lop');
    }
    public function getMonhoc(){
        return view('quantri.monhoc');
    }
}
