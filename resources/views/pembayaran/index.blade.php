@extends('layouts.navbar')

@section('title')
Pembayaran Index
@endsection

@section('content')

<div class="container">
	<div class="row">
		<a href="{{url('pembayaran/pdf')}}" ><button class="btn btn-success">PDF</button></a>
		<br>
		<br>
		<table class="table">
			<thread>
				<tr>
					<th style="text-align: center;">ID Pelanggan</th>
					<th style="text-align: center;">Tanggal</th>
					<th style="text-align: center;">Bulan Bayar</th>
					<th style="text-align: center;">Biaya Admin</th>
					<th colspan="2" style="text-align: center;">Action</th>
				</tr>
			</thread>
			<tbody>
				@foreach($pembayaran as $key)
				<?php
				$getnama = \App\Pelanggan::whereId($key->id_pelanggan)->value('nama');
				?>
				<tr>
					<td style="text-align: center;">{{ $getnama }}</td>
					<td style="text-align: center;">{{ $key->tanggal }}</td>
					<td style="text-align: center;">{{ $key->bulanbayar }}</td>
					<td style="text-align: center;">{{ $key->biayaadmin }}</td>
					<td style="text-align: center;">
						<a href="{{url('pembayaran/delete/'.$key->id)}}" onclick="return confirm('are u sure to delete ?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection