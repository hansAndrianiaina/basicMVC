<?php

require "controllers/controller.php";
require "models/coffee.php";

class CoffeController extends Controller
{
    function render()
    {
        $result = null;
        if(isset($_GET['id']))
        {
            $coffee = new CoffeeModel();
            $result = $coffee->get($_GET['id']);
            echo $result->getName();
        }
        else 
        {
            $coffee = new CoffeeModel();
            $result = $coffee->list();             
            require 'views/coffee.php';
        }
    } 
}

?>