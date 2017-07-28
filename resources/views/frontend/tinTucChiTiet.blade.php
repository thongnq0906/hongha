@extends('frontend.layouts.app')
@section('title')
{{ $post->post }}
@endsection
@section('main')
	<div class="main_vdh">
			<div class="uk-container uk-container-center" >
				<ul class="uk-breadcrumb">
				    <li><a href="{{ Route('home') }}">Trang chủ</a></li>
				    <li><a href="{{ Route('tin-tuc') }}">Tin tức</a></li>
				    <li class="uk-active"><span>{{ $post->post }}</span></li>
				</ul>
			</div>
			<!-- news -->
			<div class="uk-container uk-container-center" style="padding: 0;">
				<div class="uk-grid">
					<div class="new-left uk-width-large-4-6 uk-width-medium-4-6 uk-width-small-1-1">
						<div class="news news-detail uk-container uk-container-center uk-animation-slide-right">
							<h1>
								<div class="title">{{ $post->post }} 
									@if(Auth::check())
										<a href="{{ $post->getEditUrl() }}" target="_blank">
											<i class="uk-icon-pencil"></i>
										</a>
									@endif
									</div>
							</h1>
							<div class="auth">
								@if(Auth::check())
								by: <strong>{{$post->User->name}}</strong>
								@endif
							</div>
							<div class="detail-desc">
								<?php echo(html_entity_decode($post->description)); ?>					
							</div>
						</div>
					</div>
					<div class="new-right  uk-width-large-2-6 uk-width-medium-2-6 uk-width-small-1-1">
					<div class="news  uk-animation-slide-right">
						<h3>
							<div class="title uk-text-center"> Tin Hot</div>
						</h3>
						<div class="uk-grid" style="margin: 0;">
							@foreach($hotPost as $item )
							<div class=" item-news item uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1 ">
								<div class="news-img">
									<a href="{{ $item->getUrl() }}"><img class="uk-border-rounded" src="{{ $item->avatar }}" alt="{{ $item->post }}"></a>
								</div>
								<div class="desc">
									<h4>
										<a href="{{ $item->getUrl() }}">{{ $item->post }}</a>
									</h4>
									<div class="info">{{$item->views}} lượt xem</div>
									<div class="date"> <i class="uk-icon-clock-o"></i> {{ $item->updated_at->diffForHumans() }}</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					
					<div class="news  uk-animation-slide-right">
						<h3>
							<div class="title uk-text-center"> Tin mới nhất</div>
						</h3>
						<div class="uk-grid" style="margin: 0;">
						<!-- <div> tin mới set</div> -->
							@foreach($news as $item )
							<div class=" item-news item uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1 ">
								<div class="news-img">
									<a href="{{ $item->getUrl() }}"><img class="uk-border-rounded" src="{{ $item->avatar }}" alt="{{ $item->post }}"></a>
								</div>
								<div class="desc">
									<h4>
										<a href="{{ $item->getUrl() }}">{{ $item->post }}</a>
									</h4>
									<div class="info">{{$item->views}} lượt xem</div>
									<div class="date"> <i class="uk-icon-clock-o"></i> {{ $item->updated_at->diffForHumans() }}</div>
								</div>
							</div>
							@endforeach
							<!--  -->
							@foreach($newsPosts as $item )
							<div class=" item-news item uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1 ">
								<div class="news-img">
									<a href="{{ $item->getUrl() }}"><img class="uk-border-rounded" src="{{ $item->avatar }}" alt="{{ $item->post }}"></a>
								</div>
								<div class="desc">
									<h4>
										<a href="{{ $item->getUrl() }}">{{ $item->post }}</a>
									</h4>
									<div class="info">{{$item->views}} lượt xem</div>
									<div class="date"> <i class="uk-icon-clock-o"></i> {{ $item->updated_at->diffForHumans() }}</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					
					<!-- Video dự án -->
					<div class="news video  uk-animation-slide-right">
						<h3>
							<div class="title uk-text-center">Video dự án</div>
						</h3>
						<div class="">
							<div class=" item-news video item uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1 ">
							<iframe src="https://www.youtube.com/embed/d5aW8JCTegk?ecver=2" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
							</div>

						</div>
						<div class="" style="width: 100%;">
							<div class="item-video uk-grid" style="margin: 0;">
								<div class=" item-news item uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 ">
								<iframe src="https://www.youtube.com/embed/eUJTDKxpkD8?ecver=2" width="100%" height="100%" frameborder="0"  allowfullscreen></iframe>
								</div>
								<div class=" item-news item uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 ">
								<iframe src="https://www.youtube.com/embed/-Et4hTGF3vQ?ecver=2" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			
			<div class="news uk-container uk-container-center uk-animation-slide-right">
				<h1>
					<div class="title uk-text-center"> Tin liên quan</div>
				</h1>
				<div class="uk-grid">
					
					@foreach($hotPost as $item )
					<div class=" item-news item uk-width-large-1-2 uk-width-medium-1-2 uk-width-small-1-1 ">
						<div class="news-img">
							<a href="{{ $item->getUrl() }}"><img class="uk-border-rounded" src="{{ $item->avatar }}" alt="{{ $item->post }}"></a>
						</div>
						<div class="desc">
							<h4>
								<a href="{{ $item->getUrl() }}">{{ $item->post }}</a>
							</h4>
							<div class="info">{{$item->views}} lượt xem</div>
							<div class="date"> <i class="uk-icon-clock-o"></i>{{ $item->updated_at->diffForHumans() }}</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		<!-- modal -->
	@include('frontend.layouts.modal')
@endsection