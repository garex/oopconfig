<?php
/**
 * Proof of concept test for some config example module
 *
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright 2013 Ustimenko Alexander <a@ustimen.co>
 */
class SomeConfigTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var OopConfig_Modules_SomeConfig
	 */
	public $someConfig;

	public function setUp() {
		$this->someConfig = OopConfig::create()->someConfig;
	}

	public function testSimpleConfigWithFieldsKey() {

		$manual = array(
			'fields' => array('field1', 'DISTINCT field2'),
		);

		$auto   = $this->someConfig
			->fields->add('field1')->addDistinct('field2')->up
			->get()
		;

		$this->assertEquals($manual, $auto);
	}

	public function testFlatConfigWithFieldsWhereAndOrderKeys() {

		$manual = array(
			'fields' => array('field1', 'DISTINCT field2'),
			'where'  => array('field' => 123),
			'order'  => array('created', 'field3 DESC'),
		);

		$auto   = $this->someConfig
			->fields->add('field1')->addDistinct('field2')->up
			->where->fieldIs('field', 123)->up
			->order->add('created', 'field3 DESC')->up
			->get()
		;

		$this->assertEquals($manual, $auto);
	}

}