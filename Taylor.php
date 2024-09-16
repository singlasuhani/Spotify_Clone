<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <link rel="stylesheet" href="MainStyle.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/36c335000a.js" crossorigin="anonymous"></script>

</head>
<body bgcolor="black">
    <div class="MySongs" style="background-color: transparent;">
        <div class="HeadImg1">
        <div class="verified">
                <p><svg role="img" height="24" width="24" class="Svg-ytk21e-0 hFEdcY b0NcxAbHvRbqgs2S8QDg" viewBox="0 0 24 24"><path fill="#4cb3ff" d="M10.814.5a1.658 1.658 0 012.372 0l2.512 2.572 3.595-.043a1.658 1.658 0 011.678 1.678l-.043 3.595 2.572 2.512c.667.65.667 1.722 0 2.372l-2.572 2.512.043 3.595a1.658 1.658 0 01-1.678 1.678l-3.595-.043-2.512 2.572a1.658 1.658 0 01-2.372 0l-2.512-2.572-3.595.043a1.658 1.658 0 01-1.678-1.678l.043-3.595L.5 13.186a1.658 1.658 0 010-2.372l2.572-2.512-.043-3.595a1.658 1.658 0 011.678-1.678l3.595.043L10.814.5zm6.584 9.12a1 1 0 00-1.414-1.413l-6.011 6.01-1.894-1.893a1 1 0 00-1.414 1.414l3.308 3.308 7.425-7.425z"></path></svg>&emsp;Verified Artist</p>
                <p style="font-size:50px;">Taylor Swift</p>
                <p>95,755,820 monthly listeners</p>
            </div>
        </div>
        <div class="SongsTable">
            <table width="100%" cellspacing="15px" >
                <tr class="songItem">
                    <td><i id="0" class="far songItemPlay fa-play-circle"></i></td>
                    <td><img src="images/5.jpeg" alt="Cover" width="50px" height="50px" style="border-radius: 3px"></td>
                    <td class="songName">Closure</td>
                    <td>127,589,935</td>
                    <td>3:00</td>
                </tr>
                <tr class="songItem">
                    <td><i id="1" class="far songItemPlay fa-play-circle"></i></td>
                    <td><img src="images/6.jpeg" alt="Cover" width="50px" height="50px" style="border-radius: 3px"></td>
                    <td class="songName">Happiness</td>
                    <td>193,067,235</td>
                    <td>5:15</td>
                </tr>
                <tr class="songItem">
                    <td><i id="2" class="far songItemPlay fa-play-circle"></i></td>
                    <td><img src="images/7.jpg" alt="Cover" width="50px" height="50px" style="border-radius: 3px"></td>
                    <td class="songName">Lover</td>
                    <td>1,502,916,854</td>
                    <td>3:41</td>
                </tr>
                <tr class="songItem">
                    <td><i id="3" class="far songItemPlay fa-play-circle"></i></td>
                    <td><img src="images/8.jpeg" alt="Cover" width="50px" height="50px" style="border-radius: 3px"></td>
                    <td class="songName">Evermore</td>
                    <td>224,865,131</td>
                    <td>5:04</td>
                </tr>
            </table>
            <div class="SongController">
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
            </div>
        </div>
    </div>
<script src="Taylor.js"></script>
</body>
</html>