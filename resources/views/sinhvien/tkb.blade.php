
@extends('layout_sinhvien.index')

@section('content')
<?php 
    $size2=count($thoikhoabieu_sangt2);
    $size3=count($thoikhoabieu_sangt3);
    $size4=count($thoikhoabieu_sangt4);
    $size5=count($thoikhoabieu_sangt5);
    $size6=count($thoikhoabieu_sangt6);
    $size7=count($thoikhoabieu_sangt7);

    $size2c=count($thoikhoabieu_chieut2);
    $size3c=count($thoikhoabieu_chieut3);
    $size4c=count($thoikhoabieu_chieut4);
    $size5c=count($thoikhoabieu_chieut5);
    $size6c=count($thoikhoabieu_chieut6);
    $size7c=count($thoikhoabieu_chieut7);
?>
<!-- ******CONTENT****** --> 
<div class="content container">
            <div class="page-wrapper">
	<header class="page-heading clearfix">
		<h1 class="heading-title pull-left">Thời khóa biểu</h1>
		<div class="breadcrumbs pull-right">
			<ul class="breadcrumbs-list">				
				<li><a href="#">Trang chủ</a><i class="fas fa-angle-right"></i></li>
                <li><a href="sinhvien">Sinh viên</a><i class="fas fa-angle-right"></i></li>
				<li class="current" style="padding-left:5px">Thời khóa biểu</li>
			</ul>
		</div><!--//breadcrumbs-->
	</header> 
	<div class="page-content">
		<div class="row page-row">
			<article class="welcome col-md-12 col-sm-7 courses-wrapper">
				<div class="featured-courses tabbed-info page-row">             
                    <ul class="nav nav-tabs">
                      <!-- <li><a href="#tab3" data-toggle="tab">New</a></li> -->
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab2">
                          <div class="row">
                              <div class="item col-md-12 col-sm-12 col-xs-12">
                                  
                                  <div class="jobs-wrapper col-md-12 col-sm-12">
                                    <div class="table-responsive">                      
                                        <table class="table table-boxed table-bordered table-striped text-center">
                                            <thead>
                                                <tr>
                                                    <th colspan="37">THỜI KHÓA BIỂU HỌC KỲ @foreach($makyhoc as $b) {{$b->ma_kyhoc}} @endforeach</th>
                                                </tr>
                                                <tr>
                                                    <th>-</th>
                                                    <th colspan="6">Thứ 2</th>
                                                    <th colspan="6">Thứ 3</th>
                                                    <th colspan="6">Thứ 4</th>
                                                    <th colspan="6">Thứ 5</th>
                                                    <th colspan="6">Thứ 6</th>
                                                    <th colspan="6">Thứ 7</th>
                                                </tr>
                                                <tr>
                                                
                                                
                                                	<th>Sáng</th>

                                                    @if($size2==0)
                                                    <td colspan="6"> Nghỉ </td>
                                                    @else
                                                    @foreach($thoikhoabieu_sangt2 as $a)
                                                    @if ($size2>1)
                                                    <td colspan="3">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @elseif( $size2 == 1 )
                                                    <td colspan="6">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                    @if($size3==0)
                                                    <td colspan="6"> Nghỉ </td>
                                                    @else
                                                    @foreach($thoikhoabieu_sangt3 as $a)
                                                    @if ($size3>1)
                                                    <td colspan="3">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @elseif( $size3 == 1 )
                                                    <td colspan="6">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                    @if($size4==0)
                                                    <td colspan="6"> Nghỉ </td>
                                                    @else
                                                    @foreach($thoikhoabieu_sangt4 as $a)
                                                    @if ($size4>1)
                                                    <td colspan="3">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @elseif( $size4 == 1 )
                                                    <td colspan="6">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                    @if($size5==0)
                                                    <td colspan="6"> Nghỉ </td>
                                                    @else
                                                    @foreach($thoikhoabieu_sangt5 as $a)
                                                    @if ($size5>1)
                                                    <td colspan="3">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @elseif( $size5 == 1 )
                                                    <td colspan="6">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                    @if($size6==0)
                                                    <td colspan="6"> Nghỉ </td>
                                                    @else
                                                    @foreach($thoikhoabieu_sangt6 as $a)
                                                    @if ($size6>1)
                                                    <td colspan="3">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @elseif( $size6 == 1 )
                                                    <td colspan="6">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                    @if($size7==0)
                                                    <td colspan="6"> Nghỉ </td>
                                                    @else
                                                    @foreach($thoikhoabieu_sangt7 as $a)
                                                    @if ($size7>1)
                                                    <td colspan="3">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @elseif( $size7 == 1 )
                                                    <td colspan="6">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                </tr>
                                                
                                                <tr>
                                                	<th>Chiều</th>
                                                    
                                                    @if($size2c==0)
                                                    <td colspan="6"> Nghỉ </td>
                                                    @else
                                                    @foreach($thoikhoabieu_chieut2 as $a)
                                                    @if ($size2c>1)
                                                    <td colspan="3">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    <@elseif( $size2c == 1 )
                                                    <td colspan="6">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                    @if($size3c==0)
                                                    <td colspan="6"> Nghỉ </td>
                                                    @else
                                                    @foreach($thoikhoabieu_chieut3 as $a)
                                                    @if ($size3c>1)
                                                    <td colspan="3">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @elseif( $size3c == 1 )
                                                    <td colspan="6">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                    @if($size4c==0)
                                                    <td colspan="6"> Nghỉ </td>
                                                    @else
                                                    @foreach($thoikhoabieu_chieut4 as $a)
                                                    @if ($size4c>1)
                                                    <td colspan="3">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @elseif( $size4c == 1 )
                                                    <td colspan="6">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                    @if($size5c==0)
                                                    <td colspan="6"> Nghỉ </td>
                                                    @else
                                                    @foreach($thoikhoabieu_chieut5 as $a)
                                                    @if ($size5c>1)
                                                    <td colspan="3">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @elseif( $size5c == 1 )
                                                    <td colspan="6">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                    @if($size6c==0)
                                                    <td colspan="6"> Nghỉ </td>
                                                    @else
                                                    @foreach($thoikhoabieu_chieut6 as $a)
                                                    @if ($size6c>1)
                                                    <td colspan="3">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @elseif( $size6c == 1 )
                                                    <td colspan="6">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                    @if($size7c==0)
                                                    <td colspan="6"> Nghỉ </td>
                                                    @else
                                                    @foreach($thoikhoabieu_chieut7 as $a)
                                                    @if ($size7c>1)
                                                    <td colspan="3">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @elseif( $size4c == 1 )
                                                    <td colspan="6">Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}<br>{{$a->tenmonhoc}} - {{$a->ma_loai_hoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Từ tuần {{$a->tuanbatdau}} - {{$a->tuanketthuc}}</td>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                    

                                                    
                                                    
                                                </tr>
                                                </thead>
                                            	<!--<tr>
                                            	<td colspan="19" class="text-right"><input type="submit" value="Cập nhật"></td>
                                            	</tr>-->
                                        </table><!--//table-->


                                                


                                        
                                    </div>
                                    <hr>
                                        <div class="tw">
                                        	<div class="col-md-2">
                                        	<h4>Bảng giờ đi học:</h4>
                                            <p>Tiết 1: 6h45-7h30</p>
                                            <p>Tiết 2: 67h35-8h20</p>
                                            <p>Tiết 3: 8h30-9h15</p>
                                            </div>
                                            <div class="col-md-2" style="margin-top:40px">
                                            <p>Tiết 4: 9h20-10h05</p>
                                            <p>Tiết 5: 10h15-11h00</p>
                                            <p>Tiết 6: 11h05-11h50</p>
                                            </div>
                                            <div class="col-md-2" style="margin-top:40px">
                                            <p>Tiết 7: 12h30-13h15</p>
                                            <p>Tiết 8: 13h20-14h05</p>
                                            <p>Tiết 9: 14h15-15h00</p>
                                            </div>
                                            <div class="col-md-2" style="margin-top:40px">
                                            <p>Tiết 10: 15h05-15h50</p>
                                            <p>Tiết 11: 16h00-16h45</p>
                                            <p>Tiết 12: 16h50-17h35</p>
                                            </div>
                                        </div>
                                </div><!--//jobs-wrapper-->
                              </div><!--//item-->                                       
                          </div><!--//row-->                               
                      </div>
                    </div>
                </div>			
			</article><!--//page-content-->
			
		</div><!--//page-row-->
	</div><!--//page-content-->
</div>
</div><!--//content-->

@endsection