@extends('layouts.app')

@section('content')
<ul>
    @foreach($follows as $follow)
    <li>{{ $follow->username }}</li>
    @endforeach
</ul>
@endsection