<?php
    // $u_em= $_GET['em'];
    include("conn.php");
    $sql = "SELECT * FROM user_det where User_email ='".$_GET['em']."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // echo $row["User_Nm"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="./spotify_css/signupp.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="jquery-3.7.1.js"></script>
<script src="https://kit.fontawesome.com/36c335000a.js" crossorigin="anonymous"></script>
<style>
        .Arrow {
    position: absolute;
    left: 20%;
    top: 25%;
}
.Navbar {
    /* display:flex; */
    position: absolute;
    background-color: #121212;
    width: 100%;
    height: 80px;
    left:10px;
    top:0;
}
    </style>
<script>
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
    </script>
    </head>
    <body>
    <div class="Navbar">
                    <div class="Arrow">
                          <button style="background-color:transparent; border:1px solid transparent; color:white; border-radius:8px; font-weight:600; font-size:1.5vw; padding:5px; margin-left:10px;" onclick="history.back()"><</button>
                          <button style="background-color:transparent; border:1px solid transparent; color:white; border-radius:8px; font-weight:600; font-size:1.5vw; padding:5px; margin-left:10px;" onclick="history.forward()">></button>                        
                    </div>
    </div>
    <div>
    <div class="Dashboard">
                <svg viewBox="0 0 1134 340" class="spotifyLogo">
                    <path fill="currentColor" d="M8 171c0 92 76 168 168 168s168-76 168-168S268 4 176 4 8 79 8 171zm230 78c-39-24-89-30-147-17-14 2-16-18-4-20 64-15 118-8 162 19 11 7 0 24-11 18zm17-45c-45-28-114-36-167-20-17 5-23-21-7-25 61-18 136-9 188 23 14 9 0 31-14 22zM80 133c-17 6-28-23-9-30 59-18 159-15 221 22 17 9 1 37-17 27-54-32-144-35-195-19zm379 91c-17 0-33-6-47-20-1 0-1 1-1 1l-16 19c-1 1-1 2 0 3 18 16 40 24 64 24 34 0 55-19 55-47 0-24-15-37-50-46-29-7-34-12-34-22s10-16 23-16 25 5 39 15c0 0 1 1 2 1s1-1 1-1l14-20c1-1 1-1 0-2-16-13-35-20-56-20-31 0-53 19-53 46 0 29 20 38 52 46 28 6 32 12 32 22 0 11-10 17-25 17zm95-77v-13c0-1-1-2-2-2h-26c-1 0-2 1-2 2v147c0 1 1 2 2 2h26c1 0 2-1 2-2v-46c10 11 21 16 36 16 27 0 54-21 54-61s-27-60-54-60c-15 0-26 5-36 17zm30 78c-18 0-31-15-31-35s13-34 31-34 30 14 30 34-12 35-30 35zm68-34c0 34 27 60 62 60s62-27 62-61-26-60-61-60-63 27-63 61zm30-1c0-20 13-34 32-34s33 15 33 35-13 34-32 34-33-15-33-35zm140-58v-29c0-1 0-2-1-2h-26c-1 0-2 1-2 2v29h-13c-1 0-2 1-2 2v22c0 1 1 2 2 2h13v58c0 23 11 35 34 35 9 0 18-2 25-6 1 0 1-1 1-2v-21c0-1 0-2-1-2h-2c-5 3-11 4-16 4-8 0-12-4-12-12v-54h30c1 0 2-1 2-2v-22c0-1-1-2-2-2h-30zm129-3c0-11 4-15 13-15 5 0 10 0 15 2h1s1-1 1-2V93c0-1 0-2-1-2-5-2-12-3-22-3-24 0-36 14-36 39v5h-13c-1 0-2 1-2 2v22c0 1 1 2 2 2h13v89c0 1 1 2 2 2h26c1 0 1-1 1-2v-89h25l37 89c-4 9-8 11-14 11-5 0-10-1-15-4h-1l-1 1-9 19c0 1 0 3 1 3 9 5 17 7 27 7 19 0 30-9 39-33l45-116v-2c0-1-1-1-2-1h-27c-1 0-1 1-1 2l-28 78-30-78c0-1-1-2-2-2h-44v-3zm-83 3c-1 0-2 1-2 2v113c0 1 1 2 2 2h26c1 0 1-1 1-2V134c0-1 0-2-1-2h-26zm-6-33c0 10 9 19 19 19s18-9 18-19-8-18-18-18-19 8-19 18zm245 69c10 0 19-8 19-18s-9-18-19-18-18 8-18 18 8 18 18 18zm0-34c9 0 17 7 17 16s-8 16-17 16-16-7-16-16 7-16 16-16zm4 18c3-1 5-3 5-6 0-4-4-6-8-6h-8v19h4v-6h4l4 6h5zm-3-9c2 0 4 1 4 3s-2 3-4 3h-4v-6h4z"></path></svg>
                <br>
                <div style="position:absolute; top:300px; background-color:white; left:10%; border-radius: 5%; padding: 10px;">Developed by:<br> <a href="myinfo.php" style="text-decoration:none; color:black;"> Suhani Singla</a></div>
                <div class="Privacy">
                        <a href="cookies.php" style="text-decoration:none; color:white;"><p>Cookies</p></a>
                        <a href="privacy.php" style="text-decoration:none; color:white;"><p>Privacy</p></a>
                </div>
           </div>
     <div>
        <div class="container" id="condiv">
            <form action="edit_user_pwd.php" method="post">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" id="txtFullName" name="txtfullName"  value="<?php echo $row["User_Nm"]; ?>" readonly >
                </div>
            </div>
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" id="txtCno" name="txtCno" value="<?php echo $row["User_contact"]; ?>" readonly >
                </div>
            </div>
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" id="txtEmail" name="txtEmail" value="<?php echo $row['User_email']; ?>" readonly   >
                </div>
            </div>
            <div class="col-md-12">  
                    <div class="input-group">  
                        <input type="text" id="txtPassword" name="txtPassword" value="<?php echo $row['User_pwd']; ?> readonly >
                        <div class="input-group-append">  
                              
                        </div>   
                    </div> 
             </div>  
             <div class="col-md-12">  
                    <div style="position:relative; top:50px;left:-50px;"class="input-group">  
                        <input type="password" id="txtConPassword" name="txtConPassword" placeholder="NewPassword" >
                        <div class="input-group-append">  
                            <button id="showpassword" class="btn btn-primary" type="button" onclick="showpwd('c')">  
                                <span class="fa fa-eye-slash icon1"></span>  
                            </button>  
                        </div>  
                    </div>  
                        
            </div>  

         
            <div style="width:150px;height:50px;position:relative; top:50px;left:-50px;" class="input-field button">
                <input type="submit" value="Submit">
            </div>
            </form>
    
</body>
</html>