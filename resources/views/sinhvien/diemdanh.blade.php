
@extends('layout_sinhvien.index')

@section('content')

<!-- ******CONTENT****** --> 
<div class="content container">
            <div class="page-wrapper">
	<header class="page-heading clearfix">
		<h1 class="heading-title pull-left">Dữ liệu điểm danh</h1>
		<div class="breadcrumbs pull-right">
			<ul class="breadcrumbs-list">				
				<li><a href="#">Trang chủ</a><i class="fas fa-angle-right"></i></li>
                <li><a href="sinhvien">Sinh viên</a><i class="fas fa-angle-right"></i></li>
				<li class="current" style="padding-left:5px">Dữ liệu điểm danh</li>
			</ul>
		</div><!--//breadcrumbs-->
	</header> 
	<div class="page-content">
		<div class="row page-row">
			<article class="welcome col-md-12 col-sm-7 courses-wrapper">
				<div class="featured-courses tabbed-info page-row">             
                    <ul class="nav nav-tabs">
                      <!-- <li><a href="#tab3" data-toggle="tab">New</a></li> -->
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab2">
                          <div class="row">
                          	<div class="table-responsive">  
                                        <form>
                                            <table>
                                                    <td style="padding:0px 20px 0px 30px"><label><strong>Xem các môn học khác</strong></label>
                                                        <select id ="cbmonhoc" name="cbmonhoc" class="form-control"  style="border-radius:3px">
                                                            
                                                                 
                                                                <option  value=""></option>
                                                                
                                                        </select>
                                                    </td>
                                                    <td style="padding:20px 20px 0px 0px">
                                                        <!-- <select id = "cbloai" name="cbloai" class="form-control" style="border-radius:3px">
                                                            <option value="LT">Lý thuyết</option>
                                                            <option value="TH">Thực hành</option>
                                                        </select> -->
                                                    </td>
                                                    <td style="padding-top:20px">
														<button type="" class="btn btn-primary" style="border-radius:5px">Xem</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
							</div>
                              <div class="item col-md-12 col-sm-12 col-xs-12">
                                  <p>Dữ liệu điểm danh môn: Cơ sở dữ liệu - TH </p>
                                  <div class="jobs-wrapper col-md-12 col-sm-12">
                                    <div class="table-responsive">                      
                                        <table class="table table-boxed table-bordered table-striped text-center">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>MSSV</th>
                                                    <th>Họ tên</th>
                                                    <th>Giới tính</th>
                                                    <th>Ngày sinh</th>

                                                <?php for($i=1;$i<=$sobuoi;$i++){ ?>
                                                    <th>Buổi <?php echo $i; ?></th>
                                                <?php } ?> 

                                                    <th>Thống kê</th>
                                                    <th>Điểm cộng</th>
                                                    <th>Ghi chú</th>
                                                </tr>

                                                @foreach($masv as $key=>$a)
                                                <tr>
                                                	<td>{{$key+1}}</td>
                                                    <td>{{$a->ma_sv}}</td>
                                                    <td>{{$a->hoten}}</td>
                                                    <td>{{$a->gioitinh}}</td>
                                                    <td>{{$a->ngaysinh}}</td>
                                                
                                                @for($i=1;$i<=$sobuoi;$i++)
                                                    <td>{{$a->$i}}</td>
                                                @endfor
                                                
                                                    <td>Tổng:{{$sobuoi}} <br>Vắng: 0<br>Muộn: 0</td>
                                                    <td>(trống)</td>
                                                    <td>Đạt</td>
                                                </tr>
                                                @endforeach
                                            </thead>
                                            	<!--<tr>
                                            	<td colspan="19" class="text-right"><input type="submit" value="Cập nhật"></td>
                                            	</tr>-->
                                        </table><!--//table-->
                                    </div>
                                </div><!--//jobs-wrapper-->
                              </div><!--//item-->                                       
                          </div><!--//row-->                               
                      </div>
                    </div>
                </div>			
			</article><!--//page-content-->
			
		</div><!--//page-row-->
	</div><!--//page-content-->
</div>
</div><!--//content-->

<!-- <script>
    $(document).ready(function($){
        $('#cbmonhoc').change(function(){
            var rs = $('#cbmonhoc option:selected').data('mon').toString();
            var combo=$('#cbloai');
            combo.empty();
            switch(rs)
            {
                case "01": combo.append("<option value='1'>Thực hành</option>"); break;
                case "11": combo.append("<option value='0'>Lý thuyết</option>"); 
                           combo.append("<option value='1'>Thực hành</option>"); 
                           break;
                case "10": combo.append("<option value='0'>Lý thuyết</option>"); break;
                default: combo.append("<option>--Loai hoc phan--</option>"); break;
            };
            
        });
    });
</script> -->

@endsection