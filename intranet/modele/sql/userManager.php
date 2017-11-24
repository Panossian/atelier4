<?php
	function getListUser($db)
	{
		$users = array();
		
		$q = $db->query('SELECT id,droit,login,password,nom,prenom,age,sexe FROM user ORDER BY login');
	
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$users[] = $donnees;
		}

		return $users;
	}

	function getUserByLoginAndPwd($db, $login, $pwd)
	{
		$q = $db->prepare('SELECT * FROM user WHERE login = :login AND password = :password');
		$q->execute(array('login' => $login,'password' => $pwd));
	
		$rslt = $q->fetch();

		return $rslt;
	}

	function getDroitById($db, $id)
	{
		$q = $db->prepare('DELETE id,nom,permission FROM droit WHERE id = :id');
		$q->execute(array('id' => $id));

		$droit = $q->fetch();
		
		return $droit;
	}

?>