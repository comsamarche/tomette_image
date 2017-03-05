<?php 
  //Traitement sécurité
  function check_valid_colorhex($colorCode) {
    // If user accidentally passed along the # sign, strip it off
    $colorCode = ltrim($colorCode, '#');

    if (
          ctype_xdigit($colorCode) &&
          (strlen($colorCode) == 6 || strlen($colorCode) == 3))
               return true;

    else return false;
  }

  if (isset($_GET['color']) || isset($_GET['bg'])){

  $color = 'none';
  $bg = '';

  // Récupération des données
  if(isset($_GET['color'])){
    $hexa = htmlentities($_GET['color'], ENT_QUOTES);
    // Vérifier que c'est bien une couleur hexa
    if(check_valid_colorhex($hexa)) $color = '#'.$hexa;      
  }

  if(isset($_GET['bg'])){
    $url = htmlentities($_GET['bg'], ENT_QUOTES);
    // Verifier que c'est bien un lien url
    if( preg_match (" /.jpg$/i ", $url) ){
      $bg = $url;
    }
  }

  // Paramètres de taille
  $width= 150*1.15;
  $x = 150*0.07; 

  }
  else{ exit(); }
?>
<?php header('Content-type: image/svg+xml');?>
<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 15.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="1px" y="1px"
   width="250px" height="250px" viewBox="0 0 216.86 250.624" style="enable-background:new 0 0 216.86 250.624;" xml:space="preserve">
<?php 
  if($bg !== ""){
 ?>
     <defs>

    <pattern id="image" patternUnits="userSpaceOnUse" width="<?php echo $width; ?>" height="<?php echo $width; ?>">
      <image xlink:href="<?php echo $bg; ?>"
            x="-<?php echo $x; ?>px" y="-<?php echo $x; ?>px" width="<?php echo $width; ?>" height="<?php echo $width; ?>">
      </image>
    </pattern>

  </defs>
  <path style="fill:url(#image);stroke:#f6ebd3;stroke-width:1"  d="M216.861,62.178l-0.002,125.68l-108.998,62l-108-62V62.18l108-62.322L216.861,62.178z"/>
<?php 
} 

if($color !== 'none'){
?>
<path style="fill:<?php echo $color; ?>;stroke:#f6ebd3;stroke-width:1"  d="M216.861,62.178l-0.002,125.68l-108.998,62l-108-62V62.18l108-62.322L216.861,62.178z"/>
<?php 
} 
?> 
</svg>