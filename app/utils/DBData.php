<?php
class DBData
{
    
    private $dbh;

    public function __construct()
    {
        $configData = parse_ini_file(__DIR__.'/../config.conf');
        try {
            $this->dbh = new PDO(
                "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
                $configData['DB_USERNAME'],
                $configData['DB_PASSWORD'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) 
            );
        }
        catch(\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage().'<br>';
            echo '<pre>';
            echo $exception->getTraceAsString();
            echo '</pre>';
            exit;
        }
    }

    public function getCharactersData()
    {
        $characterDataQuery = '
            SELECT
                `id`,
                `name`,
                `description`,
                `picture`,
                `created_at`,
                `updated_at`,
                `type_Id`
            FROM `character`
            ORDER BY name
        ';

        $characterDataQueryStatement = $this->dbh->query($characterDataQuery);
        
        $characterDataQueryStatement->setFetchMode(
            PDO::FETCH_CLASS,
            'Character'
        );

        $characterData = $characterDataQueryStatement->fetchAll();


        return $characterData;
    }

    public function getCharacterData($id)
    {
        // SELECT (liste des champs) FROM (nom d'un table) [(des jointures)] WHERE (une condition remplie) [ORDER BY (nom de champ pour ordonner)]
        $characterDataQuery = '
            SELECT *
            FROM `character`
            WHERE `id` = '.$id;

        $characterDataQueryStatement = $this->dbh->query($characterDataQuery);
        
        $characterDataQueryStatement->setFetchMode(
            PDO::FETCH_CLASS,
            'Character'
        );

        $character = $characterDataQueryStatement->fetch();

        return $character;
    }
    
}

/* 
array:13 [▼
  0 => Character {#7 ▼
    -name: "Amy Rose"
    -description: "Amy Rose est une fille excessivement joyeuse et très amoureuse de Sonic et veut se marier avec lui. Elle se sert de son Piko Piko Hammer pour se battre. Sonic l ▶"
    -picture: "amy.jpg"
    -typeId: null
    #id: "2"
    #created_at: "2018-10-20 15:00:00"
    #updated_at: null
    +"type_Id": "1"
  }
  1 => Character {#8 ▼
    -name: "Big"
    -description: "Big le chat est un énorme felin qui vit dans la paix et la tranquillité avec son meilleur ami Froggy, au milieu de la jungle. Son passe-temps préféré et la pêch ▶"
    -picture: "big.jpg"
    -typeId: null
    #id: "6"
    #created_at: "2018-10-20 15:00:00"
    #updated_at: null
    +"type_Id": "1"
*/