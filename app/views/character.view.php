<?php

$character = $viewVars['character'];
?>
<div class="d-flex flex-column">
<?php
    echo '<div>';
    echo '<img src="'.$_SERVER['BASE_URI'] . '/images/' . $character->getPicture() . '">';
    echo '<div class="name" href="/character/'.$character->getId().'">'. $character->getName() . '</div>'; // On va créer une nouvelle route, dont un url va ressembler à : /character/23 (23 est un id)
    echo '<span class="col-12 .col-md-8">' . $character->getDescription() . '</span> ';
    echo '</div>';
?>
</div>

<span class="badge badge-pill badge-primary"><a class="deco" href="<?= getAbsoluteURL(''); ?>"">Accueil</a></span>
