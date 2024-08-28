document.querySelector("#btn-menu")?.addEventListener("click", () => {
    document.querySelector("#collapsing-menu").classList.toggle("hidden");
});

document
    .querySelector("#close-collapsing-menu")
    ?.addEventListener("click", () => {
        document.querySelector("#collapsing-menu").classList.toggle("hidden");
    });

document.querySelectorAll(".eliminar").forEach((elemento) => {
    elemento.addEventListener("submit", (e) => {
        e.preventDefault();
        if (confirm("¿Estás seguro de eliminar el elemento?")) {
            elemento.submit();
        }
    });
});
