@extends('frontend.layouts.app')
@section('title')
Quỹ căn hot Vinhomes Riverside - The Harmony| Liên Hệ : 0967.87.69.69
@endsection
@section('main')
            <div class="uk-container uk-container-center">
                <ul class="uk-breadcrumb">
                    <li><a href="{{ url('/')}}">Trang chủ</a></li>
                    <li class="uk-active"><span>Quỹ căn hot</span></li>
                </ul>
            </div>
            <!-- news -->
            <div class="quy-can-hot uk-container uk-container-center uk-animation-slide-right">
                <h1>
                    <div class="title uk-text-center"> Quỹ Căn Hot</div>
                </h1>
                <div class="list-tab">
                    <ul class="menu-tab uk-nav" data-uk-switcher="{connect:'#my-id-quy-can'}">
                        <li class="hd"><a href="Tiểu Khu Hướng Dương">Nhà Vườn</a></li>
                        <li class="pl"><a href="Tiểu Khu Phong Lan">Song Lập</a></li>
                        <li class="nq"><a href="Tiểu Khu Nguyệt Quế">Tứ Lập</a></li>
                        <li class="tl"><a href="Tiểu Khu Tulip">Đơn Lập</a></li>
                    </ul>
                    <div class="hotline uk-text-center"> 
                        <h3>
                            Chi tiết từng căn gọi ngay hotline :0967.87.69.69
                        </h3>                        <!-- This is the container of the content items -->
                        <ul id="my-id-quy-can" class="uk-switcher">
                            <li>
                                <div class="uk-overflow-container">
                                <table class="uk-table uk-table-striped uk-table-condensed uk-text-nowrap">
                                <?php echo(html_entity_decode($nhavuon)); ?>
                                </table>
                                </div>
                            </li>
                            <li>
                                <div class="uk-overflow-container">
                                    <table class="uk-table uk-table-striped uk-table-condensed uk-text-nowrap">
                                    <?php echo(html_entity_decode($songlap)); ?>
                                </table>
                                </div>
                            </li>
                            <li>
                                <div class="uk-overflow-container">
                                    <table class="uk-table uk-table-striped uk-table-condensed uk-text-nowrap">
                                    <?php echo(html_entity_decode($tulap)); ?>
                                </table>
                                </div>
                            </li>
                            <li>
                                <div class="uk-overflow-container">
                                    <table class="uk-table uk-table-striped uk-table-condensed uk-text-nowrap">
                                    <?php echo(html_entity_decode($donlap)); ?>
                                </table>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
        <!-- modal -->
    @include('frontend.layouts.modal')
@endsection