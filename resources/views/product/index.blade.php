@extends('layouts.template')
@section('title','Dasboard')
@section('sub-judul','Home')
@section('content')


<div class="container">
<a class="btn btn-primary btn-sm ml-2" href="{{route('product.create')}}">Tambah Product</a>
    <div class="col-12 mt-4">
        <table id="tabel_product" class="table datatable">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><img src="{{asset('images/imedis-software-rumah-sakit-klinik_icon-mobile.png')}}" width="50"></td>
                    <td>iMedis Mobile</td>
                    <td>Aplikasi berbasis mobile yang dapat digunakan oleh RS/Klinik untuk Dokter dan Pasien.</td>
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
    $('#tabel_product').DataTable();
} );
</script>
@endsection