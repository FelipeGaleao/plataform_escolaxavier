<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\DailybooksBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\DailybooksBehavior Test Case
 */
class DailybooksBehaviorTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Behavior\DailybooksBehavior
     */
    public $Dailybooks;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Dailybooks = new DailybooksBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dailybooks);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
