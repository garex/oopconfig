<?php
abstract class OopConfig_Modules_Abstract_Part {

	/**
	 * @var OopConfig_Modules_Abstract
	 */
	public $up;

	/**
	 * @var array
	 */
	private $_result = array();

	/**
	 * Indicates whether we touch result or not.
	 * To distinguish between $_result = null and just nothing.
	 * @var boolean
	 */
	private $_isChanged = false;

	public function __construct(OopConfig_Modules_Abstract $up) {
		$this->up = $up;
	}

	/**
	 * Hiding some public methods from IDE and code completion
	 */
	public function __call($name, $args) {
		if (in_array($name, array('toArray', 'hasValue'))) {
			$name = '_' . $name;
			return $this->$name();
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
	 * @return boolean
	 */
	protected function _hasValue() {
		return $this->_isChanged;
	}

	/**
	 * @return OopConfig_Modules_Abstract_Part
	 */
	private function _afterChange() {
		$this->_isChanged = true;
		return $this;
	}

	/**
	 * Adds value into result
	 * @param string $value
	 * @return OopConfig_Modules_Abstract_Part
	 */
	protected function _add($value) {
		$this->_result[] = $value;
		return $this->_afterChange();
	}

	/**
	 * Sets associative value into result
	 * @param string $key
	 * @param mixed $value
	 * @return OopConfig_Modules_Abstract_Part
	 */
	protected function _setAssoc($key, $value) {
		$key = trim($key);
		$this->_result[$key] = $value;
		return $this->_afterChange();
	}

}