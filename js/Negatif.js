const toggle = document.getElementById("negatifToggle");

if (localStorage.getItem("negatif") === "on") {
    document.body.classList.add("negatif");
    toggle.checked = true;
}

toggle.addEventListener("change", () => {
    if (toggle.checked) {
        document.body.classList.add("negatif");
        localStorage.setItem("negatif", "on");
    } else {
        document.body.classList.remove("negatif");
        localStorage.setItem("negatif", "off");
    }
});

