<div style="width:100%; height:500px;">
</div>

   <!-- booklist -->
   <div style="position:absolute; top:180px; left:30px; width: 150px;" class="panels">
   <?php foreach ($data['titles'] as $title):?>
      <div <?=$title['selected'] == 1 ? 'class="selected"' : '';?>>
         <p onclick="window.location.href='<?=$title['link']?>';return false;"><b><?=$title['year'];?></b></p>
         <p onclick="window.location.href='<?=$title['link']?>';return false;"><?=$title['author'];?></p>
         <p onclick="window.location.href='<?=$title['link']?>';return false;"><?=$title['title'];?></p>
         <p><a href="<?=$title['PDF']?>">salvesta raamat</a></p>
      </div>
   <?php endforeach;?>
   </div>

   <!-- left arrow -->
   <div style="position:absolute; top:540px; left:175px;">
	<?php if ($data['left_arrow_src']) { ?>
      <a href="<?=$data['left_arrow_href']?>">
         <img src="<?=$data['left_arrow_src']?>"/>
      </a>
	<?php } ?>
   </div>

   <!-- right arrow -->
   <div style="position:absolute; top:540px; left:1005px;">
	<?php if ($data['right_arrow_src']) { ?>
      <a href="<?=$data['right_arrow_href']?>">
         <img src="<?=$data['right_arrow_src']?>"/>
      </a>
	<?php } ?>
   </div>

   <!-- sheets -->
   <?php if( $data['left_picture_src'] !== false ): ?>
   <div style="position:absolute; top:180px; left:200px; border: 1px dashed gray;"><img src="<?=$data['left_picture_src']?>"/></div>
   <?php endif; ?>
   <?php if( $data['right_picture_src'] !== false ): ?>
   <div style="position:absolute; top:180px; left:600px; border: 1px dashed gray;"><img src="<?=$data['right_picture_src']?>"/></div>
   <?php endif; ?>


   <!-- sheetlist -->
   <div style="position:absolute; top:600px; left:200px; width:800px; text-align:center; font-weight: bold; font-size: 12px;">
   <?php foreach ($data['sheetlist'] as $sheetpair):?>
         <a href="<?=$sheetpair['href'];?>" style="text-decoration:<?=($sheetpair['current']?'underline':'none');?>;"><?=$sheetpair['text'];?></a>
   <?php endforeach;?>
   </div>

