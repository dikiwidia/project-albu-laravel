<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Albu') | {{ config('app.name') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex min-h-screen flex-col bg-slate-50 text-slate-800 antialiased">
    @php
        $navigationLinks = [
            ['label' => 'Beranda', 'url' => url('/'), 'pattern' => '/'],
            ['label' => 'Customer', 'url' => url('/customer'), 'pattern' => 'customer*'],
            ['label' => 'Product', 'url' => url('/product'), 'pattern' => 'product*'],
        ];
    @endphp

    <header class="sticky top-0 z-10 border-b border-slate-200 bg-white/90 backdrop-blur">
        <nav class="mx-auto flex max-w-6xl flex-col gap-3 px-4 py-4 sm:flex-row sm:items-center sm:justify-between">
            <a href="{{ url('/') }}" class="flex items-center gap-2 text-xl font-bold text-indigo-600">
                <span class="flex size-8 items-center justify-center rounded-lg bg-indigo-600 text-white">A</span>
                Albu
            </a>

            <ul class="flex gap-1 text-sm font-medium">
                @foreach ($navigationLinks as $navigationLink)
                    <li>
                        <a href="{{ $navigationLink['url'] }}" @class([
                            'rounded-lg px-4 py-2 transition-colors',
                            'bg-indigo-50 text-indigo-700' => request()->is($navigationLink['pattern']),
                            'text-slate-600 hover:bg-slate-100 hover:text-slate-900' => !request()->is(
                                $navigationLink['pattern']),
                        ])>
                            {{ $navigationLink['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>

    <main class="mx-auto w-full max-w-6xl grow px-4 py-10">
        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
            @yield('content')
        </div>
    </main>

    <footer class="border-t border-slate-200 bg-white">
        <div
            class="mx-auto flex max-w-6xl flex-col gap-2 px-4 py-6 text-sm text-slate-500 sm:flex-row sm:justify-between">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p>Dibuat dengan Laravel &amp; Tailwind CSS</p>
        </div>
    </footer>
</body>

</html>
