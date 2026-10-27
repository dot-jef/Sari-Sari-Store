@extends('app')
@section('title', 'Restock | Owner\'s Store')

@section('content')
    <header class="flex flex-wrap items-start justify-between gap-4 border-b border-stone-200 pb-6">
        <div>
            <p class="text-sm text-stone-500">Inventory</p>
            <h1 class="mt-1 text-2xl font-semibold tracking-tight text-stone-900 sm:text-3xl">Restock product</h1>
            <p class="mt-2 text-sm text-stone-500">Add inventory to an existing product.</p>
        </div>
    </header>

    <section class="mt-7" aria-labelledby="restock-form-heading">
        <div class="w-full max-w-lg rounded-xl border border-stone-200 bg-white p-5 shadow-sm sm:p-6">
            <h2 id="restock-form-heading" class="text-base font-semibold text-stone-900">Restock details</h2>

            <form action="{{ route('products.restock.store') }}" method="POST" class="mt-5 space-y-5">
                @csrf

                <div>
                    <label for="product-name" class="block text-sm font-medium text-stone-700">Product name</label>
                    <input id="product-name" name="product_name" type="text" value="{{ old('product_name') }}" required autofocus placeholder="e.g. Instant noodles" class="mt-2 block w-full rounded-lg border border-stone-300 bg-white px-3 py-2.5 text-sm text-stone-800 placeholder:text-stone-400 focus:border-stone-500 focus:outline-none focus:ring-2 focus:ring-stone-200">
                    @error('product_name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="restock-quantity" class="block text-sm font-medium text-stone-700">Quantity</label>
                    <input id="restock-quantity" name="quantity" type="number" min="1" step="1" value="{{ old('quantity') }}" required placeholder="0" class="mt-2 block w-full rounded-lg border border-stone-300 bg-white px-3 py-2.5 text-sm text-stone-800 placeholder:text-stone-400 focus:border-stone-500 focus:outline-none focus:ring-2 focus:ring-stone-200">
                    @error('quantity')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col-reverse gap-3 border-t border-stone-100 pt-5 sm:flex-row sm:justify-end">
                    <a href="{{ route('products.index') }}" class="rounded-lg border border-stone-300 bg-white px-4 py-2.5 text-center text-sm font-medium text-stone-700 transition hover:bg-stone-50">Cancel</a>
                    <button type="submit" class="rounded-lg bg-stone-800 px-4 py-2.5 text-sm font-medium text-stone-50 shadow-sm transition hover:bg-stone-700 focus:outline-none focus:ring-2 focus:ring-stone-400 focus:ring-offset-2">Restock product</button>
                </div>
            </form>
        </div>
    </section>
@endsection
