@extends('layouts.default')

@section('title')
	Post | Loofow
@endsection

@section('style')
	.content {
	    text-align: center;
	}

	.title {
	    font-size: 84px;
	}

	.links > a {
	    color: #636b6f;
	    padding: 0 25px;
	    font-size: 13px;
	    font-weight: 600;
	    letter-spacing: .1rem;
	    text-decoration: none;
	    text-transform: uppercase;
	}

	.m-b-md {
	    margin-bottom: 30px;
	}
@endsection

@section('content')
<div class="container">
	<p class="title is-1">Nama Barang</p>
	<p class="subtitle is-3">Kategori</p>
	<div class="columns">
		<div class="column is-one-third">
			<figure class="image is square">
				<img src="https://www.memecomic.id/data/articleimage/33696b4b4af5f39030bb2807beb075e4.png">
			</figure>
		</div>
		<div class="column">
			<p class="subtitle is-5"><strong>Provinsi:</strong> Jawa Barat</p>
			<p class="subtitle is-5"><strong>Kota:</strong> Bandung</p>
			<p class="subtitle is-5"><strong>Jalan:</strong> Cisitu</p>
			<p class="subtitle is-5"><strong>Tanggal Ditemukan/Hilang:</strong> tgl-bulan-tahun</p>
			<p class="subtitle is-5"><strong>Deskripsi:</strong></p>
			<p class="subtitle is-5">Blablablabla</p>
		</div>
		<div class="column">
			<div class="tile is-ancestor">
				<div class="tile is-vertical is-8">
					<div class="tile">
					<div class="tile is-parent is-vertical">
						<article class="tile is-child notification is-primary">
						<p class="title">Kontak Penemu</p>
						<p class="text has-text-weight-bold">Nama User</p>
						<p class="text">Jenis</p>
						<p class="text">Id/Nomor</p>
						</article>
					</div>
					</div>
				</div>
			</div>
			<div class="buttons">
				<button class="button is-warning"><strong>Claim</strong></button>
			</div>
		</div>
	</div>
</div>

@endsection
