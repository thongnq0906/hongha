@component('mail::message')
# Introduction

<p>Cảm ơn bạn {{ $customer->name }} đã dăng ký nhận tin tức từ Queen Land.</p>
<br/>
<p>Chúng tôi sẽ liên hệ với bạn thông tin liên hệ :</p>
<ul>
	<li>{{$customer->name}}</li>
	<li>{{$customer->telephone}}</li>
	<li>{{$customer->email}}</li>
	<li>{{$customer->message}}</li>
</ul>


Trân trọng,<br>
Paragon 
@endcomponent
