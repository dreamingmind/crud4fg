<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KitsTable Test Case
 */
class KitsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KitsTable
     */
    protected $Kits;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Kits',
        'app.Skus',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Kits') ? [] : ['className' => KitsTable::class];
        $this->Kits = TableRegistry::getTableLocator()->get('Kits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Kits);

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
