   <!-- left column -->
   <div style="position:absolute; top:180px; left:30px; right: 30px;" class="panels">
   <?=$data['contents'];?>
      <!-- sheetlist -->
   <div style="position:absolute; top:600px; left:200px; width:800px; text-align:center; font-weight: bold; font-size: 12px;">
   <?php foreach ($data['sheetlist'] as $sheetpair):?>
         <a href="<?=$sheetpair['href'];?>" style="text-decoration:<?=($sheetpair['current']?'underline':'none');?>;"><?=$sheetpair['text'];?></a>
   <?php endforeach;?></div>

