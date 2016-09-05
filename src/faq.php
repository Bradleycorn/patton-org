<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.inc'); ?>
<?php 
	$PageTitle = "Frequently Asked Questions"; 
	$PageQuote = "There is only one sort of discipline, perfect discipline.";
	$CalloutCopy = "Discover What<br />Made Patton<br />\"A genius for war\"";
?>
<!doctype html>
<html>
	<head>
		<?php require_once(FRAGMENTS."/head.inc"); ?>
		<!-- build:css(src) /_/css/faq.css -->
		<link rel="stylesheet" href="/_/css/faq.css" />
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
						<span class="question">How long will a visit take?</span><br />
						A normal tour visit will take approximately 1½ hours. Tours can be made shorter or longer but please let us know your time limits.
					</p>
					<p>
						<span class="question">Where do I park? Do we have to come onto Fort Knox and pass through security?</span><br />
						There is a museum parking lot right off Highway 31W for bus parking. Students/visitors must walk to the museum after passing through the turnstiles. It will take 5 minutes to walk from the 31W parking lot. The parking lot is open 30 minutes before and after the opening/closing of the museum. The turnstile is large enough to accommodate wheelchairs. We have additional wheelchairs inside the museum. 
					</p>
					<p>You do not have to pass through security to visit the museum.</p>

					<p>
						<span class="question">Can we have a tour of the Gold Vault?</span><br />
						No. Tours of the Gold vault are not allowed. Stopping to take photographs of the Gold Vault is strictly prohibited. We do have a model of the Gold Vault that was used in the movie “Goldfinger” on display.
					</p>
					<p>
						<span class="question">Can I eat in the museum?</span><br />
						While the gift shop sells small snacks and drinks, there is no food allowed in the museum. There is a picnic area directly behind the museum for students/visitors to use. There is an inclement weather location for eating brown bag lunches for students only that can be provided within the museum.
					</p>
					<p>
						<span class="question">Are students/visitors allowed on or in the tanks?</span><br />
						Students/visitors are not allowed to climb on or in the tanks, A fall from a tank can seriously injure a person. Instead we have provided training simulators that allow the people to understand what it is like to be in a tank.
					</p>
					<p>
						<span class="question">Can I have a tour of the museum after regular hours? Can I visit the LST building or the Richardson Motor Pool?</span><br />
						Not at this time. Special tours/visits to our other facilities are unavailable at this time due to the museum's transformation mentioned on our homepage.
					</p>
					<p>
						<span class="question">Where is General Patton buried?</span><br />
						General Patton is buried in Hamm, Luxemburg.
					</p>
					<p>
						<span class="question">How old was General Patton when he died?</span><br />
						General Patton was 60 years old.
					</p>

										
				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

