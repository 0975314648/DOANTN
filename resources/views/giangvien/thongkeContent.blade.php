
@extends('layout_giangvien.index')

@section('content')

<!-- ******CONTENT****** --> 
<div class="content container">
            <div class="page-wrapper">
	<header class="page-heading clearfix">
		<h1 class="heading-title pull-left">Quản lý</h1>
		<div class="breadcrumbs pull-right">
			<ul class="breadcrumbs-list">				
				<li><a href="giangvien">Trang chủ</a><i class="fas fa-angle-right"></i></li>
                <li><a href="giangvien">Giảng viên</a><i class="fas fa-angle-right"></i></li>
				<li class="current" style="padding-left:5px;">Thống kê</li>
			</ul>
		</div><!--//breadcrumbs-->
	</header> 
	<div class="page-content">
		<div class="row page-row">
			<article class="welcome col-md-12 col-sm-7 courses-wrapper">
				<div class="featured-courses tabbed-info page-row">             
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab2" data-toggle="tab">Thống kê</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab2">
                          <div class="row">
                          	<a href="giangvien.html" style="float:right; padding-right:15px">Quay lại</a>
                              <div class="item col-md-12 col-sm-12 col-xs-12">
                                  <p class="text-center">Danh sách điểm danh lớp LTMT2K8</p>
                                  <p>Môn: Cơ sở dữ liệu - TH </p>
                                  <div class="jobs-wrapper col-md-12 col-sm-12">
                                    <div class="table-responsive">                      
                                        <table class="table table-boxed table-bordered table-striped text-center">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>MSSV</th>
                                                    <th>Họ tên</th>
                                                    <th>Ngày sinh</th>
                                                    <th>Buổi 1</th>
                                                    <th>Buổi 2</th>
                                                    <th>Buổi 3</th>
                                                    <th>Buổi 4</th>
                                                    <th>Buổi 5</th>
                                                    <th>Buổi 6</th>
                                                    <th>Buổi 7</th>
                                                    <th>Buổi 8</th>
                                                    <th>Buổi 9</th>
                                                    <th>Buổi 10</th>
                                                    <th>Buổi 11</th>
                                                    <th>Buổi 12</th>
                                                    <th>Buổi 13</th>
                                                    <th>Buổi 14</th>
                                                    <th>Buổi 15</th>
                                                    <th>Thống kê</th>
                                                    <th>Điểm cộng</th>
                                                    <th>Ghi chú</th>
                                                </tr>
                                                <tr>
                                                	<td>1</td>
                                                    <td>CD123123</td>
                                                    <td>Nguyễn Văn A</td>
                                                    <td>01/01/2000</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>P</td>
                                                    <td>Tổng:15 <br>Vắng: 0<br>Muộn: 0</td>
                                                    <td>8</td>
                                                    <td>Đạt</td>
                                                </tr>
                                            </thead>
                                            	<!--<tr>
                                            	<td colspan="19" class="text-right"><input type="submit" value="Cập nhật"></td>
                                            	</tr>-->
                                        </table><!--//table-->
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