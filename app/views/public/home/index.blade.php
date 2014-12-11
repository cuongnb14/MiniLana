@extends("layout.public.main_layout")
@section('content')
    <div id="banner" class="container-fluid">
				<div id="imenu" class="col-md-4 animated fadeInLeftBig">
					<ul class="list-unstyled level-1 ">
						<li><a href="#"><i class="fa fa-list"></i> Theo cách chế biến</a>
							<ul class="list-unstyled level-2 animated zoomIn">
								<li><a href="#">Giỏi cuốn</a>
									<div class="sample animated zoomIn">
										<div class="item-wrapper">
											<div class="item container-fluid">
												<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
													class="col-md-4">
												<div class="col-md-8">
													<h3>Ten mon</h3>
													<span>Mo ta</span>
												</div>

											</div>
										</div>

										<div class="item-wrapper">
											<div class="item container-fluid">
												<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
													class="col-md-4">
												<div class="col-md-8">
													<h3>Ten mon</h3>
													<span>Mo ta</span>
												</div>

											</div>
										</div>
									</div></li>

								<li><a href="#">Trộn Salat</a>
									<div class="sample animated zoomIn">
										<div class="item-wrapper">
											<div class="item container-fluid">
												<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
													class="col-md-4">
												<div class="col-md-8">
													<h3>Ten mon</h3>
													<span>Mo ta</span>
												</div>

											</div>
										</div>

										<div class="item-wrapper">
											<div class="item container-fluid">
												<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
													class="col-md-4">
												<div class="col-md-8">
													<h3>Ten mon</h3>
													<span>Mo ta</span>
												</div>

											</div>
										</div>
									</div></li>
								<li><a href="#">Kho</a>
									<div class="sample animated zoomIn">
										<div class="item-wrapper">
											<div class="item container-fluid">
												<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
													class="col-md-4">
												<div class="col-md-8">
													<h3>Ten mon</h3>
													<span>Mo ta</span>
												</div>

											</div>
										</div>

										<div class="item-wrapper">
											<div class="item container-fluid">
												<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
													class="col-md-4">
												<div class="col-md-8">
													<h3>Ten mon</h3>
													<span>Mo ta</span>
												</div>

											</div>
										</div>
									</div></li>
							</ul></li>

						<li><a href="#"><i class="fa fa-list"></i> Theo nguyên liệu</a>
							<ul class="list-unstyled level-2 animated zoomIn">
								<li><a href="#">Mon Vip</a>
									<div class="sample">
										<img width="150em" height="150em" src="images/sample-2.jpg">
									</div></li>

								<li><a href="#">Mon Vip</a>
									<div class="sample">
										<img width="150em" height="150em" src="images/sample-2.jpg">
									</div></li>
							</ul></li>

						<li><a href="#"><i class="fa fa-list"></i> Theo đối tượng</a>
							<ul class="list-unstyled level-2 animated zoomIn">
								<li><a href="#">Mon Vip</a>
									<div class="sample">
										<img width="150em" height="150em" src="images/sample-2.jpg">
									</div></li>

								<li><a href="#">Mon Vip</a>
									<div class="sample">
										<img width="150em" height="150em" src="images/sample-2.jpg">
									</div></li>
							</ul></li>

						<li><a href="#"><i class="fa fa-list"></i> Theo nguyên liệu</a>
							<ul class="list-unstyled level-2 animated zoomIn">
								<li><a href="#">Mon Vip</a>
									<div class="sample">
										<img width="150em" height="150em" src="images/sample-2.jpg">
									</div></li>

								<li><a href="#">Mon Vip</a>
									<div class="sample">
										<img width="150em" height="150em" src="images/sample-2.jpg">
									</div></li>
							</ul></li>


					</ul>
				</div>

				<div id="slide" class="col-md-8 animated fadeInRightBig">
					<!-- Start WOWSlider.com -->
					<iframe src="{{URL::route('slide')}}"
						style="width: 830px; height: 360px; max-width: 100%; overflow: hidden; border: none; padding: 0; margin: 0 auto; display: block;"
						marginheight="0" marginwidth="0" scrolling="no"></iframe>
					<!-- End WOWSlider.com -->
				</div>
			</div>
			<!-- End #banner -->
			<div id="menu-food" class=" row">

				<div class="box col-md-4 animated fadeInUp">
					<div class="box-container animated">
						<div class="box3 ">
							<h3>Thực đơn</h3>
							<span>mỗi ngày</span>
						</div>
					</div>
				</div>
				<div class="box col-md-4 animated fadeInUp">
					<div class="box-container animated">
						<div class="box3 ">
							<h3>Thực đơn</h3>
							<span>mỗi ngày</span>
						</div>
					</div>
				</div>
				<div class="box col-md-4 animated fadeInUp">
					<div class="box-container animated">
						<div class="box3 ">
							<h3>Thực đơn</h3>
							<span>mỗi ngày</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End #heafer -->

		<div id="content" class="container-fluid">
			<div class="big-box container-fluid">
				<h3 class="box-title">Các món gần đây</h3>
				<div class="box-body container-fluid">
					<div class="item-wrapper col-md-4 border-fade">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

					<div class="item-wrapper col-md-4 border-fade">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

					<div class="item-wrapper col-md-4 border-fade">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

					<div class="item-wrapper col-md-4 border-fade">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

					<div class="item-wrapper col-md-4 border-fade">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

					<div class="item-wrapper col-md-4 border-fade">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

					<div class="item-wrapper col-md-4">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

				</div>
			</div>

			<div class="big-box container-fluid">
				<h3 class="box-title">Các món đặc biệt</h3>
				<div class="box-body container-fluid">
					<div class="item-wrapper col-md-4">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

					<div class="item-wrapper col-md-4">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

					<div class="item-wrapper col-md-4">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

					<div class="item-wrapper col-md-4">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

					<div class="item-wrapper col-md-4">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

					<div class="item-wrapper col-md-4">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

					<div class="item-wrapper col-md-4">
						<div class="item container-fluid">
							<img src="{{asset('public/assets/datastore/images_food/food.jpg')}}" width="100%" height="100%"
								class="col-md-4">
							<div class="col-md-8">
								<h3>Ten mon</h3>
								<span>Mo ta</span>
							</div>

						</div>
					</div>

				</div>
			</div>


		</div>
@stop