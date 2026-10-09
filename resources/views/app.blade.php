<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Owner\'s Store')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-stone-100 font-sans text-stone-800 antialiased">
    <div class="min-h-screen lg:grid lg:grid-cols-[15.5rem_minmax(0,1fr)]">
        <aside class="border-b border-stone-200 bg-stone-50 px-4 py-5 lg:sticky lg:top-0 lg:h-screen lg:border-r lg:border-b-0 lg:px-5 lg:py-6">
            <div class="flex items-center justify-between lg:block">
                <a href="#" class="inline-flex items-center gap-3">
                    <span class="flex size-10 items-center justify-center rounded-xl bg-stone-800 text-sm font-semibold tracking-wide text-stone-50">OS</span>
                    <span>
                        <span class="block text-sm font-semibold tracking-tight text-stone-900">Owner's Store</span>
                        <span class="block text-xs text-stone-500">Sari-sari shop</span>
                    </span>
                </a>
            </div>

            <nav class="mt-6 flex gap-2 overflow-x-auto pb-1 lg:flex-col lg:gap-1 lg:overflow-visible" aria-label="Primary navigation">
                <a href="{{ route('dashboard.page') }}" aria-current="page" class="inline-flex shrink-0 items-center gap-3 rounded-lg bg-stone-200 px-3 py-2.5 text-sm font-medium text-stone-900">
                    Dashboard
                </a>
                <a href="{{ route('products.page') }}" class="inline-flex shrink-0 items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-stone-600 transition hover:bg-stone-100 hover:text-stone-900">
                    Products
                </a>
                <a href="#" class="inline-flex shrink-0 items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-stone-600 transition hover:bg-stone-100 hover:text-stone-900">
                    Notifications
                    <span class="ml-auto rounded-full bg-stone-200 px-2 py-0.5 text-xs tabular-nums text-stone-600">3</span>
                </a>
            </nav>

            <div class="mt-6 flex items-center gap-3 border-t border-stone-200 pt-5 lg:absolute lg:bottom-6 lg:left-5 lg:right-5">
                <span class="flex size-9 items-center justify-center rounded-full bg-stone-300 text-xs font-semibold text-stone-700">EM</span>
                <span class="min-w-0"><span class="block truncate text-sm font-medium text-stone-800">Esteron Morales</span><span class="block truncate text-xs text-stone-500">Store owner</span></span>
            </div>
        </aside>

        <main class="min-w-0 px-5 py-6 sm:px-8 sm:py-8 lg:px-10">
            @yield('content')
        </main>
    </div>
</body>
</html>
