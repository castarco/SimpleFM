<?php
namespace SoliantTest\SimpleFM\Result;

use Soliant\SimpleFM\Result\FmResultSet;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-06-27 at 21:16:44.
 */
class FmResultSetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FmResultSet
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $url = '';
        $error = '';
        $errorText = '';
        $errorType = '';
        $count = null;
        $fetchSize = null;
        $rows = [];

        $this->object = new FmResultSet(
            $url,
            $error,
            $errorText,
            $errorType,
            $count,
            $fetchSize,
            $rows
        );
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Soliant\SimpleFM\Result\FmResultSet::getCount
     * @todo   Implement testGetCount().
     */
    public function testGetCount()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soliant\SimpleFM\Result\FmResultSet::getFetchSize
     * @todo   Implement testGetFetchSize().
     */
    public function testGetFetchSize()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soliant\SimpleFM\Result\FmResultSet::getRows
     * @todo   Implement testGetRows().
     */
    public function testGetRows()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Soliant\SimpleFM\Result\FmResultSet::toArray
     * @todo   Implement testToArray().
     */
    public function testToArray()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
