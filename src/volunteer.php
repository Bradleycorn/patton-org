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
						Interested in volunteering at the General George Patton Museum?  Museum
						volunteers do a wide range of jobs, including acting as tour guides, delivering
					    school programs, assisting in the repair and restoration of historic tanks
    					[and vehicles] and being Museum ambassadors at festivals, parades and the
    					State Fair.
    				</p>

					<p>Volunteers are expected to donate at least 10 hours of time to the museum each year to remain a General George Patton Museum volunteer. To become a Museum volunteer, go to the following website:<br><a href="https://www.myarmylifetoo.com/skins/malt/display.aspx?Action=volunteer_opportunity_search&amp;mode=User&amp;moduleid=38E354F2-EC97-4e36-8690-5C91BBA10B69" target="_blank">My Army Life Too</a> and follow the enrollment procedure.</p>
					
					<p>Have questions?  Please <a href="mailto:education@generalpatton.org">email us</a>.</p>
				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

