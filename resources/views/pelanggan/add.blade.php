@extends('layouts.navbar')

@section('title')
Add Pelangan
@endsection
@section('content')

<div class="container">
	<div class="row">
		<h1>Add Pelanggan</h1>
	<form method="POST" action="{{url('pelanggan/save')}}">
		<div class="form-group">
			<label>Nometer</label>
			<input id="nometer" name="nometer" type="text" 
			class="form-control" required="Harap Masukan" oninvalid="this.setCustomValidity('Harap Lengkapi Data Berikut')"
			oninput="setCustomValidity('')">
		</div>
		<div class="form-group">
			<label>Nama Pelanggan</label>
			<input id="nama" name="nama" type="text" 
			class="form-control" required="Harap Masukan" oninvalid="this.setCustomValidity('Harap Lengkapi Data Berikut')"
			oninput="setCustomValidity('')">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input id="alamat" name="alamat" type="text" 
			class="form-control" required="Harap Masukan" oninvalid="this.setCustomValidity('Harap Lengkapi Data Berikut')"
			oninput="setCustomValidity('')">
		</div>
		<div class="form-group">
			<label>Kode Tarif</label>
			<select name="kodetarif" class="form-control">
				<option selected>Pilih satu !!!</option>
				@foreach($tarif as $key)
				<option value="{{$key->kodetarif}}">{{$key->kodetarif}} - {{$key->daya}} Watt</option>
				@endforeach
			</select>
		</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<center>
			<button style="width: 200px;" type="submit" class="btn btn-success pull-right">Save</button>
			<br>
			<br>
		</center>
	</form>
	</div>
</div>
@endsection