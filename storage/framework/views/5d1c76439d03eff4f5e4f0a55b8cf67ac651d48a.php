<?php $__env->startSection('content'); ?>

<!-- ******CONTENT****** --> 
<div class="content container">
            <div class="page-wrapper">
	<header class="page-heading clearfix">
		<h1 class="heading-title pull-left">Kết quả học tập</h1>
		<div class="breadcrumbs pull-right">
			<ul class="breadcrumbs-list">				
				<li><a href="#">Trang chủ</a><i class="fas fa-angle-right"></i></li>
				<li class="current" style="padding-left:5px">Sinh viên</li>
			</ul>
		</div><!--//breadcrumbs-->
	</header> 
	<div class="page-content">
		<div class="row page-row">
			<article class="welcome col-md-8 col-sm-7 courses-wrapper">
				<div class="featured-courses tabbed-info page-row">             
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab2" data-toggle="tab">Dữ liệu</a></li>
                      <!-- <li><a href="#tab3" data-toggle="tab">New</a></li> -->
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab2">
                          <div class="row">
                              <div class="item col-md-3 col-sm-6 col-xs-6">
                                <a href="#">
                                  <img class="img-responsive" src="boot_asset/Đăng nhập hệ thống - HACTECH/schedule-157x88.jpg" alt="">
                                  <p class="text-center text-primary"> Lịch thi </p>
                                </a>
                              </div><!--//item-->
                              <!--<div class="item col-md-3 col-sm-6 col-xs-6">
                                <a href="#">
                                  <img class="img-responsive" src="Đăng nhập hệ thống - HACTECH/transcripts-157x88.jpeg" alt="">
                                  <p class="text-center text-primary"> Bảng điểm </p>
                                </a>
                              </div><!--//item-->
                              <div class="item col-md-3 col-sm-6 col-xs-6">
                                <a href="#">
                                  <img class="img-responsive" src="boot_asset/Đăng nhập hệ thống - HACTECH/timetable-157x88.jpg" alt="">
                                  <p class="text-center text-primary"> Thời khóa biểu </p>
                                </a>
                              </div><!--//item-->
                              <div class="item col-md-3 col-sm-6 col-xs-6">
                                <a href="">
                                  <img class="img-responsive" src="boot_asset/Đăng nhập hệ thống - HACTECH/attendance-157x88.jpg" alt="attendance-hubt">
                                  <p class="text-center text-primary"> Dữ liệu điểm danh </p>
                                </a>
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
<?php echo $__env->make('layout_sinhvien.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\DO_AN_GIT\resources\views/sinhvien/default.blade.php ENDPATH**/ ?>