<?php

$charactersData = $viewVars['characterData'];

?>

<h1 id="title">Le monde de Sonic !</h1>
<div class="container">
<table>
    <?php
        foreach($charactersData as $character)
        {
            echo '<tr class="container">';
            echo '<td id="image" class="col-8 .col-md-8"><img src="images/' . $character->getPicture() . '"></td>';
            echo '<td id="name" class="col-6 .col-md-4"> <a href="./character/'.$character->getId().'">'. $character->getName() . '</a></td>'; // On va créer une nouvelle route, dont un url va ressembler à : /character/23 (23 est un id)
            echo '<td id="description" class="col-12 .col-md-8">' . $character->getDescription() . '</td>';
            echo '</tr>';
        }
        ?>
</table>

</div>

<span class="badge badge-pill badge-primary"><a href="<?= getAbsoluteURL('creators'); ?>"">Créateurs</a></span>