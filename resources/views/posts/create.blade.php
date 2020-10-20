@extends('layouts.app')
@section('content')
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        @method('POST')

        {{-- user_id della table posts --}}
        <select name="user_id"> 
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->id }}</option>
            @endforeach
        </select>


        <label for="title">Titolo</label>
        <input type="text" name="title" placeholder="title">
        <label for="content">Testo</label>
        <textarea name="body" cols="30" rows="10"></textarea>
        <input type="submit" value="Invia">
    </form>
@endsection