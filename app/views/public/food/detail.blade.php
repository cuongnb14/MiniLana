@extends("layout.public.main_layout")
@section('content')
<!--     {{debug($food->steps)}} -->
	<div id="content-details" class="container-fluid">
			<div class="row">
				<div class="col-md-4" id="food-thumnail">
<!-- 					<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" alt="image food"> -->
					<img src="{{Food::getUrlImage($food->id)}}" alt="image food">
				</div>
				<div class="col-md-8">
					<h1 id="name">{{$food->name}}</h1>
					<p id="decription">
						{{$food->description}}
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
						      <td>{{$food->level}}</td>
						      <td>{{$food->prepare}}</td>
						      <td>{{$food->time}}</td>
						    </tr>
						  </tbody>
						</table> 
					</div>
				</div>
			</div>

			<div id="tip">
				<h3>Mách nhỏ</h3>
				<p>{{$food->tip}}</p>
			</div>
			
			<div id="food-info">
				<ul class="nav nav-tabs">
				  <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-list"></i> Nguyên liệu</a></li>
				  <li><a href="#profile" data-toggle="tab"><i class="fa fa-list"></i> Các bước thực hiện</a></li>
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
						<?php $i=1;?>
						  @foreach($food->steps as $step)
							<li><span class="step">{{$i++}}</span> {{$step}}</li>
						  @endforeach
						</ul>
					</div>
				  </div>
				</div>				
			</div>
		</div>
@stop