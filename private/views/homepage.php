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
				<span class="more">gebruikte programmertalen: <span class="HTML">HTML</span>, 
				<span class="CSS">CSS</span> & <span class="JS">JavaScript</span></span>
			</p>
			<button onclick="readMoreLess('item1')" class="read">Lees meer</button>
			<div class="links">
				<div class="link">
					<i class="fas fa-globe"></i><a href="">Bekijk live versie</a>
				</div>
				<div class="link">
					<i class="fab fa-github"></i><a href="">Bekijk op GitHub</a>
				</div>
			</div>
		</div>

		<div class="container-item" data-item="item2">
			<img src="<?php echo site_url('/images/image-frame-mobile-1.png') ?>" alt="">
			<h2>Opleidingspromo</h2>
			<p>Dit was een Opdracht voor Projectmagement Waarbij ik een landingspage moest maken om mijn opleiding te promoten
				<span class="dots">...</span><br>
				<span class="more">
					Wat heb ik hiervan geleerd?<br>
					- Wat je zo al op een landingspage moet laten terug komen<br>
					- een werkende email formulier maken<br>

					Gebruikte talen: <span class="HTML">HTML</span>, <span class="CSS">CSS</span> & <span class="PHP">PHP</span>.

						
				</span>
			</p>
			<button onclick="readMoreLess('item2')" class="read">Lees meer</button>
			<div class="links">
				<div class="link">
					<i class="fas fa-globe"></i><a href="">Bekijk live versie</a>
				</div>
				<div class="link">
					<i class="fab fa-github"></i><a href="">Bekijk op GitHub</a>
				</div>
			</div>
		</div>

		<div class="container-item" data-item="item3">
			<img src="<?php echo site_url('/images/image-frame-mobile-2.png')?>" alt="">
			<h2>The Wall</h2>
			<p>
				Een project waarbij je in teams van twee, een Instagram achtige website moest maken, 
				je mocht bij dit project zelf bepalen voor welke doelgroep je dit ging maken
				<span class="dots">...</span><br>
				<span class="more">De vereisten voor dit project waren.<br>
					De gebruiker moet zich kunnen registreren, kunnen inloggen en uitloggen. Gebruikers kunnen een afbeelding uploaden met een beschrijving.
					Wat ik van dit project heb geleerd is dat een goede communicatie heel belangrijk is in een samenwerkings project.<br>
					Dit project is gemaakt in: <span class="HTML">HTML</span>, <span class="CSS">CSS</span>, <span class="PHP">PHP</span> & <span class="JS">JavaScript</span>. 
					Mijn bijdrage aan dit project bestaat uit het maken van: Het registratie script(PHP), het upload script(PHP), het tonen van posts vanuit een database(PHP), 
					het uitloggen(PHP) en het schuivende menu (HTML, CSS) 
				</span>
			</p>
			<button onclick="readMoreLess('item3')" class="read">Lees meer</button>
			<div class="links">
				<div class="link disabled">
					<i class="fas fa-globe"></i><a href="">Bekijk live versie</a>
				</div>
				<div class="link">
					<i class="fab fa-github"></i><a href="">Bekijk live versie</a>
				</div>
			</div>
		</div>
	</div>
</a>
<?php $this->stop(); ?>