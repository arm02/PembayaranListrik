@extends('layouts.navbar')

@section('title')
Edit Pelangan
@endsection
@section('content')

<div class="container">
	<div class="row">
		<h1>Edit Pelanggan</h1>
	<form method="POST" action="{{url('pelanggan/update')}}">
		<div class="form-group">
			<label>Nometer</label>
			<input name="nometer" type="text" 
			class="form-control" required="Harap Masukan" oninvalid="this.setCustomValidity('Harap Lengkapi Data Berikut')"
			oninput="setCustomValidity('')" value="{{$pel->nometer}}">
		</div>
		<div class="form-group">
			<label>Nama Pelanggan</label>
			<input name="nama" type="text" 
			class="form-control" required="Harap Masukan" oninvalid="this.setCustomValidity('Harap Lengkapi Data Berikut')"
			oninput="setCustomValidity('')" value="{{$pel->nama}}">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input name="alamat" type="text" 
			class="form-control" required="Harap Masukan" oninvalid="this.setCustomValidity('Harap Lengkapi Data Berikut')"
			oninput="setCustomValidity('')" value="{{$pel->alamat}}">
		</div>
		<div class="form-group">
			<label>Kode Tarif</label>
			<select name="kodetarif" class="form-control">
				@foreach($tarif as $key)
				<option value="{{$key->kodetarif}}">{{$key->kodetarif}}</option>
				@endforeach
			</select>
		</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="id" value="{{$pel->id}}">
		<center>
			<button style="width: 200px;" type="submit" class="btn btn-success pull-right">Save</button>
			<br>
			<br>
		</center>
	</form>
	</div>
</div>
@endsection