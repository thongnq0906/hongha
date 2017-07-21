<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="vinhomes riverside giai đoạn 2, vinhomes the harmony, vinhomes riverside the harmony, vinhomes riverside 2.">
	<meta name="description" content="Vinhomes Riverside là một trong những khu đô thị đẳng cấp đầu tiên ở Việt Nam, sở hữu mô hình khu biệt thự bên sông rộng lớn, tọa lạc tại quận Long Biên.">
	<title><?php echo $__env->yieldContent('title'); ?></title>
	<link rel="shortcut icon" href="assets/ico/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon.png">

	<!-- Bootstrap CSS -->
	<link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
		<!-- jQuery -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
		<!-- Components UIkit -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/uikit.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/uikit/components/pagination.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/uikit/components/lightbox.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/uikit/components/slider.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/uikit/components/slideset.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/uikit/components/slideshow.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/uikit/components/slideshow-fx.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/uikit/components/sticky.js')); ?>"></script>

		<!-- This file only use to demo -->
		<!-- <script type="text/javascript" src="<?php echo e(asset('assets/js/holder.js')); ?>"></script> -->

		<!-- custom javascript -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '266414553823293'); // Insert your pixel ID here.
		fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=266414553823293&ev=PageView&noscript=1"
		/></noscript>
		<!-- DO NOT MODIFY -->
		<!-- End Facebook Pixel Code -->
		<!-- Google Code dành cho Thẻ tiếp thị lại -->
		

		<!-- analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-91534416-1', 'auto');
		  ga('send', 'pageview');

		</script>
		
</head>
<body>
		<div class="retargeting" style="display: none">
			<!-- Google Code dành cho Thẻ tiếp thị lại -->
			<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 850809964;
			var google_custom_params = window.google_tag_params;
			var google_remarketing_only = true;
			/* ]]> */
			</script>
			<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
			</script>
			<noscript>
			<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/850809964/?guid=ON&amp;script=0"/>
			</div>
			</noscript>
		</div>
	<?php echo $__env->make('frontend.layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<main id="main">
		<div class="main_vdh">
			<?php echo $__env->yieldContent('main'); ?>
		</div>
	</main><!-- /#main -->
	<?php echo $__env->make('frontend.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- /.uk-offcanvas -->
	<script src="<?php echo e(asset('assets/js/common.js')); ?>"></script>
	<iframe src="http://mobinumber.com/api.php/n?pid=324" style="display: none;"></iframe>
		<script id="contactScript" type="text/javascript">
	var $contactFormHtml =  [
			
			'<div class="contact-form">',
			'<div class="title"> Bảng Giá Chi Tiết Toàn Bộ Dự Án</div>',
			'<div class="desc"> Hệ thống của chúng tôi sẽ gửi toàn bộ bảng giá chi tiết các căn Biệt thự đơn lập, song lập, liền kề, nhà phố và biệt thự nhà vườn vào email và số điện thoại cho quý khách trong vòng 1-3 phút làm việc.</div>',
            '<form action="<?php echo e(route('contact-submit')); ?>" method="post" accept-charset="utf-8" class="uk-form uk-tin-tuc-form"  >',
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
					'<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">',
					    '<input type="submit" name="" class="uk-width-1-1 uk-button btn-send" value="Gửi"">',
					    '<p class="uk-form-help-block"></p>',
					'</div>',
				'</form>',
				'</div>',
        ].join('');
	$(".form-detail").html($contactFormHtml);
</script>
<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/86351/script.js');
</script>
<!-- uhchat -->
<div class="uhchat" style="display: none;">
<script src="https://uhchat.net/code.php?f=e2bf53"></script>
</div>
<!-- end uhchat -->
 </body>
 <!-- ADX -->
 <script type="text/javascript" src="//media1.admicro.vn/cpa/admicro-core.min.js"></script>
<script type="text/javascript">
window.admicro_cpa_q = window.admicro_cpa_q || [];
window.admicro_cpa_q.push({event: "retargeting", id: 4309});
</script>
<!-- END ADX -->
<!-- Fire Base -->
<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBQ_qZ_5NqPRCkbHQC6DGoHyvdaRHwS07Q",
    authDomain: "vhr2-c0991.firebaseapp.com",
    databaseURL: "https://vhr2-c0991.firebaseio.com",
    projectId: "vhr2-c0991",
    storageBucket: "vhr2-c0991.appspot.com",
    messagingSenderId: "609771797462"
  };
  firebase.initializeApp(config);
</script>
<!-- END FIRE BASE -->
</html>
