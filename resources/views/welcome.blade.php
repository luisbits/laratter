@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Laratter</h1>
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
        </ul>
    </nav>
</div>
<div class="row">
    <div class="col-6">
    @forelse($messages as $message)
        <img src="{{ $message['image'] }}" alt="" class="img-thumbnail">
        <p class="card-text">
            {{ $message['content'] }}
            <a href="/messages/{{ $message['id'] }}">Leer más</a>
        </p>
    @empty
    <p class="text-center">
        No hay mensajes
    </p>
    @endforelse
    </div>
</div>
@endsection