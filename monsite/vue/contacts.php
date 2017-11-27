<section> <!-- Compléter/supprimer et mettre en forme tout ce qui sera souhaité ! -->
    <p class="centrer">Contactez - <span>nous</span> ! nous vous répondrons dès que faire se peut ;)</p>
              
	<div class="centrer">
		<form method="post" action="index.php?p=contacts">
		<fieldset>
			<input type="text" name="nom" placeholder="Nom" required><br />
			<input type="email"  name="email" placeholder="Email"><br />
			<input type="tel"  name="telephone" placeholder="Téléphone"><br />
			<textarea  name="message" placeholder="Message" required></textarea><br />
			<button type="submit" class="envoyer">Envoyer</button><br />
			<?php
				require 'controleur/envoyerContact.php';
			?>
		</fieldset>  
		</form> 
	</div>
	
	<?php
		require 'vue/afficherContact.php';
	?>
		
	<div>
		<p>    
			<ul >
				<li>Des remarques sur le site ?<br /><br /></li>
				<li>Des erreurs à corriger ?<br /><br /></li>
				<li>Une information à nous communiquer ?<br /><br /></li>
			</ul>
		</p>
	</div>
</section> 