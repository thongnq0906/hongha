<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Dự án Chung Cư Hồng Hà Eco City do Chủ đầu tư Công ty Cổ phần Tứ Hiệp Hồng Hà phụ trách mang đến chốn an cư lý tưởng cho cư dân.">
	<meta name="description" content="Chung Cư Hồng Hà Eco City, eco city tứ hiệp, chung cư tứ hiệp, chung cư hồng hà tứ hiệp, chung cư eco city, chung cư hồng hà, bán chung cư tứ hiệp, dự án hồng hà eco city.">
	<title><?php echo $__env->yieldContent('title'); ?></title>
	<link rel="shortcut icon" href="samples/favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="samples/favicon.png">

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
		

		
</head>
<body>
		<div class="retargeting" style="display: none">
			
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
<!-- uhchat -->
<div class="uhchat" style="display: none;">
<script src="https://uhchat.net/code.php?f=e2bf53"></script>
</div>
<!-- end uhchat -->
 </body>
</html>
