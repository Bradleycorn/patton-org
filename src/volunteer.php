<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.inc'); ?>
<?php 
	$PageTitle = "Volunteer"; 
	$PageQuote = "Accept the challenges so you can feel the exhilaration of victory.";
	$CalloutCopy = "GET INSPIRED BY<br />PATTON'S AUDACIOUS SPIRIT<br />AND BOLD ACTION";
?>
<!doctype html>
<html>
	<head>
		<?php require_once(FRAGMENTS."/head.inc"); ?>
		<!-- build:css(src) /_/css/volunteer.css -->
		<link rel="stylesheet" href="/_/css/volunteer.css" />
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


					<p>
						Interested in volunteering at the
						General George Patton Museum? Museum volunteers do a wide range of jobs,
						including greeting visitors, delivering programs, assisting with collections,
						and being Museum ambassadors at festivals, parades and the State Fair. Call <a href="tel:5026244824">(502) 624-4824</a> 
						or <a href="mailto:usarmy.knox.usacc.mbx.hq-patton-museum@mail.mil">email</a> for more information.
    				</p>

					<p>Volunteers are expected to donate at least 10 hours of time to the museum each year to remain a General George Patton Museum volunteer. 
					To become a Museum volunteer, go to the following website:<br>
					<a href="https://www.myarmyonesource.com/default.aspx" target="_blank">Army One Source</a> and follow the enrollment procedure.</p>
					
					<p>Have questions?  Please <a href="mailto:usarmy.knox.usacc.mbx.hq-patton-museum@mail.mil">email us</a>.</p>
				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

