@extends('layouts.app')

@section('title')
	Dashboard | Loofow
@endsection

@section('content')
	<div class="container">
		<h1 class="title">Post yang Kamu Buat</h1>
		<div class="table-container">
			<table class="table is-fullwidth is-hoverable">
				<thead>
					<tr>
						<th class="has-text-centered">No</th>
						<th class="has-text-centered">Nama</th>
						<th class="has-text-centered">Tipe</th>
						<th class="has-text-centered">Tanggal Dibuat</th>
						<th class="has-text-centered">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($posts as $post)
						<tr>
							<td class="has-text-centered">0</td>
							<td class="has-text-centered">{{ $post['name'] }}</td>
							<td class="has-text-centered">{{ $post['type'] }}</td>
							<td class="has-text-centered">{{ $post['date'] }}</td>
							<td class="has-text-centered">
								<button class="button is-info is-outlined">Lihat</button>
								<button class="button is-primary is-outlined">Edit</button>
								<button class="button is-danger is-outlined">Delete</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<h1 class="title">Post yang Kamu Klaim</h1>
		<div class="columns">
			<div class="column justify-center">
				1
			</div>
			<div class="column">
				2
			</div>
		</div>
	</div>
@endsection