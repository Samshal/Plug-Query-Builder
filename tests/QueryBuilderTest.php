<?php
/**
* QueryBuilderTest
* This file is part of the Plug-Query-Builder class
* @see QueryBuilder::__construct() for a detailed explanation of the method
* the tests below are conducted on
*
* @author Samuel Adeshina <samueladeshina73@gmal.com> <http://samshal.github.io>
* @version 0.0.1
* @since version 0.0.1, 4th January 2016
* @copyright 2016 - Samuel Adeshina <samueladeshina73@gmail.com>
* @license MIT
*/
namespace Plug\DBAL\QueryBuilder;

class QueryBuilderTest extends \PHPUnit_Framework_TestCase
{
	public function testSelect()
	{
		$queryBuilder = new QueryBuilder();
		$select_all_string = $queryBuilder
							->select()
							->build();
		$select_columns_string = $QueryBuilder
							->select("col1", "col2", "col3", "col4")
							->build();
		assertEquals($select_all_string, "SELECT *");
		assertEquals($select_columns_string, "SELECT col1, col2, col3, col4");
	}

	public function testInsert()
	{
		$queryBuilder = new QueryBuilder();
		$insert_string = $queryBuilder->insert()->build();

		assetEquals($insert_string, "INSERT");
	}
}
?>