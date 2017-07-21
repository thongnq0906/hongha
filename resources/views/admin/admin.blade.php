@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="">
    
		<table class="table">
			<thead>
				<tr>
					<th class="col-md-1">ID</th>
					<th class="col-md-7">Email</th>
					<th class="col-md-4">Role</th>
				</tr>
			</thead>
			<tbody>
			@foreach($users as $user)
			
				<tr>
				
					
					<td>{{$user->id}}</td>
					<td>{{$user->email}}</td>
					<td>
					<form action="{{route('admin.assign')}}" method="post">
					<input type="hidden" name="id" value="{{$user->id}}" />
					<div class="checkbox-inline">
  						<label><input 
						type="checkbox" 
						name="role_user"
						{{ $user->hasRole('user')?'checked':'' }} 
						/>User</label>
					</div>

					<div class="checkbox-inline">
  						<label><input 
						type="checkbox" 
						name="role_author"
						{{ $user->hasRole('author')?'checked':'' }} 
						/>Author</label>
					</div>

					<div class="checkbox-inline">
  						<label><input 
						type="checkbox" 
						name="role_admin"
						{{ $user->hasRole('admin')?'checked':'' }} 
						/>Admin</label>
					</div>

					<div class="checkbox-inline">
					<input type="submit" value="Submit">
					</div>
					{{ csrf_field() }}
					</form></td>
					
				
				</tr>
				
			@endforeach
			</tbody>
		</table>
		
		
		 
	</div>
</div>
@endsection