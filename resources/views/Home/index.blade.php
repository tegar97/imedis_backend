@extends('layouts.template')
@section('title','Dasboard')
@section('sub-judul','Home')
@section('content')
<div class="container">
  <form method="POST" action={{route('home.update',$LandingData->id)}}>
    @method('PATCH')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label>Years Experience</label>
                <input type="number" class="form-control " name="years_experience" placeholder="14" value={{$LandingData->years_experience}}>
              </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Youtube Token</label>
                <input type="text" class="form-control " placeholder="6ektsgs" name="youtube_url" value={{'https://www.youtube.com/watch?v='.$LandingData->youtube_url}}>
            <iframe class="mt-2 p-3" src="https://www.youtube.com/embed/{{$LandingData->youtube_url}}" frameborder="0"></iframe>
              </div>
        </div>
      <div class="col-12">
        <label>Hero </label>
        <input class="form-control" name="hero_image" type="file" accept="image/*" onchange="loadFile(event)">
      <img id="output" width="150" class="mt-2 ml-3 mb-4" src="{{url('images/',$LandingData->hero_image)}}">
     
      </div>
      <div class="col-12">
        <div class="form-group">
          <label>Meta Title </label>
          <input class="form-control" name="meta_title" placeholder="Meta Title" value={{$LandingData->meta_title}}>

        </div>
      

      </div>
      <div class="col-12">
        <div class="form-group">
          <label>Meta Content </label>
        <textarea class="form-control" name="meta_content" placeholder="meta content  ">{{$LandingData->meta_content}}</textarea>
        </div>
      

      </div>
      
      <button class="ml-3 btn btn-primary">EDIT</button>
    </form>
</div>



@endsection
@section('addon')
<script>
    //show url 
    
    //show image 
    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
 </script>



@endsection