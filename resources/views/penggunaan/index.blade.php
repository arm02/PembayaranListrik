@extends('layouts.navbar')

@section('title')
Penggunaan
@endsection

@section('content')

<div class="container">
  <div class="row">
    <a href="{{url('penggunaan/add')}}"><button class="btn btn-primary"><i class="fa fa-plus"></i></button></a>
    <a href="{{url('penggunaan/pdf')}}" ><button class="btn btn-success">PDF</button></a>
    <br>
    <br>
<table class="table">
  <thread>
    <tr>
      <th style="text-align: center;">Nama Pelanggan</th>
      <th style="text-align: center;">Bulan</th>
      <th style="text-align: center;">Tahun</th>
      <th style="text-align: center;">Meter Awal</th>
      <th style="text-align: center;">Meter Akhir</th>
      <th colspan="2" style="text-align: center;">Action</th>
    </tr>
  </thread>
  <tbody>
    <tr>
      @foreach($penggunaan as $key)
      <?php
        $getname = \App\Pelanggan::whereId($key->id_pelanggan)->value('nama');
      ?>

      <td style="text-align: center;">{{$getname}}</td>
      <td style="text-align: center;">{{$key->bulan}}</td>
      <td style="text-align: center;">{{$key->tahun}}</td>
      <td style="text-align: center;">{{$key->meterawal}}</td>
      <td style="text-align: center;">{{$key->meterakhir}}</td>
      <td style="text-align: center;">
        <a href="{{url('penggunaan/edit/'.$key->id)}}"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
        <a href="{{url('penggunaan/delete/'.$key->id)}}" onclick="return confirm('are u sure to delete ?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
      </td>
      @endforeach
    </tr>
  </tbody>
</table>
</div>
</div>

@endsection