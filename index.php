<?php

require __DIR__.'/controllers/MainController.php';

if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = "home";
}

$controller = new MainController();

if ($currentPage == 'store')
{
    $controller->affichePageStore();
}
else if ($currentPage == 'home') {
    $controller->affichePageHome();
}
else if ($currentPage == 'products') {
    $controller->affichePageProducts();
}

else if ($currentPage == 'about') {
        $controller->affichePageAbout();
    }
