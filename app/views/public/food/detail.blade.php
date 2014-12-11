@extends("layout.public.main_layout")
@section('content')
	<div id="content-details" class="container-fluid">
			<div class="row">
				<div class="col-md-4" id="food-thumnail">
					<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" alt="image food">
				</div>
				<div class="col-md-8">
					<h1 id="name">Bò cuộn nấm kim châm</h1>
					<p id="decription">
						Thịt bò kết hợp với nấm kim châm cuộn lại ăn kèm với xốt thật là hấp dẫn. Đây là món ngon bạn có thể nấu cho cả nhà vào dịp cuối tuần. Nhanh gọn và dễ dàng để thực hiện ngay để có thể thu xếp thời gian nghỉ ngơi, đi đâu đó...
					</p>
					<div id="meta-data" class="col-md-5">
						<table class="table table-striped table-bordered">
						  <thead>
						    <tr>
						      <th>Mức độ</th>
						      <th>Chuẩn bị</th>
						      <th>Thực hiện</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="success">
						      <td>Trung bình</td>
						      <td>10 phút</td>
						      <td>10 phút</td>
						    </tr>
						  </tbody>
						</table> 
					</div>
				</div>
			</div>

			<div id="tip">
				<h3>Mach nho</h3>
				<p>mach no</p>
			</div>
			
			<div id="food-info">
				<ul class="nav nav-tabs">
				  <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-list"></i> Nguyen Lieu</a></li>
				  <li><a href="#profile" data-toggle="tab"><i class="fa fa-list"></i> Cac buoc thuc hien</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
				  <div class="tab-pane fade active in" id="home">
				    <div id="ingredients" class="row">
				
						<ul class="list-unstyled">
							<li><i class="fa fa-hand-o-right"></i> 200gr hạt sen tươi chọn loại hạt sen già 20gr đường phèn (có thể gia giảm tùy khẩu vị)</li>
							<li><i class="fa fa-hand-o-right"></i> 200gr hạt sen tươi chọn loại hạt sen già 20gr đường phèn (có thể gia giảm tùy khẩu vị)</li>
							<li><i class="fa fa-hand-o-right"></i> 200gr hạt sen tươi chọn loại hạt sen già 20gr đường phèn (có thể gia giảm tùy khẩu vị)</li>
						</ul>
					</div>
				  </div>
				  <div class="tab-pane fade" id="profile">
				    <div id="steps" class="row">
			
						<ul class="list-unstyled">
							<li><i class="fa fa-hand-o-right"></i> 200gr hạt sen tươi chọn loại hạt sen già 20gr đường phèn (có thể gia giảm tùy khẩu vị)</li>
							<li><i class="fa fa-hand-o-right"></i> 200gr hạt sen tươi chọn loại hạt sen già 20gr đường phèn (có thể gia giảm tùy khẩu vị)</li>
							<li><i class="fa fa-hand-o-right"></i> 200gr hạt sen tươi chọn loại hạt sen già 20gr đường phèn (có thể gia giảm tùy khẩu vị)</li>
						</ul>
					</div>
				  </div>
				</div>				
			</div>
			
			
			
			
		</div>
@stop