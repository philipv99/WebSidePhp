// nav manu toggle

function toggleVisabilaty() {
  document.getElementById("menuToggle").classList.toggle("visible");
  document.getElementById("navButton").classList.toggle("border-b-3");
  document.getElementById("menuIcon1").toggleAttribute("hidden");
  document.getElementById("menuIcon2").toggleAttribute("hidden");
}

async function closeMenu() {
  await new Promise(r => setTimeout(r, 50));
  document.getElementById("menuToggle").classList.remove("visible");
  document.getElementById("navButton").classList.remove("border-b-3");
  document.getElementById("menuIcon1").toggleAttribute("hidden");
  document.getElementById("menuIcon2").toggleAttribute("hidden");
}