@extends("layout.public.main_layout")
@section('content')
<div id="content" class="container-fluid">
			<div id="sidebar" class="col-md-2">
				<div id="imenu" class="col-md-12 animated bounceInLeft">
						<ul class="list-unstyled level-1">
						@foreach($categories as $category)
							<li><a href="#" >{{$category->name}}</a>
									<ul class="list-unstyled level-2 ">
									   @foreach($category->sub as $sub)
										<li><a href="{{URL::route('list',$sub->id)}}" >{{$sub->name}}</a>
										</li>
										@endforeach
									</ul>
							</li>
                        @endforeach
						</ul>
					</div>
			</div>
			<!-- End Sidebar -->

			<div id="main-content" class="col-md-10">
				<div class="big-box container-fluid">
				<h3 class="box-title-sm">{{$nameCategory}}</h3>
				<div class="box-body container-fluid">
				@foreach($foods as $food)
					<a href="{{URL::route('detail',$food->id)}}" class="item-wrapper col-md-4 border-fade">
						<div class="item container-fluid">
							<img src="{{Food::getUrlImage($food->id)}}" width="100%" height="100%" class="col-md-4">
							<div class="col-md-8">
								<h3>{{$food->name}}</h3>
								
								<span>{{$food->description}}</span>
							</div>
							
						</div>
					</a>
                @endforeach
				</div>
			</div>
			</div>
			<!-- End #main-content -->
			
			
		</div>
@stop