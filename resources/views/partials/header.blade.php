<header>
    <div class="top-header">
        <img src="{{ asset('img\marchio-sito-test.png') }}" alt="la molisana logo">
    </div>

    <div class="bottom-header">
        <ul class="nav">
            <li>
                <a class="@yield('home')" href="/home">Home</a>
            </li>
            <li>
                <a class="@yield('products')" href="/products">Prodotti</a>
            </li>
            <li>
                <a class ="@yield('news')" href="/news">News</a>
            </li>
        </ul>
    </div>
</header>
