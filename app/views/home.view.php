<?php
$charactersData = $viewVars['characterData'];

?>
<h1>Sonic !</h1>

    <a href="creators"> Créateurs </a>
<table>
<?php
    foreach($charactersData as $character)
    {
        echo '<tr>';
        echo '<td> <a href="./character/'.$character->getId().'">'. $character->getName() . '</a></td>'; // On va créer une nouvelle route, dont un url va ressembler à : /character/23 (23 est un id)
        echo '<td><img src="images/' . $character->getPicture() . '"></td>';
        echo '<td>' . $character->getDescription() . '</td>';
        echo '</tr>';
    }
?>
</table>


