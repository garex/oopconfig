<?php
class SomeConfigTest extends PHPUnit_Framework_TestCase {

	public function testSelectField() {

		$manual = array(
			'fields' => array('field1', 'DISTINCT field2'),
		);

		$auto   = OopConfig::create()->someConfig
			->fields->add('field1')->addDistinct('field2')->up
			->get()
		;

		$this->assertEquals($manual, $auto);
	}

}