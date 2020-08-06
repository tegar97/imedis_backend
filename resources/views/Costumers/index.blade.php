@extends('layouts.template')
@section('title','Dasboard')
@section('sub-judul','Home')
@section('content')

<div class="container">
<a class="btn btn-primary btn-sm ml-2" href="{{route('costumers.create')}}">Tambah Costumers</a>
    <div class="col-12 mt-4">
        <table id="tabel_costumers" class="table datatable">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><img src="{{asset('images/logo1.png')}}" width="150"></td>
                    <td><img src="{{asset('images/image1.jpg')}}" width="150"></td>
                    <td>Klinik Kencatikan Ultimo</td>
                
                    <td>Jalan Raya Plaza Asia</td>
                    <td> ultimo@ultimo.co.id</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
            </table>

    </div>
    
</div>



@endsection
@section('addon')
<script>
    $(document).ready( function () {
    $('#tabel_costumers').DataTable();
} );
</script>



@endsection