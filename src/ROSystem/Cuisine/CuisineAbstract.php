<?php
/**
 * Abstract class for Cuisine
 */

namespace ROSystem\Cuisine;

abstract class CuisineAbstract implements InterfaceCuisine
{
	/**
	 * Name 
	 *
	 * @var String
	 */
	protected $name;
    
    /**
	 * Meal List
	 * 
	 * @var SplObjectStorage 
	 */
	protected $meal_list;
	
    public function __construct() 
    {
        $this->meal_list = new \SplObjectStorage();
    }
    
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
	 * Gets Meal List
	 * 
	 * @return SplObjectStorage
	 */
	public function getMealList()
	{
		$this->meal_list;
	}
	
	/**
	 * Add Meal
	 * 
	 * @param \ROSystem\Meal\InterfaceMeal $meal
	 * @return self
	 */
	public function addMeal(\ROSystem\Meal\InterfaceMeal $meal)
	{
		$this->meal_list->attach($meal);
		
		return $this;
	}
	
	/**
	 * Convert object to Array
	 * 
	 * @return Array
	 */
	public function toArray()
	{
		$result = array(
			'name'  => $this->getName(),	
			'meal'  => null
		);
	
		foreach($this->meal_list as $key => $value) {
			$result['meal'][$key][] = $value->toArray();
		}
		
		return $result;
	}
}
