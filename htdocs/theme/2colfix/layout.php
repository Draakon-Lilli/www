<?
#
# $data structure:
# - sections
# - pages
# - sitename
# - heading
# - permalink
# - floatimage
# - contents
# - copyright
#
#print_r($data);

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title><?=$data['title']?></title> 
	<BASE href="http://www.draakon-lilli.ee/"/>
	<link rel="stylesheet" href="/theme/2colfix/stylesheet1.css" media="screen"/>
	<link rel="stylesheet" href="/theme/2colfix/stylesheet2.css" media="screen"/>
</head>

<body>

	<?php if( $data['sitename'] ): ?>
	<div id="header" title="sitename"><?=$data['sitename']?></div>
	<?php endif; ?>
	
	<div id="mainnav">
		<ul>
		<?php foreach( $data['sections'] as $section ): ?>
			<li<?php echo($data['section']['url'] == $section['url']) ? ' class="selected"' : ''; ?>><a href="/<?=$section['url']?>/"><?=$section['name']?></a></li>
		<?php endforeach; ?>
		</ul>
	</div>



	<div id="contents">

<?php
$sectionlayout = 'theme/'.THEME.'/'.$_GET['section'].'.php';
if( is_file( $sectionlayout ) ):             // page with custom layout
   include( $sectionlayout );
else:       											// page with default layout
   include( 'theme/'.THEME.'/default.php' );
endif; ?>		

	</div>


		
		<?php if( $data['footer'] ):  // footer will appear on all pages if defined
		?>
		<div id="footer">
			<?='';// implode('->', $data['path']).'<br/>'; ?>
			<?=$data['footer'];?>
		</div>
		<?php endif; ?>

	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-4583751-3");
	pageTracker._trackPageview();
	} catch(err) {}</script>

</body>
</html>

