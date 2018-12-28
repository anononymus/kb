@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }

  

</style>
<!--<script src="{{ asset('js/tinymce.min.js') }}" type="text/js"></script>-->
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=lrneidxv8x28dclpqsgrno3tyu73i4d71jclw5fi6e7pvr79"></script> 
<script src="{{ asset('js/pramukhindic_settings.js') }}" type="text/js"></script>
<script src="{{ asset('js/pramukhime.js') }}" type="text/js"></script>
<script src="{{ asset('js/pramukhindic.js') }}" type="text/js"></script>
  
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
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('kb.update', $kb->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Title:</label>
          <input type="textarea" class="form-control" name="story_title" value="{{ $kb->title}}" />
        </div>
        <div class="form-group">
          <label for="name">Story:</label>
          <!--<textarea class="form-control" name="story" value="{{ $kb->para }}" cols="30" rows="10"></textarea>-->
          <textarea class="form-control" id="story" name="story"  cols="30" rows="10">{{ $kb->para }}</textarea>
        </div>
        <div class="form-group">
          <label for="price">Date of Creation:</label>
          <input type="text" class="form-control" name="created_at" value={{ $kb->created_at }} />
        </div>
        <div class="form-group">
          <label for="quantity">Date of Modification:</label>
          <input type="text" class="form-control" name="updated_at" value={{ $kb->updated_at }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection