document.querySelector("#btn-menu")?.addEventListener("click", () => {
    document.querySelector("#collapsing-menu").classList.toggle("hidden");
});

document
    .querySelector("#close-collapsing-menu")
    ?.addEventListener("click", () => {
        document.querySelector("#collapsing-menu").classList.toggle("hidden");
    });
