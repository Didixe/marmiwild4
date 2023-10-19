<?php

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$recipeController = new App\Controllers\RecipeController();
if ('/' === $urlPath) {
    echo $recipeController->browse();
} elseif ('/show' === $urlPath && isset($_GET['id'])) {
    echo $recipeController->show($_GET["id"]);
} elseif ('/add' === $urlPath) {
    echo $recipeController->add();
} elseif ('/delete' === $urlPath && isset($_GET['id']) ) {
    echo $recipeController->delete($_GET["id"]);
} elseif ('/update' === $urlPath && isset($_GET['id']) ) {
    echo $recipeController->update($_GET["id"]);
}
 else {
    header('HTTP/1.1 404 Not Found');
}
