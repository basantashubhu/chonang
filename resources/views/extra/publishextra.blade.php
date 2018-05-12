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
                {{Form::select('whitelist',['No'=>'No','Yes'=>'Yes'],'Yes',['class'=>'form-control'])}}
            </td>
            <td class="tdborder gapping">
                {{Form::select('bonus',['Available'=>'Available','Not available'=>'Not available'],'Available',['class'=>'form-control'])}}
            </td>
            <td class="tdborder gapping">
                {{Form::text('pre_sale_bonus','',['class'=>'form-control'])}}                        
            </td>
            <td class="tdborder">
                {{Form::text('main_sale_bonus','',['class'=>'form-control'])}}                            
            </td>
        </tr>
</table>
                <b>{{Form::label('categories','Category',['class'=>'control-label'])}}</b><br>

{{-- category checkboxes --}}
<div class="row">
    <div class="col-md-6">
        <div class="row cat-box">
            <div class="col-md-6">
                <input class ="form-group"  type="checkbox" name="category[]" value="art" id="art"><label for="art">&nbsp Art</label><br>
                <input class ="form-group"  type="checkbox" name="category[]" value="banking" id="banking"><label for="banking">&nbsp Banking</label><br>
                <input class ="form-group"  type="checkbox" name="category[]" value="business" id="business"><label for="business">&nbsp Business services</label><br>
                <input class ="form-group"  type="checkbox" name="category[]" value="charity" id="charity"><label for="charity">&nbsp Charity</label><br>
                <input class ="form-group"  type="checkbox" name="category[]" value="crypto" id="crypto"><label for="crypto">&nbsp Cryptocurrency</label><br>
                <input class ="form-group"  type="checkbox" name="category[]" value="electronics" id="electronics"><label for="electronics">&nbsp Electronics</label><br>
                <input class ="form-group"  type="checkbox" name="category[]" value="entertainment" id="entertainment"><label for="entertainment">&nbsp Entertainment</label><br>
                <input  class ="form-group" type="checkbox" name="category[]" value="infra" id="infra"><label for="infra">&nbsp Infrastrucure</label><br>
                <input  class ="form-group" type="checkbox" name="category[]" value="invest" id="invest"><label for="invest">&nbsp Investment</label><br>
                <input  class ="form-group" type="checkbox" name="category[]" value="manu" id="manu"><label for="manu">&nbsp Manufacturing</label><br>
                <input  class ="form-group" type="checkbox" name="category[]" value="platform" id="platform"><label for="platform">&nbsp Platform</label><br>
                <input class="form-group" type="checkbox" name="category[]" value="retail" id="retail"><label for="retail">&nbsp Retail</label><br>
                <input  class ="form-group" type="checkbox" name="category[]" value="software" id="software"><label for="software">&nbsp Software</label><br>
                <input  class ="form-group" type="checkbox" name="category[]" value="tourism" id="tourism"><label for="tourism">&nbsp Tourism</label><br>
            </div>
            <div class="col-md-6">
                <input class ="form-group"  type="checkbox" name="category[]" value="art" id="ai"><label for="ai">&nbsp Artificial intelligence</label><br>
                <input class ="form-group"  type="checkbox" name="category[]" value="big" id="big"><label for="big">&nbsp Big data</label><br>
                <input class ="form-group"  type="checkbox" name="category[]" value="casino" id="casino"><label for="casino">&nbsp Business services</label><br>
                <input class ="form-group"  type="checkbox" name="category[]" value="communication" id="communication"><label for="communication">&nbsp Communication</label><br>
                <input class ="form-group"  type="checkbox" name="category[]" value="edu" id="edu"><label for="edu">&nbsp Education</label><br>
                <input class ="form-group"  type="checkbox" name="category[]" value="energy" id="energy"><label for="energy">&nbsp Energy</label><br>
                <input class ="form-group"  type="checkbox" name="category[]" value="health" id="health"><label for="health">&nbsp Health</label><br>
                <input  class ="form-group" type="checkbox" name="category[]" value="internet" id="internet"><label for="internet">&nbsp Internet</label><br>
                <input  class ="form-group" type="checkbox" name="category[]" value="legal" id="legal"><label for="legal">&nbsp Legal</label><br>
                <input  class ="form-group" type="checkbox" name="category[]" value="media" id="media"><label for="media">&nbsp Media</label><br>
                <input  class ="form-group" type="checkbox" name="category[]" value="real" id="real"><label for="real">&nbsp Real estate</label><br>
                <input class="form-group" type="checkbox" name="category[]" value="smart" id="smart"><label for="smart">&nbsp Smart Contact</label><br>
                <input  class ="form-group" type="checkbox" name="category[]" value="sports" id="sports"><label for="sports">&nbsp Sports</label><br>
                <input  class ="form-group" type="checkbox" name="category[]" value="virtual" id="virtual"><label for="virtual">&nbsp Virtual reality</label><br>
            </div>
        </div>
    </div>
    <div class="col-md-6">
                <h3>Social media links</h3>
        <div class="row">
            
          <div class="col-md-6">
              <div class="form-group">
                  <b>{{Form::label('','Facebook')}}</b>
                  {{Form::text('facebook_link','',['class'=>'form-control','placeholder'=>'www.facebook.com/url'])}}
              </div>
              <div class="form-group">
                  <b>{{Form::label('','Twitter')}}</b>
                  {{Form::text('twitter_link','',['class'=>'form-control','placeholder'=>'www.twitter.com/url'])}}
              </div>
              <div class="form-group">
                  <b>{{Form::label('','Medium')}}</b>
                  {{Form::text('medium_link','',['class'=>'form-control','placeholder'=>'www.medium.com/url'])}}
              </div>
              <div class="form-group">
                  <b>{{Form::label('','Reddit')}}</b>
                  {{Form::text('reddit_link','',['class'=>'form-control','placeholder'=>'www.reddit.com/url'])}}
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <b>{{Form::label('','BitcoinTalk')}}</b>
                  {{Form::text('bitcointalk_link','',['class'=>'form-control','placeholder'=>'www.bitcointalk.net/url'])}}
              </div>
              <div class="form-group">
                  <b>{{Form::label('','Github')}}</b>
                  {{Form::text('github_link','',['class'=>'form-control','placeholder'=>'www.github.net/url'])}}
              </div>
              <div class="form-group">
                  <b>{{Form::label('','Telegram')}}</b>
                  {{Form::text('telegram_link','',['class'=>'form-control','placeholder'=>'www.telegram.io/url'])}}
              </div>
          </div>
      </div>
                <div class="form-group">
                  <b>{{Form::label('','Contact email')}}</b>
                  {{Form::email('contact_email','',['class'=>'form-control'])}}
                  <small class="text-muted">We will notify you to your e-mail address if your application was accepted.</small>
                </div>
    </div>
</div>
{{-- end of category --}}