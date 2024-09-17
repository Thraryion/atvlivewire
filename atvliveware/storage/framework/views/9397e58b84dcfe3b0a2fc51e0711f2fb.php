<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Fixed Sidebar</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE/dist/css/adminlte.min.css')); ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    </head>
    <body>
        <?php echo e($slot); ?>


        <script src="<?php echo e(asset('adminlte/plugins/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
        <script src="<?php echo e(asset('adminlte/dist/js/adminlte.min.js')); ?>"></script>
        <script src="<?php echo e(asset('adminlte/dist/js/demo.js')); ?>"></script>
</div>
    </body>
</html>
<?php /**PATH /home/aluno/atvliveware/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>