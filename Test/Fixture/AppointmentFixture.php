<?php
/**
 * AppointmentFixture
 *
 */
class AppointmentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'appointment';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'paciente' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'especialista' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'place' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'paciente' => 'Lorem ipsum dolor sit amet',
			'especialista' => 'Lorem ipsum dolor sit amet',
			'fecha' => '2013-11-02',
			'place' => 'Lorem ipsum dolor sit amet'
		),
	);

}