<?php

// Home page
$app->get('/', function () use ($app) {
    $bikes = $app['dao.bike']->findAll();
    return $app['twig']->render('index.html.twig', array('bikes' => $bikes));
});