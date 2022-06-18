@extends('admin.layouts.master')

@section('title')
Admin | Riwayat Pemesanan Mitra Kopi
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
                        Riwayat Pemesanan
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User_id</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Status</th>
                                    <th>Kode Pemesanan</th>
                                    <th>Jumlah Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanans as $pesanan)
                                <tr>
                                    <td>{{ $pesanan->id }}</td>
                                    <td>{{ $pesanan->user_id }}</td>
                                    <td>{{ $pesanan->tanggal }}</td>
                                    <td>{{ $pesanan->status }}</td>
                                    <td>{{ $pesanan->kode }}</td>
                                    <td>{{ $pesanan->jumlah_harga }}</td>
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
