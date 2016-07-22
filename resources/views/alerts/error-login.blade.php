@if(Session::has('inactive'))
		<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			{{ Session::get('inactive') }}
		</div>
@endif