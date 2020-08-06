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
            <label>Title</label>
            <input class="form-control" name="hero" type="text" placeholder="Title">
        </div>
            <div class="form-group">
                <label>Description</label>
                <input class="form-control" name="title" id="" type="text" placeholder="Description">
            </div>
                    <button class="ml-3 btn btn-primary">EDIT</button>
               </div>
        </div>







@endsection