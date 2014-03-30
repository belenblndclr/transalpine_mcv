<? include_once("gabarit/gabarit.php"); ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
  	<!-- balise méta prise en compte par Google -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo (!empty($description)) ? $description : ''; ?>">
    <meta name="<?php echo (!empty($robotName)) ? $robotName : ''; ?>" content="<?php echo (!empty($robotContent)) ? $robotContent : ''; ?>" />
    
    <!-- balise méta non prise en compte par Google -->
    <meta name="keywords" content="<?php echo (!empty($keywords)) ? $keywords : ''; ?>" />
    <meta name="author" content="<?php echo (!empty($author)) ? $author : ''; ?>" />
    <meta name="copyright" content="<?php echo (!empty($copyright)) ? $copyright : ''; ?>" />
    <meta name="geo.placename" content="<?php echo (!empty($placename)) ? $placename : ''; ?>" />
	<meta name="geo.position" content="<?php echo (!empty($position)) ? $position : ''; ?>" />
	<meta name="geo.country" content="<?php echo (!empty($country)) ? $country : ''; ?>" />

    <title><?php echo (!empty($title)) ? $title : ''; ?></title>
	
	
	<?php if($page == "revues"): ?>
		<link rel="stylesheet" href="css/filtrify/filtrify.css">
		<link rel="stylesheet" href="css/filtrify/jPages.css">
		
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="js/filtrify/filtrify.js"></script>
		<script src="js/filtrify/highlight.pack.js"></script>
		<script src="js/filtrify/jPages.min.js"></script>
		<script src="js/filtrify/jquery.isotope.min.js"></script>
		<script src="js/filtrify/jquery.lazyload.min.js"></script>
		<script src="js/filtrify/script.js"></script>
	<?php endif; ?>

    <link href="common/css/style.css" rel="stylesheet">
    <link href="common/css/icon_font.css" rel="stylesheet">
	
		
	<?php if($page == "moderation"): ?>
		<link href="css/footable/footable.core.css" rel="stylesheet" type="text/css"/>
	<?php endif; ?>
	

  </head>
  