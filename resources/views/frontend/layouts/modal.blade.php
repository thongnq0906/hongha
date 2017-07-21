<div id="my-id-form" class="uk-modal">
    <div class="uk-modal-dialog form-summit uk-modal-dialog-lightbox">
        <a href="" class="uk-modal-close uk-close uk-close-alt"></a>
        <div class="title uk-text-center"> Nhận Bảng Giá Chi Tiết Toàn Bộ Dự Án</div>
		<div class="desc"> Hệ thống của chúng tôi sẽ gửi toàn bộ bảng giá chi tiết các căn Biệt thự đơn lập, song lập, liền kề, nhà phố và biệt thự nhà vườn vào email và số điện thoại cho quý khách trong vòng 1-3 phút làm việc.</div>
        <form action="{{ route('contact-submit') }}" method="post" accept-charset="utf-8" class="uk-form">
			 {{ csrf_field() }}
			<div class="uk-grid">
				<div class="uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1">
			    <input type="text" placeholder="Họ Tên (*)" name="name" required=""> <span class="uk-form-help-inline">	</span>
				</div>
				<div class="uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1">
				    <input type="tel" name="telephone" placeholder="Số Điện Thoại (*)" required=""> <span class="uk-form-help-inline">	</span>
				</div>
				<div class="uk-width-1-1">
				    <input name="email" type="Email" placeholder="Email "> <span class="uk-form-help-inline">	</span>
				</div>
				<div class="uk-width-1-1">
				    <!-- <textarea cols="" name="message" rows="" placeholder="Nội Dung"></textarea> -->
				    <input type="text" name="message" placeholder="Địa Chỉ ">
				    <p class="uk-form-help-block"></p>
				</div>
				<div class="uk-width-1-1">
					<div class="attention">Chú ý: Nhiều khách hàng không nhận được thông tin của chúng tôi do số điện thoại hoặc email của quý khách bị sai.</div>
				</div>
				<div class="sumit-form uk-width-1-1">
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
</div>