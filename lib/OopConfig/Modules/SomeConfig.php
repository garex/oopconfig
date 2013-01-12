<?php
/**
 * Example config module, that allows us to get basic "fields", "where", "order" values
 *
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright 2013 Ustimenko Alexander <a@ustimen.co>
 */
class OopConfig_Modules_SomeConfig extends OopConfig_Modules_Abstract {

	/**
	 * Set fields, that you want to select in the result
	 * @var OopConfig_Modules_SomeConfig_Fields
	 */
	public $fields;

	/**
	 * Filter result by adding conditions
	 * @var OopConfig_Modules_SomeConfig_Where
	 */
	public $where;

	/**
	 * Order result by setting columns
	 * @var OopConfig_Modules_SomeConfig_Order
	 */
	public $order;

	public function __construct() {
		$this->fields = new OopConfig_Modules_SomeConfig_Fields($this);
		$this->where  = new OopConfig_Modules_SomeConfig_Where($this);
		$this->order  = new OopConfig_Modules_SomeConfig_Order($this);
	}

}