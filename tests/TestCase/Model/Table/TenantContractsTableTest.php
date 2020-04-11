<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TenantContractsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TenantContractsTable Test Case
 */
class TenantContractsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TenantContractsTable
     */
    protected $TenantContracts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TenantContracts',
        'app.Tenants',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TenantContracts') ? [] : ['className' => TenantContractsTable::class];
        $this->TenantContracts = TableRegistry::getTableLocator()->get('TenantContracts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TenantContracts);

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
