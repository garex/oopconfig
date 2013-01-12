<?php
abstract class OopConfig_Modules_Abstract_Part {

	/**
	 * @var OopConfig_Modules_Abstract
	 */
	public $up;

	/**
	 * @var array
	 */
	private $_result;

	public function __construct(OopConfig_Modules_Abstract $up) {
		$this->up = $up;
	}

	public function __call($name, $args) {
		if ('toArray' == $name) {
			return $this->_toArray();
		}
		throw new Exception('Method ' . $name . ' is undefined in ' . get_class($this));
	}

	/**
	 * @return array
	 */
	protected function _toArray() {
		return $this->_result;
	}

	/**
	 * Adds value into result
	 * @param string $value
	 * @return OopConfig_Modules_Abstract_Part
	 */
	protected function _add($value) {
		$this->_result[] = $value;
		return $this;
	}

}