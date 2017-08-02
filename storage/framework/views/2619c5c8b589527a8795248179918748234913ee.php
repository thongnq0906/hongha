<?php $__env->startSection('title'); ?>
Chung cư Hồng Hà Eco City - Tứ Hiệp, Thanh Trì
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
	
		<div class="slideshow">
			<div class="uk-slidenav-position" data-uk-slideshow="{kenburns:true, autoplay:true}">
	            <ul class="uk-slideshow uk-overlay-active" data-uk-slideshow="{kenburns:true}">
	            <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                <li data-slideshow-slide="img">
	                	<img src="<?php echo e($s->image); ?>">
	                	<div class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-left">
                            <h1><?php echo e($s->title); ?></h1>
                            <!--<p>Con đường của vẻ đẹp kiêu sa, sang quý, của hoàn mỹ, vẹn toàn.</p>-->
                        </div>
                	</li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            </ul>
	            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
			    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
	            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
	            	<?php $i=0; ?>
						<?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sli): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					        <li data-uk-slideshow-item="<?php echo e($i); ?>"><a href=""></a></li>
				        <?php $i++; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    	</ul>
	        </div>
		</div>

		<div class="overview uk-grid ">
			<div class="over-item over-item-1 uk-width-large-1-2 uk-width-medium-1-2 uk-text-left">
				<div class="title"> Video dự án</div>
				<div class="videos">
					<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F1955250248055690%2Fvideos%2F1979061009007947%2F&show_text=0" width="100%" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
				</div>
			</div>
			<div class="over-item uk-width-large-1-2 uk-width-medium-1-2">
				<div class="uk-panel">
					<div class="title uk-text-center"> Tổng quan dự án	 </div>
					<div class="desc ">
						<p>
							- <b>Vị trí</b>: Dự án tọa lạc tại xã Tứ Hiệp, huyện Thanh Trì, thành phố Hà Nội</br>
							- <b>Tổng diện tích sàn xây dựng</b>: 107,031m2</br>
							- <b>Chủ đầu tư</b>: Công ty CP Tứ Hiệp Hồng Hà Dầu Khí</br>
							- <b>Tiện ích chung cư Hồng Hà Eco City</b>: bể bơi 500 m², nhà trẻ, phòng tập gym, siêu thị mini, nhà hàng, cà phê sân vườn, khu vui chơi trẻ em, …</br>
						</p>
					</div>
					<div class="nav">
						<div class=" uk-grid">
							<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 media-heading">
								<div class="uk-card uk-card-default uk-card-body">
									<a class="media-left uk-width-1-6" href="<?php echo e(url('/')); ?>" >
										<img src="<?php echo e(asset('samples/icon-1.png')); ?>" alt="icon hồng hà eco city">
									</a>
									<div class="uk-width-5-6"><b>Diện tích dự án:</b></div>
									16,7 ha
								</div>
							</div>
							<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 media-heading">
								<div class="uk-card uk-card-default uk-card-body">
									<a class="media-left uk-width-1-6" href="<?php echo e(url('/')); ?>" >
										<img src="<?php echo e(asset('samples/icon-3.png')); ?>" alt="icon hồng hà eco city">
									</a>
									<div class="uk-width-5-6"><b>Mật độ xây dựng:</b></div>
									30 %
								</div>
							</div>
							<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 media-heading">
								<div class="uk-card uk-card-default uk-card-body">
									<a class="media-left uk-width-1-6" href="<?php echo e(url('/')); ?>">
										<img src="<?php echo e(asset('samples/icon-4.png')); ?>" alt="icon hồng hà eco city">
									</a>
									<div class="uk-width-1-1"><b>Hạ tầng giao thông & Không gian:</b></div>
									70%
								</div>
							</div>
							<div class="uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 media-heading">
								<div class="uk-card uk-card-default uk-card-body">
									<a class="media-left uk-width-1-6" href="<?php echo e(url('/')); ?>">
										<img src="<?php echo e(asset('samples/icon-5.png')); ?>" alt="icon hồng hà eco city">
									</a>
									<div class="uk-width-1-1"><b>Số tòa nhà:</b></div>
									8 tòa nhà thương mại từ CT7- CT14
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
					<div class="desc ">
						<a href=""><b>Chung cư Hồng Hà Eco City</b></a> thuộc tổng thể khu đô thị mới Hồng Hà Eco City. Cách trung tâm thủ đô Hà Nội khoảng 8Km về phía Nam, nơi đây sở hữu trọn vẹn vị trí đắc địa về Phong thủy cũng như Môi trường sống hoàn hảo.<br><br>

						Chung cư Hồng Hà Eco City được thừa hưởng không khí trong lành, mát mẻ nhờ nằm cận kề dòng sông Hồng huyết mạch cùng hơn 3.000.000m2 hồ nước và cây xanh từ công viên Yên Sở phía Đông Bắc và gần 1.000.000m2 mặt nước tại Đầm Trì cách dự án 500m. Ngự trị tại vị trí vàng nơi có hệ thống đuờng giao thông huyết mạch, hiện đại đã được đầu tư xây dựng như: trục đường cao tốc Pháp Vân – Cầu Giẽ – cầu Thanh Trì, quốc lộ 1A, đường cao tốc trên cao Vành đai 3, đường Phạm Hùng,…<br><br>

						Ngoài ra, từ dự án di chuyển đến các điểm lân cận cũng rất thuận tiện:<br>
						- Liền kề KĐT Pháp Vân, bệnh viện Nội Tiết Trung Ương<br>
						- Cách hệ thống trường học xã Tứ Hiệp 200m<br>
						- Cách Công viên Yên Sở 1km<br>
						- Cách siêu thị Metro Hoàng Mai 2km<br>
						- Cách bến xe Giáp Bát 2,5km<br>
						- Cách KĐT Ecopark 8km<br>
					</div>
				</div>
			</div>
			<div class="img_position uk-width-large-1-2 uk-width-medium-1-2 uk-float-right">
				<div class="videos">
					<img src="<?php echo e(asset('assets/images/section-bg-location.png')); ?>" alt="" class="vitri">
				</div>
			</div>

		</div>
		<!-- shophouse VHR2 -->
		<div class="shophouse uk-container uk-conatiner-center uk-text-center">
			<div class="">
				<div class="title uk-text-center">  Mặt Bằng Hồng Hà Eco City</div>
				<!-- <div class="shophouse-item uk-grid">
					<div class="item uk-width-large-1-3 uk-width-medium-1-1 uk-width-small-1-1">
						<a href="<?php echo e(url('/tin-tuc/nha-o-xa-hoi-tu-hiep-hong-ha-eco-city-36.html')); ?>" title="">
							<img src="<?php echo e(asset('samples/tieu-khu/loai-hinh-nha-o-xa-hoi-chung-cu-hong-ha-eco-city.jpg')); ?>">
						</a>
						<a href="<?php echo e(url('/tin-tuc/nha-o-xa-hoi-tu-hiep-hong-ha-eco-city-36.html')); ?>" title="">
							<h3>Nhà ở xã hội</h3>
						</a>
						<div class="cate">
							Dự án nhà ở xã hội được thiết kế đồng bộ hạ tầng kỹ thuật và xã hội. Tòa nhà được thiết kế đồng nhất với thiết kế chung của khu đô thị, không có sự khác biệt nhà ở xã hội và nhà thương mại.
						</div>
					</div>
					<div class="item uk-width-large-1-3 uk-width-medium-1-1 uk-width-small-1-1">
						<a href="<?php echo e(url('/tin-tuc/toa-nha-thuong-mai-hong-ha-eco-city-37.html')); ?>" title="">
							<img src="<?php echo e(asset('samples/tieu-khu/loai-hinh-toa-nha-thuong-mai-hong-ha-eco-city.jpg')); ?>">
						</a>
						<a href="<?php echo e(url('/tin-tuc/toa-nha-thuong-mai-hong-ha-eco-city-37.html')); ?>" title="">
							<h3>Tòa nhà thương mại</h3>
						</a>
						<div class="cate">
							Dự án khu đô thị Hồng Hà Eco City được xây dựng với quy mô lớn bao gồm  khu nhà ở xã hội, thương mại, văn phòng, trường tam cấp hiện đang là sản phẩm nhận được sự quan tâm của đông đảo khách hàng và nhà đầu tư. Nổi bật là nhà ở thương mại tại dự án.
						</div>
					</div>
					<div class="item uk-width-large-1-3 uk-width-medium-1-1 uk-width-small-1-1">
						<a href="<?php echo e(url('/tin-tuc/trung-tam-thuong-mai-hong-ha-eco-city-35.html')); ?>" title="">
							<img src="<?php echo e(asset('samples/tieu-khu/loai-hinh-trung-tam-thuong-mai.jpg')); ?>"/>
						</a>
						<a href="<?php echo e(url('/tin-tuc/trung-tam-thuong-mai-hong-ha-eco-city-35.html')); ?>" title="">
							<h3>Trung tâm thương mại</h3>
						</a>
						<div class="cate">
							Không nằm trong phân khúc nhà ở cao cấp nhưng khu đô thị Hồng Hà Eco City vẫn được giới chuyên gia đánh giá cao và chiếm được sự quan tâm của đông đảo khách hàng hiện nay khi mang đến một công trình hiện đại...
						</div>
					</div>
				</div> -->
			</div>
		</div>
		<div class="extentions matbang uk-container uk-container-center">
				<div class="item_extent">
					<ul class="uk-nav">
						<li><a href="<?php echo e(asset('samples/mat-bang/mat-bang-CT11-tang4-27-chung-cu-hong-ha-eco-city.jpg')); ?>" title="Mặt Bằng CT11 Tầng 4 - 27" data-uk-lightbox="{group:'group2'}">
							<img src="<?php echo e(asset('samples/mat-bang/mat-bang-CT11-tang4-27-chung-cu-hong-ha-eco-city.jpg')); ?>" alt="Mặt Bằng CT11 Tầng 4 - 27">
							<div class="light-text"><span>Mặt Bằng CT11 Tầng 4 - 27</span></div>
						</a></li>
						<li><a href="<?php echo e(asset('samples/mat-bang/mat-bang-CT12-tang3-22-chung-cu-hong-ha-eco-city.jpg')); ?>" title="CT12 Tầng 3-22" data-lightbox-type="image" data-uk-lightbox="{group:'group2'}">
							<img src="<?php echo e(asset('samples/mat-bang/mat-bang-CT12-tang3-22-chung-cu-hong-ha-eco-city.jpg')); ?>" alt="CT12 Tầng 3-22">
							<div class="light-text"><span>CT12 Tầng 3-22</span></div>
						</a></li>
						<li><a href="<?php echo e(asset('samples/mat-bang/mat-bang-CT13-tang4-17-chung-cu-hong-ha-eco-city.jpg')); ?>" title="Mặt Bằng CT13 Tầng 4-17" data-lightbox-type="image" data-uk-lightbox="{group:'group2'}">
							<img src="<?php echo e(asset('samples/mat-bang/mat-bang-CT13-tang4-17-chung-cu-hong-ha-eco-city.jpg')); ?>" alt="Mặt Bằng CT13 Tầng 4-17">
							<div class="light-text"><span>Mặt Bằng CT13 Tầng 4-17</span></div>
						</a></li>
						<li><a href="<?php echo e(asset('samples/mat-bang/mat-bang-CT14-tang-dien-hinh-3-21-chung-cu-hong-ha-eco-city.jpg')); ?>" title="Mặt Bằng CT14 Tầng Điển hình 3-21" data-lightbox-type="image" data-uk-lightbox="{group:'group2'}">
							<img src="<?php echo e(asset('samples/mat-bang/mat-bang-CT14-tang-dien-hinh-3-21-chung-cu-hong-ha-eco-city.jpg')); ?>" alt="Mặt Bằng CT14 Tầng Điển hình 3-21">
							<div class="light-text"><span>Mặt Bằng CT14 Tầng Điển hình 3-21</span></div>
						</a></li>
						<li><a href="<?php echo e(asset('samples/mat-bang/mat-bang-tang-ham-CT10-chung-cu-hong-ha-eco-city.jpg')); ?>" title="Mặt Bằng Tầng Hầm CT10" data-lightbox-type="image" data-uk-lightbox="{group:'group2'}">
							<img src="<?php echo e(asset('samples/mat-bang/mat-bang-tang-ham-CT10-chung-cu-hong-ha-eco-city.jpg')); ?>" alt="Mặt Bằng Tầng Hầm CT10">
							<div class="light-text"><span>Mặt Bằng Tầng Hầm CT10</span></div>
						</a></li>
						<li><a href="<?php echo e(asset('samples/mat-bang/mat-bang-tang-ham-CT10-chung-cu-hong-ha-eco-city.jpg')); ?>" title="Mặt Bằng Tầng Hầm CT10" data-lightbox-type="image" data-uk-lightbox="{group:'group2'}">
							<img src="<?php echo e(asset('samples/mat-bang/mat-bang-tang-ham-CT10-chung-cu-hong-ha-eco-city.jpg')); ?>" alt="Mặt Bằng Tầng Hầm CT10">
							<div class="light-text"><span>Mặt Bằng Tầng Hầm CT10</span></div>
						</a></li>
					</ul>
				</div>
			</div>
		<!-- sản phẩm paragon -->
			<div class="product-vhr ">
				<div class="uk-container uk-container-center">
					<div class="title">TIN TỨC & SỰ KIỆN</div>
					<div class="item-para uk-grid">
						<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="item uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
							<a href="<?php echo e($n->getUrl()); ?>" title="Victory Tower"><img src="<?php echo e($n->avatar); ?>"></a>
							<h3>
								<div class="cate" style="color: #ffffff;">
									<?php echo e($n->post); ?>

								</div>
							</h3>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</div>
			<!-- tiện ích tại paragon -->
			<div class="extentions uk-container uk-container-center">
				<div class="item_extent">
				<div class="title">Tiện ích đẳng cấp</div>
				<div class="desc ">
					Với chuỗi tiện ích hòan hảo từ nội khu đến ngoại khu tại chung cư <a href="<?php echo e(url('/')); ?>">Hồng Hà Eco City</a> không chỉ đáp ứng được mọi nhu cầu thiết yếu hàng ngày của cư dân mà còn hứa hẹn mang
					đến một cuộc sống đầy đủ và chất lượng, nâng tầm giá trị sống cho mọi khách hàng.</br>

					<img src="<?php echo e(asset('samples/tien-ich/giaoduc.jpg')); ?>" alt="Tiện ích Giáo dục" style="width: 10px; height: 10px;"/>&nbsp;&nbsp;<b>Tiện ích Giáo dục</b>: Hệ thống trường học tam cấp. Ngoài ra, các tiện ích ngoại khu: Trường mầm non, tiểu học, trung học cơ sở xã Tứ Hiệp, trường THCS Chu Văn An....</br>
					<img src="<?php echo e(asset('samples/tien-ich/yte.jpg')); ?>" alt="iện ích y tế, chăm sóc sức khỏe" style="width: 10px; height: 10px;"/>&nbsp;&nbsp;<b>Tiện ích y tế, chăm sóc sức khỏe</b> thừa hưởng các tiện ích ngoại khu như: Bệnh viện Nội tiết TW, bệnh viện Đa khoa Thanh Trì, bệnh viện đa khoa Thăng Long...</br>
					<img src="<?php echo e(asset('samples/tien-ich/giaitri.jpg')); ?>" alt="Tiện ích vui chơi" style="width: 10px; height: 10px;"/>&nbsp;&nbsp;<b>Tiện ích vui chơi</b>: Rạp chiếu phim – Club giải trí, Club Gym- Club thẩm mỹ, Đài phun nước, Đường dạo bộ, Sân vui chơi giải trí, Công viên 6 Giác quan,...</br>
					<img src="<?php echo e(asset('samples/tien-ich/muasam1.png')); ?>" alt="Tiện ích mua sắm" style="width: 10px; height: 10px;"/>&nbsp;&nbsp;<b>Tiện ích mua sắm</b>: Siêu thị, Trung tâm thương mại, salon, thẩm mỹ viện,... Các tiện ích ngoại khu: TTTM Thanh Trì, siêu thị Harpo Mart, siêu thị Metro Hoàng Mai, siêu thị Hoàng Mai...</br>
					<img src="<?php echo e(asset('samples/tien-ich/xebus.png')); ?>" alt="Dịch vụ công cộng" style="width: 10px; height: 10px;;"/>&nbsp;&nbsp;<b>Dịch vụ công cộng</b>: Bến xe Nước Ngầm, Bưu điện – Chuyển phát nhanh, trung tâm Vinaphone...	</br>
				</div>
					<ul class="uk-nav">
						<li><a href="<?php echo e(asset('samples/tien-ich/1499069011-carousel-4.jpg')); ?>" title="Bể bơi trong nhà" data-uk-lightbox="{group:'group1'}">
							<img src="<?php echo e(asset('samples/tien-ich/1499069011-carousel-4.jpg')); ?>" alt="Bể bơi trong nhà">
							<div class="light-text"><span>Bể bơi trong nhà</span></div>
						</a></li>
                        <li><a href="<?php echo e(asset('samples/tien-ich/1499069296-carousel-1.jpg')); ?>" title="Rạp chiếu phim" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
                            <img src="<?php echo e(asset('samples/tien-ich/1499069296-carousel-1.jpg')); ?>" alt="Rạp chiếu phim">
                            <div class="light-text"><span>Rạp chiếu phim</span></div>
                        </a></li>
						<li><a href="<?php echo e(asset('samples/tien-ich/1499069310-carousel-2.jpg')); ?>" title="khu vui chơi trẻ em" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
							<img src="<?php echo e(asset('samples/tien-ich/1499069310-carousel-2.jpg')); ?>" alt="khu vui chơi trẻ em">
							<div class="light-text"><span>khu vui chơi trẻ em</span></div>
						</a></li>
						<li><a href="<?php echo e(asset('samples/tien-ich/1499069332-carousel-3.jpg')); ?>" title="Bể bơi ngoài trời" data-lightbox-type="image" data-uk-lightbox="{group:'group1'}">
							<img src="<?php echo e(asset('samples/tien-ich/1499069332-carousel-3.jpg')); ?>" alt="Bể bơi ngoài trời">
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
							<div class="title uk-text-left">NHẬN THÔNG TIN CHUNG CƯ HỒNG HÀ ECO CITY</div>
						</h2>
						<?php if(Session::has('flash_message')): ?>
						<div class="uk-alert uk-alert-success"><em> <?php echo session('flash_message'); ?></em></div>
						<?php endif; ?>
						<?php if($errors->any()): ?>
					    <div class="uk-alert uk-alert-danger uk-alert-dismissible fade in" user="uk-alert">
					        <button type="button" class="uk-close" data-dismiss="uk-alert" aria-label="Close"><span aria-hidden="true">×</span>
					        </button>
					        <strong>Lỗi!</strong> 

					        <ul>
					            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
					            <li><?php echo e($message); ?></li>
					            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					        </ul>

					    </div>
					    <?php endif; ?>
						<form action="<?php echo e(route('contact-submit')); ?>" method="post" accept-charset="utf-8" class="uk-form">
							 <?php echo e(csrf_field()); ?>

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
								<?php if($errors->all()): ?>
								<div class="uk-alert uk-alert-danger">
									<ul>
										<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<li><?php echo e($error); ?></li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
								</div>
								<?php endif; ?>
								<?php if(!empty($success)): ?>
								<div class="uk-alert uk-alert-success uk-form-width-large">
									<p>
										
											Bạn đã đăng ký thành công!
											<br/>Queenland sẽ liên hệ với bạn trong thời gian sớm nhất.
											<br/>Xin trân trọng cảm ơn.
										
									<p>
								</div>
								<?php endif; ?>
								<div class="sumit-form uk-text-center uk-width-1-1">
								    <button class="uk-button uk-text-center"  type="submit"> Gửi Thông Tin</button>
								</div>	
							</div>
					       
				        </form>
					</div>
					<div class="item chinh-sach uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1">
						<h2>
							<div class="title uk-text-center">CHÍNH SÁCH SỰ KIỆN DỰ ÁN</div>
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
								<li class="hotline"><a href="tel:0916086688" title="hotline"><i class="uk-icon-phone"></i> Hotline : 0916.08.66.88</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
	<!-- modal -->
	<?php echo $__env->make('frontend.layouts.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>