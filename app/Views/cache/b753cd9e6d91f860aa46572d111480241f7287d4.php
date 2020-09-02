<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin</title>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/084c742af7.js" crossorigin="anonymous"></script>

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(base_url('assets/dist/css/adminlte.min.css')); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <?php echo $__env->yieldContent('head'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <?php echo $__env->make('template/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php echo $__env->make('template/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper. Contains page content -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php echo $__env->make('template/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(base_url('assets/dist/js/adminlte.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\andre\PhpstormProjects\stockQR\app\Views/template/index.blade.php ENDPATH**/ ?>