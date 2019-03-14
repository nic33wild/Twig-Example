<?php

require_once 'vendor/autoload.php';

//Routing
if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    // set proper default value if it was not set
    $page = 'home';
}

//Rendu du template
$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
$twig = new Twig_Environment($loader, [
    'cache' => false, //__DIR__ . '/tmp'
]);


// if ($page === 'contact'){
//     //require 'home.php';
//     echo $twig->render('contact.twig');
// }
// if ($page === 'home'){
//     //require 'home.php';
//     echo $twig->render('home.twig', ['person' => [
//         'name' => 'Nicola',
//         'age' => 34
//         ]]);
// }

switch ($page){
    case 'contact':
        echo $twig->render('contact.twig');
        break;
    case 'home':
        echo $twig->render('home.twig');
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo $twig->render('404.twig');
}
    