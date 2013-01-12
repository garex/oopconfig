<?php
class SomeConfigTest extends PHPUnit_Framework_TestCase {

	public function testCanGenerateFields() {

		$manual = array(
			'fields' => array('field1', 'DISTINCT field2'),
		);

		$auto   = OopConfig::create()->someConfig
			->fields->add('field1')->addDistinct('field2')->up
			->get()
		;

		$this->assertEquals($manual, $auto);
	}

	public function testCanGenerateFieldsWhereAndOrder() {

		$manual = array(
			'fields' => array('field1', 'DISTINCT field2'),
			'where'  => array('field' => 123),
			'order'  => array('created', 'field3 DESC'),
		);

		$auto   = OopConfig::create()->someConfig
			->fields->add('field1')->addDistinct('field2')->up
			->where->fieldIs('field', 123)->up
			->order->add('created', 'field3 DESC')->up
			->get()
		;

		$this->assertEquals($manual, $auto);
	}

}