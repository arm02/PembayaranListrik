@extends('layouts.navbar')

@section('title')
Tarif Index
@endsection

@section('content')

<div class="container">
	<div class="row">
		<a href="{{url('tarif/add')}}"><button class="btn btn-primary"><i class="fa fa-plus"></i></button></a>
		<a href="{{url('tarif/pdf')}}" ><button class="btn btn-success">PDF</button></a>
		<br>
		<br>
<table class="table">
	<thread>
		<tr>
			<th style="text-align: center;">Kode Tarif</th>
			<th style="text-align: center;">Daya</th>
			<th style="text-align: center;">Tarif per-kwh</th>
			<th colspan="2" style="text-align: center;">Action</th>
		</tr>
	</thread>
	<tbody>
		<tr>
			<td style="text-align: center;">10001</td>
			<td style="text-align: center;">1500 Watt</td>
			<td style="text-align: center;">Rp. 200</td>
			<td style="text-align: center;">
				<a href="{{url('')}}"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
				<a href="{{url('')}}" onclick="return confirm('are u sure to delete ?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
			</td>
		</tr>
	</tbody>
</table>
</div>
</div>

@endsection