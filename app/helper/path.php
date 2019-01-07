<?php
function getAbsoluteURL($relativeURL)
{
    $relativePath = ltrim($relativeURL, '/');

    return $_SERVER['BASE_URI'] . '/' . $relativeURL;
}