<?php
/**
 * ======================================
 *  Restaurant Ordering System (ROSystem)
 *	Prototype
 * 	Usage Example
 * ======================================
 */
namespace ROSystem;

require_once('Autoload.php');

// - Server: "What do you like to drink?"
$lanch = new Lanch\Business(); 

// - Client: "Coke, please"
$drink = new Meal\Drink\Coke();

// - Server: "With ice?"
// - Client: "Sure"
$option = new Meal\Option\IceCubes();
$drink->addOption($option);
$lanch->setDrink($drink);

// ... in 3 minutes late
// - Server: "Are you ready to make order?"
// - Client: "I'd like polish cuisine please"
$main_course = new Meal\MainCourse\PolishDish(); 
$cuisine 	 = new Cuisine\PolishCuisine();
$cuisine->addMeal($main_course);
$lanch->setMainCourse($cuisine);

// - Server: "The dissert from the chef is a free."
// - Client: "Excellent!"
$dessert = new Meal\Dessert\IceCream();
$lanch->setDessert($dessert);

// - Client: "I'm ready for the bill"
// - Server: "Please..."
$order = $lanch->toArray();
var_dump($order);