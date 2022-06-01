@extends('layouts.admin')
@section('content')
<div class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 class="mb-0">System & Dashbaords</h5>
				</div>
				<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
				</div>
			</div>
			<hr/>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th>Title</th>
							<th>Desription</th>
							<th>Area</th>
							<th>Access</th>
						</tr>
					</thead>
					<tbody>
						@foreach($items as $item)
						<tr>
							<td>
								<h6 class="font-14">{{$item->title}}</h6>
							</td>
							<td>{{$item->description}}</td>
							<td>{{$item->thematic_area->description}}</td>
							<td>{{$item->access_method}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	@endsection