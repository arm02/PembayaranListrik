@extends('layouts.navbar')

@section('title')
Tarif Index
@endsection

@section('content')

<div class="container">
	<div class="row">
		<a href="{{url('tarif/add')}}"><button class="btn btn-primary"><i class="fa fa-plus"></i></button></a>
		<br>
		<br>
		<table class="table">
			<thread>
				<tr>
					<th style="text-align: center;">ID </th>
					<th style="text-align: center;">Kode Tarif</th>
					<th style="text-align: center;">Daya</th>
					<th style="text-align: center;">Tarif per KWH</th>
					<th colspan="2" style="text-align: center;">Action</th>
				</tr>
			</thread>
			<tbody>
				@foreach($tarif as $key)
				<tr>
					<td style="text-align: center;">{{ $key->id }}</td>
					<td style="text-align: center;">{{ $key->kodetarif }}</td>
					<td style="text-align: center;">{{ $key->daya }}</td>
					<td style="text-align: center;">{{ $key->tarifperkwh }}</td>
					<td style="text-align: center;">
						<a href="{{ url('tarif/'.$key->id.'/edit') }}" onclick="return "><button class="btn btn-primary"><i class="fa fa-trash-o"></i></button></a>
						<a href="{{url('')}}" onclick="return confirm('are u sure to delete ?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection