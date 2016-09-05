     	<title><?php if (!empty($PageTitle)) : echo $PageTitle . " | "; endif;?>Patton Museum</title>
		<meta name="description" content="<?=$PageDescription;?>">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php if(!LIVE) : ?>
        	<meta name="robots" content="noindex, nofollow">
   		<?php endif; ?>

        <!-- Custom Favicon -->
		<link rel="shortcut icon" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/favicon.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/favicon-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="//<?php echo($ServerName); ?>/_/img/icons/favicon/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#2d89ef">
		<meta name="msapplication-TileImage" content="//<?php echo($ServerName); ?>/_/img/favicon/mstile-144x144.png">
		<meta name="msapplication-config" content="//<?php echo($ServerName); ?>/_/img/favicon/browserconfig.xml">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Roboto+Slab:300,400,700|Roboto+Condensed:300,400,700" rel="stylesheet">

		<!-- build:css(src) /_/lib/bootstrap/css/bootstrap.min.css -->
		<link rel="stylesheet" href="/_/lib/bootstrap/css/bootstrap.min.css">
		<!-- endbuild -->

		<!-- build:css(src) /_/css/site-styles.css -->
		<link rel="stylesheet" href="/_/bower/fontawesome/css/font-awesome.min.css">
		<!-- endbuild -->