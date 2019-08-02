// -----------close modal ----------//
var modalAboutUs = document.querySelector('#aboutus');
var modalSignUp = document.querySelector('#signUpAndIn');

document.addEventListener("click", function (e) {
    if (e.target == modalAboutUs) {
        modalAboutUs.style.display = "none";
    }

    if (e.target == modalSignUp) {
        modalSignUp.style.display = "none";
        form.reset();
        signinForm.reset();
        let spans = document.querySelectorAll('.error');
        signinPassword.style.border = signinUsername.style.border = username.style.border = password.style.border = confirmPassword.style.border = email.style.border = '';
        signinPassword.style.boxShadow = signinUsername.style.boxShadow = username.style.boxShadow = password.style.boxShadow = confirmPassword.style.boxShadow = email.style.boxShadow = '';
        for (var i = 0; i < spans.length; i++) {
            spans[i].textContent = '';
        }

    }
});

// ------------tabs -------------//
console.log("hello");
var tabs = document.querySelectorAll(".head div");

for (let i = 0; i < tabs.length; i++) {
    console.log(tabs[i]);
    tabs[i].addEventListener("click", function (e) {
        e.preventDefault();
        let target = e.target;
        console.log(target);
        let spans = document.querySelectorAll('.error');

        for (var i = 0; i < spans.length; i++) {
            spans[i].textContent = '';
        }
        if (target.id == "signInTab") {
            toggleTabs("block", "none", "transparent ", "lightgrey ");
            form.reset();
            username.style.border = password.style.border = confirmPassword.style.border = email.style.border = '';
            username.style.boxShadow = password.style.boxShadow = confirmPassword.style.boxShadow = email.style.boxShadow = '';

        } else if (target.id == "signUpTab") {
            toggleTabs("none", "block", "lightgrey ", "transparent ");
            signinForm.reset();
            signinPassword.style.border = signinUsername.style.border = '';
            signinPassword.style.boxShadow = signinUsername.style.boxShadow = '';

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

var username = document.getElementById('username');
var email = document.getElementById('email');
var password = document.getElementById('psw');
var confirmPassword = document.getElementById('pswConfirm');
var submitBtn = document.getElementById('register');
var cancelBtn = document.querySelector('#signupCancel');
var form = document.getElementById('signUp');
var spans = document.querySelectorAll('.error');


// username validation

function usernameInput() {

    if (username.value.length >= 4) {
        username.style.border = '1px solid green';
        username.style.boxShadow = "0 0 1px 1px green";
        username.nextElementSibling.textContent = '';
    } else if (username.value === '') {
        username.style.border = '1px solid red';
        username.style.boxShadow = "0 0 1px 1px red";
        username.nextElementSibling.textContent = 'The username is required';
    } else {
        username.style.border = '1px solid red';
        username.style.boxShadow = "0 0 1px 1px red";
        username.nextElementSibling.textContent = 'The username cannot be less than 4 characters';
    }
}

username.addEventListener('blur', usernameInput);

// email validation  

function emailInput() {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)) { //trim 
        email.style.border = '1px solid green';
        email.style.boxShadow = "0 0 1px 1px green";
        email.nextElementSibling.textContent = '';
    } else if (email.value === '') {
        email.style.border = '1px solid red';
        email.style.boxShadow = "0 0 1px 1px red";
        email.nextElementSibling.textContent = 'Email is required';
    } else {
        email.style.border = '1px solid red';
        email.style.boxShadow = "0 0 1px 1px red";
        email.nextElementSibling.textContent = 'please type a valid email: email@address.com';
    }
}

email.addEventListener('blur', emailInput);

// Password validation

function passwordInput() {

    if (password.value.length >= 6) {
        password.style.border = '1px solid green';
        password.style.boxShadow = "0 0 1px 1px green";
        password.nextElementSibling.textContent = '';
    } else if (password.value === '') {
        password.style.border = '1px solid red';
        password.style.boxShadow = "0 0 1px 1px red";
        password.nextElementSibling.textContent = 'The password is required';
    } else if (password.value.length < 6) {
        password.style.border = '1px solid red';
        password.style.boxShadow = "0 0 1px 1px red";
        password.nextElementSibling.textContent = 'The password cannot be less than 6 characters';
    } else {
        password.style.border = '1px solid red';
        password.style.boxShadow = "0 0 1px 1px red";
        password.nextElementSibling.textContent = 'The password cannot be less than 6 characters';
    }
}

password.addEventListener('blur', passwordInput);

// Confirm password validation

function confirmPasswordInput() {

    if (confirmPassword.value == password.value && confirmPassword.value != '') {
        confirmPassword.style.border = '1px solid green';
        confirmPassword.style.boxShadow = "0 0 1px 1px green";
        confirmPassword.nextElementSibling.textContent = '';
    } else if (confirmPassword.value == "") {
        confirmPassword.style.border = '1px solid red';
        confirmPassword.style.boxShadow = "0 0 1px 1px red";
        confirmPassword.nextElementSibling.textContent = 'Passwords must be confirmed';
    } else {
        confirmPassword.style.border = '1px solid red';
        confirmPassword.style.boxShadow = "0 0 1px 1px red";
        confirmPassword.nextElementSibling.textContent = 'Password must match';
    }
}

confirmPassword.addEventListener('blur', confirmPasswordInput);

// Form validation  

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
        form.submit();
    } else {
        form.reset();

        username.value = password.value = confirmPassword.value = email.value = '';
        username.style.border = password.style.border = confirmPassword.style.border = email.style.border = '';
        username.style.boxShadow = password.style.boxShadow = confirmPassword.style.boxShadow = email.style.boxShadow = '';
        for (var i = 0; i < spans.length; i++) {
            spans[i].textContent = '';
        }
    }
});

