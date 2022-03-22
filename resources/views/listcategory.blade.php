@extends('template')

@section('container')
	<h1>Categories</h1>
	<hr/>
	@foreach($categories as $category)
		<article class="mb-5">
		<ul>
			<li>
			<h3>
				<a href="/categories/{{ $category->slug }}" class="text-decoration-none">
				{{ $category->name }}
				</a>
			</h3>
			</li>
		</ul>
		</article>
	@endforeach
	<h6><a href="/article">Back to Articles</a></h6>
@endsection