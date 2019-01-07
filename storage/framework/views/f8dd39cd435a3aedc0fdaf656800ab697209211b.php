<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=lrneidxv8x28dclpqsgrno3tyu73i4d71jclw5fi6e7pvr79"></script> 

<script> 
  tinymce.init({ 
      selector:'textarea' ,
      plugins: 'link code' 
     
      });
  </script>
<div class="card uper">
  <div class="card-header">
    Add Story
  </div>
  <div class="uper">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div><br />
  <?php endif; ?>
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
      <form method="post" action="<?php echo e(route('kb.store')); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="name">Story Title:</label>
              <input type="textarea" class="form-control" name="story_title"/>
          </div>
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="name">Story:</label>
           <!--   <input type="textarea" class="form-control" name="story"/>-->
              <textarea class="form-control" id="story" name="story"  cols="30" rows="10"></textarea>

          </div>
        <!--  <div class="form-group">
              <label for="price">Share Price :</label>
              <input type="text" class="form-control" name="share_price"/>
          </div>
          <div class="form-group">
              <label for="quantity">Share Quantity:</label>
              <input type="text" class="form-control" name="share_qty"/>
          </div>
        -->
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>