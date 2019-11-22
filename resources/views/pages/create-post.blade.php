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
	<p class="title is-1">Create a Post</p>
	<div class="container"> 
		<form class="create-post-form" method="POST" action="{{ route('create-post') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
			<div class="section"> 
				<div class="field"> 
					<div class="label"> 
						Nama Barang
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="Nama Barang" name="name" required> 	
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
				<div class="columns">
 				 <div class="column">
					<div class="label">	
						Provinsi
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="e.g. Jawa Barat" name="province" required>	
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="label">	
						Kota
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="e.g. Bandung" name="city" required>	
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="label">	
						Jalan
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="e.g. Cisitu" name="district" required>	
							</div>
						</div>
					</div>
				</div>
				</div>
				<label class="label">Waktu Ditemukan</label>
					<div class="field">
					<label class="label">Tanggal</label>
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
					<label class="label">Bulan</label>
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
					<label class="label">Tahun</label>
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
					<div class="columns">
 					<div class="column">
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
					</div>
					<div class="column">
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
					</div>
					</div>
					<div class="field">
						<label class="label">Deskripsi</label>
						<div class="control">
							<textarea class="textarea" placeholder="Deskripsi" name="description"></textarea required>
						</div>
					</div>
					<div class="field">
						<label class="label">Upload Foto Barang</label>
						<p class="control">
							<input type="file" name="image" required>
						</p>
					</div>
					<div class="columns">
					<div class="column">
					<div class="label">	
						Jenis Kontak
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="e.g. HP" name="contact_type" required>	
							</div>
						</div>
					</div>
					</div>
					<div class="column">
					<div class="label">	
						ID/Nomor
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="e.g. 08111111111" name="contact" required>	
							</div>
						</div>
					</div>
					</div>
					</div>
					<div class="label">	
						Pertanyaan Verifikasi
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="Pertanyaan" name="question" required>	
							</div>
						</div>
					</div>
					<div class="columns">
					<div class="column">
					<div class="label">	
						Pilihan A
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="Pilihan" name="a" required>	
							</div>
						</div>
					</div>
					</div>
					<div class="column">
					<div class="label">	
						Pilihan B
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="Pilihan" name="b" required>	
							</div>
						</div>
					</div>
					</div>
					<div class="column">
					<div class="label">	
						Pilihan C
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="Pilihan" name="c" required>	
							</div>
						</div>
					</div>
					</div>
					</div>
					<div class="label">	
						Jawaban
					</div>
					<div class="control">
 						 <label class="radio">
   							 <input value="a" type="radio" name="answer">
    							A
 						 </label>
 						 <label class="radio">
    						<input value="b" type="radio" name="answer">
    							B
  						</label>
						<label class="radio">
    						<input value="c" type="radio" name="answer">
    							C
  						</label>
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