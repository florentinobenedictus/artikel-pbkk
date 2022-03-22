@extends('template')

@section('container')
	<h1>Post Category: {{ $category }}</h1>
	<hr/>
	@foreach($articles as $article)
		<article class="mb-5 border-bottom pb-4">
			<h3>
				<a href="/article/{{ $article->slug }}" class="text-decoration-none">
				{{ $article->title }}
				</a>
			</h3>
			<h6>By: {{ $article->author }}</h6>
			<p>{{ $article->excerpt }}</p>
		</article>
	@endforeach
	<h6><a href="/categories">Back to Categories</a></h6>
	<h6><a href="/article">Back to Article</a></h6>
@endsection