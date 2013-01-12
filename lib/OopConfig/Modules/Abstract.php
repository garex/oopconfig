<?php
/**
 * Abstract module, that implements common method like "get()"
 *
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright  2013 Ustimenko Alexander <a@ustimen.co>
 */
abstract class OopConfig_Modules_Abstract {

	/**
	 * Get resulting array
	 *
	 * @return array
	 */
	public function get() {
		$result = array();
		foreach (get_object_vars($this) as $name => $var) {
			if (!($var instanceof OopConfig_Modules_Abstract_Part)) {
				continue;
			}
			if (!$var->hasValue()) {
				continue;
			}
			$result[$name] = $var->toArray();
		}
		return $result;
	}

}