<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <link rel="stylesheet" href="MainStyle.css?v=<?php echo time(); ?>">
</head>

<body bgcolor="black">
    <div class="Arrow" style="background-color: transparent; position:relative; top:30px; left: 20px; z-index:1;">
            <button onclick="history.back()" class="ArrowBtn"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#131313" height="20px" width="20px" version="1.1" id="Layer_1" viewBox="0 0 330.002 330.002" xml:space="preserve"><path id="XMLID_227_" fill="#f1f1f1"  d="M233.25,306.001L127.5,165.005L233.25,24.001c4.971-6.628,3.627-16.03-3-21c-6.627-4.971-16.03-3.626-21,3  L96.75,156.005c-4,5.333-4,12.667,0,18l112.5,149.996c2.947,3.93,7.451,6.001,12.012,6.001c3.131,0,6.29-0.978,8.988-3.001  C236.878,322.03,238.221,312.628,233.25,306.001z"/></svg></button>&emsp;
            <button onclick="history.forward()" class="ArrowBtn"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#131313" height="20px" width="20px" version="1.1" id="Layer_1" viewBox="0 0 330.002 330.002" xml:space="preserve"><path id="XMLID_226_" fill="#f1f1f1"  d="M233.252,155.997L120.752,6.001c-4.972-6.628-14.372-7.97-21-3c-6.628,4.971-7.971,14.373-3,21  l105.75,140.997L96.752,306.001c-4.971,6.627-3.627,16.03,3,21c2.698,2.024,5.856,3.001,8.988,3.001  c4.561,0,9.065-2.072,12.012-6.001l112.5-150.004C237.252,168.664,237.252,161.33,233.252,155.997z"/></svg></button>
    </div>
    <div class="Feedback">

            <h1><b><i><u>Contact Us</u></i></b></h1>
            <br>
            <form action="contact_us.php" method="POST">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your name.." required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your email.." required><br><br>

            <label for="feedback">Message:</label><br><br>
            <textarea id="message" name="message" placeholder="Write your message here.." required></textarea><br><br>

            <div class="input-field button">
                <input type="submit" value="Send">
            </div>

        </form>


    </div>
</body>

</html>