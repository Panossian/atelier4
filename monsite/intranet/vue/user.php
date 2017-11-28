<section>
	<br />
	<h2 >Gestion des utilisateurs de l'intranet:</h2>
	<?php
		require_once 'modele/sql/droitManager.php';
		require_once 'modele/sql/userManager.php';
		require_once 'controleur/connexionBDD.php';
			
		
		//$boutonrouge = SupprimerUtilisateurParId($db, $id);
	
		if(isset($_POST["delete"]))
		{
			extract($_POST);
			supprimerUser($db, $userId);
		}
	
		$users = getListUser($db);
	?>

	<div>
		<p>Liste des utilisateurs presents en base :<br /><br /></p>
		<table>
			<tr>
				<th>Id</th>
				<th>Droit</th>
				<th>Login</th>
				<th>Password</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Age</th>
				<th>Sexe</th>
				<th></th>
				</tr>
				<?php
					foreach($users as $user)
					{
				?>
				<tr>
					<td><?php echo $user['id']; ?></td>
					<td><?php 

						$droit = getDroitById($db, (int) $user['droit']);
					
						echo $droit['nom']; 
					
					?></td>
					<td><?php echo $user['login']; ?><br /></td>
					<td><?php echo $user['password']; ?><br /></td>
					<td><?php echo $user['nom']; ?><br /></td>
					<td><?php echo $user['prenom']; ?><br /></td>
					<td><?php echo $user['age']; ?><br /></td>
					<td><?php echo $user['sexe']; ?><br /></td>
					<td>
						<a href="#"><img src="vue/images/modifier.png" alt="Bouton modifier" title="Modifier"/></a>
						<form action="" method="POST">
							<input type="submit" name="delete" value="Supprimer"/>
							<input type="hidden" name="userId" value="<?php echo $user['id'];?>"/>
						</form>
						<!--<a href="$boutonrouge"><img src="vue/images/supprimer.png" alt="Bouton supprimer" title="Supprimer"/></a>-->
					</td>
				</tr>
			<?php
					}
			?>
				
		</table>
		<a href="#"><img src="vue/images/ajouter.png" alt="Bouton ajouter" title="Ajouter"/><p>Ajouter</p></a>
	</div>
</section> 