<div class="container md:w-[90%] mx-auto px-4 font-roboto py-5">
    <!-- breadcrumb -->
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="breadcrumb">
            @foreach($routes as $link)
                @if($link['route'] !== "#")
                <li>
                    <a href="{{ $link['route'] }}">
                        {{ $link['title'] }}
                    </a>
                </li>
                @else
                <li aria-current="page">
                    <div class=>{{ $link['title'] }}</div>
                </li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>