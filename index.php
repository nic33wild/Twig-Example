<?php

require_once 'vendor/autoload.php';
require 'MonExtension.php';

//Routing
if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    // set proper default value if it was not set
    $page = 'home';
}

//Récupère les films
function movies (){
    $pdo = new PDO('mysql:dbname=exampletwig;host=localhost', 'nicola', 'casa');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $movies = $pdo->query('SELECT * FROM Movies ORDER BY id DESC LIMIT 10');
    return $movies;
}


//Rendu du template
$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
$twig = new Twig_Environment($loader, [
    'cache' => false, //__DIR__ . '/tmp'
]);

//Extend twig with a function
// $twig->addFilter(new Twig_SimpleFilter('markdown', function($value){
//     return \Michelf\MarkdownExtra::defaultTransform($value); 
// }, ['is_safe' => ['html']]));

//Extend twig with a filtre

// if ($page === 'home'){
//     //require 'home.php';
//     echo $twig->render('home.twig', ['person' => [
//         'name' => 'Nicola',
//         'age' => 34
//         ]]);
// }

$twig->addExtension(new MonExtension());

$twig->addExtension(new Twig_Extensions_Extension_Text());

switch ($page){
    case 'contact':
        echo $twig->render('contact.twig');
        break;
    case 'home':
        echo $twig->render('home.twig', ['movies' => movies()]);
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo $twig->render('404.twig');
}
    