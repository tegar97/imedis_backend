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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action<th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><img src="{{asset('images/imedis-software-rumah-sakit-klinik_icon-server.png')}}" width="50s"></td>
                    <td>Server Application</td>
                    <td>Layanan software rumah sakit / klinik yang di install langsung pada server pengguna dalam bentuk closed – source atau open – source yang dapat diakses melalui jaringan intranet ataupun internet</td>
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