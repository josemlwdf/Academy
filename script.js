document.addEventListener("DOMContentLoaded", () => {
    const toggles = document.querySelectorAll(".toggle-btn");

    toggles.forEach((toggle) => {
        toggle.addEventListener("click", () => {
            const expanded = toggle.getAttribute("aria-expanded") === "true";
            toggle.setAttribute("aria-expanded", !expanded);

            const content = toggle.nextElementSibling;
            if (content) {
                content.style.display = expanded ? "none" : "block";
            }
        });
    });
});
