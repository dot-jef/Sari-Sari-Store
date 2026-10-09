//

const productForm = document.getElementById("product-form");
const modal = document.querySelector(".modal");
const addProductBtn = document.getElementById("add-product-btn");
const closeModalBtn = document.querySelectorAll(".close-modal-btn");

addProductBtn.addEventListener("click", () => {
    modal.removeAttribute("hidden");
});

closeModalBtn.forEach(modal => {
    modal.addEventListener("click", () => {
        closeModal();
    });
});

productForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    
});



function closeModal() {
    modal.setAttribute("hidden", "");
}

