<?php include 'include/header.html' ?>


<section id="accueil">
	<div>
		<h2>Accueil</h2>
	</div>

	<section class="sectionMain">
		<p>
			Bienvenue sur le portfolio de Jérôme Lefèvre<br>
			Vous trouverez ici son curriculum vitae détaillant ses compétences, 
			dîplomes et expériences ainsi que quelques unes de ses créations.
		</p>
	</section>

</section>

<section id="competences">
	<div>
		<h2>Compétences</h2>
	</div>

	<div class="sectionMain">
		<article>
			<h3 class="h3SecondStyle">Front-end</h3>
			<ul>
				<li>HTML5 (SVG)</li>
				<li>CSS3 (Responsive Design, Flexbox, Bootstrap)</li>
				<li>Javascript (JQuery/Ajax, Canvas)</li>
				<li>React Native</li>
			</ul>
		</article>
		<article>
			<h3 class="h3FirstStyle">Back-end</h3>
			<ul>
				<li>PHP5 (Composer, Silex)</li>
				<li>Drupal</li>
				<li>JAVA (Swing, J2EE)</li>
				<li>Python</li>
			</ul>
		</article>
		<article>
			<h3 class="h3SecondStyle">Environnement</h3>
			<ul>
				<li>Eclipse</li>
				<li>IntelliJ</li>
				<li>Atom</li>
				<li>Sublime Text</li>
			</ul>
		</article>
		<article>
			<ul>
				<li>Programmation procédurale et orientée objet</li>
				<li>Gestionnaire de production de projet : Maven</li>
				<li>Gestion de version : Git</li>
				<li>Diagrammes UML</li>
				<li>Connaissances de SGBD (MySQL)</li>
				<li>Gestionnaire de base de donnée : PhpMyAdmin, Workbench</li>
			</ul>
		</article>
	</div>
</section>


<section id="diplomes">
	<div>
		<h2>Diplômes</h2>
	</div>

	<div class="sectionMain">
		<article>
			<h3>2017-2018</h3>
			<ul>
				<li>Titre Professionnel Développeur Intégrateur Web (Bac +3)</li>
				<li>3wAcademy - Paris</li>
				<li>Développement de projets pour l'obtention du diplôme (PHP, Javascript, HTML/CSS)</li>
			</ul>
		</article>
		<article>
			<h3>2015-2016</h3>
			<ul>
				<li>Titre Professionnel en Conception et Développement Informatique (Bac +3)</li>
				<li>Greta - Chennevières</li>
				<li>Création et présentation d'une application de gestion de VLAN (JAVA)</li>
			</ul>
		</article>
		<article>
			<h3>2014-2015</h3>
			<ul>
				<li>BTS Services Informatiques aux Organisations option Solutions Logicielles et Applications Métiers</li>
				<li>Greta - Lognes</li>
				<li>Développement et présentations de projets pour l'obtention du diplôme (PHP, JAVA)</li>
			</ul>
		</article>
		<article>
			<h3>2011-2012</h3>
			<ul>
				<li>Bac STG option Gestion des Systèmes d'Information</li>
				<li>Lycée René Descartes - Champs sur Marne</li>
			</ul>
		</article>
	</div>
</section>


<section id="experience">
	<div>
		<h2>Expériences</h2>
	</div>

	<div class="sectionMain">
		<article>
			<h3>2017</h3>
			<ul>
				<li>Développeur PHP/Drupal : Yogarik</li>
				<li>Création d'une application mobile en React Native</li>
				<li>Développement de modules Drupal, theming</li>
			</ul>
		</article>
		<article>
			<h3>2016 - 3 mois</h3>
			<ul>
				<li>Développeur web Full Stack : DansLescalier</li>
				<li>Définition d'un cahier des charges et des besoins</li>
				<li>Création d'une plateforme d'échange de service</li>
				<li>Développement PHP, HTML/CSS, Base de donnée SQL</li>
			</ul>
		</article>
		<article>
			<h3>2015 - 3 mois</h3>
			<ul>
				<li>Développeur web Backend : Demain-le-Printemps</li>
				<li>Ajout de fonctionnalités sur le site web existant</li>
				<li>Développement PHP, HTML, Base de donnée SQL</li>
			</ul>
		</article>
		<article>
			<h3>2014 - 3 mois</h3>
			<ul>
				<li>Développeur web Full Stack : Les Coachs Associés</li>
				<li>Création d'une plateforme de gestion des contacts de l'entreprise</li>
				<li>Développement PHP, HTML/CSS, Base de donnée SQL</li>
			</ul>
		</article>
	</div>
</section>


<section id="portfolio">
	<div>
		<h2>Portfolio</h2>
	</div>

	<div class="sectionMain">
		<a href="../demineur"><img src="images/demineur.png" alt="Démineur"></a>
		<a href="../taskorder"><img src="images/taskorder.png" alt="Démineur"></a>
	</div>

</section>

<!--
<section id="contact">
	<div>
		<h2>Me contacter</h2>
	</div>

	<div class="sectionMain">
		<ul>
			<li>
				<i class="fa fa-map-marker" aria-hidden="true"></i> Torcy, France
			</li>
			<li>
				<i class="fa fa-envelope-o" aria-hidden="true"></i> Lefevre.jrm@gmail.com
			</li>
		</ul>

		<form action="./" method="POST">
			<input type="text" name="name" id="name" placeholder="Votre nom">

			<input type="email" name="mail" id="mail" placeholder="Votre e-mail">

			<textarea name="message" id="message" placeholder="Votre message"></textarea>

			<button type="submit">Envoyer</button>
		</form>
	</div>
</section>

-->



<?php include 'include/footer.html' ?>
