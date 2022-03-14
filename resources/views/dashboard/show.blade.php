@extends('dashboard.main')
@section('content')
<div class="card">
  <div class="card-header">pasiens Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $pasiens->name }}</h5>
        <p class="card-text">Address : {{ $pasiens->address }}</p>
        <p class="card-text">Mobile : {{ $pasiens->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>