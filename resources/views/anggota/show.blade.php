@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">anggota Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $anggota->name }}</h5>
        <p class="card-text">Angkatan : {{ $anggota->angkatan }}</p>
        <p class="card-text">Status Anggota : {{ $anggota->status_anggota}}</p>
        <p class="card-text">Domisili : {{ $anggota->domisili }}</p>
        <p class="card-text">Program Studi : {{ $anggota->prodi}}</p>
        <p class="card-text">Nomor HP/WA : {{ $anggota->phone}}</p>
  </div>
      
    </hr>
  
  </div>
</div>