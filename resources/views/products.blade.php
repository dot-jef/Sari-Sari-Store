@extends('app')
@section('title', 'Products | Owner\'s Store')

@section('content')
    <header class="flex flex-wrap items-start justify-between gap-4 border-b border-stone-200 pb-6">
        <div>
            <p class="text-sm text-stone-500">Inventory</p>
            <h1 class="mt-1 text-2xl font-semibold tracking-tight text-stone-900 sm:text-3xl">Products</h1>
            <p class="mt-2 text-sm text-stone-500">Keep track of the items available in your store.</p>
        </div>
    </header>

    <section class="mt-7" aria-labelledby="product-list-heading">
        <div class="rounded-xl border border-stone-200 bg-white shadow-sm">
            <div class="border-b border-stone-100 px-5 py-5 sm:px-6">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div>
                        <h2 id="product-list-heading" class="text-base font-semibold text-stone-900">Product list</h2>
                        <p class="mt-1 text-sm text-stone-500">12 products in your catalogue</p>
                    </div>
                </div>

                <div class="mt-5 flex items-end justify-between gap-4">
                    <div class="relative max-w-md flex-1">
                        <label for="product-search" class="sr-only">Search products</label>
                        <input id="product-search" type="search" placeholder="Search products" class="block w-full rounded-lg border border-stone-300 bg-white py-2.5 pr-3 pl-9 text-sm text-stone-800 placeholder:text-stone-400 focus:border-stone-500 focus:outline-none focus:ring-2 focus:ring-stone-200">
                    </div>
                    <button type="button" id="add-product-btn" class="inline-flex shrink-0 items-center gap-2 rounded-lg bg-stone-800 px-3.5 py-2.5 text-sm font-medium text-stone-50 shadow-sm transition hover:bg-stone-700 focus:outline-none focus:ring-2 focus:ring-stone-400 focus:ring-offset-2">
                        Add product
                    </button>
                </div>
            </div>


            <div class="overflow-x-auto">
                <table class="min-w-[760px] w-full text-left text-sm">
                    <caption class="sr-only">Product inventory list</caption>
                    <thead class="border-b border-stone-200 bg-stone-50 text-xs uppercase tracking-wide text-stone-500">
                        <tr>
                            <th scope="col" class="whitespace-nowrap px-5 py-3.5 font-medium sm:px-6">Product name</th>
                            <th scope="col" class="whitespace-nowrap px-5 py-3.5 font-medium">Category</th>
                            <th scope="col" class="whitespace-nowrap px-5 py-3.5 font-medium">Quantity</th>
                            <th scope="col" class="whitespace-nowrap px-5 py-3.5 font-medium">Selling price</th>
                            <th scope="col" class="whitespace-nowrap px-5 py-3.5 font-medium">Unit</th>
                            <th scope="col" class="whitespace-nowrap px-5 py-3.5 text-right font-medium sm:px-6">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-100 text-stone-600">
                        @foreach ($products as $product)
                            <tr data-id="{{ $product->id }}" class="transition hover:bg-stone-50/70">
                                <td class="whitespace-nowrap px-5 py-4 font-medium text-stone-800 sm:px-6">{{ $product->product_name }}</td>
                                <td class="whitespace-nowrap px-5 py-4">{{ $product->category }}</td>
                                <td class="whitespace-nowrap px-5 py-4 tabular-nums">{{ $product->quantity }}</td>
                                <td class="whitespace-nowrap px-5 py-4 tabular-nums">&#8369;{{ $product->selling_price }}</td>
                                <td class="whitespace-nowrap px-5 py-4">{{ $product->unit }}</td>
                                <td class="whitespace-nowrap px-5 py-4 sm:px-6">
                                    <div class="flex justify-end gap-2">
                                        <button type="button" class="rounded-md border border-stone-300 bg-white px-3 py-1.5 text-xs font-medium text-stone-700 transition hover:bg-stone-50">Edit</button>
                                        <button type="button" class="rounded-md border border-stone-300 bg-white px-3 py-1.5 text-xs font-medium text-stone-600 transition hover:bg-stone-50">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex items-center justify-between border-t border-stone-100 px-5 py-3.5 text-xs text-stone-500 sm:px-6">
                <span>Showing 5 of 12 products</span>
                <span>Page 1 of 3</span>
            </div>
        </div>
    </section>

    <div class="modal" hidden>
        @include('modal')
    </div>

@endsection
