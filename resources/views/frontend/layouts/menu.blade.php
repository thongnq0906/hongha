<nav class="tm-navbar uk-navbar uk-navbar-attached " data-uk-sticky="" style=" top: 0px; width: 100%; left: 0px;">
    <div class="uk-container uk-container-center data-uk-sticky">

        <a class="uk-navbar-brand uk-hidden-small" href="{{ url('/')}}">
        <img class="uk-margin uk-margin-remove" src="{{ asset('../assets/images/logo.png') }}" width="90" 
        height=" title= " Chung cư hồng hà eco city " alt="Chung cư hồng hà eco city" ></a>

        <ul class="uk-navbar-nav uk-hidden-small">
            <?php $menu_lv1 = DB::table('categories')->where('parent_id',0)->get(); ?>
            @foreach($menu_lv1 as $item1)
            <li class="" data-uk-dropdown>
                @if($item1->parent_id ==0)
                    <a href="{{ route('page', $item1->slug) }}">{!! $item1->category !!}</a>
                @else
                {!! $item1->category !!}
                @endif
                <div class="menu-childen uk-dropdown uk-dropdown-navbar">
                    <ul class="uk-nav uk-nav-navbar">
                        <?php $menu_lv2 = DB::table('categories')->where('parent_id',$item1->id)->get(); ?>
                        @foreach($menu_lv2 as $item2)
                            <li><a href="{{ route('category', ['slug' => $item2->slug]) }}">{!! $item2->category !!}</a></li>
                         @endforeach
                    </ul>
                </div>
            </li>
            @endforeach
            <!-- <li class="{{{ ((Route::currentRouteName()=='quy-can-hot')?'uk-active':'') }}}"><a href="{{ Route('quy-can-hot-frontend') }}">Quỹ căn hot</a></li> -->

            <li class="{{{ ((Route::currentRouteName()=='lien-he2')?'uk-active':'') }}}"><a href="{{ Route('lien-he2') }}">liên hệ</a></li>
            </ul>
        <ul class="hotline-top uk-nav uk-float-right uk-hidden-small">
            <li class="hotline"><a href="tel:0967876969"><span class="uk-icon-phone"></span>0967.87.69.69</a></li>
            <li class="hotline"><a href="tel:0916086688"><span class="uk-icon-phone"></span>0916.08.66.88</a></li>
            <li class="bao-gia"><a href="#my-id-form" title="nhận báo giá" data-uk-modal>Nhận báo giá</a></li>
        </ul>
        <!-- <ul class="uk-nav uk-text-right">
            <li><a href="tel:0967876969" title="hotline">0967.87.69.69</a></li>
        </ul> -->

        <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>

        <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><a href="{{ url('/')}}" title=""><img
                        src="{{ asset('../assets/images/logo.png') }}" width="90" height="30" title="logo vhr2"
                        alt="vinhomes riverside"></a></div>

    </div>
    <div id="tm-offcanvas" class="uk-offcanvas ng-scope">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav="">
                <li class="my-id">
                    <a href="{{ url('/')}}">Trang chủ</a>
                </li>
                <?php $menu_lv1 = DB::table('categories')->where('parent_id',0)->get(); ?>
            @foreach($menu_lv1 as $item1)
            <li class="" data-uk-dropdown>
                @if($item1->parent_id ==0)
                    <a href="{{ route('page', $item1->slug) }}">{!! $item1->category !!}</a>
                @else
                {!! $item1->category !!}
                @endif
                <div class="menu-childen uk-dropdown uk-dropdown-navbar">
                    <ul class="uk-nav uk-nav-navbar">
                        <?php $menu_lv2 = DB::table('categories')->where('parent_id',$item1->id)->get(); ?>
                        @foreach($menu_lv2 as $item2)
                            <li><a href="{{ route('category', ['slug' => $item2->slug]) }}">{!! $item2->category !!}</a></li>
                         @endforeach
                    </ul>
                </div>
            </li>
            @endforeach
            <!-- <li class="{{{ ((Route::currentRouteName()=='quy-can-hot')?'uk-active':'') }}}"><a href="{{ Route('quy-can-hot-frontend') }}">Quỹ căn hot</a></li> -->

            <li class="{{{ ((Route::currentRouteName()=='lien-he2')?'uk-active':'') }}}"><a href="{{ Route('lien-he2') }}">liên hệ</a></li>
            </ul>
        </div>
    </div>
</nav>
