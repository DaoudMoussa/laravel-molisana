@extends('layouts.app')

@section('title-page', 'la molisana - Prodotti')

@section('products', 'active')

@section('content')
    <main class='food-bg'>
        <div class="container">
            <section>
                <h2>Le lunghe</h2>
                <div class="card-container">
                    @foreach ($pastas as $pasta)
                        @if ($pasta['tipo'] == 'lunga')
                            <a href="/products/product" class="card clearfix">
                                <img src="{{ $pasta['src'] }}" alt="foto di {{ $pasta['titolo'] }}">
                                <div class="overlay">
                                    {{ $pasta['titolo'] }}
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </section>
            <section>
                <h2>Le corte</h2>
                <div class="card-container">
                    @foreach ($pastas as $pasta)
                        @if ($pasta['tipo'] == 'corta')
                            <a href="/products/product" class="card">
                                <img src="{{ $pasta['src'] }}" alt="foto di {{ $pasta['titolo'] }}">
                                <div class="overlay">
                                    {{ $pasta['titolo'] }}
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </section>
            <section>
                <h2>Le cortissime</h2>
                <div class="card-container">
                    @foreach ($pastas as $pasta)
                        @if ($pasta['tipo'] == 'cortissima')
                            <a href="/products/product" class="card">
                                <img src="{{ $pasta['src'] }}" alt="foto di {{ $pasta['titolo'] }}">
                                <div class="overlay">
                                    {{ $pasta['titolo'] }}
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection
