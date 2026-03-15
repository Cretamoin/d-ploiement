
document.addEventListener("DOMContentLoaded", () => {
  const p = new URLSearchParams(window.location.search);
  if (p.get("err") === "user") alert("Utilisateur inexistant");
  if (p.get("err") === "mdp") alert("Mot de passe incorrect");
  if (p.get("err") === "inc") alert("Les mots de passes ne correspondent pas");
  if (p.get("err") === "lost") alert("Vous devez être connecté pour avoir accès");

  if (p.has("err")) {
    window.history.replaceState({}, document.title, window.location.pathname);
  }
});