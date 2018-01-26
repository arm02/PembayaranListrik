@extends('layouts.navbar')

@section('title')
User Edit
@endsection

@section('content')
<div class="container">
<div class="row">
<form method="POST" action="{{url('user/update')}}">
	
	<div class="form-group">
      <label for="nama_barang">Nama</label>
     <input id="name" type="text" 
    class="form-control" name="name" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Kode Nama')"
    oninput="setCustomValidity('')" value="{{$user->name}}">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
     <input id="email" type="email" value="{{$user->email}}" 
    class="form-control" name="email" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Email')"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
     <input id="password" type="password" 
    class="form-control" name="password" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Password')" 
    oninput="setCustomValidity('')" placeholder="Isi ulang jika ingin edit">
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="id" value="{{$user->id}}">
    <center>
    <button style="width: 200px;" type="submit" class="btn btn-success pull-right">User Update</button>
    <br>
    <br>
    </center>
</form>
<br>
 </div>
 </div>



@endsection