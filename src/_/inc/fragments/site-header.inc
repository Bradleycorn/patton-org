<?php 
	if (empty($PageQuote)) {
		$PageQuote = "Better to fight for something than to live for nothing";
	}
?>

<header id="SiteHeader" class="container">
	<div class="row">
		<div id="SiteLogo" class="col-xs-3">
			<a href="/"><img src="/_/img/logos/site-logo.png" alt="General George Patton Museum" class="img-fluid" /></a>
		</div>
		<div id="HeaderBar" class="col-xs-9" >
			<div class="bar-wrapper">
				<div class="bar-content">
					<div class="quote">
						<?=$PageQuote;?>
						<span class="author">George S. Patton</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>