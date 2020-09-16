

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manajemen Akun</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <script src="<?php echo e(base_url('assets/js/iframeResizer.js')); ?>"></script>
        <div class="content">
            <div class="container-fluid">
                <iframe style="width:100%;height: 100%;border:none;" id="iframeku" src="<?php echo e(base_url('/akun/akun')); ?>"></iframe>
            </div><!-- /.container-fluid -->
        </div>
        <script>
            iFrameResize({ log: false }, '#iframeku')
        </script>
        <!-- /.content -->
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andre\PhpstormProjects\stockQR\app\Views/akun/index.blade.php ENDPATH**/ ?>