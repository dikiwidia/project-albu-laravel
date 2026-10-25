@extends('layouts.main')

@section('content')
    <h1 class="text-3xl font-bold underline">
        Ini Adalah Product
    </h1>
    @foreach ($data as $item)
        <p>{{ $item }}</p>
    @endforeach
@endsection
