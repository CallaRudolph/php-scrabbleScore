<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/score", function() use ($app) {
        $scrabble_score = new Scrabble;
        $final_scrabble_score = $scrabble_score->scrabbleFinal($_GET['input']);
        return $app['twig']->render('score.html.twig', array('score' => $final_scrabble_score));
    });

    return $app;
?>
