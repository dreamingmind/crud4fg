<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LegacyPreferencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LegacyPreferencesTable Test Case
 */
class LegacyPreferencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LegacyPreferencesTable
     */
    protected $LegacyPreferences;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LegacyPreferences',
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
        $config = TableRegistry::getTableLocator()->exists('LegacyPreferences') ? [] : ['className' => LegacyPreferencesTable::class];
        $this->LegacyPreferences = TableRegistry::getTableLocator()->get('LegacyPreferences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LegacyPreferences);

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
