<?php

dump($viewVars['character']);
$character = $viewVars['character'];
?>
<table>
<?php
    echo '<tr>';
    echo '<td> <a href="/character/'.$character->getId().'">'. $character->getName() . '</a></td>'; // On va créer une nouvelle route, dont un url va ressembler à : /character/23 (23 est un id)
    echo '<td><img src="'.$_SERVER['BASE_URI'] . '/images/' . $character->getPicture() . '"></td>';
    echo '<td>' . $character->getDescription() . '</td>';
    echo '</tr>';
?>
</table>
