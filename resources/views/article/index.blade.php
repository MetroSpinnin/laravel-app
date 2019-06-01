@extends('pages.app')
@section('content')
	<h1>Articles Page</h1>
	@foreach($articles as $article)
		<h1><a href="/articles/{{$article->id}}"> {{$article->title}}</a></h1>
		<article>{{$article->body}}</article>
	@endforeach
@endsection