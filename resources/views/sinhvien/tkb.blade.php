
@extends('layout_sinhvien.index')

@section('content')
<?php 
    $size2=count($thoikhoabieut2);
    $size3=count($thoikhoabieut3);
    $size4=count($thoikhoabieut4);
    $size5=count($thoikhoabieut5);
    $size6=count($thoikhoabieut6);
    $size7=count($thoikhoabieut7);
?>
<!-- ******CONTENT****** --> 
<div class="content container">
            <div class="page-wrapper">
	<header class="page-heading clearfix">
		<h1 class="heading-title pull-left">Thời khóa biểu</h1>
		<div class="breadcrumbs pull-right">
			<ul class="breadcrumbs-list">				
				<li><a href="#">Trang chủ</a><i class="fas fa-angle-right"></i></li>
                <li><a href="#">Sinh viên</a><i class="fas fa-angle-right"></i></li>
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
                                  <p class="text-center">THỜI KHÓA BIỂU HỌC KỲ 2 </p>
                                  <div class="jobs-wrapper col-md-12 col-sm-12">
                                    <div class="table-responsive">                      
                                        <table class="table table-boxed table-bordered table-striped text-center">
                                            <thead>
                                                <tr>
                                                    <th colspan="37">LÝ THUYẾT</th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="1">-</th>
                                                    <th colspan="6">Thứ 2</th>
                                                    <th colspan="6">Thứ 3</th>
                                                    <th colspan="6">Thứ 4</th>
                                                    <th colspan="6">Thứ 5</th>
                                                    <th colspan="6">Thứ 6</th>
                                                    <th colspan="6">Thứ 7</th>
                                                </tr>
                                                <tr>
                                                
                                                
                                                	<th>Sáng</th>
                                                    
                                                    @foreach($thoikhoabieut2 as $a)
                                                    <?php if($size2>1){ ?>
                                                    <td colspan="3">{{$a->thu}}<br>{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } else { ?>
                                                    <td colspan="6">{{$a->thu}}<br>{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } ?>
        
                                                    @endforeach
                                                    @foreach($thoikhoabieut3 as $a)
                                                    <?php if($size3>1){ ?>
                                                    <td colspan="3">{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}} Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } else { ?>
                                                    <td colspan="6">{{$a->thu}}<br>{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } ?>
                                                    @endforeach
                                                    
                                                    @foreach($thoikhoabieut4 as $a)
                                                    <?php if($size4>1){ ?>
                                                    <td colspan="3">{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } else { ?>
                                                    <td colspan="6">{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } ?>
                                                    @endforeach
                                                    
                                                    @foreach($thoikhoabieut5 as $a)
                                                    <?php if($size5>1){ ?>
                                                    <td colspan="3">{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } else { ?>
                                                    <td colspan="6">{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } ?>
                                                    @endforeach
                                                    
                                                    @foreach($thoikhoabieut6 as $a)
                                                    <?php if($size6>1){ ?>
                                                    <td colspan="3">{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } else { ?>
                                                    <td colspan="6">{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } ?>
                                                    @endforeach
                                                    
                                                    @foreach($thoikhoabieut7 as $a)
                                                    <?php if($size7>1){ ?>
                                                    <td colspan="3">{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } else { ?>
                                                    <td colspan="6">{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } ?>
                                                    @endforeach
                                                    
                                                </tr>
                                                
                                                <tr>
                                                	<th>Chiều</th>
                                                    
                                                    
                                                    @foreach($thoikhoabieut2 as $a)
                                                    <?php if($size2>1){ ?>
                                                    <td colspan="3">{{$a->thu}}<br>{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } else { ?>
                                                    <td colspan="6">{{$a->thu}}<br>{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}<br>Tiết {{$a->tietbatdau}} - {{$a->tietketthuc}}</td>
                                                    <?php } ?>
                                                    @endforeach
                                                    <td colspan="6">Lập trình web 2<br>Cô Vân TH-201<br>Từ tuần 10-17</td>
                                                    <td colspan="6">Lập trình web 2<br>Cô Vân TH-201<br>Từ tuần 10-17</td>
                                                    <td colspan="6">Lập trình web 2<br>Cô Vân TH-201<br>Từ tuần 10-17</td>
                                                    <td colspan="6">Lập trình web 2<br>Cô Vân TH-201<br>Từ tuần 10-17</td>
                                                    <td colspan="6">Lập trình web 2<br>Cô Vân TH-201<br>Từ tuần 10-17</td>
                                                </tr>
                                                </thead>
                                            	<!--<tr>
                                            	<td colspan="19" class="text-right"><input type="submit" value="Cập nhật"></td>
                                            	</tr>-->
                                        </table><!--//table-->


                                                <!-- TH -->
                                        <table class="table table-boxed table-bordered table-striped text-center">
                                            <thead>

                                                <tr>
                                                    <th colspan="37">THỰC HÀNH</th>
                                                </tr>
                                                <tr>
                                                	<th>Sáng</th>
                                                    
                                                    @foreach($thoikhoabieut3 as $a)
                                                    <?php if($size3>1){ ?>
                                                    <td colspan="3">{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}</td>
                                                    <?php } else { ?>
                                                    <td colspan="6">{{$a->tenmonhoc}}<br>{{$a->hoten}}<br>{{$a->nhahoc}}-{{$a->tenphong}}</td>
                                                    <?php } ?>
                                                    
                                                    
                                                    @endforeach
                                                    
                                                    <td colspan="3">Cơ sở dữ liệu<br>Cô Hòa A17-405<br>Từ tuần 10-17</td>
                                                    <td colspan="3">Cơ sở dữ liệu<br>Cô Hòa A17-405<br>Từ tuần 10-17</td>
                                                    <td colspan="3">Cơ sở dữ liệu<br>Cô Hòa A17-405<br>Từ tuần 10-17</td>
                                                    <td colspan="3">Cơ sở dữ liệu<br>Cô Hòa A17-405<br>Từ tuần 10-17</td>
                                                    <td colspan="3">Cơ sở dữ liệu<br>Cô Hòa A17-405<br>Từ tuần 10-17</td>
                                                    <td colspan="3">Cơ sở dữ liệu<br>Cô Hòa A17-405<br>Từ tuần 10-17</td>
                                                    <td colspan="3">Cơ sở dữ liệu<br>Cô Hòa A17-405<br>Từ tuần 10-17</td>
                                                    <td colspan="3">Cơ sở dữ liệu<br>Cô Hòa A17-405<br>Từ tuần 10-17</td>
                                                    <td colspan="3">Cơ sở dữ liệu<br>Cô Hòa A17-405<br>Từ tuần 10-17</td>
                                                    <td colspan="3">Cơ sở dữ liệu<br>Cô Hòa A17-405<br>Từ tuần 10-17</td>
                                                </tr>
                                                
                                                <tr>
                                                	<th>Chiều</th>
                                                    <td></td>
                                                    <td colspan="5">Lập trình web 2<br>Cô Vân TH-201<br>Từ tuần 10-17</td>
                                                    <td></td>
                                                    <td colspan="5">Lập trình web 2<br>Cô Vân TH-201<br>Từ tuần 10-17</td>
                                                    <td></td>
                                                    <td colspan="5">Lập trình web 2<br>Cô Vân TH-201<br>Từ tuần 10-17</td>
                                                    <td></td>
                                                    <td colspan="5">Lập trình web 2<br>Cô Vân TH-201<br>Từ tuần 10-17</td>
                                                    <td></td>
                                                    <td colspan="5">Lập trình web 2<br>Cô Vân TH-201<br>Từ tuần 10-17</td>
                                                    <td></td>
                                                    <td colspan="5">Lập trình web 2<br>Cô Vân TH-201<br>Từ tuần 10-17</td>
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