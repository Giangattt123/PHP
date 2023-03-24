function toggleActive(selected) {
  let actives = document.querySelectorAll(".active");
  for (let i = 0; i < actives.length; i++) {
    actives[i].style.color = "#596275";
  }
}
