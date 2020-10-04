<?php $this->layout('website'); ?>

<?php $this->start('header'); ?>
<div class="intro-screen">
	<div class="head-text">
		<h1>Fabian D. Hendriks
			<br>Opmaak en Webdevelopment
		</h1>
        <div class="head__links">
            <a href="#projects" class="head__link">Bekijk mijn werk</a>
            <a href="#contact" class="head__link">Neem contact op</a>
        </div>
	</div>
	<a href="#projects" class="arrow-down"><i class="fas fa-chevron-down"></i></a>
</div>
<?php $this->stop(); ?>
<?php $this->start('projects'); ?>
	<div id="projects" class="projects-container">
        <?php foreach ($projects as $project): ?>
            <div class="container-item">
                <img src="<?php echo site_url('/images/'.$project['image'])?>" alt="">
                <h2><?php echo $project['project_name']?></h2>
                <p>
                    <?php echo $project['description_short']?>
                    <span class="dots">...</span>
                </p>
                <button class="read">Bekijk project</button>
                <div class="links">
                    <?php if (!empty($project['live_link'])):?>
                        <div class="link">
                            <i class="fas fa-globe icon"></i><a href="<?php echo $project['live_link']?>" target="_blank">Bekijk live versie</a>
                        </div>
                    <?php endif ?>
                    <div class="link">
                        <i class="fab fa-github icon"></i><a href="<?php echo $project['github_link']?>" target="_blank">Bekijk op GitHub</a>
                    </div>
                </div>

            </div>
        <?php endforeach ?>
