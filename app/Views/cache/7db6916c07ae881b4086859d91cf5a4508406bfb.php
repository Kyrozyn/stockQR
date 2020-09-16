

<?php $__env->startSection('content'); ?>
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
        <?php echo $__env->make('QR/barangkeluar/scanjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andre\PhpstormProjects\stockQR\app\Views/QR/barangkeluar/scan.blade.php ENDPATH**/ ?>