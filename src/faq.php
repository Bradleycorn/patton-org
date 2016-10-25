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
						Plan an hour to an hour-and-a-half for your visit.
					</p>
					<p>
						<span class="question">What does it cost to visit the Museum and park?</span><br />
						Both the Museum and parking are free. The Museum welcomes donations which may be dropped in the donation box in the Museum's lobby. Donations are important to developing and sustaining the Museum.
					</p>
					<p>
						<span class="question">Where do I park?</span><br />
						After passing through security at Chaffee Gate follow signs to the museum and parking.
					</p>
					<p>
						<span class="question">May I take photographs in the Museum?</span><br />
						Yes, you may take photographs in the Museum but you may not use a flash. Bright light from a flash harms the artifacts and is not permitted.
					</p>
					<p>
						<span class="question">What happened to the tanks?</span><br />
						The tanks that were inside and outside the museum for many years belong to the Armor School which relocated to Fort Benning in 2011 as the result of a Base Realignment and Closing (BRAC) decision by the U.S. Congress. Most of the tanks went to Fort Benning as a result of this action. The Patton Museum has been completely remodeled and tells the story of General Patton and Army Leadership. A few tanks remain outside and inside as part of the new exhibits.
					</p>
					<p>
						<span class="question">Can we have a tour of the Gold Vault?</span><br />
						No. Tours of the Gold Vault are not allowed. Stopping to take photographs of the Gold Vault is strictly prohibited. A model of the Gold Vault that was used in the movie "Goldfinger" is on display in the Museum Store.
					</p>
					<p>
						<span class="question">Can I eat in the museum?</span><br />
						While the gift shop sells snacks and drinks, there is no food allowed in the museum. There is a picnic area directly behind the museum for students and visitors to use. There is an inclement weather location for eating brown bag lunches for students only that can be provided within the museum. This space must be reserved in advance.
					</p>
					<p>
						<span class="question">Are students and visitors allowed on or in the tanks?</span><br />
						No, students and visitors are not allowed to climb on or in the tanks. A fall from a tank can cause serious injury.
					</p>
					<p>
						<span class="question">Can students and visitors touch the objects in the Museum?</span><br />
						No, Museum objects may not be touched so they can be preserved for future visitors.
					</p>
					<p>
						<span class="question">Can I visit the WWII Barracks?</span><br />
						No, the WWII Barracks is not finished and it is not open to students and visitors at this time.
					</p>
					<p>
						<span class="question">Can I have a guided tour of the museum?</span><br />
						Not at this time. The museum is designed to be self-guided.
					</p>
					<p>
						<span class="question">Where is General Patton buried?</span><br />
						General Patton is buried in Hamm, Luxembourg.
					</p>
					<p>
						<span class="question">How old was General Patton when he died?</span><br />
						General Patton was 60 years old.
					</p>
					<p>
						<span class="question">What does the "S" stand for in General George S. Patton, Jr.?</span><br />
						General Patton's middle name was Smith.
					</p>
				
				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

