window.addEventListener('scroll', function(){

  var tete = document.getElementById("tete");


  var nav = document.getElementById("nav");

  var title = document.querySelectorAll(".Navbar-title");

  var cible = document.getElementById("titre");


 var target = document.getElementById("Navbar-menu");

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
