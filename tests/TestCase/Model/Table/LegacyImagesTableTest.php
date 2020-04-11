<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LegacyImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LegacyImagesTable Test Case
 */
class LegacyImagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LegacyImagesTable
     */
    protected $LegacyImages;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.LegacyImages',
        'app.Items',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LegacyImages') ? [] : ['className' => LegacyImagesTable::class];
        $this->LegacyImages = TableRegistry::getTableLocator()->get('LegacyImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->LegacyImages);

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
