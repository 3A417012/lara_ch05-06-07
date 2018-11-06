@extends('layouts.master')

@section('title', '排行榜')

@section('content')
	<div class="container">
		<div class="page-header">
			<h1>排名</h1>
		</div>
		<div class="row">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>名次</th>
						<th>學號</th>
						<th>姓名</th>
						<th>國文</th>
						<th>英文</th>
						<th>數學</th>
						<th>總分</th>
						<th>動作</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>3A532666</td>
						<td>小明</td>
						<td>60</td>
						<td>60</td>
						<td>60</td>
						<td>180</td>
						<td><a href="<?php echo route('student',['student_no'=>'3A532666']); ?>" class="btn btn-default btn-sm">查看學生資料</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection