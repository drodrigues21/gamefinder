var username = document.getElementById('username');
var email = document.getElementById('email');
var password = document.getElementById('psw');
var confirmPassword = document.getElementById('pswConfirm');
var submitBtn = document.getElementById('register');
var cancelBtn = document.querySelector('#signupCancel');
var signUpForm = document.getElementById('signUp');
var signinUsername = document.getElementById('signinusername');
var signinPassword = document.getElementById('pwSignin');
var signinForm = document.getElementById('signIn');
var signinBtn = document.getElementById('signinBtn');
var signinCancel = document.getElementById('signinCancel');
var modalAboutUs = document.querySelector('#aboutus');
var modalSignUp = document.querySelector('#signUpAndIn');
var tabs = document.querySelectorAll(".head div");
var logOutbtn = document.getElementById("logOutbtn");

// -----------close modal ----------//

document.addEventListener("click", function (e) {
    if (e.target == modalAboutUs) {
        modalAboutUs.style.display = "none";
    }

    if (e.target == modalSignUp) {
        modalSignUp.style.display = "none";
    }
});

// ------------tabs -------------//
for (let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener("click", function (e) {
        e.preventDefault();
        let target = e.target;
        if (target.id == "signInTab") {
            toggleTabs("block", "none", "transparent ", "lightgrey ");
            removeMsgs();

        } else if (target.id == "signUpTab") {
            toggleTabs("none", "block", "lightgrey ", "transparent ");
            removeMsgs();
        }
    });
}

function toggleTabs(formLoginDisplay, formSignupDisplay, formLoginTabDisplay, formSignupTabDisplay) {
    let formLogin = document.querySelector("#signIn");
    let formLoginTab = document.querySelector("#signInTab");
    let formSignup = document.querySelector("#signUp");
    let formSignupTab = document.querySelector("#signUpTab");

    formLogin.style.display = formLoginDisplay;
    formSignup.style.display = formSignupDisplay;

    formLoginTab.style.background = formLoginTabDisplay;
    formSignupTab.style.background = formSignupTabDisplay;
}

// --------------password toggle ---------------// FIX!!!!

const eye = document.querySelector("#pwsignin");
const input = document.querySelector("#pwSignin");
const eyepwSU = document.querySelector("#pwtoggleSU");
const inputSU = document.querySelector("#psw");
const eyepwConfSU = document.querySelector("#pwtoggleConf");
const inputConfSU = document.querySelector("#pswConfirm");
var pwInput = true;

eye.addEventListener("click", function () {
    if (pwInput) {
        input.setAttribute('type', 'text');
        eye.innerHTML = '<i class="far fa-eye-slash"></i>';
    } else {
        input.setAttribute('type', 'password');
        eye.innerHTML = '<i class="far fa-eye"></i>';

    }
    pwInput = !pwInput;
});

eyepwSU.addEventListener("click", function () {
    if (pwInput) {
        inputSU.setAttribute('type', 'text');
        eyepwSU.innerHTML = '<i class="far fa-eye-slash"></i>';
    } else {
        inputSU.setAttribute('type', 'password');
        eyepwSU.innerHTML = '<i class="far fa-eye"></i>';

    }
    pwInput = !pwInput;
});

eyepwConfSU.addEventListener("click", function () {
    if (pwInput) {
        inputConfSU.setAttribute('type', 'text');
        eyepwConfSU.innerHTML = '<i class="far fa-eye-slash"></i>';
    } else {
        inputConfSU.setAttribute('type', 'password');
        eyepwConfSU.innerHTML = '<i class="far fa-eye"></i>';

    }
    pwInput = !pwInput;
});

// ----------error message check for signup form--------------// 

function usernameInput() {

    if (username.value.length >= 4) {
        username.classList.add("correct");
        username.nextElementSibling.textContent = '';
    } else if (username.value === '') {
        username.classList.add("incorrect");
        username.nextElementSibling.textContent = 'The username is required';
    } else if (username.value < 4) {
        username.classList.add("incorrect");
        username.nextElementSibling.textContent = 'The username cannot be less than 4 characters';
    } else {
        username.classList.add("incorrect");
        username.nextElementSibling.textContent = 'The username cannot be less than 4 characters';
    }
}

username.addEventListener('blur', usernameInput);


function emailInput() {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)) { //trim 
        email.classList.add("correct");
        email.nextElementSibling.textContent = '';
    } else if (email.value === '') {
        email.classList.add("incorrect");
        email.nextElementSibling.textContent = 'Email is required';
    } else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value))) {
        email.classList.add("incorrect");
        email.nextElementSibling.textContent = 'please type a valid email: email@address.com';
    } else {
        email.classList.add("correct");
        email.nextElementSibling.textContent = '';
    }
}

email.addEventListener('blur', emailInput);

function passwordInput() {

    if (password.value.length >= 6) {
        password.classList.add("correct");
        password.nextElementSibling.textContent = '';
    } else if (password.value === '') {
        password.classList.add("incorrect");
        password.nextElementSibling.textContent = 'The password is required';
    } else if (password.value.length < 6) {
        password.classList.add("incorrect");
        password.nextElementSibling.textContent = 'The password cannot be less than 6 characters';
    } else {
        password.classList.add("correct");
        password.nextElementSibling.textContent = '';
    }
}

password.addEventListener('blur', passwordInput);

