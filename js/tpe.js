const nom = document.getElementById("nom");

nom.addEventListener("mouseenter", () => {
  nom.style.backdropFilter = "blur(30px)";
  nom.style.transition="1s";
});

nom.addEventListener("mouseleave", () => {
  nom.style.backdropFilter = "blur(0px)";
});
