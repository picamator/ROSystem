<?php
/**
 * Interface for Meal's Options
 * E.g. Ice or Lemon for Drink
 */

namespace ROSystem\Meal\Option;

interface InterfaceOption
{
	/**
	 * Gets Name
	 * 
	 * @return String
	 */
	public function getName();
	
	/**
	 * Convert object to Array
	 * 
	 * @return Array
	 */
	public function toArray();
}
