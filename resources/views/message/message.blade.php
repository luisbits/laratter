<div class="card bg-light mb-3">
    <div class="card-header">{{ $message->id }}</div>
    <div class="card-body">
        <img src="{{ $message->image }}" alt="" class="img-thumbnail">
        <div class="text-muted">
            Publicado por <a href="/{{ $message->user->username }}">{{ $message->user->name }}</a>
        </div>
        <p class="card-text">
            {{ $message->content }}
        </p>
        <a href="/messages/{{ $message->id }}">Leer más</a>
    </div>
</div>