const signUpBtn = document.getElementById('signUp');
const signIpBtn = document.getElementById('signIn');
const container = document.getElementById('container');

signUpBtn.addEventListener('click' , ()=>{
   container.classList.add('right-panel-active') 
});

signIpBtn.addEventListener('click' , ()=>{
    container.classList.remove('right-panel-active') 
 });