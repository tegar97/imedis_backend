@extends('layouts.template')
@section('title','Dasboard')
@section('sub-judul','Section About')
@section('content')
<div class="container">
  <form method="POST" action={{route('about.update',$aboutData->id )}}>
    @csrf
    @method('PATCH')
    <div class="row">
   
        <div class="col-12">
            <div class="form-group">
              <label for="about">About</label>    
             <textarea  id="about" class="form-control"  name="About" >{{$aboutData->About}}</textarea>
              </div>
            <div class="form-group">
              <label for="about">Kelebihan Product</label>    
             <textarea  id="advantage" class="form-control" placeholder="Kelebihan Product" name="Advantage_product" >{{$aboutData->Advantage_product}}</textarea>
              </div>
              <div class="form-group">
                <button class="ml-3 btn btn-primary">EDIT</button>
              </div>
            </form>
        </div>
     
</div>







@endsection
@section('addon' ) 
<script>
    CKEDITOR.replace( 'about' );
    CKEDITOR.replace( 'advantage' );
</script>
@endsection