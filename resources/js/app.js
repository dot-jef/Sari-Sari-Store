//
const productForm = document.getElementById("product-form");
const modal = document.querySelector(".modal");
const addProductBtn = document.getElementById("add-product-btn");
const closeModalBtn = document.querySelectorAll(".close-modal-btn");
const productsTable = document.querySelector(".products-table");
const storeUrl = "route('products.store')"
const updateUrlTemplate = "route('products.update'), 'PRODUCT_ID')"
const methodContainer = document.getElementById("method-container");
let isEdit = false;

addProductBtn.addEventListener("click", () => {
    document.getElementById("add-product-title").innerHTML = "Add product";
    toggleModal();
});

closeModalBtn.forEach(modal => {
    modal.addEventListener("click", () => {
        toggleModal();
    });
});

// TODO: continue the edit form function
productsTable.addEventListener('click', (e) => {
    const editBtn = e.target.closest('.edit-button');
    if (editBtn) {
        const productId = editBtn.closest('tr').dataset.id;
        isEdit = true;

        if (isEdit) {
            document.getElementById("add-product-title").innerHTML = "Edit product";
            const updateUrl = updateUrlTemplate.replace('PRODUCT_ID', productId);
            productForm.action = updateUrl;
            methodContainer.innerHTML = '<input type="hidden" name="_method" value="PATCH">';
        }

        toggleModal();
    }
})

function toggleModal() {
    modal.hidden = !modal.hidden;
}

