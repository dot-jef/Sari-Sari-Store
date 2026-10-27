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
    @if (session('success'))
        <div class="text-green-600">{{ session('success') }}</div>
    @endif
    <section class="mt-7" aria-labelledby="product-list-heading">
        <div class="rounded-xl border border-stone-200 bg-white shadow-sm">
            <div class="border-b border-stone-100 px-5 py-5 sm:px-6">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div>
                        <h2 id="product-list-heading" class="text-base font-semibold text-stone-900">Product list</h2>
                        <p class="mt-1 text-sm text-stone-500">12 products in your catalogue</p>
                    </div>
                    <button type="button" id="add-product-btn" class="inline-flex shrink-0 items-center gap-2 rounded-lg bg-stone-800 px-3.5 py-2.5 text-sm font-medium text-stone-50 shadow-sm transition hover:bg-stone-700 focus:outline-none focus:ring-2 focus:ring-stone-400 focus:ring-offset-2">
                        Add product
                    </button>
                    <a href="{{ route('products.restock') }}" id="restock-btn" class="inline-flex shrink-0 items-center gap-2 rounded-lg border border-stone-300 bg-white px-3.5 py-2.5 text-sm font-medium text-stone-700 shadow-sm transition hover:bg-stone-50 focus:outline-none focus:ring-2 focus:ring-stone-400 focus:ring-offset-2">
                        Restock
                    </a>
                </div>

                <div class="mt-5 flex items-end justify-between gap-4">
                    <form id="search-form" action="{{ route('products.index') }}" class="flex w-full max-w-2xl items-center gap-2">
                        <label for="product-name-search" class="sr-only">Search products</label>
                        <input id="product-name-search" name="q" type="search" value="{{ old('q', request('q')) }}" placeholder="Search products" class="block min-w-0 flex-1 rounded-lg border border-stone-300 bg-white px-3 py-2.5 text-sm text-stone-800 placeholder:text-stone-400 transition focus:border-stone-500 focus:outline-none focus:ring-2 focus:ring-stone-200">
                        <label for="product-category" class="sr-only">Filter by category</label>
                        <select id="product-category" name="category" class="block w-44 shrink-0 appearance-none rounded-lg border border-stone-300 bg-white px-3 py-2.5 text-sm text-stone-700 transition focus:border-stone-500 focus:outline-none focus:ring-2 focus:ring-stone-200">
                            <option value="">All categories</option>
                            @foreach ($categories as $category)
                                <option value="{{$category}}" @selected(request('category') === $category)>{{$category}}</option>
                            @endforeach
                        </select>
                        <label for="product-quantity" class="sr-only">Filter by quantity</label>
                        <select id="product-quantity" name="quantity" class="block w-44 shrink-0 appearance-none rounded-lg border border-stone-300 bg-white px-3 py-2.5 text-sm text-stone-700 transition focus:border-stone-500 focus:outline-none focus:ring-2 focus:ring-stone-200">
                            <option value="">All Products</option>
                            <option value="In Stock" @selected(request('quantity') === "In Stock")>In Stock</option>
                            <option value="Low Stock" @selected(request('quantity') === "Low Stock")>Low Stock</option>
                            <option value="Out of Stock" @selected(request('quantity') === "Out of Stock")>Out of Stock</option>
                        </select>
                        <label for="order-by" class="sr-only">Order By</label>
                        <select id="order-by" name="order_by" class="block w-44 shrink-0 appearance-none rounded-lg border border-stone-300 bg-white px-3 py-2.5 text-sm text-stone-700 transition focus:border-stone-500 focus:outline-none focus:ring-2 focus:ring-stone-200">
                            <option value="">Newest</option>
                            <option value="Name ASC" @selected(request('order_by') === "Name ASC")>Name: A-Z</option>
                            <option value="Name DESC" @selected(request('order_by') === "Name DESC")>Name: Z-A</option>
                            <option value="Price ASC" @selected(request('order_by') === "Price ASC")>Price: low-high</option>
                            <option value="Price DESC" @selected(request('order_by') === "Price DESC")>Price: high-low</option>
                            <option value="Quantity ASC" @selected(request('order_by') === "Quantity ASC")>Quantity: low-high</option>
                            <option value="Quantity DESC" @selected(request('order_by') === "Quantity DESC")>Quantity: high-low</option>
                        </select>
                        <button type="submit" class="inline-flex shrink-0 items-center rounded-lg bg-stone-800 px-3.5 py-2.5 text-sm font-medium text-stone-50 shadow-sm transition hover:bg-stone-700 focus:outline-none focus:ring-2 focus:ring-stone-400 focus:ring-offset-2">
                            Search
                        </button>
                    </form>
                </div>
                @if ($errors->searchBag->any())
                    <span class="text-red-600">
                        @foreach ($errors->searchBag->all() as $message)
                            <p>{{ $message }}</p>
                        @endforeach
                    </span>
                @endif
            </div>

            @include('modal')

            <div class="overflow-x-auto">
                <table class="products-table min-w-[760px] w-full text-left text-sm">
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
                            <tr data-id="{{ $product->id }}" class="{{ old('id') === $product->id ? 'failed-edit' : "" }} transition hover:bg-stone-50/70">
                                <td data-product-name="{{ $product->product_name }}" class="product-name whitespace-nowrap px-5 py-4 font-medium text-stone-800 sm:px-6">{{ $product->product_name }}</td>
                                <td data-category="{{ $product->category }}" class="category whitespace-nowrap px-5 py-4">{{ $product->category }}</td>
                                <td data-quantity="{{ $product->quantity }}" class="quantity whitespace-nowrap px-5 py-4 tabular-nums">{{ $product->quantity }}</td>
                                <td data-selling-price="{{ $product->selling_price }}" class="selling-price whitespace-nowrap px-5 py-4 tabular-nums">&#8369;{{ $product->selling_price }}</td>
                                <td data-unit="{{ $product->unit }}" class="unit whitespace-nowrap px-5 py-4">{{ $product->unit }}</td>
                                <td class="whitespace-nowrap px-5 py-4 sm:px-6">
                                    <div class="flex justify-end gap-2">
                                        <button type="button" class="edit-button rounded-md border border-stone-300 bg-white px-3 py-1.5 text-xs font-medium text-stone-700 transition hover:bg-stone-50">Edit</button>
                                        <button type="button" class="delete-button rounded-md border border-stone-300 bg-white px-3 py-1.5 text-xs font-medium text-stone-600 transition hover:bg-stone-50">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @include('deleteModal')

            <div class="flex items-center justify-between border-t border-stone-100 px-5 py-3.5 text-xs text-stone-500 sm:px-6">
                {{ $products->links() }}
            </div>
        </div>
    </section>

@endsection
