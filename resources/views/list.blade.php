@extends ("app")
@section("content")
@foreach($posts as $post)
<p class="lead">{{ $post->title }} | {{ $post->content}}</p>
<a href="/edit/{{ $post->id }}" class="link">Edit</a>
<a href="/delete/{{ $post->id }}" class="link">delete</a>
@endforeach
@endsection