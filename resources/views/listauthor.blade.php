@extends('template')

@section('container')
	<h1>Author List</h1>
	<hr/>
	@foreach($users as $author)
		<article class="mb-5 border-bottom pb-4">
		<ul>
			<li>
			<h3>
				<a href="/authors/{{ $author->slug }}" class="text-decoration-none">
				{{ $author->name }}
				</a>
			</h3>
			</li>
		</ul>
		</article>
	@endforeach
	<h6><a href="/article">Back to Articles</a></h6>
@endsection