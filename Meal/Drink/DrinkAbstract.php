<?php
/**
 * Abstract class for Drink
 */

namespace ROSystem\Meal\Drink;

abstract class DrinkAbstract extends \ROSystem\Meal\MealAbstract implements InterfaceDrink,  \ROSystem\Meal\InterfaceMeal
{
	/**
	 * Option List
	 * 
	 * @var SplObjectStorage 
	 */
	protected $option_list;
	
    /**
	 * Name 
	 *
	 * @var String
	 */
	protected $name;
    
    public function __construct() 
    {
        $this->option_list = new \SplObjectStorage();
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
	 * Gets Option List
	 * 
	 * @return SplObjectStorage
	 */
	public function getOptionList()
	{
		$this->option_list;
	}
	
	/**
	 * Add Option
	 * 
	 * @param \ROSystem\Meal\Option\InterfaceOption $option
	 * @return self
	 */
	public function addOption(\ROSystem\Meal\Option\InterfaceOption $option)
	{
		$this->option_list->attach($option);
		
		return $this;
	}
	
	/**
	 * Convert object to Array
	 * 
	 * @return Array
	 */
	public function toArray()
	{
		$result 		 	= parent::toArray();
		$result['option'] 	= null;
		
		foreach($this->option_list as $key => $value) {
			$result['option'][$key][] = $value->toArray();
		}
		
		return $result;
	}
}
