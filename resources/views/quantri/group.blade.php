@extends('layout_quantri.index')

@section('content')
                <span style="font-weight:bold; font-size:14px;">DANH SÁCH NHÓM NGƯỜI DÙNG</span>
                <div class="header-table">
                    <div class="search">
                        <form class="navbar-form navbar-left" action="/action_page.php">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm">
                            </div>
                            <button type="submit" class="btn btn-default">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="button">
                            <button type="button" class="btn btn-primary" onclick="showpopupDiv()">Thêm mới</button>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên nhóm người dùng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Giáo viên</td>
                            <td><span class="fas fa-edit"></span>
                                <span class="fas fa-times"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Học sinh</td>
                            <td><span class="fas fa-edit"></span>
                                <span class="fas fa-times"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Admin</td>
                            <td><span class="fas fa-edit"></span>
                                <span class="fas fa-times"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="number-page">
                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>

@stop

@section('popupDiv')
<div class="popupDiv" id="popupDiv">
        <label for=""><span class="fas fa-pencil-alt"></span> Thêm mới giáo viên</label>
        <form action="" method="get">
            <table>
                <tr>
                    <td>Họ tên</td>
                    <td><input type="text" class="form-control" id="hoten" placeholder="Họ tên"></td>
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td><input type="text" class="form-control" id="ngaysinh" placeholder="Ngày sinh"></td>
                </tr>
                <tr>
                    <td>Khoa</td>
                    <td><input type="text" class="form-control" id="mssv" placeholder="Khoa"></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type="text" class="form-control" id="sdt" placeholder="Số điện thoại"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <button type="button" class="btn btn-primary">Lưu</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="hidepopupDiv()">Hủy bỏ</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <!--/popupDiv-->
        <div class="bg-fade" id="bg-fade"></div>
        <script>
                jQuery(document).ready(function() {
                   TableManaged.init();
                });
        
                function showpopupDiv() {
                    document.getElementById('popupDiv').style.display = "block";
                    document.getElementById('bg-fade').style.display = "block";
                }
        
                function hidepopupDiv(){
                    document.getElementById('popupDiv').style.display = "none";
                    document.getElementById('bg-fade').style.display = "none";
                }
            </script>
@stop