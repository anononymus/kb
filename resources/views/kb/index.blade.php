@extends('layout')

@section('content')
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
<script src="{{ asset('js/jquery-3.3.1.min.js') }}" type="text/js"></script>

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
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
        @foreach($kb as $kb_main)
        <tr>
            <td>{{$kb_main->id}}</td>
            <td>{{$kb_main->title}}</td>
            <!--htmlentities(stripslashes($row['post_text']));-->
           <!-- <td>{!!html_entity_decode($kb_main->para)!!}</td>-->
           <td>
          
           <div class="comment more">
           @php
              $para_text=html_entity_decode($kb_main->para)
           @endphp
           
           @if(strlen($para_text) > 100)

           {!!substr($para_text,0,500)!!} , '...'
           <a href="/kb/{{$kb_main->id}}">Read More</a>

            
            @else
            {!!html_entity_decode($kb_main->para)!!}
            @endif         

          </div>
          
            </td>



            <td>{{$kb_main->created_at}}</td>
            <td>{{$kb_main->updated_at}}</td>
            <td><a href="{{ route('kb.edit',$kb_main->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('kb.destroy', $kb_main->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection