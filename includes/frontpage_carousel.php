<!-- Frontpage Carousel -->
<script>
	$(document).ready(function(){
		$('#carousel').bcSwipe({ threshold: 50 });
	})
</script>


<div id="carousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel" data-slide-to="0" class="active"></li>
		<li data-target="#carousel" data-slide-to="1"></li>
		<li data-target="#carousel" data-slide-to="2"></li>
		<li data-target="#carousel" data-slide-to="3"></li>
		<li data-target="#carousel" data-slide-to="4"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img class="img-responsive" src="./assets/1.jpg" alt="...">
			<div class="carousel-caption">
				<h3>All types of sites built</h3>
				<p>Static or Fully-Responsive</p>
			</div>
		</div>
		<div class="item">
			<img class="img-responsive" src="./assets/2.jpg" alt="...">
			<div class="carousel-caption">
				<h3>Small Business and Personal Websites</h3>
				<p>From &#163;300</p>
			</div>
		</div>
		<div class="item">
			<img class="img-responsive" src="./assets/3.jpg" alt="...">
			<div class="carousel-caption">
				<h3>Hosting Packages</h3>
				<p>From &#163;5/month</p>
			</div>
		</div>
		<div class="item">
			<img class="img-responsive" src="./assets/4.jpg" alt="...">
			<div class="carousel-caption">
				<h3>Custom Websites</h3>
				<p>From &#163;500</p>
			</div>
		</div>
		<div class="item">
			<img class="img-responsive" src="./assets/5.jpg" alt="...">
			<div class="carousel-caption">
				<h3>Website Upgrades and Repairs</h3>
				<p>Revitalise and update older existing sites</p>
			</div>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>