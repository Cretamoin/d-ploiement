// Button lien
document.getElementById("lien").addEventListener("click", (e) => {
    e.preventDefault();
    document.body.style.opacity = "0";
    setTimeout(() => {
        window.location.href = e.target.href;
    }, 500);
});

window.addEventListener("load", () => {
    document.body.classList.add("loaded");
});

window.onload = () => {
    document.getElementById("all").style.opacity='1';
};
