@extends('layouts.navbar')
@section('title')
Pelanggan Index
@endsection
@section('content')
<div class="container">
<div class="row">
<a href="{{url('pelanggan/add')}}"><button class="btn btn-primary"><i class="fa fa-plus"></i></button></a>
    <a href="{{url('pelanggan/pdf')}}" ><button class="btn btn-success">PDF</button></a>
    <br>
<br>

  <table class="table">
  <thread>
  <tr style="text-align: center;">
  	<th>Nama Pelanggan</th>
    <th>No Meter</th>
  	<th>Alamat</th>
  	<th>KodeTarif</th>
  	<th>Action</th>
  	</tr>
  </thread>
  <tbody>
  	@foreach($pel as $key)
  <tr>
  	<td>{{$key->nama}}</td>
    <td>{{$key->nometer}}</td>
  	<td>{{$key->alamat}}</td>
  	<td>{{$key->kodetarif}}</td>
    <td>
  	<a href="{{url('pelanggan/'.$key->id.'/edit')}}"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
        <a href="{{url('pelanggan/delete/'.$key->id)}}" onclick="return confirm('are u sure to delete ?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
    </td>
    

  	</tr>
  	@endforeach
  </tbody>
  </table>
</div>
</div>
@endsection