const btnToggle = document.querySelector('.btn-mode');
const header = document.querySelector('header');
const toggle = document.querySelector('.toggle');



btnToggle.addEventListener('click', () => {

    const body = document.body;

    if (body.classList.contains('dark')){

        body.classList.add('light')
        body.classList.remove('dark')
        btnToggle.style.background= "#333" ;
        header.style.background= "rgb(135,55,55)";
        header.style.background= "linear-gradient(180deg, rgba(135,55,55,1) 0%, rgba(158,124,124,1) 10%, rgba(211,211,211,1) 40%)" ;
        toggle.style.background= "#fff";
        toggle.style.left= "225px" ;
    }
    else if (body.classList.contains('light')){

        body.classList.add('dark')
        body.classList.remove('light')
        btnToggle.style.background= "#fff" ;
        header.style.background= "rgb(8,0,150)" ;
        header.style.background= "linear-gradient(180deg, rgba(8,0,139,1) 0%, rgba(35,9,121,1) 10%, rgba(60,55,68,1) 100%)" ;
        toggle.style.background= "#333";
        toggle.style.left= "265px" ;
    }

})







var sidenav = document.getElementById("mySidenav");

function navbar() {
  const burger = document.querySelector(".burger");
  const header = document.querySelector("header");
  burger.addEventListener('click', () =>{
      burger.classList.toggle("active");
      menu.classList.toggle("active")
  })
}
navbar();
