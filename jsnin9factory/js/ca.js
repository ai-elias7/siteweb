function afficher(){
  for(i = 0 ; i <document.getElementsByClassName('stock').length ; i++){
  document.getElementsByClassName("stock")[i].style.display = document.getElementsByClassName('stock')[i].style.display == 'block' ? "none" : "block";
  }
}
