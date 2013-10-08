<?php
/**
 * Interface for Drink
 */

namespace ROSystem\Meal\Drink;

interface InterfaceDrink
{
	/**
	 * Gets Option List
	 * 
	 * @return SplObjectStorage
	 */
	public function getOptionList();
	
	/**
	 * Add Option
	 * 
	 * @param \ROSystem\Meal\Option\InterfaceOption $option
	 * @return self
	 */
	public function addOption(\ROSystem\Meal\Option\InterfaceOption $option);
}
