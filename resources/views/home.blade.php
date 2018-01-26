@extends('layouts.navbar')

@section('title')
PLO
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">PLO Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat Datang Di PLO ( PEMBAYARAN LISTRIK ONLINE )
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
