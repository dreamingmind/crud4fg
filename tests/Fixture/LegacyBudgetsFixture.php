<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LegacyBudgetsFixture
 */
class LegacyBudgetsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'use_budget' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => 'whether a $ budget applies', 'precision' => null],
        'budget' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'monthly $ budget'],
        'remaining_budget' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'remaining budget'],
        'use_item_budget' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => 'whether an item budget applies', 'precision' => null],
        'item_budget' => ['type' => 'smallinteger', 'length' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'monthly item count limit', 'precision' => null],
        'remaining_item_budget' => ['type' => 'smallinteger', 'length' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'remaining item count', 'precision' => null],
        'budget_month' => ['type' => 'string', 'length' => 7, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '\'0x/20xx\' month the budget is good for', 'precision' => null],
        'current' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => 'indicates the current active budget', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'use_budget' => 1,
                'budget' => 1,
                'remaining_budget' => 1,
                'use_item_budget' => 1,
                'item_budget' => 1,
                'remaining_item_budget' => 1,
                'budget_month' => 'Lorem',
                'current' => 1,
                'created' => '2020-04-11 04:27:12',
                'modified' => '2020-04-11 04:27:12',
            ],
        ];
        parent::init();
    }
}
