<div id="delete-modal">

    <p>Are you sure you want to delete?</p>
    <form action="" method="POST" data-destroy-url-template="{{ route('products.delete', ['id' => 'PRODUCT_ID']) }}">
        @csrf
        @method('DELETE')

        <button type="button">No</button>
        <button type="submit">Yes</button>
    </form>
</div>
