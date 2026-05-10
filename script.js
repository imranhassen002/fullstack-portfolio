// SMOOTH SCROLL
document.querySelectorAll('nav a').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    document.querySelector(link.getAttribute('href')).scrollIntoView({ behavior: "smooth" });
  });
});

// FADE IN
window.onload = () => document.body.style.opacity = "1";

// MODAL
function openProject(title, desc){
  document.getElementById("modalTitle").innerText = title;
  document.getElementById("modalDescription").innerText = desc;
  document.getElementById("projectModal").style.display = "block";
}

// CLOSE MODAL
document.querySelector(".close-btn").onclick = () =>
document.getElementById("projectModal").style.display = "none";

// TYPING
const roles = ["Software Engineer","AI Developer"];
let i=0,j=0;
function type(){
  const el=document.getElementById("typed-text");
  if(j<roles[i].length){
    el.innerHTML+=roles[i][j++];
    setTimeout(type,100);
  }else{
    setTimeout(()=>{el.innerHTML=""; j=0; i=(i+1)%roles.length; type();},1500);
  }
}
document.addEventListener("DOMContentLoaded",type);

// BACK TO TOP
const btn=document.getElementById("backToTop");
window.onscroll=()=>btn.style.display=window.scrollY>300?"block":"none";
btn.onclick=()=>window.scrollTo({top:0,behavior:"smooth"});

// FORM AJAX
document.getElementById("contactForm").addEventListener("submit", function(e){
  e.preventDefault();

  const formData = new FormData(this);

  fetch("contact.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.text())
  .then(data => {
    document.getElementById("formMessage").innerText = data;
    this.reset();
  });
});
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("save_contact.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("formMessage").innerText = data;
        document.getElementById("contactForm").reset();
    })
    .catch(error => {
        document.getElementById("formMessage").innerText = "Something went wrong!";
    });
});