cancelBtn.addEventListener('click', function (e) {
    form.reset();

    username.value = password.value = confirmPassword.value = email.value = '';
    username.style.border = password.style.border = confirmPassword.style.border = email.style.border = '';
    username.style.boxShadow = password.style.boxShadow = confirmPassword.style.boxShadow = email.style.boxShadow = '';
    for (var i = 0; i < spans.length; i++) {
        spans[i].textContent = '';
    }
});


// -------- error message for signin ------- // 

var signinUsername = document.getElementById('signinusername');
var signinPassword = document.getElementById('pwSignin');
var signinForm = document.getElementById('signIn');
var signinBtn = document.getElementById('signinBtn');
var signinCancel = document.getElementById('signinCancel');

// username check

function usernameSigninInput() {

    if (signinUsername.value.length >= 4) {
        signinUsername.style.border = '1px solid green';
        signinUsername.style.boxShadow = "0 0 1px 1px green";
        signinUsername.nextElementSibling.textContent = '';
    } else if (signinUsername.value === '') {
        signinUsername.style.border = '1px solid red';
        signinUsername.style.boxShadow = "0 0 1px 1px red";
        signinUsername.nextElementSibling.textContent = 'The username is required';
    } else if (signinUsername.value.length < 4) {
        signinUsername.style.border = '1px solid red';
        signinUsername.style.boxShadow = "0 0 1px 1px red";
        signinUsername.nextElementSibling.textContent = 'The username cannot be less than 4 characters';
    }
}

signinUsername.addEventListener('blur', usernameSigninInput);


// password check 

function passwordSigninInput() {

    if (signinPassword.value.length >= 6) {
        signinPassword.style.border = '1px solid green';
        signinPassword.style.boxShadow = "0 0 1px 1px green";
        signinPassword.nextElementSibling.textContent = '';
    } else if (signinPassword.value === '') {
        signinPassword.style.border = '1px solid red';
        signinPassword.style.boxShadow = "0 0 1px 1px red";
        signinPassword.nextElementSibling.textContent = 'The password is required';
    } else if (signinPassword.value.length < 6) {
        signinPassword.style.border = '1px solid red';
        signinPassword.style.boxShadow = "0 0 1px 1px red";
        signinPassword.nextElementSibling.textContent = 'The password cannot be less than 6 characters';
    }
}

signinPassword.addEventListener('blur', passwordSigninInput);

// form validation 

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
        signinForm.reset();
        let spans = document.querySelectorAll('.error');
        signinPassword.style.border = signinUsername.style.border = '';
        signinPassword.style.boxShadow = signinUsername.style.boxShadow = '';
        for (var i = 0; i < spans.length; i++) {
            spans[i].textContent = '';
        }
    }
});

signinCancel.addEventListener('click', function (e) {
    signinForm.reset();
    let spans = document.querySelectorAll('.error');
    signinPassword.style.border = signinUsername.style.border = '';
    signinPassword.style.boxShadow = signinUsername.style.boxShadow = '';
    for (var i = 0; i < spans.length; i++) {
        spans[i].textContent = '';
    }
});

// Kakao login

// initialization
Kakao.init('cd42352d6849f53b69a61e4f63da5fa4');
console.log('is init :' + Kakao.isInitialized());

var kakaoLogin = document.querySelector('#kakaoLogin');

function loginWithKakao() {
    Kakao.Auth.loginForm({
        success: function (authObj) {
            // 로그인 성공시, API를 호출합니다.
            Kakao.API.request({
                url: '/v2/user/me',
                success: function (res) {
                    alert(JSON.stringify(res));
                    // redirect the user to member area
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