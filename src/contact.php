<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.inc'); ?>
<?php 
	$PageTitle = "Contact Us"; 
	$PageQuote = "Success is how high you bounce when you hit bottom.";
	$CalloutCopy = "WE INVITE YOU TO CALL<br />AND LOOK FORWARD<br />TO YOUR VISIT";
?>
<!doctype html>
<html>
	<head>
		<?php require_once(FRAGMENTS."/head.inc"); ?>
		<!-- build:css(src) /_/css/contact.css -->
		<link rel="stylesheet" href="/_/css/contact.css" />
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

					<div class="row">
						<div class="col-sm-6">
							<h3 class="section-title">Write to Us</h3>
							<p>
								The Patton Museum<br />
								P.O. Box 1304<br />
								Ft. Knox, Kentucky 40121-0208<br />
							</p>				
						</div>

						<div class="col-sm-6">
							<h3 class="section-title">Call Us</h3>
							<p><b>General Information:</b>	<a href="tel:(502) 624-3391">(502) 624-3391</a></p>
							<p><b>Gift Shop Manager:</b>	<a href="tel:(502) 624-7771">(502) 624-7771</a></p>
						</div>
					</div>
				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

