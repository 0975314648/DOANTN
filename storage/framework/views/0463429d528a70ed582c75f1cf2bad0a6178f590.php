<?php $__env->startSection('content'); ?>

    <!-- ******CONTENT****** --> 
<div class="content container">
            <div class="page-wrapper">
	<header class="page-heading clearfix">
		<h1 class="heading-title pull-left">Quản lý</h1>
		<div class="breadcrumbs pull-right">
			<ul class="breadcrumbs-list">				
				<li><a href="giangvien">Trang chủ</a><i class="fas fa-angle-right"></i></li>
				<li class="current" style="padding-left:5px;">Giảng viên</li>
			</ul>
		</div><!--//breadcrumbs-->
	</header> 
	<div class="page-content">
		<div class="row page-row">
			<article class="welcome col-md-8 col-sm-7 courses-wrapper">
				<div class="featured-courses tabbed-info page-row">             
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab1" data-toggle="tab">Lịch dạy hôm nay</a></li>
                      
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab1">
                          <div class="row">
                              <div class="tab-pane active" id="tab1">
                                <div class="row">
                                    <div class="item col-md-12 col-sm-12 col-xs-12">
                                        <div class="jobs-wrapper col-md-12 col-sm-12">
                                          <div class="table-responsive">                      
                                              <table class="table table-boxed table-bordered table-striped text-center">
                                                  <thead>
                                                      <tr>
                                                          <th>Thời gian</th>
                                                          <th>Loại</th>
                                                          <th>Môn học</th>
                                                          <th>Lớp - Khóa</th>
                                                          <th>Phòng học</th>
                                                          <th>Trạng thái</th>                                               
                                                      </tr>
                                                      <tr>
                                                        <td>6h45-9h20</td>
                                                          <td>Lý Thuyết</td>
                                                          <td>CSDL</td>
                                                          <td>LTMT2K8</td>
                                                          <td>A17-405</td>
                                                          <td><a href="Đăng nhập hệ thống - HACTECH.html">Vào lớp</a></td>
                                                      </tr>
                                                  </thead>
                                              </table><!--//table-->
                                          </div>
                                      </div><!--//jobs-wrapper-->
                                    </div><!--//item-->                                       
                                </div><!--//row-->
                            </div>
           
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
<?php echo $__env->make('layout_giangvien.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\DOANTN\resources\views/giangvien/default.blade.php ENDPATH**/ ?>