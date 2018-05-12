
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change website Logo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
{{--         @if(count($logos) > 0)
            @foreach($logo as $logo)
               
                {!! Form::open(['action'=>['LogosController@update',$logo->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                        <div>
                    <div class="form-group">
                        {{Form::label('websiteName','Name your website')}}
                        {{Form::textarea('websiteName','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Your text here'])}}            
                    </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <img class="img-fluid" style="height: 300px;" src="/storage/cover_images/logo/{{$logo->logo}}">
                                <div class="form-group">
                                    {{Form::file('logo')}}
                                </div>    
                            </div>
                            <div class="col-md-8 col-sm-8">
                            </div>
                        </div>
                    </div>
                    
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}

            @endforeach
        @else
            {!! Form::open(['action'=>'LogosController@store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('websiteName','Name your website')}}
                    {{Form::textarea('websiteName','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Your text here'])}}            
                </div>
                <div class="form-group">
                    {{Form::file('logo')}}
                </div>
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        @endif --}}
        <form method="POST" action="/change-logo" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" name="websiteName" placeholder="Your website name">
            </div>
            <div class="form-group">
                <input class="form-control" type="file" name="file" id="file">
            </div>                
            <div class="form-group">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" name="save" value="Save Changes" class="btn btn-primary float-right">
            </div>
                

        </form>
      </div>
    </div>
  </div>
</div>
