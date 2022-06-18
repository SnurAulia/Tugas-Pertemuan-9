@extends('layout.app')

@section('title', 'Coba')

@section('content')
<div class="card">
    <div class="card-bodyt">
        <h3>Nama Teman : {{ $groups['name'] }}</h3>
        <h3>Deskripsi : {{ $groups['description'] }}</h3>
    </div>
</div>


@endsection

