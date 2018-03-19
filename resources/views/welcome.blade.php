@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-9">
    @forelse($messages as $message)
    @include('message.message')
    @empty
    <p class="text-center">
        No hay mensajes
    </p>
    @endforelse
    @if(count($messages))
    <div class="text-center">
        {{ $messages->links() }}
    </div>
    @endif
    </div>
    <div class="col-3">
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
</div>
@endsection