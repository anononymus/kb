@extends('layout')

@section('content')
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
<script src="{{ asset('js/jquery-3.3.1.min.js') }}" type="text/js"></script>
@section('script')
<script type="text/javascript">


$(document).ready(function(){
    $("#add_ques").click(function(){
        $("#form1").toggle();
    });
});

</script>
@endsection
<!--<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel-heading">-->
        <span>
            Story for Comprehenstion
        </span>
        <blockquote class="pull-right">
      <!-- <span class="pull-right">
        {!!$kb->id!!}
       </span> 
      
        <span class="panel-body">-->
        <div class="scroll-box">
        {!!html_entity_decode($kb->para)!!}
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


@endsection