<?php
/**
 * Abstract class for Meal
 */

namespace ROSystem\Meal;

abstract class MealAbstract implements InterfaceMeal
{
	/**
	 * Name 
	 *
	 * @var String
	 */
	protected $name;
	
	/**
	 * Price 
	 *
	 * @var Number
	 */
	protected $price;

	/**
	 * Gets Name
	 * 
	 * @return String
	 */
	public function getName()
	{
		return $this->name;
	}
	
	/**
	 * Sets Price
	 * 
	 * @param Number $price
	 * @return self
	 */
	public function setPrice($price)
	{
		$this->price = $price;
		
		return $this;
	}
	
	/**
	 * Gets Price
	 * 
	 * @return Number
	 */
	public function getPrice()
	{
		return $this->price;
	}
	
	/**
	 * Convert object to Array
	 * 
	 * @return Array
	 */
	public function toArray()
	{
		return array(
			'name' 	=> $this->getName(),
			'price' => $this->getPrice()
		);
	}
}
