<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢迎登录</title>
	<style>
		.wrap{
			width: 200px;
			margin: 50px auto;
		}
	</style>
</head>
<body>
	<div class="wrap">
		<form action="{{ asset('/user/doLogin') }}" method="post">
			{{ csrf_field() }}
			<div>
				<label>账号：</label>
				<input type="text" name="" placeholder="请输入账号">
			</div>
			<div>
				<label>密码：</label>
				<input type="password" name="" placeholder="请输入密码">
			</div>
			<div>
				<input type="submit" value="登录">
			</div>
		</form>
	</div>
</body>
</html>