<?php $__env->startSection('content'); ?>

<span style="font-weight:bold; font-size:14px;">DANH SÁCH NGƯỜI DÙNG</span>
                <div class="header-table">
                    <div class="search">
                        <form class="navbar-form navbar-left" action="" method="get">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Tìm kiếm">
                            </div>
                            <button type="submit" class="btn btn-default">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="button">
                            <button type="button" class="btn btn-primary" id="add-user" name="add-user">Thêm mới</button>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>username</th>
                            <th>Loại tài khoản</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($dem++); ?></td>
                            <td><?php echo e($a->username); ?></td>
                            <td><?php if($a->level==1): ?> Admin
                                <?php elseif($a->level==2): ?> Giảng viên
                                <?php else: ?> Sinh viên
                                <?php endif; ?>
                            </td>
                            <td><span class="fas fa-edit"></span>
                                <span class="fas fa-times"></span>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="number-page">
                    <ul class="pagination">
                        <?php if($user->currentPage() != 1): ?>
                        <li><a href="<?php echo e($user->url($user->currentPage() - 1)); ?>">&laquo;</a></li>
                        <?php endif; ?>
                        <?php for($i = 1;$i <= $user->lastPage(); $i++): ?>
                        <li class="<?php echo e(($user->currentPage() == $i) ? 'active' : ''); ?>">
                            <a href="<?php echo e($user->url($i)); ?>"><?php echo e($i); ?></a>
                        </li>
                        <?php endfor; ?>
                        <?php if($user->currentPage() != $user->lastPage()): ?>
                        <li><a href="<?php echo e($user->url($user->currentPage() + 1)); ?>">&raquo;</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('popupDiv'); ?>
    
 <!--create Modal -->
 <div class="modal fade" id="createModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:white">Thêm/Sửa người dùng</h4>
        </div>
        <div class="modal-body">
            <form method="post" id="user-form">
                <span id="form_output"></span>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" class="form-control" id="username" placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" class="form-control" id="password" placeholder="Password "></td>
                    </tr>
                    <tr>
                        <td>Loại tài khoản</td>
                        <td>
                            <select name="loaitk" id="loaitk" class="form-control control">
                                <option value="1">Admin</option>
                                <option value="2">Giảng viên</option>
                                <option value="3">Sinh viên</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="modal-footer">
        <!-- <input type="hidden" name="button_action" id="button_action" value="insert">
        <input type="submit" name="submit" id="action" value="add" class="btn btn-primary"> -->
            <button type="button" class="btn btn-primary" name="btn-Luu" id="btn-Luu">Thêm</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
        </div>
      </div>
      
    </div>
  </div>

  <script>
        $(document).ready(function () {
            $('#add-user').click(function(e){
                $('#createModal').modal('show');
            });
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            $('#btn-Luu').click(function (e) {
                e.preventDefault();

                var user = $('#username').val();
                var password = $('#password').val();
                var loaitk = $('#loaitk').val();
                alert(user+"-"+password+"-"+loaitk);
                //alert(name+"-"+price1+"-"+price2+"-"+star+"-"+image)
                if(user != '' && password != ''){
                    $.ajax({
                        url:'quantrihethong/postuser',
                        method:"POST",
                        data:{
                            user: user,
                            password: password,
                            loaitk: loaitk,
                        },

                        
                        success:function(data) {
                            //$('#myModal').modal('hide');
                            //$('.list-product').append(data);
                        },
                        error:function (data) {
                            alert('qua trinh gui ajax that bai')
                        }
                    });
                }
                else{
                    alert('Chua nhap thong tin');
                }
            })
        })
    </script>
            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout_quantri.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DOANTN\resources\views/quantri/user.blade.php ENDPATH**/ ?>