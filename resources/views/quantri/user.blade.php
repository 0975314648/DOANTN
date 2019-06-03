@extends('layout_quantri.index')

@section('content')

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
                            <button type="button" class="btn btn-primary" onclick="showpopupDiv()">Thêm mới</button>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên người dùng</th>
                            <th>username</th>
                            <th>Khả dụng</th>
                            <th>Loại tài khoản</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $a)
                        <tr>
                            <td>{{$dem++}}</td>
                            <td>{{$a->fullname}}</td>
                            <td>{{$a->username}}</td>
                            <td><input type="checkbox" name="khadung[]" id="khadung" value="{{$a->status}}" @if($a->status==1) checked @endif ></td>
                            <td>@if($a->level==1) Admin
                                @elseif($a->level==2) Giảng viên
                                @else Sinh viên
                                @endif
                            </td>
                            <td><span class="fas fa-edit"></span>
                                <span class="fas fa-times"></span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="number-page">
                    <ul class="pagination">
                        @if($user->currentPage() != 1)
                        <li><a href="{{$user->url($user->currentPage() - 1)}}">&laquo;</a></li>
                        @endif
                        @for($i = 1;$i <= $user->lastPage(); $i++)
                        <li class="{{($user->currentPage() == $i) ? 'active' : ''}}">
                            <a href="{{$user->url($i)}}">{{$i}}</a>
                        </li>
                        @endfor
                        @if($user->currentPage() != $user->lastPage())
                        <li><a href="{{$user->url($user->currentPage() + 1)}}">&raquo;</a></li>
                        @endif
                    </ul>
                </div>
@stop

@section('popupDiv')
    
    <!-- popupDiv -->
    <div class="popupDiv" id="popupDiv" name="popupDiv" value="1">
        <label for=""><span class="fas fa-pencil-alt"></span> Thêm mới/Sửa người dùng</label>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Họ tên</td>
                    <td><input type="text" name="hoten" class="form-control" id="hoten" placeholder="Họ tên"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" class="form-control" id="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" class="form-control" id="password" placeholder="Password "></td>
                </tr>
                <tr>
                    <td>Active</td>
                    <td><input type="checkbox" name="trangthai" id="trangthai" value="1"></td>
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
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <button type="button" class="btn btn-primary" name="btn-Luu" id="btn-Luu">Lưu</button>
                        <!--<a href="#" class="btn btn-primary">Lưu</a>-->
                        <button type="button" class="btn btn-danger btn-sm" onclick="hidepopupDiv()">Hủy bỏ</button>
                    </td>
                </tr>
            </table>
            {{csrf_field()}}
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
                /*$(document).ready(function(){
                    $("#btn-Luu").Click(function(){
                        var fullname = $("#hoten").val();
                        var username = $("#username").val();
                        var password = $("#password").val();
                        var trangthai = $("#trangthai").val();
                        var loaitk = $("#loaitk").val();
                        var token = $("#token").val();

                        $.ajax({
                            type: "post",
                            data: "fullname= " + fullname + "username= " + username + "password= " + password + 
                                "trangthai= " + trangthai + "loaitk= " + loaitk + "token= " + token,
                            url: "<?php echo url('quantrihethong/user') ?>"
                            success: function(data){
                                console.log(data);
                            }
                        });
                    });
                });*/
            </script>
            
@stop