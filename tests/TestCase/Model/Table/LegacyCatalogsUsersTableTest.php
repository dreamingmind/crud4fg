<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LegacyCatalogsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LegacyCatalogsUsersTable Test Case
 */
class LegacyCatalogsUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LegacyCatalogsUsersTable
     */
    protected $LegacyCatalogsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LegacyCatalogsUsers',
        'app.Catalogs',
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
        $config = TableRegistry::getTableLocator()->exists('LegacyCatalogsUsers') ? [] : ['className' => LegacyCatalogsUsersTable::class];
        $this->LegacyCatalogsUsers = TableRegistry::getTableLocator()->get('LegacyCatalogsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LegacyCatalogsUsers);

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
