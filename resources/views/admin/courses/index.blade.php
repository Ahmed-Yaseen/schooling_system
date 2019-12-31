@extends('layouts.db')
@section('page_name')
Courses
@endsection

@section('content')

	<div class="card">
		<div class="card-header">
			<h3 class="card-title">DataTable with default features</h3>
		</div>
		<!-- /.card-header -->
			<div class="card-body">
				<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>check</td>
						<td>
							<a href="" class="btn btn-primary btn-xs">EDIT</a>
							<a href="" class="btn btn-danger btn-xs">REMOVE</a>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>ACTION</th>
					</tr>
				</tfoot>
			</table>
		</div>
		<!-- /.card-body -->

	</div><!-- card -->
@endsection
