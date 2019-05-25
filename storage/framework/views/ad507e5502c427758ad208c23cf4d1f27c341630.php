<!-- ******NAV****** -->
<nav class="main-nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button><!--//nav-toggle-->
        </div><!--//navbar-header-->            
        <div class="navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="#"> <i class="fas fa-home"></i> Trang chủ </a></li>
                <li class="nav-item"><a href="#"> <i class="fas fa-bullhorn fa-fw fa-lg"></i> Tin tức</a></li>
                <li class="nav-item"><a href="#"> <i class="far fa-calendar-alt fa-fw fa-lg"></i> Sự kiện</a></li>
                <li class="nav-item"><a href="#"> <i class="fas fa-info-circle fa-fw fa-lg"></i> Giới thiệu</a></li>
                                                                    <li class="nav-item">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#"> <i class="fas fa-book fa-fw fa-lg"></i> Sinh viên <i class="fas fa-angle-down"></i></a>
                    <ul class="dropdown-menu">                       
                        <li><a href="#"> <i class="fas fa-fw fa-calendar"></i> Lịch thi </a></li>
                        <!--<li><a href="#"> <i class="fas fa-fw fa-list-alt"></i> Bảng điểm </a></li>-->
                        <li><a href="#"> <i class="fas fa-fw fa-calendar"></i> Thời khóa biểu </a></li>
                        <li><a href="#"> <i class="fas fa-fw fa-list-alt"></i> Dữ liệu điểm danh </a></li>
                    </ul>
                </li>
                                            </ul><!--//nav-->
                        <ul class="nav navbar-nav navbar-right">  
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="  color: #fff;text-transform: uppercase;">
                        <i class="fas fa-user fa-fw fa-lg"></i>                     
                         <?php echo e(Auth::user()->username); ?>

                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-content">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="boot_asset/Đăng nhập hệ thống - HACTECH/attendance-157x88.jpg" alt="Alternate Text" class="img-responsive">
                                        <p class="text-center small"></p>
                                        </div>
                                        <div class="col-md-7">
                                            <span><?php echo e(Auth::user()->username); ?></span>
                                               
                                            </div>
                                </div>
                            </div>
                            <div class="navbar-footer">
                                <div class="navbar-footer-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <a href="<?php echo e(asset('logout')); ?>" class="btn btn-danger btn-sm pull-right"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
                </div><!--//navabr-collapse-->
    </div><!--//container-->
</nav><!--//main-nav-->  <?php /**PATH C:\xampp\htdocs\DO_AN_GIT\resources\views/layout_sinhvien/menu.blade.php ENDPATH**/ ?>