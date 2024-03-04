const hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click",()=>{
    hamburger.classList.toggle("active");
      });
const input_submit = document.querySelector(".save");
const input_fild = document.querySelector(".input_filds");

input_submit.addEventListener("click",()=>{
    input_fild.classList.toggle("active");
      });
