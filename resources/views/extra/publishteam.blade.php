{!!Form::open()!!}
    <h3>About your team</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <b>{{Form::label('','Photo')}}</b>
                {{Form::file('member_photo',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                <b>{{Form::label('','Name')}}</b>
                {{Form::text('member-name','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                <b>{{Form::label('','Designation')}}</b>
                {{Form::text('designation','',['class'=>'form-control'])}}
            </div>                
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <b>{{Form::label('','Facebook profile link')}}</b>
                {{Form::text('fb-profile','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                <b>{{Form::label('','Linkedin profile link')}}</b>
                {{Form::text('link-profile','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                <b>{{Form::label('','Milestone photo')}}</b>
                {{Form::file('milestone-photo',['class'=>'form-control'])}}
            </div>
        </div>
    </div>
{!!Form::close()!!}