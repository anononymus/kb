<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }

  .scroll-box {
    background: #f4f4f4;
    border: 2px solid rgba(0, 0, 0, 0.1);
    height: 200px; /* maximum height of the box, feel free to change this! */
    padding: 15px;
    overflow-y: scroll;
}

</style>
<!--<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel-heading">-->
        <span>
            Story for Comprehenstion
        </span>
        <blockquote class="pull-right">
      <!-- <span class="pull-right">
        <?php echo $kb->id; ?>

       </span> 
      
        <span class="panel-body">-->
        <div class="scroll-box">
        <?php echo html_entity_decode($kb->para); ?>

        </div>
       <!-- </span>-->
        </blockquote>
  <!--  <div>
   <div>
</div>-->
<h3>Questions</h3>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>