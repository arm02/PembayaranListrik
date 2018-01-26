@extends('layouts.navbar')

@section('title')
User Index
@endsection

@section('content')

<div class="container">
	<div class="row">
		<a href="{{url('user/add')}}"><button class="btn btn-primary"><i class="fa fa-plus"></i></button></a>
		<a href="{{url('user/pdf')}}" ><button class="btn btn-success">PDF</button></a>
		<br>
		<br>
<table class="table">
	<thread>
		<tr>
			<th style="text-align: center;">Nama</th>
			<th style="text-align: center;">Email</th>
			<th colspan="2" style="text-align: center;">Action</th>
		</tr>
	</thread>
	<tbody>
		@foreach($user as $r)
		<tr>
			<td style="text-align: center;">{{$r->name}}</td>
			<td style="text-align: center;">{{$r->email}}</td>
			<td style="text-align: center;">
				<a href="{{url('user/edit/'.$r->id)}}"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
				<a href="{{url('user/delete/'.$r->id)}}" onclick="return confirm('are u sure to delete ?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>

@endsection