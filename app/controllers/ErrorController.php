<?php

class ErrorController
{
    public function page404()
    {
        include __DIR__ . '/../views/error.view.php';
        http_response_code(404);
    }
}