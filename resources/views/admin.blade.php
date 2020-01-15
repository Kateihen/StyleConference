@extends('layouts.app')


@section('content')
	<section class="hero container">
		<a href="/register" class="btn btn-alt">Register New Manager</a><!--
		--><<a href="/list" class="btn btn-alt">List Of Managers</a>
	</section>

	<div class="row-alt">
		<section class="container sub">
			<p>Manager: {{ $admin->name }}</p>
		</section>
	</div>

	<section class="row row-another">
		<div class="container">
			<h5>List of Visitors:</h5>

			@foreach($visitors as $visitor)
			  
				<table>
					<thead>
						<tr>
							<th scope="row">
								Name:
							</th>
							<td class="schedule-offset" colspan="2">{{ $visitor->name }}</td>
						</tr>
					</thead>

					<tbody>
						<tr>
							<th scope="row">
								ID:
							</th>
						<td class="schedule-offset" colspan="2">{{ $visitor->id }}</td>
						</tr>

						<tr>
							<th scope="row">
								Email:
							</th>
						<td class="schedule-offset" colspan="2">{{ $visitor->email }}</td>
						</tr>

						<tr>
							<th scope="row">
								Comment:
							</th>
						<td class="schedule-offset" colspan="2">{{ $visitor->comments ?? 'No Comments' }}</td>
						</tr>

						<tr>
							<th scope="row">
								Number of Passes:
							</th>
						<td>{{ $visitor->num_of_passes }}</td>
						<td>Total Sum: {{ $visitor->num_of_passes * 30}}&#36;</td>
						</tr>

						<tr>
							<th scope="row">
								Date of Registration:
							</th>
						<td class="schedule-offset" colspan="2">{{ $visitor->created_at}}</td>
						</tr>
					</tbody>
				</table>

			@endforeach
		</div>

	</section>

@endsection