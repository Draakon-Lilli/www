<div style="width:300px; padding:30px;">
<?=$data['contents'];?>
</div>
<?php
foreach ( $data['images'] as $image )
{
   echo ( '<img alt="' . $image['source'] . '" src="' . $image['source'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '" style="position:absolute; top:' . $image['top'] . 'px; left:' . $image['left'] . 'px; border:gray dashed 1px"/>' );
}
?>
