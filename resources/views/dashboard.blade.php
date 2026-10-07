<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard · Owner's Store</title>
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
                <a href="#" aria-current="page" class="inline-flex shrink-0 items-center gap-3 rounded-lg bg-stone-200 px-3 py-2.5 text-sm font-medium text-stone-900">
                    Dashboard
                </a>
                <a href="#" class="inline-flex shrink-0 items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-stone-600 transition hover:bg-stone-100 hover:text-stone-900">
                    Products
                </a>
                <a href="#" class="inline-flex shrink-0 items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-stone-600 transition hover:bg-stone-100 hover:text-stone-900">
                    Orders
                </a>
                <a href="#" class="inline-flex shrink-0 items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-stone-600 transition hover:bg-stone-100 hover:text-stone-900">
                    Notifications
                    <span class="ml-auto rounded-full bg-stone-200 px-2 py-0.5 text-xs tabular-nums text-stone-600">3</span>
                </a>
            </nav>

            <div class="mt-8 hidden rounded-xl border border-stone-200 bg-white p-4 lg:block">
                <p class="text-sm font-medium text-stone-800">Need a hand?</p>
                <p class="mt-1 text-xs leading-5 text-stone-500">Keep your stock list tidy to make each day easier.</p>
                <a href="#" class="mt-3 inline-flex text-xs font-medium text-stone-700 underline decoration-stone-300 underline-offset-4 hover:text-stone-950">View tips</a>
            </div>

            <div class="mt-6 flex items-center gap-3 border-t border-stone-200 pt-5 lg:absolute lg:bottom-6 lg:left-5 lg:right-5">
                <span class="flex size-9 items-center justify-center rounded-full bg-stone-300 text-xs font-semibold text-stone-700">EM</span>
                <span class="min-w-0"><span class="block truncate text-sm font-medium text-stone-800">Esteron Morales</span><span class="block truncate text-xs text-stone-500">Store owner</span></span>
            </div>
        </aside>

        <main class="min-w-0 px-5 py-6 sm:px-8 sm:py-8 lg:px-10">
            <header class="flex items-start justify-between gap-4 border-b border-stone-200 pb-6">
                <div>
                    <p class="text-sm text-stone-500">Wednesday, 7 October</p>
                    <h1 class="mt-1 text-2xl font-semibold tracking-tight text-stone-900 sm:text-3xl">Good morning, Esteron</h1>
                    <p class="mt-2 text-sm text-stone-500">Here’s a simple view of how your store is doing today.</p>
                </div>
                <span class="inline-flex shrink-0 items-center gap-2 rounded-lg border border-stone-300 bg-white px-3.5 py-2 text-sm font-medium text-stone-700 shadow-sm">
                    <span class="hidden sm:inline">Add product</span><span class="sm:hidden">Add</span>
                </span>
            </header>

            <section class="mt-7" aria-labelledby="overview-heading">
                <div class="flex items-center justify-between">
                    <h2 id="overview-heading" class="text-base font-semibold text-stone-900">Today’s overview</h2>
                    <span class="text-xs text-stone-500">Updated just now</span>
                </div>
                <div class="mt-4 grid gap-3 sm:grid-cols-2 xl:grid-cols-4">
                    <article class="rounded-xl border border-stone-200 bg-white p-4 shadow-sm">
                        <div><p class="text-sm font-medium text-stone-500">Today’s sales</p></div>
                        <p class="mt-5 text-2xl font-semibold tracking-tight text-stone-900">₱12,840</p><p class="mt-1 text-xs text-stone-500"><span class="font-medium text-stone-700">8.2% up</span> from yesterday</p>
                    </article>
                    <article class="rounded-xl border border-stone-200 bg-white p-4 shadow-sm">
                        <div><p class="text-sm font-medium text-stone-500">Orders</p></div>
                        <p class="mt-5 text-2xl font-semibold tracking-tight text-stone-900">38</p><p class="mt-1 text-xs text-stone-500"><span class="font-medium text-stone-700">5 more</span> than yesterday</p>
                    </article>
                    <article class="rounded-xl border border-stone-200 bg-white p-4 shadow-sm">
                        <div><p class="text-sm font-medium text-stone-500">Items sold</p></div>
                        <p class="mt-5 text-2xl font-semibold tracking-tight text-stone-900">126</p><p class="mt-1 text-xs text-stone-500">Across 31 products</p>
                    </article>
                    <article class="rounded-xl border border-stone-200 bg-white p-4 shadow-sm">
                        <div><p class="text-sm font-medium text-stone-500">Low stock</p></div>
                        <p class="mt-5 text-2xl font-semibold tracking-tight text-stone-900">6</p><p class="mt-1 text-xs text-stone-500">Items need restocking</p>
                    </article>
                </div>
            </section>

            <div class="mt-6 grid gap-6 xl:grid-cols-[minmax(0,1.55fr)_minmax(18rem,0.85fr)]">
                <section class="rounded-xl border border-stone-200 bg-white p-5 shadow-sm sm:p-6" aria-labelledby="sales-heading">
                    <div class="flex flex-wrap items-start justify-between gap-3"><div><h2 id="sales-heading" class="text-base font-semibold text-stone-900">Sales overview</h2><p class="mt-1 text-sm text-stone-500">A quiet week, with a steady lift toward the weekend.</p></div><span class="rounded-md bg-stone-100 px-2.5 py-1 text-xs font-medium text-stone-600">Last 7 days</span></div>
                    <div class="mt-7 flex h-48 items-end gap-3 border-b border-stone-200 px-2 sm:gap-5" aria-label="Weekly sales bar chart">
                        <div class="flex h-full flex-1 flex-col justify-end gap-2"><span class="block rounded-t-md bg-stone-200" style="height: 42%"></span><span class="text-center text-xs text-stone-400">Mon</span></div>
                        <div class="flex h-full flex-1 flex-col justify-end gap-2"><span class="block rounded-t-md bg-stone-300" style="height: 58%"></span><span class="text-center text-xs text-stone-400">Tue</span></div>
                        <div class="flex h-full flex-1 flex-col justify-end gap-2"><span class="block rounded-t-md bg-stone-200" style="height: 48%"></span><span class="text-center text-xs text-stone-400">Wed</span></div>
                        <div class="flex h-full flex-1 flex-col justify-end gap-2"><span class="block rounded-t-md bg-stone-300" style="height: 66%"></span><span class="text-center text-xs text-stone-400">Thu</span></div>
                        <div class="flex h-full flex-1 flex-col justify-end gap-2"><span class="block rounded-t-md bg-stone-400" style="height: 79%"></span><span class="text-center text-xs text-stone-400">Fri</span></div>
                        <div class="flex h-full flex-1 flex-col justify-end gap-2"><span class="block rounded-t-md bg-stone-300" style="height: 63%"></span><span class="text-center text-xs text-stone-400">Sat</span></div>
                        <div class="flex h-full flex-1 flex-col justify-end gap-2"><span class="block rounded-t-md bg-stone-200" style="height: 51%"></span><span class="text-center text-xs text-stone-400">Sun</span></div>
                    </div>
                    <div class="mt-5 grid grid-cols-2 divide-x divide-stone-200"><div class="pr-4"><p class="text-xs uppercase tracking-wide text-stone-400">Weekly total</p><p class="mt-1 text-lg font-semibold text-stone-900">₱76,220</p></div><div class="pl-4"><p class="text-xs uppercase tracking-wide text-stone-400">Average order</p><p class="mt-1 text-lg font-semibold text-stone-900">₱338</p></div></div>
                </section>

                <section class="rounded-xl border border-stone-200 bg-white p-5 shadow-sm sm:p-6" aria-labelledby="stock-heading">
                    <div class="flex items-center justify-between gap-4"><div><h2 id="stock-heading" class="text-base font-semibold text-stone-900">Stock to check</h2><p class="mt-1 text-sm text-stone-500">A few items are running low.</p></div><a href="#" class="text-xs font-medium text-stone-700 underline decoration-stone-300 underline-offset-4 hover:text-stone-950">View all</a></div>
                    <ul class="mt-5 divide-y divide-stone-100">
                        <li class="flex items-center justify-between gap-4 py-3 first:pt-0"><div class="min-w-0"><p class="truncate text-sm font-medium text-stone-800">Instant noodles</p><p class="mt-0.5 text-xs text-stone-500">Pantry</p></div><span class="shrink-0 rounded-full bg-stone-100 px-2.5 py-1 text-xs font-medium text-stone-600">4 left</span></li>
                        <li class="flex items-center justify-between gap-4 py-3"><div class="min-w-0"><p class="truncate text-sm font-medium text-stone-800">Bottled water 500ml</p><p class="mt-0.5 text-xs text-stone-500">Beverages</p></div><span class="shrink-0 rounded-full bg-stone-100 px-2.5 py-1 text-xs font-medium text-stone-600">6 left</span></li>
                        <li class="flex items-center justify-between gap-4 py-3"><div class="min-w-0"><p class="truncate text-sm font-medium text-stone-800">Laundry detergent</p><p class="mt-0.5 text-xs text-stone-500">Household</p></div><span class="shrink-0 rounded-full bg-stone-100 px-2.5 py-1 text-xs font-medium text-stone-600">2 left</span></li>
                        <li class="flex items-center justify-between gap-4 py-3 last:pb-0"><div class="min-w-0"><p class="truncate text-sm font-medium text-stone-800">Eggs, tray</p><p class="mt-0.5 text-xs text-stone-500">Fresh goods</p></div><span class="shrink-0 rounded-full bg-stone-100 px-2.5 py-1 text-xs font-medium text-stone-600">3 left</span></li>
                    </ul>
                </section>
            </div>

            <section class="mt-6 rounded-xl border border-stone-200 bg-white shadow-sm" aria-labelledby="activity-heading">
                <div class="flex items-center justify-between gap-4 border-b border-stone-100 px-5 py-4 sm:px-6"><div><h2 id="activity-heading" class="text-base font-semibold text-stone-900">Recent activity</h2><p class="mt-1 text-sm text-stone-500">The latest updates from your store.</p></div><a href="#" class="text-xs font-medium text-stone-700 underline decoration-stone-300 underline-offset-4 hover:text-stone-950">See history</a></div>
                <ul class="divide-y divide-stone-100 px-5 sm:px-6">
                    <li class="py-4"><p class="text-sm text-stone-600"><span class="font-medium text-stone-800">Order #1048</span> was marked as completed.</p><time class="text-xs text-stone-400">10 min ago</time></li>
                    <li class="py-4"><p class="text-sm text-stone-600"><span class="font-medium text-stone-800">₱560 sale</span> recorded for this morning.</p><time class="text-xs text-stone-400">32 min ago</time></li>
                    <li class="py-4"><p class="text-sm text-stone-600"><span class="font-medium text-stone-800">Low stock alert</span> added for laundry detergent.</p><time class="text-xs text-stone-400">1 hr ago</time></li>
                </ul>
            </section>
        </main>
    </div>
</body>
</html>
