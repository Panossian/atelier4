<?php

        echo '<p>Voici les noms, prénoms, rôles, leurs sp&eacute;cialités, leurs salaires, leurs leitmotivs, 
        leurs dates d&#130;embauche et leurs signes-distinctifs: </p><br /> ';
		
        $xml = simplexml_load_file("./modele/xml/equipe.xml");

        $result = $xml->xpath("/relation/table/tuple");
      

        foreach($result as $element)
        {
            if($element->count()!=0)
            {
                foreach($element->children() as $data) echo $data.'<br />';
            }
           else echo $element;
           echo '<br/>';
        }
        
?>