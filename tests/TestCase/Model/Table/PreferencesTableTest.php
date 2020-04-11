<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PreferencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PreferencesTable Test Case
 */
class PreferencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PreferencesTable
     */
    protected $Preferences;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Preferences',
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
        $config = TableRegistry::getTableLocator()->exists('Preferences') ? [] : ['className' => PreferencesTable::class];
        $this->Preferences = TableRegistry::getTableLocator()->get('Preferences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Preferences);

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
