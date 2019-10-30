<?php
include "baza.php";
$sajt=$db->podaciSajta();
$html=$db->innerHtml();
$meni=$db->meni();
$slider=$db->slider();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1">
        <link  id="favicon" href="slike/brod.png" rel="shortcut icon" type="image/x-icon"  />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
        <title>PIZZERIA PORTO</title>
        <link rel="stylesheet" href="stilovi/index.css">
    </head>
    <style>
 
 
 
    </style>
    <body>
        <div id="wrapper">
            <div id="pocetna">
                <div class="logo1"><a href="#pocetna"><img src="slike/porto-logo.png" alt="logo"></a></div>
                <div id="opis2"><h1><?=substr($html['']['Duzi'],0,20)?></h1></div>
                <div id="jezici">
                    <a href="">rs | </a><a href="">en | </a><a href="">it | </a><a href="">de</a>
                </div>
                <div id="meni1">
                    <a href="#meni">PREGLED MENIJA</a>
                    <a href="#o_nama"><?=strtoupper($html['']['Naziv'])?></a>
                </div>
                <div id="footer2">
                    <!-- <p>POSETITE NAS</p> -->
                    <p><?=$sajt['telefon']['Kraci_text']?></p>
                    <p><?=$sajt['adresa']['Kraci_text']?></p>
                    <p><?=$sajt['radno vreme']['Kraci_text']?></p>
                </div>
                <div id="footer3">
                    <!-- <p id="f">PRATITE NAS</p> -->
                    <p><a href="<?=$sajt['facebook']['Kraci_text']?>"> <?=$html['facebook.com']['Naziv']?> <i class="fa fa-facebook-square" aria-hidden="true"></i></a></p>
                    <p><a href="<?=$sajt['instagram']['Kraci_text']?>"> <?=$html['instagram.com']['Naziv']?> <i class="fa fa-instagram" aria-hidden="true"></i></a></p>
                    <p><a href="<?=$sajt['twitter']['Kraci_text']?>"> <?=$html['twitter.com']['Naziv']?> <i class="fa fa-twitter" aria-hidden="true"></i></a></p>
                </div>
            </div>
               
            <div id="meni">
                <div class="lajsna"></div>
                <div class="logo"><a href="#pocetna"><img src="slike/porto-logo.png" alt="logo"></a></div>
                <h3>Za Vas pripremamo:</h3>
                <div id="pizza-menu">
                    <?php
                        foreach($meni as $red){
                            print '<a href=:hrana.php?tip='.$red['Naziv'].'">';
                            print '<div class="kategorije">';
                            print '<h1>'.$red['Naziv'].'</h1>';
                            print '<img src="'.$red['Slika'].'"alt="'.$red['Naziv'].'"/>';
                            print '</div></a>';
                        }
                    ?>
                </div>
            </div>
 
            <div id="o_nama">
                    <!-- <div class="lajsna"></div> -->
                <div id="about"></div>
                <div id="text-about">
                    <div class="logo"><a href="#pocetna"><img src="slike/porto-logo.png" alt="logo"></a></div>
                    <h3><?=$html['']['Naziv']?></h3>
                    <p><?=$sajt['O nama']['Duzi']?></p>
                </div>
                <div id="images-about">
                    <?php
                    foreach($slider as $red)
                        print "<div style='background-image:url(\"slike/{$red['Slika']}\")'></div>";
                    ?>
                </div>
            </div>
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
        </div>
    </body>
</html>