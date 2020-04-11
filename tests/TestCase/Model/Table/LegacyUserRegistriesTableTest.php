<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LegacyUserRegistriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LegacyUserRegistriesTable Test Case
 */
class LegacyUserRegistriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LegacyUserRegistriesTable
     */
    protected $LegacyUserRegistries;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LegacyUserRegistries',
        'app.Users',
        'app.Nodes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LegacyUserRegistries') ? [] : ['className' => LegacyUserRegistriesTable::class];
        $this->LegacyUserRegistries = TableRegistry::getTableLocator()->get('LegacyUserRegistries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LegacyUserRegistries);

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
