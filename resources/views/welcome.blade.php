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
    <div class="col-12">
        <form action="messages/create" method="POST">
            <div class="form-group">
                <input type="text" name="message" class="form-control @if($errors->has('message')){{ 'is-invalid' }} @endif)" placeholder="¿Qué estás pensando?">
                @if($errors->has('message'))
                    @foreach($errors->get('message') as $error)
                    <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach 
                @endif
                {{ csrf_field() }}
            </div>
            <button class="btn btn-primary pull-right" type="submit">Guardar</button>
        </form>
    </div>
    @forelse($messages as $message)
    <div class="col-6">
        <img src="{{ $message->image }}" alt="" class="img-thumbnail">
        <p class="card-text">
            {{ $message->content }}
            <a href="/messages/{{ $message->id }}">Leer más</a>
        </p>
    </div>
    @empty
    <p class="text-center">
        No hay mensajes
    </p>
    @endforelse
</div>
@endsection