@extends('layouts.default')

@section('title')
	Create Post | Loofow
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
	<p class="title is-1">Edit your Post</p>
	<div class="container"> 
		<form class="create-post-form" method="POST" action="{{ route('create-post') }}">
		{{ csrf_field() }}
			<div class="section"> 
				<div class="field"> 
					<div class="label"> 
						Nama Barang
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="Namabarang" name="name"> 	
							</div>
						</div>
					</div>
				</div>
				<div class="field">
					<div class="label"> 
						Jenis
					<div class="control">
						<label class="radio">
						<input value="Lost" type="radio" name="type">
						Lost
						</label>
						<label class="radio">
						<input value= "Found" type="radio" name="type">
						Found
						</label>
					</div>
				</div>
				<div class="field">
					<label class="label">Kategori</label>
					<div class="control">
						<div class="select">
							<select name="category">
								<option value="Dompet">Dompet</option>
								<option value="Elektronik" selected>Elektronik</option>
								<option value="Kunci">Kunci</option>
								<option value="Pakaian">Pakaian</option>
								<option value="Surat Pribadi">Surat Pribadi</option>
							</select>
						</div>
					</div>
				</div>
					<div class="label">	
						Provinsi
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="e.g. Jawa Barat" name="province">	
							</div>
						</div>
					</div>
					<div class="label">	
						Kota
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="e.g. Bandung" name="city">	
							</div>
						</div>
					</div>
					<div class="label">	
						Jalan
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="e.g. Cisitu" name="district">	
							</div>
						</div>
					</div>
					<div class="field">
					<label class="label">Tanggal Ditemukan/Hilang</label>
					<div class="control">
						<div class="select">
						<select name="date">
							<option>-</option>
							@for ($i = 1; $i < 32; $i++)
								<option value={{$i}}>{{$i}}</option>
						@endfor
						</select>
						</div>
					</div>
					<div class="field">
					<label class="label">Bulan Ditemukan/Hilang</label>
					<div class="control">
						<div class="select">
						<select name="month">
							<option>-</option>
							@for ($i = 1; $i < 13; $i++)
								<option value={{$i}}>{{$i}}</option>
						@endfor
						</select>
						</div>
					</div>
					<div class="field">
					<label class="label">Tahun Ditemukan/Hilang</label>
					<div class="control">
						<div class="select">
						<select name="year">
							<option>-</option>
							@for ($i = 2016; $i < 2020; $i++)
								<option value={{$i}}>{{$i}}</option>
						@endfor
						</select>
						</div>
					</div>
					<div class="label">	
						Warna
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="e.g. Biru" name="color">	
							</div>
						</div>
					</div>
					<div class="label">	
						Model
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="e.g. Samsung" name="model">	
							</div>
						</div>
					</div>
					<div class="field">
						<label class="label">Deskripsi</label>
						<div class="control">
							<textarea class="textarea" placeholder="Deskripsi" name="description"></textarea>
						</div>
					</div>
					<div class="field">
						<label class="label">Upload Foto Barang</label>
						<div class="file is-primary">
							<label class="file-label">
							<input class="file-input" type="file" name="foto">
							<span class="file-cta">
								<span class="file-label">
								Upload
								</span>
							</span>
							</label>
						</div>
					</div>
					<div class="label">	
						Jenis Kontak
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="e.g. HP" name="contact_type">	
							</div>
						</div>
					</div>
					<div class="label">	
						ID/Nomor
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="e.g. 08111111111" name="contact">	
							</div>
						</div>
					</div>
					<div class="label">	
						Pertanyaan Verifikasi
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="Pertanyaan" name="question">	
							</div>
						</div>
					</div>
					<div class="label">	
						Pilihan A
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="Pilihan" name="a">	
							</div>
						</div>
					</div>
					<div class="label">	
						Pilihan B
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="Pilihan" name="b">	
							</div>
						</div>
					</div>
					<div class="label">	
						Pilihan C
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="Pilihan" name="c">	
							</div>
						</div>
					</div>
					<div class="label">	
						Jawaban
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="Pilihan Benar" name="answer">	
							</div>
						</div>
					</div>
				</div>
				<div class="field is-grouped">
					<div class="control">
						<button type="submit" class="button is-link">Submit</button>
					</div>
					<div class="control">
						<a href="{{url('/')}}">
							<button class="button is-link is-light">Cancel</button>
						</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection