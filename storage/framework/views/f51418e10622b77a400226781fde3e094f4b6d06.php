<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }
  p {
  border-bottom: 1px solid black;
  padding: 20px;
}

.hide {
  display: none;
}

.read-more-show{
      cursor:pointer;
      color: #ed8323;
    }
    .read-more-hide{
      cursor:pointer;
      color: #ed8323;
    }

    .hide_content{
      display: none;
    }


</style>



<script>
// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
$('.read-more-content').addClass('hide')
$('.read-more-show, .read-more-hide').removeClass('hide')

// Set up the toggle effect:
$('.read-more-show').on('click', function(e) {
  $(this).next('.read-more-content').removeClass('hide');
  $(this).addClass('hide');
  e.preventDefault();
});

$('.read-more-hide').on('click', function(e) {
  var p = $(this).parent('.read-more-content');
  p.addClass('hide');
  p.prev('.read-more-show').removeClass('hide'); // Hide only the preceding "Read More"
  e.preventDefault();
});

</script>
<script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>" type="text/js"></script>

<div class="uper">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>  
    </div><br />
  <?php endif; ?>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Story Title</td>
          <td>Story </td>
          <td>Date Of Create</td>
          <td>Time Of Modification</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $kb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kb_main): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($kb_main->id); ?></td>
            <td><?php echo e($kb_main->title); ?></td>
            <!--htmlentities(stripslashes($row['post_text']));-->
           <!-- <td><?php echo html_entity_decode($kb_main->para); ?></td>-->
           <td>
          
           <div class="comment more">
           <?php
              $para_text=html_entity_decode($kb_main->para)
           ?>
           
           <?php if(strlen($para_text) > 100): ?>

           <?php echo substr($para_text,0,500); ?> , '...'
           <a href="/kb/<?php echo e($kb_main->id); ?>">Read More</a>

            
            <?php else: ?>
            <?php echo html_entity_decode($kb_main->para); ?>

            <?php endif; ?>         

          </div>
          
            </td>



            <td><?php echo e($kb_main->created_at); ?></td>
            <td><?php echo e($kb_main->updated_at); ?></td>
            <td><a href="<?php echo e(route('kb.edit',$kb_main->id)); ?>" class="btn btn-primary">Edit</a></td>
         <!--
             <td>
                <form action="<?php echo e(route('kb.destroy', $kb_main->id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button class="btn btn-danger" type="submit">Delete</button> 
                </form>
            </td>
            -->
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>