<div class="fixed inset-0 z-50 grid place-items-center overflow-y-auto bg-stone-950/30 px-4 py-8" role="dialog" aria-modal="true" aria-labelledby="add-product-title">
    <div class="w-full max-w-lg overflow-hidden rounded-2xl border border-stone-200 bg-white shadow-2xl">
        <div class="flex items-start justify-between gap-4 border-b border-stone-100 px-5 py-5 sm:px-6">
            <div>
                <p class="text-sm text-stone-500">Inventory</p>
                <h2 id="add-product-title" class="mt-1 text-lg font-semibold tracking-tight text-stone-900">Add product</h2>
                <p class="mt-1 text-sm text-stone-500">Enter the details for the new item.</p>
            </div>
            <button type="button" class="flex size-8 items-center justify-center rounded-lg text-stone-400 transition hover:bg-stone-100 hover:text-stone-700" aria-label="Close modal">
                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" />
                </svg>
            </button>
        </div>

        <form action="{{ route('products.store') }}" method="POST" class="px-5 py-5 sm:px-6 sm:py-6">
            @csrf

            <div class="grid gap-5 sm:grid-cols-2">
                <div class="sm:col-span-2">
                    <label for="product-name" class="block text-sm font-medium text-stone-700">Product name</label>
                    <input id="product-name" type="text" name="product-name" placeholder="e.g. Instant noodles" class="mt-2 block w-full rounded-lg border border-stone-300 bg-white px-3 py-2.5 text-sm text-stone-800 placeholder:text-stone-400 focus:border-stone-500 focus:outline-none focus:ring-2 focus:ring-stone-200">
                </div>

                <div>
                    <label for="category" class="block text-sm font-medium text-stone-700">Category</label>
                    <input id="category" type="text" name="category" placeholder="e.g. Pantry" class="mt-2 block w-full rounded-lg border border-stone-300 bg-white px-3 py-2.5 text-sm text-stone-800 placeholder:text-stone-400 focus:border-stone-500 focus:outline-none focus:ring-2 focus:ring-stone-200">
                </div>

                <div>
                    <label for="unit" class="block text-sm font-medium text-stone-700">Unit</label>
                    <input id="unit" type="text" name="unit" placeholder="e.g. piece" class="mt-2 block w-full rounded-lg border border-stone-300 bg-white px-3 py-2.5 text-sm text-stone-800 placeholder:text-stone-400 focus:border-stone-500 focus:outline-none focus:ring-2 focus:ring-stone-200">
                </div>

                <div>
                    <label for="quantity" class="block text-sm font-medium text-stone-700">Quantity</label>
                    <input id="quantity" type="text" name="quantity" placeholder="0" class="mt-2 block w-full rounded-lg border border-stone-300 bg-white px-3 py-2.5 text-sm text-stone-800 placeholder:text-stone-400 focus:border-stone-500 focus:outline-none focus:ring-2 focus:ring-stone-200">
                </div>

                <div>
                    <label for="selling-price" class="block text-sm font-medium text-stone-700">Selling price</label>
                    <div class="relative mt-2">
                        <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-sm text-stone-400">&#8369;</span>
                        <input id="selling-price" type="text" name="selling-price" placeholder="0.00" class="block w-full rounded-lg border border-stone-300 bg-white py-2.5 pr-3 pl-7 text-sm text-stone-800 placeholder:text-stone-400 focus:border-stone-500 focus:outline-none focus:ring-2 focus:ring-stone-200">
                    </div>
                </div>
            </div>

            <div class="mt-7 flex flex-col-reverse gap-3 border-t border-stone-100 pt-5 sm:flex-row sm:justify-end">
                <button type="button" class="rounded-lg border border-stone-300 bg-white px-4 py-2.5 text-sm font-medium text-stone-700 transition hover:bg-stone-50">Cancel</button>
                <button type="submit" class="rounded-lg bg-stone-800 px-4 py-2.5 text-sm font-medium text-stone-50 shadow-sm transition hover:bg-stone-700 focus:outline-none focus:ring-2 focus:ring-stone-400 focus:ring-offset-2">Save product</button>
            </div>
        </form>
    </div>
</div>
