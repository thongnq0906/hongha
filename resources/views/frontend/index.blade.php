@extends('frontend.layouts.app')
@section('title')
Vinhomes Riverside The Harmony- Riverside giai đoạn 2 đẳng cấp
@endsection
@section('main')
	
	<!-- Desktop -->
	<!-- slide show -->
		<div class="slideshow">
			<div class="uk-slidenav-position" data-uk-slideshow="{kenburns:true, autoplay:true}">
	            <ul class="uk-slideshow uk-overlay-active" data-uk-slideshow="{kenburns:true}">
	                <li data-slideshow-slide="img">
	                	<img src="samples/slide/ho-dieu-hoa.jpg">
						<div class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-left">
                            <h1>Vinhomes Riverside - The Harmony</h1>
                            <p>Riêng Một Đẳng Cấp Sống</p>
                        </div>
	                <li data-slideshow-slide="img">
	                	<img src="samples/slide/tieu-khu-nguyet-que.jpg">
	                	<div class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-left">
                            <h1>Tiểu khu nguyệt quế</h1>
                            <p>Phong Cách Hy Lạp</p>
                        </div>
                	</li>
                	<li data-slideshow-slide="img">
	                	<img src="samples/slide/tieu-khu-huong-duong.jpg">
	                	<div class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-left">
                            <h1>Tiểu khu hướng dương</h1>
                            <p>Phong Cách Đông Dương</p>
                        </div>
                	</li>
	            </ul>
	            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
			    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
	            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
		        <li data-uk-slideshow-item="0"><a href=""></a></li>
		        <li data-uk-slideshow-item="1"><a href=""></a></li>
		        <li data-uk-slideshow-item="2"><a href=""></a></li>
		    </ul>
	        </div>
		</div>
		<!-- modal -->
			<!-- Mobile -->
		<div class="overview uk-grid ">
			<div class="over-item over-item-1 uk-width-large-1-2 uk-width-medium-1-2 uk-text-left">
				<div class="title"> Video dự án</div>
				<div class="videos">
				<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fqueenland.vn%2Fvideos%2F622253901293780%2F&show_text=0" width="100%" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
					
				</div>
			</div>
			<div class="over-item uk-width-large-1-2 uk-width-medium-1-2">
				<div class="uk-panel">
					<h2>
						<div class="title uk-text-center"> Tổng quan dự án</div>
					</h2>
					<div class="desc ">
						<p>Vinhomes Riverside – The Harmony là phân khu mới nhất thuộc tổng thể khu đô thị sinh thái đẳng cấp duy nhất giữa lòng Hà Nội - Vinhomes Riverside. Không chỉ kế thừa giá trị cốt lõi của tổng thể khu đô thị Vinhomes Riverside, Vinhomes Riverside The Harmony còn sở hữu các phong cách kiến trúc đa dạng và hệ thống tiện ích vượt trội, hứa hẹn sẽ trở thành nơi an cư lý tưởng của những chủ nhân tinh hoa.</p>
					</div>
					<div class="nav">
						<ul class=""> 
						    <li> Tổng diện tích dự án: 97,6ha</li>
						    <li> Diện tích công viên điều hòa: rộng 12.4ha</li>
						    <li> Mật độ xây dựng: 21%</li>
						    <li> 71,4ha không gian xanh cùng 18.7km kênh đào uốn lượn</li>
						    <li> Diện tích các lô biệt thự: 84.9m2-500m2</li>
						    <li> Hình thức sở hữu: SỔ ĐỎ</li>
						    <li> Loại hình: Biệt thự song lập, đơn lập, tứ lập, liền kề, nhà vườn, nhà phố</li>
						    <li>Tiểu Khu: Phong Lan, Tulip, Hướng Dương, Nguyệt Quế</li>
						    <li> Dự kiến bàn giao: Vinhomes Riverside The Harmony: từ tháng 9/2017</li>
					    </ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Vị trí vàng -->
		<div class="position uk-grid ">
			<div class="over-item uk-width-large-1-2 uk-width-medium-1-2 uk-float-left">
				<div class="uk-panel">
					<h2>
						<div class="title uk-text-center"> Vị trí vàng </div>
					</h2>
					<div class="desc " style="text-align: justify; padding: 0 10px;" >
						Vinhomes Riverside - The Harmony được xây dựng trên địa giới của 2 phường trung tâm quận Long Biên: Việt Hưng, Phúc Đồng. Từ dự án, cư dân có thể kết nối linh hoạt với trung tâm Hà Nội cũng như di chuyển đến các tỉnh lân cận như, Hải Dương, Hải Phòng, Hưng Yên, Bắc Ninh… Bằng hệ thống giao thông đường bộ, đường cao tốc trên cao hiện đại.
					</div>
					<div class="nav">
						<ul class=""> 
						    <li> Cách Hồ Hoàn Kiếm chưa đầy 6km</li>
						    <li> Cách siêu thị Aeon Mall 1km</li>
						    <li> Cách công viên IT PARK 800m</li>
					    </ul>
					</div>
				</div>
			</div>
			<div class="img_position uk-width-large-1-2 uk-width-medium-1-2 uk-float-right">
				<div class="videos">
					<img src="http://vinhomesriverside.herokuapp.com/samples/vitri.png" alt="">
				</div>
			</div>
			
		</div>
		<!-- shophouse VHR2 -->
		<div class="shophouse uk-container uk-conatiner-center uk-text-center">
			<div class="">
				<h2>
					<div class="title uk-text-center"> Vinhomes Riverside – The Harmony</div>
				</h2>
				<div class="desc uk-text-center">
					Vinhomes Riverside – The Harmony là phân khu mới phát triển thuộc Vinhomes Riverside, tọa lạc tại vị trí đắt giá, vừa đủ gần để bước chân là xuống phố, vừa đủ cách biệt để cư dân thừa hưởng sự yên bình.
				</div>
				<div class="shophouse-item uk-grid">
					<div class="item uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
						<a href="{{url('/')}}/tin-tuc/tieu-khu-huong-duong-phong-cach-dong-duong.html" title="Tiểu Khu Hướng Dương">
							<img src="{{ asset('samples/tieu-khu/tieu-khu-huong-duong.jpg') }}" alt="Tiểu Khu hướng dương">
						</a>
						<a href="{{url('/')}}/tin-tuc/tieu-khu-huong-duong-phong-cach-dong-duong.html" title="Tiểu Khu hướng dương">
							<h3>Tiểu Khu hướng dương</h3>
						</a>
					</div>
					<div class="item uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
						<a href="{{url('/')}}/tin-tuc/tieu-khu-phong-lan-phong-cach-phap.html" title="Tiểu Khu Phong Lan">
							<img src="{{ asset('samples/tieu-khu/tieu-khu-phong-lan.png') }}" alt="Tiểu Khu Phong Lan">
						</a>
						<a href="{{url('/')}}/tin-tuc/tieu-khu-phong-lan-phong-cach-phap.html" title="Tiểu Khu Phong Lan">
							<h3>Tiểu Khu Phong Lan</h3>
						</a>
					</div>
					<div class="item uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
						<a href="{{url('/')}}/tin-tuc/tieu-khu-nguyet-que-phong-cach-hy-lap.html" title="Tiểu Khu Nguyệt Quế">
							<img src="{{ asset('samples/tieu-khu/tieu-khu-nguyet-que.jpg') }}" alt="Tiểu Khu Nguyệt Quế">
						</a>
						<a href="{{url('/')}}/tin-tuc/tieu-khu-nguyet-que-phong-cach-hy-lap.html" title="Tiểu Khu Nguyệt Quế">
							<h3>Tiểu KHU NGUYỆT QUẾ</h3>
						</a>
					</div>
					<div class="item uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
						<a href="{{url('/')}}/tin-tuc/tieu-khu-tulip-phong-cach-y.html" title="Tiểu Khu Tulip">
							<img src="{{ asset('samples/tieu-khu/tieu-khu-tulip.jpg') }}" alt="Tiểu Khu Tulip">
						</a>
						<a href="{{url('/')}}/tin-tuc/tieu-khu-tulip-phong-cach-y.html" title="Tiểu Khu Tulip">
							<h3>Tiểu Khu Tulip</h3>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="extentions matbang uk-container uk-container-center">
				<div class="item_extent">
					<ul class="uk-nav">
						<li><a href="http://vinhomesriverside.herokuapp.com/samples/can-ho-mau/lien-ke-hylap-nguyetque.jpg" title="Mẫu liền kề Hy Lạp" data-uk-lightbox="{group:'group2'}">
							<img src="http://vinhomesriverside.herokuapp.com/samples/can-ho-mau/lien-ke-hylap-nguyetque.jpg" alt="Mẫu liền kề Hy Lạp">
							<div class="light-text"><span>Mẫu liền kề Hy Lạp</span></div>
						</a></li>
						<li><a href="http://vinhomesriverside.herokuapp.com/samples/can-ho-mau/nhapho-phap-phonglan.jpg" title="Mẫu nhà phố - Pháp" data-lightbox-type="image" data-uk-lightbox="{group:'group2'}">
							<img src="http://vinhomesriverside.herokuapp.com/samples/can-ho-mau/nhapho-phap-phonglan.jpg" alt="Mẫu nhà phố - Pháp">
							<div class="light-text"><span>Mẫu nhà phố - Pháp</span></div>
						</a></li>
						<li><a href="http://vinhomesriverside.herokuapp.com/samples/can-ho-mau/nhavuon-hylap-nguyetque.jpg" title="Mẫu nhà vườn - Hy Lạp" data-lightbox-type="image" data-uk-lightbox="{group:'group2'}">
							<img src="http://vinhomesriverside.herokuapp.com/samples/can-ho-mau/nhavuon-hylap-nguyetque.jpg" alt="Mẫu nhà vườn - Hy Lạp">
							<div class="light-text"><span>Mẫu nhà vườn - Hy Lạp</span></div>
						</a></li>
						<li><a href="http://vinhomesriverside.herokuapp.com/samples/can-ho-mau/nhavuon-phap-phonglan.jpg" title="Mẫu nhà vườn - Pháp" data-lightbox-type="image" data-uk-lightbox="{group:'group2'}">
							<img src="http://vinhomesriverside.herokuapp.com/samples/can-ho-mau/nhavuon-phap-phonglan.jpg" alt="Mẫu nhà vườn - Pháp">
							<div class="light-text"><span>Mẫu nhà vườn - Pháp</span></div>
						</a></li>
						<li><a href="http://vinhomesriverside.herokuapp.com/samples/can-ho-mau/song-lap-dongduong-duongduong.jpg" title="Mẫu song lập - Đông Dương" data-lightbox-type="image" data-uk-lightbox="{group:'group2'}">
							<img src="http://vinhomesriverside.herokuapp.com/samples/can-ho-mau/song-lap-dongduong-duongduong.jpg" alt="Mẫu song lập - Đông Dương">
							<div class="light-text"><span>Mẫu song lập - Đông Dương</span></div>
						</a></li>
						<li><a href="http://vinhomesriverside.herokuapp.com/samples/can-ho-mau/tulap-hylap-nguyetque.jpg" title="Mẫu tứ lập - Hy Lạp" data-lightbox-type="image" data-uk-lightbox="{group:'group2'}">
							<img src="http://vinhomesriverside.herokuapp.com/samples/can-ho-mau/tulap-hylap-nguyetque.jpg" alt="Mẫu tứ lập - Hy Lạp">
							<div class="light-text"><span>Mẫu tứ lập - Hy Lạp</span></div>
						</a></li>
					</ul>
				</div>
			</div>
		<!-- sản phẩm paragon -->
			<div class="product-vhr ">
				<div class="uk-container uk-container-center" style="padding: 0;">
					<h2>
						<div class="title uk-text-center">loại hình tại Vinhomes Riverside – The Harmony</div>
					</h2>
					<div class="item-para uk-grid" style="margin: 0;">
						<div class="item uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
							<div class="title">Biệt thự đơn lập</div>
							<a href="{{url('/')}}/tin-tuc/don-lap-vinhomes-riverside-the-harmony-moi-truong-song-biet-lap-dang-cap-121.html" title="Biệt thự đơn lập"><img src="{{ asset('samples/san-pham/don-lap-phap.jpg') }}" alt="Biệt thự đơn lập"></a>
							<!-- <ul class="cate">
								<li>Diện tích đất trung bình: 300m2-368m2</li>
								<li>Tổng diện tích sàn xây dựng: 350m2-500m2 </li>
							</ul> -->
						</div>
						<div class="item uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
							<div class="title">biệt thự song lập</div>
							<a href="{{url('/')}}/tin-tuc/biet-thu-song-lap-xung-tam-dang-cap-song.html" title="biệt thự song lập" ><img src="{{ asset('samples/san-pham/song-lap-huong-duong.jpg') }}" alt="biệt thự song lập"></a>
							<!-- <ul class="cate">
								<li>Diện tích đất: 207m2 - 213m2 </li>
								<li>Diện tích xây dựng: 400m2 - 440m2</li>
							</ul> -->
						</div>
						<div class="item uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
							<div class="title">Biệt thự tứ lập</div>
							<a href="{{url('/')}}/tin-tuc/biet-thu-tu-lap-vinhomes-riverside-the-harmony.html" title="Biệt thự tứ lập"><img src="{{ asset('samples/san-pham/tu-lap-hy-lap-v7.jpg') }}" alt="Biệt thự tứ lập"></a>
							<!-- <ul class="cate">
								<li>Diện tích đất: 180m2 </li>
								<li>Diện tích xây dựng: 350m2</li>
							</ul> -->
						</div>
						<div class="item uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
							<div class="title">Biệt thự liền kề</div>
							<a href="{{url('/')}}/tin-tuc/biet-thu-lien-ke-ben-ho-vinhomes-riverside-the-harmony.html" title="Biệt thự liền kề"><img src="{{ asset('samples/san-pham/lien-ke-phap-2.jpg') }}" alt="Biệt thự liền kề"></a>
							<!-- <ul class="cate">
								<li>Diện tích đất: 90m2 - 96m2</li>
								<li>Diện tích xây dựng: 220m2</li>
							</ul> -->
						</div>

					</div>
				</div>
			</div>
			<!-- tiện ích tại paragon -->
			<div class="extentions uk-container uk-container-center">
				<div class="item_extent">
					<h2>
					<div class="title">Tiện ích đẳng cấp 5 sao</div>
					</h2>
					<ul class="uk-nav">
						<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/be-boi-vhr.jpg" title="Bể bơi cao cấp" data-uk-lightbox="{group:'group1'}">
							<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/be-boi-vhr.jpg" alt="Bể bơi">
							<div class="light-text"><span>bể bơi cao cấp</span></div>
						</a></li>
						<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/vui-choi-vinhomes-riverside.jpg" title="Khu vui chơi giải trí" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
							<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/vui-choi-vinhomes-riverside.jpg" alt="Khu vui chơi giải trí">
							<div class="light-text"><span>Khu vui chơi giải trí</span></div>
						</a></li>
						<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/trung-tam-thuong-mai.png" title="Trung tâm mua sắm VINCOM" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
							<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/trung-tam-thuong-mai.png" alt="Trung tâm mua sắm VINCOM">
							<div class="light-text"><span>Trung tâm mua sắm VINCOM</span></div>
						</a></li>
						<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/golf-club.jpg" title="Golf" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
							<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/golf-club.jpg" alt="Golf">
							<div class="light-text"><span>Golf</span></div>
						</a></li>
						<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/vinmec.jpg" title="Bệnh viện Vimec" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
							<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/vinmec.jpg" alt="Bệnh viện Vimec">
							<div class="light-text"><span>Bệnh viện Vimec</span></div>
						</a></li>
						<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/cong-vien-khung-long.jpg" title="Công viên khủng long" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
							<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/cong-vien-khung-long.jpg" alt="Công viên khủng long">
							<div class="light-text"><span>Công viên khủng long</span></div>
						</a></li>
					</ul>
				</div>
			</div>
			
			<!-- form đăng ký, chính sách -->
			<div class="policy">
				<div class="policy-list uk-container uk-container-center uk-grid">
					<div class="item submit uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
						<h2>
							<div class="title"> Nhận thông tin dự án - chính sách bán hàng</div>
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
									Hỗ trợ vay vốn <span>65%</span> với Lãi Suất <span>0% trong vòng 18 tháng.</span>
								</li>
								<li>
									Khách hàng chỉ cần thanh toán <span>15% GTBT </span> sẽ được ký luôn HĐMB.
								</li>
								<li>Thanh toán trước hạn bằng vốn tự có <span> hưởng chiết khấu 8%/năm </span> trên số tiền thanh toán và số ngày thanh toán trước hạn.</li>
								<li>
									<span>Thanh toán 95% GTBT </span> bằng vốn tự có trong vòng <span> 15 ngày  </span> kể từ ngày ký HĐMB được hưởng mức <span> chiết khấu 9.5%/năm </span> trên số tiền và số ngày thanh toán trước hạn.
								</li>
								<li class="hotline"><a href="tel:0967876969" title="hotline"><i class="uk-icon-phone"></i> Hotline : 0967.87.69.69</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
	<!-- modal -->
	@include('frontend.layouts.modal')
@endsection