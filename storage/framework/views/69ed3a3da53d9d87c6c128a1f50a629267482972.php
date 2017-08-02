<nav class="tm-navbar uk-navbar uk-navbar-attached " data-uk-sticky="" style=" top: 0px; width: 100%; left: 0px;">
    <div class="uk-container uk-container-center data-uk-sticky">

        <a class="uk-navbar-brand uk-hidden-small" href="<?php echo e(url('/')); ?>">
        <img class="uk-margin uk-margin-remove" src="<?php echo e(asset('/samples/logo.png')); ?>" width="65" 
        height=" title= " Chung cư hồng hà eco city " alt="Chung cư hồng hà eco city" ></a>

        <ul class="uk-navbar-nav uk-hidden-small">
            <?php $menu_lv1 = DB::table('categories')->where([['parent_id',0],['is_hidden',0]])
            ->orderBy('position', 'ASC')->get(); ?>
            <?php $__currentLoopData = $menu_lv1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="" data-uk-dropdown>
                <?php if($item1->parent_id ==0): ?>
                    <a href="<?php echo e(route('page', $item1->slug)); ?>"><?php echo $item1->category; ?></a>
                <?php else: ?>
                <?php echo $item1->category; ?>

                <?php endif; ?>
                <div class="menu-childen uk-dropdown uk-dropdown-navbar">
                    <ul class="uk-nav uk-nav-navbar">
                        <?php $menu_lv2 = DB::table('categories')->where('is_hidden', '0')->where('parent_id',$item1->id)->orderBy('position', 'ASC')->get(); ?>
                        <?php $__currentLoopData = $menu_lv2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('category', ['slug' => $item2->slug])); ?>"><?php echo $item2->category; ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- <li class="<?php echo e(((Route::currentRouteName()=='quy-can-hot')?'uk-active':'')); ?>"><a href="<?php echo e(Route('quy-can-hot-frontend')); ?>">Quỹ căn hot</a></li> -->

            <li class="<?php echo e(((Route::currentRouteName()=='lien-he2')?'uk-active':'')); ?>"><a href="<?php echo e(Route('lien-he2')); ?>">liên hệ</a></li>
            </ul>
        <ul class="hotline-top uk-nav uk-float-right uk-hidden-small">
            <!-- <li class="hotline"><a href="tel:0967876969"><span class="uk-icon-phone"></span>0967.87.69.69</a></li> -->
            <li class="hotline"><a href="tel:‎0916086688"><span class="uk-icon-phone"></span>0916.08.66.88</a></li>
            <li class="bao-gia"><a href="#my-id-form" title="nhận báo giá" data-uk-modal>Nhận báo giá</a></li>
        </ul>
        <!-- <ul class="uk-nav uk-text-right">
            <li><a href="tel:0967876969" title="hotline">0967.87.69.69</a></li>
        </ul> -->

        <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>

        <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><a href="<?php echo e(url('/')); ?>" title=""><img
                        src="<?php echo e(asset('/samples/logo.png')); ?>" width="60" height="30" title="Chung cư hồng hà eco city"
                        alt="Chung cư hồng hà eco city"></a></div>

    </div>
    <div id="tm-offcanvas" class="uk-offcanvas ng-scope">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav="">
                <li class=" uk-parent uk-active uk-open my-id my-id">
                    <a href="<?php echo e(url('/')); ?>">Trang chủ</a>
                </li>
                <?php $menu_lv1 = DB::table('categories')->where('is_hidden', '0')->where('parent_id',0)->orderBy('position', 'ASC')->get(); ?>
            <?php $__currentLoopData = $menu_lv1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="" data-uk-dropdown>
                <?php if($item1->parent_id ==0): ?>
                    <a href="<?php echo e(route('page', $item1->slug)); ?>"><?php echo $item1->category; ?></a>
                <?php else: ?>
                <?php echo $item1->category; ?>

                <?php endif; ?>
                <div class="menu-childen">
                    <ul class="uk-nav uk-nav-navbar">
                        <?php $menu_lv2 = DB::table('categories')->where('is_hidden', '0')->where('parent_id',$item1->id)->orderBy('position', 'ASC')->get(); ?>
                        <?php $__currentLoopData = $menu_lv2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('category', ['slug' => $item2->slug])); ?>"><?php echo $item2->category; ?></a></li>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- <li class="<?php echo e(((Route::currentRouteName()=='quy-can-hot')?'uk-active':'')); ?>"><a href="<?php echo e(Route('quy-can-hot-frontend')); ?>">Quỹ căn hot</a></li> -->

            <li class="<?php echo e(((Route::currentRouteName()=='lien-he2')?'uk-active':'')); ?>"><a href="<?php echo e(Route('lien-he2')); ?>">liên hệ</a></li>
            </ul>
        </div>
    </div>
</nav>
