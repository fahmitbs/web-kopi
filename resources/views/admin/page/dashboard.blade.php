@extends('admin.layouts.master')

@section('title')
Admin | Dashboard Mitra Kopi
@endsection

@section('css')

@endsection

@section('content')
    <!-- Content Wrapper, contains page content -->
    <div class="content-wrapper">
        <div class="container">
            <h2> Selamat Datang , {{ Auth::user()->name }} </h2>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
