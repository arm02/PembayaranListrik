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
			<th style="text-align: center;">Action</th>
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
			<td style="text-align: center;">@if($r->status==1)<label style="color: red;">BELUM LUNAS</label> @else <label style="color: green;">LUNAS</label> @endif</td>
			<td style="text-align: center;">
				@if($r->status==2)
				<a href="{{url('tagihan/delete/'.$r->id)}}" onclick="return confirm('are u sure to delete ?')">
				<button class="btn btn-danger" title="Delete"><span class="fa fa-trash"></span></button></a>
				@else
				<a href="{{url('pembayaran/add/'.$r->id)}}">
					<button class="btn btn-warning" title="Pay Now"><span class="fa fa-money"></span></button>
				</a>
				@endif
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>

@endsection