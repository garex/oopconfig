<?php
/**
 * Abstract module, that implements common method like "get()"
 *
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright 2013 Ustimenko Alexander <a@ustimen.co>
 */
abstract class OopConfig_Modules_Abstract {

	/**
	 * @var array
	 */
	private $_result = array();

	/**
	 * Get resulting array
	 *
	 * @return array
	 */
	public function get() {
		foreach (get_object_vars($this) as $name => $var) {
			if (!($var instanceof OopConfig_Modules_Abstract_Part)) {
				continue;
			}
			if (!$var->hasValue()) {
				continue;
			}
			$this->_result[$name] = $var->toArray();
		}
		return $this->_result;
	}

	/**
	 * Sets associative value into result
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return OopConfig_Modules_Abstract
	 */
	protected function _setAssoc($key, $value) {
		$this->_result[$key] = $value;
		return $this;
	}


}