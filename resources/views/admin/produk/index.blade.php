@extends('admin.layouts.master')

@section('title')
Admin | Tambah Produk Mitra Kopi
@endsection

@section('css')

@endsection

@section('content')
    <!-- Content Wrapper, contains page content -->
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        Produk
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ 'add-products' }}" class="badge badge-pill btn-primary float-right ml-2 mb-3 btn-lg">Tambah</a>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Produk</th>
                                    <th>Gambar</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangs as $barang)
                                <tr>
                                    <td>{{ $barang->id }}</td>
                                    <td>{{ $barang->nama_barang }}</td>
                                    <td>{{ $barang->gambar }}</td>
                                    <td>{{ $barang->harga }}</td>
                                    <td>{{ $barang->stok }}</td>
                                    <td>{{ $barang->keterangan }}</td>
                                    <td><a href="" class="badge badge-pill btn-primary">Edit</a>
                                        <a href="" class="badge badge-pill btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
