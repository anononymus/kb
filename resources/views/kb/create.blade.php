@extends('layout')

@section('content')
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
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('kb.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Story Title:</label>
              <input type="textarea" class="form-control" name="story_title"/>
          </div>
          <div class="form-group">
              @csrf
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
@endsection