@extends('template')

@section('container')
	<h1>{{ $title }}</h1>
	
	<hr/>
	@foreach($articles as $article)
		<article class="mb-5 border-bottom pb-4">
			<h3>
				<a href="/article/{{ $article->slug }}" class="text-decoration-none">
				{{ $article->title }}
				</a>
			</h3>
			<h6>By: <a href="/authors/{{ $article->user->slug }}" class="text-decoration-none">{{ $article->user->name }}</a></h6>
			<p>{{ $article->excerpt }}</p>
			<a href="/article/{{ $article->slug }}" class="text-decoration-none">Read more..</a>
		</article>
	@endforeach
@endsection