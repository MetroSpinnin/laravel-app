@extends('pages.app')
@section('content')

	<form action="/articles" method="post">
		@csrf
		<div class="form-group">
			<input type="text" name="title" class="form-control" placeholder="title">
		</div>
		<div class="form-group">
			<textarea class="form-control" name="body">body</textarea>
		</div>
		<input type="submit" class="btn btn-success" value="submit">
	</form>

@endsection