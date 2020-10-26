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
                <a href="<?php echo url('project', ['id' => $project['project_id']])?>"><button class="read">Bekijk project</button></a>
                <div class="links">
                    <?php if (!empty($project['live_link'])):?>
                        <div class="link">
                            <i class="fas fa-globe icon"></i><a href="<?php echo $project['live_link']?>" target="_blank">Bekijk live versie</a>
                        </div>
                    <?php endif ?>
                    <?php if (!empty($project['github_link'])):?>
                        <div class="link">
                            <i class="fab fa-github icon"></i><a href="<?php echo $project['github_link']?>" target="_blank">Bekijk op GitHub</a>
                        </div>
                    <?php endif?>
                </div>

            </div>
        <?php endforeach ?>
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
        <div class="skills__download">
            <a class="download__button" href="<?php echo site_url('/downloads/Curriculum-Vitea-Fabian-Hendriks.pdf')?>" download><i class="fas fa-download"></i> Download mijn CV</a>
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