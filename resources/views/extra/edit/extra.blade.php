<table class="table">
        <tr>
            <td class="tdborder">
                <b>{{Form::label('','Whitelist')}}</b>            
            </td>
            <td class="tdborder">
                <b>{{Form::label('','Bonus')}}</b>            
            </td>
            <td class="tdborder">
                <b>{{Form::label('','Pre-sale bonus')}}</b>        
            </td>
            <td class="tdborder">
                <b>{{Form::label('','Main sale bonus')}}</b>                
            </td>
        </tr>
        <tr>
            <td class="tdborder gapping">
                {{Form::select('wlist',['No'=>'No','Yes'=>'Yes'],'Yes',['class'=>'form-control'])}}
            </td>
            <td class="tdborder gapping">
                {{Form::select('bonus_avail',['Available'=>'Available','Not available'=>'Not available'],'Available',['class'=>'form-control'])}}
            </td>
            <td class="tdborder gapping">
                {{Form::text('pre_bonus',$post->pre_bonus,['class'=>'form-control'])}}                        
            </td>
            <td class="tdborder">
                {{Form::text('cur_bonus',$post->cur_bonus,['class'=>'form-control'])}}                            
            </td>
        </tr>
</table>
                <b>{{Form::label('category','Category',['class'=>'control-label'])}}</b><br>

{{-- category checkboxes --}}
<div class="row">
    <div class="col-md-6">
        <div class="row cat-box">
            <div class="col-md-6">
                <input class ="form-group"  type="checkbox" name="art" value="art" id="art"><label for="art">&nbsp Art</label><br>
                <input class ="form-group"  type="checkbox" name="banking" value="banking" id="banking"><label for="banking">&nbsp Banking</label><br>
                <input class ="form-group"  type="checkbox" name="business" value="business" id="business"><label for="business">&nbsp Business services</label><br>
                <input class ="form-group"  type="checkbox" name="charity" value="charity" id="charity"><label for="charity">&nbsp Charity</label><br>
                <input class ="form-group"  type="checkbox" name="crypto" value="crypto" id="crypto"><label for="crypto">&nbsp Cryptocurrency</label><br>
                <input class ="form-group"  type="checkbox" name="electronics" value="electronics" id="electronics"><label for="electronics">&nbsp Electronics</label><br>
                <input class ="form-group"  type="checkbox" name="entertainment" value="entertainment" id="entertainment"><label for="entertainment">&nbsp Entertainment</label><br>
                <input  class ="form-group" type="checkbox" name="infra" value="infra" id="infra"><label for="infra">&nbsp Infrastrucure</label><br>
                <input  class ="form-group" type="checkbox" name="invest" value="invest" id="invest"><label for="invest">&nbsp Investment</label><br>
                <input  class ="form-group" type="checkbox" name="manu" value="manu" id="manu"><label for="manu">&nbsp Manufacturing</label><br>
                <input  class ="form-group" type="checkbox" name="platform" value="platform" id="platform"><label for="platform">&nbsp Platform</label><br>
                <input class="form-group" type="checkbox" name="retail" value="retail" id="retail"><label for="retail">&nbsp Retail</label><br>
                <input  class ="form-group" type="checkbox" name="software" value="software" id="software"><label for="software">&nbsp Software</label><br>
                <input  class ="form-group" type="checkbox" name="tourism" value="tourism" id="tourism"><label for="tourism">&nbsp Tourism</label><br>
            </div>
            <div class="col-md-6">
                <input class ="form-group"  type="checkbox" name="ai" value="art" id="ai"><label for="ai">&nbsp Artificial intelligence</label><br>
                <input class ="form-group"  type="checkbox" name="big" value="big" id="big"><label for="big">&nbsp Big data</label><br>
                <input class ="form-group"  type="checkbox" name="casino" value="casino" id="casino"><label for="casino">&nbsp Business services</label><br>
                <input class ="form-group"  type="checkbox" name="communication" value="communication" id="communication"><label for="communication">&nbsp Communication</label><br>
                <input class ="form-group"  type="checkbox" name="edu" value="edu" id="edu"><label for="edu">&nbsp Education</label><br>
                <input class ="form-group"  type="checkbox" name="energy" value="energy" id="energy"><label for="energy">&nbsp Energy</label><br>
                <input class ="form-group"  type="checkbox" name="health" value="health" id="health"><label for="health">&nbsp Health</label><br>
                <input  class ="form-group" type="checkbox" name="internet" value="internet" id="internet"><label for="internet">&nbsp Internet</label><br>
                <input  class ="form-group" type="checkbox" name="legal" value="legal" id="legal"><label for="legal">&nbsp Legal</label><br>
                <input  class ="form-group" type="checkbox" name="media" value="media" id="media"><label for="media">&nbsp Media</label><br>
                <input  class ="form-group" type="checkbox" name="real" value="real" id="real"><label for="real">&nbsp Real estate</label><br>
                <input class="form-group" type="checkbox" name="smart" value="smart" id="smart"><label for="smart">&nbsp Smart Contact</label><br>
                <input  class ="form-group" type="checkbox" name="sports" value="sports" id="sports"><label for="sports">&nbsp Sports</label><br>
                <input  class ="form-group" type="checkbox" name="virtual" value="virtual" id="virtual"><label for="virtual">&nbsp Virtual reality</label><br>
            </div>
        </div>
    </div>
    {{-- end of category --}}
    <div class="col-md-6">
                <h3>Social media links</h3>
        <div class="row">
            
          <div class="col-md-6">
              <div class="form-group">
                  <b>{{Form::label('','Facebook')}}</b>
                  {{Form::text('fb_link',$post->fb_link,['class'=>'form-control','placeholder'=>'www.facebook.com/url'])}}
              </div>
              <div class="form-group">
                  <b>{{Form::label('','Twitter')}}</b>
                  {{Form::text('twit_link',$post->twit_link,['class'=>'form-control','placeholder'=>'www.twitter.com/url'])}}
              </div>
              <div class="form-group">
                  <b>{{Form::label('','Medium')}}</b>
                  {{Form::text('med_link',$post->med_link,['class'=>'form-control','placeholder'=>'www.medium.com/url'])}}
              </div>
              <div class="form-group">
                  <b>{{Form::label('','Reddit')}}</b>
                  {{Form::text('red_link',$post->red_link,['class'=>'form-control','placeholder'=>'www.reddit.com/url'])}}
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <b>{{Form::label('','BitcoinTalk')}}</b>
                  {{Form::text('btalk_link',$post->btalk_link,['class'=>'form-control','placeholder'=>'www.bitcointalk.net/url'])}}
              </div>
              <div class="form-group">
                  <b>{{Form::label('','Github')}}</b>
                  {{Form::text('git_link',$post->git_link,['class'=>'form-control','placeholder'=>'www.github.net/url'])}}
              </div>
              <div class="form-group">
                  <b>{{Form::label('','Telegram')}}</b>
                  {{Form::text('tel_link',$post->tel_link,['class'=>'form-control','placeholder'=>'www.telegram.io/url'])}}
              </div>
          </div>
      </div>
                <div class="form-group">
                  <b>{{Form::label('','Contact email')}}</b>
                  {{Form::email('contact_email',$post->contact_email,['class'=>'form-control'])}}
                  <small class="text-muted">We will notify you to your e-mail address if your application was accepted.</small>
                </div>
    </div>
</div>
