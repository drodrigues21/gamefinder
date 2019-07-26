<!DOCTYPE html>
    <head>
        <meta charset = "utf-8"/>
        <link href = "modalmenu.css" rel = "stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/df6c9542c9.js"></script>        
        <title>Menu header</title>
    </head>
    
    <body>
        <header> 
            <ul class="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#" onclick="document.getElementById('aboutus').style.display='block'"> About Us </a></li>
                <li><a href="#" onclick="document.getElementById('signUpAndIn').style.display='block'">Sign In</a></li>
                <li><a href="#">Game Tools</a></li>
            </ul>
              
        </header> 

<!-- About us modal -->
        <div id="aboutus" class ="modal">
            <span onclick="document.getElementById('aboutus').style.display='none'" class="close">×</span> 
            
            <div class = "modalContent">
                <div class = "modalHeader">
                    <p>About us</p>
                </div>
                <div class = "modalBody">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet</p>
                    <button type="button" onclick="document.getElementById('aboutus').style.display='none'" class="returnbtn">Return to Homepage</button> 
                </div>
                
            </div>
        </div>

<!-- signup/registration modal -->
        <div id="signUpAndIn" class="modal">
            <span onclick="document.getElementById('signUpAndIn').style.display='none'" class="close">×</span> 
            <div class="modalContent">
                <div class = "head">
                    <div id ="logInTab" class = "modalHeader" >Log In</div>
                    <div id = "signUpTab" class = "modalHeader" >Sign Up</div>
                </div>
                <div class = "body" id="formBody">
                    <form id="signIn" class = "myForm" method="POST" action="/action_page.php"> 
                        <div class="modalBody">    
                            <div class = "inputIcons">         
                                <i class="fa fa-user icon"></i>                        
                                <input type="text" placeholder="Username" name="loginusername" required> 
                            </div>  

                            <div class = "inputIcons">    
                                <i class="fas fa-key"></i>        
                                <input type="password" placeholder="Password" name="loginpsw" class= "pw" id ="pwTest" required> 
                                <span class="pwtoggle" id = "pwtest"><i class="far fa-eye"></i></span>
                            </div>

                            <div class = "signinOptions">
                                <input type="checkbox"> Remember me 
                                <p> Forgot your<a href = "#"> password</a>?</p>
                            </div>

                            <div class="clearfix"> 
                                <input type="submit" class="signupbtn" name = "signin" value="Sign In">
                                <button type="button" onclick="document.getElementById('signUpAndIn').style.display='none'" class="cancelbtn">Cancel</button> 
                            </div>

                            <div class = "mediaSignup">
                                <span class="msInnertext">or</span>                        
                                <button type="button" id="msbtn">
                                    <i class="fab fa-facebook"></i><p>Sign In with Facebook</p>
                                </button>        
                            </div> 

                            <div id ="signupLink">Don't have an account? <a href="#">Sign up</a>.</div> 
                        </div>
                    </form>

                    <form id = "signUp" class = "myForm" method="POST" action="/action_page.php"> 
                        <div class="modalBody" class = "tabBody">    
                            <div class = "inputIcons">         
                                <i class="fa fa-user icon"></i>                        
                                <input type="text" placeholder="Username" name="username" id="username" required> 
                            </div>  

                            <div class = "inputIcons">         
                                <i class="far fa-envelope"></i>   
                                <input type="text" placeholder="Email address" name="email" required> 
                            </div>

                            <div class = "inputIcons">    
                                <i class="fas fa-key"></i>        
                                <input type="password" placeholder="Password" name="psw" class= "pw" id = "psw" required> 
                                <span class="pwtoggle"><i class="far fa-eye"></i></span>
                            </div>

                            <div class = "inputIcons"> 
                                <i class="fas fa-key visibility"></i>                   
                                <input type="password" placeholder="Confirm Password" name="pswConfirm" class= "pw" id = "pswConfirm" required> 
                                <span class="pwtoggle"><i class="far fa-eye"></i></span>
                            </div>

                            <div class="clearfix"> 
                                <input type="submit" class="signupbtn" name="signup" value="Sign Up">
                                <button type="button" onclick="document.getElementById('signUpAndIn').style.display='none'" class="cancelbtn">Cancel</button> 
                            </div> 

                            <div class = "mediaSignup">
                                <span class="msInnertext">or</span>                        
                                <button type="button" id="msbtn">
                                    <i class="fab fa-facebook"></i><p>Sign Up with Facebook</p>
                                </button>        
                            </div> 

                            <div id="terms">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</div> 
                        </div>
                    </form> 
                  
                </div>
            </div>
        </div> 

        <script src = "modalmenu.js"> 
        </script> 

    </body>
</html>