<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/admin/pulgins/bootstrap-3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/admin/css/header.css">
	<link rel="stylesheet" type="text/css" href="/admin/css/main.css">
	<script type="text/javascript" src="/admin/pulgins/jquery-1.9.1.js"></script>

</head>
<body>
<div class="wrap">
	<div class="nav">
		<ul>
			<li>智能物资管理系统</li>
			<li class="firstMenu">
				<a href="{{ asset('/warehouse/index') }}">仓库</a>
				<ul>
					<li><a href="{{ asset('/warehouse/index') }}">库存量</a></li>
					<li><a href="{{ asset('/warehouse/storage') }}">入库</a></li>
					<li><a href="{{ asset('/warehouse/lists') }}">清单管理</a></li>
					<li><a href="{{ asset('/warehouse/inRecord') }}">入库记录</a></li>
					<li><a href="{{ asset('/warehouse/outRecord') }}">出库记录</a></li>
				</ul>
			</li>

			<li class="firstMenu">
				<a href="#">站点</a>
				<ul>
					<li><a href="#">物资上传</a></li>
					<li><a href="#">查看</a></li>
					<li><a href="#">操作记录</a></li>
					<li><a href="#">管理</a></li>
				</ul>
			</li>

			<li class="firstMenu">
				<a href="#">账号</a>
				<ul>
					<li><a href="#">管理</a></li>
					<li><a href="#">权限</a></li>
					<li><a href="#">修改密码</a></li>
					<li><a href="#">退出</a></li>
				</ul>
			</li>
			
		</ul>
	</div>
	<div class="content">
		@yield('content')
	</div>
</div>
<script type="text/javascript" src="/admin/js/header.js"></script>
</body>
</html>