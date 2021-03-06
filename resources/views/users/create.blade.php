@extends('layouts.default')

@section('title', 'SignUp')

@section('content')

<div class="offset-md-2 col-md-8">
	<div class="card">
		<div class="card-header">
			<h5>SIGN UP</h5>
		</div>
		<div class="card-body">

			@include('shares._errors')
			
			<form action="{{ route('users.store') }}" method="POST">

				@csrf

				<div class="form-group">
					<label for="name">名称</label>
					<input type="text" name="name" class="form-control" value="{{ old('name') }}">
				</div>

				<div class="form-group">
					<label for="name">邮箱</label>
					<input type="text" name="email" class="form-control" value="{{ old('email') }}">
				</div>

				<div class="form-group">
					<label for="name">密码</label>
					<input type="password" name="password" class="form-control" value="{{ old('password') }}">
				</div>

				<div class="form-group">
					<label for="name">确认密码</label>
					<input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
				</div>


				<button class="btn btn-primary" type="submit">注册</button>
			</form>
		</div>
	</div>
</div>


@stop