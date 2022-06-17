<?php

    $url = $_SERVER['REQUEST_URI'];
    $parsed_url = parse_url($url);

    // foreach($parsed_url as $key=>$value)
    // {
    //     echo $key." : ".$value." | ";
    // }

    if($parsed_url["path"] == "/coffee")
    {
        require "controllers/coffee.php";
        $coffee_controller = new CoffeController();
        $coffee_controller->render();
    }
    else 
        require "views/home.php";
?>