<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LegacyItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LegacyItemsTable Test Case
 */
class LegacyItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LegacyItemsTable
     */
    protected $LegacyItems;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LegacyItems',
        'app.Vendors',
        'app.Locations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LegacyItems') ? [] : ['className' => LegacyItemsTable::class];
        $this->LegacyItems = TableRegistry::getTableLocator()->get('LegacyItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LegacyItems);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
