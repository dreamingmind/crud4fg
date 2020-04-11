<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComsTable Test Case
 */
class ComsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComsTable
     */
    protected $Coms;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Coms',
        'app.Addresses',
        'app.OldAddresses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Coms') ? [] : ['className' => ComsTable::class];
        $this->Coms = TableRegistry::getTableLocator()->get('Coms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Coms);

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
