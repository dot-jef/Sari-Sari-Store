//
const productForm = document.getElementById("product-form");
const modal = document.querySelector(".modal");
const addProductBtn = document.getElementById("add-product-btn");
const closeModalBtn = document.querySelectorAll(".close-modal-btn");
const productsTable = document.querySelector(".products-table");
const storeUrl = productForm.dataset.storeUrl;
const updateUrlTemplate = productForm.dataset.updateUrlTemplate;
const methodContainer = document.getElementById("method-container");

addProductBtn.addEventListener("click", () => {
    document.getElementById("add-product-title").textContent = "Add product";
    productForm.action = storeUrl;
    methodContainer.innerHTML = '';
    productForm.reset();
    toggleModal();
});

closeModalBtn.forEach(modal => {
    modal.addEventListener("click", () => {
        toggleModal();
    });
});

productsTable.addEventListener('click', (e) => {
    const editBtn = e.target.closest('.edit-button');
    if (editBtn) {
        const targetProduct = editBtn.closest('tr');
        const productId = targetProduct.dataset.id;

        document.getElementById("add-product-title").textContent = "Edit product";
        const updateUrl = updateUrlTemplate.replace('PRODUCT_ID', productId);
        productForm.action = updateUrl;
        methodContainer.innerHTML = '<input type="hidden" name="_method" value="PATCH">';
        productForm.querySelector("#product-name").value = targetProduct.querySelector(".product-name").textContent;
        productForm.querySelector("#category").value = targetProduct.querySelector(".category").textContent;
        productForm.querySelector("#quantity").value = targetProduct.querySelector(".quantity").textContent;
        productForm.querySelector("#selling-price").value = targetProduct.querySelector(".selling-price").textContent.replace(/[^\d.]/g, '');
        productForm.querySelector("#unit").value = targetProduct.querySelector(".unit").textContent;

        toggleModal();
    }
})

function toggleModal() {
    modal.hidden = !modal.hidden;
}

