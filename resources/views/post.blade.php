@extends('layouts.main')

@section('container')
<article class="mb-5">
	<h3>{{ $post->title }}
	</h3>
	<h6>By: {{ $post->author }}</h6>
	<p>{{ $post->body }}</p>
</article>
@endsection