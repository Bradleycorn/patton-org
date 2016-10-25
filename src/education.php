<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.inc'); ?>
<?php 
	$PageTitle = "Education"; 
	$PageQuote = "There is only one sort of discipline, perfect discipline.";
	$CalloutCopy = "Patton's principles<br />of leadership<br />will inspire all ages";
?>
<!doctype html>
<html>
	<head>
		<?php require_once(FRAGMENTS."/head.inc"); ?>
		<!-- build:css(src) /_/css/education.css -->
		<link rel="stylesheet" href="/_/css/education.css" />
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

					<?php require_once(SNIPPETS."/page-callout.inc"); ?>

					
					<iframe src ="http://www.generalpatton.org/sentryfile/sentryfile/search_quick.aspx?published=YES" width="100%" scrolling="auto" height="450"></iframe>										
				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