function confirmPasswordInput() {

    if (confirmPassword.value == password.value && confirmPassword.value != '') {
        confirmPassword.classList.add("correct");
        confirmPassword.nextElementSibling.textContent = '';
    } else if (confirmPassword.value == "") {
        confirmPassword.classList.add("incorrect");
        confirmPassword.nextElementSibling.textContent = 'Passwords must be confirmed';
    } else if (confirmPassword.value !== password.value) {
        confirmPassword.classList.add("incorrect");
        confirmPassword.nextElementSibling.textContent = 'Password must match';
    } else {
        confirmPassword.classList.add("correct");
        confirmPassword.nextElementSibling.textContent = '';
    }
}

confirmPassword.addEventListener('blur', confirmPasswordInput);

submitBtn.addEventListener('click', function (e) {
    e.preventDefault();
    let check = true;

    if (username.value.length < 4) {
        username.nextElementSibling.textContent = "The username cannot be less than 4 characters";
        check = false;
    }

    if (email.value == "") {
        email.nextElementSibling.textContent = "Email is required";
        check = false;
    }

    if (password.value.length < 6 || password.value == "") {
        password.nextElementSibling.textContent = "The password cannot be less than 6 characters";
        check = false;
    }

    if (confirmPassword.value != password.value || confirmPassword.value == "") {
        confirmPassword.nextElementSibling.textContent = "Passwords must match";
        check = false;
    }

    if (check) {
        signUpForm.submit();
    } else {
        removeMsgs();
    }
});

cancelBtn.addEventListener('click', function (e) {
    removeMsgs();
});


// -------- error message for signin ------- // 

function usernameSigninInput() {

    if (signinUsername.value.length >= 4) {
        signinUsername.classList.add("correct");
        signinUsername.nextElementSibling.textContent = '';
    } else if (signinUsername.value === '') {
        signinUsername.classList.add("incorrect");
        signinUsername.nextElementSibling.textContent = 'The username is required';
    } else if (signinUsername.value.length < 4) {
        signinUsername.classList.add("incorrect");
        signinUsername.nextElementSibling.textContent = 'The username cannot be less than 4 characters';
    } else {
        signinUsername.classList.add("correct");
        signinUsername.nextElementSibling.textContent = '';
    }
}

signinUsername.addEventListener('blur', usernameSigninInput);

function passwordSigninInput() {

    if (signinPassword.value.length >= 6) {
        signinPassword.classList.add("correct");
        signinPassword.nextElementSibling.textContent = '';
    } else if (signinPassword.value === '') {
        signinPassword.classList.add("incorrect");
        signinPassword.nextElementSibling.textContent = 'The password is required';
    } else if (signinPassword.value.length < 6) {
        signinPassword.classList.add("incorrect");
        signinPassword.nextElementSibling.textContent = 'The password cannot be less than 6 characters';
    } else {
        signinPassword.classList.add("correct");
        signinPassword.nextElementSibling.textContent = '';
    }
}

signinPassword.addEventListener('blur', passwordSigninInput);

signinBtn.addEventListener('click', function (e) {
    e.preventDefault();
    let check = true;

    if (signinUsername.value.length < 4) {
        signinUsername.nextElementSibling.textContent = "The username cannot be less than 4 characters";
        check = false;
    }

    if (signinPassword.value.length < 6 || signinPassword.value == "") {
        signinPassword.nextElementSibling.textContent = "The password cannot be less than 6 characters";
        check = false;
    }

    if (check) {
        signinForm.submit();
    } else {
        removeMsgs();
    }
});

signinCancel.addEventListener('click', function (e) {
    removeMsgs();
});

function removeMsgs() {
    signUpForm.reset();
    signinForm.reset();
    username.classList.remove("incorrect");
    username.classList.remove("correct");
    password.classList.remove("incorrect");
    password.classList.remove("correct");
    confirmPassword.classList.remove("incorrect");
    confirmPassword.classList.remove("correct");
    email.classList.remove("incorrect");
    email.classList.remove("correct");
    signinPassword.classList.remove("incorrect");
    signinPassword.classList.remove("correct");
    signinUsername.classList.remove("incorrect");
    signinUsername.classList.remove("correct");

    let spans = document.querySelectorAll('.error');
    for (var i = 0; i < spans.length; i++) {
        spans[i].textContent = "";
    }
}
// Kakao login

// initialization
Kakao.init('cd42352d6849f53b69a61e4f63da5fa4');
console.log('is init :' + Kakao.isInitialized());
console.log(Kakao.Auth.getStatus(function (statusObj) {
    console.log(statusObj)
}));

var kakaoLogin = document.querySelector('#kakaoLogin');

function loginWithKakao() {
    Kakao.Auth.loginForm({
        success: function (authObj) {
            Kakao.API.request({
                url: '/v2/user/me',
                success: function (res) {
                    // alert(JSON.stringify(res));
                    //into database 
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST","../backend/signInDbAccess.php?=".res, true);
                    xhr.addEventListener("readystatechange", function(e){
                        if(e.target.readyState === 4 && e.target.status === 200){
                         console.log(xhr.responseText); 
                        }
                    });
                    xhr.send();
                    // redirect the user to member area:
                    window.location.href = "./index.php";
                },
                fail: function (error) {
                    alert(JSON.stringify(error));
                }
            });
        },
        fail: function (err) {
            alert(JSON.stringify(err));
        },
        persistAccessToken: false
    });
}

kakaoLogin.addEventListener('click', function () {
    loginWithKakao();
    console.log('You clicked!');
});

if (logOutbtn) {
    logOutbtn.addEventListener("click", function () {
        Kakao.Auth.logout(console.log("You've been logged out"));
    });
}


// Member Area 

// Menu
function dropDown() {
    document.getElementById("profileMenuContent").classList.toggle("show");
}

window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        let dropdowns = document.getElementsByClassName("profileMenu");
        for (var i = 0; i < dropdowns.length; i++) {
            let openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

