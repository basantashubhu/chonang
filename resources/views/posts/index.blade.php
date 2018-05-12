@extends('layouts.apped')

@section('content')
<div class="row altered">
	<div class="col-md-3">
		<div style="padding:10% 0 0 12%;">
			<h3>Browse ICOs</h3>
			{{Form::open(['class'=>'form-group','style'=>'border: 1px solid rgba(211,211,211,0.8);padding:5%;background:#fff;border-radius:5px;box-shadow:0 5px 5px rgba(0,0,0,0.5);'])}}
	    	<div class="form-group">
	    		<b>{{Form::label('search','Search')}}</b>
	    		{{Form::text('search-box','',['class'=>'form-control'])}}
	    		<hr>
	    	</div>
		
	    	<div class="form-group">
	    		<b>{{Form::label('category','Category')}}</b>
	    		<select class="form-control">
	    			<option>All</option>
	    			<option>Art</option>
	    			<option>Entertainment</option>
	    		</select>
	    	</div>
	    	<div class="form-group">
	    		<b>{{Form::label('features','Features',['style'=>'display:block;'])}}</b>
	    		<input type="checkbox" name="bonus" id="bonus"><label for="bonus">&nbsp Bonus available</label><br>
	    		<input type="checkbox" name="bounty" id="bounty"><label for="bounty">&nbsp Bounty available</label><br>
	    		<input type="checkbox" name="team" id="team"><label for="team">&nbsp Public team</label><br>
	    		<input type="checkbox" name="ratings" id="ratings"><label for="ratings">&nbsp Expert ratings</label><br>
	    	</div>
	    	<div class="form-group">
	    		<b>{{Form::label('rating','Rating')}}</b>
	    		<select class="form-control">
	    			<option>Any</option>
	    			<option>4+</option>
	    			<option>3+</option>
	    			<option>3-</option>
	    		</select>
	    	</div>
			<div class="row">
				<div class="col-md-6">	
			    	<div class="form-group">
			    		<b>{{Form::label('start','Start after')}}</b>
			    		{{Form::date('start-date','',['class'=>'form-control'])}}
			    	</div>
			    </div>
			    <div class="col-md-6">
			    	<div class="form-group">
			    		<b>{{Form::label('end','End before')}}</b>
			    		{{Form::date('end-date','',['class'=>'form-control'])}}
			    	</div>
			    </div>
			</div>
	    	<div class="form-group">
	    		<b>{{Form::label('country','Country')}}</b>
	    		<select class="form-control">
	    			<option>Any</option>
	    			<option>US</option>
	    			<option>UK</option>
	    		</select>
	    	</div>

	{!! Form::close() !!}
		</div>
	</div>
	<div class="col-md-9" style="margin-top: 5%; background: #fff;"> 
	@if(count($posts) > 0)
		<table class="all-coins">
			<thead style="border-bottom: 1px solid rgba(211,211,211,0.3);">
				<th colspan="15">
					ICO
				</th>
				<th class="text-center">START</th>
				<th class="text-center">END</th>
				<th class="text-center">RATE</th>
			</thead>
		@foreach($posts as $post)

			<tr>
				<td colspan="5" rowspan="2" style="width: 7%;">
					<div style="height: 9vh; width: 4.5vw; border: 1px solid rgba(211,211,211,0.8);">
						<div style="margin: 4% 0 0 4%;">
							<img style="height: 8vh; width: 4vw;" 
							src="{{ route('cover', ['filename' => $post->ico_logo.DIRECTORY_SEPARATOR.$post->cover_pic]) }}">
						</div>
					</div>
				</td>
				<td colspan="10" style="width: 50%;">
					<a href="/posts/{{$post->id}}">{{$post->ico_name}}</a></br>
					<small>{!!$post->ico_slogan!!}</small>
				</td>
				<td class="denotations">{{$post->ico_start_date}}</td>
				<td class="denotations">{{$post->ico_end_date}}</td>
				<td class="denotations">4.8</td>
			</tr>
			<tr>
				<td colspan="10"><b>KYC:</b> {{$post->kyc}} |<b> Whitelist:</b> {{$post->whitelist}} |<b> Restrictions: </b>{{$post->restricted_country}}</td>
				@if(!Auth::guest())
					<td>
						<a href="/posts/{{$post->id}}/edit" class="btn pull-left">Edit</a>
					</td>				
					<td>
						{!!Form::open(['action'=>['postsController@destroy',$post->id],'method'=>'POST', 'class'=>'pull-left'])!!}
							{{Form::hidden('_method','DELETE')}}
							{{Form::submit('Delete',['class'=>'text-danger','style'=>'border:none;outline:none;background:transparent;cursor:pointer;padding-top:15%;'])}}
						{!!Form::close()!!}
					</td>
				@endif				
			<tr>
			</tr>
			<td colspan="5"><div style="border-bottom:1px solid rgba(211,211,211,0.5);"></div></td>
			<td colspan="10"><div style="border-bottom:1px solid rgba(211,211,211,0.5);"></div></td>
			<td><div style="border-bottom:1px solid rgba(211,211,211,0.5);"></div></td>
			<td><div style="border-bottom:1px solid rgba(211,211,211,0.5);"></div></td>
			<td><div style="border-bottom:1px solid rgba(211,211,211,0.5);"></div></td>

			</tr>

		@endforeach
		</table>
		{{$posts->links()}}
	@else
		<p>No posts found</p>
	@endif
</div>
</div>
@endsection