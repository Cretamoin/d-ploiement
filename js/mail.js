document.addEventListener("DOMContentLoaded", () => {
  const input = document.getElementById("mail");
  const suffix = "@gmail.com";

  if (!input) return;

  input.addEventListener("blur", () => {
    if (input.value && !input.value.endsWith(suffix)) {
      input.value = input.value.replace(/@.*$/, "") + suffix;
    }
  });
});