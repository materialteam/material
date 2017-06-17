@extends('header')

@section('title','清单管理')

@section('content')
	<div>
		<span class="title">清单管理</span>
	</div>
	<div class="index-search">
		<form class="form-inline">
			<div class="form-group">
				<select class="form-control input-200">
					<option>名称</option>
					<option>规格</option>
					<option>数量</option>
				</select>
				<input type="text" class="form-control input-200">
				<button type="submit" class="btn btn-primary">搜索</button>
			</div>
		</form>
	</div>
	<div class="index-lists">
		<table class="table table-hover">
			<tr class="info">
				<th class="text-center">名称</th>
				<th class="text-center">规格</th>
				<th class="text-center">操作</th>
			</tr>
			<tr class="text-center">
				<td>bbb</td>
				<td>bbb</td>
				<td>
					<button class="btn btn-primary">修改</button>
					<button class="btn btn-danger">删除</button>
				</td>
			</tr>
			<tr class="text-center">
				<td>bbb</td>
				<td>bbb</td>
				<td>
					<button class="btn btn-primary">修改</button>
					<button class="btn btn-danger">删除</button>
				</td>
			</tr>
			<tr class="text-center">
				<td>bbb</td>
				<td>bbb</td>
				<td>
					<button class="btn btn-primary">修改</button>
					<button class="btn btn-danger">删除</button>
				</td>
			</tr>
			<tr class="text-center">
				<td>bbb</td>
				<td>bbb</td>
				<td>
					<button class="btn btn-primary">修改</button>
					<button class="btn btn-danger">删除</button>
				</td>
			</tr>

		</table>
		<nav aria-label="Page navigation" class="page-style">
		  <ul class="pagination">
		    <li>
		      <a href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li>
		      <a href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>
	</div>
	<div></div>
	<div class="index-footer">
		<a class="btn btn-info" href="">添加</a>
	</div>
@endsection