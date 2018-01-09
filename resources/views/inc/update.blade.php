@include('inc.header')
<div class="container" style="margin-top:30px">
	<div class="row">
		<div class="col-mid-6">
		
		<form method="post" action="{{ url('/edit',array($articles->id)) }}">
			{{csrf_field()}}
  <fieldset>
    <legend>CRUD application</legend>
     @if(count($errors)>0 )
	 @foreach($errors->all() as $error )
	 <div class="alert alert-danger">
	 {{$error}}
	 </div>
	 
	 @endforeach 

	@endif	
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email" value="<?php echo $articles->title; ?>"  name="email">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="textarea" value="<?php echo $articles->description; ?>" name="password">
    </div> 
    </fieldset>
    
    <button type="submit" class="btn btn-primary">update</button>
	<a href="{{url('/')}}" class="btn btn-primary">back</a>
  </fieldset>
</form>
		
		</div>
	
	</div>
</div>
@include('inc.footer')
