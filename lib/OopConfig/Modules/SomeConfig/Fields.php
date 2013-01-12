<?php
/**
 * @see OopConfig_Modules_SomeConfig
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright 2013 Ustimenko Alexander <a@ustimen.co>
 */
class OopConfig_Modules_SomeConfig_Fields extends OopConfig_Modules_Abstract_Part {

	/**
	 * @var OopConfig_Modules_SomeConfig
	 */
	public $up;

	/**
	 * Add field
	 * @param string $field
	 * @return OopConfig_Modules_SomeConfig_Fields
	 */
	public function add($field) {
		return $this->_add($field);
	}

	/**
	 * Add distinct field
	 * @param string $field
	 * @return OopConfig_Modules_SomeConfig_Fields
	 */
	public function addDistinct($field) {
		return $this->add('DISTINCT ' . $field);
	}

}