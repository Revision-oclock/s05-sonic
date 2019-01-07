<?php
class MainController extends CoreController
{
    // Page Accueil : 
    public function home()
    {
        $dbData = new DBData;
        $charactersData = $dbData->getCharactersData();
        $this->show('home', 
        [
            'characterData' => $charactersData

        ]
        );
    }

    // Page des dev : 
    public function creators()
    {
        $this->show('creators');
    }

    //character detail : 
    public function character($params)
    {
        $dbData = new DBData;
        $character = $dbData->getCharacterData($params['id']);
        $this->show('character',
        [
            'character' => $character
        ]
        );
    }
}