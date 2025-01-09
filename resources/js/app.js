import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    // Function to open modal
    window.openModal = function () {
        const modal = document.getElementById("modalForm");
        if (modal) {
            modal.classList.remove("hidden");
        }
    };

    // Function to close modal
    window.closeModal = function () {
        const modal = document.getElementById("modalForm");
        if (modal) {
            modal.classList.add("hidden");
        }
    };
});

