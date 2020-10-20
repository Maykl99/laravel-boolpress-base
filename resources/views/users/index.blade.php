@extends('layouts.app')

@section('content')
    user index
    @if (session('status'))
        <div class="alert alert-success">
            Profilo cancellato numero: {{ session('status') }}
        </div>
    @endif
    
    <h2>Elenco utenti</h2>
    @foreach ($users as $user)
        <ul>
            <li>{{ $user->name }}</li>
            <li>{{ $user->email }}</li>
            <li>{{ $user->avatar->avatar }}</li>
        <li><a href="{{ route('users.show', $user->id) }}">Dettagli</a></li>
        </ul>
    @endforeach

    {{-- posso accedere a vari valori dei modelli (table) grazie alle relazioni create --}}
@endsection