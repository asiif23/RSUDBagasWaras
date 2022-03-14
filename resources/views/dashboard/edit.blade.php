@extends('dashboard.main')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('pasien/' .$pasiens->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$pasiens->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$pasiens->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$pasiens->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$pasiens->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop