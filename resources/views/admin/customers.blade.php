@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="">
    	<table class="table">
    	<tr style="font-weight: bold;">
				<td>STT</td>
				<td>Tên</td>
				<td>Số điện thoại</td>
				<td>Email</td>
				<td>Địa Chỉ</td>
				<td>Ngày giờ đăng ký</td>
			</tr>
    
			<?php $i=0;?>
			@foreach($customers as $customer)
			<?php $i++;?>
			<tr>
				<td>{{$i}}</td>
				<td>{{ $customer->name}} </td>
				<td><a href="tel:{{ $customer->telephone}}">{{ $customer->telephone}}</a></td>
				<td>{{ $customer->email }}</td>
				<td>{{ $customer->message }}</td>
				<td>{{ $customer->created_at }}</td>
				<td>
					<form action="{{ route('remove-customer') }}" method="post" style="display:inline;">
						<input type="hidden" name="id" value="{{$customer->id}}">
						<button class="btn btn-danger" type="submit">Xóa</button>
						{{ csrf_field() }}
					</form>
				</td>
			</tr>
			@endforeach
		</table>
		<div class="uk-text-center">
			{!!$customers->links()!!}
		</div>
		
	
		 
	</div>
</div>
@endsection
@section('script')





@endsection