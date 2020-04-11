<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShippingAccountsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShippingAccountsTable Test Case
 */
class ShippingAccountsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ShippingAccountsTable
     */
    protected $ShippingAccounts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ShippingAccounts',
        'app.Tenants',
        'app.Addresses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ShippingAccounts') ? [] : ['className' => ShippingAccountsTable::class];
        $this->ShippingAccounts = TableRegistry::getTableLocator()->get('ShippingAccounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ShippingAccounts);

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
