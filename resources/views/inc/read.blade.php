@include('inc.header')
<div class="container" style="margin-top:30px">
	<div class="row">
	
	<legend>CRUD application</legend>
	<p class="lead"> {{ $articles->title }}</p>
	
	<p class="lead"> {{ $articles->description }}</p>
	</pre>
	</div>
</div>
@include('inc.footer')	