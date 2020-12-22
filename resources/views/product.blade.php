@extends('layouts.app')

@section('title-page', 'La Molisana - product')

@section('content')
    <main>
        <div class="container">
            <h1>{{ $product['titolo'] }}</h1>
            <img src="{{ $product['src-h'] }}" alt="foto {{ $product['titolo'] }}">
            <img src="{{ $product['src-p'] }}" alt="foto {{ $product['titolo'] }}">
            <p>
                {{ $product['descrizione'] }}
            </p>
            </div>
    </main>
@endsection
