@extends('template/index')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Barang</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <script src="{{base_url('assets/js/iframeResizer.js')}}"></script>
        <div class="content">
            <div class="container-fluid">
                    <iframe style="width:100%;height: 100%;border:none;" id="iframeku" src="{{base_url('/barang/barang')}}"></iframe>
            </div><!-- /.container-fluid -->
        </div>
        <script>
            iFrameResize({ log: false }, '#iframeku')
        </script>
        <!-- /.content -->
    </div>


@endsection