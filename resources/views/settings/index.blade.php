@extends('layouts.template')
@section('title','Dasboard')
@section('sub-judul','Home')
@section('content')

<div class="container">
    <div class="row">
    <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Website</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Company Profile</a>
    
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <h3>Website</h3>
        <div class="col-12">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="" class="form-control " placeholder="Nama" >
              </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="" class="form-control purchase-code" placeholder="Description">
              </div>
        </div>
      <div class="col-12">
        <label>Logo </label>
        <input class="form-control" name="logo" type="file" accept="image/*" onchange="loadFile(event)">
        <img id="output" width="150">
     </div>
     <button class="ml-3 btn btn-primary">EDIT</button>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <h3>Company Profile</h3>
     <div class="container">
     <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="" class="form-control " placeholder="Nama" >
              </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Telp</label>
                <input type="text" name="" class="form-control purchase-code" placeholder="Description">
              </div>
        </div>
     <div class="col-12">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="" class="form-control purchase-code" placeholder="Email">
              </div>
        </div>
     <div class="col-12">
            <div class="form-group">
                <label>Marketing</label>
                <input type="text" name="" class="form-control purchase-code" placeholder="Marketing">
              </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="" class="form-control purchase-code" placeholder="Alamat">
              </div>
        </div>
        <button class="ml-3 btn btn-primary">EDIT</button>
        </div>
        
        </div>
    </div>
    </div>

    <div class="row">

</div>



@endsection
@section('addon')
<script>
    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
 </script>



@endsection