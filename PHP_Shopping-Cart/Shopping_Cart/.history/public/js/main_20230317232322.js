function toggleActive(selected) {
  let cards = document.querySelectorAll(".cards");
  for (let i = 0; i < cards.length; i++) {
    cards[i].classList.remove("active");
  }
  selected.classList.add("active");
}
