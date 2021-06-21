document.addEventListener("DOMContentLoaded", () => {
  setTimeout(() => {
    document.getElementById('loading-screen').style.opacity = "0";
    setTimeout(() => document.getElementById('loading-screen').style.display = "none", 350)
  }, 500);
});
