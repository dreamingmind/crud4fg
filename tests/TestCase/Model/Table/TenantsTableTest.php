<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TenantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TenantsTable Test Case
 */
class TenantsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TenantsTable
     */
    protected $Tenants;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Tenants',
        'app.Warehouses',
        'app.OldUsers',
        'app.Addresses',
        'app.Items',
        'app.People',
        'app.ShippingAccounts',
        'app.Stores',
        'app.TenantContracts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tenants') ? [] : ['className' => TenantsTable::class];
        $this->Tenants = TableRegistry::getTableLocator()->get('Tenants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Tenants);

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
