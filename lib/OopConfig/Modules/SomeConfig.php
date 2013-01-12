<?php
/**
 * Example config module, that allows us to get basic "fields", "where", "order" values
 *
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright  2013 Ustimenko Alexander <a@ustimen.co>
 */
class OopConfig_Modules_SomeConfig extends OopConfig_Modules_Abstract {

	/**
	 * @var OopConfig_Modules_SomeConfig_Fields
	 */
	public $fields;

	public function __construct() {
		$this->fields = new OopConfig_Modules_SomeConfig_Fields($this);
	}

}