@extends('header')

@section('title','出库记录')

@section('content')
	<div>
		<span class="title">出库记录</span>
	</div>
	<div class="index-search">
		<form class="form-inline">
			<div class="form-group">
				<select class="form-control input-200">
					<option>材料/设备</option>
					<option>型号</option>
					<option>单位</option>
					<option>单站点数量</option>
					<option>备注</option>
					<option>操作人</option>
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
				<th class="text-center">材料/设备</th>
				<th class="text-center">型号</th>
				<th class="text-center">单位</th>
				<th class="text-center">入库数量</th>
				<th class="text-center">操作时间</th>
				<th class="text-center">操作人</th>
			</tr>
			<tr class="text-center">
				<td>1</td>
				<td>GSM 6601 MU</td>
				<td>爱立信 900频段</td>
				<td>台</td>
				<td>100</td>
				<td>2017-6-18 12:24:20</td>
				<td>管理员</td>
			</tr>
			<tr class="text-center">
				<td>2</td>
				<td>GSM 6601 RRU</td>
				<td>爱立信 900频段</td>
				<td>台</td>
				<td>100</td>
				<td>2017-6-18 12:24:20</td>
				<td>管理员</td>
			</tr>
			<tr class="text-center">
				<td>3</td>
				<td>BPN2板</td>
				<td>中兴</td>
				<td>块</td>
				<td>100</td>
				<td>2017-6-18 12:24:20</td>
				<td>管理员</td>
			</tr>
			<tr class="text-center">
				<td>4</td>
				<td>LTE E频段 RRU</td>
				<td>中兴 E频段</td>
				<td>台</td>
				<td>100</td>
				<td>2017-6-18 12:24:20</td>
				<td>管理员</td>
			</tr>
			<tr class="text-center">
				<td>5</td>
				<td>LTE F频段 RRU</td>
				<td>中兴 F频段</td>
				<td>台</td>
				<td>100</td>
				<td>2017-6-18 12:24:20</td>
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