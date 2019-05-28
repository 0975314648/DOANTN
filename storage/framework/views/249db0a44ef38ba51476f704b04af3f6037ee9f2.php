<?php $__env->startSection('content'); ?>
<?php 
  $size2=count($lichdaythu2); $temp2=0;
  $size3=count($lichdaythu3); $temp3=0;
  $size4=count($lichdaythu4); $temp4=0;
  $size5=count($lichdaythu5); $temp5=0;
  $size6=count($lichdaythu6); $temp6=0;
  $size7=count($lichdaythu7); $temp7=0;
  $sizeCN=count($lichdaychunhat); $tempCN=0; 
?>
<!-- ******CONTENT****** --> 
<div class="content container">
            <div class="page-wrapper">
	<header class="page-heading clearfix">
		<h1 class="heading-title pull-left">Lịch dạy</h1>
		<div class="breadcrumbs pull-right">
			<ul class="breadcrumbs-list">				
				<li><a href="giangvien">Trang chủ</a><i class="fas fa-angle-right"></i></li>
                <li><a href="giangvien">Giảng viên</a><i class="fas fa-angle-right"></i></li>                           
                <li class="current" style="padding-left:5px;"> Lịch dạy </li>
                
			</ul>
		</div><!--//breadcrumbs-->
	</header> 
	<div class="page-content">
		<div class="row page-row">
			<article class="welcome col-md-8 col-sm-7 courses-wrapper">
				<div class="featured-courses tabbed-info page-row">             
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab1" data-toggle="tab">Hôm nay: <?php echo e($ngay); ?></a></li>
                      <li><a href="#tab2" data-toggle="tab">Tuần: <?php echo e($tuan); ?></a></li>
                      <!-- <li><a href="#tab3" data-toggle="tab">New</a></li> -->
                    </ul>
                    <div class="tab-content">
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
                                                <?php $__currentLoopData = $lichday; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                  <td><?php echo e($a->tietbatdau); ?> - <?php echo e($a->tietketthuc); ?></td>
                                                    <td><?php echo e($a->ten_loaihoc); ?></td>
                                                    <td><?php echo e($a->tenmonhoc); ?></td>
                                                    <td><?php echo e($a->ma_lop); ?> - <?php echo e($a->ma_khoahoc); ?></td>
                                                    <td><?php echo e($a->tenphong); ?> - <?php echo e($a->nhahoc); ?></td>
                                                    <td><a href="#">Vào lớp</a></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </thead>
                                        </table><!--//table-->
                                    </div>
                                </div><!--//jobs-wrapper-->
                              </div><!--//item-->                                       
                          </div><!--//row-->
                      </div>
                      <div class="tab-pane" id="tab2">
                          <div class="row">
                              <div class="item col-md-12 col-sm-6 col-xs-6">
                                <div class="jobs-wrapper col-md-12 col-sm-12">
                                    <div class="table-responsive">                    
                                        <table class="table table-boxed table-bordered table-striped text-center">
                                            <thead>
                                                
                                                 <tr>
                                                    <th>Thứ</th>
                                                    <th>Thời gian</th>
                                                    <th>Loại</th>
                                                    <th>Môn học</th>
                                                    <th>Lớp - Khóa</th>
                                                    <th>Phòng học</th>
                                                    <th>Trạng thái</th>                                               
                                                </tr>

                                              <?php if($size2!=0){ ?>
                                                <?php $__currentLoopData = $lichdaythu2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                  <?php if($temp2==0){ ?>
                                                    <td <?php if($size2>1){?> rowspan="<?php echo $size2; ?>" <?php } ?> ><?php echo e($a->ma_thu); ?></td>
                                                  <?php $temp2=$temp2+1; } ?>
                                                  <td><?php echo e($a->tietbatdau); ?> - <?php echo e($a->tietketthuc); ?></td>
                                                    <td><?php echo e($a->ten_loaihoc); ?></td>
                                                    <td><?php echo e($a->tenmonhoc); ?></td>
                                                    <td><?php echo e($a->ma_lop); ?> - <?php echo e($a->ma_khoahoc); ?></td>
                                                    <td><?php echo e($a->tenphong); ?> - <?php echo e($a->nhahoc); ?></td>
                                                    <td><a href="#">Vào lớp</a></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <?php } ?>

                                              <?php if($size3!=0){ ?>
                                                <?php $__currentLoopData = $lichdaythu3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                  <?php if($temp3==0){ ?>
                                                    <td <?php if($size3>1){?> rowspan="<?php echo $size3; ?>" <?php } ?> ><?php echo e($a->ma_thu); ?></td>
                                                  <?php $temp3=$temp3+1; } ?>
                                                  <td><?php echo e($a->tietbatdau); ?> - <?php echo e($a->tietketthuc); ?></td>
                                                    <td><?php echo e($a->ten_loaihoc); ?></td>
                                                    <td><?php echo e($a->tenmonhoc); ?></td>
                                                    <td><?php echo e($a->ma_lop); ?> - <?php echo e($a->ma_khoahoc); ?></td>
                                                    <td><?php echo e($a->tenphong); ?> - <?php echo e($a->nhahoc); ?></td>
                                                    <td><a href="#">Vào lớp</a></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <?php } ?>

                                              <?php if($size4!=0){ ?>
                                                <?php $__currentLoopData = $lichdaythu4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                  <?php if($temp4==0){ ?>
                                                    <td <?php if($size4>1){?> rowspan="<?php echo $size4; ?>" <?php } ?> ><?php echo e($a->ma_thu); ?></td>
                                                  <?php $temp2=$temp2+1; } ?>
                                                  <td><?php echo e($a->tietbatdau); ?> - <?php echo e($a->tietketthuc); ?></td>
                                                    <td><?php echo e($a->ten_loaihoc); ?></td>
                                                    <td><?php echo e($a->tenmonhoc); ?></td>
                                                    <td><?php echo e($a->ma_lop); ?> - <?php echo e($a->ma_khoahoc); ?></td>
                                                    <td><?php echo e($a->tenphong); ?> - <?php echo e($a->nhahoc); ?></td>
                                                    <td><a href="#">Vào lớp</a></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <?php } ?>

                                             <?php if($size5!=0){ ?>
                                                <?php $__currentLoopData = $lichdaythu5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                  <?php if($temp5==0){ ?>
                                                    <td <?php if($size5>1){?> rowspan="<?php echo $size5; ?>" <?php } ?> ><?php echo e($a->ma_thu); ?></td>
                                                  <?php $temp5=$temp5+1; } ?>
                                                  <td><?php echo e($a->tietbatdau); ?> - <?php echo e($a->tietketthuc); ?></td>
                                                    <td><?php echo e($a->ten_loaihoc); ?></td>
                                                    <td><?php echo e($a->tenmonhoc); ?></td>
                                                    <td><?php echo e($a->ma_lop); ?> - <?php echo e($a->ma_khoahoc); ?></td>
                                                    <td><?php echo e($a->tenphong); ?> - <?php echo e($a->nhahoc); ?></td>
                                                    <td><a href="#">Vào lớp</a></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <?php } ?>

                                              <?php if($size6!=0){ ?>
                                                <?php $__currentLoopData = $lichdaythu6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                  <?php if($temp6==0){ ?>
                                                    <td <?php if($size6>1){?> rowspan="<?php echo $size6; ?>" <?php } ?> ><?php echo e($a->ma_thu); ?></td>
                                                  <?php $temp6=$temp6+1; } ?>
                                                  <td><?php echo e($a->tietbatdau); ?> - <?php echo e($a->tietketthuc); ?></td>
                                                    <td><?php echo e($a->ten_loaihoc); ?></td>
                                                    <td><?php echo e($a->tenmonhoc); ?></td>
                                                    <td><?php echo e($a->ma_lop); ?> - <?php echo e($a->ma_khoahoc); ?></td>
                                                    <td><?php echo e($a->tenphong); ?> - <?php echo e($a->nhahoc); ?></td>
                                                    <td><a href="#">Vào lớp</a></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <?php } ?>

                                              <?php if($size7!=0){ ?>
                                                <?php $__currentLoopData = $lichdaythu7; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                  <?php if($temp7==0){ ?>
                                                    <td <?php if($size7>1){?> rowspan="<?php echo $size7; ?>" <?php } ?> ><?php echo e($a->ma_thu); ?></td>
                                                  <?php $temp7=$temp7+1; } ?>
                                                  <td><?php echo e($a->tietbatdau); ?> - <?php echo e($a->tietketthuc); ?></td>
                                                    <td><?php echo e($a->ten_loaihoc); ?></td>
                                                    <td><?php echo e($a->tenmonhoc); ?></td>
                                                    <td><?php echo e($a->ma_lop); ?> - <?php echo e($a->ma_khoahoc); ?></td>
                                                    <td><?php echo e($a->tenphong); ?> - <?php echo e($a->nhahoc); ?></td>
                                                    <td><a href="#">Vào lớp</a></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <?php } ?>

                                              <?php if($sizeCN!=0){ ?>
                                                <?php $__currentLoopData = $lichdaychunhat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                  <?php if($tempCN==0){ ?>
                                                    <td <?php if($sizeCN>1){?> rowspan="<?php echo $sizeCN; ?>" <?php } ?> ><?php echo e($a->ma_thu); ?></td>
                                                  <?php $temp2=$temp2+1; } ?>
                                                  <td><?php echo e($a->tietbatdau); ?> - <?php echo e($a->tietketthuc); ?></td>
                                                    <td><?php echo e($a->ten_loaihoc); ?></td>
                                                    <td><?php echo e($a->tenmonhoc); ?></td>
                                                    <td><?php echo e($a->ma_lop); ?> - <?php echo e($a->ma_khoahoc); ?></td>
                                                    <td><?php echo e($a->tenphong); ?> - <?php echo e($a->nhahoc); ?></td>
                                                    <td><a href="#">Vào lớp</a></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <?php } ?>
                                            </thead>
                                        </table><!--//table-->
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
<?php echo $__env->make('layout_giangvien.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\DOANTN\resources\views/giangvien/lichday.blade.php ENDPATH**/ ?>