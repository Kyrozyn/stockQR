@extends('template/index')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Scan QR Barang Keluar</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script>
        <div class="col-12 center-block text-center">
            <div id="qr-reader"></div>
        </div>
        @include('QR/barangkeluar/scanjs')
    </div>
@endsection