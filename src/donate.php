<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.inc'); ?>
<?php 
	$PageTitle = "Donate"; 
	$PageQuote = "Always do everything you ask of those you command.";
	$CalloutCopy = "Help build our<br />museum for future<br/>generations";
?>
<!doctype html>
<html>
	<head>
		<?php require_once(FRAGMENTS."/head.inc"); ?>
		<!-- build:css(src) /_/css/donate.css -->
		<link rel="stylesheet" href="/_/css/donate.css" />
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

					<h4 class="section-title">Ways to Give</h4>
					<p>Your tax deductible contributions to the Patton Museum are made through the Patton Museum Foundation, a 501 (c) (3) organization.</p>

					<ul>
						<li>Artifacts</li>
						<li>Cash</li>
						<li>Appreciated Securities and Property</li>
						<li>Bequests</li>
						<li>Multi-year Pledges</li>
						<li>Charitable Trusts</li>
					</ul>

					<p>
						For more information about making a gift, please <a href="/contact/">contact us</a>, 
						call <a href="tel:(502) 943-8977">(502) 943-8977</a>,
						or email <a href="mailto:dhibbsgeneralpatton@gmail.com">dhibbsgeneralpatton@gmail.com</a>.
					</p>

					<h4 class="section-title">Naming and Gift Opportunities</h4>
					<p>With the new museum, there are several naming opportunities and gift levels that exist with your contribution. Gifts of all sizes are important. Creating the new museum will take all of us working together. Please download our <a href="/_/res/pdf/gift-opportunities-brochure.pdf">Gift Opportunities Brochure</a> for further information on supporting the General George Patton Museum.</p>

					<h4 class="section-title">Commemorative Brick Paver Program</h4>
					<p>Mark Your Place In History! Become a permanent part of the Patton Museum by purchasing a commemorative brick paver to be displayed in The Patio of Heroes. Join our many supporters who have purchased a brick paver for themselves or to honor a loved one or a friend.</p>
					<p>Located to the left of the museum entrance, The Patio of Heroes gives visitors a visual reminder of the many contributions made by our soldiers and friends. Add your brick paver to the hundreds already on display. The patio will be expanded on a regular basis.</p>
					<p>You can order the brick pavers in two sizes: 4 inch by 8 inch containing up to three lines of type for $200, or 8 inch by 8 inch containing up to six lines of type for $400. Families and groups can arrange to have their brick pavers located together.</p>
					<p>For more information, please call the Patton Museum Foundation at <a href="tel:1-888-212-6767">1-888-212-6767</a>, or <a href="/_/res/pdf/patton-paver-form.pdf">download the order form</a>, fill out and send in.</p>

					<h4 class="section-title">Bricks for the Barracks Campaign</h4>
					<p>Fort Knox has one of the last original WWII barracks and in May 2011, it was moved to a new location in front of the museum. Our mission is to restore it to its original 1940’s condition. Will you help us restore this World War II barracks to visitors of all ages can learn more about the lives of soldiers? Please download our <a href="/_/res/pdf/patton-barracks-brochure.pdf">WWII Barracks Brochure</a> for further information on supporting the General George Patton Museum.</p>
										
				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

