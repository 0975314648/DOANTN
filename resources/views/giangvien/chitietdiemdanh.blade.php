@extends('layout_giangvien.index')

@section('content')

<!-- ******CONTENT****** --> 
<div class="content container">
            <div class="page-wrapper">
	<header class="page-heading clearfix">
		<h1 class="heading-title pull-left">Điểm danh</h1>
		<div class="breadcrumbs pull-right">
			<ul class="breadcrumbs-list">				
				<li><a href="giangvien">Trang chủ</a><i class="fas fa-angle-right"></i></li>
                <li><a href="giangvien">Giảng viên</a><i class="fas fa-angle-right"></i></li>                           
                <li class="current" style="padding-left:5px;"> Điểm danh </li>
                
			</ul>
		</div><!--//breadcrumbs-->
	</header> 
	<div class="page-content">
		<div class="row page-row">
			<article class="welcome col-md-8 col-sm-7 courses-wrapper">
				<div class="featured-courses tabbed-info page-row">             
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab1" data-toggle="tab">Lý thuyết</a></li>
                      <li><a href="#tab2" data-toggle="tab">Thực hành</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab1">
                          <div class="row">
                          	<a href="#" style="float:right; padding-right:20px">Thống kê</a>
                              <div class="item col-md-12 col-sm-12 col-xs-12">
                                  <p class="text-center">Danh sách điểm danh lớp LTMT2K8</p>
                                  <p>Môn: Cơ sở dữ liệu - LT </p>
                                  <div class="jobs-wrapper col-md-12 col-sm-12">
                                    <div class="table-responsive">                      
                                        <table class="table table-boxed table-bordered table-striped text-center">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>MSSV</th>
                                                    <th>Họ tên</th>
                                                    <th>Ngày sinh</th>
                                                    <th>Điểm danh</th>
                                                    <th>Ý thức</th>
                                                    <th>Điểm</th>
                                                </tr>
                                                <tr>
                                                	<td>1</td>
                                                    <td>CD123123</td>
                                                    <td>Nguyễn Văn A</td>
                                                    <td>01/01/2000</td>
                                                    <td>
                                                    	<select>
                                                        	<option>V</option>
                                                            <option>M</option>
                                                            <option>P</option>
                                                    	</select>
                                                    </td>
                                                    <td>
                                                    	<select>
                                                        	<option>Tốt</option>
                                                            <option>Khá</option>
                                                            <option>T.bình</option>
                                                            <option>Yếu</option>
                                                    	</select>
                                                    </td>
                                                    <td><input type="number" min="0" max="10"></td>
                                                </tr>
                                            </thead>
                                            	<tr>
                                            	<td colspan="7" class="text-right"><input type="submit" value="Cập nhật"></td>
                                            	</tr>
                                        </table><!--//table-->
                                    </div>
                                </div><!--//jobs-wrapper-->
                              </div><!--//item-->                                       
                          </div><!--//row-->
                      </div>
                      <div class="tab-pane" id="tab2">
                          <div class="row">
                          	<a href="#" style="float:right; padding-right:20px">Thống kê</a>
                              <div class="item col-md-12 col-sm-6 col-xs-6">
                                  <p class="text-center">Danh sách điểm danh lớp LTMT2K8</p>
                                  <p>Môn: Cơ sở dữ liệu - TH </p>
                                <div class="jobs-wrapper col-md-12 col-sm-12">
                                    <div class="table-responsive">    
                                    <form>                  
                                        <table class="table table-boxed table-bordered table-striped text-center">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>MSSV</th>
                                                    <th>Họ tên</th>
                                                    <th>Ngày sinh</th>
                                                    <th>Điểm danh</th>
                                                    <th>Ý thức</th>
                                                    <th>Điểm</th                                               
                                                ></tr>
                                                <tr>
                                                	<td>1</td>
                                                    <td>CD123123</td>
                                                    <td>Nguyễn Văn A</td>
                                                    <td>01/01/2000</td>
                                                    <td>
                                                    	<select>
                                                        	<option>V</option>
                                                            <option>M</option>
                                                            <option>P</option>
                                                    	</select>
                                                    </td>
                                                    <td>
                                                    	<select>
                                                        	<option>Tốt</option>
                                                            <option>Khá</option>
                                                            <option>T.bình</option>
                                                            <option>Yếu</option>
                                                    	</select>
                                                    </td>
                                                    <td><input type="number" min="0" max="10"></td>
                                                </tr>
                                            </thead>
                                            	<tr>
                                            	<td colspan="7" class="text-right"><input type="submit" value="Cập nhật"></td>
                                            	</tr>
                                            
                                        </table><!--//table-->
                                    </form><!--//form-->
                                    </div>
                                </div><!--//jobs-wrapper-->
                              </div><!--//item-->
                          </div><!--//row-->
                      </div>
                    </div>
                </div>			
			</article><!--//page-content-->
			<aside class="page-sidebar col-md-2 col-md-offset-1 col-sm-4 col-sm-offset-1">                    
		


<section class="widget">
    <h3 class="title">Liên hệ</h3>
    <p>Tổ phần mềm, Khoa CNTT</p>
	<p class="address"><i class="fas fa-map-marker-alt" style="padding-right:5px; color:#6091ba"></i>Địa chỉ: Phòng 113 - 92A Lê Thanh Nghị </p>
    <p style="padding-left:15px">Hai Bà Trưng, Hà Nội </p>
	<p class="tel"><i class="fas fa-phone" style="padding-right:5px; color:#6091ba"></i>Tel: (+84) 99 999 999</p>
	<p class="email"><i class="fas fa-envelope" style="padding-right:5px; color:#6091ba"></i>Email: <a href="mailto:itc@hubt.edu.vn">contact@hactech.edu.vn</a></p>
</section><!--//widget-->			</aside>
		</div><!--//page-row-->
	</div><!--//page-content-->
</div>
</div><!--//content-->

@endsection