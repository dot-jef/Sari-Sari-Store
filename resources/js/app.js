//
const productForm = document.getElementById("product-form");
const deleteForm = document.getElementById("delete-form");
const modal = document.querySelector(".modal");
const deleteModal = document.getElementById("delete-modal");
const addProductBtn = document.getElementById("add-product-btn");
const closeModalBtn = document.querySelectorAll(".close-modal-btn");
const productsTable = document.querySelector(".products-table");
const storeUrl = productForm.dataset.storeUrl;
const updateUrlTemplate = productForm.dataset.updateUrlTemplate;
const destroyUrlTemplate = deleteForm.dataset.destroyUrlTemplate;
const methodContainer = document.getElementById("method-container");
const idContainer = document.getElementById("id-container");
const createErrors = document.querySelectorAll(".create-error");
const updateErrors = document.querySelectorAll(".update-error");
const cancelDeleteBtn = document.querySelector(".cancel-delete-btn");
let failedEditModal = modal.classList.contains("update-modal");

checkModalMode();

addProductBtn.addEventListener("click", () => {
    productForm.reset();
    checkModalMode(false);
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
        failedEditModal = modal.dataset.id === productId;
        const updateUrl = updateUrlTemplate.replace('PRODUCT_ID', productId);
        productForm.action = updateUrl;
        idContainer.innerHTML = `<input type="hidden" name="id" value="${productId}">`;
        productForm.querySelector("#product-name").value = targetProduct.querySelector(".product-name").dataset.productName;
        productForm.querySelector("#category").value = targetProduct.querySelector(".category").dataset.category;
        productForm.querySelector("#quantity").value = targetProduct.querySelector(".quantity").dataset.quantity;
        productForm.querySelector("#selling-price").value = targetProduct.querySelector(".selling-price").dataset.sellingPrice;
        productForm.querySelector("#unit").value = targetProduct.querySelector(".unit").dataset.unit;

        checkModalMode(true);
        toggleModal();
    }

    const deleteBtn = e.target.closest(".delete-button");
    if (deleteBtn) {
        const targetProduct = deleteBtn.closest('tr');
        const productId = targetProduct.dataset.id;

        deleteForm.action = destroyUrlTemplate.replace('PRODUCT_ID', productId);

        toggleDeleteModal();
    }

})

cancelDeleteBtn.addEventListener("click", () => {
    toggleDeleteModal();
});

function toggleModal() {
    modal.hidden = !modal.hidden;
}

function toggleDeleteModal() {
    deleteModal.hidden = !deleteModal.hidden;
}

function checkModalMode(isUpdate = modal.classList.contains("update-modal")) {
    modal.classList.toggle("update-modal", isUpdate);
    modal.classList.toggle("create-modal", !isUpdate);

    if (isUpdate) {
        console.log("update modal");
        document.getElementById("add-product-title").textContent = "Edit product";
        methodContainer.innerHTML = '<input type="hidden" name="_method" value="PATCH">';


        createErrors.forEach((error) => error.setAttribute("hidden", ""));
        if (failedEditModal) {
            updateErrors.forEach((error) => error.removeAttribute("hidden"));
        } else {
            updateErrors.forEach((error) => error.setAttribute("hidden", ""));
        }
    } else {
        const inputs = productForm.querySelectorAll("input");
        inputs.forEach(input => input.value = "");
        console.log("add modal");
        document.getElementById("add-product-title").textContent = "Add product";
        productForm.action = storeUrl;
        methodContainer.innerHTML = '';
        idContainer.innerHTML = '';

        createErrors.forEach((error) => error.removeAttribute("hidden"));
        updateErrors.forEach((error) => error.setAttribute("hidden", ""));
    }
}
