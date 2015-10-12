<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Trabajo.php";

    session_start();

    if (empty($_SESSION['my_resume']))
    {
        $_SESSION['my_resume'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app)
    {
        return $app['twig']->render('trabajos.html.twig', array('trabajos' => Trabajo::getAll()));
    });

    $app->post("/trabajos", function () use ($app)
    {
        $trabajo = new Trabajo($_POST['title'], $_POST['duties'], $_POST['company'], $_POST['location']);
        $trabajo->save();

        return $app['twig']->render('create_trabajo.html.twig', array('uno_mas' => $trabajo));
    });

    $app->post("/delete_trabajos", function () use ($app)
    {
        Trabajo::deleteAll();

        return $app['twig']->render('delete_trabajos.html.twig');
    });

    return $app;
 ?>
