@extends('layouts.template')
@section('title','Dasboard')
@section('sub-judul','Home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label>Logo</label>    
                <input class="form-control" name="hero" type="file" accept="image/*" onchange="loadFile(event)">
                    </div>
                 <div class="form-group">
            <label>Image</label>
            <input class="form-control" name="hero" type="file" accept="image/*" onchange="loadFile(event)">
        </div>
            <div class="form-group">
                <label>Title</label>
                <input class="form-control" name="title" id="" type="text" placeholder="Title">
            </div>
              <div class="form-group">
                 <label>Address</label>
                     <input class="form-control" name="title" id="" type="text" placeholder="Address">
                 </div>
             <div class="form-group">
            <label>Email</label>
                 <input class="form-control" name="email" id="" type="text" placeholder="Email">    
                    </div>
                    <button class="ml-3 btn btn-primary">EDIT</button>
               </div>
        </div>







@endsection