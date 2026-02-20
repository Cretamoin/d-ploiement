const nom = document.getElementById("nom");

nom.addEventListener("mouseenter", () => {
  nom.style.backdropFilter = "blur(30px)";
});

nom.addEventListener("mouseleave", () => {
  nom.style.backdropFilter = "blur(0px)";
});
