@extends('layouts.app')

@section('content')
<ul class="list-group">
    @foreach($follows as $follow)
    <li class="list-group-item">
        <a href="/{{ $follow->username }}">
            {{ $follow->username }}
        </a>
    </li>
    @endforeach
</ul>
@endsection