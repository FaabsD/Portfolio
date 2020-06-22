<?php $this->layout('website'); ?>

<?php $this->start('header'); ?>
<div class="intro-screen">
	<div class="head-text">
		<h1>Fabian D. Hendriks
			<br>Opmaak en Webdevelopment
		</h1>
	</div>
	<a href="#projects" class="arrow-down"><i class="fas fa-chevron-down"></i></a>
</div>
<?php $this->stop(); ?>
<?php $this->start('projects'); ?>
<a name="projects">
	<div class="projects-container">
		<div class="container-item" data-item="item1">
			<img src="<?php echo site_url('/images/image-frame-1.png') ?>" alt="">
			<h2>De Fruitmachine</h2>
			<p>Deze opdracht was voor één van de Front-end lessen.
				De opdracht was om een fruitmachine te maken waarbij er willekeurige afbeeldingen op een rij worden geladen
				<span class="dots">...</span><br>
				<span class="more">gebruikte programmertalen: HTML, CSS & JavaScript</span>
			</p>
			<button onclick="readMoreLess('item1')" class="read">Lees meer</button>
			<div class="links">
				<div class="link">
					<i class="fas fa-globe icon"></i><a href="">Bekijk live versie</a>
				</div>
				<div class="link">
					<i class="fab fa-github icon"></i><a href="">Bekijk op GitHub</a>
				</div>
			</div>
		</div>
		<div class="container-item" data-item="item2">
			<img src="<?php echo site_url('/images/image-frame-mobile-1.png') ?>" alt="">
			<h2>De Fruitmachine</h2>
			<p>Dit was een Opdracht voor Projectmagement Waarbij ik een landingspage moest maken om mijn opleiding te promoten
				<span class="dots">...</span><br>
				<span class="more">
					Wat heb ik hiervan geleerd?<br>
					- Wat je zo al op een landingspage moet laten terug komen<br>
					- een werkende email formulier maken<br>

					Gebruikte talen: HTML, CSS & PHP.

						
				</span>
			</p>
			<button onclick="readMoreLess('item2')" class="read">Lees meer</button>
			<div class="links">
				<div class="link">
					<i class="fas fa-globe icon"></i><a href="">Bekijk live versie</a>
				</div>
				<div class="link">
					<i class="fab fa-github icon"></i><a href="">Bekijk op GitHub</a>
				</div>
			</div>
		</div>
	</div>
</a>
<?php $this->stop(); ?>