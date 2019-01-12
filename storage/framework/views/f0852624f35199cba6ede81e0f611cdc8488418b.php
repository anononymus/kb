<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>QnA in Assamese Comprehension</title>
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<script src="<?php echo e(asset('js/app.js')); ?>" type="text/js"></script>
  <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>" ></script>
 <!-- <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script> -->
  <script src="<?php echo e(asset('js/jquery-1.9.1.min.js')); ?>"></script>
 
  <div class="container">
    <?php echo $__env->yieldContent('content'); ?>
  </div>
  
  
</body>
</html>