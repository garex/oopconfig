<?php
/**
 * @see OopConfig_Modules_SomeConfig
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright  2013 Ustimenko Alexander <a@ustimen.co>
 */
class OopConfig_Modules_SomeConfig_Where extends OopConfig_Modules_Abstract_Part {

	/**
	 * @var OopConfig_Modules_SomeConfig
	 */
	public $up;

	/**
	 * Checks if field has provided value
	 * @param string $field
	 * @param mixed $value
	 * @return OopConfig_Modules_SomeConfig_Where
	 */
	public function fieldIs($field, $value) {
		return $this->_setAssoc($field, $value);
	}

}