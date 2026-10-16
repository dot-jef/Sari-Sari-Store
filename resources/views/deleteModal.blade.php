<div id="delete-modal" hidden>
    <div class="fixed inset-0 z-50 grid place-items-center overflow-y-auto bg-stone-950/30 px-4 py-8" role="dialog" aria-modal="true" aria-labelledby="delete-product-title">
        <div class="w-full max-w-md overflow-hidden rounded-2xl border border-stone-200 bg-white shadow-2xl">
            <div class="flex items-start gap-4 border-b border-stone-100 px-5 py-5 sm:px-6">
                <div>
                    <h2 id="delete-product-title" class="text-lg font-semibold tracking-tight text-stone-900">Delete product</h2>
                    <p class="mt-1 text-sm leading-6 text-stone-500">Are you sure you want to delete this product? This action cannot be undone.</p>
                </div>
            </div>

            <form id="delete-form" action="" method="POST" data-destroy-url-template="{{ route('products.delete', ['id' => 'PRODUCT_ID']) }}" class="flex flex-col-reverse gap-3 px-5 py-5 sm:flex-row sm:justify-end sm:px-6">
                @csrf
                @method('DELETE')

                <button type="button" class="cancel-delete-btn rounded-lg border border-stone-300 bg-white px-4 py-2.5 text-sm font-medium text-stone-700 transition hover:bg-stone-50 focus:outline-none focus:ring-2 focus:ring-stone-300 focus:ring-offset-2">Cancel</button>
                <button type="submit" class="rounded-lg bg-red-600 px-4 py-2.5 text-sm font-medium text-white shadow-sm transition hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Delete product</button>
            </form>
        </div>
    </div>
</div>
