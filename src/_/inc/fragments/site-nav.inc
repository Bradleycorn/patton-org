<nav class="navbar navbar-light">
	<header id="SiteNavHeader" class="hidden-md-up">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#SiteMenu">
			<span class="fa fa-bars"></span>
		</button>

		<h3 id="CurrentPage"><?=$PageTitle;?></h3>
	</header>
	<div class="collapse navbar-toggleable-sm" id="SiteMenu">

		<ul class="nav nav-pills nav-stacked">
			<li class="nav-item">
				<a class="nav-link <?=getActivePageClass("Get Directions");?>" href="/visit/directions.php">
					Get Directions
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?=getActivePageClass("Exhibits");?>" href="/exhibits/">
					Exhibits
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?=getActivePageClass(["Plan Your Visit", "Nearby Attractions", "Groups & Field Trips"]);?>" href="/visit/">
					Plan Your Visit
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?=getActivePageClass("Education");?>" href="/education/">
					Education
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?=getActivePageClass("The Museum Store");?>" href="http://redhillcutlery.com/product-category/general-patton-museum-566/">
					The Museum Store
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?=getActivePageClass("Volunteer");?>" href="/volunteer/">
					Volunteer
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?=getActivePageClass("Donate");?>" href="/donate/">
					Donate
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?=getActivePageClass("Contact Us");?>" href="/contact/">
					Contact
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?=getActivePageClass("FAQ");?>" href="/faq/">
					FAQ
				</a>
			</li>
		</ul>
	</div>

	<div id="SiteNavFooter" class="foundation-seal hidden-sm-down">
		<img src="/_/img/logos/foundation-logo.png" class="img-fluid" />
		Presented by the<br />
		Patton Museum Foundation
	</div>

</nav>