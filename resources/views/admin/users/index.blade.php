@extends('admin.layouts.master')

@section('title')
Admin | Daftar Pelanggan Mitra Kopi
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
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Nohp</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->nohp }}</td>
                                    <td></td>
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
