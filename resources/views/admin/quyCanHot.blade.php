@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="container">
	<div id="huong-dan">
	<h2>Hướng dẫn</h2>
	<p>
		Để chuyển bảng excel sang html cần làm những bước sau:
		<ul>
			<li>Bước 1: Vào excel copy toàn bộ file.</li>
			<li>Bước 2: Vào trang <a href="http://tableizer.journalistopia.com/" target="_blank">http://tableizer.journalistopia.com/</a> rồi paste nội dung vào. </li>
			<li>Bước 3: Tích vào ô No CSS và ấn Tableize.</li>
			<li>Bước 4: Copy toàn bộ, <br/>
				
				 </li>
			<li>Paste vào mấy cái ô ở dưới, xóa 2 cái thẻ <br/>
			&lt;table class=&quot;tableizer-table&quot;&gt; <br/>
				&lt;table&gt; <br/>.</li>

		</ul>
	</p>
	</div>

	<div class="" role="tabpanel">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Nhà Vườn</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Song Lập</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Tứ Lập</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Đơn Lập</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
	                          <form action="{{route('update-quy-can-hot')}}" method="post">
								
								<div class="form-group">
									<label for="post">Nội dung bên trong</label>
									<textarea class="form-control" name="content" >{{ $nhavuon }}</textarea>
									
									
								</div>
								<input type="hidden" name="id" value="nha-vuon">
								
								{{csrf_field()}}
								
								<button type="submit" class="btn btn-default">Cập nhật</button>
							</form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <form action="{{route('update-quy-can-hot')}}" method="post">
								
								<div class="form-group">
									<label for="post">Nội dung bên trong</label>
									<textarea class="form-control" name="content" >{{ $songlap }}</textarea>
									
									
								</div>
								<input type="hidden" name="id" value="song-lap">
								
								{{csrf_field()}}
								
								<button type="submit" class="btn btn-default">Cập nhật</button>
							</form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <form action="{{route('update-quy-can-hot')}}" method="post">
								
								<div class="form-group">
									<label for="post">Nội dung bên trong</label>
									<textarea class="form-control" name="content" >{{ $tulap }}</textarea>
									
									
								</div>
								<input type="hidden" name="id" value="tu-lap">
								
								{{csrf_field()}}
								
								<button type="submit" class="btn btn-default">Cập nhật</button>
							</form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                          <form action="{{route('update-quy-can-hot')}}" method="post">
								
								<div class="form-group">
									<label for="post">Nội dung bên trong</label>
									<textarea class="form-control" name="content" >{{ $donlap }}</textarea>
									
									
								</div>
								<input type="hidden" name="id" value="don-lap">
								
								{{csrf_field()}}
								
								<button type="submit" class="btn btn-default">Cập nhật</button>
							</form>
                        </div>
                      </div>
                    </div>
	
    <div class="">
    	
    </div>
</div>
</div>
@endsection
@section('script')





@endsection