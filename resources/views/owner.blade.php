@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    @if(Auth::user()->aktif == 1)
                        <a>akun anda sudah aktif</a>
                    @else
                        </br>
                        <a>mohon maaf akun ada belum aktif,</a>
                        <a>mohon tunggu admin untuk meng aktifkan</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection