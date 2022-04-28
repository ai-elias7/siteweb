
window.addEventListener('scroll', function(){

    var tete = document.getElementById("tete");
  
  
    var nav = document.getElementById("nav");
  
    var title = document.querySelectorAll(".Navbar-title");
  
  
    if (window.scrollY > 150){
  
      tete.classList.add("teteScroll");
      
      nav.classList.add("navScroll");
  
  for (var i = 0; i < title.length; i++){
    title[i].classList.add("titleScroll");
  }
  
      
      
    }
  
    else{
  
      tete.classList.remove("teteScroll");
      nav.classList.remove("navScroll");
      
  
        
  for (var i = 0; i < title.length; i++){
    title[i].classList.remove("titleScroll");
  }
  
  
    }
    
  })
  

  

const form = document.getElementById('form');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const email = document.getElementById('email');
const sujet = document.getElementById('sujet');
const birthday = document.getElementById('birthday');
const contenu = document.getElementById('contenu');


var selectElmt = document.getElementById("metier");




form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();



});

function checkInputs() {
	// trim to remove the whitespaces
	const nomValue = nom.value.trim();
	const prenomValue = prenom.value.trim();
	const emailValue = email.value.trim();
	const sujetValue = sujet.value.trim();
	const birthdayValue = birthday.value.trim();
	const contenuValue = contenu.value.trim();



	
const valeurselectionnee = selectElmt.options[selectElmt.selectedIndex].value.trim();
const textselectionne = selectElmt.options[selectElmt.selectedIndex].text.trim();


	if(nomValue === '') {
		setErrorFor(nom, 'Le nom ne peut pas être vide');
	} else {
		setSuccessFor(nom);
	}

	if(prenomValue === '') {
		setErrorFor(prenom, 'Le prenom ne peut pas être vide');
	} else {
		setSuccessFor(prenom);
	}
	
	
	if(emailValue === '') {
		setErrorFor(email, 'Email pas correct');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Email pas correct');
	} else {
		setSuccessFor(email);
	}


	if(sujetValue === '') {
		setErrorFor(sujet, "Votre message n'a pas de sujet");
	} else {
		setSuccessFor(sujet);
	}

	if(contenuValue === '') {
		setErrorFor(contenu, 'Le contenu est vide');
	} else {
		setSuccessFor(contenu);
	}

	if(textselectionne === '--Choisissez une option--') {
		setErrorFor(metier, 'Veuillez selectionner une profession');
	} else {
		setSuccessFor(metier);
	}

	if(birthdayValue === '') {
		setErrorFor(birthday, 'Veuillez entrer votre date de naissance');
	} else {
		setSuccessFor(birthday);
	}


}



function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

