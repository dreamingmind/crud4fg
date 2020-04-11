<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LegacyUsersUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LegacyUsersUsersTable Test Case
 */
class LegacyUsersUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LegacyUsersUsersTable
     */
    protected $LegacyUsersUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LegacyUsersUsers',
        'app.UserManageds',
        'app.UserManagers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LegacyUsersUsers') ? [] : ['className' => LegacyUsersUsersTable::class];
        $this->LegacyUsersUsers = TableRegistry::getTableLocator()->get('LegacyUsersUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LegacyUsersUsers);

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
