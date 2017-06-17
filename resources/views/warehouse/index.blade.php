@extends('header')

@section('title','库存量')

@section('content')
	<div>
		<span class="title">库存量</span>
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
				<th class="text-center">库存量</th>
				<th class="text-center">备注</th>
				<th class="text-center">修改时间</th>
			</tr>
			<tr class="text-center">
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
			</tr>
			<tr class="text-center">
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
			</tr>
			<tr class="text-center">
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
			</tr>
			<tr class="text-center">
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
			</tr>
			<tr class="text-center">
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
				<td>bbb</td>
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
		<a class="btn btn-success" href="{{ asset('/warehouse/storage') }}">入库</a>
		<button class="btn btn-info">导出Excel</button>
	</div>
@endsection