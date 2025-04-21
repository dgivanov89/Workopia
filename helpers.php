<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @return void
 * 
 */
function loadView($name)
{
    $viewPath = basePath("Views/{$name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View '{$name} not found!'";
    }
}

function loadPartials($name)
{
    $patrialPath = basePath("Views/partials/{$name}.php");

    if (file_exists($patrialPath)) {
        require $patrialPath;
    } else {
        echo "Partial '{$name} not found!'";
    }
}
