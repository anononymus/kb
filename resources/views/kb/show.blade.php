@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }

  

</style>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel-heading">
        <span>
            Story for Comprehenstion
        </span>
        <span class="pull-right">
        {!!$kb->id!!}
        </span>
        <span class="panel-body">
        {!!html_entity_decode($kb->para)!!}
       
        </span>
    <div>
   <div>
</div>


@endsection