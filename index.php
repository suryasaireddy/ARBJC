
<?php

    require_once 'login.php';
    require_once 'student/studentregform.php';

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/style.css" type = "text/css" rel="stylesheet">
<script src="js/script.js"></script>

<title>Home</title>

</head>

<body>
    <!-- Navigation Bar -->
    <div>
        <nav>
            <div class="logo">
                <h4>Jobs</h4>
            </div>
            <div class = "navright">
                <ul class="navlinks">
                    <li><a href="../index.php" class = "linkpulse">Home</a></li>
                    <li><a href="contactus/contactus.php" target = "_self" class = "linkpulse">Contact</a></li>
                    <li><a href="#home" class = "linkpulse">About</a></li>
                </ul>
            </div>
            <div class="navbtn">
                <button id = "loginBtn" onclick="login()" class = "btn">Login</button>
                <button class = "btn" id = "signupBtn" onclick="signup()">SignUp</button>
            </div>
        </nav>
        <!-- <div class="line" style="height:12px; width:100%; margin-left: 0;"></div> -->
    </div>
    
    <!-- Login Modal -->

    <div>
        <div id = "login-Modal" class="modal" style = "display: none;">
            <div class="modal-content"> 
                <div class = "modal-header close-div">
                    <span class = "close" onclick="document.getElementById('login-Modal').style.display = 'none';">+</span>
                </div>
                <div class="tabs">  
                    <h6 class = "tab" id = "studentTab" style="border-bottom: 2px solid #2196F3;" onclick = "showStudent()">Student</h6>
                    <h6 class = "tab" id = "alumniTab" onclick="showAlumni()">Alumni</h6>
                </div>
                <div class="line"></div>
                <div class="student-login" id = "student">
                    <h2>Student login</h2>
                    <div class="form-content">
                        <form action="" method = "post">
                           <div class="form-ele">
                               <input type="hidden" value = "students" name = "userType">
                               <input type="text" placeholder="email" name = "email" required>
                           </div>
                           <div class="form-ele">
                               <input type="password" placeholder = "password" name = "password" required>
                           </div>
                           <div class="form-ele">
                               <input type="submit" name = "login" value = "login">
                           </div>
                           <div>
                               <a href="admin/admin.php"> Admin login</a>
                           </div>   
                        </form>
                    </div>
                </div>
                <div class="alumni-login" id = "alumni" style = "display: none;">
                    <h2>Alumni Login</h2>
                    <div class="form-content">
                        <form action="" method = "post">
                           <div class="form-ele">
                               <input type="hidden" value = "alumni" name = "userType">
                               <input type="text" placeholder="Email" name = "email">
                           </div>
                           <div class="form-ele">
                               <input type="password" placeholder = "Password" name = "password">
                           </div>
                           <div class="form-ele">
                               <input type="submit" name = "login" value = "login">
                           </div>

                           <div>
                               <a href="admin/admin.php"> Admin login</a>
                           </div>
                        </form>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

    <!-- SignUp Modal -->

    <div>
        <div id = "signup-modal" class="modal" style = "display:none;";>
            <div class="modal-content"> 
                <div class = "modal-header close-div">
                    <span class = "close" onclick="document.getElementById('signup-Modal').style.display = 'none';"></span>
                </div>
                <!-- <div class="tabs">
                    <h6 class = "tab" onclick = "showStudent()">Student</h6>
                    <h6 class = "tab" onclick="showAlumni()">Alumni</h6>
                </div> -->
                <div class = "modal-header close-div">
                    <span class = "close" onclick="document.getElementById('signup-modal').style.display = 'none';">+</span>
                </div>
                <!-- <div class="line"></div> -->
                <div class="student-login" id = "student">
                    <h2>Student Registration</h2>
                    <div class="line"></div>
                    <div class="form-content">
                        <form action="" method = "post">
                           <div class="form-ele">
                               <input type="text" name="firstname" placeholder = "First Name" size="15" required/> 
                           </div>
                           <div class="form-ele">
                               <input type="text" name="lastname" placeholder = "Last Name" size="15" required/>
                           </div>
                           <div class="form-ele">
                               <input type="text" name="regdno" placeholder = "Roll. No" size="15" required/>
                           </div>

                           <div class = "form-gender" >
                                 <select name="gender" id="gender" class = "dropdown" required>
                                    <option value="" disabled selected>---Gender---</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                 </select>
                           </div>

                           <div class="form-ele">
                            <input type="tel" id="phone" name="phone" placeholder="+91 Phone Number" pattern="[0-9]{10}" required>
                           </div>
                           <div class="form-ele">
                               <input type="email" name="email" placeholder = "Email" size="15" required/>
                           </div>
                           <div class="form-ele">
                               <input type="password" name="password" placeholder = "Password" size="15" required/>
                           </div>
                           <div class="form-ele">
                               <input type="password" name="cpassword" placeholder = "Confirm Password" size="15" required/>
                           </div>
                           <div class="form-ele">
                               <input type="submit" name = "register" style = "background-color: rgb(52, 174, 52);" value = "Register">
                           </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
