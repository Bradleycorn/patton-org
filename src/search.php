<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.inc'); ?>
<?php 
	$PageTitle = "Search Results"; 
	$PageQuote = "Success is how high you bounce when you hit bottom.";

	if (empty($_GET['q'])) {
		header("Location: http://".$_SERVER["HTTP_HOST"]);
		exit();
	}
?>
<!doctype html>
<html>
	<head>
		<?php require_once(FRAGMENTS."/head.inc"); ?>
		<!-- build:css(src) /_/css/search.css -->
		<link rel="stylesheet" href="/_/css/search.css" />
		<!-- endbuild -->

		<!-- Google Custom Search Code -->
		<script>
		  (function() {
		    var cx = '015398683628076242191:mmtuvde4nek';
		    var gcse = document.createElement('script');
		    gcse.type = 'text/javascript';
		    gcse.async = true;
		    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(gcse, s);
		  })();
		</script>


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

					<div class="search-results">
						<gcse:searchresults-only></gcse:searchresults-only>
					</div>
				</section>
			</div>
		</main>


		<?php require_once(FRAGMENTS."/footer.inc"); ?>

		<?php require_once(FRAGMENTS."/tail.inc"); ?>

	</body>
</html>

