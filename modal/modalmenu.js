// open modal

// close modal 

var modalAboutUs = document.querySelector('#aboutus');
var modalSignUp = document.querySelector('#signUpAndIn'); 

window.addEventListener("click", function(e){
    if (e.target == modalAboutUs) { 
        modalAboutUs.style.display = "none"; 
    }

    if (e.target == modalSignUp) { 
        modalSignUp.style.display = "none"; 
    } 
}); 
// tabs 
// const tabs = document.querySelector(".tabs");

// const panels = document.querySelectorAll('.panel');
// tabs.addEventListener("click", function(e){
//     if(e.target.tagName == "DIV"){
//         const targetPanel= document.querySelector(e.target.dataset.target);
//         panels.forEach(function(panel){
//             if(panel == targetPanel){
//                 panel.classList.add('active');
//             }else{
//                 panel.classList.remove('active'); 
//             }
//         });   
//     }


// password toggle 
const eye = document.querySelector("#pwtest");
const input = document.querySelector("#pwTest"); 
var password=true; 
eye.addEventListener("click", function(){
    if (password){
        input.setAttribute('type','text');
        eye.innerHTML = '<i class="far fa-eye-slash"></i>';
    }else{
        input.setAttribute('type', 'password');
        eye.innerHTML = '<i class="far fa-eye"></i>';

    }
    password = !password;
});

// error check // 



// window.onclick = function(e) { 
    //     if (e.target == modalAboutUs) { 
    //         modalAboutUs.style.display = "none"; 
    //     }
    
    //     if (e.target == modalSignUp) { 
    //         modalSignUp.style.display = "none"; 
    //     } 
    // }

//     var aboutUs = document.getElementbyId("modal1"); 
// var signIn = document.getElementbyId("modal2"); 

// aboutUs.addEventListener("click", function(){
//     document.getElementById('aboutus').style.display='block'; 
// }); 

// signIn.addEventListener("click", function(){
//     document.getElementById('signUpAndIn').style.display='block'; 
// }); 