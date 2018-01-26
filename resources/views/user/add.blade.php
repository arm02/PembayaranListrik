@extends('layouts.navbar')

@section('title')
User Add
@endsection

@section('content')
<div class="container">
<div class="row">
<form method="POST" action="{{url('user/save')}}">
	
	<div class="form-group">
      <label for="nama_barang">Nama</label>
     <input id="name" type="text" 
    class="form-control" name="name" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Kode Nama')"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
     <input id="email" type="email" 
    class="form-control" name="email" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Email')"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
     <input id="password" type="password" 
    class="form-control" name="password" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Password')"
    oninput="setCustomValidity('')">
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <center>
    <button style="width: 200px;" type="submit" class="btn btn-success pull-right">User Baru</button>
    <br>
    <br>
    </center>
</form>
<br>
 </div>
 </div>



@endsection