<header>
    <div class="container">
        <nav>
            <figure>
                <img src="{{ asset('images/dc-logo.png')}}" alt="logo dc">
            </figure>
            <ul>
                @foreach (config('header_menu') as $link)
                <li>
                    <a href="{{ route($link['route_name']) }}">{{ $link['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>

    </div>
</header> 