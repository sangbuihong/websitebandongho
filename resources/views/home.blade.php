@extends('main')

@section('content')

   <!-- Slider -->
	@include('slider')


	<!-- Banner -->
	@include('banner')


	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-66">
                <h3 class="row cl5 txt-center respon1">
                    <div class="col-sm-4">
                        <hr style = "background-color:rgb(0, 0, 0); width:70%;float:left;height:10px">
                        <hr style = "background-color:rgb(167, 167, 167);height:10px">
                    </div>
                    <div class="col-sm-4 stext-101" ><h2>Sản Phẩm</h2></div>
                    <div class="col-sm-4">
                        <hr style = "background-color:rgb(0, 0, 0); width:70%;float:right;height:10px">
                        <hr style = "background-color:rgb(167, 167, 167);height:10px">
                    </div>
                </h3>
            </div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10" >
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
						Tất cả sản phẩm
					</button>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter"
                    style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Lọc
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search"
                    style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Tìm
					</div>
				</div>

				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sắp xếp
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="{{ request()->url() }}" class="filter-link stext-106 trans-04">
                                        Mặc định
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ request()->fullUrlWithQuery(['price' => 'asc']) }}" class="filter-link stext-106 trans-04">
                                        A-Z
                                    </a>
                                </li>

                                <li class="p-b-6">
                                    <a href="{{ request()->fullUrlWithQuery(['price' => 'desc']) }}" class="filter-link stext-106 trans-04">
                                        Z-A
                                    </a>
                                </li>
                            </ul>
                        </div>

						<div class="filter-col1 p-r-15 p-b-27">
							<div class=" cl2 p-b-15">
								Giá
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link  trans-04 filter-link-active">
										Tất cả
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link  trans-04">
										0k - 500k
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link  trans-04">
										500k - 1000k
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link  trans-04">
										1000k - 5000k
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link  trans-04">
										5000k - 10000k
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link  trans-04">
										10000k +
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col1 p-r-15 p-b-27">
							<div class=" cl2 p-b-15">
								Màu sắc
							</div>

							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link  trans-04 ">
										Đen
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link  trans-04 ">
										Xanh trời
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #dfdfdf;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link  trans-04">
										Bạc
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link  trans-04">
										Xanh lá cây
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link  trans-04">
										Đỏ
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #f7f200;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

									<a href="#" class="filter-link  trans-04">
										Vàng
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

            <div id="loadProduct">

			    @include('products.list')

            </div>
			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45" id="button-loadMore">
                <input type="hidden" value="1" id="page">
				<a onclick="loadMore()" class="flex-c-m cl5  stext-101 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Xem Thêm
				</a>
			</div>
		</div>
	</section>

    <!-- Blog -->
    @include('blogs.contents')
@endsection
