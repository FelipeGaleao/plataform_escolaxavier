<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DailybooksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DailybooksTable Test Case
 */
class DailybooksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DailybooksTable
     */
    public $Dailybooks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Dailybooks',
        'app.Courses',
        'app.Subjects',
        'app.Students'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Dailybooks') ? [] : ['className' => DailybooksTable::class];
        $this->Dailybooks = TableRegistry::getTableLocator()->get('Dailybooks', $config);
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
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
