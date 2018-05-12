    <table class="table">
      <tr>
        <td class="tdborder">
          <b>{{Form::label('','Token name/Ticker')}}</b>  
        </td>
        <td class="tdborder">
          <b>{{Form::label('','Token type')}}</b>          
        </td>
        <td class="tdborder">
          <b>{{Form::label('','Platform')}}</b>        
        </td>
        <td class="tdborder">
          <b>{{Form::label('','PreICo price')}}</b>          
        </td>
      </tr>
      <tr>
        <td class="tdborder gapping">
          {{Form::text('token_name',$post->token_name,['class'=>'form-control','required'])}}  
        </td>
        <td class="tdborder gapping">
          {{Form::text('token_type',$post->token_type,['class'=>'form-control','placeholder'=>'(e.g. ERC20)'])}}
        </td>
        <td class="tdborder gapping">
          {{Form::text('platform',$post->platform,['class'=>'form-control','placeholder'=>'(e.g. Etherium)'])}}          
        </td>
        <td class="tdborder">
          {{Form::text('pre_price',$post->pre_price,['class'=>'form-control','placeholder'=>'(e.g. 1IBC = 0.01 ETH)'])}}        
        </td>
      </tr>
      <tr>
        <td class="tdborder">
          <b>{{Form::label('','Current price')}}</b>          
        </td>
        <td class="tdborder">
          <b>{{Form::label('','Total tokens for sale')}}</b>          
        </td>
        <td class="tdborder">
          <b>{{Form::label('','Total tokens sold')}}</b>          
        </td>
        <td class="tdborder">
          <b>{{Form::label('','Restricted country')}}</b>          
        </td>

      </tr>
      <tr>
        <td class="tdborder gapping">
          {{Form::text('cur_price',$post->cur_price,['class'=>'form-control','placeholder'=>'(e.g. 1IBC = 0.01 ETH)'])}}          
        </td>
        <td class="tdborder gapping">
          {{Form::text('total_sale',$post->total_sale,['class'=>'form-control'])}}
        </td>
        <td class="tdborder gapping">
          {{Form::text('total_sold',$post->total_sold,['class'=>'form-control'])}}          
        </td>
        <td class="tdborder">
          {{Form::text('restricted',$post->restricted,['class'=>'form-control','placeholder'=>'(e.g. None, USA)'])}}          
        </td>
      </tr>
    </table>
