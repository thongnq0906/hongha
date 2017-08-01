@extends('frontend.layouts.app')
@section('title')
Chung cư Hồng Hà Eco City - Tứ Hiệp, Thanh Trì
@endsection
@section('main')
	
		<div class="slideshow">
			<div class="uk-slidenav-position" data-uk-slideshow="{kenburns:true, autoplay:true}">
	            <ul class="uk-slideshow uk-overlay-active" data-uk-slideshow="{kenburns:true}">
	            @foreach($slide as $s)
	                <li data-slideshow-slide="img">
	                	<img src="{{ $s->image}}">
	                	<div class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-left">
                            <h1>{{ $s->title }}</h1>
                            <!--<p>Con đường của vẻ đẹp kiêu sa, sang quý, của hoàn mỹ, vẹn toàn.</p>-->
                        </div>
                	</li>
                @endforeach
	            </ul>
	            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
			    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
	            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
	            	<?php $i=0; ?>
						@foreach($slide as $sli)
					        <li data-uk-slideshow-item="{{$i}}"><a href=""></a></li>
				        <?php $i++; ?>
					@endforeach
		    	</ul>
	        </div>
		</div>

		<div class="overview uk-grid ">
			<div class="over-item over-item-1 uk-width-large-1-2 uk-width-medium-1-2 uk-text-left">
				<div class="title"> Video dự án</div>
				<div class="videos">
					<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fqueenland.vn%2Fvideos%2F668422243343612%2F&show_text=0" width="100%" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
				</div>
			</div>
			<div class="over-item uk-width-large-1-2 uk-width-medium-1-2">
				<div class="uk-panel">
					<div class="title uk-text-center"> Tổng quan dự án	 </div>
					<div class="desc ">
						<p><b>Vị trí</b>: Nằm trên địa bàn xã Tứ Hiệp, huyện Thanh Trì, thành phố Hà Nội
							Gồm 3 tổ hợp: Toà nhà thương mại , Nhà ở xã hội , Trung tâm thương mại </br>
							<b>Tiện ích dự án</b>: Hồ bơi 500 m², nhà trẻ, phòng gym, siêu thị mini, nhà hàng, cà phê sân vườn…</p>
					</div>
					<div class="nav">
						<div class=" uk-grid">
							<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 media-heading">
								<div class="uk-card uk-card-default uk-card-body">
									<a class="media-left uk-width-1-6" href="{{ url('/')}}" >
										<img src="{{ asset('samples/icon-1.png') }}" alt="icon hồng hà eco city">
									</a>
									<div class="uk-width-5-6"><b>Diện tích dự án:</b></div>
									16,7 ha
								</div>
							</div>
							<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 media-heading">
								<div class="uk-card uk-card-default uk-card-body">
									<a class="media-left uk-width-1-6" href="{{ url('/')}}" >
										<img src="{{ asset('samples/icon-3.png') }}" alt="icon hồng hà eco city">
									</a>
									<div class="uk-width-5-6"><b>Mật độ xây dựng:</b></div>
									30 %
								</div>
							</div>
							<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 media-heading">
								<div class="uk-card uk-card-default uk-card-body">
									<a class="media-left uk-width-1-6" href="{{ url('/')}}">
										<img src="{{ asset('samples/icon-4.png') }}" alt="icon hồng hà eco city">
									</a>
									<div class="uk-width-1-1"><b>Hạ tầng giao thông & Không gian:</b></div>
									70%
								</div>
							</div>
							<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 media-heading">
								<div class="uk-card uk-card-default uk-card-body">
									<a class="media-left uk-width-1-6" href="{{ url('/')}}">
										<img src="{{ asset('samples/icon-5.png') }}" alt="icon hồng hà eco city">
									</a>
									<div class="uk-width-1-1"><b>Số Block & Tầng cao:</b></div>
									17 Tòa nhà từ 10 tầng đến 34 tầng
								</div>
							</div>
							<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 media-heading">
								<div class="uk-card uk-card-default uk-card-body">
									<a class="media-left uk-width-1-6" href="{{ url('/')}}">
										<img src="{{ asset('samples/icon-1.png') }}" alt="icon hồng hà eco city">
									</a>
									<div class="uk-width-1-1"><b>Số căn hộ:</b></div>
									3283 Căn
								</div>
							</div>
							<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 media-heading">
								<div class="uk-card uk-card-default uk-card-body">
									<a class="media-left uk-width-1-6" href="{{ url('/')}}">
										<img src="{{ asset('samples/icon-6.png') }}" alt="icon hồng hà eco city">
									</a>
									<div class="uk-width-1-1"><b>Số căn hộ:</b></div>
									Toà nhà thương mại, Nhà ở xã hội, Trung tâm thương mại
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Vị trí vàng -->
		<div class="position uk-grid ">
			<div class="over-item uk-width-large-1-2 uk-width-medium-1-2 uk-float-left">
				<div class="uk-panel">
					<div class="title uk-text-center"> VỊ TRÍ CHIẾN LƯỢC</div>
					<div class="uk-text-center"> KẾT NỐI ĐA CHIỀU</div>
					<div class="desc uk-text-center ">
						Khu đô thị Hồng Hà Eco City cách trung tâm thủ đô Hà Nội 8Km về phía Nam, có vị trí đắc địa về
						Phong thủy và Môi trường sống
					</div>
					<div class="desc uk-text-center ">
						Khu đô thị Hồng Hà Eco City cách Công viên Yên Sở, khoảng 300m về phía Đông Bắc nơi có diện tích trên 3.000.000m2 Hồ nước và Cây xanh; Cách Đầm Trì khoảng 500m về phía Đông, có diện tích gần 1.000.000m2 mặt nước.
					</div>
					<div class="desc uk-text-center ">
						Liền kề dòng Sông huyết mạch của Hà Nội đem lại sự lưu thông dòng chảy và tạo nên đô thị Hồng Hà
						Eco City nằm ở vị trí đắc địa luôn luôn cân bằng dòng nước và không bao giờ bị ngập lụt.
						
					</div>

				</div>
			</div>
			<div class="img_position uk-width-large-1-2 uk-width-medium-1-2 uk-float-right">
				<div class="videos">
					<img src="{{ asset('assets/images/section-bg-location.png') }}" alt="" class="vitri">
				</div>
			</div>

		</div>
		<!-- shophouse VHR2 -->
		<div class="shophouse uk-container uk-conatiner-center uk-text-center">
			<div class="">
				<div class="title uk-text-center">  Hồng hà eco city</div>
				<div class="shophouse-item uk-grid">
					<div class="item uk-width-large-1-3 uk-width-medium-1-1 uk-width-small-1-1">
						<a href="{{ url('/tin-tuc/nha-o-xa-hoi-tu-hiep-hong-ha-eco-city-36.html')}}" title="">
							<img src="{{ asset('samples/tieu-khu/loai-hinh-nha-o-xa-hoi-chung-cu-hong-ha-eco-city.jpg') }}">
						</a>
						<a href="{{ url('/tin-tuc/nha-o-xa-hoi-tu-hiep-hong-ha-eco-city-36.html')}}" title="">
							<h3>Nhà ở xã hội</h3>
						</a>
						<div class="cate">
							Dự án nhà ở xã hội được thiết kế đồng bộ hạ tầng kỹ thuật và xã hội. Tòa nhà được thiết kế đồng nhất với thiết kế chung của khu đô thị, không có sự khác biệt nhà ở xã hội và nhà thương mại.
						</div>
					</div>
					<div class="item uk-width-large-1-3 uk-width-medium-1-1 uk-width-small-1-1">
						<a href="{{ url('/tin-tuc/toa-nha-thuong-mai-hong-ha-eco-city-37.html')}}" title="">
							<img src="{{ asset('samples/tieu-khu/loai-hinh-toa-nha-thuong-mai-hong-ha-eco-city.jpg') }}">
						</a>
						<a href="{{ url('/tin-tuc/toa-nha-thuong-mai-hong-ha-eco-city-37.html')}}" title="">
							<h3>Tòa nhà thương mại</h3>
						</a>
						<div class="cate">
							Tổng thể dự án vẫn lấy thiên nhiên làm trọng điểm,làm lá phổi sống, tạo năng lượng xanh cho toàn bộ khu đô thị với mật độ cây xanh chiếm 70% tổng diện tích. Bắt nguồn từ ý tưởng xây dựng hệ sinh thái tự nhiên, m&oci..
						</div>
					</div>
					<div class="item uk-width-large-1-3 uk-width-medium-1-1 uk-width-small-1-1">
						<a href="{{ url('/tin-tuc/trung-tam-thuong-mai-hong-ha-eco-city-35.html')}}" title="">
							<img src="{{ asset('samples/tieu-khu/loai-hinh-trung-tam-thuong-mai.jpg') }}"/>
						</a>
						<a href="{{ url('/tin-tuc/trung-tam-thuong-mai-hong-ha-eco-city-35.html')}}" title="">
							<h3>Trung tâm thương mại</h3>
						</a>
						<div class="cate">
							Từ xa xưa đến nay, cuộc sống của loài người luôn gắn bó và không thể tách rời khỏi thiên nhiên. Thế nên, bất kể ai khi đứng trước các yếu tố tạo nên thiên nhiên (nước, cỏ cây hoa lá, …)
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- sản phẩm paragon -->
			<div class="product-vhr ">
				<div class="uk-container uk-container-center">
					<div class="title">TIN TỨC & SỰ KIỆN</div>
					<div class="item-para uk-grid">
						<div class="item uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
							<a href="#" title="Victory Tower"><img src="{{ asset('samples/san-pham/1495858614-30-ty-dong-1425646.jpg') }}"></a>
							<div class="cate">
								Gói 30 nghìn tỷ giải ngân sau ngày 31/12/2016 sẽ chịu lãi xuất thả nổi
							</div>
						</div>
						<div class="item uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
							<a href="#" title="Victory Tower"><img src="{{ asset('samples/san-pham/1500259951-so-do.jpg') }}"></a>
							<div class="cate">
								Quy định những trường hợp không được đăng ký thế chấp “sổ đỏ”
							</div>
						</div>
						<div class="item uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
							<a href="#" title="Victory Tower"><img src="{{ asset('samples/san-pham/1500260153-vanh-dai.jpg') }}"></a>
							<div class="cate">
								Chỉ giới vành đai 3,5 đoạn Quốc lộ 6 đến cầu Ngọc Hồi
							</div>
						</div>
                        <div class="item uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
                            <a href="#" title="Victory Tower"><img src="{{ asset('samples/san-pham/1500437502-img-3350-fileminimizer.JPG') }}"></a>
                            <div class="cate">
                                Giải Bóng Đá Cúp Tứ Hùng 2017
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<!-- tiện ích tại paragon -->
			<div class="extentions uk-container uk-container-center">
				<div class="item_extent">
				<div class="title">Tiện ích đẳng cấp</div>
					<ul class="uk-nav">
						<li><a href="{{ asset('samples/tien-ich/1499069011-carousel-4.jpg') }}" title="Bể bơi trong nhà" data-uk-lightbox="{group:'group1'}">
							<img src="{{ asset('samples/tien-ich/1499069011-carousel-4.jpg') }}" alt="Bể bơi trong nhà">
							<div class="light-text"><span>Bể bơi trong nhà</span></div>
						</a></li>
                        <li><a href="{{ asset('samples/tien-ich/1499069296-carousel-1.jpg') }}" title="Rạp chiếu phim" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
                            <img src="{{ asset('samples/tien-ich/1499069296-carousel-1.jpg') }}" alt="Rạp chiếu phim">
                            <div class="light-text"><span>Rạp chiếu phim</span></div>
                        </a></li>
						<li><a href="{{ asset('samples/tien-ich/1499069310-carousel-2.jpg') }}" title="khu vui chơi trẻ em" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
							<img src="{{ asset('samples/tien-ich/1499069310-carousel-2.jpg') }}" alt="khu vui chơi trẻ em">
							<div class="light-text"><span>khu vui chơi trẻ em</span></div>
						</a></li>
						<li><a href="{{ asset('samples/tien-ich/1499069332-carousel-3.jpg') }}" title="Bể bơi ngoài trời" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
							<img src="{{ asset('samples/tien-ich/1499069332-carousel-3.jpg') }}" alt="Bể bơi ngoài trời">
							<div class="light-text"><span>Bể bơi ngoài trời</span></div>
						</a></li>
					</ul>
				</div>
			</div>
			
			<!-- form đăng ký, chính sách -->
			<div class="policy" style="margin-bottom: 30px;">
				<div class="policy-list uk-container uk-container-center uk-grid">
					<div class="item submit uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
						<h2>
							<div class="title uk-text-left"> Nhận thông tin dự án - Chính Sách Bán Hàng</div>
						</h2>
						@if(Session::has('flash_message'))
						<div class="uk-alert uk-alert-success"><em> {!! session('flash_message') !!}</em></div>
						@endif
						@if($errors->any())
					    <div class="uk-alert uk-alert-danger uk-alert-dismissible fade in" user="uk-alert">
					        <button type="button" class="uk-close" data-dismiss="uk-alert" aria-label="Close"><span aria-hidden="true">×</span>
					        </button>
					        <strong>Lỗi!</strong> 

					        <ul>
					            @foreach ($errors->all() as $message) 
					            <li>{{$message}}</li>
					            @endforeach
					        </ul>

					    </div>
					    @endif
						<form action="{{ route('contact-submit') }}" method="post" accept-charset="utf-8" class="uk-form">
							 {{ csrf_field() }}
							<div class="uk-grid">
								<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
							    <input type="text" placeholder="Họ Tên (*)" name="name" required=""> <span class="uk-form-help-inline">	</span>
								</div>
								<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
								    <input type="tel" name="telephone" placeholder="Số Điện Thoại (*)" required=""> <span class="uk-form-help-inline">	</span>
								</div>
								<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
								    <input name="email" type="Email" placeholder="Email" > <span class="uk-form-help-inline">	</span>
								</div>
								<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
								    <input name="message" type="text" placeholder="Địa Chỉ" > <span class="uk-form-help-inline">	</span>
								</div>
								<br>
								@if ($errors->all())
								<div class="uk-alert uk-alert-danger">
									<ul>
										@foreach( $errors->all() as $error)
											<li>{{$error}}</li>
										@endforeach
									</ul>
								</div>
								@endif
								@if (!empty($success))
								<div class="uk-alert uk-alert-success uk-form-width-large">
									<p>
										
											Bạn đã đăng ký thành công!
											<br/>Queenland sẽ liên hệ với bạn trong thời gian sớm nhất.
											<br/>Xin trân trọng cảm ơn.
										
									<p>
								</div>
								@endif
								<div class="sumit-form uk-text-center uk-width-1-1">
								    <button class="uk-button uk-text-center"  type="submit"> Gửi Thông Tin</button>
								</div>	
							</div>
					       
				        </form>
					</div>
					<div class="item chinh-sach uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
						<h2>
							<div class="title uk-text-center"> Chính sách - sự kiện</div>
						</h2>
						<div class="list-news">
							<ul class="">
								<li>
									Đang Cập Nhật
								</li>
								<!-- <li>
									Khách hàng chỉ cần thanh toán <span>15% GTBT </span> sẽ được ký luôn HĐMB.
								</li>
								<li>Thanh toán trước hạn bằng vốn tự có <span> hưởng chiết khấu 8%/năm </span> trên số tiền thanh toán và số ngày thanh toán trước hạn.</li>
								<li>
									<span>Thanh toán 95% GTBT </span> bằng vốn tự có trong vòng <span> 15 ngày  </span> kể từ ngày ký HĐMB được hưởng mức <span> chiết khấu 9.5%/năm </span> trên số tiền và số ngày thanh toán trước hạn.
								</li> -->
								<li class="hotline"><a href="tel:0967876969" title="hotline"><i class="uk-icon-phone"></i> Hotline : 0916.0866.88</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
	<!-- modal -->
	@include('frontend.layouts.modal')
@endsection