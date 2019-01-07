<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }

  

</style>
<!--<script src="<?php echo e(asset('js/tinymce.min.js')); ?>" type="text/js"></script>-->
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=lrneidxv8x28dclpqsgrno3tyu73i4d71jclw5fi6e7pvr79"></script> 
<script src="<?php echo e(asset('js/pramukhindic_settings.js')); ?>" type="text/js"></script>
<script src="<?php echo e(asset('js/pramukhime.js')); ?>" type="text/js"></script>
<script src="<?php echo e(asset('js/pramukhindic.js')); ?>" type="text/js"></script>
  
  <script> 
  tinymce.init({ 
      selector:'textarea' ,
      plugins: 'link code' 
     
      });
  </script>
<div class="card uper">
  <div class="card-header">
    Edit Story
  </div>
  <div class="card-body">
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><br />
    <?php endif; ?>
      <form method="post" action="<?php echo e(route('kb.update', $kb->id)); ?>">
        <?php echo method_field('PATCH'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="name">Title:</label>
          <input type="textarea" class="form-control" name="story_title" value="<?php echo e($kb->title); ?>" />
        </div>
        <div class="form-group">
          <label for="name">Story:</label>
          <!--<textarea class="form-control" name="story" value="<?php echo e($kb->para); ?>" cols="30" rows="10"></textarea>-->
          <textarea class="form-control" id="story" name="story"  cols="30" rows="10"><?php echo e($kb->para); ?></textarea>
        </div>
        <div class="form-group">
          <label for="price">Date of Creation:</label>
          <input type="text" class="form-control" name="created_at" value=<?php echo e($kb->created_at); ?> />
        </div>
        <div class="form-group">
          <label for="quantity">Date of Modification:</label>
          <input type="text" class="form-control" name="updated_at" value=<?php echo e($kb->updated_at); ?> />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>