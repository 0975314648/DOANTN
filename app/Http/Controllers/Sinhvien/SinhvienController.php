<?php

namespace App\Http\Controllers\Sinhvien;

use Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChiTietTKB;
use App\ChiTietBuoiDiemDanh;
use App\SinhVien;
use App\ChiTietDiemDanh;
use Carbon\Carbon;

class SinhvienController extends Controller
{
    public function thoikhoabieu()
    {
        $makyhoc = ChiTietTKB::get_Makyhoc();

        $thoikhoabieu_sangt2 = ChiTietTKB::thoikhoabieu_sang('T2');
        $thoikhoabieu_sangt3 = ChiTietTKB::thoikhoabieu_sang('T3');
        $thoikhoabieu_sangt4 = ChiTietTKB::thoikhoabieu_sang('T4');
        $thoikhoabieu_sangt5 = ChiTietTKB::thoikhoabieu_sang('T5');
        $thoikhoabieu_sangt6 = ChiTietTKB::thoikhoabieu_sang('T6');
        $thoikhoabieu_sangt7 = ChiTietTKB::thoikhoabieu_sang('T7');

        $thoikhoabieu_chieut2 = ChiTietTKB::thoikhoabieu_chieu('T2');
        $thoikhoabieu_chieut3 = ChiTietTKB::thoikhoabieu_chieu('T3');
        $thoikhoabieu_chieut4 = ChiTietTKB::thoikhoabieu_chieu('T4');
        $thoikhoabieu_chieut5 = ChiTietTKB::thoikhoabieu_chieu('T5');
        $thoikhoabieu_chieut6 = ChiTietTKB::thoikhoabieu_chieu('T6');
        $thoikhoabieu_chieut7 = ChiTietTKB::thoikhoabieu_chieu('T7');
        
        
          return view('sinhvien.tkb')
                        ->with('makyhoc',$makyhoc)
                        ->with('thoikhoabieu_sangt2',$thoikhoabieu_sangt2)
                        ->with('thoikhoabieu_sangt3',$thoikhoabieu_sangt3)
                        ->with('thoikhoabieu_sangt4',$thoikhoabieu_sangt4)
                        ->with('thoikhoabieu_sangt5',$thoikhoabieu_sangt5)
                        ->with('thoikhoabieu_sangt6',$thoikhoabieu_sangt6)
                        ->with('thoikhoabieu_sangt7',$thoikhoabieu_sangt7)
                        
                        ->with('thoikhoabieu_chieut2',$thoikhoabieu_chieut2)
                        ->with('thoikhoabieu_chieut3',$thoikhoabieu_chieut3)
                        ->with('thoikhoabieu_chieut4',$thoikhoabieu_chieut4)
                        ->with('thoikhoabieu_chieut5',$thoikhoabieu_chieut5)
                        ->with('thoikhoabieu_chieut6',$thoikhoabieu_chieut6)
                        ->with('thoikhoabieu_chieut7',$thoikhoabieu_chieut7);
                      
                      
    
    }

    function lichthi()
    {
        return view('sinhvien.lichthi');
    }




    //Code Copy
    public function getDiemdanh(){
        $ma_loai_hoc="LT";

        $sobuoi=ChiTietDiemDanh::get_SoBuoiDD("LTMT2","K8","MON001",$ma_loai_hoc);
        if($ma_loai_hoc=="LT"){
           $size=count($sobuoi);
           if ($size=1){
              foreach ($sobuoi as $key => $value) {
                 $so_buoi=$value->so_buoi_lt;
              }
           }
        }
        if($ma_loai_hoc=="TH"){
           $size=count($sobuoi);
           if ($size=1){
              foreach ($sobuoi as $key => $value) {
                 $so_buoi=$value->so_buoi_lt;
              }
           }
        }
        
        $ma_mon='MON001';
        $ma_khoahoc='K8';
        $ma_loai_hoc='LT';
        $ma_lop='LTMT2';
        $ma_sv='SV001';



    $sobuoi=SinhvienController::getBuoidd($ma_lop,$ma_khoahoc,$ma_mon,$ma_loai_hoc);
    
    $masv=ChiTietDiemDanh::getMasv($ma_lop,$ma_khoahoc);
    foreach ($masv as $key1 => $value1) {
        $value1->{'hoten'}=$value1->hoten;
        $value1->{'gioitinh'}=$value1->gioitinh;
        $value1->{'ngaysinh'}=$value1->ngaysinh;
        for($i=1;$i<=$sobuoi;$i++){
            $buoidd=ChiTietDiemDanh::getDulieuBuoiDD($ma_mon,$ma_khoahoc,$ma_loai_hoc,$ma_lop,$value1->ma_sv,$i);
            if(count($buoidd)!=0){
            foreach ($buoidd as $key2 => $value2) {
                $a=$value2->diemdanh;
                switch ($a) {
                    case '1':
                        $a="Đ";
                        break;
                    case '0.5':
                        $a="M";
                        break;
                    case '0':
                        $a="V";
                        break;
                    default:
                        $a=null;
                        break;
                }
                $giovaolop=$value2->giovaolop;
                $diemythuc=$value2->diem_ythuc;
                $diemkynang=$value2->diem_kynang;
                $diemkienthuc=$value2->diem_kienthuc;
                $ghichu=$value2->ghichu;
            }
            $value1->{$i}=$a;
            $value1->{'giovaolop'.$i}=$giovaolop;
            $value1->{'diem'.$i}='('.$diemythuc.'/'.$diemkynang.'/'.$diemkienthuc.')';
            if($value1->{'diem'.$i}=="(//)"){
                $value1->{'diem'.$i}="---";
            }
            $value1->{'ghichu'.$i}=$ghichu;
            }
            else{
            $value1->{$i}=null;
            $value1->{'giovaolop'.$i}=null;
            $value1->{'diem'.$i}=null;
            $value1->{'ghichu'.$i}=null;
            }
            
        }
        
    }
        return view('sinhvien.diemdanh')
        ->with('sobuoi',$so_buoi)
        ->with('masv',$masv);
  }

  public function getBuoidd($ma_lop,$ma_khoahoc,$ma_mon,$ma_loai_hoc){

     $sobuoi=ChiTietDiemDanh::get_SoBuoiDD($ma_lop,$ma_khoahoc,$ma_mon,$ma_loai_hoc);
        if($ma_loai_hoc=="LT"){
           $size=count($sobuoi);
           if ($size=1){
              foreach ($sobuoi as $key => $value) {
                 $so_buoi=$value->so_buoi_lt;
              }
           }
        }
        if($ma_loai_hoc=="TH"){
           $size=count($sobuoi);
           if ($size=1){
              foreach ($sobuoi as $key => $value) {
                 $so_buoi=$value->so_buoi_th;
              }
           }
        }
        return $so_buoi;
  }


  public function getTest(){
    
 //dd($masv);
 }
}



