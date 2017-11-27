<section>
	<div class="centrer">
		<h2>A propos</h2>
		<br />
		<p> L'équipe est compos&eacute; de
			<script> // Codable directement en PHP (sans JS nécessaire) comme en fin de ce fichier mais j'ai changé ici pour l'exemple :)
				<?php
					require 'modele/xml/prenomsMembreEquipe.php';
				?>

				document.write(nombre+" personnes : ");

				for (var i = 0; i < elements.length; i++)
				{
					document.write(elements[i][0]);

					if(i == elements.length - 2)
					{
						document.write(" et ");
					}
					else if(i < elements.length - 1)
					{
						document.write(", ");
					}
				}
				document.write(" !<br />");
			</script>
		</p>
		<br />  
		<?php
			require 'modele/xml/afficherEquipe.php';  // Traitement et affichage 100% PHP ici
		?>
		<br />  
    </div>
 </section> 