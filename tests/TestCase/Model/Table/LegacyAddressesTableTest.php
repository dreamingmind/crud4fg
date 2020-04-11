<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LegacyAddressesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LegacyAddressesTable Test Case
 */
class LegacyAddressesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LegacyAddressesTable
     */
    protected $LegacyAddresses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LegacyAddresses',
        'app.Users',
        'app.EpmsVendors',
        'app.TaxRates',
        'app.Customers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LegacyAddresses') ? [] : ['className' => LegacyAddressesTable::class];
        $this->LegacyAddresses = TableRegistry::getTableLocator()->get('LegacyAddresses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LegacyAddresses);

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
