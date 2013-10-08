<?php
/**
 * Interface for Lanch
 */

namespace ROSystem\Lanch;

interface InterfaceLanch
{	
	/**
	 * Sets Drink
	 * 
	 * @param \ROSystem\Meal\InterfaceMeal $drink
	 * @return self
	 */
	public function setDrink(\ROSystem\Meal\InterfaceMeal $drink);
	
	/**
	 * Sets MainCourse
	 * 
	 * @param \ROSystem\Cuisine\InterfaceCuisine $main_course
	 * @return self
	 */
	public function setMainCourse(\ROSystem\Cuisine\InterfaceCuisine $main_course);
	
	/**
	 * Sets Dessert
	 *
	 * @param \ROSystem\Meal\InterfaceMeal $dessert
	 * @return self
	 */
	public function setDessert(\ROSystem\Meal\InterfaceMeal $dessert);
	
	/**
	 * Convert object to Array
	 * 
	 * @return Array
	 */
	public function toArray();
}
