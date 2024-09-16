    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./spotify_css/main.css">
        <script src="https://kit.fontawesome.com/36c335000a.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <h2>Liked Songs</h2>
    <ul id="likedSongsList">
        <!-- Liked songs will be populated here -->
    </ul>

    <a href="mysinger1.php">Back to Main Page</a>

    <script src="likeSong.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            displayLikedSongs(); // Ensure this function is called after the page is fully loaded
        });
    </script>
    
    </body>
    </html>

