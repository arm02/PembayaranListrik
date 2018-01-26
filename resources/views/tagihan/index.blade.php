@extends('layouts.navbar')

@section('title')
Tagihan Index
@endsection

@section('content')

<div class="container">
	<div class="row">
		<a href="{{url('tagihan/add')}}"><button class="btn btn-primary"><i class="fa fa-plus"></i></button></a>
		<a href="{{url('tagihan/pdf')}}" ><button class="btn btn-success">PDF</button></a>
		<br>
		<br>
<table class="table">
	<thread>
		<tr>
			<th style="text-align: center;">Nama Pelanggan</th>
			<th style="text-align: center;">Bulan</th>
			<th style="text-align: center;">Tahun</th>
			<th style="text-align: center;">Jumlah Meter</th>
			<th style="text-align: center;">Status</th>
			<th colspan="2" style="text-align: center;">Action</th>
		</tr>
	</thread>
	<tbody>
		@foreach($tagihan as $r)
		<?php
		$nama = \App\Pelanggan::whereId($r->id_pelanggan)->value('nama');
		?>
		<tr>
			<td style="text-align: center;">{{$nama}}</td>
			<td style="text-align: center;">{{$r->bulan}}</td>
			<td style="text-align: center;">{{$r->tahun}}</td>
			<td style="text-align: center;">{{$r->jumlahmeter}}</td>
			<td style="text-align: center;">@if($r->status==1)BELUM LUNAS @else LUNAS @endif</td>
			<td style="text-align: center;">
				<a href="{{url('pembayaran/add')}}"><button class="btn btn-success">PEMBAYARAN</button></a>
				<a href="{{url('')}}"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
				<a href="{{url('')}}" onclick="return confirm('are u sure to delete ?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>

@endsection