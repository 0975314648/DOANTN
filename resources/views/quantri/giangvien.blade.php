@extends('layout_quantri.index')

@section('content')
<span style="font-weight:bold; font-size:14px;">DANH SÁCH GIÁO VIÊN</span>
                <div class="header-table">
                    <div class="search">
                        <form class="navbar-form navbar-left" action="" method="get">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm" name="search" id="search">
                            </div>
                            <button type="submit" class="btn btn-default">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="button">
                            <button type="button" class="btn btn-primary" name="add-gv" id="add-gv">Thêm mới</button>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã GV</th>
                            <th>Họ tên</th>
                            <th>Ngày sinh</th>
                            <th>GT</th>
                            <th>SĐT</th>
                            <th>Địa chỉ</th>
                            <th>Email</th>
                            <th>Chức vụ</th>
                            <th>TT</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($gvien as $gv)
                        <tr>
                            <td>{{$dem++}}</td>
                            <td>{{$gv->ma_gv}}</td>
                            <td>{{$gv->hoten}}</td>
                            <td>{{$gv->ngaysinh}}</td>
                            <td>{{$gv->gioitinh}}</td>
                            <td>{{$gv->sdt}}</td>
                            <td>{{$gv->diachi}}</td>
                            <td>{{$gv->email}}</td>
                            <td>{{$gv->chucvu}}</td>
                            <td><span class="fas fa-edit"></span>
                                <span class="fas fa-times"></span>
                            </td>
                        </tr>
                    @endforeach    
                    </tbody>
                </table>
                <div class="number-page">
                    <ul class="pagination">
                        @if($gvien->currentPage() != 1)
                        <li><a href="{{$gvien->url($gvien->currentPage() - 1)}}">&laquo;</a></li>
                        @endif
                        @for($i = 1;$i <= $gvien->lastPage(); $i++)
                        <li class="{{($gvien->currentPage() == $i) ? 'active' : ''}}">
                            <a href="{{$gvien->url($i)}}">{{$i}}</a>
                        </li>
                        @endfor
                        @if($gvien->currentPage() != $gvien->lastPage())
                        <li><a href="{{$gvien->url($gvien->currentPage() + 1)}}">&raquo;</a></li>
                        @endif
                    </ul>
                </div>
@stop

@section('popupDiv')
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
                        <td>Mã giảng viên</td>
                        <td><input type="text" name="magv" class="form-control" id="magv" placeholder="Mã giảng viên"></td>
                    </tr>
                    <tr>
                        <td>Họ tên</td>
                        <td><input type="text" name="hoten" class="form-control" id="hoten" placeholder="Họ và tên"></td>
                    </tr>
                    <tr>
                        <td>Ngày sinh</td>
                        <td><input type="text" name="ngaysinh" class="form-control" id="ngaysinh" placeholder="Ngày sinh"></td>
                    </tr>
                    <tr>
                        <td>Giới tính</td>
                        <td><input type="text" name="gt" class="form-control" id="gt" placeholder="Giới tính"></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td><input type="text" name="sdt" class="form-control" id="sdt" placeholder="Số điện thoại"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="diachi" class="form-control" id="diachi" placeholder="Địa chỉ"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" class="form-control" id="email" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td>Chức vụ</td>
                        <td><input type="text" name="chucvu" class="form-control" id="chucvu" placeholder="Chức vụ "></td>
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
        <div class="bg-fade" id="bg-fade"></div>
        <script>
            $(document).ready(function () {

                TableManaged.init();
                
                $('#add-gv').click(function(e){
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
@stop