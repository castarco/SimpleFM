<?php
namespace SoliantTest\SimpleFM\Parser;

use Soliant\SimpleFM\Parser\FmLayoutParser;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-06-27 at 20:56:26.
 */
class FmLayoutParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FmLayoutParser
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $xml = '';
        $commandDebugUrl = '';
        $this->object = new FmLayoutParser($xml, $commandDebugUrl);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Soliant\SimpleFM\Parser\FmLayoutParser::parse
     * @todo   Implement testParse().
     */
    public function testParse()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
