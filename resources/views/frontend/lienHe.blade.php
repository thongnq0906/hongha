@extends('frontend.layouts.app')
@section('title')
Liên hệ phòng kinh doanh | Liên Hệ : 0967.87.69.69
@endsection
@section('main')
<div class="uk-container uk-container-center main_vdh main-contact">
		<!-- This is the modal -->
		<div class="uk-container uk-container-center">
			<ul class="uk-breadcrumb">
			    <li><a href="{{ url('/')}}">Trang chủ</a></li>
			    <li class="uk-active"><span>Liên hệ</span></li>
			</ul>
		</div>
		<!-- modal -->
		<div class="contact uk-text-center">
			<div class="title">LIÊN HỆ PHÒNG KINH DOANH</div>
			<h1>VINHOMES RIVERSIDE THE HARMONY</h1>
			<div class="line-bottom"></div>
			<div class="desc">
				Xin chân thành cám ơn Quý khách đã quan tâm đến dự án. Để biết thêm thông tin chi tiết, Quý khách vui lòng liên hệ trực tiếp thông qua số điện thoại của chúng tôi - Đại lý phân phối chính thức của VINHOMES RIVERSIDE THE HARMONY , hoặc để lại thông tin theo form bên dưới. Chúng tôi sẽ hồi âm trong thời gian sớm nhất.
			</div>
			<div class="policy">
				<div class="policy-list uk-container uk-container-center uk-grid">
					<div class="item submit uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
						<div class="title"> Nhận thông tin dự án - chính sách bán hàng</div>
						<!-- <div class="line-bottom"></div> -->
						<p>
							Nhận ngay thông tin chính thức từ chủ đầu tư Vinhomes bao gồm mặt bằng tổng thể, mặt bằng căn hộ, hình ảnh căn hộ mẫu, bảng giá, hợp đồng mẫu.
						</p>
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
								    <input name="email" type="Email" placeholder="Email"> <span class="uk-form-help-inline">	</span>
								</div>
								<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
								    <input name="message" type="text" placeholder="Địa Chỉ"> <span class="uk-form-help-inline">	</span>
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
					<div class="item news uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
						<div class="title"> BẢNG GIÁ & CHÍNH SÁCH BÁN HÀNG</div>
						<!-- <div class="line-bottom"></div> -->
						<p>Vinhomes The Harmony Chuẩn bị có đầy đủ thông tin về mặt bằng – chính sách – giá bán. Quý khách vui lòng liên hệ bộ phận Kinh doanh Vinhomes The Harmony để được cung cấp thông tin nhanh nhất</p>
						<div class="list-news">
							<ul class="uk-nav">
								<li>
									Hỗ trợ tư vấn chuyên sâu- cập nhật những thông tin mới nhất:
								</li>
								<li class="hotline"><a href="tel:0967876969">HOTLINE HỖ TRỢ : 096.787.69.69</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Google Code for V&agrave;o li&ecirc;n h&#7879; Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 850809964;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "4h65CNjijnIQ7KjZlQM";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/850809964/?label=4h65CNjijnIQ7KjZlQM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>

		<!-- modal -->
	@include('frontend.layouts.modal')
@endsection