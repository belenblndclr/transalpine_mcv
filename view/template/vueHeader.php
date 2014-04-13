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

    <link href="common/css/style.css" rel="stylesheet">
    <link href="common/css/icon_font.css" rel="stylesheet">
	
		
	<?php if($page == "admin"): ?>
	
		<link href="common/css/footable/footable.core.css" rel="stylesheet" type="text/css"/>
		<link href="common/css/footable/bootstrap.css" rel="stylesheet" type="text/css"/>
	<?php endif; ?>
	<?php if($page == "moderation"): ?>
		<link href="common/css/footable/footable.core.css" rel="stylesheet" type="text/css"/>
	<?php endif; ?>
	
		
	<?php if($page == "revues"): ?>
		<link rel="stylesheet" href="common/css/filtrify/filtrify.css">
		<link rel="stylesheet" href="common/css/filtrify/jPages.css">	
	<?php endif; ?>

  </head>
  