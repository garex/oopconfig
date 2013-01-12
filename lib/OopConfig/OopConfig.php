<?php
/**
 * Get complex config array in OOP way with code completion and documentation.
 * Some kind of array builder.
 *
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright 2013 Ustimenko Alexander <a@ustimen.co>
 */
class OopConfig {

	/**
	 * @var OopConfig_Modules_SomeConfig
	 */
	public $someConfig;

	public function __construct() {
		$this->someConfig = new OopConfig_Modules_SomeConfig();
	}

	/**
	 * Static shorthand (always creates new instance!)
	 *
	 * @return OopConfig
	 */
	public static function create() {
		return new self();
	}

}