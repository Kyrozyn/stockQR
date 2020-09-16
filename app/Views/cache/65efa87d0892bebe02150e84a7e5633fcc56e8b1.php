

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Laporan</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <form class="form-horizontal" action="<?php echo e(base_url('laporan/cetak')); ?>">
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="tanggalawal">Tanggal Awal</label>
                                    <input required id="tanggalawal" name="tanggalawal" type="date" oninput="tanggalakhir.min=this.value">
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="tanggalakhir">Tanggal Akhir</label>
                                    <input required id="tanggalakhir" name="tanggalakhir" type="date" oninput="tanggalawal.max=this.value">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Cetak Laporan</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.col-sm-6 -->
                        <div class="col-sm-6">

                        </div>
                        <!-- /.col-sm-6 -->
                    </div>
                    <!-- /.row -->
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andre\PhpstormProjects\stockQR\app\Views/laporan/laporan.blade.php ENDPATH**/ ?>