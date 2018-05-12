    <table class="table">
        <tr>
            <td class="tdborder long">
                <b>{{Form::label('','Type of application')}}</b>        
            </td>
            <td class="tdborder">
                <b>{{Form::label('','ICO name')}}</b>
            </td>
        </tr>
        <tr>
            <td class="tdborder long">
                {{Form::select('type', ['R' => 'Regular listing (FREE)', 'P' => 'Priority listing (0.05 BTC)'],'R',['class'=>'form-control'])}}
            </td>
            <td class="tdborder">
                {{Form::text('ico_name',$post->title,['class'=>'form-control','placeholder'=>'Your ICO name','required'])}}
            </td>
        </tr>
        <tr>
            <td class="tdborder long">
                <b>{{Form::label('','ICO slogan')}}</b>            
            </td>
            <td class="tdborder">
                <b>{{Form::label('','Website URL')}}</b>                
            </td>
        </tr>
        <tr>
            <td class="tdborder long">
                {{Form::text('slogan',$post->slogan,['class'=>'form-control','placeholder'=>'Your ICO slogan','required'])}}                
            </td>
            <td class="tdborder">
                {{Form::text('web_url',$post->website_url,['class'=>'form-control','placeholder'=>'Your ICO website URL'])}}                
            </td>
        </tr>
        <tr>
            <td class="tdborder long">
              <b>{{Form::label('','Country of operation')}}</b>            
            </td>
            <td class="tdborder">
              <b>{{Form::label('','Link to video')}}</b>                
            </td>
        </tr>
        <tr>
            <td class="tdborder long">
              {{Form::text('operation',$post->country_operate,['class'=>'form-control'])}}                
            </td>
            <td class="tdborder">
              {{Form::text('video',$post->video_url,['class'=>'form-control'])}}                
            </td>
        </tr>
        <tr>
            <td class="tdborder long">
              <b>{{Form::label('','Introduction to ICO')}}</b>                
              {{Form::textarea('intro_ico',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'About your ICO'])}}
            </td>
            <td class="tdborder">
                <div class="row">
                    <div class="col-md-6">
                      <b>{{Form::label('','Bounty')}}</b>                                  
                      {{Form::select('bounty_avail',['Available'=>'Available','Not available'=>'Not available'],'Available',['class'=>'form-control','required'])}}
                    </div>
                    <div class="col-md-6">
                      <b>{{Form::label('','Link to bounty')}}</b>                        
                      {{Form::text('bounty_link',$post->bounty_link,['class'=>'form-control'])}}
                    </div>
                    <div class="col-md-6">
                       <b>{{Form::label('','ICO logo')}}</b><br>
                        <img style="height: 11vh; width: 5.5vw;" src="/storage/cover_images/{{$post->cover_pic}}">
                        {!!Form::file('cover_pic',['class'=>'form-control'])!!}
                    </div>
                    <div class="col-md-6">
                        <b>{{Form::label('','Minimum investment')}}</b>
                        {{Form::text('min_invest',$post->min_invest,['class'=>'form-control'])}}
                    </div>    
                </div>
            </td>
        </tr>
    </table>
