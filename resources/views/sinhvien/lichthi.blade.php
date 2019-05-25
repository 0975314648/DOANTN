
@extends('layout_sinhvien.index')

@section('content')

<!-- ******CONTENT****** --> 
<div class="content container">
            <div class="page-wrapper">
	<header class="page-heading clearfix">
		<h1 class="heading-title pull-left">Lịch thi chi tiết</h1>
		<div class="breadcrumbs pull-right">
			<ul class="breadcrumbs-list">				
				<li><a href="#">Trang chủ</a><i class="fas fa-angle-right"></i></li>
                <li><a href="#">Sinh viên</a><i class="fas fa-angle-right"></i></li>
				<li class="current" style="padding-left:5px">Lịch thi</li>
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
                              <div class="item col-md-12 col-sm-12 col-xs-12">
                                  <div class="jobs-wrapper col-md-12 col-sm-12">
                                    <div class="table-responsive">                      
                                    	<table class="table table-boxed table-bordered table-striped">
                        					<thead>
                                            <tr>
                                                <th>Ngày thi</th>
                                                <th>Giờ thi</th>
                                                <th>Môn thi</th>
                                                <th>Phòng thi</th>
                                                <th>Trạng thái</th>                                               
                                            </tr>
                        					</thead>
                       						<tbody>
                                            <tr class="danger">
                                				<td colspan="8" class="text-center lead text-danger"> Không tìm thấy dữ liệu thi. </td>
                            				</tr>
                                            </tbody>
                    					</table><!--//table-->
                                    </div>
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fas fa-link"></i> Tập tin đính kèm ( 1 )</h3>
                                        </div>
                                        <div class="panel-body">
                                            <ol>
                                                <li><a href="#">Lich-thi-hoc-ky-2</a></li>                            
                                            </ol>
                                        </div>
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

@endsection