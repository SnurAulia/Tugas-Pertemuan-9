@extends('layout.app')

@section('title', 'Coba')

@section('content')
<div class="card">
    <div class="card-bodyt">
        <h3>Nama Teman : {{ $friends['nama'] }}</h3>
        <h3>No.Tlp Teman : {{ $friends['no_tlp'] }}</h3>
        <h3>Alamat Teman : {{ $friends['alamat'] }}</h3> 
    </div>
</div>


@endsection

