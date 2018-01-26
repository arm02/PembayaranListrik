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
		<form class="form-group" role="form" method="get" action="{{ url('tagihan/search') }}">

                            &nbsp;&nbsp;&nbsp;
                            <input type="text" style="width: 200px;" class="form-control" name="query" placeholder="Masukan ID Pelanggan" id="cari">
                            <input type="hidden" name="search" value="1">
                        </form>
		<br>

<table class="table">
	<thread>
		<tr>
			<th style="text-align: center;">Nama Pelanggan</th>
			<th style="text-align: center;">Bulan</th>
			<th style="text-align: center;">Tahun</th>
			<th style="text-align: center;">Jumlah Meter</th>
			<th style="text-align: center;">Status</th>
			<th colspan="3" style="text-align: center;">Action</th>
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
				<a href="{{url('pembayaran/add/'.$r->id_pelanggan)}}">
					<button class="btn btn-warning" style="display: none">@if($r->status==2)LUNAS</button>
					@else
					<button class="btn btn-warning">PEMBAYARAN @endif</button>
				</a>
				<a href="{{url('tagihan/delete/'.$r->id)}}" onclick="return confirm('are u sure to delete ?')">
				<button class="btn btn-danger pull-right"><i class="fa fa-trash-o"></i></button></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>

@endsection