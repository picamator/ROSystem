<?php
/**
 * Abstract class for Meal's Options
 * E.g. Ice or Lemon for Drink
 */

namespace ROSystem\Meal\Option;

abstract class OptionAbstract implements InterfaceOption
{
	/**
	 * Name 
	 *
	 * @var String
	 */
	protected $name;

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
	 * Convert object to Array
	 * 
	 * @return Array
	 */
	public function toArray()
	{
		return array(
			'name' => $this->getName()
		);
	}
}
