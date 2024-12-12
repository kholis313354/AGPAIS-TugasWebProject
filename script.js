  // hambuger menu navbar
window.addEventListener('resize', function(){
  addRequiredClass();
})

///////////butron login////////
// document.getElementById("login2").addEventListener('click', function() {
//   window.location.href = "login.php";
// });

// 
function addRequiredClass() {
  if (window.innerWidth < 860) {
      document.body.classList.add('mobile')
  } else {
      document.body.classList.remove('mobile') 
  }
}

window.onload = addRequiredClass

let hamburger = document.querySelector('.hamburger')
let mobileNav = document.querySelector('.nav-list')

let bars = document.querySelectorAll('.hamburger span')

let isActive = false

hamburger.addEventListener('click', function() {
  mobileNav.classList.toggle('open')
  if(!isActive) {
      bars[0].style.transform = 'rotate(45deg)'
      bars[1].style.opacity = '0'
      bars[2].style.transform = 'rotate(-45deg)'
      isActive = true
  } else {
      bars[0].style.transform = 'rotate(0deg)'
      bars[1].style.opacity = '1'
      bars[2].style.transform = 'rotate(0deg)'
      isActive = false
  }
  

})
//////  script kontak ////
const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
// script login fokus//
const inputs2 = document.querySelectorAll(".input2");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

// form login animasi
const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
// function login
function login() {
  window.location.href = './login.php';
}
document.addEventListener('DOMContentLoaded', function() {
  var btnElements = document.getElementsByClassName('btn');
  for (var i = 0; i < btnElements.length; i++) {
    btnElements[i].addEventListener('click', function(event) {
      if (event.target.tagName.toLowerCase() === 'button') {
        login(); 
      } else if (event.target.tagName.toLowerCase() === 'a') {
        window.location.href = event.target.getAttribute('href');
      }
    });
  }
});
