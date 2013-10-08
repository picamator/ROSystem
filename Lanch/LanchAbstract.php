<?php
/**
 * Abstract class for Lanch
 */

namespace ROSystem\Lanch;

abstract class LanchAbstract implements InterfaceLanch
{	
	/**
	 * Drink
	 *
	 * @var \ROSystem\Meal\Drink 
	 */
	protected $drink;
	
	/**
	 * Main Course
	 *
	 * @var \ROSystem\Cuisine
	 */
	protected $main_course;
	
	/**
	 * Dessert
	 *
	 * @var \ROSystem\Meal
	 */
	protected $dessert;
	
	/**
	 * Sets Drink
	 * 
	 * @param \ROSystem\Meal\InterfaceMeal $drink
	 * @return self
	 */
	public function setDrink(\ROSystem\Meal\InterfaceMeal $drink)
	{
		$this->drink = $drink;
		
		return $this;
	}
	
	/**
	 * Sets MainCourse
	 * 
	 * @param \ROSystem\Cuisine\InterfaceCuisine $main_course
	 * @return self
	 */
	public function setMainCourse(\ROSystem\Cuisine\InterfaceCuisine $main_course)
	{
		$this->main_course = $main_course;
		
		return $this;
	}
	
	/**
	 * Sets Dessert
	 *
	 * @param \ROSystem\Meal\InterfaceMeal $dessert
	 * @return self
	 */
	public function setDessert(\ROSystem\Meal\InterfaceMeal $dessert)
	{
		$this->dessert = $dessert;
		
		return $this;
	}
	
	/**
	 * Convert object to Array
	 * 
	 * @return Array
	 */
	public function toArray()
	{
		$result['lanch'] = array(
			'drink' 		=> $this->toArrayItem($this->drink),
			'main_course' 	=> $this->toArrayItem($this->main_course),
			'dessert' 		=> $this->toArrayItem($this->dessert)
		);
		
		return $result;
	}
	
	/**
	 * Convert object to Array
	 * Addind check is_object
	 *
	 * @return Array|null	
	 */
	protected function toArrayItem($item)
	{
		return (is_object($item))? $item->toArray(): null; 
	}
}
