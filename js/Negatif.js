const toggle = document.getElementById("negatifToggle");

// au chargement
if (localStorage.getItem("negatif") === "on") {
    document.body.classList.add("negatif");
    toggle.checked = true;
}

// au clic
toggle.addEventListener("change", () => {
    if (toggle.checked) {
        document.body.classList.add("negatif");
        localStorage.setItem("negatif", "on");
    } else {
        document.body.classList.remove("negatif");
        localStorage.setItem("negatif", "off");
    }
});

