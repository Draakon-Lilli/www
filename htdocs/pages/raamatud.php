<?php

$data['path'][1] = $data['path'][1] == 'index' ? '/Külaskäik Draakon-Lilli majja' : $data['path'][1];


// todo: read from filesystem
$num_of_sheets = 48;

$bookpath = $data['path'][0] . '/' . $data['path'][1];
$current_sheet = isset( $data['path'][2] ) ? $data['path'][2] : 0;
$current_sheet = $current_sheet - $current_sheet % 2;
$prev_sheet = $current_sheet > 0 ? $current_sheet - 2 : false;
$next_sheet = $current_sheet < $num_of_sheets ? $current_sheet + 2 : false;



// titles
// todo: read from filesystem
//
$title['year']   = 2008;
$title['author'] = 'Riken Yamamoto';
$title['title']  = 'Külaskäik Draakon-Lilli majja';
$title['link']   = $data['section']['url'] . ('/Külaskäik Draakon-Lilli majja');
$title['PDF']   = 'pages/' . $data['section']['url'] . ('/Külaskäik Draakon-Lilli majja/Külaskäik Draakon-Lilli majja.pdf');

$title['selected'] = $title['link'] == $bookpath;

$data['titles'][] = $title;


// arrows
//
if( $prev_sheet !== false )
{
   $data['left_arrow_src'] = 'pages/raamatud/left.png';
   $data['left_arrow_href'] = $bookpath . '/' . $prev_sheet;
}
if( $next_sheet !== false )
{
   $data['right_arrow_src'] = 'pages/raamatud/right.png';
   $data['right_arrow_href'] = $bookpath . '/' . $next_sheet;
}

// sheets
//
$right_picture_src = 'pages/' . $bookpath . '/' . ($current_sheet + 1) . '.jpg';
$data['right_picture_src'] = is_file( $right_picture_src ) ? $right_picture_src : false;
$left_picture_src = 'pages/' . $bookpath . '/' . ($current_sheet) . '.jpg';
$data['left_picture_src'] = is_file( $left_picture_src ) ? $left_picture_src : false;
//$data['right_picture_src'] = 'pages/' . $bookpath . '/' . ($current_sheet + 1) . '.jpg';

// sheetlist
//
for ( $i=0; $i<=$num_of_sheets; )
{
   $_sheetpair = array();
   $data['sheetlist'][$i] =& $_sheetpair;
   $_sheetpair['href'] = $bookpath . '/' . $i;

   $_l = $i++;
   $_r = $i++;
   if( $_l > 0 )
   {
      $_sheetpair['numbers']['leftnum'] = $_l;
   }
   if( $_r <= $num_of_sheets )
   {
      $_sheetpair['numbers']['rightnum'] = $_r;
   }
   $_sheetpair['text'] = implode( '&nbsp;', $_sheetpair['numbers'] );
   if( $_l == $current_sheet )
   {
      $_sheetpair['current'] = true;
   }

   unset($_sheetpair);
}

//print_r($data);
?>
