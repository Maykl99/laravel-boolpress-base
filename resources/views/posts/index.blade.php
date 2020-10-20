@extends('layouts.app')
@section('content')
  <h2>Elenco post</h2>
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  @foreach ($posts as $post)
 
    <div>{{ $post->title }}</div>
    <div>{{ $post->body }}</div>

  @endforeach 
@endsection