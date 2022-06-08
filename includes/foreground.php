<?php
/**
 * User: J. Verbruggen
 * Date: 15/06/2022
 * File: foreground.php
 */
//header
include 'includes/header.php';

//checks if the page URL contains the startup=1. if so it does play the gameboy intro but if it doesn't it will
$startUp = $_GET['startUp'];
  if (empty($startUp)) 
  {
    echo '<div><img id="foreground" src="../images/foreground.png" alt="foreground"><img id="battery" src="../images/BATTERY.png" alt="battery"><img id="logo" src="../images/techbrothers_logo.png" alt="logo"><audio id="gameboyAudio"><source src="../sound/gameboy-sound.mp3" type="audio/mpeg"></audio><div id="fakeBackground"></div></div>';
  } 
  else 
  {
    echo '<div><img id="foreground" src="../images/foreground.png" alt="foreground"><img id="battery" src="../images/BATTERY.png" alt="battery"></div>';
  }
?>