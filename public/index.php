<?php 
require __DIR__ . '/../vendor/autoload.php';

include __DIR__ . '/../app/helper/path.php';

include __DIR__ . '/../app/controllers/CoreController.php';
include __DIR__ . '/../app/controllers/ErrorController.php';
include __DIR__ . '/../app/controllers/MainController.php';

include __DIR__ . '/../app/utils/DBData.php';

include __DIR__ . '/../app/models/CoreModel.php';
include __DIR__ . '/../app/models/CharacterModel.php';


$router = new AltoRouter;

$router->setBasePath($_SERVER['BASE_URI']);


// routes 
$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/creators', 'MainController#creators', 'developpers_list'); // developpers_list
$router->map('GET', '/character/[i:id]', 'MainController#character', 'single_character'); // single_character

$match = $router->match();


if ($match === false) {
    $controllerName = 'ErrorController';
    $methodName = 'page404';
} else {
    $ControllerViewDetails = explode('#', $match['target']);

    $controllerName = $ControllerViewDetails[0];
    $methodName = $ControllerViewDetails[1];
}

$controller = new $controllerName($router);

$controller->$methodName($match['params']);


/*

*/