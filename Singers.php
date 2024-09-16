
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MainStyle.css?v=<?php echo time(); ?>">
    <title>Spotify</title>
</head>
<body>
    <div class="AllSingers">
            <a href="#" class="elem">Popular artists</a>
            <div class="SingerList">
                <?php
                        if($_SESSION["user_lg"] != "guest")
                            {
                        ?>
                            <a href="Spotify.php?ch1=1" >
                        <?php
                            }
                ?>
                <div class="Singeritem">
                    <img style="border-radius: 50%; cursor: pointer;" src="images/bieberjustice.jpg" alt="Jutin Bieber" width="175px" height="170px">
                    <p>Justin Beiber</p>
                    <p>Artist</p>
                </div> 
                
                <?php
                    if($_SESSION["user_lg"] != "guest")
                        {
                    ?>

                        </a>
                    <?php
                        }
                ?>
                <?php
                        if($_SESSION["user_lg"] != "guest")
                            {
                        ?>
                            <a href="Spotify.php?ch1=2" >
                        <?php
                            }
                ?>
                <div class="Singeritem">
                    <img style="border-radius: 50%; cursor: pointer;" src="images/taylor.jpg" alt="Jutin Bieber" width="170px" height="170px">
                    <p>Taylor Swift</p>
                    <p>Artist</p>
                </div> 
                
                <?php
                    if($_SESSION["user_lg"] != "guest")
                        {
                    ?>

                        </a>
                    <?php
                        }
                ?>
                <?php
                        if($_SESSION["user_lg"] != "guest")
                            {
                        ?>
                            <a href="Spotify.php?ch1=3" >
                        <?php
                            }
                ?>
                <div class="Singeritem">
                    <img style="border-radius: 50%; cursor: pointer;" src="images/zayn.jpg" alt="Jutin Bieber" width="170px" height="170px">
                    <p>Zayn</p>
                    <p>Artist</p>
                </div> 
                
                <?php
                    if($_SESSION["user_lg"] != "guest")
                        {
                    ?>

                        </a>
                    <?php
                    }
                ?>
                
            </div>
            
    </div>
</body>
</html>