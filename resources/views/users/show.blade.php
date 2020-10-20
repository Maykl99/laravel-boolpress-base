@extends('layouts.app')

@section('content')
    user index
    <h2>Dettaglio utente</h2>
    
    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->avatar->avatar }}</li>
        <li>{{ $user->avatar->telefono }}</li>
        <li><a href="{{ route('users.show', $user->id) }}">Dettagli</a></li>
    </ul>

    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Cancella">
    </form>
    
    <h3>Post che hai scritto</h3>

    {{-- posso accedere a vari valori dei modelli (table) grazie alle relazioni create --}}
    @foreach ($user->posts as $post)
        <div>{{ $post->title }}</div>
        <div>{{ $post->body }}</div>
    @endforeach
@endsection