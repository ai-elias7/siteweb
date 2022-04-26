var docTitle = document.title;

var phone = document.getElementById("fas fa-mobile-alt navbar-icon");
var ordi = document.getElementById("fas fa-laptop navbar-icon");
var tele = document.getElementById("fas fa-tv navbar-icon");


switch (docTiltle) {

  case 'Catalogue des téléphone':
    phone.style.color="#eb7371";

  case 'Catalogue des ordinateurs':
    ordi.style.color="#eb7371";

  case 'Catalogue des Télévisions':
    tele.style.color="#eb7371";

  default:
    var z = 4;
}


window.addEventListener('scroll', function(){

  var tete = document.getElementById("tete");


  var nav = document.getElementById("nav");

  var title = document.querySelectorAll(".Navbar-title");


  if (window.scrollY > 500){

    tete.classList.add("teteScroll");
    nav.classList.add("navScroll");

    for (var i = 0; i < title.length; i++){
    title[i].classList.add("titleScroll");
    }

    title.ClassList.add("titleScroll");
      
    }

  else{

    tete.classList.remove("teteScroll");
    nav.classList.remove("navScroll");
    

      
for (var i = 0; i < title.length; i++){
  title[i].classList.remove("titleScroll");
}


  }
  
})
