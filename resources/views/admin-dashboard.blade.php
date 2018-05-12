@extends('layouts.app')

@section('content')

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

      <div class="container-fluid">
          <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
              <div class="sidebar-sticky">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="#allposts">
                      <span data-feather="home"></span>
                      All posts <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/posts/create">
                      New post
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">
                      Change logo
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="users"></span>
                      Subscribers
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="bar-chart-2"></span>
                      Add an admin
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="layers"></span>
                      Notifications
                    </a>
                  </li>
                </ul>
            </div>
        </nav>
        <nav class="col-md-10">
          <table id="allposts" class="table table-striped">
            <tr>
              <th>Title</th>
              <th></th>
              <th></th>
            </tr>
            @foreach($posts as $post)
            <tr>
              <th>
                <a href="/posts/{{$post->id}}"> {{$post->ico_name}}</a><br>

              <form id="publish-form-{{$post->id}}" action="admin-dashboard/{{$post->id}}" method="GET">
                @csrf
               {{-- {{Form::checkbox('publish','',$val,['id'=>$post->id])}} --}}

               @if($post->published)
                   <input type="checkbox" name="publish" id="{{$post->id}}" checked=""> 
               @else        
                   <input type="checkbox" name="publish" id="{{$post->id}}"> 
                @endif

                <button class="btn btn-default" type="submit" for="{{$post->id}}">
                  <small style="text-decoration: none;">Show/Hide</small>
                </button>

              </form>
              </th>
              <th><a href="/posts/{{$post->id}}/edit" class="btn btn-default" style="border-style: none; color: skyblue; text-transform: none;">Edit</a></th>
              <th>
                {!!Form::open(['action'=>['postsController@destroy',$post->id],'method'=>'POST', 'class'=>'pull-left'])!!}
                {{Form::token()}}
              {{Form::hidden('_method','DELETE')}}
              {{Form::submit('Delete',['class'=>'text-danger','style'=>'border:none;outline:none;background:transparent;cursor:pointer;padding-top:1%;'])}}
              {!!Form::close()!!}
              </th>
            </tr>
            @endforeach
          </table>
        </nav>
    </div>
  </div>
</div>
@include('pages.modal')
<script>
  $(document).ready(function(){
      $(document).on('click', 'input[type="checkbox"]', function(){
          var form_id = 'publish-form';
          var id = $(this).attr('id');
          $('#'+form_id+'-'+id).trigger('submit');
      });    
  });

$(document).ready(function(){
  $('form').on('submit', function(event){
    event.preventDefault();
    // alert('ready to submit');
    var url = $(this).attr('action');
    // console.log(url);
    var method = $(this).attr('method');
    // console.log(method);
    var data = $(this).serializeArray();
    // console.log(data);

    callAjax({url:url,method:method,data:data},function(data){
      console.log(data);
 
    });
  });
});


function callAjax(options, callback=''){
  var url = options.url?options.url:"/";
  var method = options.method?options.method:"GET";
  var data = options.data?options.data:{};

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  
  $.ajax({
    url:url,
    method:method,
    data:data,
    beforeSend:function(){

    },
    error: function(error){

    },
    statusCode:{
      404:function(){
        console.log('page not found');
      },
      500:function(){
        console.log('server error or php error');
      }
    },
    success: function(response){
      if(typeof(callback) != 'String'){
        callback(response);
      }
    }
  });
}
</script>
@endsection


