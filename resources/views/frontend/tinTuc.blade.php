@extends('frontend.layouts.app')
@section('title')
@if(@isset ($get_cate))
    {{ $get_cate->description }}| Liên Hệ :  0916.08.66.88
@else
Tin tức mới nhất từ chủ đầu tư | Liên Hệ :  0916.08.66.88
@endif
@endsection
@section('main')
	<div class="uk-container uk-container-center">
		<ul class="uk-breadcrumb">
		    <li><a href="{{ url('/')}}">Trang chủ</a></li>
		    <li class="uk-active"><span>Tin tức</span></li>
		</ul>
	</div>
	<!-- news -->
	<div class="news uk-container uk-container-center uk-animation-slide-right">
		<h1>
			<div class="title uk-text-center"> Tin Tức - Sự Kiện</div>
		</h1>
		<div class="uk-grid">


		@foreach($posts as $post )
		<div class=" item-news item uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 ">
				<div class="news-img">
					<a href="{{ $post->getUrl() }}"><img class="uk-border-rounded" src="{{$post->avatar}}" alt="{{ $post->post }}"></a>
				</div>
				<div class="desc">
					<h4>
						<a href="{{ $post->getUrl() }}">{{ $post->post }}</a>
					</h4>
					<div class="info"><?php echo(strip_tags(html_entity_decode($post->getShortDec()))); ?></div>
					<div class="date"> <i class="uk-icon-clock-o"></i> {{$post->views}} lượt xem</div>
				</div>
			</div>

		@endforeach







		</div>
		<!-- Pagination -->
		<!-- {{ $posts->links() }} -->

		@if ($posts->lastPage() > 1)
			<ul class="uk-pagination">

				@if ($posts->currentPage()==1)
					<!-- <li class="{{ ($posts->currentPage() == 1) ? 'uk-disabled' : '' }}">
			        	<span><i class="uk-icon-angle-double-left"></i></span>
			    	</li> -->

				@else

					<li class="{{ ($posts->currentPage() == 1) ? 'uk-disabled' : '' }}">
				        <a href="{{ $posts->url(1) }}"><span><i class="uk-icon-angle-double-left"></i></span></a>
				    </li>

				@endif



			    @for ($i = 1; $i <= $posts->lastPage(); $i++)


			        @if( $posts->currentPage() == $i )

			        	<li class="uk-active"><span>{{ $i }}</span></li>

			        @else
			        	<li class="">
			            	<a href="{{ $posts->url($i) }}">{{ $i }}</a>
			        	</li>
			        @endif


			    @endfor

			    @if ($posts->currentPage()==$posts->lastPage())



				@else

					<li><a href="{{ $posts->url($posts->currentPage()+1) }}" >Next</a></li>
				    <li><a href="{{ $posts->url($posts->lastPage()) }}"><i class="uk-icon-angle-double-right"></i></a></li>

				@endif



			    <!-- <li class="{{ ($posts->currentPage() == $posts->lastPage()) ? 'uk-disabled' : '' }}">
			        <a href="{{ $posts->url($posts->currentPage()+1) }}" >Next</a>
			    </li> -->

			</ul>
		@endif

	</div>
		<!-- modal -->
	@include('frontend.layouts.modal')
@endsection