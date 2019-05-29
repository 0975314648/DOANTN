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
                      <li class="active"><a href="#tab1" data-toggle="tab">Thống kê điểm danh</a></li>
                      
                    </ul>
                    <div class="tab-content">
                        <div class="table-responsive">  
                            <form action="giangvien/thongke/chitiet">
                                <table>
                                    <tr>
                                        <td><label><strong>Lớp</strong></label>
                                            <select class="form-control" style="border-radius:3px">
                                                <?php $__currentLoopData = $thongke; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option name="malop" value="<?php echo e($p->ma_lop); ?>-<?php echo e($p->ma_khoahoc); ?>"><?php echo e($p->ma_lop); ?> - <?php echo e($p->ma_khoahoc); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </td>
                                        <td style="padding:0px 30px 0px 30px"><label><strong>Môn học</strong></label>
                                            <select class="form-control" style="border-radius:3px">

                                                <?php $__currentLoopData = $thongke; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option name="mamon" value="<?php echo e($p->tenmonhoc); ?>"><?php echo e($p->tenmonhoc); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            </select>
                                        </td>
                                        <td style="padding:0px 30px 0px 0px"><label><strong>Loại</strong></label>
                                            <select class="form-control" style="border-radius:3px">
                                                <?php $__currentLoopData = $thongke; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option name="loaihoc" value="<?php echo e($p->ten_loaihoc); ?>"><?php echo e($p->ten_loaihoc); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </td>
                                        <td style="padding-top:20px">
                                            <button type="submit" class="btn btn-primary" >Đồng ý</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div><!--//jobs-wrapper-->
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
    </section><!--//widget-->           </aside>
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div>
</div><!--//content-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_giangvien.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DOANTN\resources\views/giangvien/thongkediemdanh.blade.php ENDPATH**/ ?>