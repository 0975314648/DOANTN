<?php $__env->startSection('content'); ?>

    <!-- ******CONTENT****** --> 
<div class="content container">
            <div class="page-wrapper">
	<header class="page-heading clearfix">
		<h1 class="heading-title pull-left">Quản lý</h1>
		<div class="breadcrumbs pull-right">
			<ul class="breadcrumbs-list">				
				<li><a href="#">Trang chủ</a><i class="fas fa-angle-right"></i></li>
				<li class="current" style="padding-left:5px;">Giảng viên</li>
			</ul>
		</div><!--//breadcrumbs-->
	</header> 
	<div class="page-content">
		<div class="row page-row">
			<article class="welcome col-md-8 col-sm-7 courses-wrapper">
				<div class="featured-courses tabbed-info page-row">             
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab1" data-toggle="tab">Dữ liệu</a></li>
                      <li><a href="#tab2" data-toggle="tab">Thống kê</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab1">
                          <div class="row">
                              
                              <div class="item col-md-3 col-sm-6 col-xs-6">
                                <a href="giangvien-lichday.html">
                                  <img class="img-responsive" src="boot_asset/Đăng nhập hệ thống - HACTECH/timetable-157x88.jpg" alt="">
                                  <p class="text-center text-primary"> Lịch dạy </p>
                                </a>
                              </div><!--//item-->
                              <div class="item col-md-3 col-sm-6 col-xs-6">
                                <a href="giangvien-diemdanh.html">
                                  <img class="img-responsive" src="boot_asset/Đăng nhập hệ thống - HACTECH/attendance-157x88.jpg" alt="attendance-hubt">
                                  <p class="text-center text-primary"> Dữ liệu điểm danh </p>
                                </a>
                              </div><!--//item-->                                                                                 
                              
                          </div><!--//row-->
                      </div>
                      
                      <div class="tab-pane" id="tab2">
                          <div class="row">
                          	<div class="item col-md-12 col-sm-6 col-xs-6">
                            	<h3>Lọc dữ liệu điểm danh </h3><hr>
                                <div class="jobs-wrapper col-md-12 col-sm-12">
                                    <div class="table-responsive">  
                                        <form>
                                            <table>
                                                <tr>
                                                    <td><label><strong>Lớp</strong></label>
                                                        <select class="form-control" style="border-radius:3px">
                                                            <option value="">LTMT1-K8</option>
                                                            <option value="">LTMT2-K8</option>
                                                        </select>
                                                    </td>
                                                    <td style="padding:0px 30px 0px 30px"><label><strong>Môn học</strong></label>
                                                        <select class="form-control" style="border-radius:3px">
                                                            <option value="">Cơ sở dữ liệu</option>
                                                            <option value="">Lập trình windows 2</option>
                                                        </select>
                                                    </td>
                                                    <td style="padding:0px 30px 0px 0px"><label><strong>Loại</strong></label>
                                                        <select class="form-control" style="border-radius:3px">
                                                            <option value="">Lý thuyết</option>
                                                            <option value="">Thực hành</option>
                                                        </select>
                                                    </td>
                                                    <td style="padding-top:20px">
														<button type="submit" class="btn btn-primary">Đồng ý</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div><!--//jobs-wrapper-->
                              </div><!--//item-->
                          </div><!--//row-->                                  
                      </div>
                    </div>
                </div>			
			</article><!--//page-content-->
			<aside class="page-sidebar col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">                    
		


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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_giangvien.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DO_AN_GIT\resources\views/giangvien/default.blade.php ENDPATH**/ ?>