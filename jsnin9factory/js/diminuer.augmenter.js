function diminuer(i) {
  var n = document.getElementsByClassName("nb");
  if (n[i].value > 0) {
    n[i].value = parseInt(n[i].value) - 1;
  }
}

function augmenter(i) {
  var n = document.getElementsByClassName("nb");
  if (n[i].value < 5) {
    n[i].value = parseInt(n[i].value) + 1;
  }
}
