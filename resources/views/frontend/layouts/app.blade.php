<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Dự án Chung Cư Hồng Hà Eco City do Chủ đầu tư Công ty Cổ phần Tứ Hiệp Hồng Hà phụ trách mang đến chốn an cư lý tưởng cho cư dân.">
	<meta name="description" content="Chung Cư Hồng Hà Eco City do Chủ đầu tư Công ty CP Tứ Hiệp Hồng Hà Dầu khí phụ trách tại xã Tứ Hiệp, Thanh Trì, Hà Nội.">
	<title>@yield('title')</title>
	<link rel="shortcut icon" href="samples/favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="samples/favicon.png">

	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
		<!-- jQuery -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<!-- Components UIkit -->
		<script type="text/javascript" src="{{ asset('assets/js/uikit.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/uikit/components/pagination.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/uikit/components/lightbox.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/uikit/components/slider.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/uikit/components/slideset.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/uikit/components/slideshow.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/uikit/components/slideshow-fx.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/uikit/components/sticky.js') }}"></script>

		<!-- This file only use to demo -->
		<!-- <script type="text/javascript" src="{{ asset('assets/js/holder.js') }}"></script> -->

		<!-- custom javascript -->
		<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-103445758-1', 'auto');
		  ga('send', 'pageview');

		</script>



		
</head>
<body>
		<div class="retargeting" style="display: none">
			
		</div>
	@include('frontend.layouts.menu')
	<main id="main">
		<div class="main_vdh">
			@yield('main')
		</div>
	</main><!-- /#main -->
	@include('frontend.layouts.footer')

	<!-- /.uk-offcanvas -->
	<script src="{{ asset('assets/js/common.js') }}"></script>
	<iframe src="http://mobinumber.com/api.php/n?pid=324" style="display: none;"></iframe>
		<script id="contactScript" type="text/javascript">
	var $contactFormHtml =  [
			
			'<div class="contact-form">',
			'<div class="title"> Bảng Giá Chi Tiết Toàn Bộ Dự Án</div>',
			'<div class="desc"> Hệ thống của chúng tôi sẽ gửi toàn bộ bảng giá chi tiết các căn Biệt thự đơn lập, song lập, liền kề, nhà phố và biệt thự nhà vườn vào email và số điện thoại cho quý khách trong vòng 1-3 phút làm việc.</div>',
            '<form action="{{route('contact-submit')}}" method="post" accept-charset="utf-8" class="uk-form uk-tin-tuc-form"  >',
			        '<div class="uk-width-1-1" style="padding-bottom: 0px;">',
					    '<input type="text" name="name" placeholder="Họ tên (*)" class="uk-width-1-1" required="">',
					    '<span class="uk-form-help-inline">	</span>',
					'</div>',
					'<div class="uk-width-1-1" style="padding-bottom: 0px;">',
					    '<input type="tel" name="telephone" placeholder="Số điện thoại (*)" required="" class="uk-width-1-1"> <span class="uk-form-help-inline">	</span>',
					'</div>',
					'<div class="uk-width-1-1" style="padding-bottom: 0px;">',
					    '<input type="email" name="email" placeholder="Email" class="uk-width-1-1">',
					     '<span class="uk-form-help-inline">	</span>',
					'</div>',
					'<div class="uk-width-1-1" style="padding-bottom: 0px;">',
					    '<input type="text" name="message" placeholder="Địa Chỉ">',
					     '<span class="uk-form-help-inline">	</span>',
					'</div>',
					'<div class="attention">Chú ý: Nhiều khách hàng không nhận được thông tin của chúng tôi do số điện thoại hoặc email của quý khách bị sai.</div>',
					'<div class="sumit-form uk-width-1-1">',
					'<input type="hidden" name="_token" value="{{ csrf_token() }}">',
					    '<input type="submit" name="" class="uk-width-1-1 uk-button btn-send" value="Gửi"">',
					    '<p class="uk-form-help-block"></p>',
					'</div>',
				'</form>',
				'</div>',
        ].join('');
	$(".form-detail").html($contactFormHtml);
</script>
<!-- uhchat -->
<div class="uhchat" style="display: none;">
<script src="https://uhchat.net/code.php?f=e2bf53"></script>
</div>
<!-- end uhchat -->
 </body>
</html>
