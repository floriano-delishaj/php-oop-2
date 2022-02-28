<?php

include_once "classes/user.php";
include_once "classes/food.php";
include_once "classes/product.php";
include_once "classes/creditCard.php";

$users = [];
$users [] = new User("Floriano","Delishaj","2001/02/03","via ciao","213132312",true);



$foods = [];
$foods [] = new Food(10.4,"bueno","kinder","2024/04/21",10);

$creditCards = [];
$creditCards = new creditCard("Pippo", "Rossi", 12312241232, "2024-04-03",321);

var_dump($users);
var_dump($foods);
