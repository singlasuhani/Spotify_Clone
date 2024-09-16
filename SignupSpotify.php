<?php
error_reporting(0);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <link rel="stylesheet" href="MainStyle.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/36c335000a.js" crossorigin="anonymous"></script>
    <script>
    
    var email,password,firstName,LastName,Cno;
    function showpwd(y)
    {
            if(y=='p')
            var x = document.getElementById("txtPassword");
            else
            var x = document.getElementById("txtConPassword");
            
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }

    }



        function checkfun() 
        {
            
            var firstName = document.getElementById("txtFirstName").value;
            var LastName = document.getElementById("txtLastName").value;
            var Cno = document.getElementById("txtCno").value;
            var email = document.getElementById("txtEmail").value;
            var password = document.getElementById("txtPassword").value;
            var confirmpassword = document.getElementById("txtConPassword").value;
            
            

            let FirstNamepattern =  /^[A-Za-z ]+$/;
            let LastNamepattern =  /^[a-zA-Z]{2,30}$/;
            let ContactNo = /^[0-9]{10}$/;
            let emailPattern = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
            let passwordpattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$/;



            if (firstName=="" ){
                document.getElementById("ufname").innerHTML="please enter First Name";
            }
            else
            {
                if(  !FirstNamepattern.test(firstName))
                 {
                     document.getElementById("ufname").innerHTML="please enter valid First Name<br>First Name must be 2-30 characters long and contain only letters and spaces";
                    //tfirstName=false;
                    return false; 
                }
                else
                {
                    document.getElementById("ufname").innerHTML="";
                    //tfirstName=true;
                }  
            }


            if (LastName=="" ){
                document.getElementById("ulname").innerHTML="please enter Last Name";
                return false;
            }
            else
            {
                if(  !LastNamepattern.test(LastName))
                 {
                     document.getElementById("ulname").innerHTML="please enter valid First Name<br>First Name must be 2-30 characters long and contain only letters and spaces";
                     //tLastName=false;
                     return false; 
                }
                else
                {
                    
                    document.getElementById("ulname").innerHTML="";
                    //tLastName=true;
                }  
            }
        
            if (Cno=="" ){
                document.getElementById("ucno").innerHTML="please enter Contact No";
                return false;
            }
            else
            {
                if(  !ContactNo.test(Cno))
                 {
                     document.getElementById("ucno").innerHTML="please enter valid First Name<br>First Name must be 2-30 characters long and contain only letters and spaces";
                     //tCno=false;
                     return false; 
                }
                else
                {
                    
                    document.getElementById("ucno").innerHTML="";
                    //tCno=true;
                }  
            }
            if (email=="" ){

                document.getElementById("uemail").innerHTML="please enter Email id";
                return false;
            }
            else
            {
                if(  !emailPattern.test(email))
                 {
                     document.getElementById("uemail").innerHTML="please enter valid First Name<br>First Name must be 2-30 characters long and contain only letters and spaces";
                    // temail=false;
                    return false; 
                }
                else
                {
                    
                    document.getElementById("uemail").innerHTML="";
                    //temail=true;
                }  
            }
            if (password=="" ){
                document.getElementById("upass").innerHTML="please enter Password";
                return false;
            }
            else
            {
                if(  !passwordpattern.test(password))
                 {
                     document.getElementById("upass").innerHTML="please enter valid First Name<br>First Name must be 2-30 characters long and contain only letters and spaces";
                     //tpassword=false;
                     return false; 
                }
                else
                {
                    
                    document.getElementById("upass").innerHTML="";
                    //tpassword=true;
                }  
            }




            if (confirmpassword=="" ){
                 document.getElementById("cpass").innerHTML="please confirm Password";
                return false;
                }
             else
             {
                 if (password !== confirmpassword) 
                {
                      document.getElementById("cpass").innerHTML="please enter valid First Name<br>First Name must be 2-30 characters long and contain only letters and spaces";
                      //tconfirmpassword=false;
                      return false; 
                 }
            }
            
        } 

    

    
    </script>
</head>
<body bgcolor="black">
    <div class="Arrow" style="background-color: transparent; position:relative; top:25px; left: 10px; z-index:1;">
            <button onclick="history.back()" class="ArrowBtn"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#131313" height="20px" width="20px" version="1.1" id="Layer_1" viewBox="0 0 330.002 330.002" xml:space="preserve"><path id="XMLID_227_" fill="#f1f1f1"  d="M233.25,306.001L127.5,165.005L233.25,24.001c4.971-6.628,3.627-16.03-3-21c-6.627-4.971-16.03-3.626-21,3  L96.75,156.005c-4,5.333-4,12.667,0,18l112.5,149.996c2.947,3.93,7.451,6.001,12.012,6.001c3.131,0,6.29-0.978,8.988-3.001  C236.878,322.03,238.221,312.628,233.25,306.001z"/></svg></button>&emsp;
            <button onclick="history.forward()" class="ArrowBtn"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#131313" height="20px" width="20px" version="1.1" id="Layer_1" viewBox="0 0 330.002 330.002" xml:space="preserve"><path id="XMLID_226_" fill="#f1f1f1"  d="M233.252,155.997L120.752,6.001c-4.972-6.628-14.372-7.97-21-3c-6.628,4.971-7.971,14.373-3,21  l105.75,140.997L96.752,306.001c-4.971,6.627-3.627,16.03,3,21c2.698,2.024,5.856,3.001,8.988,3.001  c4.561,0,9.065-2.072,12.012-6.001l112.5-150.004C237.252,168.664,237.252,161.33,233.252,155.997z"/></svg></button>
    </div>
    <div class="SignUpPage">
        <form style=" background-color:transparent;" action="create_user.php" method="post" onsubmit="return checkfun()">
        <label for="fname">Fisrt Name</label><br><br>
        <input type="text" id="txtFirstName" name="txtFirstName" placeholder="First Name"><br><br>
        <label for="lname">Last Name</label><br><br>
        <input type="text" id="txtLastName" name="txtLastName" placeholder="Last Name"><br><br>
        <label for="Email">Contact Number</label><br><br>
        <input type="text" id="txtCno" name="txtCno" placeholder="Contact Number"><br><br>
        <label for="Email">Email or Username</label><br><br>
        <input type="text" id="txtEmail" name="txtEmail" placeholder="Email Address" ><br><br>
        <label for="pass">Password</label><br><br>
        <input type="password" id="txtPassword" name="txtPassword" placeholder="Password" style="margin-left: 30px;">
        <button style="background-color: black;" id="show_password" class="btn btn-primary" type="button" onclick="showpwd('p')">  <span style="color: white;" class="fa fa-eye-slash icon"></span></button> <br><br>
        <label for="pass">Confirm Password</label><br><br>
        <input type="password" id="txtConPassword" placeholder="Confirm Password" style="margin-left: 30px;">
        <button style="background-color: black;" id="show_password" class="btn btn-primary" type="button" onclick="showpwd('p')">  <span style="color: white;" class="fa fa-eye-slash icon1"></span></button> <br><br>
        <span id="cpass"></span>
        <input type="submit" value="Sign up"><br><br>
        <hr><br><br>
        </form>
        <p>Already have an account? &nbsp;<a href="LoginSpotify.php">Log In for Spotify</a></p>
        
    </div>
    
</body>
</html>