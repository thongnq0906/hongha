@component('mail::message')
# Hồng Hà Eco City

Đã có khách hàng đăng ký liên hệ Hồng Hà EcoCity trên website hongha-ecocity.net<br>
Thông tin khách hàng : 
<ul>
	<li>Tên: {{$customer->name}}</li>
	<li>Số điện thoại: {{$customer->telephone}}</li>
	<li>Email: <a href="mailto:{{$customer->email}}">{{$customer->email}}</a></li>
	<li>Địa chỉ: {{$customer->message}}</li>
</ul>

@component('mail::button', ['url' => 'tel:'.$customer->telephone])
Gọi ngay khách hàng
@endcomponent

Cảm ơn,<br>
{{ config('app.name') }}
@endcomponent
