@extends('header')

@section('title','清单上传')

@section('content')
	<div>
		<span class="title">清单上传</span>
	</div>
	<div class="index-search">
		<form class="form-inline">
			<div class="form-group">
				<select class="form-control">
					<option>请选择线路</option>
					<option>1号线</option>
					<option>2号线</option>
					<option>3号线</option>
					<option>4号线</option>
					<option>5号线</option>
				</select>
				<select class="form-control">
					<option>请选择站点</option>
					<option>广州东站</option>
					<option>体育中心</option>
					<option>体育西路</option>
					<option>杨箕</option>
					<option>东山口</option>
				</select>
				<input type="text" style="margin-left:100px;" class="form-control" placeholder="请输入地铁站名">
				<button type="submit" class="btn btn-primary">搜索</button>
				<span style="display:inline;margin-left:100px;font-size:16px;color:#f60">广州东站站</span>
			</div>
		</form>
	</div>
	<div class="index-lists">
		<table class="table table-hover">
			<tr class="info">
				<th class="text-center">材料</th>
				<th class="text-center">备注</th>
				<th class="text-center">数量</th>
			</tr>
			<tr class="text-center">
				<td>E频RRU</td>
				<td></td>
				<td style="width:40%">
					<input type="text" class="form-control input-80 table-input">
				</td>
			</tr>
			<tr class="text-center">
				<td>FDD频RRU</td>
				<td></td>
				<td style="width:40%">
					<input type="text" class="form-control input-80 table-input">
				</td>
			</tr>
			<tr class="text-center">
				<td>RRU电源线（3*6M²/米</td>
				<td></td>
				<td style="width:40%">
					<input type="text" class="form-control input-80 table-input">
				</td>
			</tr>
			<tr class="text-center">
				<td>1.5方电源线</td>
				<td></td>
				<td style="width:40%">
					<input type="text" class="form-control input-80 table-input">
				</td>
			</tr>
			<tr class="text-center">
				<td>BPL1板</td>
				<td></td>
				<td style="width:40%">
					<input type="text" class="form-control input-80 table-input">
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
		<a class="btn btn-success" href="#">上传</a>
		<a class="btn btn-danger" href="#">取消</a>
	</div>
@endsection