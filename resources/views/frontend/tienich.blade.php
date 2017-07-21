@extends('frontend.layouts.app')
@section('title')
Tiện ích đẳng cấp 5 sao của Vinhomes Riverside
@endsection
@section('main')
	
	<div class="uk-container uk-container-center">
		<ul class="uk-breadcrumb">
		    <li><a href="{{ url('/')}}">Trang chủ</a></li>
		    <li class="uk-active"><span>Tiện ích</span></li>
		</ul>
	</div>
		
		<!-- tiện ích tại paragon -->
		<div class="extentions tienich uk-container uk-container-center">
			<h3><div class="title ">KHÔNG PHẢI PHỐ XÁ XÔ BỒ, MÀ LÀ CẢ THẾ GIỚI TIỆN ÍCH XỨNG TẦM</div></h3>
			<p>Một trong những lý do Vinhomes Riverside - The Harmony được giới thượng lưu lựa chọn là nhờ hệ thống các tiện ích cảnh quan đẳng cấp mà cư dân được đặc quyền sử dụng.Khu đô thị bao gồm các tiện ích đẳng cấp 5 sao đáp ứng đầy đủ nhu cầu mua sắm, vui chơi, giải trí, ẩm thực đến chăm sóc sức khỏe, y tế và giáo dục . Hơn thế nữa, hệ sinh thái tiện ích này lại nằm trọn trong không gian thiên nhiên trong lành và riêng biệt, khiến cuộc sống của cư dân nơi thực sự là một trải nghiệm sống “nghỉ dưỡng” hoàn hảo mỗi ngày</p>
		<div class="list-extendtions">
			 <ul class="menu-tab list-tien-ich uk-nav" data-uk-switcher="{connect:'#my-id-tien-ich'}">
                <li class=""><a href="Tiểu Khu Tulip">Bản đồ tiện ích</a></li>
                <li class=""><a href="">Sức khỏe</a></li>
                <li class=""><a href="">Giáo dục trẻ em</a></li>
                <li class=""><a href="">Mua sắm giải trí</a></li>
            </ul>
		</div>
			<ul id="my-id-tien-ich" class="uk-switcher">
				<li>
					<a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/mat-bang-tien-ich.jpg" title="Tiện ích tổng quan" data-uk-lightbox="{group:'group3'}">
						<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/mat-bang-tien-ich.jpg" alt="Tiện ích tổng quan">
					</a>
				</li>
				<li>
					<div class="item_extent">
						<ul class="uk-nav">
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/sk/am-vuon-duong-sinh.jpg" title="vườn dưỡng sinh cho người lớn tuổi" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/sk/am-vuon-duong-sinh.jpg" alt="vườn dưỡng sinh cho người lớn tuổi">
								<div class="light-text"><span>vườn dưỡng sinh cho người lớn tuổi</span></div>
							</a></li>
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/sk/am-khu-the-thao-phuc-hop.jpg" title="Khu phức hợp thể thao" data-lightbox-type="image" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/sk/am-khu-the-thao-phuc-hop.jpg" alt="Khu phức hợp thể thao">
								<div class="light-text"><span>khu phức hợp thể thao</span></div>
							</a></li>
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/sk/am-san-choi-sang-tao.jpg" title="Sân chơi sáng tạo trẻ em" data-lightbox-type="image" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/sk/am-san-choi-sang-tao.jpg" alt="Sân chơi sáng tạo trẻ em">
								<div class="light-text"><span>Sân chơi sáng tạo trẻ em</span></div>
							</a></li>
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/sk/am-san-tap-golf.jpg" title="Golf" data-lightbox-type="image" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/sk/am-san-tap-golf.jpg" alt="Golf">
								<div class="light-text"><span>Golf</span></div>
							</a></li>
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/sk/am-duong-ven-ho.jpg" title="Khu vui chơi thư giãn" data-lightbox-type="image" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/sk/am-duong-ven-ho.jpg" alt="Khu vui chơi thư giãn">
								<div class="light-text"><span>Khu vui chơi thư giãn</span></div>
							</a></li>
						</ul>
					</div>
				</li>
				<li>
					<div class="item_extent">
						<ul class="uk-nav">
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/childen/am-cong-vien-tham-hiem.jpg" title="Công viên thám hiểm" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/childen/am-cong-vien-tham-hiem.jpg" alt="Công viên thám hiểm">
								<div class="light-text"><span>Công viên thám hiểm</span></div>
							</a></li>
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/childen/am-nha-go-tre-em.jpg" title="Nhà Gỗ trẻ em" data-lightbox-type="image" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/childen/am-nha-go-tre-em.jpg" alt="Nhà Gỗ trẻ em">
								<div class="light-text"><span>Nhà Gỗ trẻ em</span></div>
							</a></li>
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/childen/am-pho-thong-trung-hoc-vinschool.jpg" title="Trường THPT Vinschool" data-lightbox-type="image" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/childen/am-pho-thong-trung-hoc-vinschool.jpg" alt="Trường THPT Vinschool">
								<div class="light-text"><span>Trường THPT Vinschool</span></div>
							</a></li>
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/childen/am-tieu-hoc-vinschool.jpg" title="Trường Tiểu học Vinschool" data-lightbox-type="image" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/childen/am-tieu-hoc-vinschool.jpg" alt="Trường Tiểu học Vinschool">
								<div class="light-text"><span>Trường Tiểu học Vinschool</span></div>
							</a></li>
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/childen/am-mam-non-vinschool.jpg" title="Trường mầm non Vinschool" data-lightbox-type="image" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/childen/am-mam-non-vinschool.jpg" alt="Trường mầm non Vinschool">
								<div class="light-text"><span>Trường mầm non Vinschool</span></div>
							</a></li>
						</ul>
					</div>
				</li>
				<li>
					<div class="item_extent">
						<ul class="uk-nav">
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/shopping/am-almaz.jpg" title="Trung tâm hôi nghị ẩm thực almaz" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/shopping/am-almaz.jpg" alt="Trung tâm hôi nghị ẩm thực almaz">
								<div class="light-text"><span>Trung tâm hôi nghị ẩm thực almaz</span></div>
							</a></li>
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/shopping/am-bbq-pit.jpg" title="BBQ ngoài trời" data-lightbox-type="image" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/shopping/am-bbq-pit.jpg" alt="BBQ ngoài trời">
								<div class="light-text"><span>BBQ ngoài trời</span></div>
							</a></li>
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/shopping/am-car-salon.jpg" title="Salon chăm sóc xe hơi" data-lightbox-type="image" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/shopping/am-car-salon.jpg" alt="Salon chăm sóc xe hơi">
								<div class="light-text"><span>Salon chăm sóc xe hơi</span></div>
							</a></li>
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/shopping/am-jura-park.jpg" title="Công viên khủng long" data-lightbox-type="image" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/shopping/am-jura-park.jpg" alt="Công viên khủng long">
								<div class="light-text"><span>Công viên khủng long</span></div>
							</a></li>
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/shopping/am-vincom-long-bien.jpg" title="Trung tâm thương mại vincom long biên" data-lightbox-type="image" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/shopping/am-vincom-long-bien.jpg" alt="Trung tâm thương mại vincom long biên">
								<div class="light-text"><span>Trung tâm thương mại vincom long biên</span></div>
							</a></li>
							<li><a href="http://vinhomesriverside.herokuapp.com/samples/tien-ich/shopping/am-vinmart.jpg" title="Siêu thị vinmart" data-lightbox-type="image" data-uk-lightbox="{group:'group3'}">
								<img src="http://vinhomesriverside.herokuapp.com/samples/tien-ich/shopping/am-vinmart.jpg" alt="Siêu thị vinmart">
								<div class="light-text"><span>Siêu thị vinmart</span></div>
							</a></li>
						</ul>
					</div>
				</li>
			</ul>
			
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
							    <input name="email" type="Email" placeholder="Email" required=""> <span class="uk-form-help-inline">	</span>
							</div>
							<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
							    <input name="message" type="text" placeholder="Địa Chỉ" required=""> <span class="uk-form-help-inline">	</span>
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
					<div class="title uk-text-center"> Chính sách - sự kiện</div>
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