<?php

$data['heading'] = '<b>'.$data['logotext'].'</b>';

$picdim = 200;
$spacing = 25;
$left = 400;
$top = 180;
$cols = 3;
$rows = 2;

for ( $i = 1; $i <= $cols * $rows ; $i++ )
{
   $_image = array(
      'source' => "pages/$i.png",
      'top'    => $top + ( $i-1 - ( ($i-1) % $cols ) ) / $cols * ( $picdim + $spacing ),
      'left'   => $left + ( ($i-1) % $cols ) * ( $picdim + $spacing ),
      'width'  => $picdim,
      'height' => $picdim
      );
   $data['images'][$i] = $_image;
}
?>
