function motyw(theme) {
  const body = document.querySelector("body");
  body.setAttribute("data-theme", theme);
  var bg = document.querySelectorAll("#bg");
  var i = 0;
  for (i = 0; i < bg.length; i++) {
    bg[i].style.backgroundImage = "url('public/img/" + theme + ".jpg')";
  }
  localStorage.setItem("theme", theme);
}
