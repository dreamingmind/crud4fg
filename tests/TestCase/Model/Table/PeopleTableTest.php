<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleTable Test Case
 */
class PeopleTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleTable
     */
    protected $People;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.People',
        'app.Tenants',
        'app.Warehouses',
        'app.OldUsers',
        'app.Addresses',
        'app.Images',
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
        $config = TableRegistry::getTableLocator()->exists('People') ? [] : ['className' => PeopleTable::class];
        $this->People = TableRegistry::getTableLocator()->get('People', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->People);

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
