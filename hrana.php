<?php
include "baza.php";
$sajt=$db->podaciSajta();
$html=$db->innerHtml();
$hrana=$db->hrana();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  id="favicon" href="slike/brod.png" rel="shortcut icon" type="image/x-icon"  />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PICE</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stilovi/prikazi.css">
    <link rel="stylesheet" href="stilovi/index.css">
</head>
<body>
    <div id="w">
        <!-- <div class="logo"><a href="index.html"><img src="slike/brod.png" alt="logo"></a></div> -->
        <div class="logo"><a href="index.html#p1"><img src="slike/porto-logo.png" alt="logo"></a></div>

        <a href="index.html#meni"><h3>Nazad na meni</h3></a>
        <div class="prikazi"></div>
        <div class="gore"><a href="#w"><i class="fa fa-chevron-up" aria-hidden="true"></i></a></div>
        <div class="footer">
                <div class="footer-cell">
                    <p><a href="#pocetna">Početna</a></p>
                    <p><a href="#meni">Meni</a></p>
                    <p><a href="#o_nama"><?=$html['']['Naziv']?></a></p>
                </div>
                <div class="footer-cell">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <p><?=$sajt['adresa']['Kraci_text']?></p>
                    <p>Pančevo</p>
                </div>
                <div class="footer-cell">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p><?=$sajt['telefon']['Kraci_text']?></p>
                </div>
                <div class="footer-cell">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <p><?=$sajt['radno vreme']['Kraci_text']?></p>
                    <!-- <p>vikendom: 15h - 23h</p> -->
                </div>
                <div class="footer-cell">
                    <a href="<?=$sajt['facebook']['Kraci_text']?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="<?=$sajt['instagram']['Kraci_text']?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="<?=$sajt['twitter']['Kraci_text']?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <p>PRATITE NAS</p>
                </div>
            </div>

            <?php
            print $hrana;
            ?>
            <!-- <div class="prikazi">
                <div><img src="slike/pice/aglio_olio_1.jpg">
                    <h1 class="naslovi">aglio olio - POSNO</h1>
                    <p>32cm - 250 rsd<br>45cm - / rsd</p>
                    <div class="razmak">
                        marinada od maslinovog ulja i belog luka, bosiljak, origano, masline                        
                    </div>
                </div>
            </div> -->

            
    </div>
        
</body>
</html>