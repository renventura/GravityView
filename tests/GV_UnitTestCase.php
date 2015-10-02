<?php

class GV_UnitTestCase extends WP_UnitTestCase {

	/**
	 * @var GF_UnitTest_Factory
	 */
	var $factory;

	function setUp() {
		parent::setUp();

		/* Remove temporary tables which causes problems with GF */
		remove_all_filters( 'query', 10 );

		/* Ensure the database is correctly set up */
		@GFForms::setup_database();

		$this->factory = new GF_UnitTest_Factory( $this );
	}

}