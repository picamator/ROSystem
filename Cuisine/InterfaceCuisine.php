<?php
/**
 * Interface for Cuisine
 */

namespace ROSystem\Cuisine;

interface InterfaceCuisine
{
	/**
	 * Gets Name
	 * 
	 * @return String
	 */
	public function getName();
	
	/**
	 * Gets Meal List
	 * 
	 * @return SplObjectStorage
	 */
	public function getMealList();
	
	/**
	 * Add Meal
	 * 
	 * @param \ROSystem\Meal\InterfaceMeal $meal
	 * @return self
	 */
	public function addMeal(\ROSystem\Meal\InterfaceMeal $meal);
	
	/**
	 * Convert object to Array
	 * 
	 * @return Array
	 */
	public function toArray();
}
