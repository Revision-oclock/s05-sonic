<?php

class CoreController
{
    protected function show($viewName, $viewVars = [])
    {
        include __DIR__ . '/../views/' . $viewName . '.view.php';
    }

}
