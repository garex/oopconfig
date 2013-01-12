<?php
/**
 * @see OopConfig_Modules_SomeConfig
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright 2013 Ustimenko Alexander <a@ustimen.co>
 */
class OopConfig_Modules_SomeConfig_Order extends OopConfig_Modules_Abstract_Part {

	/**
	 * @var OopConfig_Modules_SomeConfig
	 */
	public $up;

	/**
	 * Order result by fields. Can take more than one argument
	 * @param string $field
	 * @return OopConfig_Modules_SomeConfig_Where
	 */
	public function add() {
		foreach (func_get_args() as $value) {
			$this->_add($value);
		}
		return $this;
	}
}