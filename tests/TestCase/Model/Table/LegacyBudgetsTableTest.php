<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LegacyBudgetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LegacyBudgetsTable Test Case
 */
class LegacyBudgetsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LegacyBudgetsTable
     */
    protected $LegacyBudgets;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LegacyBudgets',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LegacyBudgets') ? [] : ['className' => LegacyBudgetsTable::class];
        $this->LegacyBudgets = TableRegistry::getTableLocator()->get('LegacyBudgets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LegacyBudgets);

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
