<?php Header('Content-type: image/svg+xml; charset=utf-8');?>
<?php
  // vérification
	(isset($_GET['color']))? $color = '#'.$_GET['color']: $color = 'none';
	(isset($_GET['bg']))? $bg = $_GET['bg'] : $bg = '';
	$width= 150*1.15;
	$x = 150*0.07; 
?>
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