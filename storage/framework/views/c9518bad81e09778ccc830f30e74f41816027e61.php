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

form1 {

display:none;

}
.form{
  padding:10px;
  border:2px solid #3498db;
  background:#F0F8FF;
  border-radius:15px;
  display:none;

}
</style>

<script type="text/javascript">


$(document).ready(function () {
  //your code here
  $('#add_ques').on('click', function () {
  $("#form1").toggle();
  $("#ques").show();
});
});


</script>


<!--<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel-heading">-->
        <span>
            Story for Comprehenstion
        </span>
        <br>
        <br>
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

<button class="btn btn-primary"  id="add_ques" type="button">Add Question</button>
<br>
<!--<form id="#form1" method="post" action="<?php echo e(action('KbController@add_ques', $kb)); ?>" > -->
<form id="#form1" method="post" action="<?php echo e(route('kb.add_ques', $kb->id)); ?>" >

      <div class="form-group" id="ques" style="display:none">
      
          <?php echo csrf_field(); ?>
            
          <label for="name">Submit Question from the above passage:</label>
          <input type="text" class="form-control" name="question" id="question"/><br>
          <button class="btn btn-primary" type="submit" id="submit">Submit</button>
        </div>
</form>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>