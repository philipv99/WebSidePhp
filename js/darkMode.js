var toggleState = true;

function toggleDarkMode() {
  document.getElementById("body").classList.toggle("dark");
  var img = document.getElementById("lightModeImg")
  if (toggleState) {
    img.src = "../assets/icons/lightMode.png";
  }
  else {
    img.src = "../assets/icons/DarkMode.png";
  }
  toggleState = !toggleState;
}