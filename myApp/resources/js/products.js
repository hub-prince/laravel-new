document.addEventListener("DOMContentLoaded", () => {
    console.log("Products JS loaded");

    const buttons = document.querySelectorAll(".delete-product");

    buttons.forEach(button => {
        button.addEventListener("click", () => {
            const id = button.dataset.id;

            console.log("Delete clicked:", id);

            // Demo action
            alert("Deleting product ID: " + id);

            // Remove card from UI
            button.closest(".product-card").remove();
        });
    });
});