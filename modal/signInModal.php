
<form id="signIn" class = "myForm" method="POST" action="signinDbAccess.php"> 
    <div class = "inputIcons">         
        <i class="fa fa-user icon"></i>                        
        <input type="text" placeholder="Username" name="signinUsername" id = "signinusername"> 
        <span class = "error"></span>
    </div>  

    <div class = "inputIcons">    
        <i class="fas fa-key"></i>        
        <input type="password" placeholder="Password" name="signinpsw" class= "pw" id ="pwSignin"> 
        <span class = "error"></span>
        <div class="pwtoggle" id = "pwsignin"><i class="far fa-eye"></i></div>
    </div>

    <div class = "signinOptions">
        <input type="checkbox" name="checkbox"> Remember me 
        <p> Forgot your<a href="#" onclick="alert('Please contact us 010-5749-5648');"> password</a>?</p>
    </div>

    <div class="clearfix"> 
        <input type="submit" class="signupbtn" name = "signin" value="Sign In" id="signinBtn">
        <button type="button" onclick="document.getElementById('signUpAndIn').style.display='none'" class="cancelbtn" id = "signinCancel">Cancel</button> 
    </div>

    <div class = "mediaSignup">
        <div class="msInnertext">or</div>                        
        <button type="button" id="msbtn">
            <i class="fab fa-facebook"></i><p>Sign In with Facebook</p>
        </button>        
    </div> 

    <div id ="signupLink">Don't have an account? <a href="#" onclick="document.querySelector('#signUpTab').click();">Sign up</a>.</div> 

</form>