<!--
<!--		<div class="container-item" data-item="item3">-->
<!--			<img src="--><?php //echo site_url('/images/image-frame-mobile-2.png')?><!--" alt="">-->
<!--			<h2>The Wall</h2>-->
<!--			<p>-->
<!--				Een project waarbij je in teams van twee, een Instagram achtige website moest maken, -->
<!--				je mocht bij dit project zelf bepalen voor welke doelgroep je dit ging maken-->
<!--				<span class="dots">...</span><br>-->
<!--				<span class="more">De vereisten voor dit project waren.<br>-->
<!--					De gebruiker moet zich kunnen registreren, kunnen inloggen en uitloggen. Gebruikers kunnen een afbeelding uploaden met een beschrijving.-->
<!--					Wat ik van dit project heb geleerd is dat een goede communicatie heel belangrijk is in een samenwerkings project.<br>-->
<!--					Dit project is gemaakt in: <span class="HTML">HTML</span>, <span class="CSS">CSS</span>, <span class="PHP">PHP</span> & <span class="JS">JavaScript</span>. -->
<!--					Mijn bijdrage aan dit project bestaat uit het maken van: Het registratie script(PHP), het upload script(PHP), het tonen van posts vanuit een database(PHP), -->
<!--					het uitloggen(PHP) en het schuivende menu (HTML, CSS) -->
<!--				</span>-->
<!--			</p>-->
<!--			<button onclick="readMoreLess('item3')" class="read">Lees meer</button>-->
<!--			<div class="links">-->
<!--				<div class="no-link">-->
<!--					<i class="fas fa-globe icon"></i><a href="">Bekijk live versie</a>-->
<!--				</div>-->
<!--				<div class="link">-->
<!--					<i class="fab fa-github icon"></i><a href="https://github.com/FaabsD/proj-project-The-Wall" target="_blank">Bekijk op GitHub</a>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--		-->
<!--		<div class="container-item" data-item="item4">-->
<!--			<img src="--><?php //echo site_url('/images/image-frame-2.png')?><!--" alt="">-->
<!--			<h2>Covid-19 hulptool</h2>-->
<!--			<p>-->
<!--				Weer een project in samenwerkings verband. Dit keer moest je als team vanwege de Corona crisis een hulptool ontwikkelen.-->
<!--				<span class="dots">...</span><br>-->
<!--				<span class="more">-->
<!--					Voor dit project hadden wij als team de volledige vrijheid om iets te maken wat de mensen zou helpen in deze crisis.<br>-->
<!--					Wij kozen ervoor om een website te maken waarop mensen kunnen kijken wat de druktes in hun lokale winkels zijn. -->
<!--					Men kan de winkel opzoeken en dan vervolgens aangeven hoe druk het is. Als hun winkel er niet tussen staat, -->
<!--					dan kunnen ze een account aanmaken en inloggen om de ontbrekende winkel vervolgens zelf toe te voegen. -->
<!--					Dit is ook het eerste project geweest waarin we hebben gewerkt in een MVC structuur<br>-->
<!--					Mijn taken in dit project bestonden uit: het maken van de zoekfunctie(PHP), -->
<!--					Het maken en afhandelen van het registratie formulier(HTML, CSS, PHP), -->
<!--					Het toevoegen van een winkel(PHP) en het aangeven van de drukte(PHP).<br>-->
<!--					Dit project is gemaakt in: <span class="HTML">HTML</span>, <span class="CSS">CSS</span> & <span class="PHP">PHP</span>-->
<!--				</span>-->
<!--			</p>-->
<!--			<button onclick="readMoreLess('item4')" class="read">Lees meer</button>-->
<!--			<div class="links">-->
<!--				<div class="link">-->
<!--					<i class="fas fa-globe icon"></i><a href="http://19959.hosts1.ma-cloud.nl/covid/public/" target="_blank">Bekijk live versie</a>-->
<!--				</div>-->
<!--				<div class="link">-->
<!--					<i class="fab fa-github icon"></i><a href="https://github.com/FaabsD/Covid" target="_blank">Bekijk op GitHub</a>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!---->
<!--		<div class="container-item" data-item="item5">-->
<!--			<img src="--><?php //echo site_url('/images/image-frame-3.png')?><!--" alt="">-->
<!--			<h2>Bootstrap Oefening</h2>-->
<!--			<p>-->
<!--				Een eerste oefening om kennis te maken met Bootstrap-->
<!--				<span class="dots">...</span>-->
<!--				<span class="more">-->
<!--					Om kennis te maken met Bootstrap kregen wij deze opdracht waarin gebruik gemaakt moest worden van Bootstrap.<br>-->
<!--					Hierin is er gebruik gemaakt van: <span class="HTML">HTML</span>, <span class="CSS">(Bootstrap) CSS</span>-->
<!--					& <span class="JS">JavaScript(JQuery, Bootstrap.js)</span>-->
<!--				</span>-->
<!--			</p>-->
<!--			<button onclick="readMoreLess('item5')" class="read">Lees meer</button>-->
<!--			<div class="links">-->
<!--				<div class="link">-->
<!--					<i class="fas fa-globe icon"></i><a href="http://19959.hosts1.ma-cloud.nl/bewijzenmap/periode1.4/fro/LOTR/startDoc.html#" target="_blank">Bekijk live versie</a>-->
<!--				</div>-->
<!--				<div class="link">-->
<!--					<i class="fab fa-github icon"></i><a href="https://github.com/FaabsD/LOTR" target="_blank">Bekijk op GitHub</a>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!---->
<!--		<div class="container-item" data-item="item6">-->
<!--			<img src="--><?php //echo site_url('/images/image-frame-mobile-3.png')?><!--" alt="">-->
<!--			<h2>Ruimte voor werk</h2>-->
<!--			<p>-->
<!--				Hier komt toekomstig werk.-->
<!--				<!-- <span class="dots">...</span> -->-->
<!--				<!-- <span class="more"></span> -->-->
<!--			</p>-->
<!--			<!-- <button onclick="readMoreLess('item6')" class="read">Lees meer</button> -->-->
<!--			<!-- <div class="links">-->
<!--				<div class="link">-->
<!--					<i class="fas fa-globe"></i><a href="" target="_blank">Bekijk live versie</a>-->
<!--				</div>-->
<!--				<div class="link">-->
<!--					<i class="fab fa-github"></i><a href="" target="_blank">Bekijk op GitHub</a>-->
<!--				</div>-->
<!--			</div> -->-->
<!--		</div>-->
	</div>
