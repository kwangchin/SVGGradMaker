<?php
switch ($_POST['direction']) {
  case 2:
    $x1 = 0;
    $y1 = 0;
    $x2 = 100;
    $y2 = 100;
    break;
  case 3:
    $x1 = 0;
    $y1 = 0;
    $x2 = 100;
    $y2 = 0;
    break;
  case 4:
    $x1 = 0;
    $y1 = 100;
    $x2 = 100;
    $y2 = 0;
    break;
  default:
    $x1 = 0;
    $y1 = 0;
    $x2 = 0;
    $y2 = 100;
    break;
}

$svg = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1 1" preserveAspectRatio="none"><linearGradient id="grad" gradientUnits="userSpaceOnUse" x1="' . $x1 . '%" y1="' . $y1 . '%" x2="' . $x2 . '%" y2="' . $y2 . '%"><stop stop-color="#' . $_POST['firstcolour'] . '" offset="' . ($_POST['firstoffset'] / 100) . '"/><stop stop-color="#' . $_POST['lastcolour'] . '" offset="' . ($_POST['lastoffset'] / 100) . '" /></linearGradient><rect x="0" y="0" width="1" height="1" fill="url(#grad)" /></svg>';

if ($_POST['direction'] == 5) {
  $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1 1" preserveAspectRatio="none"><radialGradient id="grad" gradientUnits="userSpaceOnUse" cx="50%" cy="50%" r="75%">><stop stop-color="#' . $_POST['firstcolour'] . '" offset="' . ($_POST['firstoffset'] / 100) . '"/><stop stop-color="#' . $_POST['lastcolour'] . '" offset="' . ($_POST['lastoffset'] / 100) . '" /></radialGradient><rect x="0" y="0" width="1" height="1" fill="url(#grad)" /></svg>';
}

echo base64_encode($svg);