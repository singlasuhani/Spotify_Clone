<?php
    session_start();
    //error_reporting(0);
    if(!isset($_SESSION["user_lg"])){
        $_SESSION["user_lg"]="guest";
    }
    if(!isset($_GET['ch1']))
    {
        $_GET['ch1']=0;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/36c335000a.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <link rel="image/x-icon" type="icom" href="SpotifyLogo/favicon-16x16.png">
    <link rel="stylesheet" href="MainStyle.css?v=<?php echo time(); ?>">
    <script src="jquery-3.7.1.js"></script>
        
        <script>
        $(document).ready(function(){
            $("#myInput, #myInput1").on("keyup", function() {
            var value = $(this).val().toLowerCase();
             $(".songItem,.Singeritem").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
            });
            }           
        );

        
        </script>
</head>
<body bgcolor="black">
        <div class="Main">
            <div class="Dashboard">
                <div class="Sec1">
                    <div class="Sec1_Inner_Content1">
                        <svg viewBox="0 0 1134 340" class="spotifyLogo"><path fill="white" d="M8 171c0 92 76 168 168 168s168-76 168-168S268 4 176 4 8 79 8 171zm230 78c-39-24-89-30-147-17-14 2-16-18-4-20 64-15 118-8 162 19 11 7 0 24-11 18zm17-45c-45-28-114-36-167-20-17 5-23-21-7-25 61-18 136-9 188 23 14 9 0 31-14 22zM80 133c-17 6-28-23-9-30 59-18 159-15 221 22 17 9 1 37-17 27-54-32-144-35-195-19zm379 91c-17 0-33-6-47-20-1 0-1 1-1 1l-16 19c-1 1-1 2 0 3 18 16 40 24 64 24 34 0 55-19 55-47 0-24-15-37-50-46-29-7-34-12-34-22s10-16 23-16 25 5 39 15c0 0 1 1 2 1s1-1 1-1l14-20c1-1 1-1 0-2-16-13-35-20-56-20-31 0-53 19-53 46 0 29 20 38 52 46 28 6 32 12 32 22 0 11-10 17-25 17zm95-77v-13c0-1-1-2-2-2h-26c-1 0-2 1-2 2v147c0 1 1 2 2 2h26c1 0 2-1 2-2v-46c10 11 21 16 36 16 27 0 54-21 54-61s-27-60-54-60c-15 0-26 5-36 17zm30 78c-18 0-31-15-31-35s13-34 31-34 30 14 30 34-12 35-30 35zm68-34c0 34 27 60 62 60s62-27 62-61-26-60-61-60-63 27-63 61zm30-1c0-20 13-34 32-34s33 15 33 35-13 34-32 34-33-15-33-35zm140-58v-29c0-1 0-2-1-2h-26c-1 0-2 1-2 2v29h-13c-1 0-2 1-2 2v22c0 1 1 2 2 2h13v58c0 23 11 35 34 35 9 0 18-2 25-6 1 0 1-1 1-2v-21c0-1 0-2-1-2h-2c-5 3-11 4-16 4-8 0-12-4-12-12v-54h30c1 0 2-1 2-2v-22c0-1-1-2-2-2h-30zm129-3c0-11 4-15 13-15 5 0 10 0 15 2h1s1-1 1-2V93c0-1 0-2-1-2-5-2-12-3-22-3-24 0-36 14-36 39v5h-13c-1 0-2 1-2 2v22c0 1 1 2 2 2h13v89c0 1 1 2 2 2h26c1 0 1-1 1-2v-89h25l37 89c-4 9-8 11-14 11-5 0-10-1-15-4h-1l-1 1-9 19c0 1 0 3 1 3 9 5 17 7 27 7 19 0 30-9 39-33l45-116v-2c0-1-1-1-2-1h-27c-1 0-1 1-1 2l-28 78-30-78c0-1-1-2-2-2h-44v-3zm-83 3c-1 0-2 1-2 2v113c0 1 1 2 2 2h26c1 0 1-1 1-2V134c0-1 0-2-1-2h-26zm-6-33c0 10 9 19 19 19s18-9 18-19-8-18-18-18-19 8-19 18zm245 69c10 0 19-8 19-18s-9-18-19-18-18 8-18 18 8 18 18 18zm0-34c9 0 17 7 17 16s-8 16-17 16-16-7-16-16 7-16 16-16zm4 18c3-1 5-3 5-6 0-4-4-6-8-6h-8v19h4v-6h4l4 6h5zm-3-9c2 0 4 1 4 3s-2 3-4 3h-4v-6h4z"></path></svg>
                        <a href="Spotify.php"><span style="margin-top:8px; background-color: transparent;"><svg xmlns="http://www.w3.org/2000/svg" class="Logo" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" width="48px" height="48px"><g id="surface267713857"><path style="stroke: none; fill-rule: nonzero; fill: white; fill-opacity: 1;" d="M 39.5 43 L 30.5 43 C 29.117188 43 28 41.882812 28 40.5 L 28 31.5 C 28 30.394531 27.105469 29.5 26 29.5 L 22 29.5 C 20.894531 29.5 20 30.394531 20 31.5 L 20 40.5 C 20 41.882812 18.882812 43 17.5 43 L 8.5 43 C 7.117188 43 6 41.882812 6 40.5 L 6 21.414062 C 6 19.113281 7.054688 16.941406 8.859375 15.519531 L 23.070312 4.320312 C 23.617188 3.894531 24.382812 3.894531 24.929688 4.320312 L 39.140625 15.519531 C 40.945312 16.941406 42 19.113281 42 21.410156 L 42 40.5 C 42 41.882812 40.882812 43 39.5 43 Z M 39.5 43 " /></g></svg><kbd>Home</kbd></span></a>
                    </div>
                    <div class="Sec1_Inner_Content2">
                        <a href="#"><span style="background-color: transparent;"><svg xmlns="http://www.w3.org/2000/svg" class="Logo" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30" width="30px" height="30px"><g id="surface268559649"><path style="stroke: none; fill-rule: nonzero; fill: rgb(70.19608%,70.19608%,70.19608%); fill-opacity: 1;" d="M 13 3 C 7.488281 3 3 7.488281 3 13 C 3 18.511719 7.488281 23 13 23 C 15.398438 23 17.597656 22.148438 19.324219 20.734375 L 25.292969 26.707031 C 25.542969 26.96875 25.917969 27.074219 26.265625 26.980469 C 26.617188 26.890625 26.890625 26.617188 26.980469 26.265625 C 27.074219 25.917969 26.96875 25.542969 26.707031 25.292969 L 20.734375 19.320312 C 22.148438 17.597656 23 15.398438 23 13 C 23 7.488281 18.511719 3 13 3 Z M 13 5 C 17.429688 5 21 8.570312 21 13 C 21 17.429688 17.429688 21 13 21 C 8.570312 21 5 17.429688 5 13 C 5 8.570312 8.570312 5 13 5 Z M 13 5 " /></g></svg></span></a>
                    </div>
                    <input type="text" class="SearchItem" placeholder="Search" id="myInput">

                </div>
              

                <div class="Sec2">
                    <a href="PrivacySpotify.php">Safety&PrivacyCenter</a>
                    <br><br>
                    <a href="PrivacySpotify.php">PrivacyPolicy</a>&nbsp;<a href="CookiesSpotify.php">Cookies</a>
                    <br><br>
                    <a href="FeedbackSpotify.php">Feedback</a>
                    <br><br>
                    <a href="contactus.php">Contact Us</a>
                    <br><br>
                    <a href="CookiesSpotify.php" class="cookies">Cookies</a>
                </div>

            </div>
            <div class="DashboardMobileView">
                    <a style="color: white; font-size: 15px;" href="Spotify.php">Home</a>
                    <input type="text" class="SearchItem1" placeholder="Search" id="myInput1">
                    <a style="color: white; font-size: 15px;" href="FeedbackSpotify.php">Feedback</a>
                    


            </div>
            <div class="Singers">
                <div class="Navbar">
                    <div class="Arrow">
                        <button onclick="history.back()" class="ArrowBtn"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#131313" height="20px" width="20px" version="1.1" id="Layer_1" viewBox="0 0 330.002 330.002" xml:space="preserve"><path id="XMLID_227_" fill="#f1f1f1"  d="M233.25,306.001L127.5,165.005L233.25,24.001c4.971-6.628,3.627-16.03-3-21c-6.627-4.971-16.03-3.626-21,3  L96.75,156.005c-4,5.333-4,12.667,0,18l112.5,149.996c2.947,3.93,7.451,6.001,12.012,6.001c3.131,0,6.29-0.978,8.988-3.001  C236.878,322.03,238.221,312.628,233.25,306.001z"/></svg></button>&emsp;
                        <button onclick="history.forward()" class="ArrowBtn"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#131313" height="20px" width="20px" version="1.1" id="Layer_1" viewBox="0 0 330.002 330.002" xml:space="preserve"><path id="XMLID_226_" fill="#f1f1f1"  d="M233.252,155.997L120.752,6.001c-4.972-6.628-14.372-7.97-21-3c-6.628,4.971-7.971,14.373-3,21  l105.75,140.997L96.752,306.001c-4.971,6.627-3.627,16.03,3,21c2.698,2.024,5.856,3.001,8.988,3.001  c4.561,0,9.065-2.072,12.012-6.001l112.5-150.004C237.252,168.664,237.252,161.33,233.252,155.997z"/></svg></button>
                    </div>

                   
                    <button class="Signup"><a style="color: #f1f1f1;" href="SignupSpotify.php">Sign up</a></button>
                    <button class="login">
                        <?php 
                            if($_SESSION["user_lg"]=="guest"){
                        ?> 
                        <a style="text-decoration:none; color:black" href="LoginSpotify.php">Login</a>
                        <?php
                            }
                            else
                            {
                        ?>

                                <a style="text-decoration:none; color:black" href="page_logout.php">Logout</a>
                        <?php
                            }
                        ?>
                    </button>
                   
                </div>
                <div class="SingerElem">
                    <?php
                        if($_GET['ch1']==1)
                        {
                            include_once("Justin.php");      
                        }
                        elseif($_GET['ch1']==2)
                        {
                            include_once("Taylor.php");
                        }
                        elseif ($_GET['ch1']==3)
                        {
                            include_once("Zyan.php");
                        }
                        else
                        {
                        include_once("Singers.php"); 
                        }
                    ?>
                </div>
            </div>

            <?php
                if($_SESSION["user_lg"]=="guest")
                {
            ?>
            <div class="FooterElem">
                <a>Preview of Spotify</a><br>
                <a>Sign up to get unlimited songs and podcasts with occational ads. No credit card needed.</a>
                <a class="SignupFooter" style="color: black" href="SignupSpotify.php">Sign up free</a>
            </div>
           
                 <!-- <div class="SongController">
                    <div class="slider">
                        <input type="range" name="range" id="myProgressBar" class="myProgressBar" min="0" max="100" value="0">
                    </div>
                    <div class="icons">
                        <a href="#"><i class="fas fa-2x fa-step-backward" id="previous"></i></a>&emsp;
                        <a href="#"><i class="far fa-2x fa-play-circle" id="masterPlay"></i></a>&emsp;
                        <a href="#"><i class="fas fa-2x fa-step-forward" id="next"></i></a>
                    </div>
                    <div class="SongNameDisplay">
                        <span id="masterSongName"></span>
                    </div>
                </div> -->
            <?php
                }
            ?>
               
        </div>
</body>
</html>