<?php $this->stop(); ?>
<?php $this->start('about')?>
<div class="about">
	<img src="<?php echo site_url('/images/profile.jpg')?>" alt="Foto van Fabian Hendriks">
	<h2>Over mij:</h2>
	<p>
		<br>Mijn naam is Fabian Hendriks, ik ben 21 jaar en ik kom uit Zaandam.
		Naast het coderen ben ik ook graag bezig met opmaak en het bewerken van foto's.
		Ik ben een student aan de opleiding Media development aan het Mediacollege Amsterdam.
		Hiervoor heb ik ook al de opleiding Allround DTP-er gevolgd tevens bij Mediacollege Amsterdam,
		hierdoor weet ik ook al het één en ander van opmaak.
		Gedurende deze opleiding kwam ik in contact met HTML en CSS waardoor ik ook interesse kreeg in web development wardoor ik dacht "hey dit zou ik best met elkaar kunnen combineren."
		En zo ben ik op deze opleiding terecht gekomen.<br><br>
	</p>
	<h3>Vaardigheden:</h3>
	<p>
		Ik heb ervaring met de talen: <span class="marked">HTML</span>, <span class="marked">CSS</span>,
		<span class="marked">JavaScript</span> & <span class="marked">PHP</span>.<br>
		Ik heb ook veel ervaring met: <span class="marked">Adobe Photoshop</span>,
		<span class="marked">Illustrator</span>, <span class="marked">Indesign</span>
		& <span class="marked">XD</span>.
	</p>
	<div class="skills">
		<div class="skill">
			<strong>HTML</strong>
			<div class="skillbar">
				<div class="progress" style="width: 75%;"></div>
			</div>
		</div>

		<div class="skill">
			<strong>CSS</strong>
			<div class="skillbar">
				<div class="progress" style="width: 75%;"></div>
			</div>
		</div>

		<div class="skill">
			<strong>JavaScript</strong>
			<div class="skillbar">
				<div class="progress" style="width: 33%;"></div>
			</div>
		</div>
		<div class="skill">
			<strong>PHP</strong>
			<div class="skillbar">
				<div class="progress" style="width: 50%;"></div>
			</div>
		</div>
	</div>
</div>
<?php $this->stop()?>
<?php $this->start('contact')?>
<div id="contact" class="contact-form" id="form">
	<h2>Neem contact met mij op.</h2>
	<form action="<?php echo url('email.send')?>" method="post">
		<input type="text" name="fullname" value="" placeholder="Voor-Achternaam:" required>
		<input type="email" name="email" value="" placeholder="E-mail:" required>
		<input type="text" name="subject" value="" placeholder="Onderwerp:" required>
		<textarea name="message" value="" placeholder="Bericht:" cols="30" rows="10" required></textarea>
		<br>
		<input type="submit" value="Verzenden">
	</form>
</div>
<?php $this->stop()?>
<?php $this->start('footer')?>
	<?php if (isset($confirmation)):?>
			<?php echo $confirmation?>
		<?php endif ?>
	<div class="socials">
		<a href="https://www.linkedin.com/in/fabian-hendriks-7772601b1/" target="_blank"><i class="fab fa-linkedin"></i></a>
		<a href="https://github.com/FaabsD" target="_blank"><i class="fab fa-github"></i></a>
	</div>
	<div class="copy">
		<h4>&copy;<?php echo date("Y")?> Fabian Hendriks</h4>
	</div>
<?php $this->stop()?>
<!-- mail instelling config
	'MAIL' => [
		'SMTP_HOST' => '',
		'SMTP_USER' => '',
		'SMTP_PASSWORD' => '',
		'SMTP_PORT' => ''
	], -->