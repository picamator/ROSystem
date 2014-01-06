<?php
/**
 * Interface for Meal
 */

namespace ROSystem\Meal;

interface InterfaceMeal
{
	/**
	 * Gets Name
	 * 
	 * @return String
	 */
	public function getName();
	
	/**
	 * Sets Price
	 * 
	 * @param Number $price
	 * @return self
	 */
	public function setPrice($price);
	
	/**
	 * Gets Price
	 * 
	 * @return Number
	 */
	public function getPrice();
	
	/**
	 * Convert object to Array
	 * 
	 * @return Array
	 */
	public function toArray();
}
