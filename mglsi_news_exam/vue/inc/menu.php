<div id="menu">
	<ul>
		<li><a href="index.php">ACCUEIL</a></li>			
		<?php foreach ($categories as $categorie): ?>
			<li><a href="index.php?action=categorie&id=<?= $categorie->id ?>"><?= $categorie->libelle ?></a></li>
		<?php endforeach ?>
		<li><a href="index.php?profil=ADMIN"> ADMIN </a></li>
	</ul>

	
</div>