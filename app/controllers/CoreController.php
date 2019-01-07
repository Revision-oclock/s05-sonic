<?php

class CoreController
{
    protected function show($viewName, $viewVars = [])
    {
        include __DIR__ . '/../views/header.view.php';
        include __DIR__ . '/../views/' . $viewName . '.view.php';
        include __DIR__ . '/../views/footer.view.php';
    }

}
