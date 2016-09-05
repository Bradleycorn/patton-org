<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.inc'); ?>
<?php 
	$PageTitle = "The Page Title"; 
	$PageQuote = "Better to fight for something than to live for nothing";
	$CalloutCopy = "Extraordinary stories of Patton's upbringing, education, and monumental achievements";
?>
<!doctype html>
<html>
	<head>
		<?php require_once(FRAGMENTS."/head.inc"); ?>
		<!-- build:css(src) /_/css/content-page.css -->
		<link rel="stylesheet" href="/_/css/content-page.css" />
		<!-- endbuild -->
	</head>
	<body>

		<?php require_once(FRAGMENTS."/site-header.inc"); ?>

		<main class="container">
			<div class="row">
				<aside id="SiteNav" class="col-md-3">
					<?php require_once(FRAGMENTS."/site-nav.inc"); ?>
				</aside>

				<section id="PrimaryContent" class="col-md-9"> 

					<h1 class="page-title"><?=$PageTitle;?></h1>
					<p>
						Lorem ipsum doler sit ament blah bala blah blah.
					</p>

					<?php require_once(SNIPPETS."/page-callout.inc"); ?>

										
				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

