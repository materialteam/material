@extends('header')

@section('title','操作记录')

@section('content')
	<div>
		<span class="title">操作记录</span>
	</div>
	<div class="index-search">
		<form class="form-inline">
			<div class="form-group">
				<select class="form-control input-200">
					<option>时间</option>
					<option>操作人</option>
					<option>数量</option>
					<option>名称</option>
				</select>
				<input type="text" class="form-control input-200">
				<button type="submit" class="btn btn-primary">搜索</button>
			</div>
		</form>
	</div>
	<div class="index-lists">
		<table class="table table-hover">
			<tr class="info">
				<th class="text-center">序号</th>
				<th class="text-center">操作类型</th>
				<th class="text-center">备注</th>
				<th class="text-center">操作内容</th>
				<th class="text-center">操作时间</th>
				<th class="text-center">操作人</th>
			</tr>
			<tr class="text-center">
				<td>1</td>
				<td>上传</td>
				<td>无</td>
				<td>上传天河客运站物资清单</td>
				<td>2017-6-18 10:40:20</td>
				<td>管理员</td>
			</tr>
			<tr class="text-center">
				<td>2</td>
				<td>申请审核</td>
				<td>无</td>
				<td>申请天河客运站物资清单审核</td>
				<td>2017-6-18 12:40:20</td>
				<td>施工队</td>
			</tr>
			<tr class="text-center">
				<td>3</td>
				<td>导出文件</td>
				<td>无</td>
				<td>导出天河客运站物资清单文件</td>
				<td>2017-6-18 13:40:20</td>
				<td>施工队</td>
			</tr>
			<tr class="text-center">
				<td>4</td>
				<td>查看</td>
				<td>无</td>
				<td>查看六号线物资清单</td>
				<td>2017-6-18 12:50:20</td>
				<td>管理员</td>
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
		<button class="btn btn-info">导出Excel</button>
		<button class="btn btn-danger" onclick="history.go(-1)">返回</button>
	</div>
@endsection