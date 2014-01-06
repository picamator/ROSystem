<?php
/**
 * ======================================
 *  Restaurant Ordering System (ROSystem)
 *	Prototype
 * 	Usage Example
 * ======================================
 */
namespace ROSystem;
use ROSystem\Meal\Drink;
use ROSystem\Meal\Dessert;
use ROSystem\Meal\Option;
use ROSystem\Meal\MainCourse;

// Autoload
require_once ('./src/Autoload.php');

// - Server: "What do you like to drink?"
$lanch = new Lanch\Business(); 

// - Client: "Coke, please"
$drink = new Drink\Coke();

// - Server: "With ice?"
// - Client: "Sure"
$option = new Option\IceCubes();
$drink->addOption($option);
$lanch->setDrink($drink);

// ... in 3 minutes late
// - Server: "Are you ready to make order?"
// - Client: "I'd like polish cuisine please"
$main_course = new MainCourse\PolishDish(); 
$cuisine 	 = new Cuisine\PolishCuisine();
$cuisine->addMeal($main_course);
$lanch->setMainCourse($cuisine);

// - Server: "The dissert from the chef is a free."
// - Client: "Excellent!"
$dessert = new Dessert\IceCream();
$lanch->setDessert($dessert);

// - Client: "I'm ready for the bill"
// - Server: "Please..."
$order = $lanch->toArray();
var_dump($order);