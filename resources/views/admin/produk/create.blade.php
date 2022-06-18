@extends('admin.layouts.master')

@section('title')
Admin | Tambag Produk Mitra Kopi
@endsection

@section('css')

@endsection

@section('content')
    <!-- Content Wrapper, contains page content -->
    <div class="content-wrapper">
        <div class="container">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fa fa-pencil-alt"></i> Tambah Produk</h4>
                        <form method="POST" action="{{ url('add_products') }}">
                            @csrf



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
