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

#form1 {

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

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>" type="text/js"></script>
<script type="text/javascript">


$(document).ready(function(){
    $("#add_ques").click(function(){
        $("#form1").toggle();
    });
});

</script>
<?php $__env->stopSection(); ?>
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

<button class="btn btn-primary"  id="add_ques" type="button">Add Question</button>

<form id="form1">
  <b>First Name:</b> <input type="text" name="firstName">
  <b>Last Name: </b><input type="text" name="lastName">
   <button type="button" id="submit">Submit</button>
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>