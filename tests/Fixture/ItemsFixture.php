<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ItemsFixture
 */
class ItemsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'char', 'length' => 128, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'item_code' => ['type' => 'char', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'alternate_item_code' => ['type' => 'char', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'description' => ['type' => 'char', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'active' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'item_unit' => ['type' => 'char', 'length' => 128, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Label name of the stocking unit (ea, box, etc)', 'precision' => null],
        'non_stock' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'reorder_quantity' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'reorder_trigger_level' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tenant_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'old_item_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'name' => ['type' => 'index', 'columns' => ['name'], 'length' => []],
            'item_code' => ['type' => 'index', 'columns' => ['item_code'], 'length' => []],
            'alternate_item_code' => ['type' => 'index', 'columns' => ['alternate_item_code'], 'length' => []],
            'name_2' => ['type' => 'index', 'columns' => ['name'], 'length' => []],
            'item_code_2' => ['type' => 'index', 'columns' => ['item_code'], 'length' => []],
            'alternate_item_code_2' => ['type' => 'index', 'columns' => ['alternate_item_code'], 'length' => []],
            'tenant_id' => ['type' => 'index', 'columns' => ['tenant_id'], 'length' => []],
            'name_3' => ['type' => 'index', 'columns' => ['name'], 'length' => []],
            'item_code_3' => ['type' => 'index', 'columns' => ['item_code'], 'length' => []],
            'alternate_item_code_3' => ['type' => 'index', 'columns' => ['alternate_item_code'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'items_ibfk_1' => ['type' => 'foreign', 'columns' => ['tenant_id'], 'references' => ['tenants', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
                'name' => '',
                'item_code' => '',
                'alternate_item_code' => '',
                'description' => '',
                'active' => 1,
                'item_unit' => '',
                'non_stock' => 1,
                'reorder_quantity' => 1,
                'reorder_trigger_level' => 1,
                'tenant_id' => 1,
                'created' => '2020-04-11 04:27:11',
                'modified' => '2020-04-11 04:27:11',
                'old_item_id' => 1,
            ],
        ];
        parent::init();
    }
}
