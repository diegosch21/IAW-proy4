<?php
/**
 * BooksBookFixture
 *
 */
class BooksBookFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'book_id' => array('type' => 'integer', 'null' => false),
		'r_book_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'book_id' => 1,
			'r_book_id' => 1
		),
	);
}
